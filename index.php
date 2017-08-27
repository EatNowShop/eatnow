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
<?php
    $array = array();
    $array['a'] = 1;
    $array['hello'] = 'nihao!';
    echo json_encode($array);
    $new_array = json_decode('{"a":1,"hello":"nihao!"}', true);
    echo $new_array['a'];
    $cart = array();

    array_push($cart, $cart_temp);
    $cart[i]['product_id'];
    $cart[i]['quantity'];
    $exist = false;
foreach ($cart as &$Cart) {
    if ($Cart['product_id'] == $POST['product_id']) {
        $Cart['quantity'] += $_POST['quantity'];
        $exist = true;
        break;
    }
}

if (!$exist) {
    $cart_temp = array();
    $cart_temp['product_id'] = 4;
    $cart_temp['quantity'] = 6;
}
setcookie('cart', json_encode($cart), time() + 18860, '/');
$_COOKIE['cart'];
?>
<!--start main-->
<div class = "mainbackground">
<div class = "wrap">
	<div class="topmain" style="padding-bottom:50px;">
		<h2>Best Seller Chesse Biskut</h2>
		<div class="image-container">
			<img src = "image/top.jpg" alt="" />
			<span class="buy"><a href="#">Buy now</a></span>
		</div>
		<div class ="clear"></div>
	</div>

<div class="slide_bg">
	<div class="slideshow1">
		<div class="slide_container1">
			<h2 style="text-align:center;">New Arrival</h2>
			<div class="slides1"><img src="image/snack4.jpg" style="width:400px;height:250px;" alt=""></div>
			<div class="slides1"><img src="image/snack5.jpg" style="width:400px;height:250px;" alt=""></div>
			<div class="slides1"><img src="image/snack6.jpg" style="width:400px;height:250px;" alt=""></div>

		</div>
	

		<div class="slide_container2">
		<h2 style="text-align:center;">Hot Seller</h2>
			<div class="slides2"><img src="image/slide1.jpg" style="width:400px;height:250px;" alt=""></div>
			<div class="slides2"><img src="image/slide2.jpg" style="width:400px;height:250px;" alt=""></div>
			<div class="slides2"><img src="image/slide3.jpg" style="width:400px;height:250px;" alt=""></div>
	
	</div>
	</div>
</div>

   <script> var slide1Index = 0;
    showSlide1();

    function showSlide1() {
    var i;
    var slides1 = document.getElementsByClassName("slides1");
    for (i = 0; i < slides1.length; i++) {
    slides1[i].style.display = "none";
    }
    slide1Index++;
    if (slide1Index> slides1.length) {slide1Index = 1}
    slides1[slide1Index-1].style.display = "block";
    setTimeout(showSlide1, 2000); // Change image every 2 seconds
    }
   </script>

    <script> slide1Index = 0;
    showSlide1();

    function showSlide1() {
    var o;
    var slides2 = document.getElementsByClassName("slides2");
    for (o = 0; o < slides2.length; o++) {
    slides2[o].style.display = "none";
    }
    slide1Index++;
    if (slide1Index> slides2.length) {slide1Index = 1}
    slides2[slide1Index-1].style.display = "block";
    setTimeout(showSlide1, 2000); // Changse image every 2 seconds
    }


    </script>

    <!--grid -->
<div class = "gridbackground">

<div class = "main">
	<div class = "gridtitle">
		<h2>Best Seller Snack</h2>
		<div class ="clear"></div>
	</div>
	<div class ="grid1">

		<div class ="block1">
			
				<a href = "#">
				<img src="image/snack1.jpg" alt="">
				<h3>Palace Popcorn</h3>
				<span class ="price">RM10.99</span>
				</a>

			</div>
			<div class ="block1">
				<a href = "#">
				<img src="image/snack2.jpg" alt="">
				<h3>Strawberry Pocky</h3>
				<span class ="price">RM10.99</span>
				</a>

			</div>
			<div class ="block1">
				<a href = "#">
				<img src="image/snack3.jpg" alt="">
				<h3>Potato Chips</h3>
				<span class ="price">RM10.99</span>
				</a>

			</div>
				
		<div class="clear"></div>
	</div>
</div>
</div>
</div>
</div>

<!--start footer-->
<?php
include("footer.php")?>

</body>
</html>
