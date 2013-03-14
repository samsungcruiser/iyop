<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
	<link rel="shortcut icon" href="/favicon.ico">
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<div id="page-wrap">

		<div id="Header">
			<div id="logo"> 
				<div id="logo2">
		<img src="images/logo.png">
		<!--
		<a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>
	-->
		<img src="images/logo_text.png">
		<!--
		<div class="description"><?php bloginfo('description'); ?></div>
	-->
		</div>
	</div>
			
			
			
		</div>
		<div id="Main_Nav">
	<div id="Main_Nav_inner">
		<?php
		wp_nav_menu(array("menu" => 'Main Nav Menu'));
		?>

	</div><!--end of main nav-->

	</div>
	
	<div class="Main_wrapper1">
		<div Class="slider">
			
			<div id="slider" class="nivoSlider">
    
          <img src="images/slide_img.jpg" alt="" title="#htmlcaption"  />
          <img src="images/slide_img2.jpg" alt="" title="#htmlcaption1"  />
       
          
        </div>
        <div id="htmlcaption" class="nivo-html-caption">
                Kagulu Hill in Buyende is a mystical wonder to see. This rock marks the first settlement area for Basoga of Bunyoro origin led by Prince Mukama. <a href="kagulu.html">readmore</a>. 
            </div>
            <div id="htmlcaption1" class="nivo-html-caption">
                The source of the Nile, the second longest river in the world, marked by the discovery of one of the first European explorers, John Speke, is an internationally unique attraction. <a href="nile.html">readmore</a>. 
            </div>
            
             <div id="htmlcaption2" class="nivo-html-caption">
                Upon Ghandi’s death in 1948, his ashes were divided up and sent to many locations around the world to be scattered, and some ended up in the Nile River at Jinja... 
                <a href="gandhi.html">readmore</a> 
            </div>
		</div><!-- end of slider-->

	</div> 
	<!-- end of main_wrapper1-->

	<div class="Main_wrapper2">
		<div class="Main_wrapper2_inner">
			<h3> Member Parties</h3>
			<div class="party_wrapper">
			<ul>
								<li> <a href="#"> 
									<img src="images/cp-logo.png" width="125" height="109">
									</a> </li>
								<li> <a href="#"> 	
									<img src="images/Dp-logo.png" width="125" height="109">
									 </a> </li>
								<li> <a href="#"> 
									<img src="images/fdc-logo.png" width="125" height="109">
									 </a>  </li>
								<li> <a href="#"> 
									<img src="images/jeema-logo.png" width="125" height="109">
									 </a>  </li>
								<li> <a href="#"> 
									<img src="images/nrm-logo.png" width="125" height="109">
									</a>  </li>
								<li> <a href="#"> 
									<img src="images/PPP-logo.png" width="125" height="109">
									 </a>  </li>
								<li> <a href="#"> 
									<img src="images/upc-logo.png" width="125" height="109">
									</a>  </li>

							</ul>
							
							
		</div>
		<div class="list2">
								<ul >
								<li> <a style="padding-left: 50px;" href="#"> CP</a> </li>
								<li> <a style="padding-left: 100px;" href="#"> DP </a> </li>
								<li> <a style="padding-left: 90px;" href="#"> FDC </a>  </li>
								<li> <a style="padding-left: 70px;" href="#"> JEEEMA </a>  </li>
								<li> <a style="padding-left: 80px;" href="#"> NRM</a>  </li>
								<li> <a style="padding-left: 80px;" href="#"> PPP </a>  </li>
								<li> <a style="padding-left: 90px;" href="#"> UPC</a>  </li>

							</ul>

							</div>
		</div>
	</div><!-- end of main_wrapper2-->
	<div id="Main_wrapper">	
		
		
		<div id="Mid_Content">