<?php
include "condb.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT</title>

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

</style>
</head>
<body>
<div class="main">
<?php include("sidebar.php"); ?>
        <div class="information" style="opacity:90%;">
            <div class="upper_contact" style="background-color:black;">
                <div class="border_contact" >
                    <b style="padding-top: 3%;font-size:45px;letter-spacing: 0.5em;">CONTACT</b>
                </div>
            </div>
            <div class="contact_information">
                <div class="contact-l" style="width:100%;background-color:black;opacity:80%;">
                    <div style="display= flex;flex-direction: column;padding-left: 25%;padding-top: 8%">
                        <div class="contact_icon">
                            <a href="https://www.facebook.com/profile.php?id=100008240826148" target="_blank" style="text-decoration: none;color: black">
                                <img src="bootstrap\img\facebook.png" style="width: 190px;height: 190px;padding-right:2%" alt="">
                                <p style="padding-left:14%;color:white;">FACEBOOK</p>
                            </a>
                        </div>
                        <div class="contact_icon" >
                            <a href="https://www.instagram.com/pwtget/" target="_blank" style="text-decoration: none;color: black">
                                <img src="bootstrap\img\instagram.png" style="width: 150px;height: 150px;margin: 1rem" alt="">
                                <p style="padding-left:13%;color:white;">INSTAGRAM</p>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="contact-r" style="width:100%;">
                    <div style="display= flex;flex-direction: column;padding-left: 25%;padding-top: 8%">
                        <div class="contact_icon">
                            <a href="https://line.me/ti/p/IRL8T6EHU1" target="_blank" style="text-decoration: none;color: black">
                                <img src="bootstrap\img\line.png" style="width: 190px;height: 190px;" alt="">
                                <p style="padding-left:20%;">LINE</p>
                            </a>
                        </div>
                        <div class="contact_icon">
                            <img src="bootstrap\img\phone.png" style="width: 160px;height: 160px;margin-bottom:1rem;margin-left:1rem;" alt="">
                            <p style="padding-left:5%;">Phone : 095-816-9861</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>