document.querySelector(".convertor").addEventListener("click", function () {
  let response = null;
  new Promise(async (resolve, reject) => {
    try {
      response = await axios.get(
        "https://cors-anywhere.herokuapp.com/https://pro-api.coinmarketcap.com/v2/tools/price-conversion?amount=1&id=1027&convert_id=2790",
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
      const json = response.data.data.quote[2790].price;
      const convert =
        document.querySelector(".premiumprice").textContent / json;
      const inEther = convert.toFixed(8);
      document.getElementById("etherPrice").innerHTML = inEther;
      console.log(json);
      resolve(json);
    }
  });
});
