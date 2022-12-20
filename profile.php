<?php  include 'partials/navbar.php';?>
<style>
    .hero-header {
        background-image:  url(images/AA.jpg);
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    </style>
    <div class="container-fluid  hero-header">
    
    
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase " style="color: white;">My Profile</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a style="color: white;" href="index.php">Home</a></p>
                <p class="m-0 px-2" style="color: white;">-</p>
                <p class="m-0" style="color: white;">My Profile</p>
            </div>
        </div>
    </div>

   
    <!-- Profile Start -->
    <div class="container-fluid pt-1" >
        <div class="row" style="background-image:url(images/s.jpg);background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
    }">
            <!-- <div class="col-lg-6">
                <div class="d-flex flex-column justify-content-center  h-100 p-5" style="background-color:#1c2841 ;">
                    <div class="d-inline-flex border  p-2 mb-4">
                        <h1 class="font-weight-normal text-secondary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h4 class="text-warning">Full Name</h4>
                            <p class="m-0 text-white">chandula sudeepa samarawickrama</p>
                        </div>
                    </div>
                    <div class="d-inline-flex border  p-2 mb-4">
                        <h1 class="font-weight-normal text-secondary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h4 class="text-warning">Email</h4>
                            <p class="m-0 text-white">chandula1995@gmail.com</p>
                        </div>
                    </div>
                    <div class="d-inline-flex border  p-2 mb-4">
                        <h1 class="font-weight-normal text-secondary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h4 class="text-warning">Phone Number</h4>
                            <p class="m-0 text-white">0759875577</p>
                        </div>
                    </div>
                    <div class="d-inline-flex border  p-2 mb-4">
                        <h1 class="font-weight-normal text-secondary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h4 class="text-warning">Address</h4>
                            <p class="m-0 text-white">199/1,Saddathissa Mawatha,Walgama,Matara.</p>
                        </div>
                    </div>
                    <div class="d-inline-flex border p-2 mb-4">
                        <h1 class="font-weight-normal text-secondary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h4 class="text-warning">NIC</h4>
                            <p class="m-0 text-white">199582403888</p>
                        </div>
                    </div>
                    <div class="d-inline-flex border  p-2 mb-4">
                        <h1 class="font-weight-normal text-secondary m-0 mr-3"></h1>
                        <div class="d-flex flex-column">
                            <h4 class="text-warning">Gender</h4>
                            <p class="m-0 text-white">
                                Male</p>
                        </div>
                    </div>

                </div>
            </div> -->
            <div class="col-lg-8 mb-5 my-lg-12 py-5 pl-lg-5 bg-white m-auto" style="background-image:url(images/bg_4.jpg)">
                <div class="contact-form">
                    <div id="success"></div>
                    <div class="col-md-12 border-right">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h2 class="text-warning m-auto">Profile Settings<h2>
                            </div>

                            <div class="row mt-2">
                                <div class="col-md-12 ">
                                    <input type="text"
                                        class="form-control " id="name" placeholder="Your name"
                                        value="chandula sudeepa samarawickrama">
                                </div>

                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <input type="text"
                                        class="form-control" id="phone" placeholder="enter phone number"
                                        value="0759875577">
                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-md-12"><input type="text"
                                        class="form-control" id="address" placeholder="enter address"
                                        value="199/1,Saddathissa Mawatha,Walgama,Matara.">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <input type="text" disabled
                                        id="nic" class="form-control" placeholder="Enter NIC"
                                        value="199582403888">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <input type="email"
                                        id="email" class="form-control" placeholder="Enter Email Address"
                                        value="chandula1995@gmail.com">
                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <select
                                        id="gender 15" class='form-control norad tx12'
                                        name="gender" type='text'>
                                        <option value="1" selected>
                                            Male</option>
                                        <option value="0" >
                                            Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center experience mt-5">
                                <a class="border px-3 p-2 add-experience bg-warning border-0" id="change" style="color:navy"
                                    href="change_email.php"><i class="fa fa-envelope" style="color:navy"></i>&nbsp;<b class="
                                    text-light">Change Email</b></a>


                                <a href="change_password.php" class="border px-3 p-2 add-experience bg-warning border-0" style="color:navy"><i
                                        class="fa fa-lock" style="color:navy"></i>&nbsp;<b class="
                                    text-light">Change Password</b></a>


                                <button class="btn text-white btn-lg border px-3 p- add-experience border-0" style="background-color:navy"
                                    onclick="deleteDataFromHome(15, 'customer', 'customer_id')"><i
                                        class="fa fa-trash"></i>&nbsp;Delete</button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Profile End -->




  





<?php include 'partials/footer.php';?>
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

 <!-- Swiper JS -->
 <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
	slidesPerView: 4,
	spaceBetween: 30,
	slidesPerGroup: 4,
	loop: true,
	loopFillGroupWithBlank: true,
	pagination: {
	  el: ".swiper-pagination",
	  clickable: true,
	},
	navigation: {
	  nextEl: ".swiper-button-next",
	  prevEl: ".swiper-button-prev",
	},
  });
</script>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>