<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <title>Blog-Admin</title>
</head>

<body>
    <div class="logInPanel">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="logInForm">
                        <form action="add-content.php" method="POST" class="form-inlin justify-content-center">
                            <div class="form-group">
                                <label class="sr-only">Email</label>
                                <input id="email" name="email" type="email" class="form-control" placeholder="example@cloxxy.com">
                            </div>
                            <div class="form-group">
                                <label class="sr-only">Name</label>
                                <input id="password" name="password" type="password" class="form-control" placeholder="password">
                            </div>
                            <button type="submit" class="btn btn-success ">log in</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<source src="../js/jquery.min.js" type="text/javascript">
<source src="../js/bootstrap.min.js" type="text/javascript">

</html>