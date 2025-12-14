<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: Home 16
?>

<?php echo do_shortcode('[smartslider3 slider="6"]'); ?>
<?php if( get_field('section1')):?>
<?php while ( have_rows('section1') ) : the_row();?>
<?php if( get_sub_field('image') || get_sub_field('title')):?>
<div class="hp16Section1">
	<div class="container">
		<div class="row cust-row">
			<?php if(get_sub_field('image')): ?>
			<div class="col-sm-12 col-md-6">
				<?php $hp16s1Img = get_sub_field('image'); ?>
				<?php $hp16s1Link = get_sub_field('video_link'); ?>
				<?php if($hp16s1Link != ''): ?>
					<div class="hp16s1Img videoImg"><a href="<?php echo $hp16s1Link; ?>"><img src="<?php echo $hp16s1Img['url']; ?>" alt="<?php echo $hp16s1Img['alt']; ?>"></a></div>
				<?php else: ?>
					<div class="hp16s1Img"><img src="<?php echo $hp16s1Img['url']; ?>" alt="<?php echo $hp16s1Img['alt']; ?>"></div>
				<?php endif; ?>
			</div>
			<?php endif; ?>
			<?php if(get_sub_field('title')): ?>
			<div class="col-sm-12 col-md-6 hp16s1Content responsiveMargin">
				<h2 class="hp16Heading hp16s1Heading"><?php the_sub_field('title'); ?></h2>
				<div class="hp16s1Text"><?php the_sub_field('text'); ?></div>
				<?php if(get_sub_field('button_text')): ?>
					<div class="paddTop20"><a href="<?php the_sub_field('button_link');?>" class="commonBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
				<?php endif; ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section2')):?>
<?php while ( have_rows('section2') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('products')):?>
<div class="hp16Section2 paddTop40">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 paddBottom30">
				<h2 class="hp16Heading hp16s2Heading"><?php the_sub_field('heading'); ?></h2>
			</div>
		</div>	
		<div class="row cust-row text-center">
			<div class="col-sm-12">
				<?php $count = 0; ?>
				<?php $countSM = 0; ?>
				<?php while ( have_rows('products') ) : the_row();?>
				<?php $count++; ?>
				<?php $countSM++; ?>
				<?php $productImg = get_sub_field('image'); ?>
				<div class="hp16s2Box">
					<?php if(get_sub_field('link')): ?>
					<?php $productLink = get_sub_field('link'); ?>
					<div class="hp16s2Img"><img src="<?php echo $productImg['url']; ?>" alt="<?php echo $productImg['alt']; ?>" width="<?php echo $productImg['width']; ?>" height="<?php echo $productImg['height']; ?>"></div>
					<div class="hp16s2Title"><a href="<?php echo $productLink; ?>"><?php the_sub_field('title');?></a></div>
					<?php else: ?>
					<div class="hp16s2Img"><img src="<?php echo $productImg['url']; ?>" alt="<?php echo $productImg['alt']; ?>" width="<?php echo $productImg['width']; ?>" height="<?php echo $productImg['height']; ?>"></div>
					<div class="hp16s2Title"><?php the_sub_field('title');?></div>
					<?php endif; ?>
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
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section3')):?>
<?php while ( have_rows('section3') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('content_block')):?>
<div class="hp16Section3">
	<div class="container">
		<div class="row cust-row paddBottom30">
			<div class="col-sm-12 col-md-6">
				<h2><?php the_sub_field('heading'); ?></h2>
			</div>
			<?php if(get_sub_field('button_text')): ?>
			<div class="col-sm-12 col-md-6 hp16s3Btn"><a href="<?php the_sub_field('button_link');?>" class="commonBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
			<?php endif; ?>
		</div>
		<?php if( get_sub_field('content_block')):?>
		<?php $counter = 1; ?>
		<?php while ( have_rows('content_block') ) : the_row();?>
		<div class="row cust-row hp16s3Row <?php if($counter%2 == 1){echo "hp16s3RowLeft"; }else{echo 'hp16s3RowRight';}?>">
			<?php if($counter%2 == 1) : ?>
			<div class="col-sm-12 col-md-4 hp16s3Content">
				<h4><?php the_sub_field('title');?></h4>
				<div class="hp16s3Text"><?php the_sub_field('text');?></div>
			</div>
			<?php endif; ?>
			<div class="col-sm-12 col-md-8 hp16s3ImgWrapper <?php if($counter%2 == 1){echo "responsiveMargin"; }?>">
				<?php $hp16s3Img = get_sub_field('image') ?>
				<div class="hp16s3Img"><img src="<?php echo $hp16s3Img['url']; ?>" alt="<?php echo $hp16s3Img['alt']; ?>"></div>
			</div>
			<?php if($counter%2 == 0) : ?>
			<div class="col-sm-12 col-md-4 hp16s3Content responsiveMargin">
				<h4><?php the_sub_field('title');?></h4>
				<div class="hp16s3Text"><?php the_sub_field('text');?></div>
			</div>
			<?php endif; ?>
		</div>
		<?php $counter++; ?>
		<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section4')):?>
<?php while ( have_rows('section4') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('featured_points')):?>
<div class="hp16Section4">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 paddBottom30">
				<h2 class="clrWhite hp16Heading hp16s4Heading"><?php the_sub_field('heading'); ?></h2>
			</div>
			<div class="clearfix"></div>
			<?php while ( have_rows('featured_points') ) : the_row();?>
			<?php $hp16s4Img = get_sub_field('image'); ?>
			<div class="col-sm-4 paddBottom30">
				<div class="hp16s4Box">
					<div class="hp16s4Img"><img src="<?php echo $hp16s4Img['url']; ?>" alt="<?php echo $hp16s4Img['alt']; ?>" ></div>
					<div class="hp16s4Title"><?php the_sub_field('title');?></div>
					<div class="hp16s4Text"><?php the_sub_field('text');?></div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section5')):?>
<?php while ( have_rows('section5') ) : the_row();?>
<?php if( get_sub_field('image') || get_sub_field('heading')):?>
<div class="hp16Section5">
	<div class="container">
		<div class="row cust-row">
			<?php if(get_sub_field('image')): ?>
			<div class="col-sm-12 col-md-5">
				<?php $hp16s5Img = get_sub_field('image'); ?>
				<div class="hp16s5Img"><img src="<?php echo $hp16s5Img['url']; ?>" alt="<?php echo $hp16s5Img['alt']; ?>"></div>
			</div>
			<?php endif; ?>
			<?php if(get_sub_field('heading') || get_sub_field('certificates')): ?>
			<div class="col-sm-12 col-md-7 hp16s5Content responsiveMargin">
				<h2 class="hp16Heading hp16s5Heading"><?php the_sub_field('heading'); ?></h2>
				<div class="hp16s5Text"><?php the_sub_field('text'); ?></div>
				<?php $hp16s5Img = get_sub_field('certificates'); ?>
				<div class="hp16s5Cert"><img src="<?php echo $hp16s5Img['url']; ?>" alt="<?php echo $hp16s5Img['alt']; ?>"></div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section6')):?>
<?php while ( have_rows('section6') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('products')):?>
<div class="hp16Section6">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 paddBottom20">
				<h2 class="hp16Heading hp16s6Heading"><?php the_sub_field('heading'); ?></h2>
			</div>
		</div>
		<div class="row cust-row text-center">
			<?php while ( have_rows('products') ) : the_row();?>
			<?php $hp16s6Img = get_sub_field('image'); ?>
			<div class="col-sm-4 paddBottom30">
				<div class="hp16s6Box">
					<div class="hp16s6Img"><a href="<?php the_sub_field('link');?>"><img src="<?php echo $hp16s6Img['url']; ?>" alt="<?php echo $hp16s6Img['alt']; ?>" ></a></div>
					<div class="hp16s6Title"><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section7')):?>
<?php while ( have_rows('section7') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('products')):?>
<div class="hp16Section7">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-7">
				<h2 class="hp16Heading hp16s7Heading"><?php the_sub_field('heading'); ?></h2>
				<?php $hp16s7Img1 = get_sub_field('review_image'); ?>
				<div class="hp16s7Box">
					<div class="hp16s7Img"><img src="<?php echo $hp16s7Img1['url']; ?>" alt="<?php echo $hp16s7Img1['alt']; ?>" ></div>
					<div class="hp16s7Content">
						<div class="hp16s7Title"><?php the_sub_field('review_title');?></div>
						<div class="hp16s7SubTitle"><?php the_sub_field('review_sub_title');?></div>
					</div>
					<div class="clearfix"></div>
					<div class="hp16s7Text"><?php the_sub_field('review_text');?></div>
				</div>
			</div>
			<div class="col-sm-12 col-md-5 text-center responsiveImg">
				<?php $hp16s7Img2 = get_sub_field('image'); ?>
				<div class="hp16s7Img2"><img src="<?php echo $hp16s7Img2['url']; ?>" alt="<?php echo $hp16s7Img2['alt']; ?>" ></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section9')):?>
<div class="hp16Section9">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12">
				<ul class="hp16s9Brands">
				<?php while ( have_rows('section9') ) : the_row();?>
					<?php $hp16s8Img = get_sub_field('image'); ?>
					<li><img src="<?php echo $hp16s8Img['url']; ?>" alt="<?php echo $hp16s8Img['alt']; ?>" ></li>
				<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>

<?php get_footer(); ?>