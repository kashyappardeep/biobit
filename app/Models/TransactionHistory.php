<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionHistory extends Model
{
    protected $table = 'transaction_history';

    protected $fillable = [
        'user_id',
        'amount',
        'type',
        'status',
        'reward_id',
        'to',
        'by',
        'tx_hash',
        'cred_date',
        'withdrawal_address',
        'level',
        'Direct',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
