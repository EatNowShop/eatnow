<?php
session_start();
include("connect.php");
if( isset($_POST['name'],$_POST['email'],$_POST['password'],$_POST['address'], $_POST['gender'], $_POST['dob'])) {


    $sql = "INSERT INTO register(reg_name,reg_email,reg_password,reg_address,reg_gender,reg_dob)
VALUES
('$_POST[name]','$_POST[email]','$_POST[password]','$_POST[address]','$_POST[gender]','$_POST[dob]')"

    ;

    if (!mysqli_query($con, $sql)) {
        mysqli_close($con);
        die('Error:' . mysqli_error($con));
    }
    echo '<script>alert("Successfully registered!");</script>';
}
?>

<!DOCTYPE HTML>
<html>

<head>
<link rel="icon" type="image/x-icon" href="favicon.ico">
<title>EatNowShop</title>
<link href ="css/style.css" rel="stylesheet" type="text/css" media="all"/>

<style type="text/css">
.auto-style1 {
	border-style: solid;
	border-width: 1px;
	margin: 0 auto;
	width: 100%;
	background: #EBE7DF;
	padding-left: 4px;
	padding-right: 4px;
	padding-bottom: 1px;
}
</style>
</head>

<body>

<!--start header-->
<?php include("header.php")?>

<!--start main-->
<div class = "mainbackground" style="padding-top:50px;">

	<div class ="register_bg" style="">
        <h2 style="font-size:50px;font-family: 'Arial Black';text-align: center;">Create New Customer Account</h2>
        <center>
	<div class="register_form" style="" >

	<form style="width: 50%; height:500px; margin: auto;" method="post">
		


        <div class="register"><label class="namename">Your Name</label> <br>
            <input type="text" name="name" style="width: 300px;line-height: 30px;" required></div>
        <div class="register"> <label >Your Email</label><br>
            <input type="email" name="email" style="width: 300px;line-height: 30px;" required></div>
        <div class="register"> <label >Your Password</label><br>
            <input type="password" name="password" id="password" style="width: 300px;line-height: 30px;"></div>
        <div class="register"> <label >Comfirm Password</label><br>
            <input type="password" name="confirm_password" id="confirm_password" style="width: 300px;line-height: 30px;"></div>


        <div class="register"> <label >Your Address</label><br>
            <input type="text" name="address" style="width: 300px;line-height: 30px;"></div>
        <div class="register"> <label >Your Gender</label><br>
            <input name="gender" type="radio" value="Female" />Female
            <input name="gender" type="radio" value="Male"/>Male
        </div>
            <div class="register"><label >Your Birthday</label> <br>
                <input type="date" name="dob" style="width: 300px;line-height: 30px;" required></div>
        <div class="submit" style="float: right;">
            <input type="Submit" name="Submit" value="Submit"></div>


		
		

		</form>

		</div>
        </center>
        <script>
            var password = document.getElementById("password")
                , confirm_password = document.getElementById("confirm_password");

            function validatePassword(){
                if(password.value != confirm_password.value) {
                    confirm_password.setCustomValidity("Passwords Don't Match");
                } else {
                    confirm_password.setCustomValidity('');
                }
            }

            password.onchange = validatePassword;
            confirm_password.onkeyup = validatePassword;
        </script>

	</div>
</div >
</div>


<!--start footer-->
<?php include("footer.php")?>
</body>
</html>