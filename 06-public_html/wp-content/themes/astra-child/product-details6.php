<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: Product Details 6
?>

<?php if( get_field('banner') ):?>
<?php while ( have_rows('banner') ) : the_row();?>
<?php if( get_sub_field('image') || get_sub_field('heading')):?>
<div class="bannerWraper categoryBanner">
    <?php $bannerImg = get_sub_field('image') ?>
	<div class="bannerImg"><img src="<?php echo $bannerImg['url']; ?>" alt="<?php echo $bannerImg['alt']; ?>" width="<?php echo $bannerImg['width']; ?>" height="<?php echo $bannerImg['height']; ?>"></div>
	<div class="container">
		<div class="row cust-row">
			<div style="background:<?php the_sub_field('overlay');?>" class="bannerContent<?php if(get_sub_field('overlay')){echo ' bannerOverlay';}?> <?php if( get_sub_field('text_alignment') == 'Left' ){echo 'text-left';}else if( get_sub_field('text_alignment') == 'Center' ){echo 'text-center';}else if( get_sub_field('text_alignment') == 'Right' ){echo 'text-right';}?>">
				<div class="bannerHeading" style="color:<?php the_sub_field('heading_color');?>"><?php the_sub_field('heading');?></div>
				<?php if(get_sub_field('button_text')):?>
				<div class="bannerBtn"><a href="#contactPopUpForm" class="commonBtn fancybox-inline"><?php the_sub_field('button_text');?></a></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<div class="container paddTop60 paddBottom60">
	<div class="row product-details-page">
		<?php if(get_field('sidebar_menu') == 1):?>
		<div class="col-sm-12 col-md-3 productMenuSection">
			<div class="productMenu"><?php echo do_shortcode('[ca-sidebar id="2133"]'); ?></div>
		</div>
		<?php endif; ?>
		<div class="col-sm-12 col-md-9 pd6Section1 responsiveMargin">
			<h1><?php the_field('page_heading');?></h1>
			<?php if( have_rows('slider') ):?>
			<div class="pd6s1Slider">
				<ul class="homeSlider img1Slider">
					<?php while ( have_rows('slider') ) : the_row();?>
					<li class="slide">
						<?php $slider_image = get_sub_field('image') ?>
						<img src="<?php echo $slider_image['url']; ?>" alt="<?php echo $slider_image['alt']; ?>">
					</li>
					<?php endwhile; ?>
				</ul>
				<div class="clearfix"></div>
				<a class="pd6s1Btn fancybox-inline" href="#contactPopUpForm">Ask a Quote</a>
			</div>
			<?php endif; ?>
			<?php if(get_field('page_description')): ?>
			<div class="pd6s1Details">
				<div class="pd6s1DetailsTitle">Description</div>
				<div class="pd6s1DetailsBody">
					<?php the_field('page_description'); ?>
				</div>
			</div>
			<?php endif; ?>
			<?php if(get_field('button_text')): ?>
				<div class="text-center paddTop15 paddBottom15"><a class="pd6QuoteBtn fancybox-inline" href="#contactPopUpForm"><?php the_field('button_text'); ?></a></div>
			<?php endif; ?>
			<?php if( get_field('tabs') ):?>
			<div class="pd6s1Details">
				<div class="pd6s1DetailsTitle">More Details</div>
				<div class="pd6s1DetailsBody">
					<div class="pd6s1Tabs">
						<ul class="tabs">
							<?php $j=1;?>
							<?php while ( have_rows('tabs') ) : the_row();?>
							<li class="tab-link <?php if($j == 1){echo 'current';};?>" data-tab="tab-<?php echo $j;?>"><?php the_sub_field('title') ?></li>
							<?php $j++;?>
							<?php endwhile; ?>
						</ul>
						<?php $h=1;?>
						<?php while ( have_rows('tabs') ) : the_row();?>
						<div id="tab-<?php echo $h;?>" class="tab-content <?php if($h == 1){echo 'current';};?>">
							<?php the_sub_field('text') ?>
							<div class="clearfix"></div>
						</div>
						<?php $h++;?>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
			<?php endif; ?>
			<?php $count = 1; ?>
			<?php if( get_field('faqs') ):?>
			<div class="productFAQs paddTop30">
			<?php while ( have_rows('faqs') ) : the_row();?>
			<div class="accordiaBox <?php if($count == 1){echo 'active';}?>">
				<div class="accordion"><?php the_sub_field('title');?></div>
				<div class="panel"><?php the_sub_field('text');?></div>
			</div>
			<?php $count++; ?>
			<?php endwhile; ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>