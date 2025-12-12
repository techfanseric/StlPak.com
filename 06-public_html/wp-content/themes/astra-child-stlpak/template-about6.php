<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: About Us 6
?>

<?php if( get_field('banner') ):?>
<?php while ( have_rows('banner') ) : the_row();?>
<?php if( get_sub_field('background') || get_sub_field('title')):?>
<div class="bannerWraper about6Banner">
    <?php $bannerImg = get_sub_field('background') ?>
	<div class="bannerImg"><img src="<?php echo $bannerImg['url']; ?>" alt="<?php echo $bannerImg['alt']; ?>" width="<?php echo $bannerImg['width']; ?>" height="<?php echo $bannerImg['height']; ?>"></div>
	<div class="container">
		<div class="row cust-row">
			<div class="bannerContent <?php if( get_sub_field('alignment') == 'Left' ){echo 'text-left';}else if( get_sub_field('alignment') == 'Center' ){echo 'text-center';}else if( get_sub_field('alignment') == 'Right' ){echo 'text-right';}?>">
				<?php if(get_sub_field('title')): ?><h1 class="bannerHeading" style="color:<?php the_sub_field('color');?>"><?php the_sub_field('title');?></h1><?php endif; ?>
				<?php if(get_sub_field('video_link')): ?><div class="bannerVideo"><a href="<?php the_sub_field('video_link'); ?>"><img src="/wp-content/uploads/2020/09/playIcon-1.png" alt="play icon"></a></div><?php endif; ?>
				<?php if(get_sub_field('text')): ?><div class="bannerText paddTop20" style="color:<?php the_sub_field('color');?>"><?php the_sub_field('text');?></div><?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section1') ):?>
<div class="au6Section1 paddTop70">
	<div class="container">
		<?php while ( have_rows('section1') ) : the_row();?>
		<div class="row cust-row paddBottom30 <?php if( get_sub_field('alignment') == 'Left' ){echo 'text-left';}else if( get_sub_field('alignment') == 'Center' ){echo 'text-center';}else if( get_sub_field('alignment') == 'Right' ){echo 'text-right';}?>">
			<div class="col-sm-12">
				<h2><?php the_sub_field('heading');?></h2>
				<div class="au6s1Text"><?php the_sub_field('text');?></div>
			</div>
		</div>
		<?php endwhile; ?>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('section2') ):?>
<div class="au6Section2 paddTop30 paddBottom40">
	<div class="container">
		<div class="row cust-row text-center">
			<?php while ( have_rows('section2') ) : the_row();?>
			<div class="col-sm-4 paddBottom30">
				<div class="au6s2Box">
					<?php $au6s2Img = get_sub_field('icon'); ?>
					<div class="au6s2Img"><img src="<?php echo $au6s2Img['url']; ?>" alt="<?php echo $au6s2Img['alt']; ?>"></div>
					<div class="au6s2Title"><?php the_sub_field('title');?></div>
					<div class="au6s2Text"><?php the_sub_field('text');?></div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif;?>
<?php if( get_field('section3') ):?>
<?php while ( have_rows('section3') ) : the_row();?>
<?php if(get_sub_field('heading') || get_sub_field('box')):?>
<div class="container paddBottom25">
	<div class="row cust-row text-center">
		<h2><?php the_sub_field('heading');?></h2>
	</div>
</div>
<div class="au6Section3 greySection paddTop60 paddBottom30">
	<div class="container">
		<div class="row cust-row text-center">
			<?php while ( have_rows('box') ) : the_row();?>
			<div class="col-sm-4 paddBottom30">
				<div class="au6s3Box">
					<?php $au6s3Img = get_sub_field('icon'); ?>
					<div class="au6s3Img"><img src="<?php echo $au6s3Img['url']; ?>" alt="<?php echo $au6s3Img['alt']; ?>"></div>
					<div class="au6s3Text"><?php the_sub_field('text');?></div>
					<div class="au6s3Title"><?php the_sub_field('title');?></div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif;?>
<?php endwhile; ?>
<?php endif;?>
<?php if( get_field('section4') ):?>
<?php while ( have_rows('section4') ) : the_row();?>
<?php if(get_sub_field('title') || get_sub_field('brands')):?>
<div class="au6Section4 paddTop70 paddBottom35">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="au6s4Title"><?php the_sub_field('title');?></div>
			<div class="clearfix paddTop25"></div>
			<ul>
			<?php while ( have_rows('brands') ) : the_row();?>
				<?php $au6s4Img = get_sub_field('image'); ?>
				<li><img src="<?php echo $au6s4Img['url']; ?>" alt="<?php echo $au6s4Img['alt']; ?>"></li>
			<?php endwhile; ?>
			</ul>
		</div>
	</div>
</div>
<?php endif;?>
<?php endwhile; ?>
<?php endif;?>
<?php if( get_field('section5') ):?>
<?php while ( have_rows('section5') ) : the_row();?>
<?php if(get_sub_field('image') || get_sub_field('title')):?>
<div class="au6Section5 paddTop35 paddBottom40">
	<div class="container">
		<div class="row cust-row rowFlex">
			<div class="col-md-5">
				<?php $au6s5Img = get_sub_field('image'); ?>
				<div class="au6s5Img"><img src="<?php echo $au6s5Img['url']; ?>" alt="<?php echo $au6s5Img['alt']; ?>"></div>
			</div>
			<div class="col-md-7 responsiveMargin">
				<h2 class="au6s5Title clrBlue"><?php the_sub_field('heading');?></h2>
				<div class="au6s5Text"><?php the_sub_field('text');?></div>
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
<?php if( get_field('section6') ):?>
<?php while ( have_rows('section6') ) : the_row();?>
<?php if(get_sub_field('heading') || get_sub_field('team_box')):?>
<div class="au6Section6 paddTop35 paddBottom40">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom50">
				<h2><?php the_sub_field('heading');?></h2>
				<div class="au6s6Text"><?php the_sub_field('text');?></div>
			</div>
			<div class="clearfix"></div>
			<?php while ( have_rows('team_box') ) : the_row();?>
			<div class="col-sm-4 paddBottom30">
				<div class="au6s6Box">
					<?php $au6s6Img = get_sub_field('image'); ?>
					<div class="au6s6Img"><img src="<?php echo $au6s6Img['url']; ?>" alt="<?php echo $au6s6Img['alt']; ?>"></div>
					<div class="au6s6Title"><?php the_sub_field('title');?></div>
					<div class="au6s6Text"><?php the_sub_field('designation');?></div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif;?>
<?php endwhile; ?>
<?php endif;?>
<?php if( get_field('section7') ):?>
<?php while ( have_rows('section7') ) : the_row();?>
<?php if( get_sub_field('heading') ):?>
<div class="au6Section5 greySection paddTop50 paddBottom50">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 text-center">
				<h2><?php the_sub_field('heading');?></h2>
				<div class="clearfix paddTop25"></div>
				<div class="dblBtn"><?php if(get_sub_field('button_1_text')):?><a href="<?php the_sub_field('button_1_link');?>" class="commonBtn<?php if(get_sub_field('button_1_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_1_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_1_text');?></a><?php endif;?><?php if(get_sub_field('button_2_text')):?><a href="<?php the_sub_field('button_2_link');?>" class="commonBtn whiteBtn<?php if(get_sub_field('button_2_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_2_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_2_text');?></a><?php endif;?></div>
			</div>
		</div>
	</div>
</div>
<?php endif;?>
<?php endwhile; ?>
<?php endif;?>

<?php get_footer(); ?>