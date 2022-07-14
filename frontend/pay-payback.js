import { ethers } from "./ethers.js";
import { abi, contractAddress } from "./constants.js";

const payButton = document.getElementById("pay");
payButton.onclick = pay;
console.log(ethers);

function transactionMined(transactionResponse, provider) {
  document.getElementById(
    "mining"
  ).innerHTML = `mining the transaction with block hash of: ${transactionResponse.hash}`;
  return new Promise((resolve, reject) => {
    provider.once(transactionResponse.hash, (transactionReceipt) => {
      document.getElementById(
        "mined"
      ).innerHTML = `mining completed with ${transactionReceipt.confirmations} confirmations`;
      resolve();
    });
  });
}

async function pay() {
  const ethAmount = document.getElementById("etherPrice").innerHTML;
  console.log(ethAmount);
  if (typeof window.ethereum !== "undefined") {
    const provider = new ethers.providers.Web3Provider(window.ethereum);
    const signer = provider.getSigner();
    const contract = new ethers.Contract(contractAddress, abi, signer);
    try {
      const transactionResponse = await contract.pay({
        value: ethers.utils.parseEther(ethAmount),
      });
      await transactionMined(transactionResponse, provider);
      document.getElementById("successConfirmation").innerHTML =
        "Transaction successful!";
      document.getElementById(
        "contractAddress"
      ).innerHTML = `contract address: ${contract.address}`;
      document.getElementById("failedTransaction").style.display = "none";
      document.getElementById("pay").style.display = "none";
      document.getElementById("showCont").style.display = "";
    } catch (error) {
      console.log(error);
      document.getElementById("failedTransaction").innerHTML =
        "The transaction was failed!";
    }
  }
}
