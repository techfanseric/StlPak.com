<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: About Us 2
?>

<?php if(get_field('banner_image')): ?>
<div class="about2Banner bannerWraper">
	<?php $bannerImg = get_field('banner_image') ?>
	<div class="bannerImg"><img src="<?php echo $bannerImg['url']; ?>" alt="<?php echo $bannerImg['alt']; ?>"></div>
	<div class="container">
		<div class="row">
			<div class="bannerContent text-center">
				<div class="bannerHeading" style="color:<?php the_field('banner_heading_color');?>"><?php the_field('banner_heading');?></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('section_1_heading') || get_field('section_1_boxes') ):?>
<div class="about2Section1 paddTop90 paddBottom90">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom20">
				<h1><?php the_field('section_1_heading');?></h1>
			</div>
			<?php if( get_field('section_1_boxes') ):?>
			<div class="clearfix"></div>
			<div class="about2Sec1Wrapper">
				<?php while ( have_rows('section_1_boxes') ) : the_row();?>
				<?php $counter++;?>
				<div class="col-sm-6 col-md-3 paddBottom30 about2SecBoxWrapper about2SecBoxWrapper<?php echo $counter;?>">
					<div class="about2SecBox about2SecBox<?php echo $counter;?>">
						<div class="about2SecTitle"><?php the_sub_field('title');?></div>
						<div class="about2SectText"><?php the_sub_field('text');?></div>
					</div>
				</div>
				<?php endwhile; ?>
				<div class="clearfix"></div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('section_2_heading') || get_field('section_2_details') ):?>
<div class="about2Section2 paddBottom90">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 <?php if( get_field('section_2_alignment') == 'Left' ){echo 'text-left';}else if( get_field('section_2_alignment') == 'Center' ){echo 'text-center';}else if( get_field('section_2_alignment') == 'Right' ){echo 'text-right';}?>">
				<h2><?php the_field('section_2_heading');?></h2>
				<?php the_field('section_2_details');?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('timelineSection') ):?>
<div class="about2Timeline paddBottom90">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 text-center paddBottom60">
				<h2><?php the_field('timeline_heading');?></h2>
			</div>
			<div class="clearfix"></div>
			<div class="timelineWrapper">
				<?php $counter = 0;?>
				<?php while ( have_rows('timelineSection') ) : the_row();?>
				<?php $counter++;?>
				<?php if($counter%2 != 0) : ?>
				<div class="row">
					<div class="col-sm-12 col-md-6">
						<div class="timelineBox timelineBoxLeft">
							<div class="timelineTitle"><?php the_sub_field('title');?></div>
							<div class="timelineText"><?php the_sub_field('text');?></div>
						</div>
					</div>
				</div>
				<?php else : ?>
				<div class="row">
					<div class="col-sm-12 col-md-6 col-md-offset-6">
						<div class="timelineBox timelineBoxRight">
							<div class="timelineTitle"><?php the_sub_field('title');?></div>
							<div class="timelineText"><?php the_sub_field('text');?></div>
						</div>
					</div>
				</div>
				<?php endif;?>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php $counter = 1; ?>
<?php if( get_field('section4') ):?>
<?php while ( have_rows('section4') ) : the_row();?>
<div class="pc3RepeatSection paddTop75 paddBottom75 <?php if($counter%2 == 1){echo 'greySection';} ?>">
	<div class="container container1320">
		<div class="row cust-row rowFlex">
			<?php if($counter%2 == 1) : ?>
			<div class="col-sm-12 col-md-6">
				<h2><?php the_sub_field('section3_heading');?></h2>
				<?php the_sub_field('section3_details');?>
				<?php if(get_sub_field('button_text')):?>
					<div><a href="<?php the_sub_field('button_link');?>" class="commonBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
				<?php endif; ?>
			</div>
			<?php endif; ?>
			<div class="col-sm-12 col-md-6 <?php if($counter%2 == 1){echo "responsiveMargin"; }?>">
				<?php $section3Img = get_sub_field('section3_image') ?>
				<?php $videoLink = get_sub_field('video_link') ?>
				<?php if($videoLink != ''): ?>
				<div class="videoImg"><a href="<?php echo $videoLink; ?>"><img src="<?php echo $section3Img['url']; ?>" alt="<?php echo $section3Img['alt']; ?>" width="<?php echo $section3Img['width']; ?>" height="<?php echo $section3Img['height']; ?>"></a></div>
				<?php else: ?>
				<div class="pc3Section3img"><img src="<?php echo $section3Img['url']; ?>" alt="<?php echo $section3Img['alt']; ?>" width="<?php echo $section3Img['width']; ?>" height="<?php echo $section3Img['height']; ?>"></div>
				<?php endif; ?>
			</div>
			<?php if($counter%2 == 0) : ?>
			<div class="col-sm-12 col-md-6 responsiveMargin">
				<h2><?php the_sub_field('section3_heading');?></h2>
				<?php the_sub_field('section3_details');?>
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
<?php if( get_field('section_5_boxes') ):?>
<div class="au2ProductSection greySection paddTop70 paddBottom40">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom40">
				<h2><?php the_field('section_5_heading');?></h2>
			</div>
			<div class="clearfix"></div>
			<?php $count = 0; ?>
			<?php $countSM = 0; ?>
			<?php while ( have_rows('section_5_boxes') ) : the_row();?>
			<?php $count++; ?>
			<?php $countSM++; ?>
			<div class="col-sm-6 col-md-4 paddBottom30">
				<div class="MThomeProductBox">
					<?php $productImg = get_sub_field('image') ?>
					<div class="MThomeProductImg"><a href="<?php the_sub_field('link');?>"><img src="<?php echo $productImg['url']; ?>" alt="<?php echo $productImg['alt']; ?>" class="img-responsive"></a></div>
					<div class="MThomeProductTitle text-left"><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></div>
					<div class="MThomeProductText text-left"><?php the_sub_field('text');?></div>
				</div>
			</div>
			<?php if($count == 3):?>
			<div class="clearfix hidden-sm"></div>
			<?php $count = 0; ?>
			<?php endif;?>
			<?php if($countSM == 2):?>
			<div class="clearfix visible-sm"></div>
			<?php $countSM = 0; ?>
			<?php endif;?>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('section_7_images') ):?>
<div class="about2Section7 paddTop70 paddBottom40">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom30">
				<h2><?php the_field('section_7_heading');?></h2>
			</div>
			<div class="clearfix"></div>
			<?php $count = 0; ?>
			<?php $countSM = 0; ?>
			<?php while ( have_rows('section_7_images') ) : the_row();?>
				<?php $count++; ?>
				<?php $countSM++; ?>
				<div class="col-sm-12 col-md-4 paddBottom30">
					<?php $about2Sec7Img = get_sub_field('image') ?>
					<div class="about2Sec7Img"><img src="<?php echo $about2Sec7Img['url']; ?>" alt="<?php echo $about2Sec7Img['alt']; ?>" class="img-responsive"></div>
				</div>
				<?php if($count == 3): ?>
					<div class="clearfix hidden-sm"></div>
					<?php $count = 0; ?>
				<?php endif; ?>
				<?php if($countSM == 2): ?>
					<div class="clearfix visible-sm"></div>
					<?php $countSM = 0; ?>
				<?php endif; ?>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('section_8_heading') ):?>
<div class="about2Section8 blueSection paddTop50 paddBottom50">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12">
				<h2 class="clrWhite"><?php the_field('section_8_heading');?></h2>
				<div class="paddTop20"><a href="#contactPopUpForm" class="commonBtn whiteBtn minwidth245 fancybox-inline">Get a Quick Quote</a></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>

<?php get_footer(); ?>