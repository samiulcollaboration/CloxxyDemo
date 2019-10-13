<?php include('other-header.php'); ?>
<?php 
    $to  = "rakibrk1811@gmail.com";

    $subject = "";
    if(isset($_POST['subject']))
        $subject = $_POST['subject'];

    $msg = "";
    if(isset($_POST['message']))
        $msg = $_POST['message'];

    $header = "";
    if(isset($_POST['email']))
        $header = "From: " . $_POST['email'];

    if(isset($_POST['subject']) && isset($_POST['message']) && isset($_POST['email'])){
        if(mail($to, $subject, $msg, $header)){
            //message send successful // TODO
            ?>
            <div class="container">
                <div class="row">
                    <div class="col-12 Success text-center">
                        <h2>Message Sent</h2>
                        <a href=""><button class="btn btn-info">Back</button></a>
                    </div>
                </div>
            </div>
        <?php   
        }
        else{ 
            //Message send fail //TODO
            ?>
        <h1>Failed</h1>
    <?php
        }
    }   



?>

    <!-- Contact Form Start -->
    <section>
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card contact-form-main">
                        <div class="card-body">
                            <div class="contact-form">
                                <h3 class="text-danger font-weight-bolder mb-4">Cloxxy</h3>
                                <h5>Informaction General</h5>
                                <i class="fas fa-envelope-open-text"></i> <a href="mailto:contact@cloxxy.in">contact@cloxxy.in</a>
                                <h5 class="mt-3">Telephone Contact</h5>
                                <i class="fas fa-mobile-alt"></i> <a href="tel:+917001250500">7001250500</a>
                                <h5 class="mt-3">Direction Postal</h5>
                                <address>
                                    Islampur Murshidabad <br>
                                    West Bengal, India <br>
                                    Pin / Zip - 742304 <br>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 border mb-4">
                    <div class="contact">
                        <div class="contact-title">
                            <h1 class="text-danger font-weight-bolder mb-4">Contact Us</h1>
                        </div>
                        <!-- form -->
                        <div class="form-container">
                            <form class="form" action="" method="POST">
                                <div class="form-name">
                                    <input type="text" name="name" placeholder="Name">
                                </div>
                                <div class="form-email">
                                    <input type="email" name="email" placeholder="Your Email" required>
                                </div>
                                <div class="form-subject">
                                    <input type="text" name="subject" placeholder="Subject" required>
                                </div>
                                <div class="form-message">
                                    <textarea name="message" placeholder="Message" required></textarea>
                                </div>
                                <div class="form-button">
                                    <button type="submit">Submit</button>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </section>
    <!-- Contact Form End -->
    
    
    

    <!-- Big Icon Start -->
    <section>
        <div class="container">
            <div class="row mb-4">
                <div class="social-icons-box">
                    <h1 class="">Our Social Icons</h1>
                    <div class="social-icons-list">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>                         
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Big Icon End -->

    <?php include('footer.php'); ?>