<?php
session_start();
include("connect.php");
?><!DOCTYPE HTML>
<html>
<link rel="icon" type=image/x-icon" href="favicon.ico">
<title>EatNowShop</title>
<link href ="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<style>
    div.gallery {
        margin: 5px;
        border: 1px solid #ccc;
        float: left;
        width: 400px;
        margin-top: 50px;
    }

    div.gallery:hover {
        border: 1px solid #777;
    }

    div.gallery img {
        width: 100%;
        height: auto;
    }

    div.desc {
        padding: 15px;
        text-align: center;
    }
</style>
<body>

<!--start header-->
<?php include("header.php")?>




<!--start main-->
<div class="detail_bg" style="margin:auto;overflow:auto;width:1300px;">
<div class="gallery">
    <a target="_blank" href="image/snack1.jpg">
        <img class ="mySlides" src="image/snack1.jpg" alt="Trolltunga Norway" width="300" height="200">
    </a>




    <a target="_blank" href="image/snack2.jpg">
        <img class ="mySlides" src="image/snack2.jpg" alt="Forest" width="600" height="400">
    </a>



    <a target="_blank" href="image/snack3.jpg">
        <img class ="mySlides" src="image/snack3.jpg" alt="Northern Lights" width="600" height="400">
    </a>




    <a target="_blank" href="img_mountains.jpg">
        <img class ="mySlides"   src="img_mountains.jpg" alt="Mountains" width="600" height="400">
    </a>

    <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
    <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>

</div>
</div>
<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex-1].style.display = "block";
    }
</script>
<!--start footer-->
<?php include("footer.php")?>
</body>
</html>
