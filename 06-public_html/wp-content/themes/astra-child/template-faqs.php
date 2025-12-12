<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: FAQs
?>

<?php if( get_field('banner') ):?>
<?php while ( have_rows('banner') ) : the_row();?>
<?php if( get_sub_field('image') || get_sub_field('heading')):?>
<div class="bannerWraper categoryBanner">
    <?php $bannerImg = get_sub_field('image') ?>
	<div class="bannerImg"><img src="<?php echo $bannerImg['url']; ?>" alt="<?php echo $bannerImg['alt']; ?>" width="<?php echo $bannerImg['width']; ?>" height="<?php echo $bannerImg['height']; ?>"></div>
	<div class="container">
		<div class="row cust-row">
			<div style="background:<?php the_sub_field('overlay');?>" class="bannerContent<?php if(get_sub_field('overlay')){echo ' bannerOverlay';}?> <?php if( get_sub_field('text_alignment') == 'Left' ){echo 'text-left';}else if( get_sub_field('text_alignment') == 'Center' ){echo 'text-center';}else if( get_sub_field('text_sub_alignment') == 'Right' ){echo 'text-right';}?>">
				<div class="bannerHeading" style="color:<?php the_sub_field('heading_color');?>"><?php the_sub_field('heading');?></div>
				<?php if(get_sub_field('button_text')):?>
				<div class="bannerBtn"><a href="#contactPopUpForm" class="commonBtn fancybox-inline"><?php the_sub_field('button_text');?></a></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('faqs_section') ):?>
<div class="tempFAQsPage paddTop70">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-8">
				<div class="serchPalette paddBottom30">
					<form><input type="text" name="search" id="search" placeholder="Search FAQs..."></form>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-12 col-md-8">
			<?php $count = 1; ?>
			<?php while ( have_rows('faqs_section') ) : the_row();?>
			<div class="tempFAQsSection paddBottom50">
				<h2 id="faq<?php echo $count;?>"><?php the_sub_field('heading');?></h2>
				<div class="clearfix"></div>
				<?php if( get_sub_field('faqs') ):?>
				<div class="tempFAQs">
					<?php while ( have_rows('faqs') ) : the_row();?>
					<div class="accordiaBox">
						<div class="accordion"><?php the_sub_field('title');?></div>
						<div class="panel"><?php the_sub_field('text');?></div>
					</div>
					<?php endwhile; ?>
				</div>
				<?php endif; ?>
			</div>
			<?php $count++; ?>
			<?php endwhile; ?>
			</div>
			<div class="col-sm-12 col-md-4">
				<div class="tempFAQsSidebar divScroll">
					<h3>On this page</h3>
					<ol>
					<?php $counter = 1; ?>
					<?php while ( have_rows('faqs_section') ) : the_row();?>
						<li><a href="#faq<?php echo $counter; ?>"><?php the_sub_field('heading');?></a></li>
						<?php $counter++ ?>
					<?php endwhile; ?>
					</ol>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<div class="clearfix paddBottom50"></div>

<?php get_footer(); ?>