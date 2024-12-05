<?php

namespace App\Services;

use Web3\Web3;
use Web3\Contract;

class Web3Service
{
    protected $web3;
    protected $contract;

    public function __construct()
    {
        $rpcUrl = "https://mainnet.infura.io/v3/78a7d90e06394943bcdc4ecb1a106a68"; // Use the Infura URL or another RPC endpoint
        $this->web3 = new Web3($rpcUrl);

        // Get the contract ABI and address from the environment file
        $contractABI = json_decode('[{"inputs":[{"internalType":"address","name":"_usdtToken","type":"address"}],"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"user","type":"address"},{"indexed":false,"internalType":"uint256","name":"amount","type":"uint256"},{"indexed":false,"internalType":"address","name":"referredBy","type":"address"}],"name":"Deposited","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"recipient","type":"address"},{"indexed":false,"internalType":"uint256","name":"amount","type":"uint256"}],"name":"Withdrawn","type":"event"},{"inputs":[],"name":"authorizedAddress","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"creator","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"amount","type":"uint256"},{"internalType":"address","name":"referredBy","type":"address"}],"name":"deposit","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"user","type":"address"}],"name":"getUserDeposits","outputs":[{"components":[{"internalType":"uint256","name":"amount","type":"uint256"},{"internalType":"uint256","name":"timestamp","type":"uint256"}],"internalType":"struct USDTStack.Deposit[]","name":"","type":"tuple[]"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"isUser","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"_authorizedAddress","type":"address"}],"name":"setAuthorizedAddress","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"totalGlobalDeposits","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalGlobalWithdrawals","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalUsers","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"usdtToken","outputs":[{"internalType":"contract IERC20","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"userStacks","outputs":[{"internalType":"uint256","name":"totalDeposits","type":"uint256"},{"internalType":"uint256","name":"totalWithdrawals","type":"uint256"},{"internalType":"uint256","name":"joiningTimestamp","type":"uint256"},{"internalType":"address","name":"referredBy","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"recipient","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"withdraw","outputs":[],"stateMutability":"nonpayable","type":"function"}]');
        $contractAddress = '0x26763fB7092345fcfF2148DB0d981732dd3B927A';

        // Initialize the contract
        $this->contract = new Contract($this->web3->provider, $contractABI);
        $this->contract->at($contractAddress);
    }

    public function withdraw($recipient, $amount)
    {
        try {
            // Prepare the transaction data
            $gasPrice = $this->web3->eth->gasPrice(); // Set gas price
            $gasLimit = 21000; // Typical gas limit for a simple transfer; adjust as necessary

            // Encode the function parameters for the contract call
            $data = $this->contract->getData('withdraw', $recipient, $amount);

            // Sign the transaction with the private key of the contract creator
            $transaction = [
                'from' => '0xD1c6eB8454862ffbce5FB88F922ce3AB21d9cC2B',
                'to' => '0x26763fB7092345fcfF2148DB0d981732dd3B927A',
                'gas' => $gasLimit,
                'gasPrice' => $gasPrice,
                'value' => 0, // No ETH is being sent with this transaction
                'data' => $data,
            ];

            // Sign the transaction
            $signedTransaction = $this->web3->eth->accounts->signTransaction($transaction, '683f281565431c0609bde5a7962258619702d87ce4c2aaeecc40a656ec830490');

            // Send the signed transaction
            $this->web3->eth->sendRawTransaction($signedTransaction['rawTransaction'], function ($err, $txHash) {
                if ($err) {
                    // Handle the error properly
                    echo "Error: " . $err->getMessage();
                } else {
                    // Handle the transaction hash properly
                    echo "Transaction successful! Hash: " . $txHash;
                }
            });

            //return $txHash; // Return the transaction hash for tracking
        } catch (\Exception $e) {
            // Handle any exceptions here
            return ['error' => $e->getMessage()];
        }
    }
}
