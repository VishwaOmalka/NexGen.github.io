<!DOCTYPE html>
<html lang="en">

<head>
	<title>Shoping Cart</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body class="animsition">


	<?php
	session_start();

	// include "navigation.php";

	include "connection.php";

	if (isset($_SESSION["u"])) {

		$user = $_SESSION["u"]["email"];

		$total = 0;
		$subtotal = 0;
		$shipping = 0;
	?>
		<!-- Header -->
		<header class="header-v4">
			<!-- Header desktop -->
			<div class="container-menu-desktop">
				<!-- Topbar -->
				<div class="top-bar">
					<div class="content-topbar flex-sb-m h-full container">
						<div class="left-top-bar">
							Free shipping for standard order over Rs.10,000
						</div>

						<div class="right-top-bar flex-w h-full">
							<a href="#" class="flex-c-m trans-04 p-lr-25">
								Help & FAQs
							</a>

							<a href="userProfile.php" class="flex-c-m trans-04 p-lr-25">
								My Account
							</a>

							<a href="#" class="flex-c-m trans-04 p-lr-25">
								EN
							</a>

							<a href="#" class="flex-c-m trans-04 p-lr-25">
								RS
							</a>
						</div>
					</div>
				</div>

				<div class="wrap-menu-desktop how-shadow1">
					<nav class="limiter-menu-desktop container">

						<!-- Logo desktop -->
						<a href="home.php" class="logo">
							<img src="resources/logo2.png" alt="IMG-LOGO">
						</a>

						<!-- Menu desktop -->
						<div class="menu-desktop">
							<ul class="main-menu">
								<li>
									<a href="home.php">Home</a>

								</li>

								<li>
									<a href="products.php">Shop</a>
								</li>

								<li class="label1" data-label1="hot">
									<a href="shoping-cart.php">Features</a>
								</li>

								<li>
									<a href="about.php">About</a>
								</li>

								<li>
									<a href="contact.php">Contact</a>
								</li>
							</ul>
						</div>

						<!-- Icon header -->
						<div class="wrap-icon-header flex-w flex-r-m">
							<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
								<i class="zmdi zmdi-search"></i>
							</div>

							<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="2">
								<i class="zmdi zmdi-shopping-cart"></i>
							</div>

							<a href="#" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
								<i class="zmdi zmdi-favorite-outline"></i>
							</a>
						</div>
					</nav>
				</div>
			</div>

			<!-- Header Mobile -->
			<div class="wrap-header-mobile">
				<!-- Logo moblie -->
				<div class="logo-mobile">
					<a href="home.php"><img src="resources/logo2.png" alt="IMG-LOGO"></a>
				</div>

				<!-- Icon header -->
				<div class="wrap-icon-header flex-w flex-r-m m-r-15">
					<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
						<i class="zmdi zmdi-search"></i>
					</div>

					<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
						<i class="zmdi zmdi-shopping-cart"></i>
					</div>

					<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
						<i class="zmdi zmdi-favorite-outline"></i>
					</a>
				</div>

				<!-- Button show menu -->
				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>


			<!-- Menu Mobile -->
			<div class="menu-mobile">
				<ul class="topbar-mobile">
					<li>
						<div class="left-top-bar">
							Free shipping for standard order over $100
						</div>
					</li>

					<li>
						<div class="right-top-bar flex-w h-full">
							<a href="#" class="flex-c-m p-lr-10 trans-04">
								Help & FAQs
							</a>

							<a href="#" class="flex-c-m p-lr-10 trans-04">
								My Account
							</a>

							<a href="#" class="flex-c-m p-lr-10 trans-04">
								EN
							</a>

							<a href="#" class="flex-c-m p-lr-10 trans-04">
								USD
							</a>
						</div>
					</li>
				</ul>

				<ul class="main-menu-m">
					<li>
						<a href="home.php">Home</a>

						<span class="arrow-main-menu-m">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
						</span>
					</li>

					<li>
						<a href="products.php">Shop</a>
					</li>

					<li>
						<a href="shoping-cart.php" class="label1 rs1" data-label1="hot">Features</a>
					</li>

					<li>
						<a href="about.php">About</a>
					</li>

					<li>
						<a href="contact.php">Contact</a>
					</li>
				</ul>
			</div>

			<!-- Modal Search -->
			<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
				<div class="container-search-header">
					<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
						<img src="images/icons/icon-close2.png" alt="CLOSE">
					</button>

					<form class="wrap-search-header flex-w p-l-15">
						<button class="flex-c-m trans-04">
							<i class="zmdi zmdi-search"></i>
						</button>
						<input class="plh3" type="text" name="search" placeholder="Search...">
					</form>
				</div>
			</div>
		</header>

		<?php

		$cart_rs = Database::search("SELECT * FROM `cart` WHERE `user_email`='" . $user . "'");
		$cart_num = $cart_rs->num_rows;

		if ($cart_num == 0) {
		?>
			<!-- Empty View -->
			<div class="col-12">
				<div class="row">
					<div class="col-12 emptyCart"></div>
					<div class="col-12 text-center mb-2">
						<label class="form-label fs-1 fw-bold">
							You have no items in your Cart yet.
						</label>
					</div>
					<div class="offset-lg-4 col-12 col-lg-4 mb-4 d-grid">
						<a href="home.php" class="btn btn-outline-info fs-3 fw-bold">
							Start Shopping
						</a>
					</div>
				</div>
			</div>
			<!-- Empty View -->
		<?php
		} else {
		?>
			<!-- products -->


			<!-- breadcrumb -->
			<div class="container">
				<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
					<a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
						Home
						<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
					</a>

					<span class="stext-109 cl4">
						Shoping Cart
					</span>
				</div>
			</div>


			<!-- Shoping Cart -->
			<form class="bg0 p-t-75 p-b-85">
				<div class="container">
					<div class="row">
						<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
							<div class="m-l-25 m-r--38 m-lr-0-xl">
								<div class="wrap-table-shopping-cart">
									<table class="table-shopping-cart">
										<tr class="table_head">
											<th class="column-1">Product</th>
											<th class="column-2"></th>
											<th class="column-3">Price</th>
											<th class="column-4">Quantity</th>
											<th class="column-5">Total</th>
										</tr>

										<?php

										for ($x = 0; $x < $cart_num; $x++) {
											$cart_data = $cart_rs->fetch_assoc();

											$product_rs = Database::search("SELECT * FROM `product` INNER JOIN `product_img` ON 
							product.id=product_img.product_id WHERE `id`='" . $cart_data["product_id"] . "'");
											$product_data = $product_rs->fetch_assoc();

											$total = $total + ($product_data["price"] * $cart_data["qty"]);

											$address_rs = Database::search("SELECT `district_id` AS did FROM `user_has_address` INNER JOIN `city` ON 
						user_has_address.city_city_id=city.city_id INNER JOIN `district` ON 
						city.district_district_id=district.district_id WHERE `user_email`='" . $user . "'");
											$address_data = $address_rs->fetch_assoc();

											$ship = 0;

											if ($address_data["did"] == 1) {
												$ship = $product_data["delivery_fee_colombo"];
												$shipping = $shipping + $ship;
											} else {
												$ship = $product_data["delivery_fee_other"];
												$shipping = $shipping + $ship;
											}

											$seller_rs = Database::search("SELECT * FROM `user` WHERE `email`='" . $product_data["user_email"] . "'");
											$seller_data = $seller_rs->fetch_assoc();
											$seller = $seller_data["fname"] . " " . $seller_data["lname"];

										?>

											<tr class="table_row">
												<td class="column-1">
													<div class="how-itemcart1">
														<img src="<?php echo $product_data["img_path"]; ?>" alt="IMG">
													</div>
												</td>
												<td class="column-2"><?php echo $product_data["title"]; ?> <br/> <?php echo $product_data["description"]; ?></td>
												<td class="column-3">Rs. Rs. <?php echo $product_data["price"]; ?>.00</td>
												<td class="column-4">
													<div class="wrap-num-product flex-w m-l-auto m-r-0">


														<input class="mtext-104  txt-center num-product" type="number" name="num-product1" value="<?php echo $cart_data["qty"]; ?>" onchange="changeQTY(<?php echo $cart_data['cart_id']; ?>);" id="qty_num">


													</div>
												</td>

												<td class="column-5">Rs.<?php echo $product_data["price"]; ?>.00 <br />

													<a class="btn btn-outline-danger mb-2" onclick="deleteFromCart(<?php echo $cart_data['cart_id']; ?>);">Remove</a>

												</td>
											</tr>





											



										<?php

										}

										?>





									</table>
								</div>

								


								<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
									<div class="flex-w flex-m m-r-20 m-tb-5">
										<input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="coupon" placeholder="Coupon Code">

										<div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
											Apply coupon
										</div>
									</div>

									<div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
										Update Cart
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
							<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
								<h4 class="mtext-109 cl2 p-b-30">
									Cart Totals
								</h4>

								<div class="flex-w flex-t bor12 p-b-13">
									<div class="size-208">
										<span class="stext-110 cl2">
											Subtotal:
										</span>
									</div>

									<div class="size-209">
										<span class="mtext-110 cl2">
											<?php echo ($product_data["price"] * $cart_data["qty"]); ?>
										</span>
									</div>
								</div>

								<div class="flex-w flex-t bor12 p-t-15 p-b-30">
									<div class="size-208 w-full-ssm">
										<span class="stext-110 cl2">
											Shipping:
										</span>
									</div>

									<div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
										<p class="stext-111 cl6 p-t-2">
											<span class="fw-bold text-black fs-5">Rs.<?php echo $ship; ?>.00</span>
										</p>

										<div class="p-t-15">
											<span class="stext-112 cl8">
												Calculate Shipping

											</span>



											<div class="flex-w">
												<div class="flex-c-m stext-101 cl2 size-115 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer">
													Update Totals
												</div>
											</div>

										</div>
									</div>
								</div>

								<div class="flex-w flex-t p-t-27 p-b-33">
									<div class="size-208">
										<span class="mtext-101 cl2">
											Total:
										</span>
									</div>

									<div class="size-209 p-t-1">
										<span class="mtext-110 cl2">
											<?php echo ($product_data["price"] * $cart_data["qty"]) + $ship; ?>
										</span>
									</div>
								</div>

								<button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
									Proceed to Checkout
								</button>
							</div>
						</div>
						

					</div>
				</div>

				

				

				<!-- products -->







				<!-- summary -->

			<?php
		}

			?>

			</div>
			</div>

			<?php include "footer.php"; ?>


			<!-- Back to top -->
			<div class="btn-back-to-top" id="myBtn">
				<span class="symbol-btn-back-to-top">
					<i class="zmdi zmdi-chevron-up"></i>
				</span>
			</div>
		<?php
	} else {
		echo ("Please Login or Signup first.");
	}
		?>



		<!--===============================================================================================-->
		<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
		<!--===============================================================================================-->
		<script src="vendor/animsition/js/animsition.min.js"></script>
		<!--===============================================================================================-->
		<script src="vendor/bootstrap/js/popper.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<!--===============================================================================================-->
		<script src="vendor/select2/select2.min.js"></script>
		<script>
			$(".js-select2").each(function() {
				$(this).select2({
					minimumResultsForSearch: 20,
					dropdownParent: $(this).next('.dropDownSelect2')
				});
			})
		</script>
		<!--===============================================================================================-->
		<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
		<!--===============================================================================================-->
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script>
			$('.js-pscroll').each(function() {
				$(this).css('position', 'relative');
				$(this).css('overflow', 'hidden');
				var ps = new PerfectScrollbar(this, {
					wheelSpeed: 1,
					scrollingThreshold: 1000,
					wheelPropagation: false,
				});

				$(window).on('resize', function() {
					ps.update();
				})
			});
		</script>
		<!--===============================================================================================-->
		<script src="js/main.js"></script>
		<script src="script.js"></script>
</body>

</html>