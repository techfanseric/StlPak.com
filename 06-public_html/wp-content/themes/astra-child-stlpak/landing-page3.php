<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: Simple Product Category
?>
<?php if( get_field('banner') ):?>
<?php while ( have_rows('banner') ) : the_row();?>
<?php if( get_sub_field('image') || get_sub_field('heading')):?>
<div class="bannerWraper categoryBanner">
    <?php $bannerImg = get_sub_field('image') ?>
	<div class="bannerImg"><img src="<?php echo $bannerImg['url']; ?>" alt="<?php echo $bannerImg['alt']; ?>" width="<?php echo $bannerImg['width']; ?>" height="<?php echo $bannerImg['height']; ?>"></div>
	<div class="container">
		<div class="row cust-row">
			<div style="background:<?php the_sub_field('overlay');?>" class="bannerContent <?php if( get_sub_field('text_alignment') == 'Left' ){echo 'text-left';}else if( get_sub_field('text_alignment') == 'Center' ){echo 'text-center';}else if( get_sub_field('text_sub_alignment') == 'Right' ){echo 'text-right';}?>">
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
<?php if(get_field('sidebar_menu') || get_field('page_heading') || get_field('page_description') || get_field('products')):?>
<div class="LP3Section1 paddTop90 paddBottom70">
	<div class="container">
		<div class="row cust-row">
			<?php if(get_field('sidebar_menu') == 1):?>
			<div class="col-sm-12 col-md-3 productMenuSection">
				<div class="productMenu"><?php echo do_shortcode('[ca-sidebar id="2133"]'); ?></div>
			</div>
			<?php endif; ?>
			<div class="col-sm-12 responsiveMargin<?php if(get_field('sidebar_menu') == 1){echo ' col-md-9';}?>">
				<div class="row <?php if( get_field('products_alignment') == 'Left' ){echo 'text-left';}else if( get_field('products_alignment') == 'Center' ){echo 'text-center';}else if( get_field('products_alignment') == 'Right' ){echo 'text-right';}?>">
					<?php if(get_field('page_heading') || get_field('page_description')):?>
					<div class="col-sm-12">
						<h1><?php the_field('page_heading');?></h1>
						<?php the_field('page_description');?>
					</div>
					<?php endif; ?>
					<?php if( get_field('products') ):?>
					<?php
					$count = 0;
					$countSM = 0;
					if(get_field('products_page')){
						$productPerPage = get_field('products_page');	
					}else{
						$productPerPage = 6;	
					}
					if( get_query_var('paged') ) {
						$page = get_query_var( 'paged' );
					} else {
						$page = 1;
					}
					$row              = 0;
					$products_per_page= $productPerPage; // How many products to display on each page
					$products         = get_field( 'products' );
					$total            = count( $products );
					$pages            = ceil( $total / $products_per_page );
					$min              = ( ( $page * $products_per_page ) - $products_per_page ) + 1;
					$max              = ( $min + $products_per_page ) - 1;
					?>
					<?php while ( have_rows('products') ) : the_row();?>
					<?php
					$row++;
					// Ignore this image if $row is lower than $min
					if($row < $min) { continue; }
					// Stop loop completely if $row is higher than $max
					if($row > $max) { break; }

					$count++; 
					$countSM++;
					?>
					<div class="col-sm-6 paddBottom30 <?php if(get_field('sidebar_menu') == 1){echo 'col-md-4';}else{echo 'col-md-4';}?>">
						<div class="c1ProductBox">
							<?php $productImg = get_sub_field('image') ?>
							<?php 
								if(get_sub_field('link')){
									$productLink = get_sub_field('link');
								}else{
									$productLink = "javascript:void(0);";
								}
							?>
							<div class="c1ProductImg"><a href="<?php echo $productLink; ?>"><img src="<?php echo $productImg['url']; ?>" alt="<?php echo $productImg['alt']; ?>" width="<?php echo $productImg['width']; ?>" height="<?php echo $productImg['height']; ?>"></a></div>
							<div class="c1ProductContent">
								<div class="c1ProductTitle paddBottom10"><a href="<?php echo $productLink; ?>"><?php the_sub_field('title');?></a></div>
								<div class="c1ProductText"><?php the_sub_field('text');?></div>
								<?php if(get_sub_field('button_text')):?>
									<div class="c1ProductBtn"><a href="<?php the_sub_field('link');?>" class="commonBtn<?php if(get_sub_field('link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
								<?php endif;?>
							</div>
						</div>
					</div>
					<?php if($count == 3 && get_field('sidebar_menu') == 0):?>
						<div class="clearfix hidden-sm"></div>
						<?php $count = 0; ?>
					<?php endif;?>
					<?php if($countSM == 2 && get_field('sidebar_menu') == 0):?>
						<div class="clearfix visible-sm"></div>
						<?php $countSM = 0; ?>
					<?php endif;?>
					<?php if($count == 3 && get_field('sidebar_menu') == 1):?>
						<div class="clearfix"></div>
						<?php $count = 0; ?>
					<?php endif;?>
					<?php
						endwhile;
						// Pagination
						echo '<div class="col-sm-12">';
						echo '<div class="pageNo text-right">';
						echo paginate_links( array(
							'base' => get_permalink() . '/page/%#%' . '/',
							'format' => '?page=%#%',
							'current' => $page,
							'total' => $pages
						));
						echo '</div>';
						echo '</div>';
					?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if(get_field('article') || get_field('faqs')):?>
<div class="articleSection ltBlueSection paddTop70 paddBottom70">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-8 productFAQs">
				<?php the_field('article');?>
				<div class="clearfix paddTop20"></div>
				<?php $count = 1; ?>
				<?php if( get_field('faqs') ):?>
				<?php while ( have_rows('faqs') ) : the_row();?>
				<div class="accordiaBox <?php if($count == 1){echo 'active';}?>">
					<div class="accordion"><?php the_sub_field('title');?></div>
					<div class="panel"><?php the_sub_field('text');?></div>
				</div>
				<?php $count++; ?>
				<?php endwhile; ?>
				<?php endif; ?>
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