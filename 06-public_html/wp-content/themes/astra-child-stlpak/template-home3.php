<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: Home 3
?>

<?php echo do_shortcode('[smartslider3 slider="2"]'); ?>
<?php if( get_field('certificates') || get_field('video_image') || get_field('page_heading')):?>
<div class="MThomeSection1 ltBlueSection paddBottom90">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-6 homeCertificates">
				<?php $videoImg = get_field('video_image') ?>
				<div class="MThomeVideoBox"><a href="<?php the_field('video_link');?>?popover=true&autoplay=1"><img src="<?php echo $videoImg['url'];?>" alt="<?php echo $videoImg['alt'];?>" class="img-responsive"></a></div>
				<div class="MTcertificateWrapper">
					<div class="MTcertificatesTitle paddTop50 paddBottom25"><?php the_field('video_title');?></div>
					<ul>
						<?php while ( have_rows('certificates') ) : the_row();?>
						<?php $certificateImg = get_sub_field('image') ?>
						<li><img src="<?php echo $certificateImg['url']; ?>" alt="<?php echo $certificateImg['alt']; ?>"></li>
						<?php endwhile; ?>
					</ul>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 paddTop50 MTcircleList MTorangeCircleList">
				<h1 class="text-center"><?php the_field('page_heading');?></h1>
				<div class="MTsep text-center paddBottom15"><img src="/wp-content/uploads/2021/02/MTsep.png" class="img-responsive"></div>
				<div class="MThomeText paddBottom30"><?php the_field('page_description');?></div>
				<div class="MThomeDetails"><?php the_field('page_details');?></div>
				<div class="paddTop20"><a href="#contactPopUpForm" class="commonBtn fancybox-inline">Send Quotation</a></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('products') ):?>
<div class="MThomeProductSection paddTop90 paddBottom60">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom30">
				<h2><?php the_field('products_heading');?></h2>
				<div class="MTsep paddBottom15"><img src="/wp-content/uploads/2021/02/MTsep.png" class="img-responsive"></div>
			</div>
			<div class="clearfix"></div>
			<?php $count = 0; ?>
			<?php $countSM = 0; ?>
			<?php while ( have_rows('products') ) : the_row();?>
				<?php $count++; ?>
				<?php $countSM++; ?>
				<div class="col-sm-12 col-md-4 paddBottom30 MTcircleList MTorangeCircleList">
					<div class="MThomeProductBox">
						<?php $productImg = get_sub_field('image') ?>
						<div class="MThomeProductImg"><a href="<?php the_sub_field('link');?>"><img src="<?php echo $productImg['url']; ?>" alt="<?php echo $productImg['alt']; ?>" class="img-responsive"></a></div>
						<div class="MThomeProductTitle text-left"><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></div>
						<div class="MThomeProductText text-left"><?php the_sub_field('text');?></div>
					</div>
				</div>
				<?php if($count == 3):?>
					<div class="clearfix hidden-sm"></div>
					<?php $count = 0; ?>
				<?php endif;?>
				<?php if($countSM == 2):?>
					<div class="clearfix visible-sm"></div>
					<?php $countSM = 0; ?>
				<?php endif;?>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('featured_boxes') ):?>
<div class="MThomeFeaturedProducts ltBlueSection MTborderSection MTborderBottom paddTop90 paddBottom60">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12">
				<h2><?php the_field('featured_products_heading');?></h2>
				<div class="MTsep paddBottom40"><img src="/wp-content/uploads/2021/02/MTsep.png" class="img-responsive"></div>
			</div>
			<div class="clearfix"></div>
			<?php $count = 0; ?>
			<?php while ( have_rows('featured_boxes') ) : the_row();?>
				<?php $count++; ?>
				<div class="col-sm-6 col-md-3 paddBottom30">
					<div class="MTfeaturedProductBox">
						<?php $featuredImg = get_sub_field('image') ?>
						<div class="MTfeaturedProductImg"><img src="<?php echo $featuredImg['url'];?>" alt="<?php echo $featuredImg['alt'];?>" class="img-responsive"></div>
						<div class="MTfeaturedProductTitle text-left paddTop15 paddBottom10"><?php the_sub_field('title');?></div>
						<div class="MTfeaturedProductText text-left"><?php the_sub_field('text');?></div>
					</div>
				</div>
				<?php if($count == 2):?>
					<div class="clearfix visible-sm"></div>
					<?php $count = 0; ?>
				<?php endif;?>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('why_us_heading') || get_field('why_us_boxes') || get_field('why_us_slider')):?>
<div class="MTwhyusSection paddTop85 paddBottom90">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 text-center paddBottom80">
				<div class="MTcheckIcon paddBottom40"><img src="/wp-content/uploads/2021/02/MTverIconbl.png" class="img-responsive"></div>
				<h2><?php the_field('why_us_heading');?></h2>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-12 col-md-7">
				<?php while ( have_rows('why_us_boxes') ) : the_row();?>
				<?php $counter++;?>
				<div class="MTwhyusBox MTwhyusBox<?php echo $counter;?>">
					<div class="MTwhyusTitle"><?php the_sub_field('title');?></div>
					<div class="MTwhyusText"><?php the_sub_field('text');?></div>
				</div>
				<?php endwhile; ?>
				<div class="MTwhyusBtn"><a href="#contactPopUpForm" class="commonBtn fancybox-inline">Know More Service Details Soon</a></div>
			</div>
			<div class="col-sm-12 col-md-5 responsiveMargin">
				<ul class="MTwhyusSlider img1Slider">
					<?php while ( have_rows('why_us_slider') ) : the_row();?>
					<li class="slide">
						<?php $slider_image = get_sub_field('image') ?>
						<img src="<?php echo $slider_image['url']; ?>" alt="<?php echo $slider_image['alt']; ?>">
					</li>
					<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('section_5_slider') ):?>
<div class="MThomeSection5 SliderSection">
	<div class="container-fluid">
		<div class="row cust-row">
			<div class="col-sm-12">
				<ul class="MTDSlider5 img1Slider">
					<?php while ( have_rows('section_5_slider') ) : the_row();?>
					<li class="slide">
						<div class="homeSliderLGwrapper">
							<div class="homeSliderLGTitle"><?php the_sub_field('title');?></div>
							<?php $slider_image = get_sub_field('image') ?>
							<div><img src="<?php echo $slider_image['url']; ?>" alt="<?php echo $slider_image['alt']; ?>" class="img-responsive"></div>
							<div class="MTslider5Btn"><a href="#contactPopUpForm" class="commonBtn fancybox-inline">Check More Installation</a></div>
						</div>
					</li>
					<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('trade_show_slider') ):?>
<div class="MThomeTradeSection ltBlueSection paddTop90 paddBottom85">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12">
				<h2><?php the_field('trade_show_heading');?></h2> 
				<div class="MTsep paddTop20 paddBottom40"><img src="/wp-content/uploads/2021/02/MTsep.png" class="img-responsive"></div>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-12">
				<ul class="img4Slider">
					<?php while ( have_rows('trade_show_slider') ) : the_row();?>
					<li class="slide">
						<div class="MTtradeBox">
							<?php $tradeImg = get_sub_field('image') ?>
							<div class="MTtradeImg"><a href="#"><img src="<?php echo $tradeImg['url'];?>" alt="<?php echo $tradeImg['alt'];?>" class="img-responsive"></a></div>
							<div class="MTtradeTitle text-left"><?php the_sub_field('title');?></div>
							<div class="MTtradeText text-left"><?php the_sub_field('text');?></div>
							<div class="text-left"><a href="#contactPopUpForm" class="commonBtn fancybox-inline">Book a Visit Now</a></div>
						</div>
					</li>
					<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if(get_field('contact_form')):?>
<div class="MThomeContactSection paddTop90 paddBottom80">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12">
				<div class="MTcontactForm MThomeContactForm">
					<div class="MTformContent">
						<h2><?php the_field('contact_form_heading');?></h2>
						<div class="MTformText paddBottom80"><?php the_field('contact_form_text');?></div>
					</div>
					<?php the_field('contact_form');?>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>

<?php get_footer(); ?>