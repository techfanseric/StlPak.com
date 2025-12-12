<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: Language
?>

<?php if( get_field('section1')):?>
<div class="langSection1 paddTop70 paddBottom70 darkGreySection">
	<div class="container">
		<div class="row cust-row">
			<?php while ( have_rows('section1') ) : the_row();?>
			<div class="col-sm-6 col-md-4 paddBottom30">
				<div class="langs1Title"><?php the_sub_field('title'); ?></div>
				<ul class="langList">
				<?php while ( have_rows('list') ) : the_row();?>
					<?php $flagImg = get_sub_field('flag'); ?>
					<li><a href="<?php the_sub_field('link'); ?>"><img src="<?php echo $flagImg['url']; ?>" alt="<?php echo $flagImg['alt']; ?>"><span class="langTitle"><?php the_sub_field('name'); ?></span></a></li>
				<?php endwhile; ?>
				</ul>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>

<?php get_footer(); ?>