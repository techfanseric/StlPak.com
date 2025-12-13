<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: Home 2
?>

<!-- 暂时不显示滑块 -->
<!-- <div style="display: none;"><?php echo do_shortcode('[smartslider3 slider="2"]'); ?></div> -->
<?php if( get_field('certificates') ):?>
<div class="h3CertificateSection">
	<div class="container">
		<div class="row cust-row">
			<div class="h3CertificateWrapper">
				<div class="col-sm-6 paddTop15">
					<div class="h3CertificateTitle clrBlue"><?php the_field('certificates_heading');?></div>
				</div>
				<div class="col-sm-6 h3Certificates">
					<ul>
						<?php while ( have_rows('certificates') ) : the_row();?>
						<?php $certificateImage = get_sub_field('image') ?>
						<li><img src="<?php echo $certificateImage['url']; ?>" alt="<?php echo $certificateImage['alt']; ?>" class="img-responsive"></li>
						<?php endwhile; ?>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( have_rows('slider_1') || get_field('page_heading')):?>
<div class="h3Section1 paddTop70 paddBottom70">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-6 text-center">
				<ul class="h3Slider img1Slider">
					<?php while ( have_rows('slider_1') ) : the_row();?>
						<?php $slider_image = get_sub_field('image') ?>
						<li class="slide"><img src="<?php echo $slider_image['url']; ?>" alt="<?php echo $slider_image['alt']; ?>"></li>
					<?php endwhile; ?>
				</ul>
			</div>
			<div class="col-sm-12 col-md-6 responsiveMargin h3PageDetails">
				<h1><?php the_field('page_heading');?></h1>
				<?php the_field('page_details');?>
				<div class="paddTop15"><a href="#contactPopUpForm" class="commonBtn fancybox-inline minwidth245">Ask For a Quick Quote</a></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('section_2_boxes') || get_field('section_2_heading')):?>
<div class="h3Section2 paddTop70 paddBottom40">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom40">
				<h2><?php the_field('section_2_heading');?></h2>
				<div><?php the_field('section_2_description');?></div>
			</div>
			<div class="clearfix"></div>
			<?php while ( have_rows('section_2_boxes') ) : the_row();?>
				<?php $count++; ?>
				<?php $countSM++; ?>
				<div class="col-sm-6 col-md-4 paddBottom30">
					<div class="h3ProductBox">
						<?php $h3ProductImage = get_sub_field('image') ?>
						<div class="h3ProductImg"><a href="<?php the_sub_field('link');?>"><img src="<?php echo $h3ProductImage['url']; ?>" alt="<?php echo $h3ProductImage['alt']; ?>" class="img-responsive"></a></div>
						<div class="h3ProductTitle text-left"><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></div>
						<div class="h3ProductText text-left"><?php the_sub_field('text');?></div>
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
<?php if( get_field('section_3_heading') || get_field('video_image')):?>
<div class="h3Section3 paddTop60 paddBottom90">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-7">
				<h2><?php the_field('section_3_heading');?></h2>
				<?php the_field('section_3_description');?>
				<div class="text-right"><a href="#contactPopUpForm" class="commonBtn fancybox-inline minwidth245">Contact Test Now</a></div>
			</div>
			<div class="col-sm-12 col-md-5 responsiveMargin">
				<?php $h3VideoBox = get_field('video_image') ?>
				<div class="h3VideoBox"><a href="<?php the_field('video_link');?>?popover=true&autoplay=1"><img src="<?php echo $h3VideoBox['url']; ?>" alt="<?php echo $h3VideoBox['url']; ?>"></a></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('slider_2') || get_field('section_4_heading')):?>
<div class="h3Section4 greySection h3BorderSection">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-6 text-center">
				<ul class="h3Slider img1Slider">
					<?php while ( have_rows('slider_2') ) : the_row();?>
						<?php $slider_image = get_sub_field('image') ?>
						<li class="slide"><img src="<?php echo $slider_image['url']; ?>" alt="<?php echo $slider_image['alt']; ?>"></li>
					<?php endwhile; ?>
				</ul>
			</div>
			<div class="col-sm-12 col-md-6 paddTop65 h3Sec4Content">
				<h2><?php the_field('section_4_heading');?></h2>
				<div class="h3Sec4Subheading clrBlue paddBottom10"><?php the_field('section_4_subheading');?></div>
				<?php the_field('section_4_description');?>
				<div><a href="#contactPopUpForm" class="commonBtn fancybox-inline transparentBtn minwidth245">Send Inquiry Now</a></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('section_5_boxes') || get_field('section_5_heading')):?>
<div class="h3Section5 paddTop70 paddBottom40">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom30">
				<h2><?php the_field('section_5_heading');?></h2>
				<?php the_field('section_5_description');?>
			</div>
			<div class="clearfix"></div>
			<?php while ( have_rows('section_5_boxes') ) : the_row();?>
			<div class="col-sm-6 col-md-3 paddBottom30">
				<div class="h3Section5VideoBox">
					<?php $h3Sec5Img = get_sub_field('image') ?>
					<div class="h3Section5Img"><a href="<?php the_sub_field('link');?>"><img src="<?php echo $h3Sec5Img['url']; ?>" alt="<?php echo $h3Sec5Img['alt']; ?>" class="img-responsive"></a></div>
					<div class="h3Section5Title text-left paddTop35"><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></div>
					<div class="h3Section5Text text-left"><?php the_sub_field('text');?></div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('section_6_boxes') ):?>
<div class="h3Section6 h3BorderSection paddTop90 paddBottom60">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom50">
				<h2><?php the_field('section_6_heading');?></h2>
			</div>
			<div class="clearfix"></div>
			<?php while ( have_rows('section_6_boxes') ) : the_row();?>
			<div class="col-sm-12 col-md-6 paddBottom35">
				<div class="h3FeaturedBox">
					<?php $h3Sec6Img = get_sub_field('image') ?>
					<div class="h3FeaturedImg"><img src="<?php echo $h3Sec6Img['url']; ?>" alt="<?php echo $h3Sec6Img['alt']; ?>" class="img-responsive"></div>
					<div class="h3FeaturedContent text-left">
						<div class="h3FeaturedTitle"><?php the_sub_field('title');?></div>
						<div class="h3FeaturedText"><?php the_sub_field('text');?></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('section_7_heading') || get_field('section_7_description')):?>
<div class="h3Section7 paddTop75 paddBottom80" <?php if(get_field('section_7_bg')){ ?>style="background-image: url(<?php the_field('section_7_bg');?>);" <?php  } ?>>
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12">
				<h2 style="color: <?php the_field('section_7_headin_color');?>;"><?php the_field('section_7_heading');?></h2>
				<div style="color: <?php the_field('section_7_description_color');?>;"><?php the_field('section_7_description');?></div>
				<div class="paddTop10"><a href="#contactPopUpForm" class="commonBtn fancybox-inline minwidth265">Send You Project Details Now</a></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('section_8_heading') || get_field('section_8_video_boxes')):?>
<div class="h3Section8 paddTop70 paddBottom40">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom55">
				<h2><?php the_field('section_8_heading');?></h2>
				<?php the_field('section_8_description');?>
			</div>
			<div class="clearfix"></div>
			<?php while ( have_rows('section_8_video_boxes') ) : the_row();?>
			<div class="col-sm-6 col-md-3 paddBottom30">
				<div class="h3Sec8VideoBox">
					<?php $h3Sec8Img = get_sub_field('video_image') ?>
					<div class="h3Sec8VideoImg"><a href="<?php the_sub_field('video_link');?>?popover=true&autoplay=1"><img src="<?php echo $h3Sec8Img['url']; ?>" alt="<?php echo $h3Sec8Img['alt']; ?>" class="img-responsive"></a></div>
					<div class="h3Sec8VideoTitle text-left paddTop30"><?php the_sub_field('title');?></div>
					<div class="h3Sec8VideoText text-left paddTop15"><?php the_sub_field('text');?></div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('section_9_heading') || get_field('section_9_video_boxes')):?>
<div class="h3Section9 h3BorderSection greySection paddTop90 paddBottom60">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom60">
				<h2><?php the_field('section_9_heading');?></h2>
				<div><?php the_field('section_9_description');?></div>
			</div>
			<div class="clearfix"></div>
			<?php while ( have_rows('section_9_video_boxes') ) : the_row();?>
			<div class="col-sm-12 col-md-6 paddBottom30">
				<div class="h3Sec9VideoBox">
					<?php $h3Sec9Img = get_sub_field('video_image') ?>
					<div class="h3Sec9VideoImg"><a href="<?php the_sub_field('video_link');?>?popover=true&autoplay=1"><img src="<?php echo $h3Sec9Img['url']; ?>" alt="<?php echo $h3Sec9Img['alt']; ?>" class="img-responsive"></a></div>
					<div class="h3Sec9VideoTitle text-left paddTop30 paddBottom10"><?php the_sub_field('title');?></div>
					<div class="h3Sec9VideoText text-left"><?php the_sub_field('text');?></div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('contact_form') || get_field('accordion')):?>
<div class="h3ContactSection paddTop90 paddBottom90">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 paddBottom25">
				<h2><?php the_field('accordion_heading');?></h2>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-12 col-md-8">
				<div class="accordionWraper">
					<?php while ( have_rows('accordion') ) : the_row();?>
					<div class="accordiaBox">
						<div class="accordion"><?php the_sub_field('title');?></div>
						<div class="panel"><?php the_sub_field('text');?></div>
					</div>
					<?php endwhile; ?>
				</div>
			</div>
			<div class="col-sm-12 col-md-4">
				<div class="quickQuote">
					<div class="quickQuoteTitle paddBottom5"><?php the_field('contact_form_heading');?></div>
					<?php the_field('contact_form');?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>

<?php get_footer(); ?>