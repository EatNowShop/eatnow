<?php
session_start();
include("connect.php");
?>
<?php

if(isset($_POST['submit'])){

    unset($_SESSION['cart'][$_POST['product_id']]);


}

?>

<?php

if(isset($_POST['update'])){


foreach ($_POST['quantity'] as $key=>$val){
    if($val!=0) {

        $_SESSION['cart'][$key]['quantity'] = $val;
    }
}




}

?>
<!DOCTYPE HTML>
<html>
<head>
    <link rel="icon" type=image/x-icon" href="favicon.ico">
    <title>EatNowShop</title>
    <link href ="css/style.css" rel="stylesheet" type="text/css" media="all"/>
</head>




<body>
<!--start header-->

<?php include("header.php")?>
<!--start main-->
<div class="cart_bg" style="padding-top: 200px;padding-bottom: 100px;width:1300px;margin: auto;">
    <div class="cart" style="width: 100%;">


        <?php
        if(count($_SESSION['cart'] ) > 0) {

            $sql = "SELECT * FROM product INNER JOIN category on product.category_id = category.category_id WHERE product.product_id IN (";
            foreach ($_SESSION['cart'] as $id => $value) {
                $sql .= $id . ",";
            }

            $sql = substr($sql, 0, -1) . ") ORDER BY product_name ASC";
            $query = mysqli_query($con, $sql);
            $totalprice = 0;
            while ($row = mysqli_fetch_array($query)) {
                $subtotal = $_SESSION['cart'][$row['product_id']]['quantity'] * $row['price'];
                $totalprice += $subtotal;
                ?>

        <form method ="post" action ="">
            <center>
            <table style="width: 80%;border:2px solid black;">
                <tr>
                    <td></td>
                    <td>Product Name</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Total</td>
                </tr>
                <tr>
                    <td><?php echo ' <img src="image/product/' . $row['category_label_name'] . '/' . $row['product_label_name'] . '.jpg" style="width:200px;height:200px;"/;>' ?></td>
                    <td><?php echo $row['product_name']; ?></td>
                    <td>RM<?php echo $row['price']; ?></td>
                    <td><input type="text" name="quantity[<?php echo $row['product_id'] ?>]" size="5"
                               value="<?php echo $_SESSION['cart'][$row['product_id']]['quantity']; ?>"/></td>
                    <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>"/>
                    <td>RM<?php echo $_SESSION['cart'][$row['product_id']]['quantity'] * $row['price']; ?></td>
                    <td><input type="submit" name="submit" value="x"/></td>
                </tr>
                <tr>
                    <td colspan="4">Total Price: RM<?php echo $totalprice ?></td>
                </tr>
                <tr>
                    <td colspan="4"><input type="submit" name="update"  value ="Update Quantity"/></td>
                </tr>
            </table>

    </center>


        </form>
                <?php

            }


        }else{
            echo "Your cart is empty";
        }
        ?>

    </div>
</div>

<!--start footer-->
<?php
include("footer.php")?>

</body>
</html>
