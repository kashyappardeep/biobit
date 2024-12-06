import Web3 from 'web3';

// Setup web3 provider (e.g., Infura, Alchemy, or your node URL)
const providerURL = "https://data-seed-prebsc-1-s1.binance.org:8545/";
const web3 = new Web3(providerURL);

// Smart Contract Details
import contractABI from './contractABI.json' assert { type: 'json' };

const contractAddress = "0x26763fB7092345fcfF2148DB0d981732dd3B927A";

// Private Key of the sender (ensure it is valid and correctly formatted)
const privateKey = '0x683f281565431c0609bde5a7962258619702d87ce4c2aaeecc40a656ec830490';

//console.log("Private Key:", privateKey);  // Check if the private key is valid

// Create contract instance
const contract = new web3.eth.Contract(contractABI, contractAddress);

// Withdraw function
async function withdraw(recipient, amount) {
    try {
        console.log('inside withdraw function');

        // Check if the private key is valid
        if (!privateKey || privateKey.length !== 66) {
            throw new Error("Invalid private key");
        }

        const account = web3.eth.accounts.privateKeyToAccount(privateKey);
        const data = contract.methods.withdraw(recipient, amount).encodeABI();
        const tx = {
            from: account.address,
            to: contractAddress,
            data: data,
        };

        console.log('Estimating gas...');
        tx.gas = await web3.eth.estimateGas({
            from: account.address,
            to: contractAddress,
            data: data,
        });
        console.log('Fetching gas price...');
        // Fetch current gas price (for legacy transactions)
        tx.gasPrice = await web3.eth.getGasPrice();

        console.log('Signing transaction...');
        // Sign the transaction
        const signedTx = await account.signTransaction(tx);

        console.log('Sending transaction...');
        // Send the signed transaction
        const receipt = await web3.eth.sendSignedTransaction(signedTx.rawTransaction);

        console.log("Transaction successful with hash:", receipt.transactionHash);
        return receipt.transactionHash;
    } catch (error) {
        console.error("Error during transaction:", error);
        throw error;
    }
}


const args = process.argv.slice(2);
const recipient = args[0];
const amount = args[1];

// Call the withdraw function with parameters
withdraw(recipient, amount);
