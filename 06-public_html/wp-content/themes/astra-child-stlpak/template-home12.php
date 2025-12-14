<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: Home 12
?>

<?php echo do_shortcode('[smartslider3 slider="9"]'); ?>
<?php if( get_field('section1')):?>
<div class="hp12Section1 paddTop80 paddBottom40 blueSection">
	<div class="container">
		<div class="row cust-row">
			<?php while ( have_rows('section1') ) : the_row();?>
			<?php $hp12s1Img = get_sub_field('image'); ?>
			<div class="col-sm-4 paddBottom30">
				<div class="hp12s1Box">
					<div class="hp12s1Img"><img src="<?php echo $hp12s1Img['url']; ?>" alt="<?php echo $hp12s1Img['alt']; ?>"></div>
					<div class="hp12s1Content">
						<div class="hp12s1Title"><?php the_sub_field('title'); ?></div>
						<div class="hp12s1Text"><?php the_sub_field('text'); ?></div>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('section2')):?>
<?php while ( have_rows('section2') ) : the_row();?>
<?php if( get_sub_field('image') || get_sub_field('heading')):?>
<div class="hp12Section2 paddBottom80">
	<div class="container">
		<div class="row cust-row">
			<?php if(get_sub_field('image')): ?>
			<div class="col-sm-12 paddBottom50">
				<?php $hp12s2Img = get_sub_field('image'); ?>
				<?php $hp12s2Link = get_sub_field('video_link'); ?>
				<?php if($hp12s2Link != ''): ?>
					<div class="hp12s2Img videoImg"><a href="<?php echo $hp12s2Link; ?>"><img src="<?php echo $hp12s2Img['url']; ?>" alt="<?php echo $hp12s2Img['alt']; ?>"></a></div>
				<?php else: ?>
					<div class="hp12s2Img"><img src="<?php echo $hp12s2Img['url']; ?>" alt="<?php echo $hp12s2Img['alt']; ?>"></div>
				<?php endif; ?>
			</div>
			<?php endif; ?>
			<?php if(get_sub_field('heading')): ?>
			<div class="col-sm-12 col-md-8 col-lg-9">
				<h2><?php the_sub_field('heading'); ?></h2>
			</div>
			<?php endif; ?>
			<div class="col-sm-12 col-md-4 col-lg-3">
				<?php if(get_sub_field('button_text')): ?>
				<div class="paddTop20"><a href="<?php the_sub_field('button_link');?>" class="commonBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
				<?php endif; ?>
			</div>
			<?php if(get_sub_field('text')): ?>
			<div class="clearfix"></div>
			<div class="col-sm-12 paddTop10">
				<?php the_sub_field('text'); ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section3')):?>
<?php while ( have_rows('section3') ) : the_row();?>
<?php if( get_sub_field('image') || get_sub_field('heading')):?>
<div class="hp12Section3" <?php if(get_sub_field('background')):?>style="background-image: url(<?php the_sub_field('background'); ?>);"<?php endif; ?>>
	<div class="container">
		<div class="row cust-row">
			<div class="col-lg-offset-6 col-lg-6 hp12s3Content">
				<h2><?php the_sub_field('heading'); ?></h2>
				<?php the_sub_field('text'); ?>
				<?php if(get_sub_field('button_text')): ?>
				<div class="paddTop10"><a href="<?php the_sub_field('button_link');?>" class="commonBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section4')):?>
<?php while ( have_rows('section4') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('products')):?>
<div class="hp12Section4 paddTop90 paddBottom70">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom30">
				<h2><?php the_sub_field('heading'); ?></h2>
			</div>
			<?php $count = 0; ?>
			<?php $countSM = 0; ?>
			<?php while ( have_rows('products') ) : the_row();?>
				<?php $count++; ?>
				<?php $countSM++; ?>
				<?php $productImg = get_sub_field('image'); ?>
				<div class="col-sm-6 col-md-4 paddBottom25">
					<div class="hp12s4Box">
						<?php if(get_sub_field('link')): ?>
							<?php $productLink = get_sub_field('link'); ?>
							<div class="hp12s4Img"><a href="<?php echo $productLink; ?>"><img src="<?php echo $productImg['url']; ?>" alt="<?php echo $productImg['alt']; ?>" width="<?php echo $productImg['width']; ?>" height="<?php echo $productImg['height']; ?>"></a></div>
							<div class="hp12s4Content">
								<div class="hp12s4Title"><a href="<?php echo $productLink; ?>"><?php the_sub_field('title');?></a></div>
								<div class="hp12s4Text"><?php the_sub_field('text');?></div>
							</div>
						<?php else: ?>
							<div class="hp12s4Img"><img src="<?php echo $productImg['url']; ?>" alt="<?php echo $productImg['alt']; ?>" width="<?php echo $productImg['width']; ?>" height="<?php echo $productImg['height']; ?>"></div>
							<div class="hp12s4Content">
								<div class="hp12s4Title"><?php the_sub_field('title');?></div>
								<div class="hp12s4Text"><?php the_sub_field('text');?></div>
							</div>
						<?php endif; ?>
					</div>
				</div>
				<?php if($countSM == 2):?>
					<div class="clearfix visible-sm"></div>
					<?php $countSM = 0; ?>
				<?php endif; ?>
				<?php if($count == 3):?>
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
<?php if( get_field('section5')):?>
<?php while ( have_rows('section5') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('featured_box')):?>
<div class="hp12Section5 paddTop80 paddBottom50" <?php if(get_sub_field('background')):?>style="background-image: url(<?php the_sub_field('background'); ?>);"<?php endif; ?>>
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-lg-7 paddBottom30">
				<h2 class="clrWhite"><?php the_sub_field('heading'); ?></h2>
				<div class="hp12s5Text clrWhite"><?php the_sub_field('text'); ?></div>
			</div>
			<div class="clearfix"></div>
			<?php while ( have_rows('featured_box') ) : the_row();?>
			<?php $hp12s5Img = get_sub_field('image'); ?>
			<div class="col-sm-4 paddBottom30">
				<div class="hp12s5Box">
					<div class="hp12s5Img"><img src="<?php echo $hp12s5Img['url']; ?>" alt="<?php echo $hp12s5Img['alt']; ?>"></div>
					<div class="hp12s5Title"><?php the_sub_field('title'); ?></div>
					<div class="hp12s5Text"><?php the_sub_field('text'); ?></div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section6')):?>
<?php while ( have_rows('section6') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('text')):?>
<div class="hp12Section6 paddTop90 paddBottom60">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-6">
				<div class="hp12Form ">
					<div class="hp12FormTitle">Submit a Quick Quote</div>
					<?php echo do_shortcode('[fluentform id="1"]');?>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 responsiveMargin hp12Section6Content">
				<h2><?php the_sub_field('heading'); ?></h2>
				<div class="hp12s6Text"><?php the_sub_field('text'); ?></div>
				<?php while ( have_rows('featured_box') ) : the_row();?>
					<?php $hp12s6Img = get_sub_field('image'); ?>
					<div class="hp12s6Box">
						<div class="hp12s6Img"><img src="<?php echo $hp12s6Img['url']; ?>" alt="<?php echo $hp12s6Img['alt']; ?>"></div>
						<div class="hp12s6Content">
							<div class="hp12s6Title"><?php the_sub_field('title'); ?></div>
							<div class="hp12s6Text"><?php the_sub_field('text'); ?></div>
						</div>
					</div>
					<div class="clearfix"></div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section7')):?>
<div class="hp12Section7 paddTop30 paddBottom70">
	<div class="container">
		<ul class="hp12s7Slider">
			<?php while ( have_rows('section7') ) : the_row();?>
			<li>
				<div class="col-md-6 hp12s7Content">
					<h2><?php the_sub_field('heading'); ?></h2>
					<div class="hp12s7Text"><?php the_sub_field('text'); ?></div>
					<div class="hp12s7List"><?php the_sub_field('list'); ?></div>
				</div>
				<?php $hp12s7Img = get_sub_field('image'); ?>
				<div class="col-md-6">
					<div class="hp12s7Img"><img src="<?php echo $hp12s7Img['url']; ?>" alt="<?php echo $hp12s7Img['alt']; ?>"><?php if(get_sub_field('button_text')): ?><div class="hp12s7Btn"><a href="<?php the_sub_field('button_link');?>" class="commonBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div><?php endif; ?>
					</div>
				</div>
			</li>
			<?php endwhile; ?>
		</ul>
	</div>
</div>
<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section9')):?>
<?php while ( have_rows('section9') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('list')):?>
<div class="hp12Section9 paddTop30 paddBottom70">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 text-center paddBottom20">
				<h2><?php the_sub_field('heading'); ?></h2>
				<?php the_sub_field('text'); ?>
			</div>
			<div class="col-sm-12">
				<ul class="hp12s9List">
					<?php while ( have_rows('list') ) : the_row();?>
					<li><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('list_title'); ?></a></li>
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
<?php if( get_sub_field('heading') || get_sub_field('testimonial')):?>
<div class="hp12Section10 paddTop80 paddBottom80" <?php if(get_sub_field('background_image')):?>style="background-image: url(<?php the_sub_field('background_image'); ?>);"<?php endif; ?>>
	<div class="container container1320">
		<div class="row cust-row">
			<div class="col-sm-12">
				<h2 class="clrWhite"><?php the_sub_field('heading'); ?></h2>
				<div class="clearfix paddTop15"></div>
				<ul class="hp12s10Slider">
					<?php while ( have_rows('testimonial') ) : the_row();?>
					<li>
						<?php $hp12s10Img = get_sub_field('image'); ?>
						<div class="hp12s10Box">
							<div class="hp12s10Text"><?php the_sub_field('text'); ?></div>
							<div class="clearfix"></div>
							<div class="hp12s10Img"><img src="<?php echo $hp12s10Img['url']; ?>" alt="<?php echo $hp12s10Img['alt']; ?>"></div>
							<div class="hp12s10Content">
								<div class="hp12s10Name"><?php the_sub_field('client_name'); ?></div>
								<div class="hp12s10Country"><?php the_sub_field('country'); ?></div>
							</div>
							<div class="clearfix"></div>
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
<?php if( get_field('section11')):?>
<?php while ( have_rows('section11') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('resource')):?>
<div class="hp12Section11 paddTop80 paddBottom80">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12">
				<h2><?php the_sub_field('heading'); ?></h2>
				<div class="clearfix paddTop15"></div>
				<ul class="hp12s11Slider">
					<?php while ( have_rows('resource') ) : the_row();?>
					<li>
						<?php $hp12s11Img = get_sub_field('image'); ?>
						<div class="hp12s11Box">
							<img src="<?php echo $hp12s11Img['url']; ?>" alt="<?php echo $hp12s11Img['alt']; ?>">
							<div class="hp12s11Content">
								<div class="hp12s11Title"><?php the_sub_field('title'); ?></div>
								<div class="hp12s11Text"><?php the_sub_field('text'); ?></div>
								<div class="hp12s11Btn"><a href="<?php the_sub_field('link'); ?>" class="fancybox-inline commonBtn">Readmore</a></div>
							</div>
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
<?php if( get_field('section12')):?>
<div class="hp12Section12 paddTop80 paddBottom80">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12">
				<ul class="hp12s12brands">
					<?php while ( have_rows('section12') ) : the_row();?>
						<?php $hp12s12Img = get_sub_field('image'); ?>
						<li><img src="<?php echo $hp12s12Img['url']; ?>" alt="<?php echo $hp12s12Img['alt']; ?>"></li>
					<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>

<?php get_footer(); ?>