<!DOCTYPE html>
<html lang="en">

<head>
<?php include('aksi.php');

if (!empty($_SESSION['login_user'])){
    header('location: main.php');
}

?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Login Page</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="../css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/creative.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="icon" type="icon" href="../img/favicon.png">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="page-top">
    <div class="container text-center">
        <div class="login-wrapper">
            <form role="form" method="post" action="">
                <h2>Login</h2>
                <p></p>
                <div class="form-group input-group wow bounceIn">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input name="username" class="form-control" type="text" placeholder="Username" required="" >
                </div>
                <div class="form-group input-group wow bounceIn">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input name="password" class="form-control" type="password" placeholder="Password" required="" >
                </div>
                <div class="wow bounceIn" style="text-align:right">
                    <input class="btn btn-success" type="submit" name="login" value="Login" >
                </div>
            </form>
        </div>
    </div>


    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../js/jquery.easing.min.js"></script>
    <script src="../js/jquery.fittext.js"></script>
    <script src="../js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../js/creative.js"></script>

</body>

</html>