import express from 'express';
import cheerio from 'cheerio';


    console.log('hi');

async function fiatToEth(){
    
  try {
      const siteURL = 'https://cors-anywhere.herokuapp.com/https://coinmarketcap.com'
      const {data} = await axios(
          {
              method: 'GET',
              url: siteURL,
          }
        );
      const $ = cheerio.load(data);
      const element = "#__next > div > div.main-content > div.sc-57oli2-0.comDeo.cmc-body-wrapper > div > div:nth-child(1) > div.h7vnx2-1.bFzXgL > table > tbody > tr:nth-child(2) > td:nth-child(4) > div > a > span";
      console.log($);
  } catch (err){
      console.error(err);
  }
}
fiatToEth();













// var apikey = {
//     key:'0a46df46-e1a8-4f15-9aa4-4b20acd16713'
// }
    
// request('GET','https://pro-api.coinmarketcap.com/v2/tools/price-conversion?CMC_PRO_API_KEY=' + apikey.key)
// .then((r1) => {
//     var x1 = JSON.parse(r1.target.responseText);


//     document.getElementById('etherPrice').innerHTML = x1.data.quote.USD.total_market_cap;
// }).catch(err => {
//     console.log(err);
// })  
    
// function request(method, url) {
//         return new Promise(function (resolve, reject) {
//             var xhr = new XMLHttpRequest();
//             xhr.open(method, url);
//             xhr.onload = resolve;
//             xhr.onerror = reject;
//             xhr.send();
//         });
// }
















// var url = 'https://pro-api.coinmarketcap.com/v1/tools/price-conversion'


// function request(method, url) {
//         return new Promise(function (resolve, reject) {
//             var xhr = new XMLHttpRequest();
//             xhr.open(method, url);
//             xhr.onload = resolve;
//             xhr.onerror = reject;
//             xhr.send();
//         });
// }

// var parameters = {
// 'amount':'13',
// 'symbol':'EUR',
// 'convert':'ETH'
// }

// var headers = {
// 'Accepts': 'application/json',
// 'X-CMC_PRO_API_KEY': '0a46df46-e1a8-4f15-9aa4-4b20acd16713',
// }

// json = request('GET',url,params=parameters,headers=headers);

// var coins = json['data']

// console.log(coins)























