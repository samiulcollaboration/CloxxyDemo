<?php include('blog/connection.php'); ?>
<?php 
    $current_page = "";
    $link = $_SERVER['PHP_SELF'];

    if (strpos($link, "index.php")){
        $current_page = "Cloxxy";
    }elseif (strpos($link, "about.php")){
        $current_page = "About";
    }elseif (strpos($link, "contact.php")){
        $current_page = "Contact";
    }elseif (strpos($link, "portfolio.php")){
        $current_page = "Portfolio";
    }elseif (strpos($link, "portfolio-details.php")){
        $current_page = "Portfolio Details";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title><?php echo $current_page; ?></title>
    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.png">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/6b31c6085b.js" crossorigin="anonymous"></script>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="alimeNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="./index.php"><img src="./img/core-img/logo.png" alt="Cloxxy Logo"></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li class="active"><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="portfolio.php">Portfolio</a></li>
                                    <li><a href="blog">Blog</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->