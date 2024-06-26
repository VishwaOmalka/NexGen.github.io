<!DOCTYPE html>
<html>
<head>
	<title>MyFashion</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style>
		html {
  			scroll-behavior: smooth;
		}
	</style>
</head>
<body>
	<!---------------- Nav Bar --------------->
	<div class="navigate" style="background-color: #EEE2DC">
		<img src="images\logo.png" height="40" width="45" alt="logo"><strong><i><span style="font-size: 25px; color: #123C69">MyFashion</span></i></strong>&emsp;&emsp;&emsp;
		<a href="e-commerce (home).html">Home</a>
		<div class="dropdown">
		  <a href="women.html">Women <i class="fa fa-caret-down"></i></a>
		  <ul class="dropdown-content" style="list-style-type: none;">
			  <li><a href="women.html #dresses">Dresses</a></li>
			  <li><a href="women.html #jeans">Jeans</a></li>
			  <li><a href="women.html #tops">Tops</a></li>
			  <li><a href="women.html #w-watches">Watches</a></li>
			  <li><a href="women.html #Accessories">Accessories</a></li>
			  <li><a href="women.html #w-shoes">Shoes</a></li>
		  </ul>
		</div>
		<div class="dropdown">
		  <a href="men.html">Men <i class="fa fa-caret-down"></i></a>
		  <ul class="dropdown-content" style="list-style-type: none;">
			  <li><a href="men.html #casuals">Casuals</a></li>
			  <li><a href="men.html #m-watches">Watches</a></li>
			  <li><a href="men.html #m-shoes">Shoes</a></li>
		  </ul>
		</div>
		<div class="dropdown">
		  <a href="home_decor.html">Home Decor <i class="fa fa-caret-down"></i></a>
		  <ul class="dropdown-content" style="list-style-type: none;">
			  <li><a href="home_decor.html #clock">Clocks</a></li>
			  <li><a href="home_decor.html #mirror">Mirrors</a></li>
			  <li><a href="home_decor.html #showpieces">Showpieces&Vases</a></li>
			  <li><a href="home_decor.html #aromas">Aromas&Candles</a></li>
		  </ul>
		</div>
		<a href="cart.html" class="cart"><i class="fa fa-shopping-cart fa-2x"></i><span>0</span></a>
        <div class="dropdown">
		  <a href="#"><i class="fa fa-user fa-2x"></i></a>
		  <ul class="dropdown-content" style="list-style-type: none;">
			  <li><a href="">Wishlist</a></li>
			  <li><a href="login_home.html" onclick="logout()">Logout</a></li>
		  </ul>
		</div>
	</div>

	<div class="products-container row" style="margin-top: 4%;margin-left: 5%">
        <div class="product-header col">
            <h5 class="product-title">PRODUCT</h5>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            <h5 class="price col">PRICE</h5>
        </div>
        <!---------------- Product details --------------->
        <div class="wList row">
            
        </div>
    </div>


    	<!---------------- Footer --------------->
	<div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                        	<li><a href="#">Best quality products</a></li>
                            <li><a href="#">World wide shipping</a></li>
                            <li><a href="#">Easy 30 days return</a></li>
                            <li><a href="#">Money back guarantee</a></li>
                            <li><a href="#">Delivery in 7 days</a></li>
                        </ul><br>
                    </div>
                    <div class="col-md-3 item">
                        <h3>Contact Info</h3>
                        <ul style="opacity:0.6;">
                        	<li><a href=""><i class="fa fa-map-marker fa-2x"></i></a>&emsp; MyFashion - Fashion store, Paris</li><br>
                            <li><a href=""><i class="fa fa-envelope fa-2x"></i></a>&emsp;myfashion@company.com</li><br>
                            <li><a href=""><i class="fa fa-phone fa-2x"></i></a>&emsp;111-111-1111</li>
                        </ul>
                    </div>
                    <div class="col-md-3 item text">
                    	<br>
                        <h3>MyFashion</h3>
                        <p style="opacity:0.6;margin-bottom:0;">Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p><br>
                    </div>
                    <div class="col item social">
                    	<a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                    	<a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                    	<a href="https://twitter.com/?lang=en"><i class="fa fa-twitter"></i></a>
                    </div>
                </div><br>
                <p style="opacity:0.3;text-align: center;font-style: italic;">Copyright 2021 - DC</p>
            </div>
        </footer>
    </div>

    <script src="login.js"></script>
	<script src="main.js"></script>
</body>
</html>