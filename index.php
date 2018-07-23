<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAAF</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/material-icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Pretty-Header.css">
</head>

<body>
    <?php
        include_once "header.php";
        
        include_once "app/model/Loader.php";
    ?>
    <div class="container-fluid">
    
        <?php 
        include_once "nav_side.php";
        
        ?>
        <div class="col-md-8">
        <?php
        if(isset($_GET['q']))
        {
            if(isset($_GET['m'])) 
               if (isset($_GET['sm']))Loader::load($_GET['q'],$_GET['m']."/".$_GET['sm']); else Loader::load($_GET['q'],$_GET['m']);
        
            else Loader::load($_GET['q'],"app");
        }
        ?>
    </div>
    <?php
        include_once "nav_side_left.php";
        ?>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <?php
        include_once  "app/assets/js/gaaf_js.php";?>