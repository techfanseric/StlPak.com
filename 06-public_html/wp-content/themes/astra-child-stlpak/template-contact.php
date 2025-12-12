<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: Contact Us
?>

<?php if(get_field('banner_image') || get_field('banner_heading')):?>
<div class="bannerWraper contactBanner">
    <?php $bannerImg = get_field('banner_image') ?>
	<div class="bannerImg"><img src="<?php echo $bannerImg['url']; ?>" alt="<?php echo $bannerImg['alt']; ?>" class="img-responive"></div>
	<div class="container">
		<div class="row">
			<div class="bannerContent">
				<div class="bannerHeading" style="color:<?php the_field('banner_heading_color');?>"><?php the_field('banner_heading');?></div>
				<div class="bannerText paddTop20" style="color:<?php the_field('banner_text_color');?>"><?php the_field('banner_text');?></div>
				<?php if( get_field('banner_button') == 'Yes' ):?>
				<div class="bannerBtn paddTop20"><a href="#contactPopUpForm" class="commonBtn fancybox-inline minwidth215">Get A Free Quote</a></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if(get_field('page_heading') || get_field('contact_boxes')):?>
<div class="contactSection1 paddTop90 paddBottom60">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom40">
				<h1><?php the_field('page_heading');?></h1>
			</div>
			<div class="clearfix"></div>
			<?php if( have_rows('contact_boxes') ):?>
			<?php while ( have_rows('contact_boxes') ) : the_row();?>
			<?php $counter++;?>
			<div class="col-sm-12 col-md-4 paddBottom30">
				<div class="contactBox contactBox<?php echo $counter;?>">
					<?php $contactIcon = get_sub_field('icon');?>
					<div class="contactImg"><img src="<?php echo $contactIcon['url']; ?>" alt="<?php echo $contactIcon['alt']; ?>"></div>
					<div class="contactTitle"><?php the_sub_field('title');?></div>
					<div class="contactText"><?php the_sub_field('text');?></div>
				</div>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if(get_field('form_heading') || get_field('contact_form')):?>
<div class="contactPageWraper paddBottom50">
	<div class="contactSection2">
		<div class="container">
			<div class="row cust-row">
				<div class="col-sm-12 col-md-6 cPageformSection">
					<div class="contactForm">
						<h2><?php the_field('form_heading');?></h2>
						<?php the_field('contact_form');?>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 locationSection paddTop45">
					<h2 class="clrBlue"><?php the_field('contact_details_heading');?></h2>
					<div class="locationText"><?php the_field('contact_details');?></div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>

<?php get_footer(); ?>