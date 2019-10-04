<?php include('blog-header.php'); ?>
    <?php include('connection.php') ?>
    <?php
    $sql = "SELECT * FROM blog_content";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        ?>
    <div class="postContainer">
        <div class="container">
            <div class="row">
                <?php while($row = $result->fetch_assoc()) { ?>
                <div class="col-md-3 eachPost text-center">
                    <a href="blog.php?id=<?php echo $row['post_id'];?>">
                    <img src="<?php echo $row['thumbnail']; ?>" class="post-thumbnail"
                            alt="Post Thumbnail">

                    <h3 class="post-title"> <?php echo $row['title']; ?> </h3>
                    <p> <?php $content = $row['content'];
                              $filterContent = substr($content,0,150). "..";
                              echo $filterContent; ?> </p>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php
            //TODO        
        
    } else {
        echo "POST NOT FOUND";
    }
    
    
    
    
    ?>
<?php include('blog-footer.php'); ?>