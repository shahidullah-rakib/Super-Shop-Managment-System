<?php include('header.php');?>

    <!-- product sEARCH Section Starts Here -->
    <section class="product-search text-center">
        <div class="container">
            
            <form action="product-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for Product.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- product sEARCH Section Ends Here -->

    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Products</h2>

            <a href="category-products.php">
            <div class="box-3 float-container">
                <img src="../images/chocolates.jpg" alt="Chocolates" class="img-responsive img-curve">

                <h3 class="float-text text-white">Chocolates</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="../images/kitchen.jpg" alt="Kitchen Products" class="img-responsive img-curve">

                <h3 class="float-text text-white">Kitchen Products</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="../images/baby.jpg" alt="Baby Products" class="img-responsive img-curve">

                <h3 class="float-text text-white">Baby Products</h3>
            </div>
            </a>

            <a href="#">
                <div class="box-3 float-container">
                    <img src="../images/fish.jpg" alt="Fish and Meats" class="img-responsive img-curve">
    
                    <h3 class="float-text text-white">Fish and Meats</h3>
                </div>
                </a>
    
                <a href="#">
                <div class="box-3 float-container">
                    <img src="../images/cosmetics.jpg" alt="Cosmetics Product" class="img-responsive img-curve">
    
                    <h3 class="float-text text-white">Cosmetics Product</h3>
                </div>
                </a>
    
                <a href="#">
                <div class="box-3 float-container">
                    <img src="../images/milk_dairy.jpg" alt="Milk Dairy" class="img-responsive img-curve">
    
                    <h3 class="float-text text-white">Milk and Dairy</h3>
                </div>
                </a>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->

    <!-- Products Menu Section Starts Here -->
    <section class="product-menu">
        <div class="container">
            <h2 class="text-center">Products Menu</h2>

            <div class="product-menu-box">
                <div class="product-menu-img">
                    <img src="../images/menu-chocolates.jpg" alt="Chicke Hawain chocolates" class="img-responsive img-curve">
                </div>

                <div class="product-menu-desc">
                    <h4>Product Title</h4>
                    <p class="product-price">$2.3</p>
                    <p class="product-detail">
                        ..
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="product-menu-box">
                <div class="product-menu-img">
                    <img src="../images/menu-kitchen.jpg" alt="Chicke Hawain chocolates" class="img-responsive img-curve">
                </div>

                <div class="product-menu-desc">
                    <h4>Smoky kitchen</h4>
                    <p class="product-price">$2.3</p>
                    <p class="product-detail">
                        ..
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="product-menu-box">
                <div class="product-menu-img">
                    <img src="../images/menu-kitchen.jpg" alt="Chicke Hawain kitchen" class="img-responsive img-curve">
                </div>

                <div class="product-menu-desc">
                    <h4>Nice kitchen</h4>
                    <p class="product-price">$2.3</p>
                    <p class="product-detail">
                        ..
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="product-menu-box">
                <div class="product-menu-img">
                    <img src="../images/menu-chocolates.jpg" alt="Chicke Hawain chocolates" class="img-responsive img-curve">
                </div>

                <div class="product-menu-desc">
                    <h4>Product Title</h4>
                    <p class="product-price">$2.3</p>
                    <p class="product-detail">
                        ..
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="product-menu-box">
                <div class="product-menu-img">
                    <img src="../images/menu-chocolates.jpg" alt="Chicke Hawain chocolates" class="img-responsive img-curve">
                </div>

                <div class="product-menu-desc">
                    <h4>Product Title</h4>
                    <p class="product-price">$2.3</p>
                    <p class="product-detail">
                        ..
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="product-menu-box">
                <div class="product-menu-img">
                    <img src="../images/menu-baby.jpg" alt="Chicke Hawain baby" class="img-responsive img-curve">
                </div>

                <div class="product-menu-desc">
                    <h4>Chicken Steam baby</h4>
                    <p class="product-price">$2.3</p>
                    <p class="product-detail">
                        ..
                    </p>
                    <br>

                    <a href="order.php" class="btn btn-primary">Order Now</a>
                </div>
            </div>


            <div class="clearfix"></div>

            

        </div>

        <p class="text-center">
            <a href="#">See All products</a>
        </p>
    </section>
    <!-- Products Menu Section Ends Here -->

    <?php include('footer.php');?>