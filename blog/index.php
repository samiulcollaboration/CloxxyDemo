<?php include('blog-header.php'); ?>
<?php include('connection.php') ?>
<?php
    $sql = "SELECT * FROM blog_content ORDER BY post_id DESC";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        ?>
<div class="postContainer">
    <div class="container">
        <div class="row">
            <div class="card-group">
                <?php while($row = $result->fetch_assoc()) { ?>
                <div class="col-md-4 eachPost text-center">


                    <a href="blog.php?id=<?php echo $row['post_id'];?>">
                        <div class="card">
                            <img src="<?php echo $row['thumbnail']; ?>" class="img-fluid img-thumbnail card-img-top"
                                alt="Post Thumbnail">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['title']; ?></h5>
                                <p class="card-text text-justify"><?php $content = $row['content'];
                                $filterContent = substr($content,0,150). ".....";
                                // echo $filterContent; ?></p>
                            </div>
                        </div>
                    </a>


                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php
            //TODO        
        
    } else {
        echo "POST NOT FOUND";
    }
    
    
    
    
    ?>
    <!-- Big Icon Start -->
    <section>
        <div class="container">
            <div class="row mb-4">
                <div class="social-icons-box">
                    <h1 class="">Our Social Icons</h1>
                    <div class="social-icons-list">
                        <ul>
                            <li><a href="https://www.facebook.com/cloxxy.in"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/Cloxxy2"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/samiulhasan_94"><i class="fab fa-instagram"></i></a></li>                         
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Big Icon End -->
<?php include('blog-footer.php'); ?>