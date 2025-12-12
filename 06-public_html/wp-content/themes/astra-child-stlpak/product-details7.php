<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: Product Details 7
?>

<?php if( get_field('section1') ):?>
<?php while ( have_rows('section1') ) : the_row();?>
<?php if( get_sub_field('slider') || get_sub_field('title')):?>
<div class="pd7Section1 paddTop70 paddBottom70">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-6">
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
			<div class="col-sm-12 col-md-6 responsiveMargin MTdiamondList">
				<h1 class="pds1Heading"><?php the_sub_field('title');?></h1>
				<div class="paddTop5 paddBottom20"><?php the_sub_field('text');?></div>
				<div class="pd7s1Link paddBottom20"><a href="#pd7Section2">PRODUCT DETAILS</a></div>
				<?php if(get_sub_field('button_text')):?>
				<div><a href="#contactPopUpForm" class="commonBtn fancybox-inline"><?php the_sub_field('button_text');?></a></div>
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
				<?php $counter = 2; ?>
				<ul>
					<?php while (have_rows('scroll_links')) : the_row();?>
						<li><a href="#pd7Section<?php echo $counter; ?>"><?php the_sub_field('title');?></a></li>
						<?php $counter++; ?>
					<?php endwhile; ?>
					<li class="scrollTop"><a href="#masthead">Top</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if(get_field('section2')): ?>
<?php while ( have_rows('section2') ) : the_row();?>
<?php if(get_sub_field('title') || get_sub_field('text')): ?>
<div id="pd7Section2" class="pd7Section2 paddTop70 paddBottom50">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12">
				<h2><?php the_sub_field('title');?></h2>
				<div class="section2Text"><?php the_sub_field('text');?></div>
				<?php if(get_sub_field('readmore_text')):?>
					<div class="readMoreText section2RDText"><?php the_sub_field('readmore_text');?></div>
					<div class="readmoreBtn">Read More</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if(get_field('section3')): ?>
<?php while ( have_rows('section3') ) : the_row();?>
<?php if( get_sub_field('tabs') ):?>
<div id="pd7Section3" class="pd7Section3 paddTop70 paddBottom70 pc5BG">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 paddBottom30"><h2><?php the_sub_field('heading');?></h2></div>
			<div class="clearfix"></div>
			<div class="clearfix"></div>
			<div class="col-sm-12">
				<div class="pd7s3Tabs">
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
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section4') ):?>
<?php while ( have_rows('section4') ) : the_row();?>
<?php if( get_sub_field('text_section') ):?>
<div id="pd7Section4" class="pd7Section4 paddTop70">
	<div class="container">
		<div class="row cust-row paddBottom45">
			<div class="col-sm-12">
				<h2><?php the_sub_field('heading');?></h2>
			</div>
		</div>
		<?php $counter = 1; ?>
		<?php while ( have_rows('text_section') ) : the_row();?>
		<div class="row cust-row rowFlexEnd paddBottom70">
			<?php if($counter%2 == 0) : ?>
			<div class="col-sm-12 col-md-6">
				<div class="pd7s4Category"><?php the_sub_field('sub_title');?></div>
				<h3><?php the_sub_field('title');?></h3>
				<div class="pd7s4Text"><?php the_sub_field('text');?></div>
			</div>
			<?php endif; ?>
			<div class="col-sm-12 col-md-6 text-center <?php if($counter%2 == 0){echo "responsiveMargin"; }?>">
				<?php $pd7s4Img = get_sub_field('image') ?>
				<div class="pd7s4Img"><img src="<?php echo $pd7s4Img['url']; ?>" alt="<?php echo $pd7s4Img['alt']; ?>" width="<?php echo $pd7s4Img['width']; ?>" height="<?php echo $pd7s4Img['height']; ?>"></div>
			</div>
			<?php if($counter%2 == 1) : ?>
			<div class="col-sm-12 col-md-6 responsiveMargin">
				<div class="pd7s4Category"><?php the_sub_field('sub_title');?></div>
				<h3><?php the_sub_field('title');?></h3>
				<div class="pd7s4Text"><?php the_sub_field('text');?></div>
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
<?php if( get_field('section5') ):?>
<?php while ( have_rows('section5') ) : the_row();?>
<?php if(get_sub_field('category')):?>
<div id="pd7Section5" class="pd7Section5 paddTop70">
	<div class="container">
		<div class="row cust-row paddBottom45">
			<div class="col-sm-12">
				<h2><?php the_sub_field('heading');?></h2>
			</div>
		</div>
		<div class="row cust-row">
		<?php while (have_rows('category')) : the_row();?>
			<?php $pd7s5Img = get_sub_field('image'); ?>
			<div class="col-sm-6 col-md-4 paddBottom30">
				<div class="pd7s5Box rowFlex">
					<div class="pd7s5Img"><img src="<?php echo $pd7s5Img['url']; ?>" alt="<?php echo $pd7s5Img['alt']; ?>"></div>
					<div class="pd7s5Title"><?php the_sub_field('title');?></div>
					<div class="clearfix"></div>
				</div>
			</div>
		<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif;?>
<?php endwhile; ?>
<?php endif;?>
<?php if( get_field('section6') ):?>
<?php while ( have_rows('section6') ) : the_row();?>
<?php if(get_sub_field('tabs')):?>
<div id="pd7Section6" class="pd7Section6 paddTop70">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 paddBottom45">
				<h2><?php the_sub_field('heading');?></h2>
			</div>
		</div>
		<div class="row cust-row">
			<div class="col-sm-12">
				<div class="pd7s6Tabs">
					<ul class="tabs2">
						<?php $j=50;?>
						<?php while ( have_rows('tabs') ) : the_row();?>
						<li class="tab-link <?php if($j == 50){echo 'current';};?>" data-tab="tab-<?php echo $j;?>"><?php the_sub_field('title') ?></li>
						<?php $j++;?>
						<?php endwhile; ?>
					</ul>
					<?php $h=50;?>
					<?php while ( have_rows('tabs') ) : the_row();?>
					<div id="tab-<?php echo $h;?>" class="tab-content2 <?php if($h == 50){echo 'current';};?>">
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
<?php endwhile; ?>
<?php endif;?>
<?php if( get_field('section7') ):?>
<?php while ( have_rows('section7') ) : the_row();?>
<?php if( get_sub_field('product') ):?>
<div id="pd7Section7" class="pd7Section7 paddTop70 paddBottom40">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 paddBottom30">
				<?php $totalProduct = count(get_sub_field('product')); ?>
				<h2><?php the_sub_field('heading');?> <span class="pc3sProductCount">(<?php echo $totalProduct; ?>)</span></h2>
			</div>
		</div>
		<div class="row cust-row">
			<ul class="pc3ProductSlider">
				<?php while ( have_rows('product') ) : the_row();?>
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
<?php if( get_field('section8') ):?>
<?php while ( have_rows('section8') ) : the_row();?>
<?php if( get_sub_field('downloads') || get_sub_field('title')):?>
<div id="pd7Section8" class="pd7Section8 paddTop70 paddBottom60 pc5BG">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 paddBottom30">
				<h2><?php the_sub_field('heading');?></h2>
			</div>
		</div>
		<div class="row cust-row rowFlexEnd">
			<div class="col-sm-7">
				<?php while ( have_rows('downloads') ) : the_row();?>
					<div class="pd7s8Box">
						<a href="<?php the_sub_field('link');?>" target="_blank">
							<div class="pd7s8DCategory"><?php the_sub_field('category');?></div>
							<div class="pd7s8DTitle"><?php the_sub_field('title');?></div>
							<div class="pd7s8DFile"><?php the_sub_field('file_type');?></div>
						</a>
					</div>
				<?php endwhile; ?>
			</div>
			<div class="col-sm-5">
				<div class="pd7s8Title"><?php the_sub_field('title');?></div>
				<div class="pd7s8Text"><?php the_sub_field('text');?></div>
				<?php if(get_sub_field('button_text')):?>
				<div class="paddBottom15 paddTop15"><a href="<?php the_sub_field('button_link');?>" class="commonBtn" target="_blank"><?php the_sub_field('button_text');?></a></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif;?>
<?php if( get_field('section9') ):?>
<?php while ( have_rows('section9') ) : the_row();?>
<?php if( get_sub_field('image')):?>
<div id="pd7Section9" class="pd7Section9 paddTop15">
	<div class="container container1400">
		<div class="row cust-row">
			<div class="col-sm-12">
				<?php $videoImg = get_sub_field('image') ?>
				<div class="videoImg"><a href="<?php the_sub_field('link');?>"><img src="<?php echo $videoImg['url']; ?>" alt="<?php echo $videoImg['alt']; ?>" width="<?php echo $videoImg['width']; ?>" height="<?php echo $videoImg['height']; ?>"></a></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif;?>
<?php if( get_field('section10') ):?>
<?php while ( have_rows('section10') ) : the_row();?>
<?php if( get_sub_field('videos') || get_sub_field('heading')):?>
<div id="pd7Section10" class="pd7Section10 paddTop70 paddBottom40">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 paddBottom50">
				<h3><?php the_sub_field('heading');?></h3>
			</div>
		</div>
		<div class="row cust-row">
			<div class="col-sm-12">
				<ul>
				<?php while ( have_rows('videos') ) : the_row();?>
					<li><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></li>
				<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif;?>
<?php if( get_field('section11') ):?>
<?php while ( have_rows('section11') ) : the_row();?>
<?php if( get_sub_field('title') || get_sub_field('image')):?>
<div id="pd7Section11" class="pd7Section11 paddTop30 paddBottom70">
	<div class="container">
		<div class="row cust-row rowFlex">
			<div class="col-sm-12 col-md-6">
				<h2><?php the_sub_field('title');?></h2>
				<div class="pds11Text"><?php the_sub_field('text');?></div>
				<?php if(get_sub_field('button_text')):?>
					<div class="paddTop10"><a href="<?php the_sub_field('button_link');?>" class="commonBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
				<?php endif; ?>
			</div>
			<div class="col-sm-12 col-md-6 responsiveMargin">
				<?php $pds11Img = get_sub_field('image') ?>
				<div class="pds11Img"><img src="<?php echo $pds11Img['url']; ?>" alt="<?php echo $pds11Img['alt']; ?>" width="<?php echo $pds11Img['width']; ?>" height="<?php echo $pds11Img['height']; ?>"></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif;?>
<?php if( get_field('section12') ):?>
<?php while ( have_rows('section12') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('gallery') ):?>
<div id="pd7Section12" id="pd7Section12" class="pd7Section12 paddTop70 paddBottom40 pc5BG">
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
<?php if( get_field('section13') ):?>
<?php while ( have_rows('section13') ) : the_row();?>
<?php if( get_sub_field('products') ):?>
<div id="pd7Section13" id="pd7Section13" class="pd7Section13 paddTop70 paddBottom40">
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
							<div class="c1ProductTitle paddBottom10"><a href="<?php echo $productLink; ?>"><?php the_sub_field('title');?></a></div>
							<div class="c1ProductText"><?php the_sub_field('text');?></div>
							<div class="c1ProductBtn"><a href="#contactPopUpForm" class="fancybox-inline">Send Inquiry Now</a></div>
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
<?php if( get_field('section14') ):?>
<?php while ( have_rows('section14') ) : the_row();?>
<?php if(get_sub_field('faqs')):?>
<div class="articleSection ltBlueSection paddTop70 paddBottom70">
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
	
<?php get_footer(); ?>