<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'team_position',
        'referal_code',
        'referal_by',
        'activation_balance',
        'status',
        'activation',
        'activation_date',
        'team_business',
        'is_royalty',
        'password',
        'under_user_id',
        'binary_processed'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function transactions()
    {
        return $this->hasMany(TransactionHistory::class);
    }

    public function investmentHistory()
    {
        return $this->hasMany(InvestmentHistory::class);
    }






    public function children()
    {
        return $this->hasMany(User::class, 'under_user_id', 'id');
    }

    public static function findFirstVacantNode($rootId)
    {
        // Fetch the root user
        $root = self::find($rootId);

        if (!$root) {
            throw new \Exception("Root user with ID $rootId not found.");
        }

        // Queue for BFS traversal
        $queue = collect([$root]);

        // Perform level-order traversal to find the first vacant position
        while ($queue->isNotEmpty()) {
            $current = $queue->shift(); // Get the first node in the queue

            // Check if left position is vacant
            if (!$current->children->where('team_position', 1)->first()) {
                return [
                    'under_user_id' => $current->id,
                    'team_position' => 1,
                ];
            }

            // Check if right position is vacant
            if (!$current->children->where('team_position', 2)->first()) {
                return [
                    'under_user_id' => $current->id,
                    'team_position' => 2,
                ];
            }

            // If both positions are filled, add children to the queue
            $queue->push(
                $current->children->where('team_position', 1)->first()
            );
            $queue->push(
                $current->children->where('team_position', 2)->first()
            );
        }

        // If no vacancy found (unlikely in a binary tree)
        throw new \Exception("No vacant position found.");
    }
    public function calculateTeamBusiness()
    {
        $leftBusiness = $this->calculateBusinessByPosition(1);
        $rightBusiness = $this->calculateBusinessByPosition(2);

        return [
            'left_business' => $leftBusiness,
            'right_business' => $rightBusiness,
        ];
    }
    private function calculateBusinessByPosition($position)
    {
        $business = 0;

        // Get the child for the specified position
        $child = $this->children()->where('team_position', $position)->first();

        if ($child) {
            // Add 1 for this user's direct business (or fetch actual business amount if applicable)
            $business += 1;

            // Recursively calculate the child's team business
            $business += $child->calculateTeamBusiness()['left_business'];
            $business += $child->calculateTeamBusiness()['right_business'];
        }

        return $business;
    }

    public function countTeamMembers()
    {
        return [
            'left' => $this->countChildrenByPosition(1),
            'right' => $this->countChildrenByPosition(2),
        ];
    }

    private function countChildrenByPosition($position)
    {
        $count = 0;

        // Get the child at the specified position
        $child = $this->children()->where('team_position', $position)
            ->where('activation', 1)->first();

        if ($child) {
            // Count this child
            $count += 1;

            // Recursively count the child's left and right children
            $teamCounts = $child->countTeamMembers();
            $count += $teamCounts['left'] + $teamCounts['right'];
        }

        return $count;
    }
}
