<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: Product Details
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
<div class="detailSection1 greySection paddTop70 paddBottom70">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-7">
				<?php if( have_rows('slider') ):?>
				<div class="productSliderWraper">
					<ul class="detailProductSlider">
						<?php while ( have_rows('slider') ) : the_row();?>
						<li class="slide">
							<?php $slider_image = get_sub_field('image') ?>
							<img src="<?php echo $slider_image['url']; ?>" alt="<?php echo $slider_image['alt']; ?>" width="<?php echo $slider_image['width']; ?>" height="<?php echo $slider_image['height']; ?>">
						</li>
						<?php endwhile; ?>
					</ul>
					<ul class="productSliderPager">
						<?php $i=0;?>
						<?php while ( have_rows('slider') ) : the_row();?>
						<li class="slide">
							<a class="block" data-slide-index="<?php echo $i;?>">
								<?php $slider_image = get_sub_field('image') ?>
								<img src="<?php echo $slider_image['url']; ?>" alt="<?php echo $slider_image['alt']; ?>" width="<?php echo $slider_image['width']; ?>" height="<?php echo $slider_image['height']; ?>">
							</a>
						</li>
						<?php $i++;?>
						<?php endwhile; ?>
					</ul>
				</div>
				<?php endif; ?>
			</div>
			<div class="col-sm-12 col-md-5 responsiveMargin diamondList">
				<h1><?php the_field('page_heading');?></h1>
				<div class="paddTop5 paddBottom20"><?php the_field('page_details');?></div>
				<div><a href="#contactPopUpForm" class="commonBtn fancybox-inline minwidth245">Send Your Inquiry Now</a></div>
			</div>
		</div>
	</div>
</div>
<?php if( get_field('tabs') ):?>
<div class="detailTabSection paddTop90 paddBottom90">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-8">
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
				  <div id="tab-<?php echo $h;?>" class="tab-content diamondList <?php if($h == 1){echo 'current';};?>">
					  <?php the_sub_field('text') ?>
					  <div class="clearfix"></div>
				  </div>
				  <?php $h++;?>
				  <?php endwhile; ?>
			  </div>
			</div>
			<?php if(get_field('catalog_image')): ?>
			<div class="col-sm-12 col-md-4 responsiveMargin text-center">
				<div class="catalogBox">
					<?php $eBookImg = get_field('ebook_image') ?>
					<div class="catalogImg"><a href="<?php the_field('ebook_link');?>" target="_blank"><img src="<?php echo $eBookImg['url']; ?>" alt="<?php echo $eBookImg['alt']; ?>" width="<?php echo $eBookImg['width']; ?>" height="<?php echo $eBookImg['height']; ?>"></a></div>
					<div class="catalogTitle paddTop20"><a href="<?php the_field('ebook_link');?>" target="_blank"><?php the_field('ebook_title');?></a></div>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php $counter = 1; ?>
<?php if( get_field('section_2') ):?>
<?php while ( have_rows('section_2') ) : the_row();?>
<div class="pc3RepeatSection paddTop75 paddBottom75 <?php if($counter%2 == 1){echo 'greySection';} ?>">
	<div class="container">
		<div class="row cust-row">
			<?php if($counter%2 == 0) : ?>
			<div class="col-sm-12 col-md-6">
				<h2><?php the_sub_field('section3_heading');?></h2>
				<?php the_sub_field('section3_details');?>
				<?php if(get_sub_field('button_text')):?>
					<div><a href="<?php the_sub_field('button_link');?>" class="commonBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
				<?php endif; ?>
			</div>
			<?php endif; ?>
			<div class="col-sm-12 col-md-6 <?php if($counter%2 == 0){echo "responsiveMargin"; }?>">
				<?php $section3Img = get_sub_field('section3_image') ?>
				<?php $videoLink = get_sub_field('video_link') ?>
				<?php if($videoLink != ''): ?>
				<div class="videoImg"><a href="<?php echo $videoLink; ?>"><img src="<?php echo $section3Img['url']; ?>" alt="<?php echo $section3Img['alt']; ?>" width="<?php echo $section3Img['width']; ?>" height="<?php echo $section3Img['height']; ?>"></a></div>
				<?php else: ?>
				<div class="pc3Section3img"><img src="<?php echo $section3Img['url']; ?>" alt="<?php echo $section3Img['alt']; ?>" width="<?php echo $section3Img['width']; ?>" height="<?php echo $section3Img['height']; ?>"></div>
				<?php endif; ?>
			</div>
			<?php if($counter%2 == 1) : ?>
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
<?php if( have_rows('products') ):?>
<div class="productSection ltBlueSection paddTop70 paddBottom70">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12">
				<h2><?php the_field('products_heading');?></h2>
				<div class="clearfix paddBottom20"></div>
				<ul class="img3Slider">
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
</div>
<?php endif; ?>
<?php if(get_field('article') || get_field('faqs')):?>
<div class="articleSection paddTop90 paddBottom90">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-8 diamondList productFAQs">
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
			<div class="col-sm-12 col-md-4 responsiveMargin">
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