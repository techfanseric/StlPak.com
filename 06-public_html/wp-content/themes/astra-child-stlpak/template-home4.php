<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: Home 4
?>

<!-- 暂时不显示滑块 -->
<!-- <div style="display: none;"><?php echo do_shortcode('[smartslider3 slider="2"]'); ?></div> -->
<?php if(get_field('section1_heading') || get_field('section1_text')):?>
<div class="hp4Section1 paddTop90 paddBottom70">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12">
				<h1><?php the_field('section1_heading');?></h1>
				<?php the_field('section1_text');?>
				<div class="textLink"><a href="<?php the_field('section1_link');?>">Read More &gt;&gt;</a></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if(get_field('section2_heading') || get_field('section2_slider')):?>
<div class="hp4Section2 paddTop80 paddBottom60" style="background-image: url(<?php the_field('section2_background');?>);">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-6">
				<h3><?php the_field('section2_heading');?></h3>
				<?php the_field('section2_text');?>
				<div class="paddTop20"><a href="#contactPopUpForm" class="commonBtn fancybox-inline">Send Your Requirement &gt;&gt;</a></div>
			</div>
			<div class="col-sm-12 col-md-6 responsiveMargin">
				<ul class="hp4Slider img1Slider">
					<?php while ( have_rows('section2_slider') ) : the_row();?>
						<?php $slider_image = get_sub_field('image') ?>
						<li class="slide"><img src="<?php echo $slider_image['url']; ?>" alt="<?php echo $slider_image['alt']; ?>"></li>
					<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('products') ):?>
<div class="hp4Products paddTop90 paddBottom60">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12">
				<h2><?php the_field('product_heading');?></h2>
				<?php the_field('product_text');?>
			</div>
			<?php $count = 0; ?>
			<?php $countSM = 0; ?>
			<?php while ( have_rows('products') ) : the_row();?>
				<?php $count++; ?>
				<?php $countSM++; ?>
				<div class="col-sm-6 col-md-3 paddBottom30">
					<?php $productImg = get_sub_field('image') ?>
					<div class="hp4ProductBox">
						<div class="hp4Image"><a href="<?php the_sub_field('link');?>"><img src="<?php echo $productImg['url']; ?>" alt="<?php echo $productImg['alt']; ?>"></a></div>
						<div class="hp4Title"><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></div>
					</div>
				</div>
				<?php if($count == 4):?>
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
<?php endif;?>
<?php if( get_field('search_bar_heading') ):?>
<div class="hp4SearchBar paddTop80 paddBottom80">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-6">
				<div class="searchTitle clrWhite"><?php the_field('search_bar_heading');?></div>
			</div>
			<div class="col-sm-12 col-md-6">
				<?php echo do_shortcode('[astra_search style="inline"]'); ?>
			</div>
		</div>
	</div>
</div>
<?php endif;?>
<?php if( get_field('section3_video_image') || get_field('section3_heading') || get_field('section3_text') ):?>
<div class="hp4Section3 paddTop90 paddBottom90">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-6">
				<?php $videoImg = get_field('section3_video_image') ?>
				<div class="videoImg hp4Video"><a href="<?php the_field('section3_video_link');?>?popoverlay=true&autoplay=1"><img src="<?php echo $videoImg['url']; ?>" alt="<?php echo $videoImg['alt']; ?>"></a></div>
			</div>
			<div class="col-sm-12 col-md-6 responsiveMargin">
				<h3><?php the_field('section3_heading');?></h3>
				<?php the_field('section3_text');?>
				<div class="paddTop20"><a href="#contactPopUpForm" class="commonBtn fancybox-inline">Send Your Requirement &gt;&gt;</a></div>
			</div>
		</div>
	</div>
</div>
<?php endif;?>
<?php if( get_field('process') ):?>
<div class="hp4Process greySection paddTop90 paddBottom60">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom30">
				<h2 class="fs36"><?php the_field('process_heading');?></h2>
				<?php the_field('process_text');?>
			</div>
			<?php $count = 0; ?>
			<?php $countSM = 0; ?>
			<?php while ( have_rows('process') ) : the_row();?>
				<?php $count++; ?>
				<?php $countSM++; ?>
				<div class="col-sm-6 col-md-4 paddBottom30">
					<?php $productImg = get_sub_field('image') ?>
					<div class="hp4ProcessBox">
						<div class="hp4Title"><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></div>
						<div class="hp4Image"><a href="<?php the_sub_field('link');?>"><img src="<?php echo $productImg['url']; ?>" alt="<?php echo $productImg['alt']; ?>"></a></div>
						<div class="hp4Text"><?php the_sub_field('text');?></div>
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
<?php endif;?>
<?php if( get_field('section4_slider') || get_field('section4_heading')):?>
<div class="hp4Section4 paddTop90 paddBottom90">
	<div class="container">
		<div class="row cust-row">
			<div class="hp4SliderBox hp4QualityBox">
				<div class="col-sm-12 col-md-6">
					<ul class="hp4Slider img1Slider">
						<?php while ( have_rows('section4_slider') ) : the_row();?>
							<?php $slider_image = get_sub_field('image') ?>
							<li class="slide"><img src="<?php echo $slider_image['url']; ?>" alt="<?php echo $slider_image['alt']; ?>"></li>
						<?php endwhile; ?>
					</ul>
				</div>
				<div class="col-sm-12 col-md-6">
					<div class="hp4SliderBoxDetails">
						<h3 class="clrWhite"><?php the_field('section4_heading');?></h3>
						<?php the_field('section4_text');?>
						<div class="paddTop30"><a href="#contactPopUpForm" class="commonBtn fancybox-inline whiteBtn">Send Your Inquiry Now &gt;&gt;</a></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
<?php endif;?>
<?php if( get_field('section5_slider') || get_field('section5_heading') || get_field('section5_text') ):?>
<div class="hp4Section5 paddBottom90">
	<div class="container">
		<div class="row cust-row">
			<div class="hp4SliderBox hp4TradeShowBox">
				<div class="col-sm-12 col-md-6">
					<ul class="hp4Slider img1Slider">
						<?php while ( have_rows('section5_slider') ) : the_row();?>
							<?php $slider_image = get_sub_field('image') ?>
							<li class="slide"><img src="<?php echo $slider_image['url']; ?>" alt="<?php echo $slider_image['alt']; ?>"></li>
						<?php endwhile; ?>
					</ul>
				</div>
				<div class="col-sm-12 col-md-6">
					<div class="hp4SliderBoxDetails">
						<h3><?php the_field('section5_heading');?></h3>
						<?php the_field('section5_text');?>
						<div class="paddTop30"><a href="#contactPopUpForm" class="commonBtn fancybox-inline">Book a Visit for Next Trade Show &gt;&gt;</a></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
<?php endif;?>
<?php if( get_field('team') ):?>
<div class="hp4TeamSection paddTop90 paddBottom60">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom20">
				<h3 class="clrOrange"><?php the_field('team_heading');?></h3>
				<div class="hp4TeamDesc"><?php the_field('team_text');?></div>
			</div>		
			<?php $count = 1;?>
			<?php while ( have_rows('team') ) : the_row();?>
				<div class="col-sm-12 col-md-4 hp4Team<?php echo $count; ?> paddBottom30">
					<?php $teamImg = get_sub_field('image') ?>
					<div class="hp4TeamBox">
						<div class="hp4TeamImg"><img src="<?php echo $teamImg['url']; ?>" alt="<?php echo $teamImg['alt']; ?>"></div>
						<div class="hp4TeamTitle"><?php the_sub_field('title');?></div>
						<div class="hp4TeamText"><?php the_sub_field('text');?></div>
					</div>
				</div>
				<?php $count++; ?>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif;?>
<?php if( get_field('contact_form') || get_field('video_image') || get_field('ceo_note') ):?>
<div class="hp4Section6 paddBottom90">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-6">
				<div class="hp4ContactForm">
					<h3><?php the_field('contact_form_heading');?></h3>
					<?php the_field('contact_form');?>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 responsiveMargin">
				<?php $videoImg = get_field('video_image') ?>
				<div class="videoImg hp4Video"><a href="<?php the_field('video_link');?>?popoverlay=true&autoplay=1"><img src="<?php echo $videoImg['url']; ?>" alt="<?php echo $videoImg['alt']; ?>"></a></div>
				<div class="hp4VideoText"><?php the_field('ceo_note');?></div>
				<div class="hp4CEO clrBlue"><?php the_field('ceo_name');?></div>
				<div class="text-center"><a href="mailto:<?php the_field('ceo_email');?>" class="textLink"></>Email Me Now &gt;&gt;</a></div>
			</div>
		</div>
	</div>
</div>
<?php endif;?>

<?php get_footer(); ?>