<?php include('connection.php'); ?>
<?php 
    $current_page = "";
    $post = "";
    $link = $_SERVER['PHP_SELF']; 
    if (strpos($link, "index.php")){
        $current_page = "Cloxxy Blog";

    }elseif (strpos($link, "blog.php")){
        $id = $_GET['id'];
        $sql = "SELECT title FROM blog_content WHERE post_id='$id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $current_page = $row['title'];
                // $current_page = "";
                $post = "true";
            }
        } 
    }else{
        $post = "false";
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
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../css/default-assets/animate.min.css">

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
                        <a class="nav-brand" href="index.html"><img src="../img/core-img/logo3.png" alt=""></a>
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
                                    <li><a href="../index.php">Home</a></li>
                                    <li><a href="../about.php">About</a></li>
                                    <li><a href="../portfolio.php">Portfolio</a></li>
                                    <li class="active"><a href="<?php 
                                                                if($post == 'true')
                                                                    {echo "../blog";}?>">Blog</a></li>
                                    <li><a href="../contact.php">Contact</a></li>
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
                <div class="col-md-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title text-white"><?php echo $current_page; ?></h2>
                            <ol class="breadcrumb d-inline-block">
                                <li class="breadcrumb-item"><a href="../index.php" class="text-white"><i class="icon_house_alt"></i> Home</a></li>
                                <?php if($post == 'true'){?>
                                    <li class="breadcrumb-item"><a href="../index.php" class="text-white"><i class="icon_house_alt"></i> Cloxxy Blog</a></li>
                               <?php }?>
                                
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $current_page; ?></li>
                            </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->