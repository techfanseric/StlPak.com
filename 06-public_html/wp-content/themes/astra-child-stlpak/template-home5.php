<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: Home 5
?>

<!-- 暂时不显示滑块 -->
<!-- <div style="display: none;"><?php echo do_shortcode('[smartslider3 slider="2"]'); ?></div> -->
<?php if(get_field('featured_boxes')):?>
<div class="h5section1">
	<div class="container">
		<div class="row cust-row text-center">
			<?php while ( have_rows('featured_boxes') ) : the_row();?>
			<?php $counter++;?>
			<div class="col-sm-12 col-md-4 paddBottom30">
				<div class="h5featuredPointsBox h5featuredPointsBox<?php echo $counter;?>">
					<div class="h5featuredPointsTitle paddBottom10 clrWhite"><?php the_sub_field('title');?></div>
					<div class="h5featuredPointsText clrWhite"><?php the_sub_field('text');?></div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if(get_field('page_heading') || get_field('video1_image')):?>
<div class="h5secton2 paddTop90 paddBottom90">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-6 h5circleList h5blueCircleList">
				<h1><?php the_field('page_heading');?></h1>
				<?php the_field('page_text');?>
				<?php the_field('page_details');?>
				<div class="paddTop30"><a href="#contactPopUpForm" class="commonBtn fancybox-inline">Send Inquiry Now</a></div>
			</div>
			<div class="col-sm-12 col-md-6 responsiveMargin">
				<?php $video1Img = get_field('video1_image') ?>
				<?php $video1Link = get_field('video1_link') ?>
				<?php if($video1Link != ''): ?>
				<div class="h5videoBox"><a href="<?php echo $videoLink; ?>"><img src="<?php echo $video1Img['url']; ?>" alt="<?php echo $video1Img['alt']; ?>" width="<?php echo $video1Img['width']; ?>" height="<?php echo $video1Img['height']; ?>"></a></div>
				<?php else: ?>
				<div class="text-center"><img src="<?php echo $video1Img['url']; ?>" alt="<?php echo $video1Img['alt']; ?>" width="<?php echo $video1Img['width']; ?>" height="<?php echo $video1Img['height']; ?>"></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if(get_field('products_heading') || get_field('products')):?>
<div class="h5productSection paddBottom60">
	<div class="container-fluid">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom60">
				<div class="h5productHeading">
					<h2><?php the_field('products_heading');?></h2>
				</div>
			</div>
		</div>
		<div class="row text-center">
			<div class="clearfix"></div>
			<?php $count = 0; ?>
			<?php $countSM = 0; ?>
			<?php while ( have_rows('products') ) : the_row();?>
			<?php $count++; ?>
			<?php $countSM++; ?>
			<div class="col-sm-12 col-md-4 paddBottom30">
				<div class="h5productBox">
					<?php $productImg = get_sub_field('image') ?>
					<div class="h5productImgWrapper"><div class="h5productImg"><a href="<?php the_sub_field('link');?>"><img src="<?php echo $productImg['url']; ?>" alt="<?php echo $productImg['alt']; ?>" class="img-responsive"></a></div></div>
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
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('tabs') ):?>
<div class="h5tabSection paddTop90 paddBottom85">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom30">
				<h2><?php the_field('tabs_heading');?></h2>
			</div>
			<div class="clearfix"></div>
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
<?php if( get_field('process_heading') || get_field('process_boxes') ):?>
<div class="h5processSection paddTop90 paddBottom40">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom40">
				<h2><?php the_field('process_heading')?></h2>
			</div>
			<div class="clearfix"></div>
			<?php $count = 0; ?>
			<?php while ( have_rows('process_boxes') ) : the_row();?>
			<?php $count++; ?>
			<div class="col-sm-6 col-md-3 paddBottom30">
				<div class="h5processBox">
					<?php $processImg = get_sub_field('image') ?>
					<div class="h5processImg"><img src="<?php echo $processImg['url'];?>" alt="<?php echo $processImg['alt'];?>" class="img-responsive"></div>
					<div class="h5processTitle paddTop25 paddBottom10"><?php the_sub_field('title');?></div>
					<div class="h5processText"><?php the_sub_field('text');?></div>
				</div>
			</div>
			<?php if($count == 4):?>
			<div class="clearfix"></div>
			<?php $count = 0; ?>
			<?php endif;?>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('why_us_heading') || get_field('why_us_boxes') ):?>
<div class="h5whyusSection paddBottom60">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom60">
				<h2 class="clrWhite"><?php the_field('why_us_heading');?></h2>
			</div>
			<div class="clearfix"></div>
			<?php $whyus_count = 0; ?>
			<?php $whyus_countSM = 0; ?>
			<?php while ( have_rows('why_us_boxes') ) : the_row();?>
			<?php $whyus_count++; ?>
			<?php $whyus_countSM++; ?>
			<?php $whyus_counter++;?>
			<div class="col-sm-6 col-md-4 col-xs-12 paddBottom30">
				<div class="h5whyusBox h5whyusBox<?php echo $whyus_counter;?>">
					<div class="h5whyusContent text-left">
						<div class="h5whyusTitle clrWhite"><?php the_sub_field('title');?></div>
						<div class="h5whyusText clrWhite"><?php the_sub_field('text');?></div>
					</div>
				</div>
			</div>
			<?php if($whyus_count == 3):?>
			<div class="clearfix hidden-sm"></div>
			<?php $whyus_count = 0; ?>
			<?php endif;?>
			<?php if($whyus_countSM == 2):?>
			<div class="clearfix visible-sm"></div>
			<?php $whyus_countSM = 0; ?>
			<?php endif;?>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('video2_image') || get_field('video2_heading') ):?>
<div class="h5section7 paddTop90 paddBottom90">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-6">
				<?php $video2Img = get_field('video2_image') ?>
				<?php $video2Link = get_field('video2_link') ?>
				<?php if($video2Link != ''): ?>
				<div class="h5videoBox h5whitePlayIcon"><a href="<?php echo $video2Link; ?>"><img src="<?php echo $video2Img['url']; ?>" alt="<?php echo $video2Img['alt']; ?>" width="<?php echo $video2Img['width']; ?>" height="<?php echo $video2Img['height']; ?>"></a></div>
				<?php else: ?>
				<div class="text-center"><img src="<?php echo $video2Img['url']; ?>" alt="<?php echo $video2Img['alt']; ?>" width="<?php echo $video2Img['width']; ?>" height="<?php echo $video2Img['height']; ?>"></div>
				<?php endif; ?>
				
			</div>
			<div class="col-sm-12 col-md-6 responsiveMargin">
				<h2><?php the_field('video2_heading');?></h2>
				<?php the_field('video2_description');?>
				<div><a href="#contactPopUpForm" class="commonBtn fancybox-inline">Send Inquiry Now</a></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('video3_image') || get_field('video3_heading') ):?>
			</div>
			<div class="col-sm-12 col-md-6 responsiveMargin">
				<?php while ( have_rows('video_quote_box') ) : the_row();?>
				<div class="h5QuoteBox">
					<div class="h5QuoteText"><?php the_sub_field('text');?></div>
					<div class="h5QuoteName text-right"><?php the_sub_field('name');?></div>
				</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('clients_heading') || get_field('clients') ):?>
<div class="h5clientSection paddTop90 paddBottom60">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom20">
				<h2><?php the_field('clients_heading');?></h2>
			</div>
			<div class="clearfix"></div>
			<?php while ( have_rows('clients') ) : the_row();?>
			<div class="col-sm-6 col-md-3 paddBottom30">
				<div class="h5clientBox">
					<?php $clientImg = get_sub_field('image') ?>
					<div class="h5clientImg"><img src="<?php echo $clientImg['url']; ?>" alt="<?php echo $clientImg['alt']; ?>" class="img-responsive"></div>
					<div class="h5clientTitle paddTop30 paddBottom15"><?php the_sub_field('title');?></div>
					<div class="h5clientText"><?php the_sub_field('text');?></div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('featured_products_heading') || get_field('featured_products') ):?>
<div class="h5FeaturedProductSection greySection paddTop90 paddBottom60">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 paddBottom50">
				<h2><?php the_field('featured_products_heading');?></h2>
			</div>
			<div class="clearfix"></div>
			<?php while ( have_rows('featured_products') ) : the_row();?>
			<div class="col-sm-12 col-md-4 paddBottom30">
				<div class="h5featuredProductBox">
					<?php $fProdductImg = get_sub_field('image') ?>
					<div class="h5featuredProductImg"><a href="<?php the_sub_field('link');?>"><img src="<?php echo $fProdductImg['url'];?>" alt="<?php echo $fProdductImg['alt'];?>" class="img-responsive"></a></div>
					<div class="h5featuredProductContent">
						<div class="h5featuredProductTitle paddTop30 paddBottom10"><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></div>
						<div class="h5featuredProductText"><?php the_sub_field('text');?></div>
						<div class="h5featuredProductLink paddTop15 paddBottom15"><a href="<?php the_sub_field('link');?>">Learn More</a></div>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>

<?php get_footer(); ?>