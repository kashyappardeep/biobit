<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\TransactionHistory;
use Illuminate\Support\Facades\DB;

class ActivationController extends Controller
{
    public function id_activate(Request $request)
    {
        DB::beginTransaction();
        // dd($request->all());
        try {

            $user_details = User::where('id', auth()->id())->first();

            $upline = User::where('referal_code', $user_details->referal_by)->first();

            $amount = 30;
            $per = $amount * 80 / 100;

            $upline->activation_balance += $per;
            $user_details->activation = 1;
            $upline->save();
            $user_details->save();


            $TransactionHistory = TransactionHistory::create([
                'user_id' => $upline->id,
                'amount' => $per,
                'to'  => $upline->id,
                'by'  => $user_details->id,
                'type' => "6",
                'tx_hash' => $request->transaction_hash,
            ]);
            DB::commit();
            return redirect()->back()->with('success', 'Your Id Activation successfully!');
            // return response()->json(['message' => 'Transaction successful', 'transaction' => $transaction], 200);
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json(['error' => 'Transaction failed', 'message' => $e->getMessage()], 500);
        }
    }
}
