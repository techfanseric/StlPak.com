<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: About Us 4
?>

<?php if(get_field('banner_image') || get_field('banner_heading')): ?>
<div class="pc3Banner" <?php if(get_field('banner_image')){ ?>style="background-image: url(<?php the_field('banner_image');?>);" <?php  } ?>>
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-7">
				<div class="pc3BannerHeading paddBottom15" style="color:<?php the_field('banner_heading_color');?>"><?php the_field('banner_heading');?></div>
				<div class="pc3BannerDetails <?php if(get_field('banner_black_layer') == "Yes"){echo ' au4BannerLayer';}?>">
					<?php the_field('banner_details');?>
					<div class="paddBottom20"><a href="#contactPopUpForm" class="commonBtn fancybox-inline">Ask For A Quote Now</a></div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if(get_field('page_heading') || get_field('page_description') || get_field('video_image')): ?>
<div class="MTaboutSection1 ltBlueSection paddTop90 paddBottom90">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-6 MTcircleList MTorangeCircleList">
				<h1><?php the_field('page_heading');?></h1>
				<div class="MThomeText paddBottom20"><?php the_field('page_description');?></div>
				<?php the_field('page_details');?>
				<div class="paddTop20"><a href="#contactPopUpForm" class="commonBtn fancybox-inline">Contact Us Now</a></div>
			</div>
			<div class="col-sm-12 col-md-6 responsiveMargin">
				<?php $videoImg = get_field('video_image') ?>
				<?php if(get_field('video_link')):?>
					<div class="videoImg"><a href="<?php the_field('video_link');?>"><img src="<?php echo $videoImg['url']; ?>" alt="<?php echo $videoImg['alt']; ?>"></a></div>
				<?php else: ?>
					<div class="text-center"><img src="<?php echo $videoImg['url']; ?>" alt="<?php echo $videoImg['alt']; ?>"></div>
				<?php endif;?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if(get_field('products_heading') || get_field('products')): ?>
<div class="MTaboutProductSection MTborderSection MTborderBottom paddTop90 paddBottom60">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom40">
				<h2><?php the_field('products_heading');?></h2>
			</div>
			<div class="clearfix"></div>
			<?php $count = 0; ?>
			<?php $countSM = 0; ?>
			<?php while ( have_rows('products') ) : the_row();?>
			<?php $count++; ?>
			<?php $countSM++; ?>
			<div class="col-sm-6 col-md-4 paddBottom30 MTcircleList MTorangeCircleList">
				<div class="MThomeProductBox">
					<?php $productImg = get_sub_field('image') ?>
					<div class="MThomeProductImg"><a href="<?php the_sub_field('link');?>"><img src="<?php echo $productImg['url']; ?>" alt="<?php echo $productImg['alt']; ?>" class="img-responsive"></a></div>
					<div class="MThomeProductTitle text-left"><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></div>
					<div class="MThomeProductText text-left"><?php the_sub_field('text');?></div>
				</div>
			</div>
			<?php if($count == 3):?>
			<div class="clearfix hidden-sm"></div>
			<?php $count = 0; ?>
			<?php endif;?>
			<?php if($countSM == 2):?>
			<div class="clearfix visible-sm"></div>
			<?php $countSM = 0; ?>
			<?php endif;?>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( have_rows('tabs') ):?>
<div class="MTaboutTabSection ltBlueSection paddTop90 paddBottom60">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 text-center paddBottom30">
				<h2><?php the_field('tabs_heading');?></h2>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-12">
				<div class="tabsWrapper">
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
<?php endif; ?>
<?php if( get_field('factory_sliders') ):?>
<div class="MTaboutFactorySliders paddTop90 paddBottom60">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom40">
				<h2><?php the_field('factory_heading');?></h2>
			</div>
			<div class="clearfix"></div>
			<?php while ( have_rows('factory_sliders') ) : the_row();?>
			<div class="col-sm-12 col-md-4 paddBottom30">
				<ul class="MTaboutFactorySlider img1Slider">
					<?php while ( have_rows('slider') ) : the_row();?>
					<li class="slide">
						<?php $slider_image = get_sub_field('image') ?>
						<div class="MTfactorySliderImg"><img src="<?php echo $slider_image['url']; ?>" alt="<?php echo $slider_image['alt']; ?>" class="img-responsive"></div>
						<div class="MTfactorySliderTitle text-left"><?php the_sub_field('title');?></div>
					</li>
					<?php endwhile; ?>
				</ul>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if(get_field('contact_bar_heading')):?>
<div class="about2Section8 blueSection paddTop50 paddBottom50">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12">
				<h2 class="clrWhite"><?php the_field('contact_bar_heading');?></h2>
				<div class="paddTop20"><a href="#contactPopUpForm" class="commonBtn fancybox-inline whiteBtn minwidth245">Get a Quick Quote</a></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>

<?php get_footer(); ?>