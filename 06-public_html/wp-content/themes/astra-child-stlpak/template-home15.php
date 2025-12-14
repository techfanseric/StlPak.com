<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: Home 15
?>

<?php echo do_shortcode('[smartslider3 slider="5"]'); ?>
<?php if( get_field('section1')):?>
<?php while ( have_rows('section1') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('text')):?>
<div class="hp15Section1">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 paddBottom10">
				<h2><?php the_sub_field('heading'); ?></h2>
			</div>
			<div class="col-sm-12 col-md-8">
				<?php $hp15s1Img = get_sub_field('image'); ?>
				<div class="hp15s1Img"><img src="<?php echo $hp15s1Img['url']; ?>" alt="<?php echo $hp15s1Img['alt']; ?>"><div class="hp15s1Btn"><a href="<?php the_sub_field('button_link');?>" class="commonBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div></div>
			</div>
			<div class="col-sm-12 col-md-4">
				<div class="hp15s1Text"><?php the_sub_field('text'); ?></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section2')):?>
<div class="hp15Section2">
	<div class="container">
		<div class="row cust-row text-center">
			<?php while ( have_rows('section2') ) : the_row();?>
			<div class="col-sm-4 col-md-3 hp15Col20 paddBottom30">
				<div class="hp15s2Box">
					<div class="hp15s2Title"><?php the_sub_field('title'); ?></div>
					<div class="hp15s2Text"><?php the_sub_field('text'); ?></div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('section3')):?>
<?php while ( have_rows('section3') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('products')):?>
<div class="hp15Section3">
	<div class="container">
		<div class="row cust-row paddBottom30">
			<div class="col-sm-12">
				<h2 class="hp15Heading hp15s3Heading"><?php the_sub_field('heading'); ?></h2>
				<div class="hp15s3Text"><?php the_sub_field('sub_heading'); ?></div>
			</div>
		</div>
		<div class="row cust-row text-center">
			<?php $count = 0; ?>
			<?php $countSM = 0; ?>
			<?php while ( have_rows('products') ) : the_row();?>
				<?php $count++; ?>
				<?php $countSM++; ?>
				<div class="col-sm-6 col-md-4 paddBottom30">
					<div class="hp15s3Box">
						<?php $hp15s3Img = get_sub_field('image'); ?>
						<?php $hp15s3Link = get_sub_field('link'); ?>
						<?php if($hp15s3Link != ''): ?>
							<div class="hp15s3Img"><a href="<?php echo $hp15s3Link; ?>"><img src="<?php echo $hp15s3Img['url']; ?>" alt="<?php echo $hp15s3Img['alt']; ?>"></a></div>
							<div class="hp15s3Title"><a href="<?php echo $hp15s3Link; ?>"><?php the_sub_field('title'); ?></a></div>
						<?php else: ?>
							<div class="hp15s3Img"><img src="<?php echo $hp15s3Img['url']; ?>" alt="<?php echo $hp15s3Img['alt']; ?>"></div>
							<div class="hp15s3Title"><?php the_sub_field('title'); ?></div>
						<?php endif; ?>
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
<?php if( get_field('section4')):?>
<?php while ( have_rows('section4') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('products')):?>
<div class="hp15Section4">
	<div class="container">
		<div class="row cust-row paddBottom40">
			<div class="col-sm-12 col-md-7">
				<h2 class="hp15Heading hp15s4Heading clrWhite"><?php the_sub_field('heading'); ?></h2>
				<div class="hp15s4Text clrWhite"><?php the_sub_field('sub_heading'); ?></div>
			</div>
		</div>
		<div class="row cust-row">
			<?php $count = 0; ?>
			<?php while ( have_rows('products') ) : the_row();?>
				<?php $count++; ?>
				<div class="col-sm-6 paddBottom30">
					<div class="hp15s4Box">
						<?php $hp15s4Img = get_sub_field('image'); ?>
						<?php $hp15s4Link = get_sub_field('link'); ?>
						<?php if($hp15s4Link != ''): ?>
							<div class="hp15s4Img"><a href="<?php echo $hp15s4Link; ?>"><img src="<?php echo $hp15s4Img['url']; ?>" alt="<?php echo $hp15s4Img['alt']; ?>"></a></div>
							<div class="hp15s4Content">
								<div class="hp15s4Title"><a href="<?php echo $hp15s4Link; ?>"><?php the_sub_field('title'); ?></a></div>
								<div class="hp15s4Text"><?php the_sub_field('text'); ?></div>
							</div>
						<?php else: ?>
							<div class="hp15s4Img"><img src="<?php echo $hp15s4Img['url']; ?>" alt="<?php echo $hp15s4Img['alt']; ?>"></div>
							<div class="hp15s4Content">
								<div class="hp15s4Title"><?php the_sub_field('title'); ?></div>
								<div class="hp15s4Text"><?php the_sub_field('text'); ?></div>
							</div>
						<?php endif; ?>
					</div>
				</div>
				<?php if($count == 2): ?>
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
<?php if( get_field('section5') ):?>
<?php while ( have_rows('section5') ) : the_row();?>
<?php if( get_sub_field('background') || get_sub_field('heading')):?>
<div class="hp15Section5" <?php if(get_sub_field('background')):?>style="background-image: url(<?php the_sub_field('background'); ?>);"<?php endif; ?>>
	<div class="container">
		<div class="row cust-row">
			<h2 class="hp15s5Heading"><?php the_sub_field('heading');?></h2>
			<div class="hp15s5Text"><?php the_sub_field('sub_heading');?></div>
			<?php if(get_sub_field('button_text')):?>
				<div class="hp15s5Btn paddTop40"><a href="<?php the_sub_field('button_link');?>" class="commonBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section6')):?>
<?php while ( have_rows('section6') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('certificate')):?>
<div class="hp15Section6">
	<div class="container">
		<div class="row cust-row paddBottom40">
			<div class="col-sm-12 col-lg-10">
				<h2 class="hp15Heading hp15s6Heading"><?php the_sub_field('heading'); ?></h2>
			</div>
			<div class="col-sm-12 col-md-8">
				<div class="hp15s6Text"><?php the_sub_field('sub_heading'); ?></div>
			</div>
			<?php if(get_sub_field('cta_text')): ?>
				<div class="col-sm-12 col-md-4 hp15s6Link"><a href="<?php the_sub_field('cta_link'); ?>"><?php the_sub_field('cta_text'); ?></a></div>
			<?php endif; ?>
		</div>
		<div class="row cust-row text-center">
			<?php $count = 0; ?>
			<?php while ( have_rows('certificate') ) : the_row();?>
				<?php $count++; ?>
				<?php $hp15s6Img = get_sub_field('image'); ?>
				<div class="col-sm-6 col-md-3 paddBottom30">
					<div class="hp15s6Box">
						<div class="hp15s6Img"><img src="<?php echo $hp15s6Img['url']; ?>" alt="<?php echo $hp15s6Img['alt']; ?>"></div>
						<div class="hp15s6Title"><?php the_sub_field('title'); ?></div>
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
<?php if( get_field('section7')):?>
<?php while ( have_rows('section7') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('event')):?>
<div class="hp15Section7">
	<div class="container text-center">
		<div class="row cust-row paddBottom40">
			<div class="col-sm-12">
				<h2 class="hp15Heading hp15s7Heading"><?php the_sub_field('heading'); ?></h2>
				<div class="hp15s7Text"><?php the_sub_field('sub_heading'); ?></div>
			</div>
		</div>
		<div class="row cust-row">
			<?php $count = 0; ?>
			<?php while ( have_rows('event') ) : the_row();?>
				<?php $count++; ?>
				<?php $hp15s7Img = get_sub_field('image'); ?>
				<div class="col-sm-12 col-md-6 paddBottom30">
					<div class="hp15s7Box hp15s7Box<?php echo $count; ?>">
						<div class="hp15s7Img"><img src="<?php echo $hp15s7Img['url']; ?>" alt="<?php echo $hp15s7Img['alt']; ?>"></div>
						<div class="hp15s7Content">
							<div class="hp15s7Title"><?php the_sub_field('title'); ?></div>
							<div class="hp15s7Text"><?php the_sub_field('text'); ?></div>
						</div>
					</div>
				</div>
				<?php if($count == 2): ?>
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
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section9')):?>
<?php while ( have_rows('section9') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('resources')):?>
<div class="hp15Section9">
	<div class="container">
		<div class="row cust-row paddBottom30">
			<div class="col-sm-12 text-center">
				<h2><?php the_sub_field('heading'); ?></h2>
			</div>
		</div>
		<div class="row cust-row">
			<?php if( get_sub_field('image') || get_sub_field('title')):?>
			<div class="col-sm-12 col-md-8">
				<?php $hp15s9Img = get_sub_field('image'); ?>
				<div class="hp15s9Box">
					<div class="hp15s9Img"><a href="<?php the_sub_field('link'); ?>"><img src="<?php echo $hp15s9Img['url']; ?>" alt="<?php echo $hp15s9Img['alt']; ?>"></a></div>
					<div class="hp15s9Content">
						<div class="hp15s9Date"><?php the_sub_field('date'); ?></div>
						<h2 class="hp15s9Title"><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?></a></h2>
						<div class="hp15s9Link"><a href="<?php the_sub_field('link'); ?>">Read More</a></div>
					</div>
				</div>
			</div>
			<?php endif; ?>
			<?php if( get_sub_field('resources')):?>
			<div class="col-sm-12 col-md-4 responsiveMargin">
				<div class="hp15PostWrapper">
				<?php $count = 0; ?>
				<?php while ( have_rows('resources') ) : the_row();?>
					<?php $count++; ?>
					<div class="hp15PostBox hp15PostBox<?php echo $count; ?>">
						<div class="hp15PostDate"><?php the_sub_field('date'); ?></div>
						<div class="hp15PostTitle"><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?></a></div>
						<div class="hp15PostText"><?php the_sub_field('text'); ?></div>
						<div class="hp15PostLink"><a href="<?php the_sub_field('link'); ?>">Read More</a></div>
					</div>
				<?php endwhile; ?>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section10')):?>
<div class="hp15Section10">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 text-center">
				<ul class="hp15brands">
				<?php while ( have_rows('section10') ) : the_row();?>
					<?php $hp15s10Img = get_sub_field('image'); ?>
					<li><img src="<?php echo $hp15s10Img['url']; ?>" alt="<?php echo $hp15s10Img['alt']; ?>"></li>
				<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>

<?php get_footer(); ?>