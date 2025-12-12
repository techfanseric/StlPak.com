<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: Why Us
?>


<?php if( get_field('banner') ):?>
<?php while ( have_rows('banner') ) : the_row();?>
<?php if( get_sub_field('background') || get_sub_field('heading')):?>
<div class="bannerWraper pc6Banner">
    <?php $bannerImg = get_sub_field('background') ?>
	<div class="bannerImg"><img src="<?php echo $bannerImg['url']; ?>" alt="<?php echo $bannerImg['alt']; ?>" width="<?php echo $bannerImg['width']; ?>" height="<?php echo $bannerImg['height']; ?>"></div>
	<div class="container">
		<div class="row cust-row">
			<div style="background:<?php the_sub_field('black_layer');?>" class="bannerContent<?php if(get_sub_field('black_layer')){echo ' bannerOverlay';}?> <?php if( get_sub_field('alignment') == 'Left' ){echo 'text-left';}else if( get_sub_field('alignment') == 'Center' ){echo 'text-center';}else if( get_sub_field('alignment') == 'Right' ){echo 'text-right';}?>">
				<div class="bannerHeading" style="color:<?php the_sub_field('color');?>"><?php the_sub_field('heading');?></div>
				<div class="bannerText paddTop10" style="color:<?php the_sub_field('color');?>"><?php the_sub_field('text');?></div>
				<?php if(get_sub_field('button_text')):?>
				<div class="bannerBtn paddTop30"><a href="#contactPopUpForm" class="commonBtn fancybox-inline"><?php the_sub_field('button_text');?></a></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section1') ):?>
<?php while ( have_rows('section1') ) : the_row();?>
<?php if( get_sub_field('title') || get_sub_field('brands')):?>
<div class="wuSection1 paddTop70">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12">
				<div class="wus1Title"><?php the_sub_field('title');?></div>
				<div class="clearfix paddBottom20"></div>
				<ul class="wus1Slider">
					<?php while ( have_rows('brands') ) : the_row();?>
						<?php $wus1Img = get_sub_field('image'); ?>
						<li class="slide"><img src="<?php echo $wus1Img['url']; ?>" alt="<?php echo $wus1Img['alt']; ?>"></li>
					<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section2') ):?>
<?php while ( have_rows('section2') ) : the_row();?>
<?php if( get_sub_field('heading')):?>
<div class="wuSection2 paddTop60">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 col-lg-offset-1 col-lg-10">
				<h2><?php the_sub_field('heading');?></h2>
				<div class="wus2Text"><?php the_sub_field('text');?></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php $counter = 1; ?>
<?php if( get_field('section3') ):?>
<?php while ( have_rows('section3') ) : the_row();?>
<div class="wuSection3 paddTop70 paddBottom70 <?php if($counter%2 == 0){echo 'greySection';} ?>">
	<div class="container container1320">
		<div class="row cust-row rowFlex">
			<?php if($counter%2 == 1) : ?>
			<div class="col-sm-12 col-md-6">
				<div class="wus3Count"><?php echo '0'.$counter; ?></div>
				<h2><?php the_sub_field('title');?></h2>
				<?php the_sub_field('text');?>
				<?php if(get_sub_field('button_text')):?>
					<div><a href="<?php the_sub_field('button_link');?>" class="commonBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
				<?php endif; ?>
			</div>
			<?php endif; ?>
			<div class="col-sm-12 col-md-6 <?php if($counter%2 == 1){echo "responsiveMargin"; }?>">
				<?php $section3Img = get_sub_field('image') ?>
				<?php $videoLink = get_sub_field('video_link') ?>
				<?php if($videoLink != ''): ?>
				<div class="videoImg"><a href="<?php echo $videoLink; ?>"><img src="<?php echo $section3Img['url']; ?>" alt="<?php echo $section3Img['alt']; ?>" width="<?php echo $section3Img['width']; ?>" height="<?php echo $section3Img['height']; ?>"></a></div>
				<?php else: ?>
				<div class="pc3Section3img"><img src="<?php echo $section3Img['url']; ?>" alt="<?php echo $section3Img['alt']; ?>" width="<?php echo $section3Img['width']; ?>" height="<?php echo $section3Img['height']; ?>"></div>
				<?php endif; ?>
			</div>
			<?php if($counter%2 == 0) : ?>
			<div class="col-sm-12 col-md-6 responsiveMargin">
				<div class="wus3Count"><?php echo '0'.$counter; ?></div>
				<h2><?php the_sub_field('title');?></h2>
				<?php the_sub_field('text');?>
				<?php if(get_sub_field('button_text')):?>
					<div><a href="<?php the_sub_field('button_link');?>" class="commonBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
				<?php endif; ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php $counter++; ?>
<?php endwhile; ?>
<?php endif;?>
<?php if( get_field('section4') ):?>
<?php while ( have_rows('section4') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('brands')):?>
<div class="pc6Section5 greySection paddTop70 paddBottom40">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 col-lg-offset-1 col-lg-10 paddBottom30">
				<h2><?php the_sub_field('heading');?></h2>
				<div class="pc6SubHeading"><?php the_sub_field('sub_heading');?></div>
				<div class="pc6CTA paddTop10"><a href="<?php the_sub_field('cta_link');?>" target="_blank"><?php the_sub_field('cta_text');?></a></div>
			</div>
		</div>
	</div>
	<div class="row margin0">
		<div class="col-sm-12">
			<ul class="pc6s5Slider">
				<?php while ( have_rows('brands') ) : the_row();?>
				<li class="slide">
					<div class="pc6s5Box">
						<?php $pc6s5Img = get_sub_field('image') ?>
						<div class="pc6s5Img"><img src="<?php echo $pc6s5Img['url']; ?>" alt="<?php echo $pc6s5Img['alt']; ?>" width="<?php echo $pc6s5Img['width']; ?>" height="<?php echo $pc6s5Img['height']; ?>"></div>
						<div class="pc6s5Title"><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></div>
						<div class="pc6s5Link"><a href="<?php the_sub_field('link');?>">Readmore</a></div>
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
<?php if( get_field('section5') ):?>
<?php while ( have_rows('section5') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('text')):?>
<div class="pc6Section6 paddTop70 paddBottom40">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 col-lg-offset-1 col-lg-10 paddBottom30">
				<h2><?php the_sub_field('heading');?></h2>
				<div class="pc6SubHeading"><?php the_sub_field('text');?></div>
				<div class="paddTop25"><a href="#contactPopUpForm" class="commonBtn fancybox-inline"><?php the_sub_field('cta_text');?></a></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>