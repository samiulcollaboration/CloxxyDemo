<?php include('connection.php');?>
<?php 
    $postId = $_GET['id'];
    $post_query = "SELECT * FROM blog_content WHERE post_id='$postId'";
    $post_result = $conn->query($post_query);


    include('blog-header.php'); 
    
    if ($post_result->num_rows > 0) {
            while($row = $post_result->fetch_assoc()) { ?>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="blog-title"><?php echo $row['title']; ?></h2>
                            <img class="blog-thumbnail" src="<?php echo $row['thumbnail']; ?>" alt="">
                            <div class="blog-content"><?php echo $row['content']; ?></div>
                        </div>
                    </div>
                </div>

                
        <?php
            }
        } ?>

<?php include('blog-footer.php'); ?>
