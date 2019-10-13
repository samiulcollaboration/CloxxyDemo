<?php include('connection.php');?>
<?php 
    $postId = $_GET['id'];
    $post_query = "SELECT * FROM blog_content WHERE post_id='$postId'";
    $post_result = $conn->query($post_query);


    include('blog-header.php'); 
    
    if ($post_result->num_rows > 0) {
            while($row = $post_result->fetch_assoc()) { ?>
                <div class="container">
                    <div class="row my-5">
                        <div class="col-12">
                            <h2 class="blog-title text-center"><?php echo $row['title']; ?></h2>
                            <img class="blog-thumbnail mt-3" src="<?php echo $row['thumbnail']; ?>" alt="">
                            <div class="blog-content mt-5"><?php echo $row['content']; ?></div>
                        </div>
                    </div>
                </div>

                
        <?php
            }
        } ?>
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
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Big Icon End -->
<?php include('blog-footer.php'); ?>
