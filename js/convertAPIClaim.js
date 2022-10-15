document.querySelector("#claimApprove").addEventListener("click", function () {
  fetch("http://localhost:3001/")
    .then((response) => response.json())
    .then((data) => {
      const jsonClaim = data.data.quote[2790].price;
      console.log(jsonClaim);
      const convertClaim =
        document.getElementById("showClaimPrice").innerHTML / jsonClaim;
      const claimInEther = convertClaim.toFixed(8);
      document.getElementById("claimInEther").innerHTML = claimInEther;
    });
});
