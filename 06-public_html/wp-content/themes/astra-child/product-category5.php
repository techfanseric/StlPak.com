<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: Product Category 5
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
<div class="pc5Wrapper">
<?php if(get_field('scroll_links')): ?>
<div class="pc5ScrollSection">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 pc5ssContent">
				<?php $counter = 1; ?>
				<ul>
					<?php while (have_rows('scroll_links')) : the_row();?>
						<li><a href="#pc5Section<?php echo $counter; ?>"><?php the_sub_field('title');?></a></li>
						<?php $counter++; ?>
					<?php endwhile; ?>
					<li class="scrollTop"><a href="#masthead">Top</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if(get_field('section1')): ?>
<?php while ( have_rows('section1') ) : the_row();?>
<?php if(get_sub_field('title') || get_sub_field('text')): ?>
<div id="pc5Section1" class="pc5Section1 paddTop75 paddBottom65">
	<div class="container">
		<div class="row cust-row <?php if( get_sub_field('text_alignment') == 'Left' ){echo 'text-left';}else if( get_sub_field('text_alignment') == 'Center' ){echo 'text-center';}else if( get_sub_field('text_alignment') == 'Right' ){echo 'text-right';}?>">
			<div class="col-sm-12">
				<h2><?php the_sub_field('title');?></h2>
				<div class="section1Text"><?php the_sub_field('text');?></div>
				<?php if(get_sub_field('readmore_text')):?>
					<div class="readMoreText section1Text2"><?php the_sub_field('readmore_text');?></div>
					<div class="readmoreBtn">Read More</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php $counter = 1; ?>
<?php if( get_field('section2') ):?>
<?php while ( have_rows('section2') ) : the_row();?>
<?php if( get_sub_field('products') ):?>
<div id="pc5Section2" class="pc5SliderSection1 paddBottom40">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 paddBottom30">
				<?php $totalProduct = count(get_sub_field('products')); ?>
				<h2><?php the_sub_field('heading');?> <span class="pc3sProductCount">(<?php echo $totalProduct; ?>)</span></h2>
			</div>
		</div>
		<div class="row cust-row">
			<ul class="pc3ProductSlider">
				<?php while ( have_rows('products') ) : the_row();?>
					<?php $productImg = get_sub_field('image') ?>
					<?php 
						if(get_sub_field('link')){
							$productLink = get_sub_field('link');
						}else{
							$productLink = "javascript:void(0);";
						}
					?>
					<li class="slide">
						<div class="c1ProductBox <?php if( get_sub_field('products_alignment') == 'Left' ){echo 'text-left';}else if( get_sub_field('products_alignment') == 'Center' ){echo 'text-center';}else if( get_sub_field('products_alignment') == 'Right' ){echo 'text-right';}?>">
							<div class="c1ProductImg"><a href="<?php echo $productLink; ?>"><img src="<?php echo $productImg['url']; ?>" alt="<?php echo $productImg['alt']; ?>" width="<?php echo $productImg['width']; ?>" height="<?php echo $productImg['height']; ?>"></a></div>
							<div class="c1ProductContent">
								<div class="c1ProductTitle paddBottom10"><a href="<?php echo $productLink; ?>"><?php the_sub_field('title');?></a></div>
								<div class="c1ProductText"><?php the_sub_field('text');?></div>
								<div class="c1ProductBtn"><a href="#contactPopUpForm" class="fancybox-inline">Send Inquiry Now</a></div>
							</div>
						</div>
					</li>
				<?php endwhile; ?>
			</ul>
		</div>
	</div>
</div>
<?php endif; ?>
<?php $counter++; ?>
<?php endwhile; ?>
<?php endif;?>
<?php if( get_field('section3') ):?>
<?php while ( have_rows('section3') ) : the_row();?>
<?php if( get_sub_field('product_section') ):?>
<div id="pc5Section3" class="pc5SliderSection2 paddTop70 paddBottom40 pc5BG">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12">
				<h2><?php the_sub_field('heading');?></h2>
				<div><?php the_sub_field('text');?></div>
			</div>
		</div>
		<?php while ( have_rows('product_section') ) : the_row();?>
			<div class="row cust-row paddTop40">
				<div class="col-sm-12 paddBottom20">
					<?php $totalProduct = count(get_sub_field('products')); ?>
					<h3><?php the_sub_field('title');?> <span class="pc3sProductCount">(<?php echo $totalProduct; ?>)</span></h3>
				</div>
			</div>
			<?php if( get_sub_field('products') ):?>
			<div class="row cust-row">
				<ul class="pc3ProductSlider">
					<?php while ( have_rows('products') ) : the_row();?>
						<?php $productImg = get_sub_field('image') ?>
						<?php 
							if(get_sub_field('link')){
								$productLink = get_sub_field('link');
							}else{
								$productLink = "javascript:void(0);";
							}
						?>
						<li class="slide">
							<div class="c1ProductBox <?php if( get_sub_field('products_alignment') == 'Left' ){echo 'text-left';}else if( get_sub_field('products_alignment') == 'Center' ){echo 'text-center';}else if( get_sub_field('products_alignment') == 'Right' ){echo 'text-right';}?>">
								<div class="c1ProductImg"><a href="<?php echo $productLink; ?>"><img src="<?php echo $productImg['url']; ?>" alt="<?php echo $productImg['alt']; ?>" width="<?php echo $productImg['width']; ?>" height="<?php echo $productImg['height']; ?>"></a></div>
								<div class="c1ProductContent">
									<div class="c1ProductTitle paddBottom10"><a href="<?php echo $productLink; ?>"><?php the_sub_field('title');?></a></div>
									<div class="c1ProductText"><?php the_sub_field('text');?></div>
									<div class="c1ProductBtn"><a href="#contactPopUpForm" class="fancybox-inline">Send Inquiry Now</a></div>
								</div>
							</div>
						</li>
					<?php endwhile; ?>
				</ul>
			</div>
			<?php endif; ?>
		<?php endwhile; ?>
	</div>
</div>
<?php $counter++; ?>
<?php endif;?>
<?php endwhile; ?>
<?php endif;?>
<?php if( get_field('section4') ):?>
<?php while ( have_rows('section4') ) : the_row();?>
<?php if( get_sub_field('products') ):?>
<div id="pc5Section4" class="pc5Section4 paddTop70">
	<div class="container">
		<div class="row cust-row <?php if( get_sub_field('products_alignment') == 'Left' ){echo 'text-left';}else if( get_sub_field('products_alignment') == 'Center' ){echo 'text-center';}else if( get_sub_field('products_alignment') == 'Right' ){echo 'text-right';}?>">
			<div class="col-sm-12 paddBottom30 text-center">
				<h2><?php the_sub_field('heading');?></h2>
			</div>
			<div class="clearfix"></div>
			<?php
				$count = 0;
				$countSM = 0;

				if(get_sub_field('products_per_page')){
					$productPerPage = get_sub_field('products_per_page');	
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
				$products         = get_sub_field( 'products' );
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
				<?php $productImg = get_sub_field('image'); ?>
				<?php 
					if(get_sub_field('link')){
						$productLink = get_sub_field('link');
					}else{
						$productLink = "javascript:void(0);";
					}
				?>
				<div class="col-sm-6 col-md-4 paddBottom30">
					<div class="c1ProductBox">
						<div class="c1ProductImg"><a href="<?php echo $productLink; ?>"><img src="<?php echo $productImg['url']; ?>" alt="<?php echo $productImg['alt']; ?>" width="<?php echo $productImg['width']; ?>" height="<?php echo $productImg['height']; ?>"></a></div>
						<div class="c1ProductContent">
							<div class="c1ProductTitle paddBottom10"><a href="<?php echo $productLink; ?>"><?php the_sub_field('title');?></a></div>
							<div class="c1ProductText"><?php the_sub_field('text');?></div>
							<div class="c1ProductBtn"><a href="#contactPopUpForm" class="fancybox-inline">Send Inquiry Now</a></div>
						</div>
					</div>
				</div>
				<?php if($countSM == 2):?>
					<div class="clearfix visible-sm"></div>
					<?php $countSM = 0; ?>
				<?php endif; ?>
				<?php if($count == 3):?>
					<div class="clearfix hidden-sm"></div>
					<?php $count = 0; ?>
				<?php endif; ?>
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
		</div>
	</div>
</div>
<?php endif;?>
<?php endwhile; ?>
<?php endif;?>
<?php if( get_field('section5') ):?>
<?php while ( have_rows('section5') ) : the_row();?>
<?php if( get_sub_field('text_section') ):?>
<div id="pc5Section5" class="pc5Section5 paddTop40">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 paddBottom30">
				<h2><?php the_sub_field('heading');?></h2>
			</div>
		</div>
		<?php $counter = 1; ?>
		<?php while ( have_rows('text_section') ) : the_row();?>
			<div class="row cust-row rowFlexEnd paddBottom70">
				<?php if($counter%2 == 1) : ?>
				<div class="col-sm-12 col-md-6 col-lg-5">
					<div class="pc5s5Content pc5s5ContentRight">
						<div class="pc5s5SubTitle"><?php the_sub_field('category');?></div>
						<div class="pc5s5Title"><?php the_sub_field('title');?></div>
						<div class="pc5s5Text"><?php the_sub_field('text');?></div>
					</div>
				</div>
				<?php endif; ?>
				<div class="col-sm-12 col-md-6 col-lg-7 <?php if($counter%2 == 1){echo "responsiveMargin"; }?>">
					<?php $pc5s5Img = get_sub_field('image') ?>
					<?php $videoLink = get_sub_field('video_link') ?>
					<?php if($videoLink != ''): ?>
						<div class="videoImg"><a href="<?php echo $videoLink; ?>"><img src="<?php echo $pc5s5Img['url']; ?>" alt="<?php echo $pc5s5Img['alt']; ?>" width="<?php echo $pc5s5Img['width']; ?>" height="<?php echo $pc5s5Img['height']; ?>"></a></div>
					<?php else: ?>
						<div class="pc5s5Img"><img src="<?php echo $pc5s5Img['url']; ?>" alt="<?php echo $pc5s5Img['alt']; ?>" width="<?php echo $pc5s5Img['width']; ?>" height="<?php echo $pc5s5Img['height']; ?>"></div>
					<?php endif; ?>
				</div>
				<?php if($counter%2 == 0) : ?>
				<div class="col-sm-12 col-md-6 col-lg-5 responsiveMargin">
					<div class="pc5s5Content pc5s5ContentLeft">
						<div class="pc5s5SubTitle"><?php the_sub_field('category');?></div>
						<div class="pc5s5Title"><?php the_sub_field('title');?></div>
						<div class="pc5s5Text"><?php the_sub_field('text');?></div>
					</div>
				</div>
				<?php endif; ?>
			</div>
			<?php $counter++; ?>
		<?php endwhile; ?>
	</div>
</div>
<?php endif;?>
<?php endwhile; ?>
<?php endif;?>
<?php if( get_field('section6') ):?>
<?php while ( have_rows('section6') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('gallery') ):?>
<div id="pc5Section6" class="pc5GallerySection paddTop70 paddBottom40 pc5BG">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 paddBottom30">
				<h2><?php the_sub_field('heading');?></h2>
			</div>
		</div>
		<div class="row cust-row text-center">
			<?php if( get_sub_field('gallery') ):?>
			<?php $count = 0; ?>
			<?php $countSM = 0; ?>
			<?php while ( have_rows('gallery') ) : the_row();?>
				<?php $count++; ?>
				<?php $countSM++; ?>
				<?php $galleryImg = get_sub_field('image'); ?>
				<div class="col-sm-6 col-md-4 paddBottom30">
					<div class="pc5Gallery">
					<?php if(get_sub_field('link')): ?>
						<?php  $galleryLink = get_sub_field('link'); ?>
						<div class="pc5GalleryImg"><a href="<?php echo $galleryLink; ?>"><img src="<?php echo $galleryImg['url']; ?>" alt="<?php echo $galleryImg['alt']; ?>" width="<?php echo $galleryImg['width']; ?>" height="<?php echo $galleryImg['height']; ?>"></a></div>
						<div class="pc5GalleryContent">
							<div class="pc5GalleryCategory"><?php the_sub_field('category');?></div>
							<div class="pc5GalleryTitle"><a href="<?php echo $galleryLink; ?>"><?php the_sub_field('title');?></a></div>
							<div class="pc5GalleryText"><?php the_sub_field('text');?></div>
							<div class="pc5GalleryLink"><a href="<?php echo $galleryLink; ?>" target="_blank">Learn More</a></div>
						</div>
					<?php else: ?>
						<div class="pc5GalleryImg"><img src="<?php echo $galleryImg['url']; ?>" alt="<?php echo $galleryImg['alt']; ?>" width="<?php echo $galleryImg['width']; ?>" height="<?php echo $galleryImg['height']; ?>"></div>
						<div class="pc5GalleryContent">
							<div class="pc5GalleryCategory"><?php the_sub_field('category');?></div>
							<div class="pc5GalleryTitle"><?php the_sub_field('title');?></div>
							<div class="pc5GalleryText"><?php the_sub_field('text');?></div>
						</div>
					<?php endif; ?>
					</div>
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
			<?php endif; ?>
		</div>
	</div>
</div>
<?php endif;?>
<?php endwhile; ?>
<?php endif;?>
<?php if( get_field('section7') ):?>
<?php while ( have_rows('section7') ) : the_row();?>
<?php if(get_sub_field('faqs')):?>
<div class="articleSection paddTop70 paddBottom70">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-8 productFAQs">
				<?php $count = 1; ?>
				<?php while ( have_rows('faqs') ) : the_row();?>
				<div class="accordiaBox <?php if($count == 1){echo 'active';}?>">
					<div class="accordion"><?php the_sub_field('title');?></div>
					<div class="panel"><?php the_sub_field('text');?></div>
				</div>
				<?php $count++; ?>
				<?php endwhile; ?>
			</div>
			<div class="col-sm-12 col-md-4">
				<div class="quickQuote divScroll">
					<div class="quickQuoteTitle paddBottom5"><?php the_sub_field('contact_form_heading');?></div>
					<?php the_sub_field('contact_form');?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif;?>
</div>


<?php get_footer(); ?>