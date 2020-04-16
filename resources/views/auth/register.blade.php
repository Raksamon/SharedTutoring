<!DOCTYPE html>
<html lang="en">
<head>
<!--

Template 2082 Pure Mix

http://www.tooplate.com/view/2082-pure-mix

-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<!-- Site title
   ================================================== -->
	<title>Register</title>

	<!-- Bootstrap CSS
   ================================================== -->
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">

	<!-- Animate CSS
   ================================================== -->
	<link rel="stylesheet" href="{{ URL::asset('css/animate.min.css') }}">

	<!-- Font Icons CSS
   ================================================== -->
	<link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/ionicons.min.css') }}">

	<!-- Main CSS
   ================================================== -->
	<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

	<!-- <link rel="stylesheet" href="{{ URL::asset('css/style1.css') }}">[] -->

	<!-- Google web font 
   ================================================== -->	
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
	

  <style>
  .form-row {
    margin-bottom: 24px; }
    .form-row label {
      font-size: 16px;
      margin-bottom: 8px;
      display: block; }
    .form-row.form-group {
      display: flex; }
      .form-row.form-group .form-holder {
        width: 50%;
        margin-right: 21px; }
        .form-row.form-group .form-holder:last-child {
          margin-right: 0; }
  
  .form-holder {
    position: relative; }
    .form-holder i {
      position: absolute;
      top: 11px;
      right: 19px;
      font-size: 17px;
      color: #999; }</style>
</head>
<body>


<!-- Preloader section
================================================== -->
<div class="preloader">

	<div class="sk-spinner sk-spinner-pulse"></div>

</div>


<!-- Navigation section
================================================== -->
<div class="nav-container">
   <nav class="nav-inner transparent">

      <div class="navbar">
         <div class="container">
            <div class="row">

              <div class="brand">
                <a href="{{url('/')}}">Shared Tutoring</a>
              </div>

              <div class="navicon">
                <div class="menu-container">

                  <div class="circle dark inline">
                    <i class="icon ion-navicon"></i>
                  </div>

                  <div class="list-menu">
                    <i class="icon ion-close-round close-iframe"></i>
                    <div class="intro-inner">
                     	<ul id="nav-menu">
							<li><a href="{{url('/')}}">Home</a></li>
							<li><a href="{{url('/login')}}">Log-in</a></li>
							<li><a href="{{url('/register')}}">Register</a></li>
							<li><a href="{{url('/contact')}}">Contact</a></li>
                      </ul>
                    </div>
                  </div>

                </div>
              </div>

            </div>
         </div>
      </div>

   </nav>
</div>

<!-- Header section
================================================== -->
<section id="header" class="header-three">
	<br>
	<div class="container">
		<div class="row">

			<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
          <div class="header-thumb " style="margin-top:100px;">
			  <h1 class="wow fadeIn" data-wow-delay="0.6s">Register</h1>
			  <br>
			  <h3 class="wow fadeInUp" data-wow-delay="0.9s">TO BE OUR MEMBER</h3>
			  <br><br>

			  <div class="form-row form-group">
			  	<div class="form-holder">
	                    		<label for="">I AM A STUDENT</label>
	                    		<a href="{{url('/studentReg')}}" class="btn button button1">Student Register</a>
	                    	
	                    	</div>
	                    	<div class="form-holder">
								<label for="">I AM A TUTOR</label>
								<a href="{{url('/tutorReg')}}" class="btn button button1">Tutor Register</a>
							
							</div>
			  </div>
		  </div>
		  
		  <button>

		  </button>
			</div>

		</div>
	</div>		
</section>


<!-- register section
================================================== -->
<!-- <section id="header" class="header-three">
	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-3 col-md-5 col-sm-offset-2 col-sm-8">
					<div class="header-thumb">
						<h1 class="wow fadeIn" data-wow-delay="0.6s">Log-in</h1>
						<h3 class="wow fadeInUp" data-wow-delay="0.9s">To enjoy with us</h3>
						<div class="contact-form" align="center">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>		
</section> -->




<!-- Footer section
================================================== -->
<footer>
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12">
				<p class="wow fadeInUp"  data-wow-delay="0.3s">Shared Tutoring by Teletubbies - Software Engineering 2020</p>
				<ul class="social-icon wow fadeInUp"  data-wow-delay="0.6s">
					<li><a href="#" class="fa fa-facebook"></a></li>
					<li><a href="#" class="fa fa-twitter"></a></li>
					<li><a href="#" class="fa fa-dribbble"></a></li>
					<li><a href="#" class="fa fa-behance"></a></li>
					<li><a href="#" class="fa fa-google-plus"></a></li>
				</ul>
			</div>
			
		</div>
	</div>
</footer>

<!-- Javascript 
================================================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>