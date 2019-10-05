<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <title>Add Content</title>
</head>
<body>
    <?php include('connection.php') ?>
    <?php 
    //  Data insertion START
        $title = "";
        $content = "";
        $imagePath = "";

        if(isset($_POST['title']) && isset($_POST['content'] )){

            $target_dir = "thumbnails/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image           
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

            if($check !== false) {
                $imagePath = $target_dir . $_FILES['fileToUpload']["name"];
                move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $imagePath);
            } else {
                echo "File is not an image.";
            }


            $title = $_POST['title'];
            $content = $_POST['content'];

            $insertSQL = "INSERT INTO blog_content (title, content, thumbnail) VALUES ('$title', '$content', '$imagePath')";
            if ($conn->query($insertSQL) === TRUE && $check == true) {
            ?>
                <h1>Data Inserted // Design to be added</h1>

            <?php
            } else {
                echo "Error: " . $insertSQL . "<br>" . $conn->error;
            }
        }   
    //  Data insertion END
    ?>

    <?php 
        $email = "";
        $password = "";
        if(isset($_POST['email']) && isset($_POST['password'])){
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            $sql = "SELECT * FROM blog_user WHERE email = '$email' AND password='$password'";

            $result = mysqli_query($conn, $sql);

            if ($result->num_rows > 0) {
            ?>

                <div class="conatiner">
                    <div class="row">
                        <div class="col-12">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <label for="">Title</label>
                                <input type="text" name="title">
                                <label for="">Content</label>
                                <textarea name="content" cols='70'> </textarea>
                                <input type="file" name="fileToUpload" id="fileToUpload">
                                <button type='submit'>Submit</button>
                            </form>
                            
                        </div>
                    </div>
                </div>

            <?php    
            } else {

            ?>   

                <h1>Sorry, Wrong Input // Design to be added</h1>

            <?php  
            }

        }
    
    
    
    ?>
</body>
<source src="../js/jquery.min.js" type="text/javascript">
<source src="../js/bootstrap.min.js" type="text/javascript">
</html>
