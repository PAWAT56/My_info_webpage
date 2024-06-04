<?php
include "condb.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY SKILLS</title>

    <link rel="stylesheet" href="css\main.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<style>
body {
    background-image: url("bootstrap/img/background.jpg");
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}

.pink-box {
        width: 100%; 
        height: 3px; 
        background-color: rgb(0,212,255,1);
        display: flex;
        margin-top: 0.7rem;
        margin-bottom: 0.7rem;
    }

.blue-text{
    color: rgb(74,67,201);
}

.white-text{
    color: rgb(0,0,0);
}

.buttonsidebar{
    padding-top: 1rem;
    width:100%;
    margin-top: 5rem;
    margin-bottom: 4rem;
}

.buttonsidebar a {
    font-size: 25px;
    text-decoration: none;
    color: white;
}

.bottomsidebar {
    color: white;
}

.bottomsidebar a:hover, a:active {
    background-color: gray;

}

.w3-margin header {
    text-decoration: underline;
    font-size:40px;
}

.w3-margin span {
    list-style-type: disc;
    padding-left: 20px;
    display: block;
}

.w3-margin p {
    font-size: 28px;
}


</style>
</head>
<body>
<div class="main">
<?php include("sidebar.php"); ?>
    <div class="information" style="opacity:90%;overflow-y: auto;">
        <div>
            <?php include("slideshowsbw.php") ?>
            <div class="w3-margin" style="text-align:center;">
                <header><b style="">Saraburiwittayakhom School</b></header>
                <span>
                    <ul>
                        <p>I started studying from 2014 to 2019</p>
                        <p>GPX : 3.27</p>
                    </ul>
                </span>
            </div>
        </div>
        <div class="w3-margin" style="text-align:center;">
            <?php include("slideshowsrc.php") ?>
            <header><b style="">Kasetsart University Sriracha Campus </b></header>
            <span>
                    <ul>
                        <p>I started studying from 2020 to 2024</p>
                        <p>GPX : 3.02</p>
                    </ul>
            </span>
        </div>
    </div>
</div>
</body>
</html>