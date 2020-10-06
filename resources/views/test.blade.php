<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato:400,700%7CMontserrat:300,400,600,700">
		
		<link rel="stylesheet" href="icons/fontawesome/css/fontawesome-all.min.css"><!-- FontAwesome Icons -->
        <link rel="stylesheet" href="icons/Iconsmind__Ultimate_Pack/Line%20icons/styles.min.css"><!-- iconsmind.com Icons -->
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/home.css') }}" rel="stylesheet">

		
		
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body>
		<header id="masthead-pro">
			<div class="container">
				
				<h1><a href="index.html"><img src="images/logo.png" alt="Logo"></a></h1>
				
				<nav id="site-navigation-pro">
					<ul class="sf-menu">
						<li class="normal-item-pro current-menu-item">
							<a href="index.html">Home</a>
						</li>
						<li class="normal-item-pro">
							<a href="dashboard-home.html">New Releases</a>
							<!-- Sub-Menu Example >
							<ul class="sub-menu">
								<li class="normal-item-pro">
									<a href="#!">Sub-menu item 1</a>
								</li>
								<li class="normal-item-pro">
									<a href="#!">Sub-menu item 2</a>
								</li>
								<li class="normal-item-pro">
									<a href="#!">Sub-menu item 3</a>
								</li>
							</ul> 
							< End Sub-Menu example -->
						</li>
						<li class="normal-item-pro">
							<a href="signup-step1.html">Pricing Plans</a>
						</li>
						<li class="normal-item-pro">
							<a href="faqs.html">FAQs</a>
						</li>
					</ul>
				</nav>
				
				<button class="btn btn-header-pro noselect" data-toggle="modal" data-target="#LoginModal" role="button">Sign In</button>
				
				<div id="mobile-bars-icon-pro" class="noselect"><i class="fas fa-bars"></i></div>
				
				<div class="clearfix"></div>
			</div><!-- close .container -->
			
			<nav id="mobile-navigation-pro">
			
				<ul id="mobile-menu-pro">
					<li>
						<a href="index.html">Home</a>
					</li>
					<li>
						<a href="dashboard-home.html">New Releases</a>
						<!-- Mobile Sub-Menu Example >
						<ul>
							<li class="normal-item-pro">
								<a href="#!">Sub-menu item 1</a>
							</li>
							<li class="normal-item-pro">
								<a href="#!">Sub-menu item 2</a>
							</li>
							<li class="normal-item-pro">
								<a href="#!">Sub-menu item 3</a>
							</li>
						</ul>
						< End Mobile Sub-Menu Example -->
					</li>
					<li>
						<a href="signup-step1.html">Pricing Plans</a>
					</li>
					<li>
						<a href="faqs.html">FAQs</a>
					</li>
				</ul>
				<div class="clearfix"></div>
			
				<button class="btn btn-mobile-pro btn-green-pro noselect" data-toggle="modal" data-target="#LoginModal" role="button">Sign In</button>
			
			</nav>
		</header>
		
		
		
		
		<div class="flexslider progression-studios-slider">
	      <ul class="slides">
				<li class="progression_studios_animate_in">
					<div class="progression-studios-slider-image-background" style="background-image:url(http://via.placeholder.com/1920x693);">
						<div class="progression-studios-slider-display-table">
							<div class="progression-studios-slider-vertical-align">
								
								<div class="container">
									
									<div class="progression-studios-slider-caption-width">
										<div class="progression-studios-slider-caption-align">
											<h2>Welcome to SKRN<span style="color:#3db13d;">.</span></h2>
											<h6>Watch the largest collection of Movies and TV series anytime anywhere!</h6>
											<a class="btn btn-green-pro btn-slider-pro btn-shadow-pro" href="signup-step1.html" role="button">Start Your Free Trial</a>
										</div><!-- close .progression-studios-slider-caption-align -->
									</div><!-- close .progression-studios-slider-caption-width -->
									
								</div><!-- close .container -->
								
							</div><!-- close .progression-studios-slider-vertical-align -->
						</div><!-- close .progression-studios-slider-display-table -->
						
						<div class="progression-studios-slider-mobile-background-cover"></div>
					</div><!-- close .progression-studios-slider-image-background -->
				</li>
				<li class="progression_studios_animate_right">
					<div class="progression-studios-slider-image-background" style="background-image:url(http://via.placeholder.com/1920x693); background-color:#111015;">
						<div class="progression-studios-slider-display-table">
							<div class="progression-studios-slider-vertical-align">
								
								<div class="container">
									
									<div class="progression-studios-slider-caption-width">
										<div class="progression-studios-slider-caption-align">
											<h2 class="light-fonts-pro">Central Intelligence</h2>
											<h6 class="light-fonts-pro">Let users watch videos on any page via the built-in video player.</h6>
											<a class="btn btn-green-pro btn-slider-pro" href="dashboard-home.html" role="button">View The Video Library</a>
										</div><!-- close .progression-studios-slider-caption-align -->
									</div><!-- close .progression-studios-slider-caption-width -->
									
								</div><!-- close .container -->
								
							</div><!-- close .progression-studios-slider-vertical-align -->
						</div><!-- close .progression-studios-slider-display-table -->
						
					</div><!-- close .progression-studios-slider-image-background -->
				</li>
				<li class="progression_studios_animate_left">
					<div class="progression-studios-slider-image-background" style="background-image:url(http://via.placeholder.com/1920x693);">
						<div class="progression-studios-slider-display-table">
							<div class="progression-studios-slider-vertical-align">
								
								<div class="container">
									
									<div class="progression-studios-slider-caption-width">
										<div class="progression-studios-slider-caption-align">
											<h2>Ultimate Video Theme</h2>
											<h6>Watch the largest collection of Movies and TV series anytime anywhere!</h6>
											<a class="btn btn-green-pro btn-slider-pro btn-shadow-pro" href="signup-step1.html" role="button">Start Your Free Trial</a>
										</div><!-- close .progression-studios-slider-caption-align -->
									</div><!-- close .progression-studios-slider-caption-width -->
									
								</div><!-- close .container -->
								
							</div><!-- close .progression-studios-slider-vertical-align -->
						</div><!-- close .progression-studios-slider-display-table -->
						
						<div class="progression-studios-slider-mobile-background-cover"></div>
					</div><!-- close .progression-studios-slider-image-background -->
				</li>
			</ul>
		</div><!-- close .progression-studios-slider - See /js/script.js file for options -->
		
		<div id="content-pro">
			
  	 		<div class="container">
				

				<div class="row">
					<div class="col-md my-auto"><!-- .my-auto vertically centers contents -->
						<img src="http://via.placeholder.com/705x618" class="img-fluid" alt="Watch in Any Devices">
					</div>
					<div class="col-md my-auto"><!-- .my-auto vertically centers contents -->
	  					<h2 class="short-border-bottom">Watch On Any Device</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipiscing nula pellentesquemagna a convallis nula facilisi. Praesent consequat eget elementumconsectetur. Nullam interdum, quam ac sagittis facilisis sapien dolor ipsum consequat ellit tristique senectus</p>
						<div style="height:15px;"></div>
						<p><a class="btn btn-green-pro" href="signup-step1.html" role="button">Learn More</a></p>
					</div>
				</div><!-- close .row -->
				
				
				<div class="row">
					<div class="col-md my-auto"><!-- .my-auto vertically centers contents -->
	  					<h2 class="short-border-bottom">Make Your Own Playlist</h2>
						<p>Curabitur at lobortis leo varius tellus. Phasellus id purus placeratfinibus diam a, feugiat massa. Donec porta orci lectus, ut lacinia risus fringilla nulla facilisi suspendisse eget id justo ac magna finibus dignissim. Integer purus feugiat gravida convalis,</p>
						<div style="height:15px;"></div>
						<p><a class="btn btn-green-pro" href="signup-step1.html" role="button">Start Watching</a></p>
					</div>
					<div class="col-md my-auto"><!-- .my-auto vertically centers contents -->
						<img src="http://via.placeholder.com/705x618" class="img-fluid" alt="Make Your Own Playlist">
					</div>
				</div><!-- close .row -->
				
				
				<div class="row">
					<div class="col-md my-auto"><!-- .my-auto vertically centers contents -->
						<img src="http://via.placeholder.com/705x618" class="img-fluid" alt="Watch in Ultra HD">
					</div>
					<div class="col-md my-auto"><!-- .my-auto vertically centers contents -->
	  					<h2 class="short-border-bottom">Watch in Ultra HD</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipiscing nula pellentesquemagna a convallis nula facilisi. Praesent consequat eget elementumconsectetur. Nullam interdum, quam ac sagittis facilisis sapien dolor ipsum consequat ellit tristique senectus</p>
						<div style="height:15px;"></div>
						<p><a class="btn btn-green-pro" href="signup-step1.html" role="button">Start Your Free Trial</a></p>
					</div>
				</div><!-- close .row -->
				
				<div style="height:35px;"></div>
				
				<div class="clearfix"></div>
			</div><!-- close .container -->
			
			
			<hr>
			
			<div class="progression-pricing-section-background">
			<div class="container">
				
				<div class="row">
					<div class="mx-auto">
						<div style="height:70px;"></div>
						<h2 class="short-border-bottom">Our Plans &amp; Pricing</h2>
					</div>
				</div><!-- close .row -->
				
				<div style="height:25px;"></div>
				
				<div class="row">
					<div class="col-md">
						<ul class="checkmark-list-pro">
							<li>1 month unlimited access!</li>
							<li>Thousands of TV shows, movies &amp; more.</li>
						</ul>
					</div>
					<div class="col-md">
						<ul class="checkmark-list-pro">
							<li>Stream on your phone, laptop, tablet or TV.</li>
							<li>You can even Download & watch offline.</li>
						</ul>
					</div>
					<div class="col-md">
						<ul class="checkmark-list-pro">
							<li>1 month unlimited access!</li>
							<li>Thousands of TV shows, movies &amp; more.</li>
						</ul>
					</div>
				</div><!-- close .row -->
				
				
				<div class="pricing-table-pro">
					<div class="row">
						<div class="col-md">
							<div class="pricing-table-col">
								<h6>FREE TRIAL</h6>
								<h2>Free</h2>
								<ul>
									<li>720p Available</li>
									<li>Watch on any Device</li>
									<li>20 Movies and Shows</li>
									<li>Download Available</li>
								</ul>
								<p><a class="btn" href="signup-step2.html" role="button">Choose Plan</a></p>
							</div><!-- close .pricing-table-col -->
						</div><!-- close .col-md-12 -->
						<div class="col-md">
							<div class="pricing-table-col pricing-table-col-shadow-pro">
								<h6>STARTER</h6>
								<h2><sup>$</sup>10<span> / month</span></h2>
								<ul>
									<li>HD Available</li>
									<li>Watch on any Device</li>
									<li>70 Movies and Shows</li>
									<li>Download Available</li>
								</ul>
								<p><a class="btn btn-green-pro" href="signup-step2.html" role="button">Choose Plan</a></p>
							</div><!-- close .pricing-table-col -->
						</div><!-- close .col-md-12 -->
						<div class="col-md">
							<div class="pricing-table-col">
								<h6>PREMIUM</h6>
								<h2><sup>$</sup>14<span> / month</span></h2>
								<ul>
									<li>Ultra HD Available</li>
									<li>Watch on any Device</li>
									<li>Unlimited Movies and Shows</li>
									<li>Download Available</li>
								</ul>
								<p><a class="btn" href="signup-step2.html" role="button">Choose Plan</a></p>
							</div><!-- close .pricing-table-col -->
						</div><!-- close .col-md-12 -->
					</div><!-- close .row -->
				</div><!-- close .pricing-table-pro -->
					
				
				<div class="clearfix"></div>
			</div><!-- close .container -->
			
			</div><!-- close .progression-pricing-section-background -->
			
		</div><!-- close #content-pro -->
		
		<footer id="footer-pro">
			<div class="container">
				<div class="row">
					<div class="col-md">
						<div class="copyright-text-pro">&copy; Copyright 2018 SKRN. All Rights Reserved</div>
					</div><!-- close .col -->
					<div class="col-md">
						<ul class="social-icons-pro">
							<li class="facebook-color"><a href="http://facebook.com/progressionstudios" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li class="twitter-color"><a href="http://twitter.com/Progression_S" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li class="youtube-color"><a href="http://youtube.com" target="_blank"><i class="fab fa-youtube"></i></a></li>
							<li class="vimeo-color"><a href="http://vimeo.com" target="_blank"><i class="fab fa-vimeo-v"></i></a></li>
						</ul>
					</div><!-- close .col -->
				</div><!-- close .row -->
			</div><!-- close .container -->
		</footer>
		
		<a href="#0" id="pro-scroll-top"><i class="fas fa-chevron-up"></i></a>
		
		
		<!-- Modal -->
		<div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="LoginModal" aria-hidden="true">
			 <button type="button" class="close float-close-pro" data-dismiss="modal" aria-label="Close">
			           <span aria-hidden="true">&times;</span>
			</button>
		  <div class="modal-dialog modal-dialog-centered modal-md" role="document">
		    <div class="modal-content">
				 <div class="modal-header-pro">
					 <h2>Welcome Back</h2>
					 <h6>Sign in to your account to continue using SKRN</h6>
				 </div>
				 <div class="modal-body-pro social-login-modal-body-pro">
			 
					 <div class="registration-social-login-container">
						 <form>
							 <div class="form-group">
								 <input type="text" class="form-control" id="username" placeholder="Username">
							 </div>
							 <div class="form-group">
								 <input type="password" class="form-control" id="password" placeholder="Password">
							 </div>
							 <div class="form-group">
								 <button type="button" class="btn btn-green-pro btn-display-block">Sign In</button>
							 </div>
							 <div class="container-fluid">
								 <div class="row no-gutters">
							 		<div class="col checkbox-remember-pro"><input type="checkbox" id="checkbox-remember"><label for="checkbox-remember" class="col-form-label">Remember me</label></div>
									<div class="col forgot-your-password"><a href="#!">Forgot your password?</a></div>
								</div>
							</div><!-- close .container-fluid -->
				
						 </form>
			 
						 <div class="registration-social-login-or">or</div>
				 
					 </div><!-- close .registration-social-login-container -->
			 
					 <div class="registration-social-login-options">
					 	<h6>Sign in with your social account</h6>
						<div class="social-icon-login facebook-color"><i class="fab fa-facebook-f"></i> Facebook</div>
						<div class="social-icon-login twitter-color"><i class="fab fa-twitter"></i> Twitter</div>
						<div class="social-icon-login google-color"><i class="fab fa-google-plus-g"></i> Google</div>
					 </div><!-- close .registration-social-login-options -->
			 
					 <div class="clearfix"></div>
			 

 		      </div><!-- close .modal-body -->
		
			 <a class="not-a-member-pro" href="signup-step2.html">Not a member? <span>Join Today!</span></a>
		    </div><!-- close .modal-content -->
		  </div><!-- close .modal-dialog -->
		</div><!-- close .modal -->
		

		<!-- Required Framework JavaScript -->
		<script src="{{ asset('assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
		<script src="{{ asset('assets/vendor/popper/popper.min.js') }}"></script>
		<script src="{{ asset('assets/vendor/bootstrap/bootstrap.min.js') }}"></script>
		
		<!-- All JavaScript in Footer -->
		
		<!-- Additional Plugins and JavaScript -->
		<script src="{{ asset('assets/vendor/navigation/navigation.js') }}"></script>
		<script src="{{ asset('assets/vendor/jquery-flexslider/jquery.flexslider-min.js') }}"></script>
		<script src="{{ asset('assets/js/script.js') }}"></script>
		
		
	</body>
</html>
