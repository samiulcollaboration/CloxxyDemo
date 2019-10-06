<?php include('blog-header.php');?>
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
    <?php include('blog-footer.php');?>