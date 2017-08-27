<?php
session_start();
include("connect.php");
?>
<!DOCTYPE HTML>
<html>
<link rel="icon" type="image/x-icon" href="favicon.ico">
<title>EatNowShop</title>
<link href ="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<body>
<!--start header-->
<?php include("header.php")?>




<!--start main-->
<div class = "mainbackground">
<div class = "wrap">

<h2 style="font-family:'Arial Black';text-align: center;font-size: 50px;color: #2f2e7b;">Contact Us</h2>
    <div class = "contact_left" style="float: left;width: 50%;">
        <h3>Find Us On Map</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31906.730530884895!2d103.75638146635103!3d1.5590688768759537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da6e7d98591fc7%3A0x631c6482e6f333c!2sAustin+Heights%2C+81100+Johor+Bahru%2C+Johor%2C+Malaysia!5e0!3m2!1sen!2s!4v1502805504129" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

        <div class="information" style="display: block;border: 2px solid #2f2e7b;width: 250px;height: 150px;box-shadow: #ACB7EF;background-color: #f1f1f1;">
            <label style="text-align: right;"> Contact Number:</label>0108257897<br>
            <label style="text-align: right;"> Email:</label> Eatnowshop@hotmail.com
        </div>
    </div>
    <div class="contact_right" style="float:left;width: 50%;">
        <form>
          <div class="name"><label >Your Name</label> <br>
            <input type="text" name="name" style="width: 300px;line-height: 30px;" required></div>
            <div class="email"> <label >Your Email</label><br>
                <input type="email" name="email" style="width: 300px;line-height: 30px;" required></div>
            <div class="phone"> <label >Your Phone</label><br>
                <input type="tel" name="phone" style="width: 300px;line-height: 30px;"></div>
            <div class="phone"> <label >Your Problem</label><br>
                <input type="text" name="problem" style="width: 300px;line-height: 30px;"></div>
            <div class="submit" style="float: right;">
                <input type="Submit" name="Submit" value="Submit"></div>
            </div>
        </form>

    </div>

</div>
</div>

<!--start footer-->
<?php include("footer.php")?>
</body>
</html>
