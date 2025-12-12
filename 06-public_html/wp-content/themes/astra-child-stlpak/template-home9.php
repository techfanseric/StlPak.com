<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: Home 9
?>

<?php echo do_shortcode('[smartslider3 slider="2"]'); ?>
<?php if( get_field('section1')):?>
<?php while ( have_rows('section1') ) : the_row();?>
<?php if( get_sub_field('products')):?>
<div class="hp9Section1 paddTop70 paddBottom70">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom30">
				<h1><?php the_sub_field('heading'); ?></h1>
			</div>
			<div class="clearfix"></div>
			<?php $count = 0; ?>
			<?php while ( have_rows('products') ) : the_row();?>
			<?php $count++; ?>
			<?php $hp9s1Img = get_sub_field('image'); ?>
			<div class="col-sm-6 col-md-3 paddBottom30">
				<div class="hp9s1Box">
					<div class="hp9s1Img"><a href="<?php the_sub_field('link'); ?>"><img src="<?php echo $hp9s1Img['url']; ?>" alt="<?php echo $hp9s1Img['alt']; ?>"></a></div>
					<div class="hp9s1Title"><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?></a></div>
					<div class="hp9s1Text"><?php the_sub_field('text'); ?></div>
				</div>
			</div>
			<?php if($count == 2): ?>
				<div class="clearfix visible-sm"></div>
			<?php endif; ?>
			<?php if($count == 4): ?>
				<div class="clearfix"></div>
				<?php $count = 0; ?>
			<?php endif; ?>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section2')):?>
<?php while ( have_rows('section2') ) : the_row();?>
<?php if( get_sub_field('list_item') || get_sub_field('title')):?>
<div class="hp9Section2 paddTop70 paddBottom70" <?php if(get_sub_field('background')):?>style="background-image: url(<?php the_sub_field('background'); ?>);"<?php endif; ?>>
	<div class="container">
		<div class="row cust-row rowFlex">
			<div class="col-md-6 hp9s2List">
				<?php the_sub_field('list_item'); ?>
			</div>
			<div class="col-md-6 hp9s2Content responsiveMargin">
				<h2 class="clrWhite"><?php the_sub_field('title'); ?></h2>
				<?php the_sub_field('text'); ?>
				<div class="paddTop20"><a href="#contactPopUpForm" class="commonBtn fancybox-inline whiteBtn" target="_blank">Send us Your Inquiry</a></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section3')):?>
<?php while ( have_rows('section3') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('image')):?>
<div class="hp9Section3 paddTop70 paddBottom40">
	<div class="container">
		<div class="row cust-row">
			<div class="col-md-6 hp9s3Content">
				<h2><?php the_sub_field('heading'); ?></h2>
				<?php the_sub_field('text'); ?>
				<div class="paddTop10"><a href="#contactPopUpForm" class="commonBtn fancybox-inline">Send us Your Inquiry</a></div>
			</div>
			<div class="col-md-6 responsiveMargin">
				<?php $hp9s3Img = get_sub_field('image'); ?>
				<div class="hp9s3Img"><img src="<?php echo $hp9s3Img['url']; ?>" alt="<?php echo $hp9s3Img['alt']; ?>"></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section4')):?>
<?php while ( have_rows('section4') ) : the_row();?>
<?php if( get_sub_field('slider') || get_sub_field('heading')):?>
<div class="hp9Section4 paddTop40 paddBottom70">
	<div class="container">
		<div class="row cust-row rowFlex">
			<div class="col-md-6">
				<ul class="homeSlider img1Slider">
					<?php while ( have_rows('slider') ) : the_row();?>
						<?php $slider_image = get_sub_field('image') ?>
						<li class="slide"><img src="<?php echo $slider_image['url']; ?>" alt="<?php echo $slider_image['alt']; ?>"></li>
					<?php endwhile; ?>
				</ul>
			</div>
			<div class="col-md-6 hp9s4Content responsiveMargin">
				<h2><?php the_sub_field('heading'); ?></h2>
				<?php the_sub_field('text'); ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section5')):?>
<div class="hp9Section5 paddBottom70">
	<div class="container">
		<div class="row cust-row text-center">
			<?php $counter = 1; ?>
			<?php while ( have_rows('section5') ) : the_row();?>
			<div class="col-sm-4 col20">
				<?php $hp9s5Img = get_sub_field('icon') ?>
				<?php if($counter%2 == 0):?>
				<div class="hp9s5Box hp9s5PaddBottom">
					<div class="hp9s5Title"><?php the_sub_field('title'); ?></div>
					<div class="hp9s5Text"><?php the_sub_field('text'); ?></div>
					<div class="hp9s5Img"><img src="<?php echo $hp9s5Img['url']; ?>" alt="<?php echo $hp9s5Img['alt']; ?>"></div>
				</div>
				<?php else: ?>
				<div class="hp9s5Box hp9s5PaddTop">
					<div class="hp9s5Img"><img src="<?php echo $hp9s5Img['url']; ?>" alt="<?php echo $hp9s5Img['alt']; ?>"></div>
					<div class="hp9s5Title"><?php the_sub_field('title'); ?></div>
					<div class="hp9s5Text"><?php the_sub_field('text'); ?></div>
				</div>
				<?php endif; ?>
			</div>
			<?php $counter++; ?>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('section6')):?>
<?php while ( have_rows('section6') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('featured_points')):?>
<div class="hp9Section6 paddTop80 paddBottom80" <?php if(get_sub_field('background')):?>style="background-image: url(<?php the_sub_field('background'); ?>);"<?php endif; ?>>
	<div class="container">
		<div class="row cust-row rowFlex">
			<div class="col-md-7">
				<h2 class="clrWhite"><?php the_sub_field('heading'); ?></h2>
				<?php the_sub_field('text'); ?>
				<div class="row paddTop20">
					<?php while ( have_rows('featured_points') ) : the_row();?>
					<div class="col-sm-4 paddBottom20">
						<div class="hp9s6Box">
							<div class="hp9s6Title"><?php the_sub_field('title'); ?></div>
							<div class="hp9s6Text"><?php the_sub_field('text'); ?></div>
						</div>
					</div>
					<?php endwhile; ?>
				</div>
				<?php if(get_sub_field('button_text')): ?>
					<div class="paddTop30"><a href="#contactPopUpForm" class="commonBtn fancybox-inline"><?php the_sub_field('button_text'); ?></a></div>
				<?php endif; ?>
			</div>
			<div class="col-md-5 hp9s6VideoWraper responsiveMargin">
				<?php if(get_sub_field('video_link')): ?>
				<div class="hp9s6Video"><a href="<?php the_sub_field('video_link');?>?autoplay=1"><img src="/wp-content/uploads/2020/09/playIcon-1.png" alt="Video"></a></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section7')):?>
<?php while ( have_rows('section7') ) : the_row();?>
<?php if( get_sub_field('products')):?>
<div class="hp9Section7 paddTop70 paddBottom40">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom30">
				<h2 class="margin0"><?php the_sub_field('heading'); ?></h2>
				<div class="hp9s7Text"><?php the_sub_field('text'); ?></div>
			</div>
			<div class="clearfix"></div>
			<?php $count = 0; ?>
			<?php $countSM = 0; ?>
			<?php while ( have_rows('products') ) : the_row();?>
			<?php $count++; ?>
			<?php $countSM++; ?>
			<?php $hp9s7Img = get_sub_field('image'); ?>
			<div class="col-sm-6 col-md-4 paddBottom30">
				<div class="hp9s7Box">
					<div class="hp9s7Img"><a href="<?php the_sub_field('link'); ?>"><img src="<?php echo $hp9s7Img['url']; ?>" alt="<?php echo $hp9s7Img['alt']; ?>"></a></div>
					<div class="hp9s7Title"><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?></a></div>
					<div class="hp9s7Text2"><?php the_sub_field('text'); ?></div>
				</div>
			</div>
			<?php if($countSM == 2): ?>
				<div class="clearfix visible-sm"></div>
				<?php $countSM = 0; ?>
			<?php endif; ?>
			<?php if($count == 3): ?>
				<div class="clearfix hidden-sm"></div>
				<?php $count = 0; ?>
			<?php endif; ?>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section8')):?>
<?php while ( have_rows('section8') ) : the_row();?>
<?php if( get_sub_field('certificate_img') || get_sub_field('slider')):?>
<div class="hp9Section8 paddTop20 paddBottom50">
	<div class="container">
		<div class="row">
			<div class="hp9s8Wraper">
				<div class="row">
					<div class="col-md-5">
						<div class="hp9s8Content">
							<?php $hp9s8Cert = get_sub_field('certificate_img'); ?>
							<div class="hp9s8Cert"><img src="<?php echo $hp9s8Cert['url']; ?>" alt="<?php echo $hp9s8Cert['alt']; ?>"></div>
							<div class="hp9s8Title"><?php the_sub_field('title'); ?></div>
							<div class="row">
								<?php while ( have_rows('certificates') ) : the_row();?>
								<?php $hp9s8Img = get_sub_field('image'); ?>
								<div class="col-xs-3 col-sm-3 paddBottom20">
									<div class="hp9s8Box">
										<div class="hp9s8Img"><img src="<?php echo $hp9s8Img['url']; ?>" alt="<?php echo $hp9s8Img['alt']; ?>"></div>
										<div class="hp9s8Text"><?php the_sub_field('title'); ?></div>
									</div>
								</div>
								<?php endwhile; ?>
							</div>
						</div>
					</div>
					<div class="col-md-7 responsiveMargin">
						<ul class="homeSlider img1Slider">
							<?php while ( have_rows('slider') ) : the_row();?>
								<?php $slider_image = get_sub_field('image') ?>
								<li class="slide"><img src="<?php echo $slider_image['url']; ?>" alt="<?php echo $slider_image['alt']; ?>"></li>
							<?php endwhile; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section9')):?>
<?php while ( have_rows('section9') ) : the_row();?>
<?php if( get_sub_field('testimonials')):?>
<div class="hp9Section9 blueSection paddTop10 paddBottom70">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 text-center paddBottom30">
				<h2 class="clrWhite"><?php the_sub_field('heading'); ?></h2>
			</div>
			<div class="col-sm-12">
				<ul class="hp9Testimonials">
					<?php while ( have_rows('testimonials') ) : the_row();?>
						<?php $hp9s9Img = get_sub_field('image') ?>
						<li class="slide">
							<div class="hp9s9Box">
								<div class="hp9s9Text"><?php the_sub_field('text'); ?></div>
								<div class="hp9s9Img"><img src="<?php echo $hp9s9Img['url']; ?>" alt="<?php echo $hp9s9Img['alt']; ?>"></div>
								<div class="hp9s9Title"><?php the_sub_field('name'); ?></div>
							</div>
						</li>
					<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section10')):?>
<?php while ( have_rows('section10') ) : the_row();?>
<?php if( get_sub_field('products')):?>
<div class="hp9Section10 paddTop70 paddBottom70">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom40">
				<h2 class="margin0"><?php the_sub_field('heading'); ?></h2>
				<div class="hp9s10Text"><?php the_sub_field('text'); ?></div>
			</div>
			<div class="clearfix"></div>
			<?php $count = 0; ?>
			<?php while ( have_rows('products') ) : the_row();?>
			<?php $count++; ?>
			<?php $hp9s7Img = get_sub_field('image'); ?>
			<div class="col-sm-4 paddBottom30">
				<div class="hp9s10Box">
					<div class="hp9s10Img"><a href="<?php the_sub_field('link'); ?>"><img src="<?php echo $hp9s7Img['url']; ?>" alt="<?php echo $hp9s7Img['alt']; ?>"></a></div>
					<div class="hp9s10Title"><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?></a></div>
					<div class="hp9s10Text2"><?php the_sub_field('text'); ?></div>
				</div>
			</div>
			<?php if($count == 3): ?>
				<div class="clearfix"></div>
				<?php $count = 0; ?>
			<?php endif; ?>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section11')):?>
<?php while ( have_rows('section11') ) : the_row();?>
<?php if( get_sub_field('faqs')):?>
<div class="hp9Section11 paddTop70 paddBottom70" <?php if(get_sub_field('background')):?>style="background-image: url(<?php the_sub_field('background'); ?>);"<?php endif; ?>>
	<div class="container">
		<div class="row cust-row hp9FAQs">
			<div class="col-sm-12 paddBottom40 text-center">
				<h2 class="margin0"><?php the_sub_field('heading'); ?></h2>
				<div class="hp9s11Text"><?php the_sub_field('text'); ?></div>
			</div>
			<div class="col-md-6">
				<?php $count = 1; ?>
				<?php $counter = 0; ?>
				<?php $rowCount = ceil(count(get_sub_field('faqs'))/2); ?>
				<?php while ( have_rows('faqs') ) : the_row();?>
				<?php $counter++; ?>
				<div class="accordiaBox <?php if($count == 1){echo 'active';}?>">
					<div class="accordion"><?php the_sub_field('title');?></div>
					<div class="panel"><?php the_sub_field('text');?></div>
				</div>
				<?php if($rowCount == $counter):?>
					</div>
					<div class="col-md-6">
				<?php endif; ?>
				<?php $count++; ?>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section12')):?>
<?php while ( have_rows('section12') ) : the_row();?>
<?php if( get_sub_field('brands')):?>
<div class="hp9Section12 paddTop70 paddBottom70" <?php if(get_sub_field('background')):?>style="background-image: url(<?php the_sub_field('background'); ?>);"<?php endif; ?>>
	<div class="container">
		<div class="row cust-row rowFlex">
			<div class="col-md-3">
				<h2><?php the_sub_field('heading'); ?></h2>
			</div>
			<div class="col-md-9">
				<ul class="hp9Brands">
				<?php while ( have_rows('brands') ) : the_row();?>
					<?php $hp9BrandsImg = get_sub_field('image'); ?>
					<li><img src="<?php echo $hp9BrandsImg['url']; ?>" alt="<?php echo $hp9BrandsImg['alt']; ?>"></li>
				<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section13')):?>
<?php while ( have_rows('section13') ) : the_row();?>
<?php if( get_sub_field('heading')):?>
<div class="hp9Section13 paddTop60 paddBottom60" <?php if(get_sub_field('background')):?>style="background-image: url(<?php the_sub_field('background'); ?>);"<?php endif; ?>>
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 text-center">
				<h2 class="clrWhite"><?php the_sub_field('heading'); ?></h2>
				<div class="paddTop20"><a href="#contactPopUpForm" class="commonBtn fancybox-inline whiteBtn">24 Hours Quote</a></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>