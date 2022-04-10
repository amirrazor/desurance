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
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
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
                                        <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                            <nav class="navigation navbar navbar-expand-md navbar-dark ">
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarsExample04" aria-controls="navbarsExample04"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarsExample04">
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.php"> Home </a>
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

            <!-- contact -->
            <div id="contact" class="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="titlepage">
                                <h2>Find the best offer for you</h2>
                                <span>Please enter the information below </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 ">
                            <form class="main_form ">
                                <div class="row">

                                    <div class="col-md-12">

                                        <div class="phones m-3">Select your phone's manufacturer:</div>
                                        <label for="phones" class="phonelabel"></label>

                                        <select id="phones" class="phoneselect">
                                            <option value="Apple">manufacturer</option>
                                            <option value="Apple">Apple</option>
                                            <option value="Samsung">Samsung</option>
                                            <option value="Huawei">Huawei</option>
                                            <option value="Xiaomi">Xiaomi</option>
                                            <option value="Vivo">Vivo</option>
                                            <option value="Sony">Sony</option>
                                            <option value="OnePlus">OnePlus</option>
                                            <option value="Honor">Honor</option>
                                            <option value="Nokia">Nokia</option>
                                            <option value="LG">LG</option>
                                            <option value="Xiaomi">Xiaomi</option>
                                            <option value="Oppo">Oppo</option>
                                            <option value="Realme">Realme</option>
                                            <option value="ZTE">ZTE</option>
                                            <option value="Other">Other...</option>
                                        </select>
                                    </div>

                                    <div class="col-md-12">
                                        <p class="phones m-3">Enter your phone's purchase price:</p>
                                        <input class="form_contril m-3 py-4 text-muted"
                                            placeholder="Phone's price in Euro" type="text" name="Phone Price">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="start" class="purchasedatelabel m-3">Date of purchase: </label>

                                        <input type="date" id="start" name="trip-start" value="2022-02-22"
                                            min="2000-01-01" max="2022-12-31">
                                    </div>

                                    <div class="col-md-12 m-3">
                                        <div class="phones">Would you like to pay monthly or yearly?</div>
                                        <div class="choice2">
                                            <button class="read_more btn btn-default m-3">
                                                Monthly
                                            </button>
                                            <button class="read_more btn btn-default m-3">
                                                Yearly
                                            </button>
                                        </div>
                                        <div class="thiefoption text-white m-3">
                                            <p>Would you like to add extra thief and cyber protection?</p>
                                            <input type="checkbox" id="scales" name="scales" checked>
                                            <label for="scales">Thief and cyber protection</label>

                                        </div>
                                        <div class="premiumpricelabel text-white m-3">
                                            <p>Premium price: </p>
                                            <p class="premiumprice">0 Euros </p>
                                        </div>
                                        <div class="col-sm-12">
                                            <button class="send_btn calculate">Calculate Premium</button>
                                        </div>
                                    </div>
                            </form>
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
                                    <p>Copyright 2019 All Right Reserved By <a href="https://html.design/"> Free html
                                            Templates</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end footer -->
            <!-- Javascript files-->
            <script src="js/premium.js"></script>
            <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.bundle.min.js"></script>




</body>

</html>