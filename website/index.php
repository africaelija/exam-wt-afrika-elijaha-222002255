<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("location: login.php");
    exit();
}
?> 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Bar</title>
    <link rel="stylesheet" href="Elijah.css">
</head>
<body style="background-color: rgb(232, 232, 235);">
    <div class="menu-bar">
        <ul>
            <li><a href="index.html">health club</a></li>
            <li><a href="about.html">club Reformer</a></li>
            <li><a href="product.html">club family</a></li>
            <li><a href="contact.html">golf club</a></li>
        </ul>
    </div>
    <div class="container">
    <div class="image-container">
        <img src="well.jpg" alt="Image" class="resized-image">
    </div>
    <div class="text-container">
        <h3>Your Wellness Place</h3>
            <p> With a spacious gym, new Holistic and Group Cycle Studios and high</p>
             <p2>energy group exercise classes, discover your YOU place at our club.</p>
        </div>
    </div>
    <h3>Explore Our Facilities</h3>

    <div class="container_a">
        <div class="image-container_a">
        <img src="gym.jpg" alt="Image" class="resized-image_a">
        <div class="text-container_a">
          <h3>Gym</h3>
          <br>Get fitter and healthier,<br>build strength and tone<br>muscle in our recently<br>refurbished, spacious gym<br>kitted out with the latest<br>Technogym equipment.
        </div>
    </div>

    <div class="image-container_a">
        <img src="pool.jpg" alt="Image" class="resized-image_a">
        <div class="text-container_a">
          <h3>pool</h3>
          <br>Dip your toe into lane<br>swimming, lessons or our<br>popular Aqua classes,<br>which combine the<br>benefits of water<br>resistance with dynamic<br>exercises to sculpt and<br>tone the body.
        </div>
    </div>

    <div class="image-container_a">
        <img src="class.jpg" alt="Image" class="resized-image_a">
        <div class="text-container_a">
          <h3>class</h3>
          <br>The club is your place to<br>exercise, socialise and <br>have fun. With three<br>studios providing a<br>mixture of aerobic, holistic<br>and Group Cycle classes
        </div>
    </div>

    <div class="image-container_a">
        <img src="pt.jpg" alt="Image" class="resized-image_a">
        <div class="text-container_a">
          <h3>pt</h3>
          <br>Fast-track your results with<br>the help of an experienced<br>Personal Trainer. Whatever<br>your goals, we're here to help<br>you achieve them. Ask us<br>about our free 6-week<br>Wellness Journey that is<br>personalised to you.
        </div>
    </div>
    </div>

    <div class="container_c">
        <div class="box">
            <h><u>Why Join Us?</u></h>
            <p>Experience unlimited studio classes, a pristine swimming pool,<br>spacious gym, wet spa facilities and family offerings all under one roof.</p>
            <ul>
                <ul>✓ Access to our collection of country clubs across the UK</ul>
                <ul>✓ Access to our Club Company app to book and manage classes </ul>
                <ul>✓ A personalised wellness journey tailored to your goals </ul>
                <ul>✓ Invigorating workouts in the spacious gym or heated indoor pool </ul>
                <ul>✓ 50% off Reformer Pilates in our onsite studio</ul>
                <ul>✓ Unlimited access to hundreds of live & on-demand online workouts</ul>
                <ul>✓ Huge variety of over 130 studio classes per week </ul>
                <ul>✓ The opportunity to achieve your goals with experienced Personal Trainers  </ul>
            </ul>
        </div>
        <div class="image-container_c">
            <img src="member.jpg" alt="Image" class="resized-image_c">
    </div>
    </div>

    <div class="container_d">
            <h3>Loved by members</h3>
        <div class="text-container_d">
            <br>A massive thank you too all of the instructors.<br> You have motivated, inspired and generally <br>kept me sane for the last year!
            <h3>Maxine Shepherd</h3>
        </div>
        <div class="text-container_d">
            <br>The live online classes have made a huge difference to me -<br>I've kept fit and felt connected to the club so huge <br>physical and mental benefits.
            <h3>Sarah Dixon</h3>
        </div>
    </div>

    <h3>Popular Membership Options</h3>
    <div class="container_b">
        <div class="image-container_b">
        <img src="full.jpg" alt="Image" class="resized-image_b">
        <div class="text-container_a">
          <h1>full health</h1>
          <br>Fitness that fits around you – access<br>the club any time of day to suit your<br>schedule. With absolutely no<br>restrictions, there’s nothing holding you back.
        </div>
    </div>

    <div class="image-container_b">
        <img src="life.jpg" alt="Image" class="resized-image_b">
        <div class="text-container_b">
          <h3>lifestyle</h3>
          <br>A great value package offering access to<br>the club during quieter hours. Perfect<br>for those with a bit more flexibility.
        </div>
    </div>

    <div class="image-container_b">
        <img src="family.jpg" alt="Image" class="resized-image_b">
        <div class="text-container_b">
          <h3>family membership</h3>
          <br>With a creche, swimming lessons and<br>loads of family activities on offer, you’ll<br>find something for everyone with our<br>family membership.
        </div>
    </div>
    </div>

    <div class="container_c">
        <div class="image-container_c">
            <img src="ready.jpg" alt="Image" class="resized-image_c">
        </div>
        <div class="text-container_c">
            <h3>Ready To Join Us?</h3>
                <p> The quickest and easiest way to join us, your membership is <br>just a click away when you join online.</p>
                 <p2>Tour the club, speak with our membership team and see our members enjoying <br>all our club offers. Choose a timeslot and visit us; <br>we can't wait to show you around.</p>
            </div>
        </div>

        <div class="container_1">
            <div class="text-container_1">
                <h3>The Warwickshire</h3>
                <br>Leek Wootton,<br>Warwick,<br>Warwickshire,<br>CV35 7QT.
            </div>
        </div>

        <div class="container_0">
            <div class="text-container_01">
                <ul>
                    <ul><a href="https://www.thewarwickshire.com/policies-and-documents/?_gl=1*1xzok9n*_up*MQ..*_ga*MjA1MDYzNDEwLjE3MTUxNTMyNzA.*_ga_0PMT4WK2DT*MTcxNTE1MzI2OS4xLjAuMTcxNTE1MzI2OS4wLjAuMA..*_ga_ZBYJ2ZS3D7*MTcxNTE1MzI3MC4xLjAuMTcxNTE1MzI3MC4wLjAuMA..&gclid=Cj0KCQjwxeyxBhC7ARIsAC7dS39FV5VVQDM6Zu2BIkAfXzdAvtj3Z6eu_8nsWHuXhrUBZkJpkSeUMoUaAq8jEALw_wcB">policies and documents</a></ul>
                    <ul><a href="https://www.thewarwickshire.com/contact-us/?_gl=1*1g7p949*_up*MQ..*_ga*NzE0MzUyMjUxLjE3MTUxNTM0MDk.*_ga_0PMT4WK2DT*MTcxNTE1MzQwOC4xLjAuMTcxNTE1MzQwOC4wLjAuMA..*_ga_ZBYJ2ZS3D7*MTcxNTE1MzQwOC4xLjAuMTcxNTE1MzQwOC4wLjAuMA..&gclid=Cj0KCQjwxeyxBhC7ARIsAC7dS39FV5VVQDM6Zu2BIkAfXzdAvtj3Z6eu_8nsWHuXhrUBZkJpkSeUMoUaAq8jEALw_wcB">contact us </a></ul>
                    <ul><a href="https://workingfor.theclubcompany.com/?_ga=2.8326326.568854305.1715153448-1050842272.1715153448">working for us</a></ul>
                    <ul><a href="https://golf.thewarwickshire.com/login.php?_ga=2.114370819.568854305.1715153448-1050842272.1715153448&_gl=1*ps0hxq*_up*MQ..*_ga*MTA1MDg0MjI3Mi4xNzE1MTUzNDQ4*_ga_ZBYJ2ZS3D7*MTcxNTE1MzQ0OC4xLjAuMTcxNTE1MzQ0OC4wLjAuMA..*_ga_0PMT4WK2DT*MTcxNTE1MzQ0OC4xLjAuMTcxNTE1MzQ0OC4wLjAuMA..&gclid=Cj0KCQjwxeyxBhC7ARIsAC7dS39FV5VVQDM6Zu2BIkAfXzdAvtj3Z6eu_8nsWHuXhrUBZkJpkSeUMoUaAq8jEALw_wcB">login</a></ul>
                </ul>
            </div>
            <div class="text-container_0">
            <ul><h>legals</h>
                <ul><a href="https://www.thewarwickshire.com/privacy-policy/?_gl=1*1x18z4l*_up*MQ..*_ga*NTE5NzYwNTAwLjE3MTUxNTI4NjQ.*_ga_0PMT4WK2DT*MTcxNTE1Mjg2Ni4xLjAuMTcxNTE1Mjg2Ni4wLjAuMA..*_ga_ZBYJ2ZS3D7*MTcxNTE1Mjg2Ni4xLjAuMTcxNTE1Mjg2Ni4wLjAuMA..&gclid=Cj0KCQjwxeyxBhC7ARIsAC7dS39kgbQTY1hWlkRRrn19Pxbus5YEiy1AZjCEeANs86V3KXt3CLRtQsYaAkNuEALw_wcB">privacy policy</a></ul>
                <ul><a href="https://www.thewarwickshire.com/assets/documents/17.pdf?_gl=1*1miqyhx*_up*MQ..*_ga*MTc4NTMyMzA0NS4xNzE1MTUyOTc3*_ga_ZBYJ2ZS3D7*MTcxNTE1Mjg2Ni4xLjEuMTcxNTE1Mjk3Ni4wLjAuMA..*_ga_0PMT4WK2DT*MTcxNTE1Mjk3Ni4xLjAuMTcxNTE1Mjk3Ni4wLjAuMA..&gclid=Cj0KCQjwxeyxBhC7ARIsAC7dS39kgbQTY1hWlkRRrn19Pxbus5YEiy1AZjCEeANs86V3KXt3CLRtQsYaAkNuEALw_wcB">gender pay gap report </a></ul>
                <ul><a href="https://www.thewarwickshire.com/assets/documents/38.pdf?_gl=1*1et0ct*_up*MQ..*_ga*MjA1MDYzNDEwLjE3MTUxNTMyNzA.*_ga_0PMT4WK2DT*MTcxNTE1MzI2OS4xLjAuMTcxNTE1MzI2OS4wLjAuMA..*_ga_ZBYJ2ZS3D7*MTcxNTE1MzI3MC4xLjAuMTcxNTE1MzI3MC4wLjAuMA..&gclid=Cj0KCQjwxeyxBhC7ARIsAC7dS39FV5VVQDM6Zu2BIkAfXzdAvtj3Z6eu_8nsWHuXhrUBZkJpkSeUMoUaAq8jEALw_wcB">modern slavery statement</a></ul>
                <ul><a href="https://www.thewarwickshire.com/assets/documents/486.pdf?_gl=1*1et0ct*_up*MQ..*_ga*MjA1MDYzNDEwLjE3MTUxNTMyNzA.*_ga_0PMT4WK2DT*MTcxNTE1MzI2OS4xLjAuMTcxNTE1MzI2OS4wLjAuMA..*_ga_ZBYJ2ZS3D7*MTcxNTE1MzI3MC4xLjAuMTcxNTE1MzI3MC4wLjAuMA..&gclid=Cj0KCQjwxeyxBhC7ARIsAC7dS39FV5VVQDM6Zu2BIkAfXzdAvtj3Z6eu_8nsWHuXhrUBZkJpkSeUMoUaAq8jEALw_wcB">april 2024 gold offer</a></ul>
            </ul>
        </div>
        <a href="index.html"><i class="fa-brands fa-facebook"></i></a>
        <a href="about.html"><i class="fa-brands fa-instagram"></i></a>
        <a href="product.html">club family</a></li>
    </div>

</body>
</html>
