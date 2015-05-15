<!DOCTYPE html>
<html>
	<head>		
		<link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">
        <meta charset="UTF-8"/>
		<title>Dr. Duct Cleaning Naples</title>
		<script src="js/jquery-1.11.2.js"></script>
		<script>
		    $(document).on("mobileinit", function(evt) {
		      // Change some settings
		    	$.mobile.defaultPageTransition = "pop";
		    	$.mobile.pageLoadErrorMessage = "Whoops!";
		    	$.mobile.pageLoadErrorMessageTheme = "b";
			});
		</script>
		<!-- Link Swiper's CSS -->
    	<link rel="stylesheet" href="css/swiper.css">
    	<!-- Swiper JS -->
    	<script src="js/swiper.js"></script>
		<script src="js/jquery.mobile-1.4.5.js"></script>
		<link rel="stylesheet" href="css/styles.css" />
		<link rel="stylesheet" href="touchTouch/touchTouch.css"/>
		<script src="touchTouch/touchTouch.jquery.js"></script>
		<link rel="stylesheet" href="css/slicknav.css" />
		<script src="js/jquery.slicknav.js"></script>
		<script type="text/javascript" src="js/responsiveslides.js"></script>
		<link rel="stylesheet" href="css/style-mobile.css">
		<script src="js/script.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<script>			
			$(function(){
			   	$( "[data-role='header'], [data-role='footer']" ).toolbar();
			});	    	
		   	$(function(){
				$('#menu').slicknav({
					prependTo:'#navigation-menu'
				});
			});
			$(function(){
				$('#menu-contact').slicknav({
					prependTo:'#navigation-menu-contact'
				});
			});
			$(function(){
				$('#menu-seo').slicknav({
					prependTo:'#navigation-menu-seo'
				});
			});
			$(function(){
				$('#menu-3').slicknav({
					prependTo:'#navigation-menu-3'
				});
			});
			$(function(){
				var swiper = new Swiper('.swiper-container', {
    	    	pagination: '.swiper-pagination',
    	    	paginationClickable: true,
    	    	nextButton: '.swiper-button-next',
    	    	prevButton: '.swiper-button-prev',

    	    	slidesPerView: 1,    	    	
    	    	autoplay: 2500,
    	    	autoplayDisableOnInteraction: false,
    	    	loop: true
    			});		
    		});	
		    $(document).on("pagecreate","#page3",function(){
  				$("p").on("swipe",function(){
    				$(this).hide();
  				});                       
			});
	 	</script>   	
	</head>
	<body>		
		<?php 
			include 'settings.php';
		?>
<!-- header - footer //////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<div id="header-image" data-role="header" data-theme="<?php echo $theme ?>" data-position="fixed">
		    <h1><a href="#page1" data-transition="<?php echo $transitionefect ?>">
		    		<img src="img/logo.png" alt="LOGO">
		    	</a>
		    </h1>
		</div>
		<div data-role="footer" data-theme="<?php echo $theme ?>">
			<p><b>DR.DUCT</b></p>
			<p>Owners: <br>	<b>Mario Sr. & Mario Jr.</b></p>			
			<p>Contractor Licence #: CAC056887</p>
			<p>Hours of Operation: <br> <b>Monday-Friday 8 AM-5 PM</b></p>
			<h1>Powered by <a href="http://mobilegrows.com/">MobileGrows</a> |
			 <a href="http://ductcleaningnaples.com/" rel="external">Desktop Site</a>
			</h1>
		</div>
<!-- header - footer ends here ////////////////////////////////////////////////////////////////////////////////////////////////-->		

<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<div data-role="page" id="page1" data-theme="<?php echo $theme ?>">		 
		  <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
		  	<!-- Swiper -->
    		<div class="swiper-container">
    		    <div class="swiper-wrapper">
    		        <div class="swiper-slide"><img src="img/slider-images/Screenshot_5.png"></div>
    		        <div class="swiper-slide"><img src="img/slider-images/Screenshot_8.png"></div>
    		        <div class="swiper-slide"><img src="img/slider-images/Screenshot_9.png"></div>
    		        <div class="swiper-slide"><img src="img/slider-images/slider.png"></div>
    		        <div class="swiper-slide"><img src="img/slider-images/slider1.png"></div>
    		    </div>    		    
        		<!-- Add Navigation -->
        		<div class="swiper-button-prev"></div>
        		<div class="swiper-button-next"></div>
       		</div>
		  	<!-- Swiper End -->
			<fieldset class="ui-grid-a" data-theme="<?php echo $theme ?>">
				<!-- OVDJE SE UPISUJE BROJ TELEFONA KOJI TREBA POZVATI  -->
				<div class="ui-block-a"><a class="ui-btn ui-icon-phone callfind ui-btn-icon-left buttons-radius" href="tel:<?php echo $telephone ?>">Call</a></div>
				<!-- ovdje se upisuje grad i adresa iz koje  -->
				<div class="ui-block-b">
					<!--<script>
							var ua = navigator.userAgent;
							if(/Android|webOS|Opera Mini/i.test(navigator.userAgent) ) {
								console.log("Android uslo");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn fnd callfind ui-icon-location ui-btn-icon-right buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find";
								prostordugme.appendChild(dugme);
							}
							else if(/iPhone|iPad|iPod/i.test(navigator.userAgent)){
								console.log("Iphone ");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn fnd callfind ui-icon-location ui-btn-icon-right buttons-radius");
								dugme.setAttribute('href',"http://maps.google.com/?daddr=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?> ");
								dugme.innerHTML="Find";
								prostordugme.appendChild(dugme);
							}
							else if (ua.indexOf("BlackBerry") >= 0) {

									console.log("Blakberu je prosao ")
									var prostordugme=document.getElementById('findUS');
									var dugme= document.createElement('a');
									dugme.setAttribute('class', "ui-btn fnd callfind ui-icon-location ui-btn-icon-right buttons-radius");
									dugme.setAttribute('href',"javascript:blackberry.launch.newMap({'address':{'address1':'<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>'}});");
									dugme.innerHTML="Find";
									prostordugme.appendChild(dugme);
									}		
							else {
								console.log("nije nigdje uslo default ")
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn fnd callfind ui-icon-location ui-btn-icon-right buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find";
								prostordugme.appendChild(dugme);
							}

							

							// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
							// // some code..
							// }
					</script>-->
				<a class="ui-btn fnd callfind ui-icon-mail ui-btn-icon-right buttons-radius" href="#contactform" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">Contact</a>	
				</div>	   
			</fieldset>         
			
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-carat-r ui-btn-icon-right buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">About</a></div>
				</div>			
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-carat-r ui-btn-icon-right buttons-radius" href="#seopage" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">Recent Projects</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-carat-r ui-btn-icon-right buttons-radius" href="#page3" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">Gallery</a></div>
				</div>				
			<h2>WELCOME TO DR. DUCT - THE DUCTWORK PHYSICIANS</h2>
			<p>Dr. Duct is a state licensed Air Conditioning Contractor that has specialized in 
			improving indoor air quality in private homes and commercial properties in S W Florida 
			for some 20 years.</p>
		  </div>
		</div>
<!-- page 1 ends here /////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<!-- page 2 about /////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<div data-role="page" id="page2" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu">
						<ul id="menu">
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">Home</a></li>
							<li><a href="#seopage" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">Recent Projects</a></li>
							<li><a href="#page3" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">Gallery</a></li>
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">Contact</a></li>
						</ul>
					</section>

                    <h2>ABOUT US</h2>
                    	<h4>A FEW WORDS <b>ABOUT US</b></h4>
                    <p>Let us introduce ourselves</p> <br>
                    <p>Our <b>Complete Duct Restoration</b> Service involves using state of the art equipment, proven technology and antimicrobial 
                    treatment which insures that the ductwork interior is virtually free of microbes and contaminates.</p>
                     <p>And we are the only duct cleaning company in S W Florida that stands behind their work with a 2 year <b>“No Mold”</b> guarantee.</p>
                     <hr>
                     	<h4>OTHER SERVICES <b>INCLUDE:</b></h4>
                     <p>How it all came to be…</p>
                     <ul>
                     	<li>Air Handler Cleaning and Restoration</li>
                     	<li>Dust Decontamination</li>
                     	<li>Econo-Cleaning</li>
                     	<li>Duct Sealing</li>
                     	<li>Ceiling Water Stain Prevention</li>
                     	<li>Duct Replacement</li>
                     </ul>
                </div>
			</div>				
		</div>
<!-- page 2 about ends here ///////////////////////////////////////////////////////////////////////////////////////////////////-->

<!-- contact us ///////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<div id="contactform" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-contact">
							<ul id="menu-contact">
                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">Home</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">About</a></li>
								<li><a href="#seopage" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">Recent Projects</a></li>
								<li><a href="#page3" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">Gallery</a></li>
							</ul>
					</section>
					<div>
						<h1>CONTACT US</h1>
						<h2>Get in touch <br> Email Us from the Mobile Website</h2>
						<form data-parsley-validate method="post" action="mail.php" data-ajax="false">
							Name: <input type="text" id="naam" name="naam" value="" placeholder="Name" required/><br>
							E-mail: <input type="email" id="mail" name="mail" value="" placeholder="E-mail" required/><br>
							Phone Number: <input type="tel" id="telefoon" name="telefoon" value="" placeholder="Phone"/><br>
							Subject: <input type="text" id="onderwerp" name="onderwerp" value="" placeholder="Subject" required/><br>
							Message:<br>
							<textarea id="bericht" name="bericht" placeholder="Enter your message here..." required></textarea> <br />
							<input type="submit" value="Submit" name="submit" class="btn" id="input-dugme">
						</form>
					</div>
				</div>
			</div>		
		</div>
<!-- contact us ends here /////////////////////////////////////////////////////////////////////////////////////////////////////-->

<!-- pageseo Recent Projects //////////////////////////////////////////////////////////////////////////////////////////////////-->
		<div id="seopage" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-seo">
							<ul id="menu-seo">
								<li><a href="#page1" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">Home</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">About</a></li>
								<li><a href="#page3" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">Gallery</a></li>
								<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">Contact</a></li>
							</ul>
					</section>

					<h2>SERVING SW FLORIDA'S INDOOR AIR QUALITY NEEDS FROM PORT CHARLOTTE TO MARCO ISLAND</h2>
					<p><b>SOME OF OUR RECENT PROJECTS</b></p>
					<p><b>Naples Grande –</b> Complete Restoration of Air Handling Equipment and Ductwork in Ballrooms and Guest Rooms</p><br>
					<p><b>Doubletree Hotel Tampa –</b> Complete Restoration of Air Handling Equipment and Duct Systems for Ballrooms and Exhaust Fan Systems for Guest Suites</p>
					<p><b>Ft. Myers News Press –</b> Complete Restoration of Air Handling Equipment and Ductwork Throughout Office Complex</p>
					<p><b>Exclusive Residences -</b> Bonita Bay, Mediterra, Pelican Marsh, Pelican Landing, Pelican Bay, North Naples, South Naples, Port Royal, Marco Island</p>

				</div>
			</div>		
		</div>
<!-- pageseo Recent Projects ends here ////////////////////////////////////////////////////////////////////////////////////////-->

<!-- page 3 gallery ////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<div id="page3" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-3">
							<ul id="menu-3">
								<li><a href="#page1" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">Home</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">About</a></li>
								<li><a href="#seopage" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">Recent Projects</a></li>
								<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>" data-direction="reverse">Contact</a></li>
							</ul>
					</section>
					<div class="thumbs">
						<a href="img/imgs/Connecting-our-Duct-Vacuum.jpg" style="background-image:url(img/imgs/Connecting-our-Duct-Vacuum.jpg)" title="Connecting our Duct Vacuum"></a>
						<a href="img/imgs/Duct-Vacuum-attached-to-air-handler.jpg" style="background-image:url(img/imgs/Duct-Vacuum-attached-to-air-handler.jpg)" title="Duct-Vacuum attached to Air handler"></a>
						<a href="img/imgs/Removing-the-diffuser.jpg" style="background-image:url(img/imgs/Removing-the-diffuser.jpg)" title="Removing the Diffuser"></a>
						<a href="img/imgs/Contact-Vacuuming-the-vent.jpg" style="background-image:url(img/imgs/Contact-Vacuuming-the-vent.jpg)" title="Contact Vacuuming the Vent"></a>
						<a href="img/imgs/Air-washing-the-vent.jpg" style="background-image:url(img/imgs/Air-washing-the-vent.jpg)" title="Air washing the Vent"></a>
						<a href="img/imgs/Treating-the-vent-w-antimicrobial-fungicide.jpg" style="background-image:url(img/imgs/Treating-the-vent-w-antimicrobial-fungicide.jpg)" title="Treating the Vent-w / Antimicrobial - Fungicide"></a>
						<a href="img/imgs/Fungicide-applied-to-ductwork.jpg" style="background-image:url(img/imgs/Fungicide-applied-to-ductwork.jpg)" title="Fungicide applied to Ductwork"></a>
						<a href="img/imgs/Cleaning-and-sanitizing-the-diffuser.jpg" style="background-image:url(img/imgs/Cleaning-and-sanitizing-the-diffuser.jpg)" title="Cleaning and Sanitizing the Diffuser"></a>
						<a href="img/imgs/Cleaning-the-evaporator-coil.jpg" style="background-image:url(img/imgs/Cleaning-the-evaporator-coil.jpg)" title="Cleaning the Evaporator Coil"></a>
						<a href="img/imgs/Rinsing-and-sanitizing-the-evaporator-coil.jpg" style="background-image:url(img/imgs/Rinsing-and-sanitizing-the-evaporator-coil.jpg)" title="Rinsing and Sanitizing the Evaporator Coil"></a>
						<a href="img/imgs/Before1.jpg" style="background-image:url(img/imgs/Before1.jpg)" title="Before"></a>
						<a href="img/imgs/After-1-cleaning-and-fungicide-treatment.jpg" style="background-image:url(img/imgs/After-1-cleaning-and-fungicide-treatment.jpg)" title="After Cleaning and Fungicide Treatment"></a>
						<a href="img/imgs/Before2.jpg" style="background-image:url(img/imgs/Before2.jpg)" title="Before"></a>
						<a href="img/imgs/After2-cleaning-and-fungicide-treatment.jpg" style="background-image:url(img/imgs/After2-cleaning-and-fungicide-treatment.jpg)" title="After Cleaning and Fungicide Treatment"></a>
						<a href="img/imgs/Before3.jpg" style="background-image:url(img/imgs/Before3.jpg)" title="Before"></a>
						<a href="img/imgs/After3.jpg" style="background-image:url(img/imgs/After3.jpg)" title="After"></a>
						<a href="img/imgs/Before4.jpg" style="background-image:url(img/imgs/Before4.jpg)" title="Before"></a>
						<a href="img/imgs/After4.jpg" style="background-image:url(img/imgs/After4.jpg)" title="After"></a>
						<a href="img/imgs/Before-duct-cleaning-and-treatment-with-antimicrobial-fungicide.jpg" style="background-image:url(img/imgs/Before-duct-cleaning-and-treatment-with-antimicrobial-fungicide.jpg)" title="Before Duct Cleaning and Treatment with Antimicrobial Fungicide (First)"></a>
	        			<a href="img/imgs/01.jpg" style="background-image:url(img/imgs/01.jpg)" title="Before Duct Cleaning and Treatment with Antimicrobial Fungicide (Second)"></a>
	        			<a href="img/imgs/5.jpg" style="background-image:url(img/imgs/5.jpg)" title="After Source Cleaning and Antimicrobial Treatment (First)"></a>
	        			<a href="img/imgs/After-source-cleaning-and-antimicrobial-treatment.jpg" style="background-image:url(img/imgs/After-source-cleaning-and-antimicrobial-treatment.jpg)" title="After Source Cleaning and Antimicrobial Treatment (Second)"></a>
	        			<!-- <a href="img/imgs/6.jpg" style="background-image:url(img/imgs/6.jpg)" title="Before Cleaning"></a>
	        			<a href="img/imgs/7.jpg" style="background-image:url(img/imgs/7.jpg)" title="After Cleaning"></a> -->
	        			<a href="img/imgs/10.jpg" style="background-image:url(img/imgs/10.jpg)" title="Air Handler Blower wheel with Severe mold Contamination (First)"></a>
	        			<a href="img/imgs/08.jpg" style="background-image:url(img/imgs/08.jpg)" title="Air Handler Blower wheel with Severe mold Contamination (Second)"></a>
	        			<a href="img/imgs/11.jpg" style="background-image:url(img/imgs/11.jpg)" title="Air Handler Blower wheel with Severe mold Contamination - After (First)"></a>
	        			<a href="img/imgs/09.jpg" style="background-image:url(img/imgs/09.jpg)" title="Air Handler Blower wheel with Severe mold Contamination - After (Second)"></a>
            			<a href="img/imgs/12.jpg" style="background-image:url(img/imgs/12.jpg)" title="After Antimicrobial Treatment"></a>
        			</div>
				</div>
			</div>		
		</div>
<!-- page 3 gallery ends here //////////////////////////////////////////////////////////////////////////////////////////////////-->

<!--page succes ////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<div id="succes" data-role="page" data-theme="<?php echo $theme ?>" data-dialog="true">
			<div data-role="main" class="ui-content">	
			 <p>The contact form was sent succesfully!</p>
			</div>
		</div>
<!--page succes ends here///////////////////////////////////////////////////////////////////////////////////////////////////////-->

<!--page error /////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<div id="error" data-role="page" data-dialog="true">
			<div data-role="main" class="ui-content">	
				<p>The contact form was NOT sent because of an error!</p>
			</div>
		</div>
<!--page error ends here////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<!-- plugins /////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- SLIDER ZA MOBILNI SAJT POCINJE OVDJEE -->
		<!-- it works the same with all jquery version from 1.x to 2.x -->
		<script type="text/javascript" src="js/responsiveslides.js"></script>    
		<!-- Slajder se zavrsava -->
		<script src="js/easing.js" type="text/javascript"></script>
		<!-- UItoTop plugin -->
		<script src="js/jquery.ui.totop.js" type="text/javascript"></script>
		<!-- Starting the plugin -->
		<script type="text/javascript">
			$(document).ready(function() {
				/*
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				*/				
				$().UItoTop({ easingType: 'easeOutQuart' });				
			});
		</script>
<!-- plugins ends here ///////////////////////////////////////////////////////////////////////////////////////////////////////-->

	</body>
</html>
