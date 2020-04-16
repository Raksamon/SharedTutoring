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
	<title>Log-in</title>

	<!-- Bootstrap CSS
   ================================================== -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Animate CSS
   ================================================== -->
	<link rel="stylesheet" href="css/animate.min.css">

	<!-- Font Icons CSS
   ================================================== -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">

	<!-- Main CSS
   ================================================== -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Google web font 
   ================================================== -->	
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>	
   
   <!-- sweet alert
   ================================================== -->	
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <!-- sweet 2 -->
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script> 

	<style>
		body {
  			font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif; 
}
	</style>
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


<!-- login section
================================================== -->
<!-- add database table 
 $table->string('status'); -->
<!-- ลบ migrate failed_jobs ออก -->
<!-- php artisan migrate -->
<section id="header" class="header-three">
	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-3 col-md-5 col-sm-offset-2 col-sm-8">
					<div class="header-thumb">
						<h1 class="wow fadeIn" data-wow-delay="0.6s">Log-in</h1>
						<h3 class="wow fadeInUp" data-wow-delay="0.9s">To enjoy with us</h3>
						<div class="contact-form" align="center">
							<form id="contact-form" method="post" action="{{ route('login') }}">
							@csrf

								<input id="email" type="text" placeholder="E-mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
								@error('email')
									<script type="text/javascript">
										Swal.fire({
											icon: 'error',
											title: 'Oops...',
											text: 'Pleass try agian'
											})
									</script>
                                @enderror
													
								<input id="password-field" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
								<span style="font-size: 22px;float:right;margin-top:-50px;" toggle=" #password-field"  class="fa fa-fw fa-eye field-icon toggle-password"></span>
								@error('password')
									<script type="text/javascript">
										swal("Oops!", "Pleass try agin", "error");
									</script>
                                @enderror

								<div class="contact-submit">
									<input type="submit" class="form-control submit" value="Login">
								</div>
								<p class="wow fadeIn" data-wow-delay="0.9s">
									<a href="{{url('/register')}}" class="btn btn-outline-dark btn-block">Create Acount</a></p>

								<!-- forgot password -->
								@if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                                @endif
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>		
</section>



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

<script>
	$(".toggle-password").click(function() {

$(this).toggleClass("fa-eye fa-eye-slash");
var input = $($(this).attr("toggle"));
if (input.attr("type") == "password") {
	input.attr("type", "text");
} else {
	input.attr("type", "password");
}
});
</script>

</body>
</html>