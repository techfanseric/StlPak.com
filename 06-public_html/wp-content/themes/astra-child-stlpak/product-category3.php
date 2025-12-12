<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: Product Category 3
?>


<?php if( get_field('banner') ):?>
<?php while ( have_rows('banner') ) : the_row();?>
<?php if( get_sub_field('background_image') || get_sub_field('heading')):?>
<div class="bannerWraper pc3Banner">
    <?php $bannerImg = get_sub_field('background_image') ?>
	<div class="bannerImg"><img src="<?php echo $bannerImg['url']; ?>" alt="<?php echo $bannerImg['alt']; ?>" width="<?php echo $bannerImg['width']; ?>" height="<?php echo $bannerImg['height']; ?>"></div>
	<?php if(get_sub_field('heading') || get_sub_field('description')):?>
	<div class="container">
		<div class="row cust-row">
			<div class="bannerContent <?php if( get_sub_field('text_align') == 'Left' ){echo 'text-left';}else if( get_sub_field('text_align') == 'Center' ){echo 'text-center';}else if( get_sub_field('text_align') == 'Right' ){echo 'text-right';}?>">
				<div class="bannerContainer">
					<h1 class="pc3BannerHeading" style="color:<?php the_sub_field('heading_color');?>"><?php the_sub_field('heading');?></h1>
					<div class="pc3BannerDetails">
						<?php the_sub_field('description');?>
						<?php if(get_sub_field('button_text')):?>
						<div><a href="#contactPopUpForm" class="fancybox-inline commonBtn"><?php the_sub_field('button_text');?></a></div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section8') ):?>
<?php while ( have_rows('section8') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('slider')):?>
<div class="pc3Section8 paddTop70 paddBottom70">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-7">
				<div class="productSliderWraper">
					<ul class="detailProductSlider">
						<?php while ( have_rows('slider') ) : the_row();?>
							<?php $slider_image = get_sub_field('image') ?>
							<li class="slide"><img src="<?php echo $slider_image['url']; ?>" alt="<?php echo $slider_image['alt']; ?>" width="<?php echo $slider_image['width']; ?>" height="<?php echo $slider_image['height']; ?>"></li>
						<?php endwhile; ?>
					</ul>
					<ul class="productSliderPager">
						<?php $i=0;?>
						<?php while ( have_rows('slider') ) : the_row();?>
							<?php $slider_image = get_sub_field('image') ?>
							<li class="slide"><a class="block" data-slide-index="<?php echo $i;?>"><img src="<?php echo $slider_image['url']; ?>" alt="<?php echo $slider_image['alt']; ?>" width="<?php echo $slider_image['width']; ?>" height="<?php echo $slider_image['height']; ?>"></a></li>
							<?php $i++;?>
						<?php endwhile; ?>
					</ul>
				</div>
			</div>
			<div class="col-sm-12 col-md-5 responsiveMargin diamondList">
				<h2><?php the_sub_field('heading');?></h2>
				<div class="pc3s8Text"><?php the_sub_field('text');?></div>
				<?php if(get_sub_field('button_text')):?>
				<div><a href="<?php the_sub_field('button_link');?>" class="commonBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if(get_field('section1')): ?>
<?php while ( have_rows('section1') ) : the_row();?>
<?php if(get_sub_field('heading') || get_sub_field('text')): ?>
<div class="pc3Section1 paddTop75 <?php if(get_sub_field('background_color') && get_sub_field('background_color') != "#ffffff"){ echo 'paddBottom65';} ?>" <?php if(get_sub_field('background_color')){ ?>style="background-color: <?php the_sub_field('background_color');?>;" <?php  } ?>>
	<div class="container">
		<div class="row cust-row <?php if( get_sub_field('alignment') == 'Left' ){echo 'text-left';}else if( get_sub_field('alignment') == 'Center' ){echo 'text-center';}else if( get_sub_field('alignment') == 'Right' ){echo 'text-right';}?>">
			<div class="col-sm-12">
				<h2><?php the_sub_field('heading');?></h2>
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
<?php if( get_field('product_section') ):?>
<?php while ( have_rows('product_section') ) : the_row();?>
<?php if( get_sub_field('products_heading') || get_sub_field('products') ):?>
<div class="pc3ProductSection paddTop60 paddBottom30">
	<div class="container">
		<div class="row cust-row text-center">
			<?php if(get_sub_field('products_heading') || get_sub_field('text')): ?>
			<div class="col-sm-12 paddBottom30">
				<h2><?php the_sub_field('products_heading');?></h2>
				<?php if(get_sub_field('text')): ?>
					<div class="paddBottom10"><?php the_sub_field('text');?></div>
				<?php endif; ?>
			</div>
			<div class="clearfix"></div>
			<?php endif; ?>
			<?php if( get_sub_field('products') ):?>
			<?php $productAlign = get_sub_field('products_alignment'); ?>
			<?php
				$count = 0;
				$countSM = 0;

				if(get_sub_field('products_per_page') && get_sub_field('products_per_page') != 'Show All Products'){
					$productPerPage = get_sub_field('products_per_page');	
				}elseif(get_sub_field('products_per_page') == 'Show All Products'){
					$productPerPage = 1000;
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
				<div class="col-sm-6 col-md-4 paddBottom30">
					<div class="c1ProductBox <?php if( $productAlign== 'Left' ){echo 'text-left';}else if( $productAlign == 'Center' ){echo 'text-center';}else if( $productAlign == 'Right' ){echo 'text-right';}?>">
						<?php if(get_sub_field('link')): ?>
							<?php $productLink = get_sub_field('link'); ?>
							<div class="c1ProductImg <?php if(strpos($productLink, 'youtu.be') == true || strpos($productLink, 'youtube.com') == true){echo 'videoImg';}?>"><a href="<?php echo $productLink; ?>"><img src="<?php echo $productImg['url']; ?>" alt="<?php echo $productImg['alt']; ?>" width="<?php echo $productImg['width']; ?>" height="<?php echo $productImg['height']; ?>"></a></div>
							<div class="c1ProductContent">
								<div class="c1ProductTitle paddBottom10"><a href="<?php echo $productLink; ?>"><?php the_sub_field('title');?></a></div>
								<div class="c1ProductText"><?php the_sub_field('text');?></div>
								<?php if(get_sub_field('button_text')): ?>
									<div class="c1ProductBtn"><a href="<?php the_sub_field('button_link');?>" class="<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
								<?php endif; ?>
							</div>
						<?php else: ?>
							<div class="c1ProductImg"><img src="<?php echo $productImg['url']; ?>" alt="<?php echo $productImg['alt']; ?>" width="<?php echo $productImg['width']; ?>" height="<?php echo $productImg['height']; ?>"></div>
							<div class="c1ProductContent">
								<div class="c1ProductTitle paddBottom10"><?php the_sub_field('title');?></div>
								<div class="c1ProductText"><?php the_sub_field('text');?></div>
								<?php if(get_sub_field('button_text')): ?>
									<div class="c1ProductBtn"><a href="<?php the_sub_field('button_link');?>" class="<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
								<?php endif; ?>
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
			<div class="clearfix"></div>
			<?php if($total != 0 || $total != ''): ?>
			<div class="col-sm-6 text-left">
				<div class="pc3TotalProducts"><?php echo $total; ?> Products Found.</div>
			</div>
			<?php endif; ?>
			<?php // Pagination
				echo '<div class="col-sm-6">';
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
<?php endif;?>
<?php endwhile; ?>
<?php endif;?>
<?php $counter = 1; ?>
<?php if( get_field('product_slider_section') ):?>
<?php while ( have_rows('product_slider_section') ) : the_row();?>
<?php if( get_sub_field('products') ):?>
<div class="pc3SliderSection paddTop70 paddBottom40  <?php if($counter%2 == 1){echo 'greySection';} ?>">
	<div class="container">
		<?php if(get_sub_field('products_heading') || get_sub_field('text')):?>
		<div class="row cust-row">
			<div class="col-sm-12 paddBottom30">
				<h2><?php the_sub_field('products_heading');?></h2>
				<?php if(get_sub_field('text')): ?>
					<div class="paddBottom10"><?php the_sub_field('text');?></div>
				<?php endif; ?>
			</div>
		</div>
		<?php endif;?>
		<?php $productAlign = get_sub_field('products_alignment'); ?>
		<div class="row cust-row">
			<ul class="pc3ProductSlider">
				<?php while ( have_rows('products') ) : the_row();?>
					<?php $productImg = get_sub_field('image') ?>
					<li class="slide">
						<div class="c1ProductBox <?php if( $productAlign== 'Left' ){echo 'text-left';}else if( $productAlign == 'Center' ){echo 'text-center';}else if( $productAlign == 'Right' ){echo 'text-right';}?>">
							<?php if(get_sub_field('link')): ?>
							<?php $productLink = get_sub_field('link'); ?>
							<div class="c1ProductImg <?php if(strpos($productLink, 'youtu.be') == true || strpos($productLink, 'youtube.com') == true){echo 'videoImg';}?>"><a href="<?php echo $productLink; ?>"><img src="<?php echo $productImg['url']; ?>" alt="<?php echo $productImg['alt']; ?>" width="<?php echo $productImg['width']; ?>" height="<?php echo $productImg['height']; ?>"></a></div>
							<div class="c1ProductContent">
								<div class="c1ProductTitle paddBottom10"><a href="<?php echo $productLink; ?>"><?php the_sub_field('title');?></a></div>
								<div class="c1ProductText"><?php the_sub_field('text');?></div>
								<?php if(get_sub_field('button_text')): ?>
									<div class="c1ProductBtn"><a href="<?php the_sub_field('button_link');?>" class="<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
								<?php endif; ?>
							</div>
							<?php else: ?>
							<div class="c1ProductImg"><img src="<?php echo $productImg['url']; ?>" alt="<?php echo $productImg['alt']; ?>" width="<?php echo $productImg['width']; ?>" height="<?php echo $productImg['height']; ?>"></div>
							<div class="c1ProductContent">
								<div class="c1ProductTitle paddBottom10"><?php the_sub_field('title');?></div>
								<div class="c1ProductText"><?php the_sub_field('text');?></div>
								<?php if(get_sub_field('button_text')): ?>
									<div class="c1ProductBtn"><a href="<?php the_sub_field('button_link');?>" class="<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
								<?php endif; ?>
							</div>
							<?php endif; ?>
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
<?php if( get_field('section7') ):?>
<?php while ( have_rows('section7') ) : the_row();?>
<?php if( get_sub_field('featured_box') ):?>
<div class="pc3Section7 greySection paddTop70 paddBottom40">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom20">
				<h2><?php the_sub_field('heading');?></h2>
			</div>
			<div class="clearfix"></div>
			<?php while ( have_rows('featured_box') ) : the_row();?>
			<div class="col-sm-6 col-md-3 paddBottom30">
				<div class="pc3s7Box">
					<?php $pc3s7Img = get_sub_field('image'); ?>
					<div class="pc3s7Img"><img src="<?php echo $pc3s7Img['url']; ?>" alt="<?php echo $pc3s7Img['alt']; ?>" width="<?php echo $pc3s7Img['width']; ?>" height="<?php echo $pc3s7Img['height']; ?>"></div>
					<div class="pc3s7Title"><?php the_sub_field('title');?></div>
					<div class="pc3s7Text"><?php the_sub_field('text');?></div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif;?>
<?php endwhile; ?>
<?php endif;?>
<?php $counter = 1; ?>
<?php if( get_field('section_3') ):?>
<?php while ( have_rows('section_3') ) : the_row();?>
<div class="pc3RepeatSection paddTop75 paddBottom75 <?php if($counter%2 == 0){echo 'greySection';} ?>">
	<div class="container container1320">
		<div class="row cust-row rowFlex">
			<?php if($counter%2 == 1) : ?>
			<div class="col-sm-12 col-md-6">
				<h2><?php the_sub_field('section3_heading');?></h2>
				<?php the_sub_field('section3_details');?>
				<?php if(get_sub_field('button_text')):?>
					<div><a href="<?php the_sub_field('button_link');?>" class="commonBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
				<?php endif; ?>
			</div>
			<?php endif; ?>
			<div class="col-sm-12 col-md-6 <?php if($counter%2 == 1){echo "responsiveMargin"; }?>">
				<?php $section3Img = get_sub_field('section3_image') ?>
				<?php $videoLink = get_sub_field('video_link') ?>
				<?php if($videoLink != ''): ?>
				<div class="videoImg"><a href="<?php echo $videoLink; ?>"><img src="<?php echo $section3Img['url']; ?>" alt="<?php echo $section3Img['alt']; ?>" width="<?php echo $section3Img['width']; ?>" height="<?php echo $section3Img['height']; ?>"></a></div>
				<?php else: ?>
				<div class="pc3Section3img"><img src="<?php echo $section3Img['url']; ?>" alt="<?php echo $section3Img['alt']; ?>" width="<?php echo $section3Img['width']; ?>" height="<?php echo $section3Img['height']; ?>"></div>
				<?php endif; ?>
			</div>
			<?php if($counter%2 == 0) : ?>
			<div class="col-sm-12 col-md-6 responsiveMargin">
				<h2><?php the_sub_field('section3_heading');?></h2>
				<?php the_sub_field('section3_details');?>
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
<?php $counter = 1; ?>
<?php if(get_field('section4')):?>
<?php while ( have_rows('section4') ) : the_row();?>
<?php if(get_sub_field('video_box') || get_sub_field('details')):?>
<div class="pc3Section4 paddTop60 paddBottom30 <?php if($counter%2 == 1){echo 'greySection';} ?>">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center paddBottom20">
				<h2><?php the_sub_field('heading');?></h2>
			</div>
			<div class="clearfix"></div>
			<?php if(get_sub_field('video_box')):?>
				<?php $count = 0;?>
				<?php while ( have_rows('video_box') ) : the_row();?>
				<?php $count++;?>
				<div class="col-sm-12 col-md-6 responsiveMargin">
					<?php $s4VideoImg = get_sub_field('image') ?>
					<?php $s4VideoLink = get_sub_field('link');?>
					<?php if($s4VideoLink != ''): ?>
					<div class="videoImg"><a href="<?php echo $s4VideoLink; ?>"><img src="<?php echo $s4VideoImg['url']; ?>" alt="<?php echo $s4VideoImg['alt']; ?>" width="<?php echo $s4VideoImg['width']; ?>" height="<?php echo $s4VideoImg['height']; ?>"></a></div>
					<?php else: ?>
					<div class="pc3Section4img"><img src="<?php echo $s4VideoImg['url']; ?>" alt="<?php echo $s4VideoImg['alt']; ?>" width="<?php echo $s4VideoImg['width']; ?>" height="<?php echo $s4VideoImg['height']; ?>"></div>
					<?php endif; ?>
				</div>
				<?php if($count == 2):?>
					<div class="clearfix paddTop30"></div>
					<?php $count = 0;?>
				<?php endif;?>
				<?php endwhile; ?>
			<?php endif;?>
			<div class="col-sm-12">
				<?php the_sub_field('details');?>
			</div>
		</div>
	</div>
</div>
<?php endif;?>
<?php $counter++; ?>
<?php endwhile; ?>
<?php endif;?>
<?php if(get_field('section6')):?>
<?php while ( have_rows('section6') ) : the_row();?>
<?php if(get_sub_field('products')):?>
<div class="pc3Section6 paddTop60">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 paddBottom20">
				<h2><?php the_sub_field('heading');?></h2>
			</div>
			<div class="clearfix"></div>
			<?php while ( have_rows('products') ) : the_row();?>
				<?php $pc3s6Img = get_sub_field('image') ?>
				<div class="col-sm-12 col-md-6 text-center paddBottom30">
					<div class="pc3s6Box">
					<?php if(get_sub_field('link')): ?>
						<?php $pc3s6Link = get_sub_field('link'); ?>
						<div class="pc3s6Img <?php if(strpos($pc3s6Link, 'youtu.be') == true || strpos($pc3s6Link, 'youtube.com') == true){echo 'videoImg';}?>"><a href="<?php echo $pc3s6Link; ?>"><img src="<?php echo $pc3s6Img['url']; ?>" alt="<?php echo $pc3s6Img['alt']; ?>" width="<?php echo $pc3s6Img['width']; ?>" height="<?php echo $pc3s6Img['height']; ?>"></a></div>
						<div class="pc3s6Title"><a href="<?php echo $pc3s6Link; ?>"><?php the_sub_field('title');?></a></div>
					<?php else: ?>
						<div class="pc3s6Img"><img src="<?php echo $pc3s6Img['url']; ?>" alt="<?php echo $pc3s6Img['alt']; ?>" width="<?php echo $pc3s6Img['width']; ?>" height="<?php echo $pc3s6Img['height']; ?>"></div>
						<div class="pc3s6Title"><?php the_sub_field('title');?></div>
					<?php endif; ?>
						<div class="pc3s6Text"><?php the_sub_field('text');?></div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif;?>
<?php endwhile; ?>
<?php endif;?>
<?php if(get_field('section5')):?>
<?php while ( have_rows('section5') ) : the_row();?>
<?php if(get_sub_field('products')):?>
<div class="pc3Section5 paddTop60 paddBottom30" <?php if(get_sub_field('background')){ ?>style="background-color: <?php the_sub_field('background');?>;" <?php  } ?>>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center paddBottom20">
				<h2><?php the_sub_field('heading');?></h2>
			</div>
			<div class="clearfix"></div>
			<?php while ( have_rows('products') ) : the_row();?>
				<?php $productImg = get_sub_field('image'); ?>
				<div class="col-sm-12 paddBottom40">
					<div class="pc3s5ProductBox">
						<div class="pc3s5ProductImg"><img src="<?php echo $productImg['url']; ?>" alt="<?php echo $productImg['alt']; ?>" width="<?php echo $productImg['width']; ?>" height="<?php echo $productImg['height']; ?>"></div>
						<div class="pc3s5Content">
							<div class="pc3s5ProductTitle paddBottom10"><?php the_sub_field('title');?></div>
							<div class="pc3s5ProductText"><?php the_sub_field('text');?></div>
							<div class="pc3s5Btns"><?php if(get_sub_field('button1_text')): ?><a href="<?php the_sub_field('button1_link');?>" class="commonBtn<?php if(get_sub_field('button1_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button1_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button1_text');?></a><?php endif; ?><?php if(get_sub_field('button2_text')): ?><a href="<?php the_sub_field('button2_link');?>" class="commonBtn whiteBtn<?php if(get_sub_field('button2_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button2_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button2_text');?></a><?php endif; ?></div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
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
			<div <?php if(get_sub_field('black_layer') == "Yes"):?>style="background:#00000088;"<?php endif; ?> class="bannerContent<?php if(get_sub_field('black_layer') == "Yes"){echo ' bannerOverlay';}?> <?php if( get_sub_field('text_align') == 'Left' ){echo 'text-left';}else if( get_sub_field('text_align') == 'Center' ){echo 'text-center';}else if( get_sub_field('text_align') == 'Right' ){echo 'text-right';}?>">
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
<div class="pc3TabSection paddTop40 paddBottom70">
	<div class="container">
		<div class="row cust-row">
			<?php if(get_field('tabs_heading')):?>
			<div class="col-sm-12 paddBottom30 text-center"><h2><?php the_field('tabs_heading');?></h2></div>
			<div class="clearfix"></div>
			<?php endif;?>
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
<?php if( get_field('testimonials') ):?>
<div class="pc3Testimonials greySection paddTop70 paddBottom70">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12">
				<ul class="pc3TestimonialSlider">
				<?php while ( have_rows('testimonials') ) : the_row();?>
					<li class="slick-slide">
						<div class="pc3TestimonialBox">
							<div class="pc3TestimonialText"><?php the_sub_field('text');?></div>
							<div class="pc3TestimonialTitle"><?php the_sub_field('author');?></div>
						</div>
					</li>
				<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('faqs_1') ):?>
<div class="lp5FAQsSection paddTop60 paddBottom60">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 lp5FAQs">
				<?php while ( have_rows('faqs_1') ) : the_row();?>
				<div class="accordiaBox">
					<div class="accordion"><?php the_sub_field('title');?></div>
					<div class="panel"><?php the_sub_field('text');?></div>
				</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('related_products') ):?>
<div class="pd2ProductSection paddTop60 paddBottom60" <?php if(get_field('rel_products_bg')){ ?>style="background-color: <?php the_field('rel_products_bg');?>;" <?php  } ?>>
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom30">
				<h2><?php the_field('related_products_heading');?></h2>
			</div>
			<div class="clearfix"></div>
			<ul class="img4Slider">
				<?php while ( have_rows('related_products') ) : the_row();?>
				<li class="slide">
					<div class="dp4relatedProduct">
						<?php $slider_image = get_sub_field('image') ?>
						<?php if(get_sub_field('link')): ?>
							<?php $productLink = get_sub_field('link')?>
							<div class="dp4relatedProductImg"><a href="<?php echo $productLink;?>"><img src="<?php echo $slider_image['url']; ?>" alt="<?php echo $slider_image['alt']; ?>" width="<?php echo $slider_image['width']; ?>" height="<?php echo $slider_image['height']; ?>"></a></div>
							<div class="dp4relatedProductTitle paddTop15"><a href="<?php echo $productLink;?>"><?php the_sub_field('title');?></a></div>
						<?php else: ?>
							<div class="dp4relatedProductImg"><img src="<?php echo $slider_image['url']; ?>" alt="<?php echo $slider_image['alt']; ?>" width="<?php echo $slider_image['width']; ?>" height="<?php echo $slider_image['height']; ?>"></div>
							<div class="dp4relatedProductTitle paddTop15"><?php the_sub_field('title');?></div>
						<?php endif; ?>
					</div>
				</li>
				<?php endwhile; ?>
			</ul>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if(get_field('article') || get_field('faqs')):?>
<div class="articleSection paddTop60 paddBottom70" <?php if(get_field('article_background_color')){ ?>style="background-color: <?php the_field('article_background_color');?>;" <?php  } ?>>
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 productFAQs <?php if(get_field('contact_form')){echo 'col-md-8';}?>">
				<?php if( get_field('article') ):?>
					<?php the_field('article');?>
					<div class="clearfix paddTop20"></div>
				<?php endif; ?>
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
			<?php if(get_field('contact_form')):?>
			<div class="col-sm-12 col-md-4">
				<div class="quickQuote divScroll">
					<div class="quickQuoteTitle paddBottom5"><?php the_field('contact_form_heading');?></div>
					<?php the_field('contact_form');?>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php endif; ?>

<?php get_footer(); ?>