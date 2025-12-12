<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: Contact Us 3
?>

<?php if(get_field('banner_image')): ?>
<div class="MTcontactBanner">
	<?php $bannerImg = get_field('banner_image') ?>
	<div><img src="<?php echo $bannerImg['url']; ?>" alt="<?php echo $bannerImg['alt']; ?>" class="img-responsive">		</div>
</div>
<?php endif; ?>
<?php if(get_field('form_heading') || get_field('contact_form') || get_field('contact_detail_heading')): ?>
<div class="MTcontactSection paddTop90 paddBottom90">
	<div class="container">
		<div class="row cust-row">
			<div class="MTaboutContactWrapper">
				<div class="col-sm-12 col-md-8">
					<div class="MTcontactPageForm">
						<div class="MTcontactFormContent paddBottom65">
							<h1><?php the_field('form_heading');?></h1>
							<div class="MTcontactFormText"><?php the_field('form_text');?></div>
						</div>
						<?php the_field('contact_form');?>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-sm-12 col-md-4 responsiveMargin MTcontactDetailSection">
					<div class="MTcontactDetailWrapper">
						<div class="MTcontactDetailContent">
							<div class="MTcontactDetailTitle"><?php the_field('contact_detail_heading');?></div>
							<div class="MTcontactDetailText clrWhite paddTop15"><?php the_field('contact_detail_text');?></div>
						</div>
						<div class="MTcontactDetailSep"></div>
						<div class="MTcontactDetails">
							<ul>
								<?php if(get_field('email')):?><li class="email"><a href="mailto:<?php the_field('email');?>"><?php the_field('email');?></a></li><?php endif; ?>
								<?php if(get_field('phone')):?><li class="location1"><?php the_field('phone');?></li><?php endif; ?>
								<?php if(get_field('whatsapp')):?><li class="whatsapp"><?php the_field('whatsapp');?></li><?php endif; ?>
								<?php if(get_field('address')):?><li class="address"><?php the_field('address');?></li><?php endif; ?>
							</ul>
							<div class="MTcontactQuote text-center"><?php the_field('contact_detail_quote');?></div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>

<?php get_footer(); ?>