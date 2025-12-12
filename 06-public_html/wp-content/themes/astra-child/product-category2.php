<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: Product Category 2
?>

<?php if(get_field('banner')):?>
<?php while ( have_rows('banner') ) : the_row();?>
<?php if(get_sub_field('heading') || get_sub_field('image')):?>
<div class="bannerWraper pc2Banner">
	<?php $bannerImg = get_sub_field('image') ?>
	<div class="bannerImg"><img src="<?php echo $bannerImg['url']; ?>" alt="<?php echo $bannerImg['alt']; ?>" width="<?php echo $bannerImg['width']; ?>" height="<?php echo $bannerImg['height']; ?>"></div>
	<div class="container">
		<div class="row <?php if( get_sub_field('alignment') == 'Left' ){echo 'text-left';}else if( get_sub_field('alignment') == 'Center' ){echo 'text-center';}else if( get_sub_field('alignment') == 'Right' ){echo 'text-right';}?>">
			<div class="bannerContent">
				<h1 class="bannerHeading" style="color:<?php the_sub_field('color');?>"><?php the_sub_field('heading');?></h1>
				<?php if( get_sub_field('button_text')):?>
					<div class="bannerBtn"><a href="<?php the_sub_field('button_link');?>" class="commonBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section1') ):?>
<?php while ( have_rows('section1') ) : the_row();?>
<div class="pc2Section1 sectionShadow paddTop75 paddBottom75">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-6">
				<?php $p2s1video = get_sub_field('image') ?>
				<?php $$p2s1Link = get_sub_field('link') ?>
				<?php if($$p2s1Link != ''): ?>
					<div class="videoImg"><a href="<?php echo $$p2s1Link; ?>"><img src="<?php echo $p2s1video['url']; ?>" alt="<?php echo $p2s1video['alt']; ?>" width="<?php echo $p2s1video['width']; ?>" height="<?php echo $p2s1video['height']; ?>"></a></div>
				<?php else: ?>
					<div class="pc3Section3img"><img src="<?php echo $p2s1video['url']; ?>" alt="<?php echo $p2s1video['alt']; ?>" width="<?php echo $p2s1video['width']; ?>" height="<?php echo $p2s1video['height']; ?>"></div>
				<?php endif; ?>
			</div>
			<div class="col-sm-12 col-md-6 responsiveMargin pc2PageDetails h3PageDetails">
				<h2><?php the_sub_field('heading');?></h2>
				<?php the_sub_field('text');?>
				<?php if( get_sub_field('button_text')):?>
					<div class="paddTop10"><a href="<?php the_sub_field('button_link');?>" class="commonBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php if( have_rows('products') ):?>
<div class="pc2ProductSection paddTop90 paddBottom60">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom20">
				<h2><?php the_field('products_heading');?></h2>
				<div><?php the_field('products_text');?></div>
			</div>
			<div class="clearfix"></div>
			<?php
				$count = 0;
				$countSM = 0;

				if(get_field('products_per_page')){
					$productPerPage = get_field('products_per_page');	
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
			<div class="col-sm-6 col-md-4 paddBottom30">
				<div class="pc2ProductBox">
					<?php $productImg = get_sub_field('image') ?>
					<div class="pc2ProductImg"><a href="<?php the_sub_field('link');?>"><img src="<?php echo $productImg['url']; ?>" alt="<?php echo $productImg['alt']; ?>" width="<?php echo $productImg['width']; ?>" height="<?php echo $productImg['height']; ?>"></a></div>
					<div class="pc2ProductTitle paddTop40 paddBottom10"><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></div>
					<?php if(get_sub_field('text')):?>
					<div class="pc2ProductText paddBottom25"><?php the_sub_field('text');?></div>
					<?php endif; ?>
					<div class="pc2ProductBtn"><a href="#contactPopUpForm" class="commonBtn minwidth185 fancybox-inline">Send Inquiry Now</a></div>
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
<?php endif; ?>
<?php $counter = 1; ?>
<?php if( get_field('product_slider_section') ):?>
<?php while ( have_rows('product_slider_section') ) : the_row();?>
<?php if( get_sub_field('products') ):?>
<div class="pc3SliderSection paddTop70 paddBottom40  <?php if($counter%2 == 1){echo 'greySection';} ?>">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 paddBottom30">
				<?php $totalProduct = count(get_sub_field('products')); ?>
				<h2><?php the_sub_field('products_heading');?> <span class="pc3sProductCount">(<?php echo $totalProduct; ?>)</span></h2>
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
<?php if(get_field('full_size_image')): ?>
<?php $fullImg = get_field('full_size_image') ?>
<div class="text-center"><img src="<?php echo $fullImg['url']; ?>" alt="<?php echo $fullImg['alt']; ?>" width="<?php echo $fullImg['width']; ?>" height="<?php echo $fullImg['height']; ?>"></div>
<?php endif; ?>
<?php if( get_field('section_3') ):?>
<?php while ( have_rows('section_3') ) : the_row();?>
<div class="pc3RepeatSection paddTop75 paddBottom15 <?php if($counter%2 == 0){echo 'greySection';} ?>">
	<div class="container">
		<div class="row cust-row paddBottom60">
			<?php if($counter%2 == 0) : ?>
			<div class="col-sm-12 col-md-6">
				<h2><?php the_sub_field('heading');?></h2>
				<?php the_sub_field('text');?>
				<?php if(get_sub_field('button_text')):?>
					<div><a href="<?php the_sub_field('button_link');?>" class="commonBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
				<?php endif; ?>
			</div>
			<?php endif; ?>
			<div class="col-sm-12 col-md-6 <?php if($counter%2 == 0){echo "responsiveMargin"; }?>">
				<?php $section3Img = get_sub_field('image') ?>
				<?php $videoLink = get_sub_field('link') ?>
				<?php if($videoLink != ''): ?>
				<div class="videoImg"><a href="<?php echo $videoLink; ?>"><img src="<?php echo $section3Img['url']; ?>" alt="<?php echo $section3Img['alt']; ?>" width="<?php echo $section3Img['width']; ?>" height="<?php echo $section3Img['height']; ?>"></a></div>
				<?php else: ?>
				<div class="pc3Section3img"><img src="<?php echo $section3Img['url']; ?>" alt="<?php echo $section3Img['alt']; ?>" width="<?php echo $section3Img['width']; ?>" height="<?php echo $section3Img['height']; ?>"></div>
				<?php endif; ?>
			</div>
			<?php if($counter%2 == 1) : ?>
			<div class="col-sm-12 col-md-6 responsiveMargin">
				<h2><?php the_sub_field('heading');?></h2>
				<?php the_sub_field('text');?>
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
<?php if( get_field('featured_products') ):?>
<div class="pc2Section4 paddTop70 paddBottom45">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom40">
				<h2><?php the_field('featured_products_heading');?></h2>
			</div>
			<div class="clearfix"></div>
			<?php $count = 0; ?>
			<?php $countSM = 0; ?>
			<?php while ( have_rows('featured_products') ) : the_row();?>
			<?php $count++; ?>
			<?php $countSM++; ?>
			<div class="col-sm-6 col-md-4 paddBottom30">
				<div class="pc2FeaturedProductBox">
					<?php $featuredProductImg = get_sub_field('image') ?>
					<div class="pc2FearturedProductImg"><a href="<?php the_sub_field('link');?>"><img src="<?php echo $featuredProductImg['url']; ?>" alt="<?php echo $featuredProductImg['alt']; ?>" width="<?php echo $featuredProductImg['width']; ?>" height="<?php echo $featuredProductImg['height']; ?>"></a></div>
					<div class="pc2FeaturedProductTitle text-left paddTop40 paddBottom10"><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></div>
					<div class="pc2FeaturedProductText text-left"><?php the_sub_field('text');?></div>
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
<?php if( get_field('tabs') ):?>
<div class="pc2TabSection paddTop90 paddBottom90 h3BorderSection greySection">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-9">
				<div class="pc2TabsWrapper">
					<ul class="tabs">
						<?php $j=1;?>
						<?php while ( have_rows('tabs') ) : the_row();?>
						<li class="tab-link <?php if($j == 1){echo 'current';};?>" data-tab="tab-<?php echo $j;?>"><?php the_sub_field('title') ?></li>
						<?php $j++;?>
						<?php endwhile; ?>
					</ul>
					<?php $h=1;?>
					<?php while ( have_rows('tabs') ) : the_row();?>
					<div id="tab-<?php echo $h;?>" class="tab-content <?php if($h == 1){echo 'current';};?>">
						<?php the_sub_field('text') ?>
						<div class="clearfix"></div>
					</div>
					<?php $h++;?>
					<?php endwhile; ?>
				</div>
			</div>
			<div class="col-sm-12 col-md-3 paddTop65 text-center">
				<div class="pc2CatalogBox">
					<?php $catalogImg = get_field('catalog_image') ?>
					<div class="pc2CatalogImg"><a href="<?php the_field('catalog_link');?>"><img src="<?php echo $catalogImg['url']; ?>" alt="<?php echo $catalogImg['alt']; ?>" width="<?php echo $catalogImg['width']; ?>" height="<?php echo $catalogImg['height']; ?>"></a></div>
					<div class="pc2CatalogTitle paddTop25"><a href="<?php the_field('catalog_link');?>" target="_blank"><?php the_field('catalog_title');?></a></div>
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