<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <title>Cloxxy - Add Content</title>
    <script src="https://cdn.tiny.cloud/1/n8jgu90eoftuz5gdue2cexmd9l8a9ztaq02lk9b5xf8cv44q/tinymce/5/tinymce.min.js"></script>
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
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="img/bg-img/successfully.jpg" alt="data inserted successfully" class="img-fluid">
                        </div>
                    </div>
                </div>

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

                <section class="blogadmin-body">
                    <div class="container">
                        <div class="row blogadmin-row p-4">
                            <div class="col-md-12 outside-border p-5">
                                <ul class="admin-ul text-center">
                                    <h4 class="text-center">Create Blog</h4>
                                </ul>
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="label control-label bloglabel">Title</label>
                                        <input type="text" name="title" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="label control-label bloglabel">Content</label>
                                        <textarea id="mytextarea" name="content" class="form-control"> </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="label control-label bloglabel">Upload Image</label> <br>
                                        <input type="file" name="fileToUpload" id="fileToUpload">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-dark blog-btn">SUBMIT</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                </section>

            <?php    
            } else {

            ?>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                	        <img src="img/bg-img/wrong.jpg" class="img-fluid">
                        </div>
                    </div>
                </div>

            <?php  
            }

        }
    
    
    
    ?>
</body>
<source src="../js/jquery.min.js" type="text/javascript">
<source src="../js/bootstrap.min.js" type="text/javascript">
<!-- <script src='https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js' referrerpolicy="origin"></script> -->
<script>
  tinymce.init({
    selector: '#mytextarea'
  }); </script>
</html>
