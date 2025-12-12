<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: Home Page
?>

<?php echo do_shortcode('[smartslider3 slider="2"]'); ?>
<?php if( get_field('slider') || get_field('page_heading')):?>
<div class="homeSection1 paddTop70 paddBottom70">
	<div class="container">
		<div class="row cust-row rowFlex">
			<div class="col-sm-12 col-md-6">
				<ul class="homeSlider img1Slider">
					<?php while ( have_rows('slider') ) : the_row();?>
						<?php $slider_image = get_sub_field('image') ?>
						<li class="slide"><img src="<?php echo $slider_image['url']; ?>" alt="<?php echo $slider_image['alt']; ?>"></li>
					<?php endwhile; ?>
				</ul>
			</div>
			<div class="col-sm-12 col-md-6 responsiveMargin iconList">
				<h1><?php the_field('page_heading');?></h1>
				<div class="paddTop5"><?php the_field('page_details');?></div>
				<div><a href="#contactPopUpForm" class="commonBtn minwidth245 fancybox-inline">Send Your Inquiry Now</a></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if(get_field('slider2') || get_field('section_2_heading')):?>
<div class="homeSection2 darkGreySection paddTop70 paddBottom70">
	<div class="container">
		<div class="row cust-row rowFlex">
			<div class="col-sm-12 col-md-6">
				<h2><?php the_field('section_2_heading');?></h2>
				<?php the_field('section_2_details');?>
			</div>
			<div class="col-sm-12 col-md-6 responsiveMargin">
				<ul class="homeSlider img1Slider">
					<?php while ( have_rows('slider2') ) : the_row();?>
						<?php $slider_image = get_sub_field('image') ?>
						<li class="slide"><img src="<?php echo $slider_image['url']; ?>" alt="<?php echo $slider_image['alt']; ?>"></li>
					<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( have_rows('section_3_boxes') ):?>
<div class="homeSection3 paddTop70 paddBottom40">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom50">
				<h2><?php the_field('section_3_heading');?></h2>
			</div>
			<div class="clearfix"></div>
			<?php $count = 0; ?>
			<?php $countSM = 0; ?>
			<?php while ( have_rows('section_3_boxes') ) : the_row();?>
				<?php $count++; ?>
				<?php $countSM++; ?>
				<div class="col-sm-6 col-md-4 paddBottom30">
					<div class="productBox">
						<?php $productImg = get_sub_field('image') ?>
						<div class="productImg"><a href="<?php the_sub_field('link');?>"><img src="<?php echo $productImg['url']; ?>" alt="<?php echo $productImg['alt']; ?>"></a></div>
						<div class="productContent tex-left">
							<div class="productTitle paddBottom10"><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></div>
							<div class="productText"><?php the_sub_field('text');?></div>
						</div>
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
<?php if(get_field('section_4_heading') || get_field('section_4_description')):?>
<div class="homeSection4 greySection paddTop70 paddBottom70">
	<div class="container">
		<div class="row cust-row <?php if( get_field('section_4_alignment') == 'Left' ){echo 'text-left';}else if( get_field('section_4_alignment') == 'Center' ){echo 'text-center';}else if( get_field('section_4_alignment') == 'Right' ){echo 'text-right';}?>">
			<div class="col-sm-12">
				<h2><?php the_field('section_4_heading');?></h2>
				<div class="paddTop25 paddBottom80"><?php the_field('section_4_description');?></div>
				<div class="dblBtn"><a href="#contactPopUpForm" class="commonBtn fancybox-inline minwidth245">Contact With Experts</a><a href="<?php the_field('section_4_ebook_link');?>" class="commonBtn minwidth245">Request For Catalog</a></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( have_rows('section_5_boxes') ):?>
<div class="homeSection5 paddTop70 paddBottom40">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center paddBottom50">
				<h2><?php the_field('section_5_heading');?></h2>
			</div>
			<div class="clearfix"></div>
			<div class="section5Wrapper">
				<?php $count = 0; ?>
				<?php while ( have_rows('section_5_boxes') ) : the_row();?>
				<?php $count++; ?>
				<div class="col-sm-12 col-md-6">
					<div class="sec5Box">
						<?php $sec5Img = get_sub_field('image'); ?>
						<div class="sec5Img"><img src="<?php echo $sec5Img['url']; ?>" alt="<?php echo $sec5Img['alt']; ?>"></div>
						<div class="sec5Content">
							<div class="sec5Title"><?php the_sub_field('title');?></div>
							<div class="sec5Text"><?php the_sub_field('text');?></div>
						</div>
					</div>
				</div>
				<?php if($count == 2):?>
				<div class="clearfix"></div>
				<?php $count = 0; ?>
				<?php endif;?>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( have_rows('section_6_boxes') ):?>
<div class="homeSection6 greySection paddTop70 paddBottom40">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom50">
				<h2><?php the_field('section_6_heading');?></h2>
			</div>
			<div class="clearfix"></div>
			<?php while ( have_rows('section_6_boxes') ) : the_row();?>
			<div class="col-sm-12 col-md-4 paddBottom30">
				<div class="sec6Box">
					<div class="sec6Title"><?php the_sub_field('title');?></div>
					<div class="sec6Text"><?php the_sub_field('text');?></div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php $videoImg = get_field('video_image') ?>
<?php $videoLink = get_field('video_link') ?>
<?php if($videoLink != ''): ?>
<div class="videoImg"><a href="<?php echo $videoLink; ?>"><img src="<?php echo $videoImg['url']; ?>" alt="<?php echo $videoImg['alt']; ?>" width="<?php echo $videoImg['width']; ?>" height="<?php echo $videoImg['height']; ?>"></a></div>
<?php else: ?>
<div class="text-center"><img src="<?php echo $videoImg['url']; ?>" alt="<?php echo $videoImg['alt']; ?>" width="<?php echo $videoImg['width']; ?>" height="<?php echo $videoImg['height']; ?>"></div>
<?php endif; ?>
<?php if( have_rows('section_8_boxes') ):?>
<div class="homeSection8 greySection paddTop70 paddBottom40">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom50">
				<h2><?php the_field('section_8_heading');?></h2>
			</div>
			<div class="clearfix"></div>
			<?php while ( have_rows('section_8_boxes') ) : the_row();?>
			<div class="col-sm-12 col-md-4 paddBottom30">
				<div class="featuredBox">
					<?php $featuredImg = get_sub_field('image') ?>
					<div class="featuredImg"><img src="<?php echo $featuredImg['url']; ?>" alt="<?php echo $featuredImg['alt']; ?>"></div>
					<div class="featuredTitle"><?php the_sub_field('title');?></div>
					<div class="featuredText"><?php the_sub_field('text');?></div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( have_rows('accordion') || get_field('contact_form')):?>
<div class="homeContactSection paddBottom70">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-6 formSection paddTop90 paddBottom90">
				<div class="formWrapper">
					<h2><?php the_field('contact_form_heading');?></h2>
					<div class="contactForm"><?php the_field('contact_form');?></div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 faqSection paddTop75 paddBottom90">
				<div class="faqWrapper">
					<h2 class="clrWhite">FAQs</h2>
					<div class="accordionWraper">
						<?php while ( have_rows('accordion') ) : the_row();?>
						<div class="accordiaBox">
							<div class="accordion"><?php the_sub_field('title');?></div>
							<div class="panel"><?php the_sub_field('text');?></div>
						</div>
						<?php endwhile; ?>
					</div>
				</div>
			</div>	
		</div>
	</div>
</div>
<?php endif; ?>

<?php get_footer(); ?>