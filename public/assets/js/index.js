var contract = "0x26763fB7092345fcfF2148DB0d981732dd3B927A"; // ICO address
var abi = [{ "inputs": [{ "internalType": "address", "name": "_usdtToken", "type": "address" }], "stateMutability": "nonpayable", "type": "constructor" }, { "anonymous": false, "inputs": [{ "indexed": true, "internalType": "address", "name": "user", "type": "address" }, { "indexed": false, "internalType": "uint256", "name": "amount", "type": "uint256" }, { "indexed": false, "internalType": "address", "name": "referredBy", "type": "address" }], "name": "Deposited", "type": "event" }, { "anonymous": false, "inputs": [{ "indexed": true, "internalType": "address", "name": "recipient", "type": "address" }, { "indexed": false, "internalType": "uint256", "name": "amount", "type": "uint256" }], "name": "Withdrawn", "type": "event" }, { "inputs": [], "name": "authorizedAddress", "outputs": [{ "internalType": "address", "name": "", "type": "address" }], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "creator", "outputs": [{ "internalType": "address", "name": "", "type": "address" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "uint256", "name": "amount", "type": "uint256" }, { "internalType": "address", "name": "referredBy", "type": "address" }], "name": "deposit", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "user", "type": "address" }], "name": "getUserDeposits", "outputs": [{ "components": [{ "internalType": "uint256", "name": "amount", "type": "uint256" }, { "internalType": "uint256", "name": "timestamp", "type": "uint256" }], "internalType": "struct USDTStack.Deposit[]", "name": "", "type": "tuple[]" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "", "type": "address" }], "name": "isUser", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "_authorizedAddress", "type": "address" }], "name": "setAuthorizedAddress", "outputs": [], "stateMutability": "nonpayable", "type": "function" }, { "inputs": [], "name": "totalGlobalDeposits", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "totalGlobalWithdrawals", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "totalUsers", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "stateMutability": "view", "type": "function" }, { "inputs": [], "name": "usdtToken", "outputs": [{ "internalType": "contract IERC20", "name": "", "type": "address" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "", "type": "address" }], "name": "userStacks", "outputs": [{ "internalType": "uint256", "name": "totalDeposits", "type": "uint256" }, { "internalType": "uint256", "name": "totalWithdrawals", "type": "uint256" }, { "internalType": "uint256", "name": "joiningTimestamp", "type": "uint256" }, { "internalType": "address", "name": "referredBy", "type": "address" }], "stateMutability": "view", "type": "function" }, { "inputs": [{ "internalType": "address", "name": "recipient", "type": "address" }, { "internalType": "uint256", "name": "amount", "type": "uint256" }], "name": "withdraw", "outputs": [], "stateMutability": "nonpayable", "type": "function" }];
var usdt_contract = "0x7b0ED090071cb486a6ca12F16f49bd1135BDbeDA"; //  RBC BEP20 Address
var usdt_abi = [{ "inputs": [], "payable": false, "stateMutability": "nonpayable", "type": "constructor" }, { "anonymous": false, "inputs": [{ "indexed": true, "internalType": "address", "name": "owner", "type": "address" }, { "indexed": true, "internalType": "address", "name": "spender", "type": "address" }, { "indexed": false, "internalType": "uint256", "name": "value", "type": "uint256" }], "name": "Approval", "type": "event" }, { "anonymous": false, "inputs": [{ "indexed": true, "internalType": "address", "name": "previousOwner", "type": "address" }, { "indexed": true, "internalType": "address", "name": "newOwner", "type": "address" }], "name": "OwnershipTransferred", "type": "event" }, { "anonymous": false, "inputs": [{ "indexed": true, "internalType": "address", "name": "from", "type": "address" }, { "indexed": true, "internalType": "address", "name": "to", "type": "address" }, { "indexed": false, "internalType": "uint256", "name": "value", "type": "uint256" }], "name": "Transfer", "type": "event" }, { "constant": true, "inputs": [], "name": "_decimals", "outputs": [{ "internalType": "uint8", "name": "", "type": "uint8" }], "payable": false, "stateMutability": "view", "type": "function" }, { "constant": true, "inputs": [], "name": "_name", "outputs": [{ "internalType": "string", "name": "", "type": "string" }], "payable": false, "stateMutability": "view", "type": "function" }, { "constant": true, "inputs": [], "name": "_symbol", "outputs": [{ "internalType": "string", "name": "", "type": "string" }], "payable": false, "stateMutability": "view", "type": "function" }, { "constant": true, "inputs": [{ "internalType": "address", "name": "owner", "type": "address" }, { "internalType": "address", "name": "spender", "type": "address" }], "name": "allowance", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "payable": false, "stateMutability": "view", "type": "function" }, { "constant": false, "inputs": [{ "internalType": "address", "name": "spender", "type": "address" }, { "internalType": "uint256", "name": "amount", "type": "uint256" }], "name": "approve", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "payable": false, "stateMutability": "nonpayable", "type": "function" }, { "constant": true, "inputs": [{ "internalType": "address", "name": "account", "type": "address" }], "name": "balanceOf", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "payable": false, "stateMutability": "view", "type": "function" }, { "constant": true, "inputs": [], "name": "decimals", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "payable": false, "stateMutability": "view", "type": "function" }, { "constant": false, "inputs": [{ "internalType": "address", "name": "spender", "type": "address" }, { "internalType": "uint256", "name": "subtractedValue", "type": "uint256" }], "name": "decreaseAllowance", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "payable": false, "stateMutability": "nonpayable", "type": "function" }, { "constant": true, "inputs": [], "name": "getOwner", "outputs": [{ "internalType": "address", "name": "", "type": "address" }], "payable": false, "stateMutability": "view", "type": "function" }, { "constant": false, "inputs": [{ "internalType": "address", "name": "spender", "type": "address" }, { "internalType": "uint256", "name": "addedValue", "type": "uint256" }], "name": "increaseAllowance", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "payable": false, "stateMutability": "nonpayable", "type": "function" }, { "constant": false, "inputs": [{ "internalType": "uint256", "name": "amount", "type": "uint256" }], "name": "mint", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "payable": false, "stateMutability": "nonpayable", "type": "function" }, { "constant": true, "inputs": [], "name": "name", "outputs": [{ "internalType": "string", "name": "", "type": "string" }], "payable": false, "stateMutability": "view", "type": "function" }, { "constant": true, "inputs": [], "name": "owner", "outputs": [{ "internalType": "address", "name": "", "type": "address" }], "payable": false, "stateMutability": "view", "type": "function" }, { "constant": false, "inputs": [], "name": "renounceOwnership", "outputs": [], "payable": false, "stateMutability": "nonpayable", "type": "function" }, { "constant": true, "inputs": [], "name": "symbol", "outputs": [{ "internalType": "string", "name": "", "type": "string" }], "payable": false, "stateMutability": "view", "type": "function" }, { "constant": true, "inputs": [], "name": "totalSupply", "outputs": [{ "internalType": "uint256", "name": "", "type": "uint256" }], "payable": false, "stateMutability": "view", "type": "function" }, { "constant": false, "inputs": [{ "internalType": "address", "name": "recipient", "type": "address" }, { "internalType": "uint256", "name": "amount", "type": "uint256" }], "name": "transfer", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "payable": false, "stateMutability": "nonpayable", "type": "function" }, { "constant": false, "inputs": [{ "internalType": "address", "name": "sender", "type": "address" }, { "internalType": "address", "name": "recipient", "type": "address" }, { "internalType": "uint256", "name": "amount", "type": "uint256" }], "name": "transferFrom", "outputs": [{ "internalType": "bool", "name": "", "type": "bool" }], "payable": false, "stateMutability": "nonpayable", "type": "function" }, { "constant": false, "inputs": [{ "internalType": "address", "name": "newOwner", "type": "address" }], "name": "transferOwnership", "outputs": [], "payable": false, "stateMutability": "nonpayable", "type": "function" }];



let is_connected = false;
var upline = '0xD1c6eB8454862ffbce5FB88F922ce3AB21d9cC2B';

window.web3 = new Web3("https://bsc-dataseed.binance.org");

//for testnet

// window.web3 = new Web3("https://bscTestnet.llamarpc.com");
import {
    EthereumClient,
    w3mConnectors,
    w3mProvider,
    WagmiCore,
    WagmiCoreChains,
    WagmiCoreConnectors,
} from "https://unpkg.com/@web3modal/ethereum@2.6.2";

import {
    Web3Modal
} from "https://unpkg.com/@web3modal/html@2.6.2";

const {
    configureChains,
    createConfig,
    getAccount,
    getContract,
    readContract,
    writeContract,
    useContractWrite,
    isConnected,
    connect,
    watchAccount,
    fetchBalance,
    waitForTransaction,
    watchContractEvent,
    useAccount,
} = WagmiCore;

const {
    bscTestnet
} = WagmiCoreChains;

const chains = [bscTestnet];

const projectId = "713f1cdc14dd63bb5c03a9972525ab1f";
const {
    publicClient
} = configureChains(chains, [
    w3mProvider({
        projectId,
    }),
]);
const wagmiConfig = createConfig({
    autoConnect: true,
    connectors: w3mConnectors({
        projectId,
        chains,
    }),
    publicClient,
});

var account = getAccount();

const ethereumClient = new EthereumClient(wagmiConfig, chains);
const web3modal = new Web3Modal({
    projectId,
},
    ethereumClient
);

web3modal.setDefaultChain(bscTestnet);

web3modal.setTheme({
    themeMode: "dark",
    themeVariables: {
        "--w3m-font-family": "Roboto, sans-serif",
        "--w3m-accent-color": "#00d0ff",
    },
});

const unwatch = watchAccount(async (account) => {
    if (account.isConnected) {
        is_connected = true;
    } else {
        console.log("error not connected", account);
    }
});





document.addEventListener("DOMContentLoaded", async function () {

});




async function invest(usdtAmount) {
    console.log('usdtAmount', usdtAmount);
    $("#depositButton").text("Confirming");
    $("#depositButton").css({
        opacity: "0.8"
    });

    // Add a loading spinner HTML element
    $("#depositButton").append('<div class="loader"></div>');

    if (!(is_connected)) {
        ShowError('Error', 'Please Connect your Wallet First');
        return false;
    }

    var account = getAccount();



    var usdt_amt = usdtAmount;
    console.log('usdt_amt', usdt_amt);

    try {
        console.log('addresssss', account.address);
        var res = await check_allowance(account.address);
        console.log('allowance response', res);

        if (res > usdt_amt) {
            console.log('buy_with_USDT', usdt_amt);
            console.log('upline', upline);
            if (!web3.utils.isAddress(upline)) {
                console.error('Invalid upline address:', upline);
                showAlert('Invalid upline address. Please try again.', 'error');
                return;
            }

            const { hash } = await writeContract({
                address: contract,
                abi: abi,
                functionName: 'deposit',
                args: [usdt_amt, upline],
            });


            return { success: true, transactionHash: hash };
        } else {
            showAlert('Activate Your ID First', 'error');
            return { success: false, message: 'Allowance too low.' };

        }
    } catch (error) {
        console.error('Error during investment:', error);
        showAlert('Transaction failed. Please try again.', 'error');
        return { success: false, error };
    }

};


// async function check_approve(usdtAmount) {
//     try {
//         $("#checkApproveButton").text("Confirming");
//         $("#checkApproveButton").css({
//             opacity: "0.8"
//         });

//         // Add a loading spinner HTML element
//         $("#checkApproveButton").append('<div class="loader"></div>');

//         console.log('addresssss', account.address);
//         var res = await check_allowance(account.address);
//         console.log('allowance response', res);
//         var usdt_amt = usdtAmount;
//         if (res > usdt_amt) {
//             console.log('buy_with_USDT', usdt_amt);
//             console.log('upline', upline);
//             if (!web3.utils.isAddress(upline)) {
//                 console.error('Invalid upline address:', upline);
//                 showAlert('Invalid upline address. Please try again.', 'error');
//                 return;
//             }
//             var investAmount = 30;
//             const usdtAmount = web3.utils.toWei(investAmount.toString(), "ether");
//             const { hash } = await writeContract({
//                 address: contract,
//                 abi: abi,
//                 functionName: 'deposit',
//                 args: [usdtAmount, upline],
//             });


//             return { success: true, transactionHash: hash };
//         } else {

//             return { success: false, message: 'Allowance too low.' };

//         }
//     } catch (error) {
//         console.error('Error during investment:', error);
//         showAlert('Transaction failed. Please try again.', 'error');
//         return { success: false, error };
//     }
// }

async function check_approve(usdtAmount) {
    try {
        $("#checkApproveButton").text("Confirming");
        $("#checkApproveButton").css({
            opacity: "0.8"
        });

        // Add a loading spinner HTML element
        $("#checkApproveButton").append('<div class="loader"></div>');

        console.log("Checking allowance for approval...");
        const account = await getAccount(); // Get the user's address
        const allowance = await check_allowance(account.address); // Check allowance
        console.log("Allowance response:", allowance);
        var usdt_amt = 30;
        const usdt_amount = web3.utils.toWei(usdt_amt.toString(), "ether");
        if (allowance >= usdt_amount) {
            console.log("Allowance sufficient. Proceeding with deposit...");

            // Proceed with deposit after allowance is checked
            const { hash: depositHash } = await writeContract({
                address: contract,
                abi: abi,
                functionName: "deposit",
                args: [usdt_amount, upline],
            });

            console.log("Deposit transaction initiated:", depositHash);

            // Wait for the deposit transaction to be mined
            await waitForTransaction({ hash: depositHash });
            console.log("Deposit confirmed!");

            return { success: true, transactionHash: depositHash };
        } else {
            console.log("Allowance insufficient. Requesting approval...");

            // Request approval from the user
            const { hash: approveHash } = await writeContract({
                address: usdt_contract,
                abi: usdt_abi,
                functionName: "approve",
                args: [contract, usdtAmount],
            });

            console.log("Approval transaction hash:", approveHash);

            // Wait for the approval transaction to be mined
            await waitForTransaction({ hash: approveHash });
            console.log("Approval confirmed!");

            showAlert("Approval successful. Please click the Activate button again.", "success");
            return { success: false }; // Approval succeeded, but deposit still pending
        }
    } catch (error) {
        console.error("Error during approval or deposit:", error);
        showAlert("Transaction failed. Please try again.", "error");
        return { success: false, error: error.message };
    }
}



async function check_allowance(address) {

    var res = await readContract({
        address: usdt_contract,
        abi: usdt_abi,
        functionName: 'allowance',
        args: [address, contract],
    });
    console.log("check_allowance", res);


    return Number(res);
}






$(function () {
    $("#wdbtn").click(async function () { // Make the function async
        let last_payout = await readContract({
            address: contract,
            abi: abi,
            functionName: 'getTimer',
            args: [account.address],
        });
        let currentTime = Date.now();
        last_payout = last_payout * 1000n;
        console.log('withdraw-btn', last_payout);
        console.log('wcurrentTimen', currentTime);

        if (currentTime < last_payout) {
            console.log('uuuu');
            showAlert('You can withdraw once in 24 hours');
        } else {
            try {
                console.log('nnn');
                // return false;
                // Execute the contract write operation
                const {
                    hash
                } = await writeContract({
                    address: contract,
                    abi: abi,
                    functionName: 'withdraw',
                    args: [],
                });

                // Log response for debugging
                console.log('response of withdraw function', {
                    hash
                });

                // Show success alert
                showAlert('Withdraw success', 'success');

            } catch (error) {
                // Handle errors and show error alert
                console.error('Error during deposit:', error);
                showAlert('Transaction Failed', 'error');
            }

        }
    });
});


function showAlert(msg) {
    Swal.fire({
        title: 'Success',
        text: msg, // Dynamic message passed as a parameter
        icon: 'success', // You can replace this with 'error', 'warning', etc., as needed
        timer: 2000, // Alert auto-closes after 2 seconds
        timerProgressBar: true,
        showConfirmButton: false // Hides the "OK" button
    });
}


function ShowError(title, msg) {
    Swal.fire({
        icon: 'error',
        title: 'Error',
        text: msg,
        timer: 2000,
        timerProgressBar: true,
        showConfirmButton: false
    });
}

function getTime(time) {
    let time1 = Number(time);
    let date = new Date(time1 * 1000)
    let month = date.getMonth() + 1
    let year = date.getFullYear();
    let day = date.getDate()
    let hours = date.getHours()
    let minutes = date.getMinutes()
    if (month < 10) month = '0' + month
    if (minutes < 10) minutes = '0' + minutes
    if (day < 10) day = '0' + day
    if (hours < 10) hours = '0' + hours
    return (`${day} -${month} - ${year} | ${hours}:${minutes}`)
}

window.invest = invest;
window.check_approve = check_approve;


