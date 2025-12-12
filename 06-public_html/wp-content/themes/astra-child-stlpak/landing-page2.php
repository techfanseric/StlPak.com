<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: Resource
?>

<div class="LP2Section1 paddTop50 paddBottom40">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 text-center paddBottom20">
				<h1><?php the_field('page_heading');?></h1>
				<?php the_field('page_description');?>
			</div>
			<div class="clearfix"></div>
			<?php if( have_rows('products') ):?>
			<?php while ( have_rows('products') ) : the_row();?>
			<div class="col-sm-12">
				<div class="LP2ProductBox">
					<?php $productImg = get_sub_field('image') ?>
					<div class="LP2ProductImg"><img src="<?php echo $productImg['url']; ?>" alt="<?php echo $productImg['alt']; ?>" width="<?php echo $productImg['width']; ?>" height="<?php echo $productImg['height']; ?>"></div>
					<div class="LP2ProductContent">
						<div class="LP2ProductTitle paddBottom15"><?php the_sub_field('title');?></div>
						<div class="LP2ProductText"><?php the_sub_field('text');?></div>
						<div class="LP2dblBtn"><a href="<?php the_sub_field('button_1_link');?>" target="_blank" class="commonBtn redBtn">Download</a><a href="<?php the_sub_field('button_2_link');?>" target="_blank"  class="commonBtn blueBtn">View Online</a></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>
<div class="LP2Section2 greySection paddTop70 paddBottom30">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom10">
				<h2><?php the_field('featured_products_heading');?></h2>
				<?php the_field('featured_products_description');?>
			</div>
			<div class="clearfix"></div>
			<?php if( have_rows('featured_products') ):?>
			<?php while ( have_rows('featured_products') ) : the_row();?>
			<div class="col-sm-6 col-md-3 paddBottom30">
				<div class="LP2featuredProductBox">
					<div class="LP2featuredProductImg">
						<?php $featuredProductImg = get_sub_field('image') ?>
						<div><img src="<?php echo $featuredProductImg['url']; ?>" alt="<?php echo $featuredProductImg['alt']; ?>" width="<?php echo $featuredProductImg['width']; ?>" height="<?php echo $featuredProductImg['height']; ?>"></div>
						<div class="LP2FeaturedProductExtra">
							<a href="<?php the_sub_field('link');?>">
								<div><img src="/wp-content/uploads/2020/12/resource-cat-pdf.png" alt="pdf"></div>
								<div class="LP2FProductExtraTitle">Download <span>PDF</span></div>
							</a>
						</div>
					</div>
					<div class="LP2FeaturedProductTitle"><?php the_sub_field('title');?></div>
				</div>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>