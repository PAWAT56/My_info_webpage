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

.w3-margin li {
    font-size: 28px;
}


</style>
</head>
<body>
<div class="main">
<?php include("sidebar.php"); ?>
        <div class="information" style="opacity:90%;">
            <div class="upper_contact" style="background-color:black;opacity:100%;">
                <div class="border_contact" >
                    <b style="padding-top: 3%;font-size:45px;letter-spacing: 0.5em;">MY SKILLS</b>
                </div>
            </div>
            <div class="contact_information">
                <div class ="w3-margin">
                    <header><b>Soft Skills</b></header>
                    <span>
                        <ul>
                            <li>Critical Thinking</li>
                            <li>Creative Problem Solving</li>
                            <li>Emotional Intelligence</li>
                            <li>Adaptability and Flexibility</li>
                            <li>Cultural Intelligence and Diversity</li>
                            <li>Consciousness</li>
                        </ul>
                    </span>
                </div>

                <div class ="w3-margin">
                    <header><b>Hard Skills</b></header>
                    <span>
                        <ul>
                            <li>C/C++</li>
                            <li>React/React-native</li>
                            <li>Python</li>
                            <li>HTML && CSS</li>
                            <li>JavaScript</li>
                            <li>Firebase</li>
                            <li>MySQL</li>
                            <li>Microsoft Office</li>
                        </ul>
                    </span>
                </div>

            </div>
        </div>
    </div>
</body>
</html>