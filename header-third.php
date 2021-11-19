<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme-tekup
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <title>Tekup Solution</title>
 <!-- google font  -->
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
<!-- bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

<!-- font awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.1.0.js"></script>

<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script> -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<?php wp_head(); ?>
<style>
.other__project__title{
  padding-top: 2%;
  padding-left: 6%;
  margin-bottom: -4%;
  font-family: Barlow;
  font-style: normal;
  font-weight: bold;
  font-size: 48px;
  line-height: 58px;

  letter-spacing: -0.01em;

  color: #0B0D27;
}
.carousel {
	margin: 50px auto;
	padding: 0 70px;
}
.carousel .item {
	color: #747d89;
	min-height: 325px;
	text-align: center;
	overflow: hidden;
}
.carousel .thumb-wrapper {
	padding: 20px 5px;
	background: #fff;
  
	border-radius: 6px;
	text-align: left;
	position: relative;
	/* box-shadow: 0 2px 3px rgba(0,0,0,0.2); */
}
.carousel .item .img-box {
	height: 320px;
	margin-bottom: 20px;
	width: 100%;
	position: relative;
}
.carousel .item img {	
	max-width: 100%;
	max-height: 100%;
	display: inline-block;
	position: absolute;
	bottom: 0;
	margin: 0 auto;
	left: 0;
	right: 0;
}
.carousel .item h4 {
	font-size: 18px;
  color: #0B0D27;
}
.carousel .item h4, .carousel .item p, .carousel .item ul {
	margin-bottom: 5px;
}
.carousel .thumb-content .btn {
	color: #7ac400;
	font-size: 11px;
	text-transform: uppercase;
	font-weight: bold;
	background: none;
	border: 1px solid #7ac400;
	padding: 6px 14px;
	margin-top: 5px;
	line-height: 16px;
	border-radius: 20px;
}
.carousel .thumb-content .btn:hover, .carousel .thumb-content .btn:focus {
	color: #fff;
	background: #7ac400;
	box-shadow: none;
}
.carousel .thumb-content .btn i {
	font-size: 14px;
	font-weight: bold;
	margin-left: 5px;
}
.carousel .sub-title {
	font-size: 13px;
  color:#0B0D27;
	padding: 2px 0;
}
.carousel .item-price strike {
	opacity: 0.7;
	margin-right: 5px;
}
.carousel-control-prev, .carousel-control-next {
	height: 44px;
	width: 40px;
	margin: auto 0;
	border-radius: 4px;
	opacity: 0.8;
}
.carousel-control-prev:hover, .carousel-control-next:hover {
  background: #0B0D27;
	opacity: 1;
}
.carousel-control-prev i:hover, .carousel-control-next i:hover {
  color: #fff;
}
.carousel-control-prev i, .carousel-control-next i {
	font-size: 36px;
	position: absolute;
	top: 50%;
	display: inline-block;
	margin: -19px 0 0 0;
	z-index: 5;
	left: 0;
	right: 0;
	color: #000000;
	text-shadow: none;
	font-weight: bold;
}
.carousel-control-prev i {
	margin-left: -2px;
}
.carousel-control-next i {
	margin-right: -4px;
}		

.carousel .wish-icon {
	position: absolute;
	right: 10px;
	top: 10px;
	z-index: 99;
	cursor: pointer;
	font-size: 16px;
	color: #abb0b8;
}
.carousel .wish-icon .fa-heart {
	color: #ff6161;
}
.star-rating li {
	padding: 0;
}
.star-rating i {
	font-size: 14px;
	color: #ffc000;
}
</style>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <section>
  <div class="container-xl">
	<div class="row">
		<div class="col-md-12">
      <h2 class="other__project__title">Dự án khác</h2>
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
			<!-- Wrapper for carousel items -->
			<div class="carousel-inner">
				<div class="item carousel-item active">
					<div class="row">
            <div class="col-sm-4">
              <div class="thumb-wrapper">
                <div class="img-box">
                  <img src="<?php echo get_template_directory_uri()?>/images/project_item1.png" class="img-fluid" alt="">	
                </div>
                <div class="thumb-content">
									<h4>Boxgo Fulfilment</h4>	
                  <p class="sub-title">UI/UX Design</p>
                </div>
              </div>  
            </div>
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<!-- <span class="wish-icon"><i class="fa fa-heart-o"></i></span> -->
								<div class="img-box">
									<img src="<?php echo get_template_directory_uri()?>/images/project_item2.png" class="img-fluid" alt="Headphone">
								</div>
								<div class="thumb-content">
									<h4>AI Plan Chedule</h4>									
									<p class="sub-title">UI/UX Design</p>
								</div>						
							</div>
						</div>		
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="<?php echo get_template_directory_uri()?>/images/project_item3.png" class="img-fluid" alt="Macbook">
								</div>
								<div class="thumb-content">
									<h4>AI Plan Chedule</h4>									
									<p class="sub-title">UI/UX Design</p>
								</div>						
							</div>
						</div>								
					</div>
				</div>
				<div class="item carousel-item">
        <div class="row">
            <div class="col-sm-4">
              <div class="thumb-wrapper">
                <div class="img-box">
                  <img src="<?php echo get_template_directory_uri()?>/images/project_item4.png" class="img-fluid" alt="">	
                </div>
                <div class="thumb-content">
									<h4>AI Plan Chedule</h4>	
                  <p class="sub-title">UI/UX Design</p>
                </div>
              </div>  
            </div>
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<!-- <span class="wish-icon"><i class="fa fa-heart-o"></i></span> -->
								<div class="img-box">
									<img src="<?php echo get_template_directory_uri()?>/images/project_item5.png" class="img-fluid" alt="Headphone">
								</div>
								<div class="thumb-content">
									<h4>AI Plan Chedule</h4>									
									<p class="sub-title">UI/UX Design</p>
								</div>						
							</div>
						</div>		
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="<?php echo get_template_directory_uri()?>/images/project_item6.png" class="img-fluid" alt="Macbook">
								</div>
								<div class="thumb-content">
									<h4>AI Plan Chedule</h4>									
									<p class="sub-title">UI/UX Design</p>
								</div>						
							</div>
						</div>								
					</div>
				</div>
				<div class="item carousel-item">
        <div class="row">
            <div class="col-sm-4">
              <div class="thumb-wrapper">
                <div class="img-box">
                  <img src="<?php echo get_template_directory_uri()?>/images/project_item7.png" class="img-fluid" alt="">	
                </div>
                <div class="thumb-content">
									<h4>AI Plan Chedule</h4>	
                  <p class="sub-title">UI/UX Design</p>
                </div>
              </div>  
            </div>
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<!-- <span class="wish-icon"><i class="fa fa-heart-o"></i></span> -->
								<div class="img-box">
									<img src="<?php echo get_template_directory_uri()?>/images/project_item8.png" class="img-fluid" alt="Headphone">
								</div>
								<div class="thumb-content">
									<h4>AI Plan Chedule</h4>									
									<p class="sub-title">UI/UX Design</p>
								</div>						
							</div>
						</div>		
						<div class="col-sm-4">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="<?php echo get_template_directory_uri()?>/images/project_item2.png" class="img-fluid" alt="Macbook">
								</div>
								<div class="thumb-content">
									<h4>AI Plan Chedule</h4>									
									<p class="sub-title">UI/UX Design</p>
								</div>						
							</div>
						</div>								
					</div>
				</div>
			</div>
			<!-- Carousel controls -->
			<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="carousel-control-next" href="#myCarousel" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>
		</div>
	</div>
</div>
</section>