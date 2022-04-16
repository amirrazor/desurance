
 <!-- header -->
   
    <?php include 'includes/header.php'?>
           
            <!-- end header -->

            <!-- connect wallet -->
            <div id="contact" class="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="titlepage2">
                                <h2>First login using Metamask!</h2>
                                <h3 class="text-white">It is super easy and very secure</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">

                <div class="text-center">
                        <div >
                           <figure><img src="images/metamask.png" alt="#" style="width:80px;height:80px;"/></figure>
                        </div>
                     
                     
                    <div  class="text-white h3 p-4">
                     <div id="loggedOut" class="user-login-msg">
					Click the button to (sign up and) login!
				</div>
				<div id="needMetamask" style="display:none;color: rgb(255, 115, 0);" class="user-login-msg">
					To login, first install a Web3 wallet like the <a href="https://metamask.io/" style="color:#ff7300" target="_blank">MetaMask</a> browser extension or mobile app
				</div>
				<div id="needLogInToMetaMask" style="display:none;color: rgb(255, 115, 0);" class="user-login-msg">
					Log in to your wallet account first!
				</div>
				<div id="signTheMessage" style="display:none;" class="user-login-msg">
					Sign the message with your wallet to authenticate
				</div>
				<div id="loggedIn" style="display:none;" class="user-login-msg">
					Successful authentication for address:<br><span id="ethAddress"></span>
					<br><br>
					You can set a public name for this account:<br>
					<input type="text" placeholder="Public name" id="updatePublicName" onfocusout="setPublicName()" style="width:190px;" class="text-dark">
				</div>
				<br>
				<button onclick="userLoginOut()" id="buttonText" class="read_more btn btn-default my-5">Log in</button>
                </div>
                <div class="col-sm-12 text-center">
                                        
                                    <a class="read_more btn btn-default mb-5" href="calcPhone.php">Continue</a>
                                        
                                    </div>
            </div>
        </div>
    </div>
            <!-- end contact -->
            <!--  footer -->
            <?php include "includes/footer.php" ?>