<!DOCTYPE html>

<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Decentralized Insurance</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
          <!-- bootstrap css -->
          <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link type="text/css" rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      
   <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/web3@latest/dist/web3.min.js"></script>
		
	<script type="text/javascript" src="https://unpkg.com/web3modal@1.9.0/dist/index.js"></script>
	<script type="text/javascript" src="https://unpkg.com/@walletconnect/web3-provider@1.2.1/dist/umd/index.min.js"></script>
</head>
<!-- body -->

<body class="main-layout">

    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="head_top">
            <div class="header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                            <div class="full">
                                <div class="center-desk">
                                    <div class="logo">
                                        <a href="index.php"><img src="images/logo.png" alt="#" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                            <nav class="navigation navbar navbar-expand-md navbar-dark ">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                           </button>
                                <div class="collapse navbar-collapse" id="navbarsExample04">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.php"> Home  </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="choose.php">See Offers</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end header inner -->
            <!-- end header -->

            <!-- connect wallet -->
            <div id="contact" class="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="titlepage">
                                <h2>First login using Metamask!</h2>
                                <span>It is super easy and very secure</span>
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
            <footer>
                <div class="footer">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-12">
                                <ul class="social_icon">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="copyright">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>Copyright 2019 All Right Reserved By <a href="https://html.design/"> Free  html Templates</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end footer -->
            <!-- Javascript files-->
            <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.bundle.min.js"></script>
            <script src="frontend/web3-login.js?v=009"></script>
		    <script src="frontend/web3-modal.js?v=001"></script>
</body>

</html>