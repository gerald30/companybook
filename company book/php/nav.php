<?php
session_start();
if(!isset($_SESSION['name'])){
    echo "Access Denied";
    header("Refresh:3; url=../index.html");
    exit;
}
?>
    <title>Company Book</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../js/jquery12.js"></script>
    <script src="../bootstrap-3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../font-awesome-4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../bootstrap-3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="../myCss/nav.css">
    <link rel="stylesheet" type="text/css" href="../myCss/myCss.css">
<style>
    div.down {
        padding-top: 50px;
        text-align: center;
    }
</style>
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../index.html">
                <img src="../image/logo.png" alt="logo" width="70px" height="60px">
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="admin.php">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
                <li>
                    <a href="logout.php">logout</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<div class="container down">
