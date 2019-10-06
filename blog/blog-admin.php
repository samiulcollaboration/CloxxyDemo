<?php include('blog-header.php');?>
    <div class="logInPanel">
        <section class="blogadmin-body">
            <div class="container">
                <div class="row blogadmin-row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12 outside-border p-5">
                                <ul class="admin-ul text-center">
                                    <h4 class="text-center">Sign In</h4>
                                </ul>
                                <form action="add-content.php" method="POST" class="form-inlin justify-content-center">
                                    <div class="form-group">
                                        <label class="label control-label bloglabel">Email Address</label>
                                        <input id="email" name="email" type="email" class="form-control"
                                            placeholder="example@cloxxy.com">
                                    </div>
                                    <div class="form-group">
                                        <label class="label control-label bloglabel">Password</label>
                                        <input id="password" name="password" type="password" class="form-control"
                                            placeholder="Enter Password">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-dark blog-btn">SIGN IN</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>



















<?php include('blog-footer.php');?>