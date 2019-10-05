<?php include('blog/connection.php'); ?>
<?php 
    $current_page = "";
    $portfolioCondition = "";
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
        $portfolioCondition = "true";
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.png">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/6b31c6085b.js" crossorigin="anonymous"></script>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/default-assets/animate.min.css">

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
                        <a class="nav-brand" href="index.html"><img src="./img/core-img/logo3.png" alt=""></a>
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
                                    <li class="<?php if($current_page == "Cloxxy"){
                                        echo "active"; }?>"><a href="index.php">Home</a></li>
                                    <li class="<?php if($current_page == "About"){
                                        echo "active"; }?>"><a href="about.php">About</a></li>
                                    <li class="<?php if($current_page == "Portfolio"){
                                        echo "active"; }?>"><a href="portfolio.php">Portfolio</a></li>
                                    <li class="<?php if($current_page == "Blog"){
                                        echo "active"; }?>"><a href="blog">Blog</a></li>
                                    <li class="<?php if($current_page == "Contact"){
                                        echo "active"; }?>"><a href="contact.php">Contact</a></li>
                                </ul>
                            </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->
        <!-- Breadcrumb Area Start -->
        <section class="breadcrumb-area bg-img bg-overlay">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title text-white"><?php echo $current_page; ?></h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html" class="text-white"><i class="icon_house_alt"></i> Home</a></li>
                                <?php if($portfolioCondition == "true"){?>
                                    <li class="breadcrumb-item"><a href="index.html" class="text-white"><i class="icon_house_alt"></i> Portfolio</a></li>
                               <?php }
                                 ?>
                                
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $current_page; ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->