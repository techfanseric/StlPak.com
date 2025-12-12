<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: Product Category 4
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
<?php if(get_field('page_heading') || get_field('page_text') || get_field('page_details') || get_field('page_image')):?>
<div class="pc4section1 greySection paddTop70 paddBottom70">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-6 h5circleList h5blueCircleList">
				<h1><?php the_field('page_heading');?></h1>
				<?php the_field('page_text');?>
				<?php the_field('page_details');?>
				<div class="paddTop30"><a href="#contactPopUpForm" class="commonBtn fancybox-inline">Send Inquiry Now</a></div>
			</div>
			<div class="col-sm-12 col-md-6 responsiveMargin">
				<?php $pc4pageImg = get_field('page_image') ?>
				<div class="pc4pageImage"><img src="<?php echo $pc4pageImg['url']; ?>" alt="<?php echo $pc4pageImg['alt']; ?>" width="<?php echo $pc4pageImg['width']; ?>" height="<?php echo $pc4pageImg['height']; ?>"></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if(get_field('section2_heading') || get_field('section2_text')):?>
<div class="pc4Section2 paddTop85 paddBottom60">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12">
				<h2><?php the_field('section2_heading');?></h2>
				<div class="au5sectionText"><?php the_field('section2_text');?></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if(get_field('s3_video_image') || get_field('section3_heading') || get_field('section3_text') || get_field('section3_details')):?>
<div class="pc4section3 paddTop90 paddBottom90">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-6">
				<?php $video1Img = get_field('s3_video_image') ?>
				<?php $video1Link = get_field('s3_video_link') ?>
				<?php if($video1Link != ''): ?>
				<div class="videoImg"><a href="<?php echo $video1Link; ?>"><img src="<?php echo $video1Img['url']; ?>" alt="<?php echo $video1Img['alt']; ?>" width="<?php echo $video1Img['width']; ?>" height="<?php echo $video1Img['height']; ?>"></a></div>
				<?php else: ?>
				<div class="pc3Section3img"><img src="<?php echo $video1Img['url']; ?>" alt="<?php echo $video1Img['alt']; ?>" width="<?php echo $video1Img['width']; ?>" height="<?php echo $video1Img['height']; ?>"></div>
				<?php endif; ?>
			</div>
			<div class="col-sm-12 col-md-6 responsiveMargin h5circleList h5blueCircleList">
				<h2><?php the_field('section3_heading');?></h2>
				<?php the_field('section3_text');?>
				<?php the_field('section3_details');?>
				<div class="paddTop30"><a href="#contactPopUpForm" class="commonBtn fancybox-inline">Send Your Inquiry Now</a></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( have_rows('products') ):?>
<div class="pc4productSection paddTop90 paddBottom60">
	<div class="container">
		<div class="row cust-row text-center">
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
				<div class="col-sm-12 col-md-4 paddBottom30">
					<div class="h5productBox">
						<?php $productImg = get_sub_field('image') ?>
						<div class="h5productImgWrapper"><div class="h5productImg"><a href="<?php the_sub_field('link');?>"><img src="<?php echo $productImg['url']; ?>" alt="<?php echo $productImg['alt']; ?>" width="<?php echo $productImg['width']; ?>" height="<?php echo $productImg['height']; ?>"></a></div></div>
						<div class="h5productContent text-left">
							<div class="h5productTitle paddTop30 paddBottom10"><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></div>
							<div class="h5productText"><?php the_sub_field('text');?></div>
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
<?php if( get_field('support_boxes') ):?>
<div class="pc4supportSection h5whyusSection paddBottom60">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom60">
				<h2 class="clrWhite"><?php the_field('support_heading');?></h2>
			</div>
			<div class="clearfix"></div>
			<?php while ( have_rows('support_boxes') ) : the_row();?>
			<div class="col-sm-12 col-md-6 paddBottom30">
				<div class="pc4supportBox">
					<?php $supportImg = get_sub_field('image') ?>
					<div class="pc4supportImg"><img src="<?php echo $supportImg['url']; ?>" alt="<?php echo $supportImg['alt']; ?>" width="<?php echo $supportImg['width']; ?>" height="<?php echo $supportImg['height']; ?>"></div>
					<div class="pc4supportContent text-left">
						<div class="pc4supportTitle clrWhite"><?php the_sub_field('title');?></div>
						<div class="pc4supportText clrWhite"><?php the_sub_field('text');?></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php $videoImg = get_field('video_image') ?>
<?php $videoLink = get_field('video_link') ?>
<?php if($videoLink != ''): ?>
<div class="pc4video h5videoBox h5whitePlayIcon"><a href="<?php echo $videoLink; ?>"><img src="<?php echo $videoImg['url']; ?>" alt="<?php echo $videoImg['alt']; ?>" width="<?php echo $videoImg['width']; ?>" height="<?php echo $videoImg['height']; ?>"></a></div>
<?php else: ?>
<div class="pc4Fullimg text-center"><img src="<?php echo $videoImg['url']; ?>" alt="<?php echo $videoImg['alt']; ?>" width="<?php echo $videoImg['width']; ?>" height="<?php echo $videoImg['height']; ?>"></div>
<?php endif; ?>
<?php if( get_field('tabs') ):?>
<div class="pc4tabSection paddTop80 paddBottom50">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12">
				<div class="h5TabsWrapper">						
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