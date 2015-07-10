<?php include "template.php"; ?>
    <div class="order-header">
        <div class="content-order wow bounceIn">
            <h1 style="font-size:65px;text-transform:uppercase;font-weight:700;"><i class="glyphicon glyphicon-shopping-cart"></i> Ordering</h1>
            <p>Check out your Order today</p>
            <hr class="primary">
            <div class="container">
            
            <div class="wrap-order">
            <h2 class="text-center">Order Form</h2>
            <hr class="primary">
            <p><br/></p>
                <form role="form" action="aksi.php" method="post" id="form-deh">
                    <div class="form-group input-group wow bounceIn">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input name="first_name" class="form-control" type="text" placeholder="First Name" required="" >
                    </div>

                    <div class="form-group input-group wow bounceIn">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input name="last_name" class="form-control" type="text" placeholder="Last Name" required="" >
                    </div>

                    <div class="form-group input-group wow bounceIn">
                        <span class="input-group-addon"><i class="fa fa-at"></i></span>
                        <input name="email" class="form-control" type="text" placeholder="E-mail" required="" >
                    </div>

                    <div class="form-group input-group wow bounceIn">
                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                        <input name="address" class="form-control" type="text" placeholder="Address" required="" >
                    </div>

                    <div class="form-group input-group wow bounceIn">
                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                        <input name="phone_number" class="form-control" type="text" placeholder="Phone Number (without stripes and spacing)" required="" maxlength="12" >
                    </div>

                    <div class="form-group input-group wow bounceIn">
                        <span class="input-group-addon"><i class="fa fa-cart-plus"></i></span>
                        <input name="product_code" class="form-control" type="text" placeholder="Product Name to Order" required="" >
                    </div>
                    <div class="form-group input-group wow bounceIn">
                        <span class="input-group-addon"><i class="fa fa-cc-visa"></i></span>
                        <input name="cc_number" class="form-control" type="text" placeholder="Credit Card Number (without stripes and spacing)" required="" maxlength="20">
                    </div>
                    <div class="wow bounceIn" style="text-align:right">
                    <input class="btn btn-primary" type="submit" name="order-baru" required="" value="Order Now" >
                </div>
                </form>    
            </div>
            
        </div>
        </div>        
    </div>
<?php include "footer.php"; ?>