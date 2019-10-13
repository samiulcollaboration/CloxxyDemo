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
<?php include('blog-footer.php'); ?>