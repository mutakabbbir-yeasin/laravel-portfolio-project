<!doctype html>
<html class="no-js" lang="zxx">

<head>	
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Mutakabbir Yeasin | Full-stack Web Developer</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Place favicon.ico in the root directory -->
	<link rel="shortcut icon" type="image/x-icon" href="{{url('frontend/img/favicon.png')}}">
	
	<!-- ========== Start Stylesheet ========== -->
	<link  rel="stylesheet" type="text/css" href="{{url('frontend/css/bootstrap.min.css')}}" />
	<link  rel="stylesheet" type="text/css" href="{{url('frontend/css/fontawesome.min.css')}}" />
	<link  rel="stylesheet" type="text/css" href="{{url('frontend/css/bsnav.min.css')}}" />
	<link  rel="stylesheet" type="text/css" href="{{url('frontend/css/magnific-popup.css')}}" />
	<link  rel="stylesheet" type="text/css" href="{{url('frontend/css/slick.css')}}" />
	<link  rel="stylesheet" type="text/css" href="{{url('frontend/css/all.min.css')}}" />
	<link  rel="stylesheet" type="text/css" href="{{url('frontend/css/animate.css')}}" />
	<link  rel="stylesheet" type="text/css" href="{{url('frontend/css/icofont.min.css')}}" />
	<link  rel="stylesheet" type="text/css" href="{{url('frontend/css/splitting.css')}}" />
	<link  rel="stylesheet" type="text/css" href="{{url('frontend/css/splitting-cells.css')}}" />
	<link  rel="stylesheet" type="text/css" href="{{url('frontend/css/style.css')}}" />
	<link  rel="stylesheet" type="text/css" href="{{url('frontend/css/responsive.css')}}" />
	<!-- ========== End Stylesheet ========== -->
</head>

 <body class="side-header" data-spy="scroll" data-target=".navbar" data-offset="1">

<!-- Preloader -->
<div class="preloader">
  <div class="lds-ellipsis">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>
</div>
<!-- Preloader End --> 

<div class="theme_all_wrap" data-magic-cursor=" " data-color="crimson">

<!-- Document Wrapper   
=============================== -->
 <div id="main-wrapper"> 
	<!-- Start header
    ============================================= -->

    <header class="header">
		<div class="main-navigation sd-nav">
			<div class="navbar navbar-expand-lg bsnav bsnav-sidebar bsnav-scrollspy bsnav-sidebar-left">
				<a class="navbar-brand mb-20" href="index.html">
					<img src="{{url('frontend/img/safin_header.jpg')}}" class="logo-display" alt="thumb">
					<span class="profile_name">Mutakabbir Yeasin</span>
				</a>
				<button class="navbar-toggler toggler-spring"><span class="navbar-toggler-icon"></span></button>
				<div class="collapse navbar-collapse justify-content-sm-center pt-20">
					<ul class="navbar-nav navbar-mobile mr-0">
						<li class="nav-item"><a class="nav-link smooth-scroll" href="#home"><i class="icofont-home"></i> Home</a></li>
						<li class="nav-item"><a class="nav-link smooth-scroll" href="#about"><i class="icofont-contact-add"></i> About</a></li>
						<li class="nav-item"><a class="nav-link smooth-scroll" href="#service"><i class="icofont-file-document"></i> Service</a></li>
						<li class="nav-item"><a class="nav-link smooth-scroll" href="#work"><i class="icofont-briefcase-1"></i> Portfolio</a></li>
						<li class="nav-item"><a class="nav-link smooth-scroll" href="#feed"><i class="icofont-quote-left"></i>Testimonial</a></li>
						<li class="nav-item"><a class="nav-link smooth-scroll" href="#blog"><i class="icofont-blogger"></i> Blog</a></li>
						<li class="nav-item"><a class="nav-link smooth-scroll" href="#contact"><i class="icofont-envelope"></i> Contact</a></li>
					</ul>
				</div>
				<div class="sidebar-copyright pt-10">
					<p class="copyright"> Copyright @Mutakabbir Yeasin</p>
				</div>
			</div>
			<div class="bsnav-mobile">
				<div class="bsnav-mobile-overlay"></div>
				<div class="navbar"></div>
			</div>
		</div>
    </header>
	  <!-- Header End --> 
	
	<div class="clearfix"></div>

<div class="main-area-width">	

	<main class="main">
		 
		<!-- Start Hero   
		============================================= -->
		<div id="home" class="hero-section hero-section-bg" style="background-image: url(<?php echo $home->bg_img ?>)">
			<div class="line_wrap"> <!-- line animation --> 
				<div class="line_item"></div>
				<div class="line_item"></div>
				<div class="line_item"></div>
				<div class="line_item"></div>
				<div class="line_item"></div>
			 </div> <!-- end line animation --> 						
			<div class="container sidebar-toptext">
				<div class="row">
					<div class="col-md-12">
						<div class="head-top-contact">
							<span class="phone_contact">{{$home->phone_number}}</span>
							<span class="email_contact">{{$home->email}}</span>							
						</div>
					</div>
				</div>
			</div>
			<div class="top-contact">
				<a href="#contact" class="top-contact-btn smooth-scroll">
					<i class="icofont-envelope"></i>
				</a>
			</div>
			<div class="hero-single sidebar-hero-bg">			
				<div class="container">	<!-- start container --> 	
					<div class="row">	<!-- start row --> 	
						<div class="col-md-6 offset-md-1 col-sm-12 pl-20">	<!-- hero text left --> 	
							<div class="hero-content wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".6s">
								<h2 data-splitting class="top-title pt-30 wow fadeInUp" data-wow-duration=".001s" data-wow-delay=".001s">{{$home->first_name}} <span class="colored">{{$home->last_name}}</span></h2>
								<div class="typed-strings">
									  <p> <span class="type_color">Web Designer</span></p>
									  <p> <span class="type_color">Full-stack Web Developer</span></p>
									  <p> <span class="type_color">Wordpress Developer</span></p>
								</div>
								<p class="text-16 header_type_text text-white mb-2 mb-md-3">
									<span class="typed"></span>
								</p>
								<p class="header-intro-text wow fadeInUp pt-10" data-wow-duration=".6s" data-wow-delay=".8s">{{$home->short_description}}</p>
								<div class="hro-btn wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".9s">
									<a href="{{url($home->resume)}}" class="theme-btn">
										Download CV
									</a>
								</div>
							</div>
						</div>	<!-- hero left text end --> 	
						<div class="col-md-5 col-sm-12 mt-50"><!-- col-6 --> 
							<div class="right-social-icon">
								<ul class="social-icon">
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-dribbble"></i></a></li>
									<li><a href="#"><i class="fab fa-behance"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>						
							</div>						
						</div><!-- end col-6 --> 
					</div>
				</div>					
			</div><!-- single Hero End -->
			<div class="about-scroll-down text-center">
				<a href="#about" class="scroll-down-arrow scroll_down smooth-scroll"><i class="icofont-scroll-bubble-down"></i></a>						
			</div>			
		</div>
		<!-- End Hero -->
		
		<!-- About us
		============================================= -->
		<div id="about" class="about-area de-padding">
			<div class="line_wrap"> <!-- line animation --> 
				<div class="line_item"></div>
				<div class="line_item"></div>
				<div class="line_item"></div>
				<div class="line_item"></div>
				<div class="line_item"></div>
			 </div> <!-- end line animation --> 			
			<div class="about-wpr mt-20">	<!-- start about -->
				<div class="container pl-20">	<!-- container --> 
					<div class="row">	<!-- row --> 
						<div class="col-md-5 mb-50">
							<div class="about-left wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".2s">
								<div class="about-header-img">
									<img src="{{url($about->my_img)}}" alt="about me" class="responsive-fluid bounce-animate" />
								</div>
							</div>
						</div>	<!-- about left text end --> 
						<div class="col-md-7">	<!-- col-7 --> 
							<div class="about-right wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".5s">
								<span class="top-title">About Me</span>
								<h2 data-splitting class="about-tl-3 gr-2 wow fadeInUp" data-wow-duration=".01s" data-wow-delay=".1s">
									{{$about->designation}}
								</h2>
								<p class="wow fadeInUp" data-wow-duration=".2s" data-wow-delay=".2s">
									{{$about->description}}									
								</p>
								<div class="row">	<!-- row --> 
									<div class="col-md-6 col-sm-12"><!-- col-6 --> 
										<div class="about-cn">
											<ul>
												<li><i class="fas fa-user-tie"></i> {{$about->name}}	</li>
												<li><i class="fab fa-whatsapp"></i> {{$about->whatsapp}}</li>
												<li><i class="far fa-envelope"></i> {{$about->email}}</li>
											</ul>
										</div>									
									</div>	<!-- end col-6 -->
									<div class="col-md-6 col-sm-12"><!-- col-6 --> 
										<div class="about-cn">
											<ul>
												<li><i class="fas fa-map-marker-alt"></i> {{$about->address}}</li>
												<li><i class="fas fa-birthday-cake"></i> {{$about->dob}}</li>
												<li><i class="fab fa-whatsapp"></i> {{$about->skype}}</li>
											</ul>
										</div>									
									</div> <!-- end col-6 --> 
								</div> <!-- end row --> 
							</div> <!-- end about right --> 								
						</div> <!-- end col-7 -->  
					</div> <!-- end row --> 
					<div class="counter-counter grid-4"> <!-- start counter --> 
						<div class="fun-fact">
							<span class="fun-icon one"><i class="icofont-calendar"></i></span>
							<div class="fun-desc">
								<p class="timer" data-to="{{$about->hours}}" data-speed="3000"> {{$about->hours}}</p>
								<span class="medium">Working Hours</span>
							</div>
						</div>
						<div class="fun-fact fun-active">
							<span class="fun-icon two"><i class="icofont-globe"></i></span>
							<div class="fun-desc">
								<p class="timer" data-to="{{$about->projects}}" data-speed="3000"> {{$about->projects}}</p>
								<span class="medium">Total projects</span>
							</div>
						</div>
						<div class="fun-fact">
							<span class="fun-icon three"><i class="icofont-bulb-alt"></i></span>
							<div class="fun-desc">
								<p class="timer" data-to="{{$about->years}}" data-speed="3000"> {{$about->years}}</p>
								<span class="medium">Years Journey</span>
							</div>
						</div>
						<div class="fun-fact">
							<span class="fun-icon four"><i class="icofont-nerd-smile"></i></span>
							<div class="fun-desc">
								<p class="timer" data-to="{{$about->client}}" data-speed="3000"> {{$about->client}}</p>
								<span class="medium">Total Client</span>
							</div>
						</div>
					</div> <!-- end counter -->
				</div> <!-- end container -->
			</div> <!-- end about wrp --> 			
		</div> <!-- About us -->
		
		<!-- Start Experience
		============================================= -->
		<div class="exp-area de-padding">
			<div class="container pl-20">
				<div class="site-title text-center">
					<span class="resume-title">
						My Resume
					</span>		
					<h2 data-splitting class="about-tl-3 gr-2 wow fadeInUp" data-wow-duration=".01s" data-wow-delay=".01s"> 
						Education & Experience 
					</h2>		
				</div> <!-- end section title --> 
				<div class="exp-wpr row">
					<div class="col-md-6"><!-- start col-6 -->
						<div class="experience_area">
							<div class="exp-box mt-20 wow fadeInDown" data-wow-duration=".6s" data-wow-delay=".2s"><!-- start one -->
								<div class="exp-icon one">
									<i class="icofont-designfloat"></i>
								</div>
								<div class="exp-content">
									<h4>Themezone Academy</h4>
									<p>Full-stack Web Developer(Intern) (January, 2022- Preasent) </p>
									<span class="exp-description pt-10">Contrary the on way yollis pellentesque pellentesque feugiat risus met.</span>
								</div>
							</div> <!-- end one -->
							<div class="exp-box mt-30 wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".4s"><!-- start two -->
								<div class="exp-icon two">
									<i class="icofont-file-python"></i>
								</div>
								<div class="exp-content">
									<h4>WordPress Developer</h4>
									<p>Search Engine School (June, 2021 - December, 2021)</p>
									<span class="exp-description pt-10">Contrary the on way yollis pellentesque pellentesque feugiat risus amet.</span>
								</div>
							</div> <!-- end two -->
							<div class="exp-box mt-30 wow fadeInDown" data-wow-duration=".6s" data-wow-delay=".6s"><!-- start three -->
								<div class="exp-icon three">
									<i class="icofont-code"></i>
								</div>
								<div class="exp-content">
									<h4>IT Operator & Facebook Page Manager</h4>
									<p>Safe Bangla Trade International (January, 2021- May, 2021)</p>
									<span class="exp-description pt-10">Contrary the on way yollis pellentesque pellentesque feugiat risus nunc.</span>
								</div>
							</div> <!-- end three -->						
						</div>
					</div> <!-- end col-6 -->
					<div class="col-md-6"><!-- start col-6 -->
						<div class="education_area">
							<div class="exp-box mt-20 wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".2s"><!-- start one -->
								<div class="exp-icon four">
									<i class="icofont-graduate-alt"></i>
								</div>
								<div class="exp-content">
									<h4>MSc in CSE </h4>
									<p>Institute of Science & Technology (2020 - Present)</p>
									<span class="exp-description pt-10">Contrary the on way yollis pellentesque pellentesque feugiat risus nunc.</span>
								</div>
							</div> <!-- end one -->
							<div class="exp-box mt-30 wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".4s"><!-- start two -->
								<div class="exp-icon five">
									<i class="icofont-graduate"></i>
								</div>
								<div class="exp-content">
									<h4>BSc in CSE  </h4>
									<p>Bangladesh Institute of Science & Technology (2026 - 2020)</p>
									<span class="exp-description pt-10">Contrary the on way yollis pellentesque pellentesque feugiat risus nunc.</span>
								</div>
							</div> <!-- end two -->
						</div>
					</div> <!-- end col-6 -->
				</div> <!-- end exp-wrp row -->
				<div class="row">	<!-- start row --> 
					<div class="col-md-6"> <!-- start col-6 -->
						<div class="progress-left pt-90">
							<div class="skill-section">
								<!-- Progress Bar Start -->
								<div class="progress-box">
									<h5>HTML <span class="pull-right">90%</span></h5>
									<div class="progress">
										<div class="progress-bar" role="progressbar" data-width="95"></div>
									</div>
								</div>
								<div class="progress-box">
									<h5>CSS <span class="pull-right">90%</span></h5>
									<div class="progress">
										<div class="progress-bar" role="progressbar" data-width="95"></div>
									</div>
								</div>
								<div class="progress-box">
									<h5>Bootstrap <span class="pull-right">85%</span></h5>
									<div class="progress">
										<div class="progress-bar" role="progressbar" data-width="75"></div>
									</div>
								</div>
								<div class="progress-box">
									<h5>JavaScript <span class="pull-right">75%</span></h5>
									<div class="progress">
										<div class="progress-bar" role="progressbar" data-width="75"></div>
									</div>
								</div>
								<div class="progress-box">
									<h5>jQuery <span class="pull-right">80%</span></h5>
									<div class="progress">
										<div class="progress-bar" role="progressbar" data-width="75"></div>
									</div>
								</div>
								<div class="progress-box">
									<h5>PHP <span class="pull-right">80%</span></h5>
									<div class="progress">
										<div class="progress-bar" role="progressbar" data-width="75"></div>
									</div>
								</div>
								<div class="progress-box">
									<h5>MySql <span class="pull-right">80%</span></h5>
									<div class="progress">
										<div class="progress-bar" role="progressbar" data-width="75"></div>
									</div>
								</div>
								<div class="progress-box">
									<h5>Laravel <span class="pull-right">70%</span></h5>
									<div class="progress">
										<div class="progress-bar" role="progressbar" data-width="75"></div>
									</div>
								</div>
								<div class="progress-box">
									<h5>React.js <span class="pull-right">80%</span></h5>
									<div class="progress">
										<div class="progress-bar" role="progressbar" data-width="75"></div>
									</div>
								</div>
								<div class="progress-box">
									<h5>WordPress  <span class="pull-right">85%</span></h5>
									<div class="progress">
										<div class="progress-bar" role="progressbar" data-width="85"></div>
									</div>
								</div>
								<!-- End Progressbar -->
							</div>
						</div>	
					</div> <!-- end col-6 --> 
					<div class="col-md-6"> <!-- start col-6 -->
						<div class="progress-right pt-90">
							<div class="skill-section">
								<!-- Progress Bar Start -->
								<div class="progress-box">
									<h5>English <span class="pull-right">85%</span></h5>
									<div class="progress">
										<div class="progress-bar" role="progressbar" data-width="85"></div>
									</div>
								</div>
								<div class="progress-box">
									<h5>French <span class="pull-right">95%</span></h5>
									<div class="progress">
										<div class="progress-bar" role="progressbar" data-width="95"></div>
									</div>
								</div>
								<div class="progress-box">
									<h5>Arabic <span class="pull-right">75%</span></h5>
									<div class="progress">
										<div class="progress-bar" role="progressbar" data-width="75"></div>
									</div>
								</div>
								<!-- End Progressbar -->
							</div>
						</div>							
					</div>	<!-- end col-6  --> 
				</div>	<!-- end row--> 
				<div class="row pt-70"><!-- start row-->
					<div class="col-md-12">
						<div class="download-cv-btn text-center">
							<a href="#" class="theme-btn">Download CV</a>
						</div>
					</div>
				</div><!-- end row-->
			</div> <!-- end container -->			
		</div>
		<!-- End Experience -->
		
		<!-- Start Services
		============================================= -->		
		<div id="service" class="service-area de-padding">					
			<div class="container pl-20">
				<div class="site-title text-center"> <!-- service section title -->
					<span class="resume-title">My Services</span>
					<h2 data-splitting class="about-tl-3 gr-2 wow fadeInUp" data-wow-duration=".01s" data-wow-delay=".01s"> 
						A brief of Offerting Services 
					</h2>
				</div>
				<div class="row"> <!-- start row -->
					@if(count($service) > 0)
						@foreach ($service as $service)
						<div class="col-md-4 col-sm-6">
							<div class="service-box mt-30 wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s">
								<div class="service-icon service-one">
									<i class="<?php  echo $service->icon;  ?>"></i>
								</div>
								<div class="service-info">
									<h2>{{$service->title}}</h2>
									<p> @php echo str_replace('"', ' ', $service->description); @endphp</p>
									{{-- <ul>
										<li>Logo design</li>
										<li>Brand Guide</li>
										<li>Brand Printing</li>
									</ul> --}}
								</div>
							</div> <!-- end service one -->					
						</div> <!-- end col-4 -->
						@endforeach
					@endif
						
					<div class="col-md-4 col-sm-6">
						<div class="service-box mt-30 wow fadeInDown" data-wow-duration=".7s" data-wow-delay=".6s">
							<div class="service-icon service-two">
								<i class="icofont-ui-browser"></i>
							</div>
							<div class="service-info">
								<h2>Print Design</h2>
								<ul>
									<li>Business Card</li>
									<li>Brochure</li>
									<li>Magazine</li>
								</ul>
							</div>
						</div> <!-- end service two -->					
					</div> <!-- end col-4 -->	
					<div class="col-md-4 col-sm-6">
						<div class="service-box mt-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".8s">
							<div class="service-icon service-three">
								<i class="icofont-ui-theme"></i>
							</div>
							<div class="service-info">
								<h2>Wordpress Ninja</h2>
								<ul>
									<li>PSD to WP</li>
									<li>Woocommerce</li>
									<li>Speed Optimization</li>
								</ul>
							</div>
						</div> <!-- end service three -->					
					</div> <!-- end col-4 -->
					<div class="col-md-4 col-sm-6">
						<div class="service-box mt-30 wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s">
							<div class="service-icon service-one">
								<i class="icofont-ship-wheel"></i>
							</div>
							<div class="service-info">
								<h2>Graphic Design</h2>
								<ul>
									<li>Package Design</li>
									<li>Email Signature</li>
									<li>Social Media Banner</li>
								</ul>
							</div>
						</div> <!-- end service one -->					
					</div> <!-- end col-4 -->
					<div class="col-md-4 col-sm-6">
						<div class="service-box mt-30 wow fadeInDown" data-wow-duration=".7s" data-wow-delay=".6s">
							<div class="service-icon service-two">
								<i class="icofont-ssl-security"></i>
							</div>
							<div class="service-info">
								<h2>Cyber Security</h2>
								<ul>
									<li>Ethical Hacking</li>
									<li>Security Analysis</li>
									<li>Remove Malware</li>
								</ul>
							</div>
						</div> <!-- end service two -->					
					</div><!-- end col-4 -->
					<div class="col-md-4 col-sm-6">
						<div class="service-box mt-30 wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".8s">
							<div class="service-icon service-three">
								<i class="icofont-bulb-alt"></i>
							</div>
							<div class="service-info">
								<h2>Web Development</h2>
								<ul>
									<li>React JS</li>
									<li>PSD to HTML</li>
									<li>Javascript</li>
								</ul>
							</div>
						</div> <!-- end service six -->					
					</div><!-- end col-4 -->
				</div> <!-- end row -->
			</div> <!-- end container -->				
		</div> <!-- End Services -->
		
		<!-- Start Hire Me
		============================================= -->
		<div class="hireme-area de-padding jarallax d-flex" data-jarallax='{"speed": 0.2}'>		
			<div class="container pl-20"> <!-- start container-->
				<div class="hire-title">
					<h2 data-splitting class="tl-3 text-white text-center wow fadeInUp" data-wow-duration=".01s" data-wow-delay=".01s"> Interested in working with me?</h2>
				</div>
				<div class="row"> <!-- hire me btn -->
					<div class="col-md-6 text-center">
						<div class="video-hire-btn mt-30">
							<div class="video-left-img-area wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".3s">
								<div class="video-box fl-wrap">
									<a class="video-box-btn color-bg popup-vimeo image-popup" href="https://www.youtube.com/watch?v=nqye02H_H6I"><i class="fa fa-play" aria-hidden="true"></i></a>
								</div>									
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="btn-content">
							<div class="hire-btn mt-20"> <!-- start btn-->
								<a href="#contact" class="theme-btn hire-btn smooth-scroll">
									Hire Me
								</a>
							</div> <!-- end btn-->
						</div><!-- end btn content -->						
					</div><!-- end col-6 -->					
				</div> <!-- end row -->
			</div> <!-- end container -->
		</div>
		<!-- End Hire Me-->
		
		<!-- Start Faq
		============================================= -->
	<div class="fq-area de-padding">	
		<div class="container pl-20"> <!-- start container -->
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<div class="faq-wpr"> <!-- start faq-wpr -->
						<div class="fq-right">
							<div class="faqs-title pb-30 text-center">
								<span class="resume-title">FAQS</span>
								<h2 data-splitting class="faqs-subtitle about-tl-3 gr-2 wow fadeInUp" data-wow-duration=".01s" data-wow-delay=".01s"> Have any questions?</h2>
							</div>
							
							
							<div class="site-title wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".2s">
								<div class="accordion" id="accordionExample">
									@if(count($faq) > 0)
									@foreach ($faq as $faq)
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingOne">
											<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
												{{$faq->question}}
											</button>
										</h2>
										<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
											<div class="accordion-body">
												{{$faq->answer}}
											</div>
										</div>
									</div><!-- End accordion item -->
								@endforeach
								@endif	
								</div> <!-- end site-title -->
						</div> <!-- end faq-right -->
						
											
					</div> <!-- End faq-wpr -->
				</div> <!-- end col-8 -->
				
				
			</div> <!-- end row -->
		</div> <!-- end container -->		
	</div><!-- End Faq -->
		
<!-- Start Project Area
============================================= -->
<section id="work" class="portfolio_bg de-padding">
	<div class="line_wrap"> <!-- line animation --> 
		<div class="line_item"></div>
		<div class="line_item"></div>
		<div class="line_item"></div>
		<div class="line_item"></div>
		<div class="line_item"></div>
	 </div> <!-- end line animation -->
	<div class="container"> <!-- start container -->	
		<div class="row"> <!-- row -->
			<div class="col-md-5 pl-20"> <!-- col-5 -->	
				<div class="site-title work_section_title">
					<span class="top-title wow fadeInUp" data-wow-duration=".4s" data-wow-delay=".3s">
						My Portfolio
					</span>
					<h2 data-splitting class="about-tl-3 gr-2 wow fadeInUp" data-wow-duration=".01s" data-wow-delay=".01s">
						Awesome Works
					</h2>
				</div>	
			</div><!-- end col-5 -->
			<div class="col-md-7"><!-- start col-7 -->
				<ul class="col list-unstyled list-inline mb-0 text-uppercase work_menu mt-50" id="menu-filter">
					<li class="list-inline-item"><a class="active" data-filter="*">All</a></li>
					<li class="list-inline-item"><a class="" data-filter=".seo">UI/UX</a></li>
					<li class="list-inline-item"><a class="" data-filter=".webdesign">Branding</a></li>
					<li class="list-inline-item"><a class="" data-filter=".work">Design</a></li>
					<li class="list-inline-item"><a class="" data-filter=".wordpress">Wordpress</a></li>
				</ul>			
			</div><!-- end col-7 -->
		</div><!-- end row -->
		<div class="row row-full-width">
			<div class="col-md-12"> <!-- start col-9 -->
				<div class="container portfolio-container"> <!-- container -->
					<div class="row work-filter">
						<div class="col-md-4 work_item work wordpress">
							<a href="{{url('frontend/img/portfolio/1.jpg')}}" class="img-zoom">
								<div class="work_box">
									<div class="work_img">
										<img src="{{url('frontend/img/portfolio/1.jpg')}}" class="img-fluid mx-auto d-block rounded" alt="work-img">
									</div>
									<div class="work_detail">
										<p class="mb-2">Category</p>
										<h4 class="mb-0">Project Title</h4>
									</div>
								</div>
							</a>
						</div> <!-- end col-4 -->
						<div class="col-md-4 work_item webdesign wordpress">
							<a href="{{url('frontend/img/portfolio/2.jpg')}}" class="img-zoom">
								<div class="work_box">
									<div class="work_img">
										<img src="{{url('frontend/img/portfolio/2.jpg')}}" class="img-fluid mx-auto d-block rounded" alt="work-img">
									</div>
									<div class="work_detail">
										<p class="mb-2">Category</p>
										<h4 class="mb-0">Project Title</h4>
									</div>
								</div>
							</a>
						</div> <!-- end col-4 -->
						<div class="col-md-4 work_item webdesign seo wordpress">
							<a href="{{url('frontend/img/portfolio/3.jpg')}}" class="img-zoom">
								<div class="work_box">
									<div class="work_img">
										<img src="{{url('frontend/img/portfolio/3.jpg')}}" class="img-fluid mx-auto d-block rounded" alt="work-img">
									</div>
									<div class="work_detail">
										<p class="mb-2">Category</p>
										<h4 class="mb-0">Project Title</h4>
									</div>
								</div>
							</a>
						</div> <!-- end col-4 -->
						<div class="col-md-4 work_item work wordpress">
							<a href="{{url('frontend/img/portfolio/4.jpg')}}" class="img-zoom">
								<div class="work_box">
									<div class="work_img">
										<img src="{{url('frontend/img/portfolio/4.jpg')}}" class="img-fluid mx-auto d-block rounded" alt="work-img">
									</div>
									<div class="work_detail">
										<p class="mb-2">Category</p>
										<h4 class="mb-0">Project Title</h4>
									</div>
								</div>
							</a>
						</div> <!-- end col-4 -->
						<div class="col-md-4 work_item webdesign wordpress">
							<a href="{{url('frontend/img/portfolio/5.jpg')}}" class="img-zoom">
								<div class="work_box">
									<div class="work_img">
										<img src="{{url('frontend/img/portfolio/5.jpg')}}" class="img-fluid mx-auto d-block rounded" alt="work-img">
									</div>
									<div class="work_detail">
										<p class="mb-2">Category</p>
										<h4 class="mb-0">Project Title</h4>
									</div>
								</div>
							</a>
						</div> <!-- end col-4 -->
						<div class="col-md-4 work_item webdesign seo wordpress">
							<a href="{{url('frontend/img/portfolio/6.jpg')}}" class="img-zoom">
								<div class="work_box">
									<div class="work_img">
										<img src="{{url('frontend/img/portfolio/6.jpg')}}" class="img-fluid mx-auto d-block rounded" alt="work-img">
									</div>
									<div class="work_detail">
										<p class="mb-2">Category</p>
										<h4 class="mb-0">Project Title</h4>
									</div>
								</div>
							</a>
						</div> <!-- end col-4 -->
					</div>
				</div> <!-- end container -->
			</div><!-- start col-9 -->
		</div><!-- end row -->	
	</div><!-- end container -->
</section>	<!-- End Project Area -->
		
	<!-- Start Feedback
	============================================= -->
	<div id="feed" class="feedback-area de-padding">
		<div class="line_wrap"> <!-- line animation --> 
			<div class="line_item"></div>
			<div class="line_item"></div>
			<div class="line_item"></div>
			<div class="line_item"></div>
			<div class="line_item"></div>
		 </div> <!-- end line animation --> 					
		<div class="container pl-20"> <!-- start container -->
			<div class="site-title text-center">
				<span class="resume-title text-center wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".5s">
					Testimonial
				</span>
				<h2 data-splitting class="about-tl-3 gr-2 wow fadeInUp" data-wow-duration=".01s" data-wow-delay=".01s">
					People What Are Saying 
				</h2>
			</div> <!-- end section title -->
			<div class="feedback-wpr feed-sldr"> <!-- start feedback-wpr -->
				<div class="feedback-box">
					<div class="feedback-pc">
						<i class="icofont-quote-left"></i>
					</div>
					<p>
						Printing and typesetting industry Lorem Ipsum has the industry's standard dummy text ever the since the 1500s when an unknown took.
					</p>
					<div class="feedback-desc">
						<img src="{{url('frontend/img/client/1.jpg')}}" alt="audiobook maker">
						<div class="feedback-bio">
							<h5 class="fz-20 l-h-1">Devid Nikolas</h5>
							<span class="fz-16 l-h-1">Chairman, Square Inc</span>
						</div>
					</div>
				</div> <!-- end single feedback -->
				<div class="feedback-box">
					<div class="feedback-pc">
						<i class="icofont-quote-left"></i>
					</div>
					<p>
						Printing and typesetting industry Lorem Ipsum has the industry's standard dummy text ever the since the 1500s when an unknown took.
					</p>
					<div class="feedback-desc">
						<img src="{{url('frontend/img/client/2.jpg')}}" alt="audiobook maker">
						<div class="feedback-bio">
							<h5 class="fz-20 l-h-1">Devid Nikolas</h5>
							<span class="fz-16 l-h-1">Chairman, Square Inc</span>
						</div>
					</div>
				</div> <!-- end single feedback -->
				<div class="feedback-box">
					<div class="feedback-pc">
						<i class="icofont-quote-left"></i>
					</div>
					<p>
						Printing and typesetting industry Lorem Ipsum has the industry's standard dummy text ever the since the 1500s when an unknown took.
					</p>
					<div class="feedback-desc">
						<img src="{{url('frontend/img/client/3.jpg')}}" alt="audiobook maker">
						<div class="feedback-bio">
							<h5 class="fz-20 l-h-1">Devid Nikolas</h5>
							<span class="fz-16 l-h-1">Chairman, Square Inc</span>
						</div>
					</div>
				</div> <!-- end single feedback -->
			</div> <!-- end feedback-wpr -->
		</div> <!-- end container -->
	</div>
	<!-- End Feedback -->
		
		<!-- Start Pricing
		============================================= -->
		{{-- <div class="price-area de-padding">
			<div class="container pl-20"> <!-- start container -->
				<div class="site-title text-center">
					<span class="top-title wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s">
						My Price
					</span>
					<h2 data-splitting class="about-tl-3 wow fadeInUp" data-wow-duration=".01s" data-wow-delay=".01s">
						How Much I Charge?
					</h2>
				</div>
				<div class="price-wrapper grid-3"> <!-- start price-area -->
					<div class="price-box mt-20 wow fadeInLeft" data-wow-duration=".5s" data-wow-delay=".5s"> <!-- single price -->
						<div class="price-head">
							<div class="price-icon price-icon-one">
								<i class="icofont-package"></i>
							</div>
							<div class="price-rib">
								<span>Design Package</span>
							</div>
							<div class="price-value">
								<h2><span>$</span>99</h2>
							</div>
						</div>
						<div class="price-info">
							<ul>
								<li><i class="icofont-check"></i> Business Hosting</li>
								<li><i class="icofont-check"></i>Branding & Illustration </li>
								<li><i class="icofont-check"></i>Social Media Banner</li>
								<li><i class="icofont-check"></i>Web UI</li>
							</ul>
						</div>
						<div class="price-bottom">
							<a href="#" class="btn-2">
								Buy Now
							</a>
						</div>
					</div> <!-- end single price -->
					<div class="price-box mt-20 wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".6s"> <!-- single price -->
						<div class="price-head">
							<div class="price-icon price-icon-two">
								<i class="icofont-newspaper"></i>
							</div>
							<div class="price-rib">
								<span>Advance </span>
							</div>
							<div class="price-value">
								<h2><span>$</span>199</h2>
							</div>
						</div>
						<div class="price-info">
							<ul>
								<li><i class="icofont-check"></i>PSD to Wordpress</li>
								<li><i class="icofont-check"></i>Web Design</li>
								<li><i class="icofont-check"></i>Web Development</li>
								<li><i class="icofont-check"></i>10 hours of support</li>
							</ul>
						</div>
						<div class="price-bottom">
							<a href="#" class="btn-2 bt-ac">
								Buy Now
							</a>
						</div>
					</div> <!-- end single price -->
					<div class="price-box mt-20 wow fadeInRight" data-wow-duration=".5s" data-wow-delay=".5s"> <!-- single price -->
						<div class="price-head">
							<div class="price-icon price-icon-three">
								<i class="icofont-license"></i>
							</div>
							<div class="price-rib">
								<span>Ecommerce Solution</span>
							</div>
							<div class="price-value">
								<h2><span>$</span>799</h2>
							</div>
						</div>
						<div class="price-info">
							<ul>
								<li><i class="icofont-check"></i>Woocommerce Store</li>
								<li><i class="icofont-check"></i>Ecommerce Web</li>
								<li><i class="icofont-check"></i>Data Management</li>
								<li><i class="icofont-check"></i>PSD to Woocommerce</li>
							</ul>
						</div>
						<div class="price-bottom">
							<a href="#" class="btn-2">
								Buy Now
							</a>
						</div>
					</div> <!-- end single price-->
				</div> <!-- end price-area -->
			</div> <!-- end container -->
		</div> --}}
		<!-- End Pricing -->
		
		<!-- Start Blog
		============================================= -->
		<div id="blog" class="blog-area de-padding">
			<div class="container pl-20">
				<div class="site-title text-center">
					<span class="top-title wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".5s">Blog Posts</span>
					<h2 data-splitting class="about-tl-3 wow fadeInUp" data-wow-duration=".01s" data-wow-delay=".01s">
						Newly Posted Articles
					</h2>
				</div>
				<div class="blog-wpr blog-sldr">
					<div class="blog-box"> <!-- start single blog -->
						<div class="blog-pic">
							<img src="{{url('frontend/img/blog/1.png')}}" alt="thumb">
						</div>
						<div class="blog-info">
							<ul class="blog-meta">
								<li><i class="icofont-user-alt-4"></i> William</li>
								<li><i class="icofont-clock-time"></i> 02 Aug, 2021</li>
							</ul>
							<a href="single.html">
								<h5 class="blog-title">
									How to make website from 
									scrach easily
								</h5>
							</a>
						</div>
					</div> <!-- end single blog -->
					<div class="blog-box">
						<div class="blog-pic">
							<img src="{{url('frontend/img/blog/2.png')}}" alt="thumb">
						</div>
						<div class="blog-info">
							<ul class="blog-meta">
								<li><i class="icofont-user-alt-4"></i> William</li>
								<li><i class="icofont-clock-time"></i> 07 Aug, 2021</li>
							</ul>
							<a href="single.html">
								<h5 class="blog-title">
									How to make website from 
									scrach easily
								</h5>
							</a>
						</div>
					</div> <!-- end single blog -->
					<div class="blog-box">
						<div class="blog-pic">
							<img src="{{url('frontend/img/blog/3.png')}}" alt="thumb">
						</div>
						<div class="blog-info">
							<ul class="blog-meta">
								<li><i class="icofont-user-alt-4"></i> William</li>
								<li><i class="icofont-clock-time"></i> 04 Aug, 2021</li>
							</ul>
							<a href="single.html">
								<h5 class="blog-title">
									How to make website from 
									scrach easily
								</h5>
							</a>
						</div>
					</div> <!-- end single blog -->
                    <div class="blog-box">
						<div class="blog-pic">
							<img src="{{url('frontend/img/blog/1.png')}}" alt="thumb">
						</div>
						<div class="blog-info">
							<ul class="blog-meta">
								<li><i class="icofont-user-alt-4"></i> William</li>
								<li><i class="icofont-clock-time"></i>09 Aug, 2021</li>
							</ul>
							<a href="single.html">
								<h5 class="blog-title">
									How to make website from 
									scrach easily
								</h5>
							</a>
						</div>
					</div> <!-- end single blog -->
					<div class="blog-box">
						<div class="blog-pic">
							<img src="{{url('frontend/img/blog/2.png')}}" alt="thumb">
						</div>
						<div class="blog-info">
							<ul class="blog-meta">
								<li><i class="icofont-user-alt-4"></i> William</li>
								<li><i class="icofont-clock-time"></i>12 Aug, 2021</li>
							</ul>
							<a href="single.html">
								<h5 class="blog-title">
									How to make website from 
									scrach easily
								</h5>
							</a>
						</div>
					</div> <!-- end single blog -->
				</div>
			</div> <!-- end container -->
		</div>
		<!-- End Blog -->
	
	<div class="clearfix"></div>
	
	<!-- Start Footer
	============================================= -->
	<footer id="contact" class="footer">
		<div class="container pl-20"> <!-- start container -->
			<div class="site-title text-center pt-80">
				<span class="resume-title contact-title wow fadeInUp" data-wow-duration=".4s" data-wow-delay=".6s">Contact</span>
				<h2 data-splitting class="about-tl-3 wow fadeInUp" data-wow-duration=".01s" data-wow-delay=".01s">
					Get in Touch
				</h2>
			</div>
			<div class="row"> <!-- start row -->
				<div class="col-md-7">
					<div class="contact-area">
						<div class="contact-left mt-20">
							<form class="contact-form" id="contact-form" action="{{route('admin.contact.store')}}" method="POST">						
								{{csrf_field()}}
								<div class="row g-4">
									<div class="col-md-12 wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".2s">
										<input type="text" name="subject" class="form-control input-style-2" placeholder="Subject">
									</div>
									<div class="col-md-12 wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".3s">
										<input type="text" name="name" class="form-control input-style-2" placeholder="Your name">
									</div>
									<div class="col-md-12 wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".4s">
										<input type="email" name="email" class="form-control input-style-2" placeholder="Your Email Here">
									</div>
									<div class="col-12 wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".5s">
										<textarea class="form-control input-style-2" name="message" placeholder="Drop Message"></textarea>
									</div>
									<div class="form-message text-center">@include('alert.messages')</div>
									<div class="col-12 text-center wow fadeInUp" data-wow-duration=".6s" data-wow-delay=".6s">
										<button type="submit" class="theme-btn send-me mt-30 text-center">
											Send Me
										</button>
									</div>
									{{-- <div class="col-12 text-center">
										<p class="form-message">@include('alert.messages')</p>
									</div> --}}
								</div>
							</form>
						</div>
					</div> <!-- end contact-area -->
				</div> <!-- end col-7 -->
				<div class="col-md-5">
					<div class="contact-right mt-40">
						<ul>
							<li>
								<div class="addr mt-10 wow fadeInUp" data-wow-duration=".3s" data-wow-delay=".8s">
									<div class="contact-right-icon two">
										<i class="icofont-envelope"></i>
									</div>
									<p class="mb-0 contact_itext">
										mutakabbir.yeasin@gmail.com
									</p>
								</div>
							</li>
							<li>
								<div class="addr mt-10 wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".8s">
									<div class="contact-right-icon three">
										<i class="icofont-brand-whatsapp"></i>
									</div>
									<p class="mb-0 contact_itext">
										+8801986898504
									</p>
								</div>
							</li>
							<li>
								<div class="addr mt-10 wow fadeInUp" data-wow-duration=".7s" data-wow-delay=".8s">
									<div class="contact-right-icon one">
										<i class="icofont-google-map"></i>
									</div>
									<p class="mb-0 contact_itext">
										South Badda, 
										<br />
										Dhaka, Bangladesh
									</p>
								</div>
							</li>
						</ul>
						<div class="gmap-area mt-10"> <!-- start gmap -->
							<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7302.476975755124!2d90.41779162230085!3d23.774520406714757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c79007cc6675%3A0x7df6b39febb764a3!2sSouth%20Badda%2C%20Dhaka%201212!5e0!3m2!1sen!2sbd!4v1641236604820!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>						
						</div> <!-- end gmap -->	
					</div>				
				</div> <!-- end col-5 -->	
			</div> <!-- end row -->
		</div> <!-- end container -->
		<div class="copyright-area"> <!-- start copyright -->
			<div class="container"> <!-- container -->
				<div class="row">
					<div class="col-md-5 mt-50">
						<div class="copyright-left wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".7s">
							<span class="copyright-text">all rights reserved by themetum.com 2021.</span>
						</div>					
					</div> <!-- end col-5 -->
					<div class="col-md-4 mt-50">
						<div class="copyright-right wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".8s">
							<div class="copyright-menu">
								<a href="#">Faqs   /</a>
								<a href="#">privacy policy   /</a>
								<a href="#">services</a>
							</div>					
						</div>
					</div> <!-- end col-4 -->
					<div class="col-md-3 mt-50">
						<div class="copyright-social wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".9s">
							<ul class="footer-social">
								<li><a href="https://www.facebook.com/themetum"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>				
					</div> <!-- end col-3 -->
				</div>
			</div> <!-- end container -->
		</div> <!-- end copyright area -->
	</footer>	
	<!-- End Footer-->	
	</main>		
</div>	
	<!-- Start Scroll top
	============================================= -->
	<a href="#home" id="scrtop" class="smooth-scroll"><i class="icofont-rounded-up"></i></a>
	<!-- End Scroll top-->
	
<!-- CURSOR -->
		<div class="mouse-cursor cursor-outer"></div>
		<div class="mouse-cursor cursor-inner"></div>
		<!-- /CURSOR -->
	</div>	
</div>	<!-- Mouse Cursor End --> 	
  
	<!-- jQuery Frameworks 
    ============================================= -->
	<script src="{{url('frontend/js/jquery-3.6.0.min.js')}} "></script>
	<script src="{{url('frontend/js/bootstrap.bundle.min.js')}} "></script>
	<script src="{{url('frontend/js/jquery.appear.min.js')}} "></script>
	<script src="{{url('frontend/js/jquery.easing.min.js')}} "></script>
	<script src="{{url('frontend/js/waypoints.min.js')}} "></script>
	<script src="{{url('frontend/js/jquery.magnific-popup.min.js')}} "></script>
	<script src="{{url('frontend/js/progress-bar.min.js')}} "></script>
	<script src="{{url('frontend/js/slick.min.js')}} "></script>
	<script src="{{url('frontend/js/isotope.pkgd.min.js')}} "></script>
	<script src="{{url('frontend/js/count-to.js')}} "></script>
	<script src="{{url('frontend/js/typed.min.js')}} "></script>
	<script src="{{url('frontend/js/parallax.js')}} "></script>
	<script src="{{url('frontend/js/wow.js')}} "></script>
	<script src="{{url('frontend/js/bsnav.min.js')}} "></script>
	<script src="{{url('frontend/js/splitting-animation.js')}} "></script>
	<script src="{{url('frontend/js/splitting.min.js')}} "></script>
	<script src="{{url('frontend/js/YTPlayer.min.js')}} "></script>
	<script src="{{url('frontend/js/main.js')}} "></script>

	
	</body>
</html>