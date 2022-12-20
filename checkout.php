<!-- Cart Start -->
<?php 

include 'partials/navbar.php';
?>

<!-- /*** Hero Header ***/ -->
<style>
    .hero-header {
        background-image: url(images/AA.jpg);
                background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    </style>
    <div class="container-fluid hero-header">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3" style="color: white;">Check Out</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a style="color: white;" href="index.php">Home</a></p>
                <p class="m-0 px-2" style="color: white;">-</p>
                <p class="m-0" style="color: white;">Check Out</p>
            </div>
        </div>
    </div>
    
<!-- Checkout Start -->
<div class="container-fluid pt-5" style="background-image:url(images/bg.jpg);background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;">
        <form method="post">
            <div class="row px-xl-5">
                <div class="col-lg-8">
                    <div class="mb-4">
            <h2 class="font-weight-semi-bold mb-4 text-dark">Billing Address</h2>

                        <div class="row">
                            <div class="col-md-6 form-group" style="border:1px dashed black">
                                <label class="mt-3">Shipping Address</label>
                                <textarea class="form-control border-primary" name="shipping_address"
                                    id="shipping_address" cols="30" rows="3"></textarea>
                            </div>
                            <div class="col-md-6 form-group " style="border:1px dashed black">
                                <label class="mt-3">Billing Address No</label>
                                <textarea class="form-control border-primary" name="billing_address"
                                    id="billing_address" cols="30" rows="3"></textarea>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="hidden" id="total" name="total" value="4500">
                                <input type="hidden" id="customer_id" name="customer_id"
                                    value="15">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-secondary mb-5">
                        <div class="card-header border-0" style="background-color:#4A0404;">
                            <h4 class="font-weight-semi-bold m-0">Order Total</h4>
                        </div>
                        <div class="card-body">
                            <h5 class="font-weight-medium mb-3">Products</h5>
                             <div class="d-flex justify-content-between">
                                <p>New Indian Yellow Casual Shirt</p>
                                <p>Rs. 1600</p>
                            </div>
                           <div class="d-flex justify-content-between">
                                <p>New Baggy Yellow T-Shirt</p>
                                <p>Rs. 1200</p>
                            </div>
                           <div class="d-flex justify-content-between">
                                <p>New Premium Brown Color Underwear</p>
                                <p>Rs. 1200</p>
                            </div>
                            
                            <hr class="mt-0">
                            <div class="d-flex justify-content-between mb-3 pt-1">
                                <h6 class="font-weight-medium text-dark">Subtotal</h6>
                                <h6 class="font-weight-medium text-dark">Rs. 4000</h6>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-medium text-dark">Shipping</h6>
                                <h6 class="font-weight-medium text-dark">Rs. 500</h6>
                            </div>
                        </div>
                        <div class="card-footer border-secondary bg-transparent">
                            <div class="d-flex justify-content-between mt-2">
                                <h5 class="font-weight-bold text-dark">Total</h5>
                                <h5 class="font-weight-bold text-dark">Rs. 4500 </h5>
                            </div>
                        </div>
                    </div>
                    <div class="card border-secondary mb-5">
                        <div class="card-header  border-0" style="background-color:#4A0404;">
                            <h4 class="font-weight-semi-bold m-0">Payment</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" checked name="cod" id="cod">
                                    <label class="custom-control-label text-dark font-weight-light" for="cod">Cash on Delivery</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" name="payment" id="directcheck">
                                    <label class="custom-control-label text-dark font-weight-light" for="directcheck">Direct Check</label>
                                </div>
                            </div>
                            <div class="">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" name="payment" id="banktransfer">
                                    <label class="custom-control-label text-dark font-weight-light" for="banktransfer">Bank Transfer</label>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer border-secondary bg-transparent">
                            <button type="button" onclick="checkOut(this.form)"
                                class="btn btn-lg btn-block  font-weight-bold my-3 py-3 text-light" style="background-color:#6F4E37 ;">Place
                                Order</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Checkout End -->

    <?php include 'partials/footer.php';?>


    