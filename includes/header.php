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
      <link type="text/css" rel="stylesheet" href="css/mystyle.css">
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

                                    <?php
                                    include 'db.php';
                                    $query = "SELECT * FROM menu";
                                    $select_menu = mysqli_query($connection,$query);
                                    while($row = mysqli_fetch_assoc($select_menu)) {
                                        $menu_title = $row['menu_title'];
                                        echo "<li class='nav-item nav-link'>
                                         {$menu_title}  </li>";
                                    }
                                    ?>
                                        <!-- <li class="nav-item">
                                            <a class="nav-link" href="index.php"> Home  </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="choose.php">See Offers</a>
                                        </li> -->


                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>