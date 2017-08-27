
<?php
session_start();
include("connect.php");
$reg_id = (isset($_GET['reg_id'])) ? $_GET['reg_id'] : null;
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
<?php
if( isset($_POST['name'])){
$sql = "UPDATE register SET reg_name='$_POST[name]', reg_password='$_POST[password]',reg_address='$_POST[address]',reg_dob='$_POST[dob]' where reg_email = '$_SESSION[login_user]' ";
if (mysqli_query($con, $sql)) {

mysqli_close($con);
header('location:myaccount.php');
}
}
?>

<div class = "mainbackground" style="padding-top:50px;">

    <div class ="register_bg" style="">
        <h2 style="font-size:50px;font-family: 'Arial Black';text-align: center;">My Profile</h2><hr>
        <center>
        <div class="register_form" style="width: 50%;" >
            <form method="post">
                <input type="text" name="reg_id" style="width: 300px;line-height: 30px;" value="<?php echo $user['reg_id']; ?>"/>
             <div class="edit_left"> <label>Your Name</label>   </div><div class="edit_right"><input type="text" name="name" style="width: 300px;line-height: 30px;" value="<?php echo $user['reg_name']; ?>"/></div>  <br>
                <div class="edit_left"><label>Your Password</label>  </div>  <div class="edit_right"> <input type="password" name="password" style="width: 300px;line-height: 30px;" value="<?php echo $user['reg_password']; ?>"/></div><br>
                <div class="edit_left"><label>Your Address</label> </div>    <div class="edit_right"><input type="text" name="address" style="width: 300px;line-height: 30px;" value="<?php echo $user['reg_address']; ?>"/></div>  <br>
                <div class="edit_left"><label>Your Birthday</label> </div>  <div class="edit_right"><input type="date" name="dob" style="width: 300px;line-height: 30px;" value="<?php echo $user['reg_dob']; ?>"/></div> <br>
                <div class="edit_left"></div>  <input type="submit" value="Update" name="submit"/><div class="edit_left"></div>

            </form>
            <?php
            echo "<a href=\"myaccount.php?reg_id=";
            echo $user['reg_id'];
            echo "\" onClick=\"return confirm('Delete ";
            echo $user['reg_name'];
            echo " details?');\">Delete Account</a>";

            ?>
        </div>
        </center>


    </div>
</div >
</div>
<?php include("connect.php");
if ($reg_id != null) {
    $id = $_GET['reg_id'];
    $result = mysqli_query($con, "DELETE FROM register WHERE reg_id=$id");
    mysqli_close($con);
    header('location:index.php;');
}
?>

<!--start footer-->
<?php include("footer.php")?>
</body>
</html>