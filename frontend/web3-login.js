let userLoginData = {
  state: "loggedOut",
  ethAddress: "",
  buttonText: "Log in",
  publicName: "",
  fullName: "",
  homeAddress: "",
  phoneModel: "",
  email: "",
  phoneNumber: "",
  thief: "",
  payInterval: "",
  phoneAge: "",
  phoneprice: "",
  premiumPrice: "",
  JWT: "",
  config: { headers: { "Content-Type": "application/x-www-form-urlencoded" } },
};

if (typeof backendPath == "undefined") {
  var backendPath = "";
}

const ethEnabled = async () => {
  if (window.ethereum) {
    await window.ethereum.send("eth_requestAccounts");
    window.web3 = new Web3(window.ethereum);
    // return true;
    ethInit();
  }
  return false;
};

function ethInit() {
  ethereum.on("accountsChanged", (_chainId) => ethNetworkUpdate());

  async function ethNetworkUpdate() {
    let accountsOnEnable = await web3.eth.getAccounts();
    let address = accountsOnEnable[0];
    address = address.toLowerCase();
    if (userLoginData.ethAddress != address) {
      userLoginData.ethAddress = address;
      showAddress();
      if (userLoginData.state == "loggedIn") {
        userLoginData.JWT = "";
        userLoginData.state = "loggedOut";
        userLoginData.buttonText = "Log in";
      }
    }
    if (
      userLoginData.ethAddress != null &&
      userLoginData.state == "needLogInToMetaMask"
    ) {
      userLoginData.state = "loggedOut";
    }
  }
}

// Show current msg
function showMsg(id) {
  let x = document.getElementsByClassName("user-login-msg");
  let i;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(id).style.display = "block";
}

// Show current address
function showAddress() {
  document.getElementById("ethAddress").innerHTML = userLoginData.ethAddress;
}

function showEthAddress() {
  document.getElementById("showEthAddress").innerHTML =
    userLoginData.ethAddress;
}

function showContinue() {
  document.getElementById("showContinue").style.display = "";
}

function hideContinue() {
  document.getElementById("showContinue").style.display = "none";
}

// Show current button text
function showButtonText() {
  document.getElementById("buttonText").innerHTML = userLoginData.buttonText;
}

async function userLoginOut() {
  if (
    userLoginData.state == "loggedOut" ||
    userLoginData.state == "needMetamask"
  ) {
    await onConnectLoadWeb3Modal();
  }
  if (web3ModalProv) {
    window.web3 = web3ModalProv;
    try {
      userLogin();
    } catch (error) {
      console.log(error);
      userLoginData.state = "needLogInToMetaMask";
      showMsg(userLoginData.state);
      return;
    }
  } else {
    userLoginData.state = "needMetamask";
    return;
  }
}

async function userLogin() {
  if (userLoginData.state == "loggedIn") {
    userLoginData.state = "loggedOut";
    showMsg(userLoginData.state);
    //hide continue button
    hideContinue();
    userLoginData.JWT = "";
    userLoginData.buttonText = "Log in";
    showButtonText();
    return;
  }
  if (typeof window.web3 === "undefined") {
    userLoginData.state = "needMetamask";
    showMsg(userLoginData.state);
    return;
  }
  let accountsOnEnable = await web3.eth.getAccounts();
  let address = accountsOnEnable[0];
  address = address.toLowerCase();
  if (address == null) {
    userLoginData.state = "needLogInToMetaMask";
    showMsg(userLoginData.state);
    return;
  }
  userLoginData.state = "signTheMessage";
  showMsg(userLoginData.state);

  axios
    .post(
      backendPath + "backend/server.php",
      {
        request: "login",
        address: address,
      },
      userLoginData.config
    )
    .then(function (response) {
      if (response.data.substring(0, 5) != "Error") {
        let message = response.data;
        let publicAddress = address;
        handleSignMessage(message, publicAddress).then(handleAuthenticate);

        function handleSignMessage(message, publicAddress) {
          return new Promise((resolve, reject) =>
            web3.eth.personal.sign(
              web3.utils.utf8ToHex(message),
              publicAddress,
              (err, signature) => {
                if (err) {
                  userLoginData.state = "loggedOut";
                  showMsg(userLoginData.state);
                }
                return resolve({ publicAddress, signature });
              }
            )
          );
        }

        function handleAuthenticate({ publicAddress, signature }) {
          axios
            .post(
              backendPath + "backend/server.php",
              {
                request: "auth",
                address: arguments[0].publicAddress,
                signature: arguments[0].signature,
              },
              userLoginData.config
            )
            .then(function (response) {
              if (response.data[0] == "Success") {
                userLoginData.state = "loggedIn";
                showMsg(userLoginData.state);
                //show continue button
                showContinue();
                userLoginData.buttonText = "Log out";
                showButtonText();
                userLoginData.ethAddress = address;
                showAddress();
                showEthAddress();
                userLoginData.publicName = response.data[1];
                getPublicName();
                showPublicName();
                userLoginData.fullName = response.data[3];
                getFullname();
                showFullname();
                userLoginData.homeAddress = response.data[4];
                getHomeaddress();
                showHomeaddress();
                userLoginData.phoneModel = response.data[5];
                getPhonemodel();
                showPhonemodel();
                userLoginData.email = response.data[6];
                getEmail();
                showEmail();
                userLoginData.phoneNumber = response.data[7];
                getPhonenumber();
                showPhonenumber();
                userLoginData.phoneprice = response.data[8];
                getPhoneprice();
                showPhoneprice();
                userLoginData.premiumPrice = response.data[9];
                getPremiumprice();
                showPremiumprice();
                userLoginData.thief = response.data[10];
                getThief();
                showThief();
                userLoginData.payInterval = response.data[11];
                getPayinterval();
                showPayinterval();
                userLoginData.phoneAge = response.data[12];
                getPhoneage();
                showPhoneage();
                userLoginData.JWT = response.data[2];

                // Clear Web3 wallets data for logout
                localStorage.clear();
              }
            })
            .catch(function (error) {
              console.error(error);
            });
        }
      } else {
        console.log("Error: " + response.data);
      }
    })
    .catch(function (error) {
      console.error(error);
    });
}

function getPublicName() {
  document.getElementById("updatePublicName").value = userLoginData.publicName;
  console.log("Public Name: " + userLoginData.publicName);
}

function showPublicName() {
  document.getElementById("editPublicName").innerHTML =
    document.getElementById("updatePublicName").value;
}

function setPublicName() {
  let value = document.getElementById("updatePublicName").value;
  axios
    .post(
      backendPath + "backend/server.php",
      {
        request: "updatePublicName",
        address: userLoginData.ethAddress,
        JWT: userLoginData.JWT,
        publicName: value,
      },
      this.config
    )
    .then(function (response) {
      console.log(response.data);
    })
    .catch(function (error) {
      console.error(error);
    });
}

function getFullname() {
  document.getElementById("updateFullname").value = userLoginData.fullName;
}

function showFullname() {
  document.getElementById("editFullname").innerHTML =
    document.getElementById("updateFullname").value;
}

function setFullname() {
  let value = document.getElementById("updateFullname").value;
  axios
    .post(
      backendPath + "backend/server.php",
      {
        request: "updateFullname",
        address: userLoginData.ethAddress,
        JWT: userLoginData.JWT,
        fullName: value,
      },
      this.config
    )
    .then(function (response) {
      console.log(response.data);
    })
    .catch(function (error) {
      console.error(error);
    });
}

function getHomeaddress() {
  document.getElementById("homeAddress").value = userLoginData.homeAddress;
}

function showHomeaddress() {
  document.getElementById("showHomeaddress").innerHTML =
    document.getElementById("homeAddress").value;
}

function setHomeaddress() {
  let value = document.getElementById("homeAddress").value;
  axios
    .post(
      backendPath + "backend/server.php",
      {
        request: "updateHomeaddress",
        address: userLoginData.ethAddress,
        JWT: userLoginData.JWT,
        homeAddress: value,
      },
      this.config
    )
    .then(function (response) {
      console.log(response.data);
    })
    .catch(function (error) {
      console.error(error);
    });
}

function getPhonemodel() {
  document.getElementById("phoneModel").value = userLoginData.phoneModel;
}

function showPhonemodel() {
  document.getElementById("showPhonemodel").innerHTML =
    document.getElementById("phoneModel").value;
}

function setPhonemodel() {
  let value = document.getElementById("phoneModel").value;
  axios
    .post(
      backendPath + "backend/server.php",
      {
        request: "updatePhonemodel",
        address: userLoginData.ethAddress,
        JWT: userLoginData.JWT,
        phoneModel: value,
      },
      this.config
    )
    .then(function (response) {
      console.log(response.data);
    })
    .catch(function (error) {
      console.error(error);
    });
}

function getEmail() {
  document.getElementById("email").value = userLoginData.email;
}

function showEmail() {
  document.getElementById("showEmail").innerHTML =
    document.getElementById("email").value;
}

function setEmail() {
  let value = document.getElementById("email").value;
  axios
    .post(
      backendPath + "backend/server.php",
      {
        request: "updateEmail",
        address: userLoginData.ethAddress,
        JWT: userLoginData.JWT,
        email: value,
      },
      this.config
    )
    .then(function (response) {
      console.log(response.data);
    })
    .catch(function (error) {
      console.error(error);
    });
}

function getPhonenumber() {
  document.getElementById("phoneNumber").value = userLoginData.phoneNumber;
}

function showPhonenumber() {
  document.getElementById("showPhonenumber").innerHTML =
    document.getElementById("phoneNumber").value;
}

function setPhonenumber() {
  let value = document.getElementById("phoneNumber").value;
  axios
    .post(
      backendPath + "backend/server.php",
      {
        request: "updatePhonenumber",
        address: userLoginData.ethAddress,
        JWT: userLoginData.JWT,
        phoneNumber: value,
      },
      this.config
    )
    .then(function (response) {
      console.log(response.data);
    })
    .catch(function (error) {
      console.error(error);
    });
}

function getThief() {
  document.getElementById("thief").options[
    (document.getElementById("thief").selectedIndex = "0")
  ].text = userLoginData.thief;
}

function showThief() {
  document.getElementById("showThief").innerHTML =
    document.getElementById("thief").options[
      document.getElementById("thief").selectedIndex
    ].text;
}

function setThief() {
  let value =
    document.getElementById("thief").options[
      document.getElementById("thief").selectedIndex
    ].text;
  axios
    .post(
      backendPath + "backend/server.php",
      {
        request: "updateThief",
        address: userLoginData.ethAddress,
        JWT: userLoginData.JWT,
        thief: value,
      },
      this.config
    )
    .then(function (response) {
      console.log(response.data);
    })
    .catch(function (error) {
      console.error(error);
    });
}

function getPayinterval() {
  document.getElementById("payinterval").options[
    (document.getElementById("payinterval").selectedIndex = "0")
  ].text = userLoginData.payInterval;
}

function showPayinterval() {
  document.getElementById("showPayinterval").innerHTML =
    document.getElementById("payinterval").options[
      document.getElementById("payinterval").selectedIndex
    ].text;
}

function setPayinterval() {
  let value =
    document.getElementById("payinterval").options[
      document.getElementById("payinterval").selectedIndex
    ].text;
  axios
    .post(
      backendPath + "backend/server.php",
      {
        request: "updatePayinterval",
        address: userLoginData.ethAddress,
        JWT: userLoginData.JWT,
        payInterval: value,
      },
      this.config
    )
    .then(function (response) {
      console.log(response.data);
    })
    .catch(function (error) {
      console.error(error);
    });
}

function getPhoneage() {
  document.getElementById("phoneage").options[
    (document.getElementById("phoneage").selectedIndex = "0")
  ].text = userLoginData.phoneAge;
}

function showPhoneage() {
  document.getElementById("showPhoneage").innerHTML =
    document.getElementById("phoneage").options[
      document.getElementById("phoneage").selectedIndex
    ].text;
}

function setPhoneage() {
  let value =
    document.getElementById("phoneage").options[
      document.getElementById("phoneage").selectedIndex
    ].text;
  axios
    .post(
      backendPath + "backend/server.php",
      {
        request: "updatePhoneage",
        address: userLoginData.ethAddress,
        JWT: userLoginData.JWT,
        phoneAge: value,
      },
      this.config
    )
    .then(function (response) {
      console.log(response.data);
    })
    .catch(function (error) {
      console.error(error);
    });
}

function getPhoneprice() {
  document.getElementById("priceinput").value = userLoginData.phoneprice;
}

function showPhoneprice() {
  document.getElementById("showPhoneprice").innerHTML =
    document.getElementById("priceinput").value;
}

function setPhoneprice() {
  let value = document.getElementById("priceinput").value;
  axios
    .post(
      backendPath + "backend/server.php",
      {
        request: "updatePhoneprice",
        address: userLoginData.ethAddress,
        JWT: userLoginData.JWT,
        phoneprice: value,
      },
      this.config
    )
    .then(function (response) {
      console.log(response.data);
    })
    .catch(function (error) {
      console.error(error);
    });
}

function getPremiumprice() {
  document.querySelector(".premiumprice").textContent =
    userLoginData.premiumPrice;
}

function showPremiumprice() {
  document.getElementById("showPremiumprice").innerHTML =
    document.querySelector(".premiumprice").textContent;
}

function setPremiumprice() {
  let value = document.querySelector(".premiumprice").textContent;
  axios
    .post(
      backendPath + "backend/server.php",
      {
        request: "updatePremiumprice",
        address: userLoginData.ethAddress,
        JWT: userLoginData.JWT,
        premiumPrice: value,
      },
      this.config
    )
    .then(function (response) {
      console.log(response.data);
    })
    .catch(function (error) {
      console.error(error);
    });
}
