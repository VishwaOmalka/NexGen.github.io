<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
    <?php
    session_start();
    include "navigation.php";


    ?>

    <!-- All Products -->

    <div class="small-container mt-5">
        <div class="row row-2">
            <h2>All Products</h2>
            <select>
                <option>Default Sort</option>
                <option>Sort By Price</option>
                <option>Sort By Popularity</option>
                <option>Sort By Rating</option>
                <option>Sort By Sale</option>
            </select>


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
        </div>


        <?php
        include "connection.php";

        $category_rs2 = Database::search("SELECT * FROM `category`");
        $category_num2 = $category_rs2->num_rows;

        for ($y = 0; $y < $category_num2; $y++) {
            $category_data2 = $category_rs2->fetch_assoc();
        ?>

        <!-- Category Name -->

		<div class="col-12 mt-3 mb-3">
			<a href="#" class="text-decoration-none text-dark fs-3 fw-bold">
				<?php echo $category_data2["cat_name"]; ?>
			</a> &nbsp;&nbsp;
		</div>

            <div class="row">
                <div class="col-12">
                    <div class="row justify-content-center gap-2">

                        <?php

                        $product_rs = Database::search("SELECT * FROM `product` WHERE `category_cat_id`='" . $category_data2["cat_id"] . "' 
AND `status_status_id`='1' ORDER BY `datetime_added` DESC LIMIT 4 OFFSET 0");

                        $product_num = $product_rs->num_rows;

                        for ($z = 0; $z < $product_num; $z++) {
                            $product_data = $product_rs->fetch_assoc();
                        ?>

                            <!-- Block2 -->
                            <div class="card col-6 col-lg-2 mt-2 mb-2" style="width: 18rem;">

                                <?php
                                $img_rs = Database::search("SELECT * FROM `product_img` WHERE `product_id`='" . $product_data["id"] . "'");
                                $img_data = $img_rs->fetch_assoc();
                                ?>

                                <div class="card-body ms-0 m-0 text-center">
                                    <div class="block2-pic hov-img0 label-new" data-label="New">
                                        <img src="<?php echo $img_data["img_path"]; ?>" alt="IMG-PRODUCT">

                                        <?php
                                        if ($product_data["qty"] > 0) {

                                        ?>
                                            <span class="card-text text-success fw-bold">In Stock</span><br />


                                            <a href='<?php echo "singleProductView.php?id=" . ($product_data["id"]); ?>' class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04" style="text-decoration: none;">
                                                Quick View
                                            </a>

                                        <?php

                                        } else {

                                        ?>
                                            <span class="card-text text-danger fw-bold">Out Of Stock</span><br />
                                            

                                        <?php
                                         
                                        }
                                        if (isset($_SESSION["u"])) {

                                            $watchlist_rs = Database::search("SELECT * FROM `watchlist` WHERE `user_email`='" . $_SESSION["u"]["email"] . "' 
                                                AND `product_id`='" . $product_data["id"] . "'");
                                            $watchlist_num = $watchlist_rs->num_rows;

                                            if ($watchlist_num == 0) {
                                                
                                                ?>
                                                <div class="block2-txt-child2 flex-r p-t-3">
                                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                                    <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON"  id="heart" onclick="addToWatchlist(<?php echo $product_data['id']; ?>);">
                                                    <img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON" id="heart" onclick="addToWatchlist(<?php echo $product_data['id']; ?>);">
                                                </a>
                                            </div>
                                            <?php
                                            }

                                            ?>
                                            
                                            <?php
                                            
                                        }


                                    
                                        ?>
                                        


                                    </div>

                                    <div class="block2-txt flex-w flex-t p-t-14">
                                        <div class="block2-txt-child1 flex-col-l ">
                                            <a href='<?php echo "singleProductView.php?id=" . ($product_data["id"]); ?>' class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                                <?php echo $product_data["title"]; ?>
                                            </a>

                                            <span class="stext-105 cl3">
                                                LKR. <?php echo $product_data["price"]; ?>.00
                                            </span>
                                        </div>

                                        
                                    </div>
                                </div>
                            </div>

                        <?php
                        }
                        ?>



                    </div>
                </div>
            </div>

        <?php
        }
        ?>

        <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>
        </div>
    </div>

    <!-- Back to top -->
	<div class="btn-back-to-top cl7" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

    <!-- Footer -->
    <?php

    include "footer.php";

    ?>

    <!-- javascript -->

    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";

        function menutoggle() {
            if (MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px"
            } else {
                MenuItems.style.maxHeight = "0px"
            }
        }
    </script>

</body>

</html>