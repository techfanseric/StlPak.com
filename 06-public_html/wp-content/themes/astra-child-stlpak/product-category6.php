<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: Product Category 6
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
<?php if( get_sub_field('featured_points') || get_sub_field('heading')):?>
<div class="pc6Section1 paddTop70 paddBottom40">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 col-lg-offset-1 col-lg-10 paddBottom40">
				<h2><?php the_sub_field('heading');?></h2>
				<div class="pc6SubHeading"><?php the_sub_field('sub_heading');?></div>
			</div>
			<div class="clearfix"></div>
			<?php while ( have_rows('featured_points') ) : the_row();?>
			<div class="col-sm-4 paddBottom30">
				<div class="pc6s1Box">
					<div class="pc6s1Title"><?php the_sub_field('title');?></div>
					<div class="pc6s1Text"><?php the_sub_field('text');?></div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section2') ):?>
<div class="pc6Section2 paddTop15 paddBottom40">
	<div class="container">
		<div class="row cust-row text-center">
			<?php while ( have_rows('section2') ) : the_row();?>
			<div class="col-sm-6 col-md-3 paddBottom30">
				<div class="pc6s2Box">
					<?php $pc6s2Img1 = get_sub_field('image') ?>
					<?php $pc6s2Img2 = get_sub_field('back_image') ?>
					<div class="pc6s2Img"><a href="<?php the_sub_field('link');?>"><img class="pc6s2Img1" src="<?php echo $pc6s2Img1['url']; ?>" alt="<?php echo $pc6s2Img1['alt']; ?>" width="<?php echo $pc6s2Img1['width']; ?>" alt="<?php echo $pc6s2Img1['height']; ?>"><img class="pc6s2Img2" src="<?php echo $pc6s2Img2['url']; ?>" alt="<?php echo $pc6s2Img2['alt']; ?>" width="<?php echo $pc6s2Img2['width']; ?>" alt="<?php echo $pc6s2Img2['height']; ?>"></a></div>
					<div class="pc6s2SKU"><?php the_sub_field('sku');?></div>
					<div class="pc6s2Title"><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('section3') ):?>
<?php while ( have_rows('section3') ) : the_row();?>
<?php if( get_sub_field('background')):?>
<div class="pc6Banner">
    <?php $bannerImg = get_sub_field('background') ?>
	<div class="bannerImg"><img src="<?php echo $bannerImg['url']; ?>" alt="<?php echo $bannerImg['alt']; ?>" width="<?php echo $bannerImg['width']; ?>" height="<?php echo $bannerImg['height']; ?>"></div>
	<div class="container">
		<div class="row cust-row">
			<div class="pc6BannerContent">
				<h2 class="pc6BannerHeading"><?php the_sub_field('heading');?></h2>
				<div class="pc6BannerText"><?php the_sub_field('text');?></div>
				<?php if(get_sub_field('button_text')):?>
					<div class="bannerBtn paddTop20"><a href="#contactPopUpForm" class="commonBtn fancybox-inline"><?php the_sub_field('button_text');?></a></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section4') ):?>
<?php while ( have_rows('section4') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('featured_points')):?>
<div class="pc6Section4 paddTop70 paddBottom40">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 col-lg-offset-1 col-lg-10 paddBottom40">
				<h2><?php the_sub_field('heading');?></h2>
				<div class="pc6SubHeading"><?php the_sub_field('sub_heading');?></div>
				<div class="pc6CTA paddTop10"><a href="<?php the_sub_field('cta_link');?>" target="_blank"><?php the_sub_field('cta_text');?></a></div>
			</div>
			<div class="clearfix"></div>
			<?php $count = 0; ?>
			<?php $countSM = 0; ?>
			<?php while ( have_rows('featured_points') ) : the_row();?>
			<?php $count++; ?>
			<?php $countSM++; ?>
			<?php $pc6s4Img = get_sub_field('image') ?>
			<div class="col-sm-6 col-md-4 paddBottom30">
				<div class="pc6s4Box">
					<div class="pc6s4Img"><img src="<?php echo $pc6s4Img['url']; ?>" alt="<?php echo $pc6s4Img['alt']; ?>" width="<?php echo $pc6s4Img['width']; ?>" height="<?php echo $pc6s4Img['height']; ?>"></div>
					<div class="pc6s4Title"><?php the_sub_field('title');?></div>
					<div class="pc6s4Text"><?php the_sub_field('text');?></div>
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
<?php if( get_field('section5') ):?>
<?php while ( have_rows('section5') ) : the_row();?>
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
<?php if( get_field('section6') ):?>
<?php while ( have_rows('section6') ) : the_row();?>
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