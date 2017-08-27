<?php
session_start();
include("connect.php");
?>
<!DOCTYPE HTML>
<html>
<link rel="icon" type=image/x-icon" href="favicon.ico">
<title>EatNowShop</title>
<link href ="css/style.css" rel="stylesheet" type="text/css" media="all"/>




<body>
<!--start header-->

<?php include("header.php")?>
<!--start main-->
<div class="blog_bg">
    <div class="left-side"style="float: left;width:60%;margin-bottom: 3%;margin-top: 3%;">
    <div class="blog_left">
        <img src="image/shop.jpg" alt="" style="width: 100%;"/>
        <h1>7 Healthy Reasons to Eat Popcorn</h1>
        <ol style="list-style-type:lower-alpha;margin-left: 25px;">
            <li>It’s packed with protein</li>
            <li>It’s a great weight-loss snack</li>
            <li>It’s a healthy whole grain</li>
            <li>You won’t get bored of it</li>
            <li>It helps stave off hunger</li>
            <li>It’s gluten-free</li>
            <li>It’s economical</li>
        </ol>
    </div>
    <div class="blog_left1">
        <img src="image/nut.jpg" alt="" style="width: 100%;"/>
        <h1>7 Healthy Reasons to Eat Popcorn</h1>
        <ol style="list-style-type:lower-alpha;margin-left: 25px;">
            <li>It’s packed with protein</li>
            <li>It’s a great weight-loss snack</li>
            <li>It’s a healthy whole grain</li>
            <li>You won’t get bored of it</li>
            <li>It helps stave off hunger</li>
            <li>It’s gluten-free</li>
            <li>It’s economical</li>
        </ol>
    </div>

    </div>
    <div class="right-side" style="width: 34%;float: right;">
    <div class="blog_right">
        <img src="image/coco.jpg" alt="" style="width:100%;"/>
        <h1>Grantea Chocolate Bar</h1>
        <p>Sweet and Good tastea chocolate bar, suitable for who are like chocolate. </p>

    </div>
    <div class="blog_right1">
        <img src="image/blog3.jpeg" alt="" style="width:100%;"/>
        <h1>Salty Potato Chips</h1>
        <p>Salt and Bbq potato chips, suitable for who are like taste salt. </p>

    </div>
        <div class="blog_right1">
            <img src="image/blog3.jpeg" alt="" style="width:100%;"/>
            <h1>Salty Potato Chips</h1>
            <p>Salt and Bbq potato chips, suitable for who are like taste salt. </p>

        </div>
    </div>

</div>


<!--start footer-->
<?php
include("footer.php")?>

</body>
