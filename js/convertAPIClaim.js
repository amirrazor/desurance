document.querySelector("#claimApprove").addEventListener("click", function () {
  let response = null;
  new Promise(async (resolve, reject) => {
    try {
      response = await axios.get(
        "https://thingproxy.freeboard.io/fetch/https://pro-api.coinmarketcap.com/v2/tools/price-conversion?amount=1&id=1027&convert_id=2790",
        {
          headers: {
            "X-CMC_PRO_API_KEY": "0a46df46-e1a8-4f15-9aa4-4b20acd16713",
          },
        }
      );
    } catch (ex) {
      response = null;
      // error
      console.log(ex);
      reject(ex);
    }
    if (response) {
      // success
      const jsonClaim = response.data.data.quote[2790].price;
      const convertClaim =
        document.getElementById("updateClaimPrice").value / jsonClaim;
      const claimInEther = convertClaim.toFixed(8);
      document.getElementById("claimInEther").innerHTML = claimInEther;
      console.log(jsonClaim);
      console.log(convertClaim);
      console.log(document.getElementById("updateClaimPrice").value);
      resolve(jsonClaim);
    }
  });
});
