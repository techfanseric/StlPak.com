<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: Landing Page 6
?>

<?php if( get_field('banner') ):?>
<?php while ( have_rows('banner') ) : the_row();?>
<?php if( get_sub_field('image') || get_sub_field('heading')):?>
<div class="bannerWraper lp6Banner">
    <?php $bannerImg = get_sub_field('image') ?>
	<div class="bannerImg"><img src="<?php echo $bannerImg['url']; ?>" alt="<?php echo $bannerImg['alt']; ?>" width="<?php echo $bannerImg['width']; ?>" height="<?php echo $bannerImg['height']; ?>"></div>
	<div class="container">
		<div class="row cust-row">
			<div style="background:<?php the_sub_field('overlay');?>" class="bannerContent<?php if(get_sub_field('overlay')){echo ' bannerOverlay';}?> <?php if( get_sub_field('text_alignment') == 'Left' ){echo 'text-left';}else if( get_sub_field('text_alignment') == 'Center' ){echo 'text-center';}else if( get_sub_field('text_sub_alignment') == 'Right' ){echo 'text-right';}?>">
				<div class="bannerHeading" style="color:<?php the_sub_field('heading_color');?>"><?php the_sub_field('heading');?></div>
				<?php if(get_sub_field('button_text')):?>
					<div class="paddTop20 bannerBtn"><a href="#contactPopUpForm" class="commonBtn fancybox-inline"><?php the_sub_field('button_text');?></a></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section1')):?>
<?php while ( have_rows('section1') ) : the_row();?>
<?php if(get_sub_field('heading') || get_sub_field('sub_heading')):?>
<div class="lp6Section1 paddTop70 paddBottom35">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 text-center">
				<h1><?php the_sub_field('heading'); ?></h1>
				<div class="lp6s1SubHeading"><?php the_sub_field('sub_heading'); ?></div>
				<div class="lp6s1Text"><?php the_sub_field('text'); ?></div>
				<?php if(get_sub_field('button_text')):?>
					<div class="paddTop10"><a href="<?php the_sub_field('button_link');?>" class="commonBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php endif;?>
<?php endwhile; ?>
<?php endif;?>
<?php if(get_field('section2') || get_field('article')):?>
<div class="articleSection lp6Section2 paddTop35 paddBottom70">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-8">
				<?php if(get_field('section2')):?>
				<?php while ( have_rows('section2') ) : the_row();?>
					<?php $lp6s2Img = get_sub_field('logo'); ?>
					<div class="lp6s2Box">
						<div class="lp6s2Row1">
							<div class="lp6s2Img"><img src="<?php echo $lp6s2Img['url']; ?>" alt="<?php echo $lp6s2Img['alt']; ?>" width="<?php echo $lp6s2Img['width']; ?>" height="<?php echo $lp6s2Img['height']; ?>"></div>
							<div class="lp6s2Content">
								<div class="lp6s2Heading"><?php the_sub_field('heading'); ?></div>
								<div class="lp6s2SubHeading"><?php the_sub_field('subheading'); ?></div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="lp6s2Row2">
							<div class="lp6s2Title"><?php the_sub_field('title'); ?></div>
							<div class="lp6s2Text"><?php the_sub_field('text'); ?></div>
							<?php if(get_sub_field('button_text')):?>
								<div class="lp6s2Btn text-right"><a href="<?php the_sub_field('button_link');?>" class="commonBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
							<?php endif; ?>
						</div>
					</div>
				<?php endwhile; ?>
				<div class="clearfix paddBottom30"></div>
				<?php endif;?>
				<?php if(get_field('article')):?>
					<div class="lp6Article"><?php the_field('article'); ?></div>
				<?php endif;?>
			</div>
			<div class="col-sm-12 col-md-4 lp6Sidebar">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>
<?php endif;?>

<?php get_footer(); ?>