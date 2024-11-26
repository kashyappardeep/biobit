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
        'team_business',
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


    public static function getLastVacantNode($sponsorId)
    {
        $lastNode = DB::select("
            WITH RECURSIVE tree AS (
                SELECT id, referal_by, under_user_id, team_position
                FROM users
                WHERE id = :sponsorId
                
                UNION ALL
                
                SELECT u.id, u.referal_by, u.under_user_id, u.team_position
                FROM users u
                INNER JOIN tree t ON u.id = t.under_user_id
            )
            SELECT id
            FROM tree
            WHERE id NOT IN (
                SELECT under_user_id FROM users
                WHERE team_position = '1' OR team_position = '2'
            )
            LIMIT 1
        ", ['sponsorId' => $sponsorId]);
        return $lastNode[0]->id ?? 5;
    }
}
