<?php 

include 'partials/navbar.php';
?>

<div class="container-fluid"
style="
background:url(images/login.jpg);
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;">
  <div class="row pt-5 pb-5">
  <div class="col-6 m-auto p-3 "  style="border:1px dotted yellow">
        <form autocomplete="off">
          <h1 class="text-light text-center">REGISTER FORM</h1>
                <div class="card-body">
                  <div class="form-group">
                    <h6 class="text-warning"  >Username</h6 >
                    <input type="text" class="form-control"  placeholder="Enter email" autocomplete="off">
                  </div>
                  
                  <div class="form-group">
                  <h6 class="text-warning "  >Email </h6 >
                    <input type="email" class="form-control"  placeholder="Enter email" autocomplete="off">
                  </div>

                  <div class="form-group">
                  <h6 class="text-warning"  >Phone Number </h6 >
                    <input type="number" class="form-control"  placeholder="Enter Phone Number" autocomplete="off">
                  </div>

                  <div class="form-group">
                    <h6 class="text-warning"  >NIC</h6 >
                    <input type="text" class="form-control"  placeholder="Enter NIC" autocomplete="off">
                  </div>

      
                  <div class="form-group">
                    <h6 class="text-warning"  >Address</h6 >
                    <input type="text" class="form-control"  placeholder="Enter NIC" autocomplete="off">
                  </div>

                  <div class="form-group">
                  <h6 class="text-warning"  >Password</h6 >
                    <input type="password" class="form-control" placeholder="Enter Password" autocomplete="off">
                  </div>

                  <div class="form-group">
                  <h6 class="text-warning"  >Confirm Password</h6 >
                    <input type="password" class="form-control" placeholder="Confirm Your Password" autocomplete="off">
                  </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <button type="submit" class="btn btn-primary text-light w-75 p-2 ml-5 font-weight-bold">REGISTER</button>
                <p class="text-center mt-3">
                            <span>Already have an account?</span>
                            <a href="login.php">
                                <span class="text-success">Sign in instead</span>
                            </a>
                        </p>
                </div>
              </form>
        </div>
    </div>
</div>







<?php include 'partials/footer.php';?>

