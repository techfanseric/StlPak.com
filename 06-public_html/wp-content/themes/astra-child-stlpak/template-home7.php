<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: Home 7
?>

<!-- 暂时不显示滑块 -->
<!-- <div style="display: none;"><?php echo do_shortcode('[smartslider3 slider="2"]'); ?></div> -->

<?php if( get_field('section1') ):?>
<?php while ( have_rows('section1') ) : the_row();?>
<?php if(get_sub_field('title')):?>
<div class="hp7Section1 paddTop75 paddBottom75">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12">
				<h1><?php the_sub_field('title');?></h1>
				<div class="hp7s1Text"><?php the_sub_field('text');?></div>
				<div class="doubleBtn paddTop15"><a href="<?php the_sub_field('button1_link');?>" class="commonBtn<?php if(get_sub_field('button1_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button1_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button1_text');?></a><a href="<?php the_sub_field('button2_link');?>" class="commonBtn<?php if(get_sub_field('button2_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button2_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button2_text');?></a></div>
			</div>
		</div>
	</div>
</div>
<div class="clearfix hp7Sep"></div>
<?php endif;?>
<?php endwhile; ?>
<?php endif;?>
<?php if( get_field('section2') ):?>
<?php while ( have_rows('section2') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('video_image') ):?>
<div class="hp7Section2 paddTop75 paddBottom90">
	<div class="container paddBottom30">
		<div class="row cust-row hp7s2Content">
			<div class="col-sm-12 col-md-7">
				<h3><?php the_sub_field('heading');?></h3>
				<div class="hp7s2Text hp7List paddTop20"><?php the_sub_field('text');?></div>
				<div class="paddTop20"><a href="<?php the_sub_field('button_link');?>" class="commonBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
				<?php $hp7s2Video = get_sub_field('video_image') ?>
				<?php $hp7s2VideoLink = get_sub_field('video_link') ?>
				<?php if($hp7s2VideoLink != ''): ?>
				<div class="hp7s2Video videoImg"><a href="<?php echo $hp7s2VideoLink; ?>"><img src="<?php echo $hp7s2Video['url']; ?>" alt="<?php echo $hp7s2Video['alt']; ?>" width="<?php echo $hp7s2Video['width']; ?>" height="<?php echo $hp7s2Video['height']; ?>"></a></div>
				<?php else: ?>
				<div class="hp7s2Video"><img src="<?php echo $hp7s2Video['url']; ?>" alt="<?php echo $hp7s2Video['alt']; ?>" width="<?php echo $hp7s2Video['width']; ?>" height="<?php echo $hp7s2Video['height']; ?>"></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php endif;?>
<?php endwhile; ?>
<?php endif;?>
<?php if( get_field('section3') ):?>
<?php while ( have_rows('section3') ) : the_row();?>
<?php if( get_sub_field('products') ):?>
<div class="hp7Section3 paddTop75 paddBottom45">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom30">
				<h2><?php the_sub_field('heading');?></h3>
			</div>
			<div class="clearfix"></div>
			<?php $count = 0; ?>
			<?php $countSM = 0; ?>
			<?php while ( have_rows('products') ) : the_row();?>
				<?php $count++; ?>
				<?php $countSM++; ?>
				<?php $hp7s3Img = get_sub_field('image'); ?>
				<div class="col-sm-6 col-md-4 paddBottom30">
					<div class="hp7s3Box">
						<div class="hp7s3Img"><a href="<?php the_sub_field('link');?>"><img src="<?php echo $hp7s3Img['url']; ?>" alt="<?php echo $hp7s3Img['alt']; ?>"></a></div>
						<div class="hp7s3Title"><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></div>
						<div class="hp7s3Text"><?php the_sub_field('text');?></div>
						<div class="hp7s3Btn"><a href="<?php the_sub_field('link');?>" class="commonBtn" target="_blank"><?php the_sub_field('button_text');?></a></div>
					</div>
				</div>
				<?php if($countSM == 2): ?>
					<div class="clearfix visible-sm"></div>
					<?php $countSM = 0; ?>
				<?php endif;?>
				<?php if($count == 3): ?>
					<div class="clearfix hidden-sm"></div>
					<?php $count = 0; ?>
				<?php endif;?>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<div class="clearfix hp7Sep"></div>
<?php endif;?>
<?php endwhile; ?>
<?php endif;?>
<?php if( get_field('section4') ):?>
<?php while ( have_rows('section4') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('image') ):?>
<div class="hp7Section4 paddTop75 paddBottom45">
	<div class="container">
		<div class="row cust-row paddBottom40 text-center">
			<div class="col-sm-12">
				<h2><?php the_sub_field('heading');?></h2>
				<div class="hp7s4Text"><?php the_sub_field('text');?></div>
			</div>
		</div>
	</div>
	<?php $hp7s4Video = get_sub_field('image'); ?>
	<?php $hp7s4VideoLink = get_sub_field('video_link') ?>
	<?php if($hp7s4VideoLink != ''): ?>
	<div class="hp7s4Video videoImg"><a href="<?php echo $hp7s4VideoLink; ?>"><img src="<?php echo $hp7s4Video['url']; ?>" alt="<?php echo $hp7s4Video['alt']; ?>" width="<?php echo $hp7s4Video['width']; ?>" height="<?php echo $hp7s4Video['height']; ?>"></a></div>
	<?php else: ?>
	<div class="text-center"><img src="<?php echo $hp7s4Video['url']; ?>" alt="<?php echo $hp7s4Video['alt']; ?>" width="<?php echo $hp7s4Video['width']; ?>" height="<?php echo $hp7s4Video['height']; ?>"></div>
	<?php endif; ?>
</div>
<?php endif;?>
<?php endwhile; ?>
<?php endif;?>
<?php if( get_field('section5') ):?>
<?php while ( have_rows('section5') ) : the_row();?>
<?php if( get_sub_field('title') || get_sub_field('image') ):?>
<div class="hp7Section5 paddTop30 paddBottom75">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-5">
				<?php $hp7s5Img = get_sub_field('image'); ?>
				<div class="hp7s5Img"><img src="<?php echo $hp7s5Img['url']; ?>" alt="<?php echo $hp7s5Img['alt']; ?>"></div>
			</div>
			<div class="col-sm-12 col-md-7 responsiveMargin">
				<h3><?php the_sub_field('title');?></h3>
				<div class="hp7s5Text hp7List"><?php the_sub_field('text');?></div>
				<div class="hp7s5Link paddTop25"><a href="<?php the_sub_field('button_link');?>" class="commonBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
			</div>
		</div>
	</div>
</div>
<?php endif;?>
<?php endwhile; ?>
<?php endif;?>
<?php if( get_field('section6') ):?>
<?php while ( have_rows('section6') ) : the_row();?>
<?php if( get_sub_field('box') ):?>
<div class="hp7Section6 paddTop75 paddBottom45">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom25">
				<h2><?php the_sub_field('heading');?></h3>
				<div class="hp7s6Text"><?php the_sub_field('text');?></div>
			</div>
			<div class="clearfix"></div>
			<?php $count = 0; ?>
			<?php $countSM = 0; ?>
			<?php while ( have_rows('box') ) : the_row();?>
				<?php $count++; ?>
				<?php $countSM++; ?>
				<?php $hp7s6Img = get_sub_field('image'); ?>
				<div class="col-sm-6 col-md-4 paddBottom30">
					<div class="hp7s6Box">
						<div class="hp7s6Img"><a href="<?php the_sub_field('link');?>"><img src="<?php echo $hp7s6Img['url']; ?>" alt="<?php echo $hp7s6Img['alt']; ?>"></a></div>
						<div class="hp7s6Title"><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></div>
						<div class="hp7s6Text"><?php the_sub_field('text');?></div>
					</div>
				</div>
				<?php if($countSM == 2): ?>
					<div class="clearfix visible-sm"></div>
					<?php $countSM = 0; ?>
				<?php endif;?>
				<?php if($count == 3): ?>
					<div class="clearfix hidden-sm"></div>
					<?php $count = 0; ?>
				<?php endif;?>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<div class="clearfix hp7Sep"></div>
<?php endif;?>
<?php endwhile; ?>
<?php endif;?>
<?php if( get_field('section7') ):?>
<div class="hp7Section7 paddTop75 paddBottom45">
	<div class="container">
		<div class="row cust-row text-center">
			<?php while ( have_rows('section7') ) : the_row();?>
				<?php $hp7s7Img = get_sub_field('video_image'); ?>
				<div class="col-sm-12 col-md-6 paddBottom30">
					<div class="hp7s7Box">
						<?php $hp7s7Img = get_sub_field('video_image'); ?>
						<?php $videoLink = get_sub_field('video_link') ?>
						<?php if($videoLink != ''): ?>
							<div class="hp7s7Img videoImg"><a href="<?php echo $videoLink; ?>"><img src="<?php echo $hp7s7Img['url']; ?>" alt="<?php echo $hp7s7Img['alt']; ?>"></a></div>
							<div class="hp7s7Title"><a href="<?php echo $videoLink;?>"><?php the_sub_field('title');?></a></div>
						<?php else: ?>
							<div class="hp7s7Img"><img src="<?php echo $hp7s7Img['url']; ?>" alt="<?php echo $hp7s7Img['alt']; ?>"></div>
							<div class="hp7s7Title"><?php the_sub_field('title');?></div>
						<?php endif; ?>
						<div class="hp7s7Text"><?php the_sub_field('text');?></div>
						<?php if(get_sub_field('button_text')):?>
							<div class="hp7s7Link paddTop20"><a href="<?php the_sub_field('button_link');?>" class="commonBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
						<?php endif;?>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif;?>
<?php if( get_field('section9') ):?>
<?php while ( have_rows('section9') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('image') ):?>
<div class="hp7Section9 paddTop75 paddBottom75">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-7">
				<h3><?php the_sub_field('heading');?></h3>
				<div class="hp7s9Text paddTop15 paddBottom15"><?php the_sub_field('text');?></div>
				<div class="hp7s9Link"><a href="<?php the_sub_field('button_link');?>" class="commonBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
			</div>
			<div class="col-sm-12 col-md-5 responsiveMargin">
				<?php $hp7s9Img = get_sub_field('image'); ?>
				<div class="hp7s9Img"><img src="<?php echo $hp7s9Img['url']; ?>" alt="<?php echo $hp7s9Img['alt']; ?>"></div>
			</div>
		</div>
	</div>
</div>
<div class="clearfix hp7Sep"></div>
<?php endif;?>
<?php endwhile; ?>
<?php endif;?>
<?php if( get_field('section10') ):?>
<?php while ( have_rows('section10') ) : the_row();?>
<?php if( get_sub_field('projects') ):?>
<div class="hp7Section10 paddTop75 paddBottom45">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom30">
				<h2><?php the_sub_field('heading');?></h3>
				<div class="hp7s10Text"><?php the_sub_field('text');?></div>
			</div>
			<div class="clearfix"></div>
			<?php while ( have_rows('projects') ) : the_row();?>
				<?php $hp7s10Img = get_sub_field('image'); ?>
				<div class="col-sm-4 col-md-4 paddBottom30">
					<div class="hp7s10Box">
						<div class="hp7s10Img"><a href="<?php the_sub_field('link');?>"><img src="<?php echo $hp7s10Img['url']; ?>" alt="<?php echo $hp7s10Img['alt']; ?>"></a></div>
						<div class="hp7s10Title paddTop10"><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></div>
						<div class="hp7s10Text"><?php the_sub_field('text');?></div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif;?>
<?php endwhile; ?>
<?php endif;?>
<?php if( get_field('section11') ):?>
<?php while ( have_rows('section11') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('text') ):?>
<div class="hp7Section11 paddTop75 paddBottom70" <?php if(get_sub_field('background')):?>style="background-image: url(<?php the_sub_field('background');?>);" <?php endif;?>>
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-7">
				<h3 class="hp7s11Title"><?php the_sub_field('heading');?></h3>
				<div class="hp7s11Text paddTop15 paddBottom15"><?php the_sub_field('text');?></div>
				<div class="hp7s11Link"><a href="<?php the_sub_field('button_link');?>" class="commonBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
			</div>
		</div>
	</div>
</div>
<?php endif;?>
<?php endwhile; ?>
<?php endif;?>
<?php if( get_field('section12') ):?>
<?php while ( have_rows('section12') ) : the_row();?>
<?php if( get_sub_field('brands') ):?>
<div class="hp7Section10 paddTop75 paddBottom70">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom20">
				<h3><?php the_sub_field('heading');?></h3>
			</div>
			<div class="clearfix"></div>
			<ul class="hp7Brands">
			<?php while ( have_rows('brands') ) : the_row();?>
				<?php $hp7s12Img = get_sub_field('image'); ?>
				<li><img src="<?php echo $hp7s12Img['url']; ?>" alt="<?php echo $hp7s12Img['alt']; ?>"></li>
			<?php endwhile; ?>
			</ul>
		</div>
	</div>
</div>
<?php endif;?>
<?php endwhile; ?>
<?php endif;?>


<?php get_footer(); ?>