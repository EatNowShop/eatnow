
<?php
if(isset($_SESSION['login_user'])) {
    $sql = "SELECT * FROM register where reg_email = '$_SESSION[login_user]'";
    $result = mysqli_query($con,$sql);
    $user = mysqli_fetch_array($result,MYSQLI_ASSOC);
} else {
    $user = null;
}
?>
<div class ="top_bg">
<div class ="wrap">
	<div class ="logo">
		<a href="index.php"><img src ="image/logo.png" alt=""/></a>
	</div>
	<div class="login_header">

        <?php if ($user == null):?>

		<ul>
			<li><a href="login.php">Login</a></li>
			<span class="log">or</span>
			<li><a href="register.php">Register</a></li>
			<div class="clear"></div>
		</ul>

        <?php else:?>
            <div class="myaccount">
                <button onclick="myFunction()" class="accountbtn"><?php echo $user['reg_name']; ?>'s Account</button>
                <div class="myaccount-dropdown">
                <a href="myaccount.php">Manage My Account</a>
                <a href="">Track My Order</a>
            <a href="logout.php">Logout</a>

            </div>
            </div>


        <?php endif;?>
		</div>
<div class="header">
		<div class ="menu">
		<ul>
		<li class="active"><a href="index.php">Home</a></li>
		<li class="dropdown" style="position: relative;display: inline-block;"><a href="#"> Product</a>
            <div class="dropdown-content">
                <a href="products/chocolate">Chocolate</a>
                <a href="products/candies">Candies</a>
                <a href="products/potatochips">Potato Chips</a>
                <a href="products/biscuits">Biscuit and Crackers</a>
                <a href="products/nuts">Nuts</a>

            </div>

        </li>
 		<li><a href="blog.php">Blog</a></li>
		<li><a href="contact.php">Contact</a></li>
	    <li class="dropdown" style="position: relative;display: inline-block;"><a href="cart.php" style="padding-top:10px;padding-bottom:10.5px;"><img src="image/shopping.png" width="50" height="50"></a>
            <div class="dropdown-content">
                <?php

                if(count($_SESSION['cart'])> 0) {

                    $sql = "SELECT * FROM product WHERE product_id IN (";

                    foreach ($_SESSION['cart'] as $id => $value) {
                        $sql .= $id . ",";
                    }

                    $sql = substr($sql, 0, -1) . ") ORDER BY product_name ASC";
                    $query = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($query)) {


                        echo ' ' . $row['product_name'] . 'x' . $_SESSION['cart'][$row['product_id']]['quantity'] . '<br>';


                    }
                }else{
                    echo"Your cart is empty";

                }
                ?>

                <hr><a href="cart.php" style="font-size: 1.0em;padding: 10px 20px;">Go to cart</a>


            </div>



        </li>


		<div class ="clear"></div>



		</ul>




	</div>
</div>
</div>
</div>


