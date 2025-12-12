<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: Contact Us 2
?>


<?php if(get_field('banner_image') || get_field('banner_heading')): ?>
<div class="tcBanner pc2Banner">
	<?php $bannerImage = get_field('banner_image') ?>
	<div class="tcBannerImg pc2BannerImg"><img src="<?php echo $bannerImage['url']; ?>" alt="<?php echo $bannerImage['alt']; ?>" class="img-responsive"></div>
	<div class="container">
		<div class="row text-center">
			<div class="tcBannerContentWraper pc2BannerContentWraper">
				<div class="tcBannerContent pc2BannerContent">
					<h1 class="tcBannerTitle pc2BannerTitle" style="color:<?php the_field('banner_heading_color');?>"><?php the_field('banner_heading');?></h1>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if(get_field('contact_form_heading') || get_field('contact_form')): ?>
<div class="contactSection h3BorderSection greySection paddTop90 paddBottom90">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 paddBottom20">
				<h2><?php the_field('contact_form_heading');?></h2>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-12 col-md-8">
				<div class="tcContactForm pd2ContactForm"><?php the_field('contact_form');?></div>
			</div>
			<?php if(get_field('contact_details_title') || get_field('contact_details_description')): ?>
			<div class="col-sm-12 col-md-4 responsiveMargin">
				<div class="tcContactDetailWrapper">
					<div class="tcContactDetailContent">
						<div class="tcContactDetailTitle clrWhite paddBottom15"><?php the_field('contact_details_title');?></div>
						<div class="tcContactDetailText clrWhite"><?php the_field('contact_details_description');?></div>
					</div>
					<div class="tcContactDetailSep"></div>
					<div class="tcContactDetails">
						<ul>
							<?php if(get_field('email')): ?><li class="email"><a href="mailto:<?php the_field('email');?>"><?php the_field('email');?></a></li><?php endif; ?>
							<?php if(get_field('whatsapp')): ?><li class="whatsapp"><?php the_field('whatsapp');?></li><?php endif; ?>
							<?php if(get_field('telephone')): ?><li class="phone"><?php the_field('telephone');?></li><?php endif; ?>
							<?php if(get_field('mobile')): ?><li class="mobile"><?php the_field('mobile');?></li><?php endif; ?>
							<?php if(get_field('location')): ?><li class="location"><?php the_field('location');?></li><?php endif; ?>
						</ul>
					</div>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php endif; ?>

<?php get_footer(); ?>