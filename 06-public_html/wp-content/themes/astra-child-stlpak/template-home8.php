<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: Home 8
?>

<!-- 暂时不显示滑块 -->
<!-- <div style="display: none;"><?php echo do_shortcode('[smartslider3 slider="2"]'); ?></div> -->
<?php if(get_field('section1')):?>
<div class="hp8Section1 paddTop70 paddBottom40 ltBlueSection">
	<div class="container">
		<div class="row cust-row text-center">
			<?php while ( have_rows('section1') ) : the_row();?>
			<?php $hp8s1Icon = get_sub_field('icon');?>
			<div class="col-sm-4 paddBottom30">
				<div class="hp8s1Box">
					<div class="hp8s1Img"><div class="hp8s1Icon"><img src="<?php echo $hp8s1Icon['url']; ?>" alt="<?php echo $hp8s1Icon['alt']; ?>"></div></div>
					<div class="hp8s1Title"><?php the_sub_field('title');?></div>
					<div class="hp8s1Text"><?php the_sub_field('text');?></div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if(get_field('section2')):?>
<?php while ( have_rows('section2') ) : the_row(); ?>
<?php if(get_sub_field('title') || get_sub_field('video_link')):?>
<div class="hp8Section2 paddTop70 paddBottom70" <?php if(get_sub_field('background')):?>style="background-image: url(<?php the_sub_field('background');?>);"<?php endif; ?>>
	<div class="container">
		<div class="row cust-row rowFlex">
			<div class="col-sm-12 col-md-8">
				<h2 class="clrWhite"><?php the_sub_field('title');?></h2>
				<div class="hp8s2Text"><?php the_sub_field('text');?></div>
			</div>
			<div class="col-sm-12 col-md-4 text-center responsiveMargin">
				<div class="hp8s2Video"><a href="<?php the_sub_field('video_link');?>?autoplay=1"><img src="/wp-content/uploads/2020/09/playIcon.png" alt="play icon" ></a></div>
				<div class="paddTop40"><a href="<?php the_sub_field('button_link');?>" class="commonBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if(get_field('section3')):?>
<?php while ( have_rows('section3') ) : the_row(); ?>
<?php if(get_sub_field('image') || get_sub_field('title')):?>
<div class="hp8Section3 paddTop70 paddBottom70 ltBlueSection">
	<div class="container">
		<div class="row cust-row rowFlex">
			<div class="col-sm-12 col-md-6">
				<?php $hp8s3Img = get_sub_field('image');?>
				<div class="hp8s3Img"><img src="<?php echo $hp8s3Img['url']; ?>" alt="<?php echo $hp8s3Img['alt']; ?>"></div>
			</div>
			<div class="col-sm-12 col-md-6 responsiveMargin">
				<h2><?php the_sub_field('title');?></h2>
				<div class="hp8s3Text"><?php the_sub_field('text');?></div>
				<div class="paddTop10"><a href="<?php the_sub_field('button_link');?>" class="commonBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if(get_field('section4')):?>
<?php while ( have_rows('section4') ) : the_row(); ?>
<?php if(get_sub_field('heading') || get_sub_field('services')):?>
<div class="hp8Section4 paddTop70 paddBottom40">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom30">
				<h2><?php the_sub_field('heading');?></h2>
			</div>
			<div class="clearfix"></div>
			<?php $count = 0; ?>
			<?php while ( have_rows('services') ) : the_row();?>
				<?php $count++; ?>
				<?php $hp8s4Icon = get_sub_field('icon');?>
				<div class="col-sm-6 col-md-3 paddBottom30">
					<div class="hp8s4Box">
						<div class="hp8s4Img"><a href="<?php the_sub_field('link');?>"><img src="<?php echo $hp8s4Icon['url']; ?>" alt="<?php echo $hp8s4Icon['alt']; ?>"></a></div>
						<div class="hp8s4Title"><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></div>
						<div class="hp8s4Text"><?php the_sub_field('text');?></div>
					</div>
				</div>
				<?php if($count == 2):?>
					<div class="clearfix visible-sm"></div>
				<?php endif; ?>
				<?php if($count == 4):?>
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
<?php if(get_field('section5')):?>
<?php while ( have_rows('section5') ) : the_row(); ?>
<?php if(get_sub_field('title') || get_sub_field('image')):?>
<div class="hp8Section5 paddTop70 paddBottom70" <?php if(get_sub_field('background')):?>style="background-image: url(<?php the_sub_field('background');?>);"<?php endif; ?>>
	<div class="container">
		<div class="row cust-row rowFlex">
			<div class="col-sm-12 col-md-6">
				<h2 class="clrWhite"><?php the_sub_field('title');?></h2>
				<div class="hp8s5Text"><?php the_sub_field('text');?></div>
				<div class="paddTop20"><a href="<?php the_sub_field('button_link');?>" class="commonBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
			</div>
			<div class="col-sm-12 col-md-6 responsiveMargin">
				<?php $hp8s5Img = get_sub_field('image');?>
				<div class="hp8s5ImgWrapper"><div class="hp8s5Img"><img src="<?php echo $hp8s5Img['url']; ?>" alt="<?php echo $hp8s5Img['alt']; ?>"></div></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if(get_field('section6')):?>
<?php while ( have_rows('section6') ) : the_row(); ?>
<?php if(get_sub_field('heading') || get_sub_field('why_us')):?>
<div class="hp8Section6 paddTop70 paddBottom70">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-4">
				<div class="hp8QuickQuote" <?php if(get_sub_field('quick_quote_bg')):?>style="background-image: url(<?php the_sub_field('quick_quote_bg');?>);"<?php endif; ?>>
					<div class="hp8QuickQuoteTitle"><?php the_sub_field('quick_quote_title');?></div>
					<?php echo do_shortcode('[fluentform id="1"]');?>
				</div>
			</div>
			<div class="col-sm-12 col-md-8 responsiveMargin">
				<h2><?php the_sub_field('heading');?></h2>
				<div class="hp8s6Text"><?php the_sub_field('text');?></div>
				<?php while ( have_rows('why_us') ) : the_row();?>
					<?php $hp8s6Icon = get_sub_field('icon');?>
					<div class="hp8s6Box">
						<div class="hp8s6Icon"><img src="<?php echo $hp8s6Icon['url']; ?>" alt="<?php echo $hp8s6Icon['alt']; ?>"></div>
						<div class="hp8s6Content">
							<div class="hp8s6Title"><?php the_sub_field('title');?></div>
							<div class="hp8s6Text2"><?php the_sub_field('text');?></div>
						</div>
						<div class="clearfix"></div>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if(get_field('section7')):?>
<div class="hp8Section7 paddTop70 paddBottom40 ltBlueSection">
	<div class="container">
		<div class="row cust-row text-center">
			<?php $counter = 0; ?>
			<?php while ( have_rows('section7') ) : the_row();?>
				<?php $counter++; ?>
				<?php $hp8s7Img = get_sub_field('image');?>
				<div class="col-sm-12 col-md-6 paddBottom30">
					<div class="hp8s7Box hp8s7Box<?php echo $counter; ?>">
						<div class="hp8s7ImgWraper"><div class="hp8s7Img"><img src="<?php echo $hp8s7Img['url']; ?>" alt="<?php echo $hp8s7Img['alt']; ?>"></div></div>
						<div class="hp8s7Title"><?php the_sub_field('title');?></div>
						<div class="hp8s7Text"><?php the_sub_field('text');?></div>
						<div class="paddTop20"><a href="<?php the_sub_field('button_link');?>" class="commonBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if(get_field('section9')):?>
<?php while ( have_rows('section9') ) : the_row(); ?>
<?php if(get_sub_field('title') || get_sub_field('list')):?>
<div class="hp8Section9 paddTop70 paddBottom70">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 text-center paddBottom30">
				<h2><?php the_sub_field('title');?></h2>
				<div class="hp8s9Text"><?php the_sub_field('text');?></div>
			</div>
			<?php while ( have_rows('list') ) : the_row();?>
			<div class="col-sm-6 col-md-4">
				<div class="hp8s9List"><?php the_sub_field('item');?></div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if(get_field('section10')):?>
<?php while ( have_rows('section10') ) : the_row(); ?>
<?php if(get_sub_field('heading') || get_sub_field('testimonial')):?>
<div class="hp8Section10 paddTop70 paddBottom35 ltBlueSection">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 text-center paddBottom10">
				<h2><?php the_sub_field('heading');?></h2>
			</div>
			<div class="clearfix"></div>
			<ul class="hp8s10Slider">
			<?php while ( have_rows('testimonial') ) : the_row();?>
				<?php $hp8s10Img = get_sub_field('image');?>
				<li class="slick-slide">
					<div class="hp8s10Box">
						<div class="hp8s10Text"><?php the_sub_field('text');?></div>
						<div class="row margin0 rowFlex">
							<div class="hp8s10Img"><img src="<?php echo $hp8s10Img['url']; ?>" alt="<?php echo $hp8s10Img['alt']; ?>"></div>
							<div class="hp8s10Content">
								<div class="hp8s10Name"><?php the_sub_field('name');?></div>
								<div class="hp8s10Country"><?php the_sub_field('country');?></div>
							</div>
						</div>
					</div>
					
				</li>
			<?php endwhile; ?>
			</ul>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if(get_field('section11')):?>
<?php while ( have_rows('section11') ) : the_row(); ?>
<?php if(get_sub_field('heading') || get_sub_field('resource')):?>
<div class="hp8Section11 paddTop35 paddBottom50 ltBlueSection">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom30">
				<h2><?php the_sub_field('heading');?></h2>
			</div>
			<div class="clearfix"></div>
			<?php while ( have_rows('resource') ) : the_row();?>
				<?php $hp8s11Img = get_sub_field('image');?>
				<div class="col-sm-4 paddBottom30">
					<div class="hp8s11Box">
						<div class="hp8s11Img"><a href="<?php the_sub_field('link');?>"><img src="<?php echo $hp8s11Img['url']; ?>" alt="<?php echo $hp8s11Img['alt']; ?>"></a></div>
						<div class="hp8s11Content">
							<div class="hp8s11Title"><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></div>
							<div class="hp8s11Text"><?php the_sub_field('text');?></div>
							<div class="hp8s11Link"><a href="<?php the_sub_field('link');?>">Read More</a></div>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if(get_field('section12')):?>
<div class="hp8Section12 paddTop35 paddBottom30">
	<div class="container">
		<div class="row cust-row">
			<ul class="hp8s12Brands">
			<?php while ( have_rows('section12') ) : the_row();?>
				<?php $hp8s12Img = get_sub_field('image');?>
				<li><img src="<?php echo $hp8s12Img['url']; ?>" alt="<?php echo $hp8s12Img['alt']; ?>"></li>
			<?php endwhile; ?>
			</ul>
		</div>
	</div>
</div>
<?php endif; ?>

<?php get_footer(); ?>