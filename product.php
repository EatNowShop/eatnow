<?php
session_start();
include("connect.php");
?>

<!DOCTYPE HTML>
<html>
<head>
    <base href="../" />
    <link rel="icon" type=image/x-icon" href="favicon.ico">
    <title>EatNowShop</title>
    <link href ="css/style.css" rel="stylesheet" type="text/css" media="all"/>
</head>
<body>
<!--start header-->
<?php include("header.php")?>




<!--start main-->
<div class = "productbackground">
<div class = "wrap">

<!--grid -->
<div class = "gridbackground">

<div class = "main">
	<div class = "gridtitle">

		<div class ="clear"></div>
	</div>
	<div class ="grid1">
        <?php
        if($_SERVER['REQUEST_METHOD']=="GET"){
            $Category =mysqli_real_escape_string($con,$_GET['category_label']);


            $sql = "SELECT category.category_name, product.product_name,product.product_label_name,price FROM category inner JOIN product on category.category_id = product.category_id  where category_label_name ='$Category'";
            $result =mysqli_query($con,$sql);

            while( $showproduct = mysqli_fetch_array($result,MYSQLI_ASSOC)) {

                echo '

		<div class ="block1">

				<a href = "details/'.$Category.'/'.$showproduct['product_label_name'].'">
                    <img src="image/product/' . $Category . '/' . $showproduct['product_label_name'] . '.jpg" /;>
                  
		           <h3>'.$showproduct['product_name'].'</h3>
				<span class ="price">RM'.$showproduct['price'].'</span>
				</a>

			</div>';
            }




        }
        ?>



		<div class="clear"></div>
	</div>
</div>
</div>
    <div class="delivery" style="float:left;width: 50%;">
        <div class="delivery_block" style="display: block;border:1px solid darkslateblue;background-color: #ACB7EF;color: black;"><p>Delivery Free in Malaysia if purchase >RM50</p></div>
    </div>

</div>
</div>

<!--start footer-->
<?php include("footer.php")?>
</body>
</html>
