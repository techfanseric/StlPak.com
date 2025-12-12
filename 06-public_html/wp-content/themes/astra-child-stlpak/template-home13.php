<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: Home 13
?>

<?php echo do_shortcode('[smartslider3 slider="7"]'); ?>
<?php if( get_field('section1') ):?>
<?php while ( have_rows('section1') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('featured_products') ):?>
<div class="hp13Section1 paddBottom20">
	<div class="hp13s1wrapper">
		<div class="container">
			<div class="row paddBottom10">
				<div class="col-sm-12 col-md-6">
					<h2><?php the_sub_field('heading');?></h2>
				</div>
				<?php if(get_sub_field('button_text')):?>
				<div class="col-sm-12 col-md-6 hp13s1Link"><a href="<?php the_sub_field('button_link');?>"><?php the_sub_field('button_text');?></a></div>
				<?php endif; ?>
			</div>
			<div class="row text-center">
				<?php while ( have_rows('featured_products') ) : the_row();?>
				<div class="col-sm-6 col-md-4 paddBottom30">
					<div class="hp13s1Box">
						<?php $hp13s1Img = get_sub_field('image'); ?>
						<div class="hp13s1Img"><a href="<?php the_sub_field('link');?>"><img src="<?php echo $hp13s1Img['url']; ?>" alt="<?php echo $hp13s1Img['alt']; ?>"></a></div>
						<div class="hp13s1Title"><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></div>
						<div class="hp13s1Text"><?php the_sub_field('text');?></div>
					</div>
				</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
</div>
<?php endif;?>
<?php endwhile; ?>
<?php endif;?>
<?php if( get_field('section2') ):?>
<?php while ( have_rows('section2') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('product_category') ):?>
<div class="hp13Section2 paddTop80 paddBottom45">
	<div class="container">
		<div class="row cust-row paddBottom35">
			<div class="col-sm-12 text-center">
				<h2><?php the_sub_field('heading');?></h2>
				<div class="hp13Subheading"><?php the_sub_field('sub_heading');?></div>
			</div>
		</div>
		<div class="row text-center">
			<?php while ( have_rows('product_category') ) : the_row();?>
			<div class="col-xs-6 col-sm-3 hp13Col20">
				<div class="hp13s2Box">
					<?php $hp13s2Img = get_sub_field('image'); ?>
					<div class="hp13s2Img"><a href="<?php the_sub_field('link');?>"><img src="<?php echo $hp13s2Img['url']; ?>" alt="<?php echo $hp13s2Img['alt']; ?>"></a></div>
					<div class="hp13s2Title"><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif;?>
<?php endwhile; ?>
<?php endif;?>
<?php if( get_field('section3')):?>
<div class="hp13Section3 paddTop60 paddBottom60">
	<div class="container">
		<ul class="hp13s3Slider">
			<?php while ( have_rows('section3') ) : the_row();?>
			<li>
				<div class="row">
					<div class="col-sm-8">
						<h2><?php the_sub_field('heading'); ?></h2>
						<div class="hp13s3Text"><?php the_sub_field('text'); ?></div>
					</div>
					<?php if(get_sub_field('button_text')): ?>
					<div class="col-md-4 hp13s3Btn"><a href="<?php the_sub_field('button_link');?>" class="commonBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
					<?php endif; ?>
				</div>
				<div class="row paddTop45">
					<div class="col-md-5 hp13s3List"><?php the_sub_field('list'); ?></div>
					<div class="col-md-7">
						<?php $hp13s3Img = get_sub_field('image'); ?>
						<div class="hp13s3Img"><img src="<?php echo $hp13s3Img['url']; ?>" alt="<?php echo $hp13s3Img['alt']; ?>"></div>
					</div>
				</div>
			</li>
			<?php endwhile; ?>
		</ul>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('section4') ):?>
<?php while ( have_rows('section4') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('products') ):?>
<div class="hp13Section4 paddTop80 paddBottom55">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12">
				<h2><?php the_sub_field('heading');?></h2>
				<div class="clearfix paddBottom20"></div>
				<?php $count = 0; ?>
				<?php while ( have_rows('products') ) : the_row();?>
				<?php $count++; ?>
				<div class="col-sm-6 paddBottom30">
					<div class="hp13s4Box">
						<?php $hp13s4Img = get_sub_field('image'); ?>
						<div class="hp13s4Img"><a href="<?php the_sub_field('link');?>"><img src="<?php echo $hp13s4Img['url']; ?>" alt="<?php echo $hp13s4Img['alt']; ?>"></a></div>
						<div class="hp13s4Title"><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></div>
						<div class="hp13s4Text"><?php the_sub_field('text');?></div>
					</div>
				</div>
				<?php if($count == 2): ?>
					<div class="clearfix"></div>
					<?php $count = 0; ?>
				<?php endif;?>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
</div>
<?php endif;?>
<?php endwhile; ?>
<?php endif;?>
<?php if( get_field('section5') ):?>
<?php while ( have_rows('section5') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('list') ):?>
<div class="hp13Section5 paddTop80 paddBottom55">
	<div class="container">
		<div class="row cust-row rowFlex">
			<div class="col-sm-12 col-md-5">
				<h2><?php the_sub_field('heading');?></h2>
				<div class="hp13s5Text"><?php the_sub_field('text');?></div>
			</div>
			<?php if( get_sub_field('list') ):?>
			<div class="col-sm-12 col-md-7 text-center hp13s5Content">
				<?php while ( have_rows('list') ) : the_row();?>
					<div class="hp13s5Box"><?php the_sub_field('item');?></div>
				<?php endwhile; ?>
				<div class="clearfix"></div>
			</div>
			<?php endif;?>
		</div>
	</div>
</div>
<?php endif;?>
<?php endwhile; ?>
<?php endif;?>
<?php if( get_field('section6') ):?>
<?php while ( have_rows('section6') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('testimonial') ):?>
<div class="hp13Section6 paddTop80 paddBottom20">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 paddBottom20 text-center">
				<h2><?php the_sub_field('heading');?></h2>
			</div>
			<div class="clearfix"></div>
			<?php while ( have_rows('testimonial') ) : the_row();?>
				<?php $hp13s6Img = get_sub_field('image'); ?>
				<div class="col-sm-12 col-md-4 paddBottom30">
					<div class="hp13s6Box">
						<div class="hp13s6Text"><?php the_sub_field('text'); ?></div>
						<div class="clearfix"></div>
						<div class="hp13s6Img"><img src="<?php echo $hp13s6Img['url']; ?>" alt="<?php echo $hp13s6Img['alt']; ?>"></div>
						<div class="hp13s6Content">
							<div class="hp13s6Name"><?php the_sub_field('name'); ?></div>
							<div class="hp13s6Detail"><?php the_sub_field('designation'); ?></div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif;?>
<?php endwhile; ?>
<?php endif;?>
<?php if( get_field('section7')):?>
<?php while ( have_rows('section7') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('text')):?>
<div class="hp13Section7 paddTop50 paddBottom90">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-6 col-lg-6">
				<div class="hp12Form hp13Form">
					<h3 class="text-center paddBottom15">Quick Quote</h3>
					<?php echo do_shortcode('[fluentform id="1"]');?>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-offset-1 col-lg-5 responsiveMargin hp13Section7Content">
				<h2><?php the_sub_field('heading'); ?></h2>
				<div class="hp13s7Text"><?php the_sub_field('text'); ?></div>
				<?php $hp13s7Img = get_sub_field('image'); ?>
				<div class="hp13s7Img"><img src="<?php echo $hp13s7Img['url']; ?>" alt="<?php echo $hp13s7Img['alt']; ?>"></div>

			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>