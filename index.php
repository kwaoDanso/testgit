<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ASOREPA APP</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="description" content="Admin template that can be used to build dashboards for CRM, CMS, etc." />
        <meta name="author" content="Potenza Global Solutions" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- app favicon -->
        <!--<link rel="shortcut icon" href="">-->
        <!-- google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
        <!-- plugin stylesheets -->
        <link rel="stylesheet" type="text/css" href="assets/css/vendors.css" />
        <!-- app style -->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    </head>
    <body class="bg-white">
        <!-- begin app -->
        <div class="app">
            <!-- begin app-wrap -->
            <div class="app-wrap">
                <!-- begin pre-loader -->
                <div class="loader">
                    <div class="h-100 d-flex justify-content-center">
                        <div class="align-self-center">
                            <img src="assets/img/loader/loader.svg" alt="loader">
                        </div>
                    </div>
                </div>
                <!-- end pre-loader -->
                <!--start login contant-->
                <div class="app-contant">
                    <div class="bg-white">
                        <div class="container-fluid p-0">
                            <div class="row no-gutters">         
                                <div class="col-sm-6 col-lg-6 col-xxl-3  align-self-center order-2 order-sm-1">
                                    <div class="d-flex align-items-center h-100-vh">
                                        <div class="register p-5">
                                            <h2 class="mb-2 text "><i class="fa fa-building-o"></i><b style="color: goldenrod;"> ASOREPA</b> <b style="color: #660033;"> APP</b></h2>
                                            <p>Welcome , please login to your account.</p>           
                                            <form  action="web/controller/login-ctr.php" method="POST"  class="mt-2 mt-sm-5" id="login-form">
                                                <div class="row">
                                                    <?php
                                                    session_start();

                                                    if (isset($_SESSION['success_signup']) && $_SESSION['success_signup'] != '') {
                                                        echo ' <div class="col-12 mb-2">
                                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                    <strong><i class="fa fa-info-circle"></i> ' . $_SESSION['success_signup'] . '</strong>
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <i class="ti ti-close"></i>
                                                    </button>
                                                </div>
                                            </div>';
                                                        unset($_SESSION['success_signup']);
                                                    }

                                                    if (isset($_SESSION['login_status']) && $_SESSION['login_status'] != '') {
                                                        echo ' <div class="col-12 mb-2">
                                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                    <strong><i class="fa fa-info-circle"></i> ' . $_SESSION['login_status'] . '</strong>
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <i class="ti ti-close"></i>
                                                    </button>
                                                </div>
                                            </div>';

//                                                        echo '<h6 class="text text-danger text-center bg-white"><span class="fa fa-ban"></span>&nbsp;' . $_SESSION['login_status'] . '</h6>';
                                                        unset($_SESSION['login_status']);
                                                    }
                                                    ?>

                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="username">Username</label>
                                                            <div class="mb-2">
                                                                <input type="text" class="form-control"  name="username" placeholder="Username" required="" autofocus="" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="control-label">Password*</label>
                                                            <input type="password"  name="password" class="form-control" placeholder="Password" required  />
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="d-block d-sm-flex  align-items-center">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="rem" id="gridCheck">
                                                                <label class="form-check-label" for="gridCheck">
                                                                    Remember Me
                                                                </label>
                                                            </div>
                                                            <a href="forgot-password.php"  class="ml-auto">Forgot Password ?</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mt-3">
                                                        <button type="login" name="login"  class="btn btn-outline-primary text-uppercase"><span class="fa fa-unlock"></span> Sign In</button>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xxl-9 col-lg-6 bg-gradient o-hidden order-1 order-sm-2 ">
                                    <div class="row align-items-center h-100 bg-white ">
                                        <div class="col-6 mx-auto ">
                                            <img class="img-fluid" src="assets/img/bg/login3.svg" alt="bg-img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--end login contant-->
            </div>
            <!-- end app-wrap -->
        </div>
        <!-- end app -->

        <!-- plugins -->
        <script src="assets/js/vendors.js"></script>

        <!-- custom app -->
        <script src="assets/js/app.js"></script>
    </body>
</html>