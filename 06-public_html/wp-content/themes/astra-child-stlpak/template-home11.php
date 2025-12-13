<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: Home 11
?>

<!-- 暂时不显示滑块 -->
<!-- <div style="display: none;"><?php echo do_shortcode('[smartslider3 slider="2"]'); ?></div> -->
<?php if( get_field('section1') ):?>
<?php while ( have_rows('section1') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('brands')):?>
<div class="hp11Section1 paddTop40 paddBottom70 text-center">
	<div class="hp11s1Title"><?php the_sub_field('heading');?></div>
	<?php if(get_sub_field('brands')):?>
	<div class="clearfix paddTop40"></div>
	<ul class="hp11s1Brands">
	<?php while ( have_rows('brands') ) : the_row();?>
		<?php $hp11s1Img = get_sub_field('image') ?>
		<li class="slide"><img src="<?php echo $hp11s1Img['url']; ?>" alt="<?php echo $hp11s1Img['alt']; ?>"></li>
	<?php endwhile; ?>
	</ul>
	<?php endif; ?>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section2') ):?>
<div class="hp11Section2 paddBottom40">
	<div class="container">
		<div class="row cust-row">
			<?php while ( have_rows('section2') ) : the_row();?>
			<div class="col-md-6 paddBottom30">
				<div class="hp11s2BoxWrapper" style="<?php if(get_sub_field('background_image')):?>background-image: url(<?php the_sub_field('background_image'); ?>);<?php endif; ?><?php if(get_sub_field('background_color')):?> background-color: <?php the_sub_field('background_color'); ?>;<?php endif; ?>">
					<div class="hp11s2Box">
						<div class="hp11s2Title"><?php the_sub_field('title');?></div>
						<div class="hp11s2Text"><?php the_sub_field('text');?></div>
						<?php if(get_sub_field('button_text')): ?>
						<div class="paddTop15"><a href="<?php the_sub_field('button_link');?>" class="commonBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('section3') ):?>
<?php while ( have_rows('section3') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('products')):?>
<div class="hp11Section3 paddBottom70">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom40">
				<h2><?php the_sub_field('heading');?></h2>
				<div class="hp11s3subHeading"><?php the_sub_field('sub_heading');?></div>
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
			<?php if(get_sub_field('buttton_text')): ?>
			<div class="clearfix paddTop30"></div>
			<div class="col-sm-12"><a href="<?php the_sub_field('button_link');?>" class="commonBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('buttton_text');?></a></div>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section4') ):?>
<?php while ( have_rows('section4') ) : the_row();?>
<?php if( get_sub_field('title1') || get_sub_field('list') || get_sub_field('title2')): ?>
<div class="hp11Section4" <?php if(get_sub_field('background1')):?>style="background-color: <?php the_sub_field('background1'); ?>"<?php endif; ?>>
	<div class="hp11s4Box">
		<div class="hp11s4Box1">
			<h2 class="clrWhite"><?php the_sub_field('title1');?></h2>
			<?php if( get_sub_field('list') ): ?>
			<ul>
				<?php while ( have_rows('list') ) : the_row();?>
				<?php $hp11s4Icon = get_sub_field('icon'); ?>
				<li><img class="hp11s4Icon" src="<?php echo $hp11s4Icon['url']; ?>" alt="<?php echo $hp11s4Icon['alt']; ?>"> <?php the_sub_field('text');?></li>
				<?php endwhile; ?>
			</ul>
			<?php endif; ?>
			<?php if(get_sub_field('button_text')): ?>
			<div class="paddTop20"><a href="<?php the_sub_field('button_link');?>" class="commonBtn whiteBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
			<?php endif; ?>
		</div>
		<div class="hp11s4Box2" <?php if(get_sub_field('backgroun2')):?>style="background-color: <?php the_sub_field('backgroun2'); ?>"<?php endif; ?>>
			<div class="hp11s4Box2Content">
				<h2><?php the_sub_field('title2');?></h2>
				<?php if(get_sub_field('video_text')):?>
				<div class="hp11s4Video"><a href="<?php the_sub_field('video_link');?>"><?php the_sub_field('video_text');?></a></div>
				<?php endif; ?>
			</div>
			<?php $hp11s4Img2 = get_sub_field('image'); ?>
			<div class="hp11s4Img2"><img class="hp11s4Icon" src="<?php echo $hp11s4Img2['url']; ?>" alt="<?php echo $hp11s4Img2['alt']; ?>"></div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section5') ):?>
<?php while ( have_rows('section5') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('testimonials')): ?>
<div class="hp11Section5 paddTop70 paddBottom50">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12">
				<h2><?php the_sub_field('heading');?></h2>
				<?php if( get_sub_field('testimonials') ):?>
				<div class="clearfix paddTop20"></div>
				<ul class="hp11Testimonials img4Slider">
					<?php while ( have_rows('testimonials') ) : the_row();?>
					<li>
						<div class="hp11s5Box">
							<div class="hp11Quote"><img src="/wp-content/uploads/2022/04/hp11Quote.png" alt="Icon"></div>
							<div class="hp11s5Title"><?php the_sub_field('title');?></div>
							<div class="hp115Star"><img src="/wp-content/uploads/2022/04/5star.png" alt="Icon"></div>
							<div class="hp11s5Text paddTop25"><?php the_sub_field('text');?></div>
						</div>
					</li>
					<?php endwhile; ?>
				</ul>
				<?php endif; ?>
			</div>
			<div class="clearfix paddTop40"></div>
			<?php if(get_sub_field('button1_text')):?>
			<div class="col-sm-4 hp11s5Btn"><a href="<?php the_sub_field('button1_link');?>" class="commonBtn <?php if(get_sub_field('button1_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button1_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button1_text');?></a></div>
			<?php endif; ?>
			<?php if(get_sub_field('image')): ?>
			<div class="col-sm-4">
				<?php $hp11s5Img = get_sub_field('image'); ?>
				<div class="hp11s5Img"><img src="<?php echo $hp11s5Img['url']; ?>" alt="<?php echo $hp11s5Img['alt']; ?>"></div>
			</div>
			<?php endif; ?>
			<?php if(get_sub_field('button2_text')):?>
			<div class="col-sm-4 hp11s5Btn"><a href="<?php the_sub_field('button2_link');?>" class="commonBtn <?php if(get_sub_field('button2_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button2_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button2_text');?></a></div>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section6') ):?>
<?php while ( have_rows('section6') ) : the_row();?>
<div class="hp11Section6 paddTop70 paddBottom70 greySection">
	<div class="container">
		<?php if(get_sub_field('heading')):?>
		<div class="row cust-row">
			<div class="col-sm-12 paddBottom20 text-center">
				<h2><?php the_sub_field('heading');?></h2>
			</div>
		</div>
		<?php endif; ?>
		<?php if( get_sub_field('content_box') ):?>
		<?php $counter = 1; ?>
		<?php while ( have_rows('content_box') ) : the_row();?>
		<div class="row cust-row rowFlex paddBottom60">
			<?php if($counter%2 == 0) : ?>
			<div class="col-sm-12 col-md-5">
				<div class="hp11s6Box hp11s6BoxLeft">
					<div class="hp11s6SubHeading"><?php the_sub_field('title');?></div>
					<h2><?php the_sub_field('heading');?></h2>
					<div class="hp11s6Text"><?php the_sub_field('text');?></div>
					<?php if(get_sub_field('button_text')):?>
					<div class="hp11s6Btn"><a href="<?php the_sub_field('button_link');?>" class="<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
					<?php endif; ?>
				</div>
			</div>
			<?php endif; ?>
			<div class="col-sm-12 col-md-12 col-lg-7 <?php if($counter%2 == 0){echo "responsiveMargin"; }?>">
				<?php $hp11s6Img = get_sub_field('image') ?>
				<?php $hp11s6Link = get_sub_field('video_link') ?>
				<?php if($videoLink != ''): ?>
				<div class="hp11s6Img videoImg"><a href="<?php echo $videoLink; ?>"><img src="<?php echo $hp11s6Img['url']; ?>" alt="<?php echo $hp11s6Img['alt']; ?>"></a></div>
				<?php else: ?>
				<div class="hp11s6Img"><img src="<?php echo $hp11s6Img['url']; ?>" alt="<?php echo $hp11s6Img['alt']; ?>"></div>
				<?php endif; ?>
			</div>
			<?php if($counter%2 == 1) : ?>
			<div class="col-sm-12 col-md-5 responsiveMargin">
				<div class="hp11s6Box hp11s6BoxRight">
					<div class="hp11s6SubHeading"><?php the_sub_field('title');?></div>
					<h2><?php the_sub_field('heading');?></h2>
					<div class="hp11s6Text"><?php the_sub_field('text');?></div>
					<?php if(get_sub_field('button_text')):?>
					<div class="hp11s6Btn"><a href="<?php the_sub_field('button_link');?>" class="<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
					<?php endif; ?>
				</div>
			</div>
			<?php endif; ?>
			<?php $counter++; ?>
		</div>
		<?php endwhile; ?>
		<?php endif;?>
		<div class="row cust-row">
			<div class="col-sm-12 hp11s6Btns"><?php if(get_sub_field('button1_text')): ?><a href="<?php the_sub_field('button1_link');?>" class="commonBtn<?php if(get_sub_field('button1_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button1_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button1_text');?></a><?php endif; ?><?php if(get_sub_field('button2_text')): ?><a href="<?php the_sub_field('button2_link');?>" class="commonBtn whiteBtn<?php if(get_sub_field('button2_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button2_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button2_text');?></a><?php endif; ?></div>
		</div>
	</div>
</div>
<?php endwhile; ?>
<?php endif;?>
<?php if( get_field('section7') ):?>
<?php while ( have_rows('section7') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('faqs')): ?>
<div class="hp11Section7 paddTop70 paddBottom70">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 <?php if( get_sub_field('faqs') ){echo 'col-md-5 col-lg-4';}else{echo 'text-center';}?>">
				<h2><?php the_sub_field('heading');?></h2>
				<div class="hp11s7Text"><?php the_sub_field('text');?></div>
				<?php if(get_sub_field('button_text')):?>
				<div class="paddTop10"><a href="<?php the_sub_field('button_link');?>" class="commonBtn <?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
				<?php endif; ?>
			</div>
			<?php if( get_sub_field('faqs') ):?>
			<div class="col-sm-12 col-md-7 col-lg-8 hp11FAQs responsiveMargin">
				<?php $count = 1; ?>
				<?php while ( have_rows('faqs') ) : the_row();?>
				<div class="accordiaBox <?php if($count == 1){echo 'active';}?>">
					<div class="accordion"><?php the_sub_field('title');?></div>
					<div class="panel"><?php the_sub_field('text');?></div>
				</div>
				<?php $count++; ?>
				<?php endwhile; ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section8') ):?>
<?php while ( have_rows('section8') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('brands')): ?>
<div class="hp11Section8 paddTop40 paddBottom40" <?php if(get_sub_field('background_color')):?>style="background-color: <?php the_sub_field('background_color'); ?>"<?php endif; ?>>
	<div class="container">
		<div class="row cust-row">
			<div class="<?php if( get_sub_field('brands') ){echo 'col-lg-4';}else{echo 'text-center';}?>">
				<h2 class="clrWhite"><?php the_sub_field('heading');?></h2>
				<div class="hp11s8Text clrWhite"><?php the_sub_field('text');?></div>
			</div>
			<?php if( get_sub_field('brands') ):?>
			<div class="col-lg-8 hp11s8Brands">
				<ul>
				<?php while ( have_rows('brands') ) : the_row();?>
					<?php $hp11s8Img = get_sub_field('image'); ?>
					<li><img src="<?php echo $hp11s8Img['url']; ?>" alt="<?php echo $hp11s8Img['alt']; ?>"></li>
				<?php endwhile; ?>
				</ul>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section9') ):?>
<?php while ( have_rows('section9') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('gallery')): ?>
<div class="hp11Section9 paddTop70 paddBottom70">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom30">
				<h2><?php the_sub_field('heading');?></h2>
				<div class="hp11s3subHeading"><?php the_sub_field('sub_heading');?></div>
			</div>
			<?php if( get_sub_field('gallery') ):?>
			<?php $count = 0; ?>
			<?php while ( have_rows('gallery') ) : the_row();?>
				<?php $count++; ?>
				<div class="col-sm-6 col-md-3 paddBottom30">
					<?php $hp11s9Img = get_sub_field('image'); ?>
					<div class="hp11s9Img"><a href="<?php echo $hp11s9Img['url']; ?>"><img src="<?php echo $hp11s9Img['url']; ?>" alt="<?php echo $hp11s9Img['alt']; ?>"></a></div>
				</div>
				<?php if($count == 2): ?>
					<div class="clearfix visible-sm"></div>
				<?php endif; ?>
				<?php if($count == 4): ?>
					<div class="clearfix"></div>
					<?php $count = 0; ?>
				<?php endif; ?>
			<?php endwhile; ?>
			<?php endif; ?>
			<?php if(get_sub_field('button_text')):?>
			<div class="col-sm-12 paddTop15"><a href="<?php the_sub_field('button_link');?>" class="commonBtn <?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section10') ):?>
<?php while ( have_rows('section10') ) : the_row();?>
<?php if( get_sub_field('title') || get_sub_field('image')): ?>
<div class="hp11Section10">
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