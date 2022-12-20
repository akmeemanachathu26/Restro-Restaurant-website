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
    <div class="container-fluid  hero-header">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3" style="color: white;">My Cart</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a style="color: white;" href="index.php">Home</a></p>
                <p class="m-0 px-2" style="color: white;">-</p>
                <p class="m-0" style="color: white;">Cart</p>
            </div>
        </div>
    </div>
    
    <div class="container-fluid pt-5" style="background-image:url(images/crtbg.jpg);background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;">
        
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">

            
                <table class="table table-bordered text-center mb-0">
                    <thead class="text-light "style="background-color:#4A0404;" >
                        <tr>
                            <th>Products</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                                                <tr>
                            <td class="align-middle"><img src="server/uploads/products/265328074_853202205360550_2084154575076618161_n.png" alt="" style="width: 50px;">
                            </td>
                            <td class="align-middle text-dark font-weight-light">New Indian Yellow Casual Shirt</td>
                            <td class="align-middle text-dark font-weight-light">Rs. 1600</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button
                                            onclick="qtryChange('143', 'qty' , 0 ,'1');"
                                            class="btn btn-sm  btn-minus bg-primary" style="color:#fff;">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" name="qty" id="qty 143"
                                        class="form-control form-control-md  text-center"
                                        value="1">
                                    <div class="input-group-btn">
                                        <button
                                            onclick="qtryChange('143', 'qty', 1 ,'1');"
                                            class="btn btn-sm btn-plus bg-primary" style="color:#fff;">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle text-dark font-weight-light">Rs. 1600.00</td>
                            <td class="align-middle"><button
                                    onclick="cartDelete(143, 'cart', 'cart_id')"
                                    type="button" class="btn btn-sm " ><i class="fa fa-times text-dark"></i></button>
                            </td>
                        </tr>
                                                <tr>
                            <td class="align-middle"><img src="server/uploads/products/268456846_856142988399805_7452280665341109686_n.png" alt="" style="width: 50px;">
                            </td>
                            <td class="align-middle text-dark font-weight-light">New Baggy Yellow T-Shirt</td>
                            <td class="align-middle text-dark font-weight-light">Rs. 1200</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button
                                            onclick="qtryChange('144', 'qty' , 0 ,'1');"
                                            class="btn btn-sm  btn-minus bg-primary" style="color:#fff;">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" name="qty" id="qty 144"
                                        class="form-control form-control-sm bg-secondary text-center"
                                        value="1">
                                    <div class="input-group-btn">
                                        <button
                                            onclick="qtryChange('144', 'qty', 1 ,'1');"
                                            class="btn btn-sm btn-plus bg-primary" style="color:#fff;">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle text-dark font-weight-light">Rs. 2800.00</td>
                            <td class="align-middle"><button
                                    onclick="cartDelete(144, 'cart', 'cart_id')"
                                    type="button" class="btn btn-sm " ><i class="fa fa-times"></i></button>
                            </td>
                        </tr>
                                                <tr>
                            <td class="align-middle"><img src="server/uploads/products/9C7A0727_3ac3d43e-8d95-4cb3-a7a1-ff079e389b13_1000x.png" alt="" style="width: 50px;">
                            </td>
                            <td class="align-middle text-dark font-weight-light">New Premium Brown Color Underwear</td>
                            <td class="align-middle text-dark font-weight-light">Rs. 1200</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button
                                            onclick="qtryChange('145', 'qty' , 0 ,'1');"
                                            class="btn btn-sm  btn-minus bg-primary" style="color:#fff;">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" name="qty" id="qty 145"
                                        class="form-control form-control-sm bg-secondary text-center"
                                        value="1">
                                    <div class="input-group-btn">
                                        <button
                                            onclick="qtryChange('145', 'qty', 1 ,'1');"
                                            class="btn btn-sm btn-plus bg-primary" style="color:#fff;">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle text-dark font-weight-light">Rs. 4000.00</td>
                            <td class="align-middle"><button
                                    onclick="cartDelete(145, 'cart', 'cart_id')"
                                    type="button" class="btn btn-sm " ><i class="fa fa-times"></i></button>
                            </td>
                        </tr>
                        

                    </tbody>
                </table>
                
            </div>
            <div class="col-lg-4">
                <div class="card border-secondary mb-5">
                    <div class="card-header  border-0 " style="background-color:#4A0404;">
                        <h4 class="font-weight-semi-bold m-0 ">Cart Summary</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium text-dark">Subtotal</h6>
                            <h6 class="font-weight-medium text-dark">Rs. 4000.00</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium text-dark" >Shipping</h6>
                            <h6 class="font-weight-medium text-dark" >Rs. 500.00</h6>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold text-dark">Total</h5>
                            <h5 class="font-weight-bold text-dark">Rs. 4500.00</h5>
                        </div>
                        <a href="checkout.php"
                            class="btn btn-block  my-3 py-3 text-light" style="background-color:#966919; "; >Proceed To Checkout Rs.
                            4500.00</a>
                    </div>
                </div>
            </div>
        </div>
            </div>
    <!-- Cart End -->

    <?php include 'partials/footer.php';?>


    