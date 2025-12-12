<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: Product Details 2
?>

<?php if( get_field('banner') ):?>
<?php while ( have_rows('banner') ) : the_row();?>
<?php if( get_sub_field('image') || get_sub_field('heading')):?>
<div class="bannerWraper categoryBanner">
    <?php $bannerImg = get_sub_field('image') ?>
	<div class="bannerImg"><img src="<?php echo $bannerImg['url']; ?>" alt="<?php echo $bannerImg['alt']; ?>" width="<?php echo $bannerImg['width']; ?>" height="<?php echo $bannerImg['height']; ?>"></div>
	<div class="container">
		<div class="row cust-row">
			<div style="background:<?php the_sub_field('overlay');?>" class="bannerContent<?php if(get_sub_field('overlay')){echo ' bannerOverlay';}?> <?php if( get_sub_field('text_alignment') == 'Left' ){echo 'text-left';}else if( get_sub_field('text_alignment') == 'Center' ){echo 'text-center';}else if( get_sub_field('text_alignment') == 'Right' ){echo 'text-right';}?>">
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
<?php if( get_field('product_slider') || get_field('page_heading')):?>
<div class="pd2Section1 greySection paddTop90 paddBottom90">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-7">
				<div class="productSliderWraper">
					<ul class="detailProductSlider">
						<?php if( have_rows('product_slider') ):?>
						<?php while ( have_rows('product_slider') ) : the_row();?>
							<?php $slider_image = get_sub_field('image') ?>
							<li class="slide"><img src="<?php echo $slider_image['url']; ?>" alt="<?php echo $slider_image['alt']; ?>" width="<?php echo $slider_image['width']; ?>" height="<?php echo $slider_image['height']; ?>"></li>
						<?php endwhile; ?>
						<?php endif; ?>
					</ul>
					<ul class="productSliderPager">
						<?php if( have_rows('product_slider') ):?>
						<?php $i=0;?>
						<?php while ( have_rows('product_slider') ) : the_row();?>
						<?php $slider_image = get_sub_field('image') ?>
							<li class="slide"><a class="block" data-slide-index="<?php echo $i;?>"><img src="<?php echo $slider_image['url']; ?>" alt="<?php echo $slider_image['alt']; ?>" width="<?php echo $slider_image['width']; ?>" height="<?php echo $slider_image['height']; ?>"></a></li>
							<?php $i++;?>
						<?php endwhile; ?>
						<?php endif; ?>
					</ul>
				</div>
			</div>
			<div class="col-sm-12 col-md-5 pd2Details responsiveMargin">
				<h1><?php the_field('page_heading');?></h1>
				<?php the_field('page_details');?>
				<?php if(get_field('button_text')):?>
					<div class="paddTop20"><a href="#contactPopUpForm" class="commonBtn fancybox-inline minwidth185"><?php the_field('button_text');?></a></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('video_section') ):?>
<?php while ( have_rows('video_section') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('image')):?>
<div class="pd2VideoSection paddTop90 paddBottom90">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-7 pd2VideoSectionDetails">
				<h2><?php the_sub_field('heading');?></h2>
				<?php the_sub_field('text');?>
				<?php if(get_sub_field('button_text')):?>
					<div class="paddTop10"><a href="<?php the_sub_field('button_link');?>" class="commonBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
				<?php endif; ?>
			</div>
			<div class="col-sm-12 col-md-5 responsiveMargin">
				<?php $videoImg = get_sub_field('image') ?>
				<?php $videoLink = get_sub_field('link') ?>
				<?php if($videoLink != ''): ?>
				<div class="videoImg"><a href="<?php echo $videoLink; ?>"><img src="<?php echo $videoImg['url']; ?>" alt="<?php echo $videoImg['alt']; ?>" width="<?php echo $videoImg['width']; ?>" height="<?php echo $videoImg['height']; ?>"></a></div>
				<?php else: ?>
				<div class="pc3Section3img"><img src="<?php echo $videoImg['url']; ?>" alt="<?php echo $videoImg['alt']; ?>" width="<?php echo $videoImg['width']; ?>" height="<?php echo $videoImg['height']; ?>"></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( have_rows('main_products') ):?>
<div class="pc3ProductSection paddTop90 paddBottom60">
    <div class="container">
        <div class="row cust-row <?php if( get_field('products_alignment') == 'Left' ){echo 'text-left';}else if( get_field('products_alignment') == 'Center' ){echo 'text-center';}else if( get_field('products_alignment') == 'Right' ){echo 'text-right';}?>">
			<div class="col-sm-12 paddBottom30 text-center">
				<h2><?php the_field('products_heading');?></h2>
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
				$products         = get_field( 'main_products' );
				$total            = count( $products );
				$pages            = ceil( $total / $products_per_page );
				$min              = ( ( $page * $products_per_page ) - $products_per_page ) + 1;
				$max              = ( $min + $products_per_page ) - 1;
			?>
			<?php while ( have_rows('main_products') ) : the_row();?>
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
							<div class="c1ProductBtn"><a href="#contactPopUpForm" class="fancybox-inline">Send Inquiry Now</a></div>
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
			<?php if(get_field('catalog_image')): ?>
			<div class="col-sm-12 col-md-3 paddTop65 text-center">
				<div class="pc2CatalogBox">
					<?php $eBookImg = get_field('catalog_image') ?>
					<div class="pc2CatalogImg"><a href="<?php the_field('catalog_link');?>" target="_blank"><img src="<?php echo $eBookImg['url']; ?>" alt="<?php echo $eBookImg['alt']; ?>" width="<?php echo $eBookImg['width']; ?>" height="<?php echo $eBookImg['height']; ?>"></a></div>
					<div class="pc2CatalogTitle paddTop20"><a href="<?php the_field('catalog_link');?>" target="_blank"><?php the_field('catalog_title');?></a></div>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php $counter = 1; ?>
<?php if( get_field('section4') ):?>
<?php while ( have_rows('section4') ) : the_row();?>
<div class="c3RepeatSection paddTop75 paddBottom75 <?php if($counter%2 == 0){echo 'greySection';} ?>">
	<div class="container">
		<div class="row cust-row rowFlex ">
			<?php if($counter%2 == 1) : ?>
			<div class="col-sm-12 col-md-6">
				<h2><?php the_sub_field('section4_heading');?></h2>
				<?php the_sub_field('section4_details');?>
				<div><a href="#contactPopUpForm" class="commonBtn fancybox-inline"><?php the_sub_field('button_text');?></a></div>
			</div>
			<?php endif; ?>
			<div class="col-sm-12 col-md-6 <?php if($counter%2 == 1){echo "responsiveMargin"; }?>">
				<?php $section4Img = get_sub_field('section4_image') ?>
				<?php $videoLink = get_sub_field('video_link') ?>
				<?php if($videoLink != ''): ?>
				<div class="videoImg"><a href="<?php echo $videoLink; ?>"><img src="<?php echo $section4Img['url']; ?>" alt="<?php echo $section4Img['alt']; ?>" width="<?php echo $section4Img['width']; ?>" height="<?php echo $section4Img['height']; ?>"></a></div>
				<?php else: ?>
				<div class="p3Section3img"><img src="<?php echo $section4Img['url']; ?>" alt="<?php echo $section4Img['alt']; ?>" width="<?php echo $section4Img['width']; ?>" height="<?php echo $section4Img['height']; ?>"></div>
				<?php endif; ?>
			</div>
			<?php if($counter%2 == 0) : ?>
			<div class="col-sm-12 col-md-6 responsiveMargin">
				<h2><?php the_sub_field('section4_heading');?></h2>
				<?php the_sub_field('section4_details');?>
				<div><a href="#contactPopUpForm" class="commonBtn fancybox-inline"><?php the_sub_field('button_text');?></a></div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php $counter++; ?>
<?php endwhile; ?>
<?php endif;?>
<?php if( get_field('products') ):?>
<div class="pd2ProductSection paddTop90 paddBottom60 h3BorderSection">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom30">
				<h2><?php the_field('rel_products_heading');?></h2>
				<?php the_field('products_description');?>
			</div>
			<div class="clearfix"></div>
			<ul class="img4Slider">
				<?php while ( have_rows('products') ) : the_row();?>
				<li class="slide">
					<div class="dp4relatedProduct">
						<?php $slider_image = get_sub_field('image') ?>
						<div class="dp4relatedProductImg"><a href="<?php the_sub_field('link');?>"><img src="<?php echo $slider_image['url']; ?>" alt="<?php echo $slider_image['alt']; ?>" width="<?php echo $slider_image['width']; ?>" height="<?php echo $slider_image['height']; ?>"></a></div>
						<div class="dp4relatedProductTitle paddTop10"><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></div>
					</div>
				</li>
				<?php endwhile; ?>
			</ul>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if(get_field('article') || get_field('faqs')):?>
<div class="articleSection paddTop70 paddBottom70 greySection">
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