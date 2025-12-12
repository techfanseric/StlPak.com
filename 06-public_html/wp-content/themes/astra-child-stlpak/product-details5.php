<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: Product Details 5
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
<?php if( get_field('slider') || get_field('page_heading') || get_field('tabs')):?>
<div class="dp5section1 paddTop80 paddBottom80">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-3 productMenuSection">
				<div class="productMenu"><?php echo do_shortcode('[ca-sidebar id="2133"]'); ?></div>
			</div>
			<div class="col-sm-12 col-md-9 responsiveMargin">
				<div class="row">
					<div class="col-sm-12 col-md-7">
						<div class="pd6liderWraper">
							<ul class="detailProductSlider">
								<?php while ( have_rows('slider') ) : the_row();?>
								<?php $slider_image = get_sub_field('image') ?>
								<li class="slide"><img src="<?php echo $slider_image['url']; ?>" alt="<?php echo $slider_image['alt']; ?>" width="<?php echo $slider_image['width']; ?>" height="<?php echo $slider_image['height']; ?>"></li>
								<?php endwhile; ?>
							</ul>
							<ul class="productSliderPager">
								<?php $i=0;?>
								<?php while ( have_rows('slider') ) : the_row();?>
								<?php $slider_image = get_sub_field('image') ?>
								<li class="slide"><a class="block" data-slide-index="<?php echo $i;?>"><img src="<?php echo $slider_image['url']; ?>" alt="<?php echo $slider_image['alt']; ?>" width="<?php echo $slider_image['width']; ?>" height="<?php echo $slider_image['height']; ?>"></a></li>
								<?php $i++;?>
								<?php endwhile; ?>
							</ul>
						</div>
					</div>
					<div class="col-sm-12 col-md-5 responsiveMargin h5circleList h5blueCircleList">
						<div class="pd4DetailWrapper">
							<div class="pd4DetailHeading">
								<h1><?php the_field('page_heading');?></h1>
							</div>
							<div class="pd4DetailContent">
								<?php the_field('page_text');?>
								<?php the_field('page_details');?>
								<div class="paddTop50"><a href="#contactPopUpForm" class="commonBtn fancybox-inline">Send Your Inquiry Now</a></div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="col-sm-12 paddTop60">
						<div class="h5TabsWrapper">						
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
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('related_products') ):?>
<div class="dp4relatedHeading h5productHeading text-center paddTop85 paddBottom65"><h2><?php the_field('related_products_heading');?></h2></div>
<div class="dp4relatedSection paddTop60 paddBottom70">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12">
				<ul class="img3Slider">
					<?php if( have_rows('related_products') ):?>
					<?php while ( have_rows('related_products') ) : the_row();?>
					<li class="slide">
						<div class="dp4relatedProduct">
							<?php $slider_image = get_sub_field('image') ?>
							<div class="dp4relatedProductImg"><img src="<?php echo $slider_image['url']; ?>" alt="<?php echo $slider_image['alt']; ?>" width="<?php echo $slider_image['width']; ?>" height="<?php echo $slider_image['height']; ?>"></div>
							<div class="dp4relatedProductTitle paddTop10"><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></div>
						</div>
					</li>
					<?php endwhile; ?>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if(get_field('article') || get_field('faqs')):?>
<div class="articleSection greySection paddTop90 paddBottom90">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-8 h5circleList h5blueCircleList productFAQs">
				<?php the_field('article');?>
				<div class="clearfix paddTop20"></div>
				<?php $count = 1; ?>
				<?php if( get_field('faqs') ):?>
				<?php while ( have_rows('faqs') ) : the_row();?>
				<div class="accordiaBox <?php if($count == 1){echo 'active';}?>">
					<div class="accordion"><?php the_sub_field('title');?></div>
					<div class="panel"><?php the_sub_field('text');?></div>
				</div>
				<?php $count++; ?>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="col-sm-12 col-md-4 responsiveMargin">
				<div class="quickQuote divScroll">
					<div class="quickQuoteTitle paddBottom5"><?php the_field('contact_form_heading');?></div>
					<?php the_field('contact_form');?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>


<?php get_footer(); ?>