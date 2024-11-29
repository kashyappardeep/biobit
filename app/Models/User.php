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
}
