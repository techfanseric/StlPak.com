<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: About Us 5
?>

<?php if(get_field('banner_image') || get_field('page_heading') || get_field('page_description')):?>
<?php $bannerImg = get_field('banner_image') ?>
<div class="au5Banner"><img src="<?php echo $bannerImg['url']; ?>" alt="<?php echo $bannerImg['alt']; ?>" class="img-responsive"></div>
<div class="au5Section1 paddTop80 paddBottom70">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12">
				<h1><?php the_field('page_heading');?></h1>
				<div class="au5sectionText"><?php the_field('page_description');?></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( have_rows('timeline') ):?>
<div class="au5TimelineSection paddBottom70">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12">
				<ul class="timelineSlider">
					<?php $counter = 1; ?>
					<?php while ( have_rows('timeline') ) : the_row();?>
						<?php $au5TimelineImg = get_sub_field('image'); ?>
						<?php if($counter%2 == 0):?>
							<li class="au5TimelineBox imgUpper">
								<div class="au5TimelineImg"><img src="<?php echo $au5TimelineImg['url'];?>" alt="<?php echo $au5TimelineImg['alt'];?>"></div>
								<div class="au5TimelineYear"><?php the_sub_field('title');?></div>
								<div class="au5TimelineText"><?php the_sub_field('text');?></div>
							</li>
						<?php else:?>
							<li class="au5TimelineBox imgLower">
								<div class="au5TimelineYear"><?php the_sub_field('title');?></div>
								<div class="au5TimelineText"><?php the_sub_field('text');?></div>
								<div class="au5TimelineImg"><img src="<?php echo $au5TimelineImg['url'];?>" alt="<?php echo $au5TimelineImg['alt'];?>"></div>
							</li>
						<?php endif; ?>
						<?php $counter++; ?>
					<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if(get_field('video_image') || get_field('video_heading') || get_field('video_description')):?>
<div class="au5videoSection paddTop90 paddBottom90">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-6">
				<?php $video1Img = get_field('video_image') ?>
				<div class="h5videoBox"><a href="<?php the_field('video_link');?>"><img src="<?php echo $video1Img['url']; ?>" alt="<?php echo $video1Img['alt']; ?>" class="img-responsive"></a></div>
			</div>
			<div class="col-sm-12 col-md-6 responsiveMargin">
				<h2><?php the_field('video_heading');?></h2>
				<?php the_field('video_description');?>
				<div><a href="#contactPopUpForm" class="commonBtn fancybox-inline">Contact Our Support Team</a></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if(get_field('team_boxes') ):?>
<div class="h5productHeading au5teamHeading text-center">
	<h2><?php the_field('team_heading');?></h2>
</div>
<div class="au5TeamSection paddTop40 paddBottom90">
	<div class="container">
		<div class="row cust-row">
			<?php $count = 0;?>
			<?php while ( have_rows('team_boxes') ) : the_row();?>
				<?php $count++;?>
				<div class="col-sm-12 col-md-6 paddBottom30">
					<div class="au5TeamBox">
						<?php $teamImg = get_sub_field('image') ?>
						<div class="au5teamImg"><img src="<?php echo $teamImg['url']; ?>" alt="<?php echo $teamImg['alt']; ?>" class="img-responsive"></div>
						<div class="au5teamContent">
							<div class="au5teamTitle"><?php the_sub_field('title');?></div>
							<div class="au5teamText paddTop15"><?php the_sub_field('text');?></div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<?php if($count == 2):?>
					<div class="clearfix"></div>
					<?php $count = 0;?>
				<?php endif; ?>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if(get_field('contact_form')):?>
<div class="au5contactSection greySection paddTop70 paddBottom70">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom30">
				<h2><?php the_field('contact_heading');?></h2>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-12">
				<div class="fsContactForm contactFormBtn au5contactForm"><?php the_field('contact_form');?></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>

<?php get_footer(); ?>