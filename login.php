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
          <h1 class="text-light text-center pt-3">LOGIN FORM</h1>
                <div class="card-body">

                  <div class="form-group">
                    <h6 class="text-warning"  >Username</h6 >
                    <input type="text" class="form-control"  placeholder="Enter email" autocomplete="off">
                  </div>
                  
                 
                  <div class="form-group">
                  <h6 class="text-warning"  >Password</h6 >
                    <input type="password" class="form-control" placeholder="Enter Password" autocomplete="off">
                  </div>

           

                </div>
                <!-- /.card-body -->
          


                <div class="card-footer">
                  <button type="submit" class="btn btn-primary text-light w-75 p-2 ml-5 font-weight-bold">LOGIN</button>
                </div>
                <p class="text-center">
                <span>New on our platform?</span>
                <a href="register.php">
                  <span class="text-success">Create an account</span>
                </a>
              </p>
         
              </form>
           
        </div>
    </div>
</div>







<?php include 'partials/footer.php';?>

