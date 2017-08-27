<?php
session_start();
include("connect.php");
?>
<?php

if(isset($_GET['action']) && $_GET['action']=="add"){

    $id=intval($_GET['id']);

    if(isset($_SESSION['cart'][$id])){
        $_SESSION['cart'][$id]['quantity']++;

    }else{

        $sql_s="SELECT * FROM product  WHERE product_id=$id";
        $result=mysqli_query($con,$sql_s);
        mysqli_store_result($con);
        $numrows = mysqli_num_rows($result);
        if($numrows != 0){
            $row_s=mysqli_fetch_array($result);

            $_SESSION['cart'][$row_s['product_id']]=array(
                "quantity" => 1,
                "price" => $row_s['price']
            );


        }else{

            $message="This product id it's invalid!";

        }

    }

}

?>

<!DOCTYPE HTML>
<html>
<head>
    <base href="../../" />
    <link rel="icon" type=image/x-icon" href="favicon.ico">
    <title>EatNowShop</title>
    <link href ="css/style.css" rel="stylesheet" type="text/css" media="all"/>
</head>



<body>
<!--start header-->

<?php include("header.php")?>
<!--start main-->
<div class="detail_bg">
    <div class ="detail_wrap">
        <div class ="detail_left">
            <H1>Product</H1>
            <?php
            if(isset($message)){
                echo "<h2>$message</h2>";
            }
            ?>
            <?php
            if($_SERVER['REQUEST_METHOD']=="GET"){
                $Category =mysqli_real_escape_string($con,$_GET['category_label']);
                $Product = mysqli_real_escape_string($con,$_GET['product_label']);


                $sql = "SELECT * FROM category inner JOIN product on category.category_id = product.category_id  where category_label_name ='$Category' and product_label_name='$Product'";
                $result =mysqli_query($con,$sql);

                while ($showproduct = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                    echo ' <div class="image_block">
                        
            <img src="image/product/' . $Category . '/' .$showproduct['product_label_name'] . '.jpg"/;>
            
            </div>
            <div class="product_detail">
                <h1>' . $showproduct['product_name'] . '</h1>
                <span class="itemprice" style="color: #635f88;font-size:25px;font-family: \'Lucida Sans Unicode\'; ">RM' . $showproduct['price'] . '</span>
                <p>'.$showproduct['product_description'].'</p>
                <div class = "buttoncart">
                <button onclick="" class="cartbutton" value="Add to Cart"><a href="details/'.$Category.'/'.$showproduct['product_label_name'].'?&action=add&id='.$showproduct['product_id'].'">Add to Cart</a></button>
                <div class="clear"></div>
</div>
<div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>';


                }

            }

            ?>





    </div>
    <div class ="clear"></div>

</div>
    <h1>Cart</h1>

<!--start footer-->
<?php
include("footer.php")?>

</body>
</html>
