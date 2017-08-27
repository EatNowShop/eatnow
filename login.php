<?php include("connect.php");

session_start();

if($_SERVER['REQUEST_METHOD'] =="POST"){

    $myusername = mysqli_real_escape_string($con,$_POST['username']);
    $mypassword = mysqli_real_escape_string($con,$_POST['password']);

    $sql = "SELECT reg_id FROM register where reg_email ='$myusername' and reg_password='$mypassword'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($result);
    mysqli_close($con);

    if ($count == 1){
        $_SESSION['login_user'] = $myusername;
        $_SESSION['login_password']=$mypassword;
        header("location: index.php");
    }else {
        echo "<script type='text/javascript'>alert('Your username or password is not matched')</script>";
        session_destroy();
    }
}


?>

<!DOCTYPE HTML>
<!--start connect user database-->


<html>
<link rel="icon" type="image/x-icon" href="favicon.ico">
<title>EatNowShop</title>
<link href ="css/style.css" rel="stylesheet" type="text/css" media="all"/>

<body>
<!--start header-->
<?php include("header.php");?>


<!--start main-->
<div class = "mainbackground" style="padding-top:50px;">

	<div class ="login_bg">
    <center><div class="login_block">

	<form style="width: 400px; height:500px; margin: auto;padding-top:30px;" method="post" action="">
		
		<h2 style="padding-bottom:25px;font-size:50px;">Welcome to Login</h2>
		
		
		
	
	<label style="float: left; clear: both;font-size:25px;">Username:</label><input type ="text" name="username" placeholder="gmail or username" style="float: right;font-size:20px;"><br><br>
		<label style="float: left; clear: both;font-size:25px;">Password:</label><input type ="password" name="password" placeholder="" style="float: right;font-size:20px;"/>
		<div class="button" style="padding-top:50px;"><br><input type ="submit" name="Login" value="Login" /></div>
		
		</form>
        </div>
    </center>
	</div>
</div >



<!--start footer-->
<?php include("footer.php")?>
</body>
</html>
