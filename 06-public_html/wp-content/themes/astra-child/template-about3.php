<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: About Us 3
?>

<?php if(get_field('banner_image') || get_field('banner_heading')): ?>
<div class="taBanner pc2Banner">
	<?php $bannerImage = get_field('banner_image') ?>
	<div class="tcBannerImg pc2BannerImg"><img src="<?php echo $bannerImage['url']; ?>" alt="<?php echo $bannerImage['alt']; ?>" class="img-responsive"></div>
	<div class="container">
		<div class="row text-center">
			<div class="taBannerContentWraper pc2BannerContentWraper">
				<div class="taBannerContent <?php if(get_field('banner_black_layer') == 'Yes'){echo 'pc2BannerContent';}?>">
					<div class="taBannerTitle pc2BannerTitle"><?php the_field('banner_heading');?></div>
					<div class="taBannerBtn <?php if(get_field('banner_black_layer') == 'Yes'){echo 'pc2BannerBtn';}else{echo 'paddTop20';}?>"><a href="#contactPopUpForm" class="commonBtn minwidth185 fancybox-inline">Get Support Now</a></div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('slider') || get_field('page_heading') || get_field('page_details')):?>
<div class="taAboutSection1 sectionShadow paddTop90 paddBottom90">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-6 h3PageDetails">
				<h1><?php the_field('page_heading');?></h1>
				<div class="paddTop30"><?php the_field('page_details');?></div>
				<div class="paddTop30"><a href="#contactPopUpForm" class="commonBtn fancybox-inline">Contact Us Now</a></div>
			</div>
			<div class="col-sm-12 col-md-6 responsiveMargin">
				<ul class="h3Slider img1Slider">
					<?php while ( have_rows('slider') ) : the_row();?>
					<?php $slider_image = get_sub_field('image') ?>
					<li class="slide"><img src="<?php echo $slider_image['url']; ?>" alt="<?php echo $slider_image['alt']; ?>"></li>
					<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('section_2_heading') || get_field('section_2_description') || get_field('slider')): ?>
<div class="taAboutSection2 paddTop70 paddBottom40">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12">
				<h2><?php the_field('section_2_heading');?></h2>
				<?php the_field('section_2_description');?>
			</div>
			<div class="clearfix"></div>
			<?php while ( have_rows('product_sliders') ) : the_row();?>
			<div class="col-sm-12 col-md-4 paddBottom30">
				<ul class="taAboutProductSlider img1Slider">
					<?php while ( have_rows('slider') ) : the_row();?>
					<?php $product_slider_image = get_sub_field('image') ?>
					<li class="slide">
						<div class="taAboutSliderImg"><img src="<?php echo $product_slider_image['url']; ?>" alt="<?php echo $product_slider_image['alt']; ?>"></div>
					</li>
					<?php endwhile; ?>
				</ul>
				<div class="taAboutSliderTitle paddBottom15"><?php the_sub_field('title');?></div>
				<div class="taAboutSliderText"><?php the_sub_field('text');?></div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if(get_field('video_image') || get_field('section_3_slider')):?>
<div class="taAboutSection3 paddTop50 paddBottom60">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 text-center paddBottom15">
				<h2><?php the_field('section_3_heading');?></h2>
			</div>
			<div class="col-sm-12 col-md-6">
				<?php $videoImg = get_field('video_image') ?>
				<div class="videoImg"><a href="<?php the_field('video_link');?>?popoverlay=true&autoplay=1"><img src="<?php echo $videoImg['url']; ?>" alt="<?php echo $videoImg['alt']; ?>"></a></div>
				<div class="taAboutVideoTitle paddTop35 paddBottom15"><?php the_field('video_title');?></div>
				<div class="taAboutVideoText"><?php the_field('video_text');?></div>
			</div>
			<div class="col-sm-12 col-md-6 responsiveMargin">
				<ul class="h3Slider img1Slider">
					<?php while ( have_rows('section_3_slider') ) : the_row();?>
					<li class="slide">
						<?php $slider_image = get_sub_field('image') ?>
						<div class="taAboutSec3SliderImg"><img src="<?php echo $slider_image['url']; ?>" alt="<?php echo $slider_image['alt']; ?>" class="img-responsive"></div>
					</li>
					<?php endwhile; ?>
				</ul>
				<div class="taAboutSec3SliderTitle paddTop35 paddBottom15"><?php the_field('section_3_slider_title');?></div>
				<div class="taAboutSec3SliderText"><?php the_field('section_3_slider_text');?></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('client_slider') ):?>
<div class="taAboutClientSection paddTop90 paddBottom90">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom40">
				<h2><?php the_field('client_slider_heading');?></h2>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-12">
				<ul class="img6Slider">
					<?php while ( have_rows('client_slider') ) : the_row();?>
					<li class="slide">
						<?php $slider_image = get_sub_field('image') ?>
						<img src="<?php echo $slider_image['url']; ?>" alt="<?php echo $slider_image['alt']; ?>" class="img-responsive">
					</li>
					<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('team_boxes') ):?>
<div class="taTeamSection blueSection paddTop90 paddBottom60">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom90">
				<h2 class="clrWhite"><?php the_field('team_section_heading');?></h2>
			</div>
			<div class="clearfix"></div>
			<?php while ( have_rows('team_boxes') ) : the_row();?>
			<div class="col-sm-6 col-md-3 paddBottom30">
				<div class="taAboutTeamBox">
					<?php $aboutTeamImg = get_sub_field('image') ?>
					<div class="taAboutTeamImg"><img src="<?php echo $aboutTeamImg['url']; ?>" alt="<?php echo $aboutTeamImg['alt']; ?>" class="img-responsive"></div>
					<div class="taAboutTeamTitle clrWhite paddBottom15"><?php the_sub_field('title');?></div>
					<div class="taAboutTeamText clrWhite"><?php the_sub_field('text');?></div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('timeline_section') ):?>
<div class="taAboutTimelineSection paddTop90 paddBottom90">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 text-center paddBottom40">
				<h2><?php the_field('timeline_heading');?></h2>
			</div>
			<div class="clearfix"></div>
			<?php $counter = 0;?>
			<?php while ( have_rows('timeline_section') ) : the_row();?>
			<?php $counter++;?>
			<?php if($counter%2 != 0) : ?>
			<div class="row">
				<div class="col-sm-6 col-md-6 col-xs-6">
					<div class="taTimelineBox taTimelineBox<?php echo $counter; ?> taTimelineBoxLeft">
						<div class="taTimelineText"><?php the_sub_field('text');?></div>
						<div class="taTimelineYear taTimelineYearLeft"><?php the_sub_field('year');?></div>
					</div>
				</div>
			</div>
			<?php else : ?>
			<div class="row">
				<div class="col-md-offset-6 col-sm-offset-6 col-xs-offset-6 col-sm-6 col-md-6 col-xs-6">
					<div class="taTimelineBox taTimelineBox<?php echo $counter; ?> taTimelineBoxRight">
						<div class="taTimelineText"><?php the_sub_field('text');?></div>
						<div class="taTimelineYear taTimelineYearRight"><?php the_sub_field('year');?></div>
					</div>
				</div>
			</div>
			<?php endif;?>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif;?>
<?php if(get_field('contact_form')): ?>
<div class="pd2ContactSection greySection h3BorderSection paddTop90 paddBottom80">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom40">
				<h2><?php the_field('contact_form_heading');?></h2>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-12">
				<div class="contactForm aboutContactForm"><?php the_field('contact_form');?></div>
			</div>
		</div>
	</div>
</div>
<?php endif;?>

<?php get_footer(); ?>