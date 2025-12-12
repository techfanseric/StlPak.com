<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: Video
?>

<?php if(get_field('banner_image') || get_field('banner_heading')):?>
<div class="bannerWraper videoBanner">
    <?php $bannerImg = get_field('banner_image') ?>
	<div class="bannerImg"><img src="<?php echo $bannerImg['url']; ?>" alt="<?php echo $bannerImg['alt']; ?>" width="<?php echo $bannerImg['width']; ?>" height="<?php echo $bannerImg['height']; ?>"></div>
	<div class="container">
		<div class="row">
			<div class="bannerContent text-center">
				<h1 class="bannerHeading"><?php the_field('banner_heading');?></h1>
				<?php if(get_field('banner_button') == 0):?>
				<div class="bannerBtn paddTop10"><a href="#contactPopUpForm" class="commonBtn fancybox-inline minwidth215">Get A Free Quote</a></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<div class="videoSection1 paddTop70 paddBottom70">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 <?php if( get_field('text_alignment') == 'Left' ){echo 'text-left';}else if( get_field('text_alignment') == 'Center' ){echo 'text-center';}else if( get_field('text_alignment') == 'Right' ){echo 'text-right';}?>">
				<h2><?php the_field('page_heading');?></h2>
				<?php the_field('page_text');?>
			</div>
		</div>
	</div>
</div>
<?php $counter = 1; ?>
<?php if( have_rows('video_section') ):?>
<?php while ( have_rows('video_section') ) : the_row();?>
<div class="videoSection2 paddTop70 paddBottom40 <?php if(($counter%2) == 1){echo 'greySection';}?>">
	<div class="container">
		<div class="row paddBottom10">
			<h2><?php the_sub_field('heading');?></h2>
		</div>
		<?php if( have_rows('video') ):?>
		<div class="row cust-row text-center">
			<?php  $count = 0; ?>
			<?php  $countSM = 0; ?>
			<?php while ( have_rows('video') ) : the_row();?>
				<?php  $count++; ?>
				<?php  $countSM++; ?>
				<div class="col-sm-6 col-md-4 paddBottom30 <?php if( get_field('align') == 'Left' ){echo 'text-left';}else if( get_field('align') == 'Center' ){echo 'text-center';}else if( get_field('align') == 'Right' ){echo 'text-right';}?>">
					<div class="videoSection2Box">
						
						<?php $videoImg = get_sub_field('video_image') ?>
						<?php $videoLink = get_sub_field('link');?>
						<?php if($videoLink != ''): ?>
							<div class="videoImg"><a href="<?php echo $videoLink; ?>"><img src="<?php echo $videoImg['url']; ?>" alt="<?php echo $videoImg['alt']; ?>" width="<?php echo $videoImg['width']; ?>" height="<?php echo $videoImg['height']; ?>"></a></div>
						<?php else: ?>
							<div class="pc3Section4img"><img src="<?php echo $videoImg['url']; ?>" alt="<?php echo $videoImg['alt']; ?>" width="<?php echo $videoImg['width']; ?>" height="<?php echo $videoImg['height']; ?>"></div>
						<?php endif; ?>
						<div class="videoSection2Title fw600"><?php the_sub_field('title');?></div>
						<div class="videoSection2Text"><?php the_sub_field('text');?></div>
					</div>
				</div>
				<?php if($count == 3): ?>
					<div class="clearfix hidden-sm"></div>
				<?php endif; ?>
				<?php if($countSM == 2): ?>
					<div class="clearfix visible-sm"></div>
				<?php endif; ?>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
	</div>
</div>
<?php $counter++; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if(get_field('article')):?>
<div class="articleSection paddTop70 paddBottom40">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-8">
				<?php the_field('article');?>
			</div>
			<div class="col-sm-12 col-md-4">
				 <div class="quickQuote divScroll">
                	<div class="quickQuoteTitle paddBottom5"><?php the_field('contact_form_heading');?></div>
                    <?php the_field('contact_form');?>
                </div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>

<?php get_footer(); ?>