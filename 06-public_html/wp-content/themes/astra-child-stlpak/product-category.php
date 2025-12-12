<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: Product Category
?>

<?php if(get_field('banner_image') || get_field('banner_heading')):?>
<div class="bannerWraper categoryBanner">
    <?php $bannerImg = get_field('banner_image') ?>
	<div class="bannerImg"><img src="<?php echo $bannerImg['url']; ?>" alt="<?php echo $bannerImg['alt']; ?>" width="<?php echo $bannerImg['width']; ?>" height="<?php echo $bannerImg['height']; ?>"></div>
	<div class="container">
		<div class="row cust-row">
			<?php 
				if(get_field('banner_overlay')){
					$bgOverlay = get_field('banner_overlay');
					$style = "background: $bgOverlay; padding: 25px 15px;";
				}else{
					$style = "background: transparent; padding: 0;";
				}
			?>
			<div style="<?php echo $style; ?>" class="bannerContent <?php if( get_field('banner_text_alignment') == 'Left' ){echo 'text-left';}else if( get_field('banner_text_alignment') == 'Center' ){echo 'text-center';}else if( get_field('banner_text_alignment') == 'Right' ){echo 'text-right';}?>">
				<h1 class="bannerHeading" style="color:<?php the_field('banner_heading_color');?>"><?php the_field('banner_heading');?></h1>
				<div class="hidden-sXs bannerText" style="color:<?php the_field('banner_details_color');?>"><?php the_field('banner_details');?></div>
				<?php if( get_field('banner_button') == 'Yes' ):?>
				<div class="bannerBtn"><a href="#contactPopUpForm" class="commonBtn fancybox-inline">Get A Free Quote</a></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php $counter = 1; ?>
<?php if( get_field('section1') ):?>
<?php while ( have_rows('section1') ) : the_row();?>
<div class="pc3RepeatSection paddTop75 paddBottom75 <?php if($counter%2 == 0){echo 'greySection';} ?>">
	<div class="container">
		<div class="row cust-row rowFlex">
			<?php if($counter%2 == 0) : ?>
			<div class="col-sm-12 col-md-6">
				<h2><?php the_sub_field('section1_heading');?></h2>
				<?php the_sub_field('section1_details');?>
				<?php if(get_sub_field('button_text')):?>
					<div class="bannerBtn"><a href="<?php the_sub_field('button_link');?>" class="commonBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
				<?php endif; ?>
			</div>
			<?php endif; ?>
			<div class="col-sm-12 col-md-6 <?php if($counter%2 == 0){echo "responsiveMargin"; }?>">
				<?php $section1Img = get_sub_field('section1_image') ?>
				<?php $videoLink = get_sub_field('video_link') ?>
				<?php if($videoLink != ''): ?>
				<div class="videoImg"><a href="<?php echo $videoLink; ?>"><img src="<?php echo $section1Img['url']; ?>" alt="<?php echo $section1Img['alt']; ?>" width="<?php echo $section1Img['width']; ?>" height="<?php echo $section1Img['height']; ?>"></a></div>
				<?php else: ?>
				<div class="p3Section3img"><img src="<?php echo $section1Img['url']; ?>" alt="<?php echo $section1Img['alt']; ?>" width="<?php echo $section1Img['width']; ?>" height="<?php echo $section1Img['height']; ?>"></div>
				<?php endif; ?>
			</div>
			<?php if($counter%2 == 1) : ?>
			<div class="col-sm-12 col-md-6 responsiveMargin">
				<h2><?php the_sub_field('section1_heading');?></h2>
				<?php the_sub_field('section1_details');?>
				<?php if(get_sub_field('button_text')):?>
					<div class="bannerBtn"><a href="<?php the_sub_field('button_link');?>" class="commonBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
				<?php endif; ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php $counter++; ?>
<?php endwhile; ?>
<?php endif;?>
<?php if( get_field('products') ):?>
<div class="pc3ProductSection text-center paddTop70 paddBottom40">
	<div class="container">
		<div class="row cust-row">
			<div class="clearfix"></div>
			<?php
				$count = 0;
				$countSM = 0;

				if(get_field('product_per_page')){
					$productPerPage = get_field('product_per_page');	
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
					<div class="c1ProductBox">
						<?php $productImg = get_sub_field('image') ?>
						<div class="c1ProductImg"><a href="<?php the_sub_field('link');?>"><img src="<?php echo $productImg['url']; ?>" alt="<?php echo $productImg['alt']; ?>" width="<?php echo $productImg['width']; ?>" height="<?php echo $productImg['height']; ?>"></a></div>
						<div class="c1ProductContent">
							<div class="c1ProductTitle paddBottom10"><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></div>
							<div class="c1ProductText"><?php the_sub_field('text');?></div>
							<div class="c1ProductBtn"><a href="<?php the_sub_field('link');?>" target="_blank">Learn More</a></div>
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
<div class="pc3SliderSection paddTop70 paddBottom40  <?php if($counter%2 == 1){echo 'greySection';} ?>">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 paddBottom30">
				<?php $totalProduct = count(get_sub_field('products')); ?>
				<h2><?php the_sub_field('products_heading');?> <span class="pc3sProductCount">(<?php echo $totalProduct; ?>)</span></h2>
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
	</div>
</div>
<?php $counter++; ?>
<?php endwhile; ?>
<?php endif;?>
<?php if( get_field('image_banner') ):?>
<?php while ( have_rows('image_banner') ) : the_row();?>
<?php if( get_sub_field('background_image') || get_sub_field('heading')):?>
<div class="bannerWraper pc3Banner2">
    <?php $bannerImg = get_sub_field('background_image') ?>
	<div class="bannerImg"><img src="<?php echo $bannerImg['url']; ?>" alt="<?php echo $bannerImg['alt']; ?>" width="<?php echo $bannerImg['width']; ?>" height="<?php echo $bannerImg['height']; ?>"></div>
	<div class="container">
		<div class="row cust-row">
			<div <?php if(get_sub_field('black_layer') == "Yes"):?>style="background:#00000088;"<?php endif; ?> class="bannerContent<?php if(get_sub_field('black_layer')){echo ' bannerOverlay';}?> <?php if( get_sub_field('text_align') == 'Left' ){echo 'text-left';}else if( get_sub_field('text_align') == 'Center' ){echo 'text-center';}else if( get_sub_field('text_align') == 'Right' ){echo 'text-right';}?>">
				<div class="bannerHeading" style="color:<?php the_sub_field('heading_color');?>"><?php the_sub_field('heading');?></div>
				<div class="bannerText paddTop20" style="color:<?php the_sub_field('heading_color');?>"><?php the_sub_field('text');?></div>
				<?php if(get_sub_field('button_text')):?>
					<div class="bannerBtn"><a href="<?php the_sub_field('button_link');?>" class="commonBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('tabs') ):?>
<div class="categoryTabSection greySection greySectionBorder paddTop90 paddBottom90">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 paddBottom80 <?php if( get_field('tabs_alignment') == 'Left' ){echo 'text-left';}else if( get_field('tabs_alignment') == 'Center' ){echo 'text-center';}else if( get_field('tabs_alignment') == 'Right' ){echo 'text-right';}?>">
				<h2><?php the_field('tabs_heading');?></h2>
				<div class="paddTop10"><?php the_field('tabs_text');?></div>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-12">
				<div class="tabsWrapper">
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
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('related_products') ):?>
<div class="relatedProductSection greySection paddBottom90">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom15">
				<h2><?php the_field('related_products_heading');?></h2>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-12">
				<ul class="img3Slider">
					<?php while ( have_rows('related_products') ) : the_row();?>
					<?php $counter++;?>
					<li class="slide">
						<div class="relatedProductBox">
							<?php $slider_image = get_sub_field('image') ?>
							<div class="relatedProductImg relatedProductImg<?php echo $counter;?>"><a href="<?php the_sub_field('link');?>"><img src="<?php echo $slider_image['url']; ?>" alt="<?php echo $slider_image['alt']; ?>" width="<?php echo $slider_image['width']; ?>" height="<?php echo $slider_image['height']; ?>"></a></div>
							<div class="relatedProductTitle tex-left paddTop15 paddBottom10"><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></div>
							<div class="relatedProductText tex-left"><?php the_sub_field('text');?></div>
						</div>
					</li>
					<?php if ($counter == 3) {$counter = 0;}?>
					<?php endwhile; ?>
				</ul>
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