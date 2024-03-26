<?php
include "connection.php";

session_start();
if (isset($_GET["id"])) {

  $pid = $_GET["id"];

  $product_rs = Database::search("SELECT product.id,product.price,product.qty,product.description,
    product.title,product.datetime_added,product.delivery_fee_colombo,product.delivery_fee_other,
    product.category_cat_id,product.model_has_brand_id,brand_name,product.condition_condition_id,
    product.status_status_id,product.user_email,model.model_name AS mname,brand.brand_name AS bname FROM 
    `product` INNER JOIN `model_has_brand` ON model_has_brand.id=product.model_has_brand_id INNER JOIN 
    `brand` ON brand.brand_id=model_has_brand.brand_brand_id INNER JOIN `model` ON 
    model.model_id=model_has_brand.model_model_id WHERE product.id='" . $pid . "'");

  $product_num = $product_rs->num_rows;
  if ($product_num == 1) {

    $product_data = $product_rs->fetch_assoc();

?>
    <!DOCTYPE html>
    <html>

    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title><?php echo $product_data["title"]; ?> | NexGen</title>
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
      <!-- CSS -->

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
      <link rel="stylesheet" href="style4.css">
      <link rel="stylesheet" href="bootstrap.css" />


    </head>

    <body class="body">


      <?php include "navigation.php"; ?>



      <div class="container">

        <div class="container2 single-product">
          <div class="row">
            <div class="col-4">
              <?php
              $image_rs = Database::search("SELECT * FROM `product_img` WHERE `product_id`='" . $pid . "'");
              $image_num = $image_rs->num_rows;
              $img = array();

              if ($image_num != 0) {
                for ($x = 0; $x < $image_num; $x++) {
                  $image_data = $image_rs->fetch_assoc();
                  $img[$x] = $image_data["img_path"];
              ?>
                  <li class="d-flex flex-column justify-content-center align-items-center 
                                border border-1 border-secondary mb-1">
                    <img src="<?php echo $img[$x]; ?>" class="img-thumbnail mt-1 mb-1" id="productImg<?php echo $x; ?>" onclick="loadMainImg(<?php echo $x; ?>);" />
                  </li>
              <?php
                }
              }
              ?>
            </div>
            <div class="col-6">
              <p> <a href="home.php" style="text-decoration: none;">Home</a> / <?php echo $product_data["title"]; ?></p>
              <h3><?php echo $product_data["brand_name"]; ?> | <br /><?php echo $product_data["title"]; ?></h3>
              <h3 class="price" style="font-family: Impact, Haettenschweiler, 'Arial Narrow ', sans-serif;">Rs. <?php echo $product_data["price"]; ?></h3>

              <select>

                <option value="0">Select Color</option>
                <?php

                $color_rs = Database::search("SELECT * FROM `color`");
                $color_num = $color_rs->num_rows;

                for ($x = 0; $x < $color_num; $x++) {
                  $color_data = $color_rs->fetch_assoc();
                ?>
                  <option value="<?php echo $color_data["clr_id"]; ?>">
                    <?php echo $color_data["clr_name"]; ?>
                  </option>
                <?php
                }

                ?>
              </select>

              <br />

              <div class="row g-4">

                <div class=" float-left mt-1 product-qty" id="zoom-img">
                  <div class="col-12 border border-1 border-secondary rounded">
                    <span>Quantity : </span>
                    <input onkeyup='check_value(<?php echo $product_data["qty"]; ?>);' type="text" class="img-product border-0 fs-5 fw-bold text-start" style="outline: none;" pattern="[0-9]" value="1" id="qty_input" />

                    <div class="position-absolute qty-buttons">
                      <div class="justify-content-center d-flex flex-column align-items-center border border-1 border-secondary qty-inc">
                        <i class="bi bi-caret-up-fill text-primary fs-5" onclick='qty_inc(<?php echo $product_data["qty"]; ?>);'></i>
                      </div>
                      <div class="justify-content-center d-flex flex-column align-items-center border border-1 border-secondary qty-dec">
                        <i class="bi bi-caret-down-fill text-primary fs-5" onclick="qty_dec();"></i>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

              <br />
              <br />
              <br />
              <button class="btn1" type="submit" style="text-decoration: none;" onclick="payNow(<?php echo $pid; ?>);">Bye Now</button> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;


              <button class=" btn2 btn-dark mt-2">
                <i class="bi bi-cart-plus-fill text-white fs-5" onclick="addToCart(<?php echo $product_data['id']; ?>);"></i>
              </button>

              <br/>

              <span class="fs-5 text-primary"><b>In Stock : </b><?php echo $product_data["qty"]; ?> Items Available</span>

              <br/>
              <br/>
              

              <h3>Product Details</h3>
              <p>
                <?php echo $product_data["description"]; ?>
              </p>

              <?php
              $seller_rs = Database::search("SELECT * FROM `user` WHERE `email`='" . $product_data["user_email"] . "'");
              $seller_data = $seller_rs->fetch_assoc();
              ?>

              <div class="col-12 col-lg-6 border border-1 border-dark text-center">
                <span class="fs-5 text">Seller : <?php echo $seller_data["fname"]; ?> <?php echo $seller_data["lname"]; ?></span>
              </div>
            </div>

          </div>




        </div>




        <!-- Scripts -->
        <script src="bootstrap.bundle.js"></script>
        <script src="script.js"></script>
        <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>



        <!-- footer -->
        <div class="col-12 fixed-bottom d-none d-lg-block">
          <p style="text-decoration: none;" class="text-center">&copy; 2024 NexGenElectronics | All Rights Reserved</p>
        </div>
        <!-- footer -->
    </body>

    </html>
<?php

  } else {
    echo ("Sorry for the inconvenience.Please try again later.");
  }
} else {
  echo ("Something Went Wrong.");
}

?>