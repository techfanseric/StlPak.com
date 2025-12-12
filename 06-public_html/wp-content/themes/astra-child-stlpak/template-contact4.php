<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: Contact Us 4
?>

<?php if(get_field('banner_heading') || get_field('banner_text')): ?>
<div class="cu4banner paddTop90 greySection">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12">
				<h1 class="cu4BannerHeading"><?php the_field('banner_heading');?></h1>
				<div class="cu4BannerDetails"><?php the_field('banner_text');?></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if(get_field('form_heading') || get_field('contact_form') || get_field('contact_details')): ?>
<div class="cu4Section1 paddBottom90">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12">
				<div class="cu4contactWrapper">
					<div class="fsContactForm contactFormBtn cu4contactForm">
						<div class="cu4formTitle"><?php the_field('form_heading');?></div>
						<?php the_field('contact_form');?>
					</div>
					<div class="cu4contactDetails">
						<?php if( get_field('contact_details') ):?>
						<div class="cu4contactDetailHeading clrWhite"><?php the_field('contact_details_heading');?></div>
						<ul>
							<?php while ( have_rows('contact_details') ) : the_row();?>
							<?php $counter++;?>
							<li class="cu4contactDetail cu4contactDetail<?php echo $counter;?>"><?php the_sub_field('title');?></li>
							<?php endwhile; ?>
						</ul>
						<?php endif; ?>
						<div class="cu4ceoBox">
							<div class="cu4ceoQuote"><?php the_field('ceo_quote');?></div>
							<div class="text-right"><div class="cu4ceoName"><?php the_field('ceo_name');?></div></div>
							<div class="cu4ceoDesignation text-right"><?php the_field('ceo_designation');?></div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>

<?php get_footer(); ?>