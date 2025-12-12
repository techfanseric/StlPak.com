<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: Cases
?>

<?php if(get_field('banner_image') || get_field('banner_heading')):?>
<div class="lp4Banner pc2Banner">
	<?php $bannerImage = get_field('banner_image') ?>
	<div class="lp4BannerImg pc2BannerImg"><img src="<?php echo $bannerImage['url']; ?>" alt="<?php echo $bannerImage['alt']; ?>" width="<?php echo $bannerImage['width']; ?>" height="<?php echo $bannerImage['height']; ?>"></div>
	<div class="container">
		<div class="row text-center">
			<div class="lp4BannreContentWraper pc2BannerContentWraper">
				<div class="lp4BannerContent pc2BannerContent">
					<div class="lp4BannerTitle pc2BannerTitle" style="color:<?php the_field('banner_heading_color');?>"><?php the_field('banner_heading');?></div>
					<?php if( get_field('banner_button') == 'Yes' ):?>
					<div class="lp4BannerBtn pc2BannerBtn"><a href="#contactPopUpForm" class="commonBtn minwidth185 fancybox-inline">Learn More</a></div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if(get_field('section_1_heading') || get_field('section_1_heading') || get_field('section_1_products')):?>
<div class="lp4Section1 sectionShadow paddTop90 paddBottom60">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom40">
				<h1><?php the_field('section_1_heading');?></h1>
				<?php the_field('section_1_heading');?>
			</div>
			<div class="clearfix"></div>
			<?php if( have_rows('section_1_products') ):?>
			<?php while ( have_rows('section_1_products') ) : the_row();?>
			<div class="col-sm-6 col-md-3 paddBottom30">
				<div class="lp4ProductBox">
					<?php $productImg = get_sub_field('image') ?>
					<div class="lp4ProductImg"><a href="<?php the_sub_field('link');?>"><img src="<?php echo $productImg['url']; ?>" alt="<?php echo $productImg['alt']; ?>" width="<?php echo $productImg['width']; ?>" height="<?php echo $productImg['height']; ?>"></a></div>
					<div class="lp4ProductContent text-left">
						<div class="lp4ProductTitle paddTop35 paddBottom10"><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></div>
						<div class="lp4ProductText paddBottom30"><?php the_sub_field('text');?></div>
						<div class="lp4ProductBtn"><a href="#contactPopUpForm" class="commonBtn transparentBtn minwidth185 fancybox-inline">Inquiry Now</a></div>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if(get_field('section_2_heading') || get_field('section_2_description') || get_field('section_2_products')):?>
<div class="lp4Section2 paddTop90 paddBottom60">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom40">
				<h2><?php the_field('section_2_heading');?></h2>
				<?php the_field('section_2_description');?>
			</div>
			<div class="clearfix"></div>
			<?php if( have_rows('section_2_products') ):?>
			<?php while ( have_rows('section_2_products') ) : the_row();?>
			<div class="col-sm-6 col-md-3 paddBottom30">
				<div class="lp4ProductBox">
					<?php $product2Img = get_sub_field('image') ?>
					<div class="lp4ProductImg"><a href="<?php the_sub_field('link');?>"><img src="<?php echo $product2Img['url']; ?>" alt="<?php echo $product2Img['alt']; ?>" width="<?php echo $product2Img['width']; ?>" height="<?php echo $product2Img['height']; ?>"></a></div>
					<div class="lp4ProductContent text-left">
						<div class="lp4ProductTitle paddTop35 paddBottom10"><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></div>
						<div class="lp4ProductText paddBottom30"><?php the_sub_field('text');?></div>
						<div class="lp4ProductBtn"><a href="#contactPopUpForm" class="commonBtn transparentBtn minwidth185 fancybox-inline">Inquiry Now</a></div>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if(get_field('featured_points_heading') || get_field('featured_boxes')):?>
<div class="lp4FeaturedSection h3BorderSection greySection paddTop90 paddBottom90">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom30">
				<h2><?php the_field('featured_points_heading');?></h2>
			</div>
			<div class="clearfix"></div>
			<?php if( have_rows('featured_boxes') ):?>
			<?php while ( have_rows('featured_boxes') ) : the_row();?>
			<div class="col-sm-6 col-md-3 paddBottom30">
				<div class="lp4FeaturedBox">
					<?php $featuredImg = get_sub_field('image') ?>
					<div class="lp4FeaturedImg"><img src="<?php echo $featuredImg['url']; ?>" alt="<?php echo $featuredImg['alt']; ?>" width="<?php echo $featuredImg['width']; ?>" height="<?php echo $featuredImg['height']; ?>"></div>
					<div class="lp4FeaturedTitle paddTop25 paddBottom15"><?php the_sub_field('title');?></div>
					<div class="lp4FeaturedText"><?php the_sub_field('text');?></div>
				</div>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
			<div class="clearfix"></div>
			<div class="col-sm-12 paddTop30">
				<div><a href="#contactPopUpForm" class="commonBtn fancybox-inline">Start Your Business Now</a></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if(get_field('video_image') || get_field('video_heading')):?>
<div class="lp4VideoSection paddTop90 paddBottom90">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-6">
				<?php $videoImg = get_field('video_image') ?>
				<div class="videoImg"><a href="<?php the_field('video_link');?>?popoverlay=true&autoplay=1"><img src="<?php echo $videoImg['url']; ?>" alt="<?php echo $videoImg['alt']; ?>" width="<?php echo $videoImg['width']; ?>" height="<?php echo $videoImg['height']; ?>"></a></div>
			</div>
			<div class="col-sm-12 col-md-6 responsiveMargin lp4VideoSectionDetails h3PageDetails">
				<h2><?php the_field('video_heading');?></h2>
				<?php the_field('video_details');?>
				<div class="paddTop20"><a href="#contactPopUpForm" class="commonBtn fancybox-inline">Send Your Inquiry Now</a></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if(get_field('slider_section_heading') || get_field('slider')):?>
<div class="lp4SliderSection sectionShadow paddTop90 paddBottom90">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom40">
				<h2><?php the_field('slider_section_heading');?></h2>
				<?php the_field('slider_section_details');?>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-12">
				<ul class="img3Slider">
					<?php while ( have_rows('slider') ) : the_row();?>
					<li class="slide">
						<?php $slider_image = get_sub_field('image') ?>
						<div class="lp4SliderImg"><a href="<?php the_sub_field('link');?>"><img src="<?php echo $slider_image['url']; ?>" alt="<?php echo $slider_image['alt']; ?>" width="<?php echo $slider_image['width']; ?>" height="<?php echo $slider_image['height']; ?>"></a></div>
						<div class="lp4SliderTitle paddTop10"><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></div>
					</li>
					<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if(get_field('article')):?>
<div class="articleSection pc2ArticleSection paddTop90 paddBottom90">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-8">
				<?php the_field('article');?>
			</div>
			<div class="col-sm-12 col-md-4">
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