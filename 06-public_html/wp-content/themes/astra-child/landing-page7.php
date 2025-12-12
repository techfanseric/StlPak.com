<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: Landing Page 7
?>

<?php if( get_field('section1') ):?>
<?php while ( have_rows('section1') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('brands')):?>
<div class="lp7Section1 paddTop70 paddBottom70 text-center" <?php if(get_sub_field('background')):?>style="background-image: url(<?php the_sub_field('background'); ?>);"<?php endif; ?>>
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12">
				<h1 class="clrWhite"><?php the_sub_field('heading');?></h1>
				<div class="lp7s1Text clrWhite"><?php the_sub_field('sub_heading');?></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php $counter = 1; ?>
<?php if( get_field('section2') ):?>
<div class="lp7Section2 paddBottom70">
	<?php while ( have_rows('section2') ) : the_row();?>
	<div class="container">
		<div class="row cust-row rowFlex paddTop70">
			<?php if($counter%2 == 0) : ?>
			<div class="col-sm-12 col-md-6 lp7s2List">
				<h2><?php the_sub_field('heading');?></h2>
				<?php the_sub_field('text');?>
				<?php if( get_sub_field('list') ): ?>
				<ul>
					<?php while ( have_rows('list') ) : the_row();?>
					<?php $hp11s4Icon = get_sub_field('icon'); ?>
					<li><img class="lp7s2ListIcon" src="<?php echo $hp11s4Icon['url']; ?>" alt="<?php echo $hp11s4Icon['alt']; ?>"> <?php the_sub_field('title');?></li>
					<?php endwhile; ?>
				</ul>
				<?php endif; ?>
				<?php if(get_sub_field('button_text')):?>
					<div><a href="<?php the_sub_field('button_link');?>" class="commonBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
				<?php endif; ?>
			</div>
			<?php endif; ?>
			<div class="col-sm-12 col-md-6 <?php if($counter%2 == 0){echo "responsiveMargin"; }?>">
				<?php $lp7s2Img = get_sub_field('image') ?>
				<?php $videoLink = get_sub_field('video_link') ?>
				<?php if($videoLink != ''): ?>
				<div class="videoImg"><a href="<?php echo $videoLink; ?>"><img src="<?php echo $lp7s2Img['url']; ?>" alt="<?php echo $lp7s2Img['alt']; ?>" width="<?php echo $lp7s2Img['width']; ?>" height="<?php echo $lp7s2Img['height']; ?>"></a></div>
				<?php else: ?>
				<div class="text-center"><img src="<?php echo $lp7s2Img['url']; ?>" alt="<?php echo $lp7s2Img['alt']; ?>" width="<?php echo $lp7s2Img['width']; ?>" height="<?php echo $lp7s2Img['height']; ?>"></div>
				<?php endif; ?>
			</div>
			<?php if($counter%2 == 1) : ?>
			<div class="col-sm-12 col-md-6 lp7s2List responsiveMargin">
				<h2><?php the_sub_field('heading');?></h2>
				<?php the_sub_field('text');?>
				<?php if( get_sub_field('list') ): ?>
				<ul>
					<?php while ( have_rows('list') ) : the_row();?>
					<?php $hp11s4Icon = get_sub_field('icon'); ?>
					<li><img class="lp7s2ListIcon" src="<?php echo $hp11s4Icon['url']; ?>" alt="<?php echo $hp11s4Icon['alt']; ?>"> <?php the_sub_field('title');?></li>
					<?php endwhile; ?>
				</ul>
				<?php endif; ?>
				<?php if(get_sub_field('button_text')):?>
					<div><a href="<?php the_sub_field('button_link');?>" class="commonBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
				<?php endif; ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
	<?php $counter++; ?>
	<?php endwhile; ?>
</div>
<?php endif;?>
<?php if( get_field('section3') ):?>
<?php while ( have_rows('section3') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('featured_points')):?>
<div class="lp7Section3 blueSection paddTop70 paddBottom40">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom20">
				<h1 class="clrWhite"><?php the_sub_field('heading');?></h1>
			</div>
			<?php if( get_sub_field('featured_points') ): ?>
			<div class="clearfix"></div>
			<?php while ( have_rows('featured_points') ) : the_row();?>
				<div class="col-sm-6 col-md-3 paddBottom30">
				<?php $lp7s3Img = get_sub_field('image'); ?>
					<div class="lp7s3Box">
						<div class="lp7s3Img"><img src="<?php echo $lp7s3Img['url']; ?>" alt="<?php echo $lp7s3Img['alt']; ?>" width="<?php echo $lp7s3Img['width']; ?>" height="<?php echo $lp7s3Img['height']; ?>"></div>
						<div class="lp7s3Title"><?php the_sub_field('title');?></div>
					</div>
				</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php if( get_sub_field('slider')):?>
<div class="lp7Section3a">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12">
				<div class="lp7s3SliderWraper">
				<ul class="lp7s3Slider img1Slider">
					<?php while ( have_rows('slider') ) : the_row();?>
						<?php $lp7SliderImg = get_sub_field('image'); ?>
						<li class="slide"><img src="<?php echo $lp7SliderImg['url']; ?>" alt="<?php echo $lp7SliderImg['alt']; ?>" width="<?php echo $lp7SliderImg['width']; ?>" height="<?php echo $lp7SliderImg['height']; ?>"></li>
					<?php endwhile; ?>
				</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section4') ):?>
<?php while ( have_rows('section4') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('products')):?>
<div class="lp7Section4 paddTop55 paddBottom40">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom20">
				<h2><?php the_sub_field('heading');?></h2>
			</div>
			<div class="clearfix"></div>
			<?php while ( have_rows('products') ) : the_row();?>
			<div class="col-sm-6 col-md-3 paddBottom30">
				<?php $hp11s3Img = get_sub_field('image') ?>
				<?php $hp11s3BackImg = get_sub_field('back_image') ?>
				<?php 
					if(get_sub_field('link')){
						$productLink = get_sub_field('link');
					}else{
						$productLink = "javascript:void(0);";
					}
				?>
				<div class="hp11s3Box">
					<div class="hp11s3Img"><a href="<?php echo $productLink;?>"><img class="hp11s3Img1" src="<?php echo $hp11s3Img['url']; ?>" alt="<?php echo $hp11s3Img['alt']; ?>"><img class="hp11s3Img2" src="<?php echo $hp11s3BackImg['url']; ?>" alt="<?php echo $hp11s3BackImg['alt']; ?>"></a><?php if(get_sub_field('image_caption')):?><span class="hp11s3ImgCaption"><?php the_sub_field('image_caption');?></span><?php endif; ?></div>
					<div class="hp11s3Title"><a href="<?php echo $productLink;?>"><?php the_sub_field('title');?></a></div>
					<div class="hp11s3Text"><?php the_sub_field('text');?></div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php $counter = 1; ?>
<?php if( get_field('section5') ):?>
<div class="lp7Section5">
	<?php while ( have_rows('section5') ) : the_row();?>
		<div class="row margin0">
			<div class="lp7s5Box">
			<?php if($counter%2 == 0) : ?>
			<div class="lp7s5Box1" style="<?php if(get_sub_field('background')):?>background-color: <?php the_sub_field('background'); ?>; color: <?php the_sub_field('color'); ?>;<?php endif; ?>">
				<div class="lp7s5Title"><?php the_sub_field('title');?></div>
				<h2><?php the_sub_field('heading');?></h2>
				<?php the_sub_field('text');?>
				<?php if(get_sub_field('button_text')):?>
				<div><a href="<?php the_sub_field('button_link');?>" class="commonBtn whiteBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
				<?php endif; ?>
			</div>
			<?php endif; ?>
			<div class="lp7s5Box2">
				<?php $lp7s2Img = get_sub_field('image') ?>
				<div class="lp7s5Boximg"><img src="<?php echo $lp7s2Img['url']; ?>" alt="<?php echo $lp7s2Img['alt']; ?>" width="<?php echo $lp7s2Img['width']; ?>" height="<?php echo $lp7s2Img['height']; ?>"></div>
			</div>
			<?php if($counter%2 == 1) : ?>
			<div class="lp7s5Box1" style="<?php if(get_sub_field('background')):?>background-color: <?php the_sub_field('background'); ?>; color: <?php the_sub_field('color'); ?>;<?php endif; ?>">
				<div class="lp7s5Title"><?php the_sub_field('title');?></div>
				<h2><?php the_sub_field('heading');?></h2>
				<?php the_sub_field('text');?>
				<?php if(get_sub_field('button_text')):?>
				<div><a href="<?php the_sub_field('button_link');?>" class="commonBtn whiteBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
				<?php endif; ?>
			</div>
			<?php endif; ?>
			</div>
		</div>
	<?php $counter++; ?>
	<?php endwhile; ?>
</div>
<?php endif;?>
<?php if( get_field('section6') ):?>
<?php while ( have_rows('section6') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('products')):?>
<div class="lp7Section6 paddTop70 paddBottom40">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom20">
				<h2><?php the_sub_field('heading');?></h2>
			</div>
			<div class="clearfix"></div>
			<?php while ( have_rows('products') ) : the_row();?>
			<div class="col-sm-6 col-md-3 paddBottom30">
				<?php $lp7s6Img = get_sub_field('image') ?>
				<?php 
					if(get_sub_field('link')){
						$productLink = get_sub_field('link');
					}else{
						$productLink = "javascript:void(0);";
					}
				?>
				<div class="lp7s6Box">
					<div class="lp7s6Img"><a href="<?php echo $productLink;?>"><img src="<?php echo $lp7s6Img['url']; ?>" alt="<?php echo $lp7s6Img['alt']; ?>"></a></div>
					<div class="lp7s6Title"><a href="<?php echo $productLink;?>"><?php the_sub_field('title');?></a></div>
					<div class="lp7s6Text"><?php the_sub_field('text');?></div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section7') ):?>
<div class="lp7Section7">
	<div class="lp7s7BoxWraper">
	<?php while ( have_rows('section7') ) : the_row();?>
		<div class="lp7s7Box" <?php if(get_sub_field('background')):?>style="background-color: <?php the_sub_field('background'); ?>"<?php endif; ?>>
			<h2><?php the_sub_field('heading');?></h2>
			<div class="lp7s7Text"><?php the_sub_field('text');?></div>
			<?php if(get_sub_field('button_text')):?>
			<div class="lp7s7Btn"><a href="<?php the_sub_field('button_link');?>" class="<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
			<?php endif; ?>
		</div>
	<?php endwhile; ?>
	</div>
</div>
<?php endif;?>
<?php if( get_field('section8') ):?>
<?php while ( have_rows('section8') ) : the_row();?>
<?php if( get_sub_field('title') || get_sub_field('image')): ?>
<div class="lp7Section8 paddTop70">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12">
				<div class="hp11s10Box" <?php if(get_sub_field('box_color')):?>style="background-color: <?php the_sub_field('box_color'); ?>"<?php endif; ?>>
					<?php $hp11s10Img = get_sub_field('image'); ?>
					<div class="hp11s10Left"><img src="<?php echo $hp11s10Img['url']; ?>" alt="<?php echo $hp11s10Img['alt']; ?>"></div>
					<div class="hp11s10Right">
						<h2 class="clrWhite"><?php the_sub_field('title');?></h2>
						<div class="hp11s10Text clrWhite"><?php the_sub_field('text');?></div>
						<?php if(get_sub_field('button_text')):?>
						<div class="paddTop10"><a href="<?php the_sub_field('button_link');?>" class="commonBtn whiteBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>