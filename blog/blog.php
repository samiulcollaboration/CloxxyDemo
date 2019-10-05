<?php include('connection.php');?>
<?php 
    $postId = $_GET['id'];
    $post_query = "SELECT * FROM blog_content WHERE post_id='$postId'";
    $post_result = $conn->query($post_query);


    include('blog-header.php'); 
    
    if ($post_result->num_rows > 0) {
            while($row = $post_result->fetch_assoc()) {
                echo $row['content'];
            }
        } ?>

<?php include('blog-footer.php'); ?>
