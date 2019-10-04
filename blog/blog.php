<?php include('connection.php');?>
<?php 
    $postId = $_GET['id'];
    $sql = "SELECT * FROM blog_content WHERE post_id='$postId'";
    $result = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php  ?></title>
</head>
<body>
    
</body>
</html>