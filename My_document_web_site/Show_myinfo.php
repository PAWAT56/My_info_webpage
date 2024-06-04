<?php
include "condb.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/main.css">
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

</style>
</head>

<body>
    <div class="main">
        <?php include("sidebar.php"); ?>
        <div class="information">
            <div class="topbar"></div>
            <div class="content">
                <div class="content-left">
                    <div class="imageborder">
                        <img src="bootstrap/img/my_photo.jpg" alt="">
                    </div>
                </div>
                <div class="content-right">
                    <h1>Hi,I'm <h1 class="blue-text">Pawat Attasampunna</h1></h1>
                    <div class="pink-box"></div>
                    <h2>ABOUT ME</h2>
                    <br>
                    <p>I recently graduated with a Bachelor’s degree in Computer Engineering from the Faculty of Engineering, at Kasetsart University. Throughout my studies, I have been diligent in my research and efforts, which has led to successful outcomes, culminating in a GPA of 3.02. I have a keen interest in Web development, I'm proficient in Python, C++, JavaScript, React, and PHP. I have experience in website design and development.
I have completed my studies in Software Engineering and have a strong interest in developing websites, both on the backend and frontend. I have applied my web development and data analysis knowledge in my final project, and I excel in problem-solving. Additionally, I work well with others, am easy to get along with, and am always ready to learn new things.
</p>
                </div>
            </div>
            <div class="profile">
                <b>PROFILE</b>
                <br>
                <br>
                <h2>FULL NAME</h2>
                <div class="topbar"></div>
                <p>Pawat Attasampunna</p>
                <br>
                <h2>BORN</h2>
                <div class="topbar"></div>
                <p>28 MAY 2002</p>
                <br>
                <h2>NATIONALITY</h2>
                <div class="topbar"></div>
                <p>Thai</p>
                <br>
                <h2>GENDER</h2>
                <div class="topbar"></div>
                <p>Men</p>
                <br>
                <h2>ADDRESS</h2>
                <div class="topbar"></div>
                <p>137 Moo 11 Ban Mo Subdistrict,Tha Ruea District, Saraburi Province 18130</p>
                <br>
                <h2>COUNTRY</h2>
                <div class="topbar"></div>
                <p>Thailand</p>
                <br>
                <h2>REGION</h2>
                <div class="topbar"></div>
                <p>Saraburi</p>
                <br>
                <h2>UNIVERSITY</h2>
                <div class="topbar"></div>
                <p>Kasetsart University Sriracha Campus</p>
                <br>
            </div>
        </div>
    </div>
</body>
</html>