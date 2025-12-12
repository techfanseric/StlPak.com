<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: Home 6
?>

<?php if(get_field('section1_image') || get_field('section1_heading')): ?>
<?php $hps1Img = get_field('section1_image'); ?>
<div class="hp6Section1 paddBottom70" <?php if($hps1Img): ?>style="background-image: url(<?php echo $hps1Img['url']; ?>);" <?php endif; ?>>
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-8 col-lg-6 hp6Section1Details hp6ListArrow">
				<h1><?php the_field('section1_heading'); ?></h1>
				<?php the_field('section1_text'); ?>
				<div class="paddTop20"><a href="#contactPopUpForm" class="fancybox-inline hp6Btn">Get a Quick Quote</a></div>
				<div class="paddTop20"><a href="#contactPopUpForm" class="fancybox-inline hp6Btn blueBorder">Send Your Request</a></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if(get_field('section2_video_image') || get_field('section2_heading')): ?>
<div class="hp6Section2 paddTop80 paddBottom70">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-6">
				<?php $hp6s1VideoImg = get_field('section2_video_image'); ?>
				<div class="videoImg"><a href="<?php the_field('section2_video_link'); ?>"><img src="<?php echo $hp6s1VideoImg['url']; ?>" alt="<?php echo $hp6s1VideoImg['alt']; ?>"></a></div>
			</div>
			<div class="col-sm-12 col-md-6 hp6Section2Details hp6ListArrow responsiveMargin">
				<h2><?php the_field('section2_heading'); ?></h2>
				<?php the_field('section2_text'); ?>
				<div class="paddTop20"><a href="#contactPopUpForm" class="fancybox-inline hp6Btn blueBorder">Send Us Your Inquiry</a></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('products') ):?>
<div class="hp6Section3 greySection paddTop70 paddBottom40">
	<div class="container">
		<div class="row cust-row text-center">
			<?php $count = 0;?>
			<?php while ( have_rows('products') ) : the_row();?>
				<?php $count++;?>
				<div class="col-sm-12 col-md-4 paddBottom30">
					<div class="hp6s3Product">
						<?php $hps3ProductImg = get_sub_field('image'); ?>
						<div class="hp6s3ProductImg"><a href="<?php the_sub_field('link'); ?>"><img src="<?php echo $hps3ProductImg['url']; ?>" alt="<?php echo $hps3ProductImg['alt']; ?>"></a></div>
						<div class="hp6s3ProductTitle"><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?></a></div>
						<div class="hp6s3ProductText"><?php the_sub_field('text'); ?></div>
						<div class="hp6s3ProductBtn"><a href="<?php the_sub_field('link'); ?>" class="hp6Btn blueBorder" target="_blank">Learn More</a></div>
					</div>
				</div>
				<?php if($count == 3):?>
					<div class="clearfix"></div>
					<?php $count = 0;?>
				<?php endif; ?>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('section4_slider') || get_field('section4_title')):?>
<div class="hp6Section4 paddTop70 paddBottom70">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 hpSection4Wraper">
				<ul class="hp6Slider img1Slider">
					<?php while ( have_rows('section4_slider') ) : the_row();?>
						<?php $hps4Slide = get_sub_field('image'); ?>
						<li class="slide"><img src="<?php echo $hps4Slide['url']; ?>" alt="<?php echo $hps4Slide['alt']; ?>"></li>
					<?php endwhile; ?>
				</ul>
				<div class="hp6Section4Content responsiveMargin">
					<div class="title"><?php the_field('section4_title'); ?></div>
					<?php the_field('section4_text'); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('section5') ):?>
<div class="hp6Section5 paddTop20 paddBottom50">
	<div class="container">
		<div class="row cust-row text-center">
			<?php while ( have_rows('section5') ) : the_row();?>
			<div class="col-sm-6 paddBottom30">
				<div class="hp6s5FeaturedBox">
					<?php $hps5FeaturedImg = get_sub_field('image'); ?>
					<div class="hp6s5ProductImg"><img src="<?php echo $hps5FeaturedImg['url']; ?>" alt="<?php echo $hps5FeaturedImg['alt']; ?>"></div>
					<div class="hp6s5ProductTitle"><?php the_sub_field('title'); ?></div>
					<div class="hp6s5ProductHeading"><?php the_sub_field('heading'); ?></div>
					<div class="hp6s5ProductText"><?php the_sub_field('text'); ?></div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('section6_heading') || get_field('section6_text') ):?>
<div class="hp6Section6 blueSection paddTop80 paddBottom70">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-6">
				<h2 class="clrWhite"><?php the_field('section6_heading'); ?></h2>
				<?php if(get_field('section6_button__text')): ?>
				<div class="paddTop10"><a href="<?php the_field('section6_button_link');?>" class="hp6Btn whiteBorder<?php if(get_field('section6_button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_field('section6_button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_field('section6_button__text');?></a></div>
				<?php endif; ?>
			</div>
			<div class="col-sm-12 col-md-6 hp6s6Details responsiveMargin">
				<?php the_field('section6_text'); ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('section7_slider') || get_field('section7_heading') ):?>
<div class="hp6Section7 paddTop70 paddBottom75">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-6">
				<ul class="hp6Slider img1Slider">
					<?php while ( have_rows('section7_slider') ) : the_row();?>
						<?php $hps7Slide = get_sub_field('image'); ?>
						<li class="slide"><img src="<?php echo $hps7Slide['url']; ?>" alt="<?php echo $hps7Slide['alt']; ?>"></li>
					<?php endwhile; ?>
				</ul>
			</div>
			<div class="col-sm-12 col-md-6 hp6s7Details responsiveMargin">
				<h2><?php the_field('section7_heading'); ?></h2>
				<?php the_field('section7_text'); ?>
				<div class="paddTop20"><a href="#contactPopUpForm" class="fancybox-inline hp6Btn blueBorder">Send Us Your Inquiry</a></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('section8_accordion') || have_rows('get_field')):?>
<div class="hp6Section8 paddBottom70">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-6 hp6FaqWraper">
				<h3><?php the_field('section8_heading'); ?></h3>
				<?php while ( have_rows('section8_accordion') ) : the_row();?>
				<div class="accordiaBox">
					<div class="accordion"><?php the_sub_field('title');?></div>
					<div class="panel"><?php the_sub_field('text');?></div>
				</div>
				<?php endwhile; ?>
			</div>
			<div class="col-sm-12 col-md-6 hp6s8Details responsiveMargin">
				<ul class="hp6Slider img1Slider">
					<?php while ( have_rows('section8_slider') ) : the_row();?>
						<?php $hps8Slide = get_sub_field('image'); ?>
						<li class="slide hp6Section8Slide"><img src="<?php echo $hps8Slide['url']; ?>" alt="<?php echo $hps8Slide['alt']; ?>"></li>
					<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('section9_slider') ):?>
<div class="hp6Section9 paddBottom70">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 text-center paddBottom25">
				<h2><?php the_field('section9_heading'); ?></h2>
				<div class="hp6s9Text"><?php the_field('section9_text'); ?></div>
			</div>
			<div class="col-sm-12">
				<ul class="img4Slider">
					<?php while ( have_rows('section9_slider') ) : the_row();?>
						<?php $hps9Slide = get_sub_field('image'); ?>
						<li class="slide hp6s9Slide">
							<div class="hp6s9Img"><img src="<?php echo $hps9Slide['url']; ?>" alt="<?php echo $hps9Slide['alt']; ?>"></div>
							<div class="hp6s9Title"><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></div>
						</li>
					<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('section10_slider') || get_field('section10_list')):?>
<div class="hp6Section10 greySection paddTop70 paddBottom70">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 text-center paddBottom25">
				<h2><?php the_field('section10_heading'); ?></h2>
				<div class="hps10Text"><?php the_field('section10_text'); ?></div>
			</div>
			<div class="col-sm-12 col-md-6">
				<ul class="hp6Slider img1Slider">
					<?php while ( have_rows('section10_slider') ) : the_row();?>
					<?php $hps10Slide = get_sub_field('image'); ?>
					<li class="slide"><img src="<?php echo $hps10Slide['url']; ?>" alt="<?php echo $hps10Slide['alt']; ?>"></li>
					<?php endwhile; ?>
				</ul>
			</div>
			<div class="col-sm-12 col-md-6 responsiveMargin">
				<?php if( get_field('section10_list') ):?>
				<ul class="hp6s10List">
					<?php while ( have_rows('section10_list') ) : the_row();?>
					<li><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></li>
					<?php endwhile; ?>
				</ul>
				<?php endif; ?>
				<?php if(get_field('section10_button_text')):?>
					<div class="clearfix paddTop20"></div>
					<div class="hp6s10Btn text-center"><a href="<?php the_field('section10_button_link');?>"><?php the_field('section10_button_text');?></a></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('section11_box') ):?>
<div class="hp6Section11 paddTop70 paddBottom70">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom25">
				<h2><?php the_field('section11_heading'); ?></h2>
				<div class="hp6s11Text"><?php the_field('section11_text'); ?></div>
			</div>
			<?php $conter = 1; ?>
			<?php while ( have_rows('section11_box') ) : the_row();?>
				<div class="col-md-4 paddBottom30">
					<div class="hp6s11Box hps11Box<?php echo $conter; ?>">
						<?php $hps11Img = get_sub_field('image'); ?>
						<div class="hp6s11mg"><img src="<?php echo $hps11Img['url']; ?>" alt="<?php echo $hps11Img['alt']; ?>"></div>
						<div class="hp6s11ProductTitle"><?php the_sub_field('title'); ?></div>
						<div class="hp6s11ProductText"><?php the_sub_field('text'); ?></div>
					</div>
				</div>
				<?php $conter++; ?>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('section12_image')  || get_field('section12_heading') ):?>
<div class="hp6Section12 darkGreySection paddTop70 paddBottom70">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-6">
				<?php $hps12Img = get_field('section12_image'); ?>
				<div class="hp6s12Img"><a href="<?php the_field('section12_link'); ?>"><img src="<?php echo $hps12Img['url']; ?>" alt="<?php echo $hps12Img['alt']; ?>"></a></div>
			</div>
			<div class="col-sm-12 col-md-6 responsiveMargin">
				<h2><?php the_field('section12_heading'); ?></h2>
				<div class="hp6s12Text"><?php the_field('section12_text'); ?></div>
				<div class="hp6s12Btn"><a href="<?php the_field('section12_link'); ?>" class="hp6Btn blueBorder" target="_blank">Learn More</a></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('section13_title')  || get_field('section13_slider') ):?>
<div class="hp6Section13 paddTop70 paddBottom70">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 text-center paddBottom25">
				<h2><?php the_field('section13_title'); ?></h2>
				<div class="hp6s13Text"><?php the_field('section13_text'); ?></div>
			</div>
			<div class="col-sm-12">
				<div class="clearfix"></div>
				<ul class="img6Slider">
				<?php while ( have_rows('section13_slider') ) : the_row();?>
					<?php $hps13Slide = get_sub_field('image'); ?>
					<li class="slide"><img src="<?php echo $hps13Slide['url']; ?>" alt="<?php echo $hps13Slide['alt']; ?>"></li>
				<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>

<?php get_footer(); ?>