<?php
    
    $flag = 0;
    ob_start();

    include_once("classes/User.php");
    include_once("classes/Functions.php");

    if(isset($_POST['login'])){
        //session_start();                /*IMP LINE STARTING THE SESSION*/
        
        extract($_POST);                /*USED TO GET THE DETAILS FROM THE DB iE THE DATA  */
        
        /*****************USERNAME IS varyanijatin88@gmail.com AND PASS is abc123***************/
        $obj = new User();
        if($obj->processLogin($email, $password)){
            
            //echo $_SESSION['member_id'];        /*JUST FOR TESTING*/
            //echo "<br>LOGGED IN<br>";
            //header("Location: index.html");
            
            Functions::redirect('home.php');          /*USED TO CALL STATIC ()*/
        
        }else{
            $flag = 1;
            //echo "<br>CREDENTIALS DOESNT MATCH<br>";
        
        }
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>Indian Gov | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png">

    <!-- App css -->
    <link href="assets/temp/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/temp/css/icons.css" rel="stylesheet" type="text/css"/>
    <link href="assets/temp/css/metismenu.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/temp/css/style.css" rel="stylesheet" type="text/css"/>

    <script src="assets/temp/js/modernizr.min.js"></script>

</head>


<body class="account-pages">

<!-- Begin page -->
<!--<div class="accountbg" style="background: url('assets/img/books.jpg');background-size: cover;"></div>-->

<div class="accountbg">
    <img src="assets/img/final.png" width="800" height="540">
</div>

<div class="wrapper-page account-page-full">

    <div class="card">
        <div class="card-block">

            <div class="account-box">

                <div class="card-box p-5">
                    <h2 class="text-uppercase text-center pb-4">
                        <a href="index.php" class="text-success">
                            <span><img src="assets/img/girl1.png" alt="" height="75"></span>
                        </a>
                    </h2>
                    <?php
                    if ($flag) {        /*IF DETAIILS WRONG THEN ALERT*/
                        ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            Wrong Username or Password Please try again later!
                        </div>
                        <?php
                    }
                    ?>
                    <form class="" action="" method="POST">

                        <div class="form-group m-b-20 row">
                            <div class="col-12">
                                <label for="emailaddress">Email address</label>
                                <input class="form-control" type="email" id="emailaddress" required=""
                                       placeholder="Enter your email" name="email">
                            </div>
                        </div>
    
                        <div class="form-group row m-b-20">
                            <div class="col-12">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" required="" id="password"
                                       placeholder="Enter your password" name="password">
                            </div>
                        </div>

                        <div class="form-group row text-center m-t-10">
                            <div class="col-12">
                                <button class="btn btn-block btn-custom waves-effect waves-light" type="submit"
                                        name="login">Sign In
                                </button>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <a href="regist.php">New User? Please Sign up!!</a>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

    <?php
        //include_once("includes/footer.php");
    ?>

</div>


<!-- jQuery  -->
<script src="assets/temp/js/jquery.min.js"></script>
<script src="assets/temp/js/popper.min.js"></script>
<script src="assets/temp/js/bootstrap.min.js"></script>
<script src="assets/temp/js/metisMenu.min.js"></script>
<script src="assets/temp/js/waves.js"></script>
<script src="assets/temp/js/jquery.slimscroll.js"></script>

<!-- App js -->
<script src="assets/temp/js/jquery.core.js"></script>
<script src="assets/temp/js/jquery.app.js"></script>

</body>

</html>
