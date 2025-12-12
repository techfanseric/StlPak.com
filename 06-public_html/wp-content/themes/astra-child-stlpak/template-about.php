<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: About Us
?>

<div class="bannerWraper aboutBanner">
    <?php $bannerImg = get_field('banner_image') ?>
	<div class="bannerImg"><img src="<?php echo $bannerImg['url']; ?>" alt="<?php echo $bannerImg['alt']; ?>" class="img-responive"></div>
	<div class="container">
		<div class="row">
			<div class="bannerContent">
				<h1 class="bannerHeading" style="color:<?php the_field('banner_heading_color');?>"><?php the_field('banner_heading');?></h1>
				<div class="bannerText" style="color:<?php the_field('banner_text_color');?>"><?php the_field('banner_text');?></div>
				<?php if( get_field('banner_button') == 'Yes' ):?>
				<div class="bannerBtn paddTop20"><a href="#contactPopUpForm" class="commonBtn fancybox-inline">Get A Free Quote</a></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<div class="aboutSection2 paddTop90 paddBottom60">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 iconList"><?php the_field('section_2_description');?></div>
		</div>
	</div>
</div>
<?php if( have_rows('product_detail_section') ):?>
<?php while ( have_rows('product_detail_section') ) : the_row();?>
<?php $counter++;?>
<div class="aboutProductDetails paddTop90 paddBottom90 <?php if($counter%2 == 1){echo "greySection";}?>">
	<div class="container">
		<div class="row cust-row rowFlex">
			<div class="col-sm-12 col-md-6">
				<?php if($counter%2 == 1) : ?>
					<ul class="homeSlider img1Slider">
						<?php if( have_rows('slider') ):?>
						<?php while ( have_rows('slider') ) : the_row();?>
							<?php $slider_image = get_sub_field('image') ?>
							<li class="slide"><img src="<?php echo $slider_image['url']; ?>" alt="<?php echo $slider_image['alt']; ?>"></li>
						<?php endwhile; ?>
						<?php endif; ?>
					</ul>
				<?php else : ?>
					<h2><?php the_sub_field('heading');?></h2>
					<div class="aboutProductText"><?php the_sub_field('details');?></div>
					<?php if(get_sub_field('button_text')):?>
						<div class="paddTop10"><a href="<?php the_sub_field('button_link');?>" class="commonBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
					<?php endif;?>
				<?php endif;?>
			</div>
			<div class="col-sm-12 col-md-6 <?php if($counter%2 == 0){echo "responsiveMargin";}?>">
				<?php if($counter%2 == 1) : ?>
					<h2><?php the_sub_field('heading');?></h2>
					<div class="aboutProductText"><?php the_sub_field('details');?></div>
					<?php if(get_sub_field('button_text')):?>
						<div class="paddTop10"><a href="<?php the_sub_field('button_link');?>" class="commonBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
					<?php endif;?>
				<?php else : ?>
					<ul class="homeSlider img1Slider">
						<?php if( have_rows('slider') ):?>
						<?php while ( have_rows('slider') ) : the_row();?>
							<?php $slider_image = get_sub_field('image') ?>
							<li class="slide"><img src="<?php echo $slider_image['url']; ?>" alt="<?php echo $slider_image['alt']; ?>"></li>
						<?php endwhile; ?>
						<?php endif; ?>
					</ul>
				<?php endif;?>
			</div>
		</div>
	</div>
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php if(get_field('contact_form')):?>
<div class="aboutContactSection paddTop90 paddBottom90">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom40">
				<h2><?php the_field('contact_heading');?></h2>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-12">
				<div class="contactForm aboutContactForm"><?php the_field('contact_form');?></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>

<?php get_footer(); ?>