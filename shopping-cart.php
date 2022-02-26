<?php require "frontendheader.php" ?>

<div class="container" id="showitme">
    <div class="row">
        <div class="breadcrumb">
            <div class="container">
                <div class="breadcrumb-inner">
                    <ul class="list-inline list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li class='active'>Shopping Cart</li>
                    </ul>
                </div><!-- /.breadcrumb-inner -->
            </div><!-- /.container -->
        </div><!-- /.breadcrumb -->

        <div class="body-content outer-top-xs">
            <div class="container">
                <div class="row ">
                    <div class="shopping-cart">
                        <div class="shopping-cart-table ">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="cart-no item">NO</th>
                                            <th class="cart-romove item">Remove</th>
                                            <th class="cart-description item">Image</th>
                                            <th class="cart-product-name item">Product Name</th>
                                            <th class="cart-qty item">Quantity</th>
                                            <th class="cart-sub-total item">Price</th>
                                            <th class="cart-sub-total item">Discount</th>
                                            <th class="cart-total last-item">Subtotal</th>
                                        </tr>
                                    </thead><!-- /thead -->

                                    <tbody id='itemtable'>

                                    </tbody><!-- /tbody -->

                                    <tfoot>
                                        <tr>

                                            <td colspan="7">
                                                <div class="shopping-cart-btn">
                                                    <span class="">
                                                        <a href="index.php" class="btn btn-upper btn-primary pull-right outer-right-xs">Continue shopping</a>
                                                    </span>
                                                </div><!-- /.shopping-cart-btn -->
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table><!-- /table -->
                            </div>
                        </div><!-- /.shopping-cart-table -->
                        <div class=" col-md-8 col-sm-6">
                            <textarea class="form-control" rows="5" placeholder="Please Enter Something Your Want to Notic Admin !" id="notes"></textarea>
                        </div>

                        <div class=" col-md-4 col-sm-6 cart-shopping-total">
                            <table class="table">
                                <thead id='itemamount'>

                                </thead><!-- /thead -->
                                <tbody>
                                    <tr>

                                        <td>
                                            <div class="cart-checkout-btn pull-right ">
                                                <?php
                                                if (isset($_SESSION['login_user'])) {

                                                ?>
                                                    <a href="javascript:void(0)" id="checkoutbtn">
                                                        <button type="submit" class="btn btn-primary checkout-btn">CHEK OUT</button>
                                                    </a>

                                                <?php } else { ?>
                                                    <a href="sign-in.php">
                                                        <button type="submit" class="btn btn-primary checkout-btn">Login for Check OUT</button>
                                                    </a>
                                                <?php } ?>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody><!-- /tbody -->
                            </table><!-- /table -->
                        </div><!-- /.cart-shopping-total -->
                    </div><!-- /.shopping-cart -->
                </div> <!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.body-content -->

    </div>
</div>

<?php require "frontendfooter.php" ?>