<?php include('header.php');?>

    <!-- product sEARCH Section Starts Here -->
    <section class="product-search">
        <div class="container">
            
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>

            <form action="#" class="order">
                <fieldset>
                    <legend>Selected product</legend>

                    <div class="product-menu-img">
                        <img src="../images/menu-chocolates.jpg" alt="Chicke Hawain chocolates" class="img-responsive img-curve">
                    </div>
    
                    <div class="product-menu-desc">
                        <h3>Product Title</h3>
                        <p class="product-price">$2.3</p>

                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                        
                    </div>

                </fieldset>
                
                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="Full Name" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="Phone Number" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="Mail Address" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="Street, City, Country" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                </fieldset>

            </form>

        </div>
    </section>
    <!-- product sEARCH Section Ends Here -->

    <?php include('footer.php');?>