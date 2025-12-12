<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: Landing Page
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
				<div class="bannerText" style="color:<?php the_sub_field('heading_color');?>"><?php the_sub_field('banner_text');?></div>
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
<?php if(get_field('section1_heading') || get_field('section1_details')):?>
<div class="xyzSection1 greySection paddTop80 paddBottom50">
	<div class="container">
		<div class="row cust-row <?php if( get_field('section1_alignment') == 'Left' ){echo 'text-left';}else if( get_field('section1_alignment') == 'Center' ){echo 'text-center';}else if( get_field('section1_alignment') == 'Right' ){echo 'text-right';}?>">
			<div class="col-sm-12">
				<h1><?php the_field('section1_heading');?></h1>
				<div class="clearfix paddTop20"></div>
				<?php the_field('section1_details');?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php $counter = 1; ?>
<?php if( have_rows('section_2') ):?>
<?php while ( have_rows('section_2') ) : the_row();?>
<div class="c3RepeatSection paddTop70 paddBottom70 <?php if($counter%2 == 0) {echo 'greySection';} ?>">
	<div class="container">
		<div class="row cust-row">
			<?php if($counter%2 == 1) : ?>
			<div class="col-sm-12 col-md-6">
				<h2><?php the_sub_field('section2_heading');?></h2>
				<?php the_sub_field('section2_details');?>
				<div><a href="#contactPopUpForm" class="commonBtn fancybox-inline"><?php the_sub_field('button_text');?></a></div>
			</div>
			<?php endif; ?>
			<div class="col-sm-12 col-md-6 <?php if($counter%2 == 1){echo "responsiveMargin"; }?>">
				<?php $section2Img = get_sub_field('section2_image') ?>
				<?php $videoLink = get_sub_field('video_link') ?>
				<?php if($videoLink != ''): ?>
				<div class="videoImg"><a href="<?php echo $videoLink; ?>"><img src="<?php echo $section2Img['url']; ?>" alt="<?php echo $section2Img['alt']; ?>" width="<?php echo $section2Img['width']; ?>" height="<?php echo $section2Img['height']; ?>"></a></div>
				<?php else: ?>
				<div class="p3Section3img"><img src="<?php echo $section2Img['url']; ?>" alt="<?php echo $section2Img['alt']; ?>" width="<?php echo $section2Img['width']; ?>" height="<?php echo $section2Img['height']; ?>"></div>
				<?php endif; ?>
			</div>
			<?php if($counter%2 == 0) : ?>
			<div class="col-sm-12 col-md-6 responsiveMargin">
				<h2><?php the_sub_field('section2_heading');?></h2>
				<?php the_sub_field('section2_details');?>
				<div><a href="#contactPopUpForm" class="commonBtn fancybox-inline"><?php the_sub_field('button_text');?></a></div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php $counter++; ?>
<?php endwhile; ?>
<?php endif;?>
<?php if( have_rows('products') ):?>
<div class="xyzProductSection paddTop75 paddBottom35">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12">
				<h2 class="sepHead"><?php the_field('products_heading');?></h2>
				<div class="xyzSectionText paddTop40"><?php the_field('products_text');?></div>
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
				<div class="xyzProductBox">
					<?php $productImg = get_sub_field('image') ?>
					<div class="xyzProductImg"><a href="<?php the_sub_field('link');?>"><img src="<?php echo $productImg['url']; ?>" alt="<?php echo $productImg['alt']; ?>" width="<?php echo $productImg['width']; ?>" height="<?php echo $productImg['height']; ?>"></a></div>
					<div class="xyzProductContent">
						<div class="xyzProductTitle"><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></div>
						<div class="xyzProductText"><?php the_sub_field('text');?></div>
					</div>
				</div>
				<div class="xyzProductBtn paddTop15"><a href="#contactPopUpForm" class="commonBtn fancybox-inline">Send Inquiry Now</a></div>
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
<?php if( have_rows('tabs') ):?>
<div class="xyzTabsHeading greySection paddTop70 paddBottom60">
	<div class="row cust-row text-center">
		<div class="col-sm-12">
			<h2 class="sepHead"><?php the_field('tabs_heading');?></h2>
		</div>
	</div>
</div>
<div class="xyztabSection paddBottom90">
	<div class="container">
		<div class="row cust-row">
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
<?php if(get_field('video_image')):?>
<div class="xyzSeperator"></div>
<div class="xyzContactSection paddTop75 paddBottom80">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 paddBottom40">
				<h2><?php the_field('contact_form_heading');?></h2>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-12 col-md-6">
				<div class="contactForm"><?php the_field('contact_form');?></div>
			</div>
			<div class="col-sm-12 col-md-6 responsiveMargin">
				<?php $videoImg = get_field('video_image') ?>
				<div class="videoImg"><a href="<?php the_field('video_link');?>?popoverlay=true&autoplay=1"><img src="<?php echo $videoImg['url']; ?>" alt="<?php echo $videoImg['alt']; ?>" width="<?php echo $videoImg['width']; ?>" height="<?php echo $videoImg['height']; ?>"></a></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if(get_field('section_5_heading') || get_field('section_5_details')):?>
<div class="xyzSeperator"></div>
<div class="xyzSection5 paddTop75 paddBottom50">
	<div class="container">
		<div class="row cust-row <?php if( get_field('section_5_alignment') == 'Left' ){echo 'text-left';}else if( get_field('section_5_alignment') == 'Center' ){echo 'text-center';}else if( get_field('section_5_alignment') == 'Right' ){echo 'text-right';}?>">
			<div class="col-sm-12">
				<h2><?php the_field('section_5_heading');?></h2>
				<div class="paddTop20"><?php the_field('section_5_details');?></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( have_rows('featured_boxes') ):?>
<div class="xyzFeaturedPointSection blueSection paddTop90 paddBottom50">
	<div class="container">
		<div class="row cust-row">
			<?php $count = 0; ?>
			<?php while ( have_rows('featured_boxes') ) : the_row();?>
				<?php $count++; ?>
				<div class="col-sm-12 col-md-6 paddBottom30">
					<div class="xyzFeaturedPointBox">
						<?php $featuredImg = get_sub_field('image'); ?>
						<div class="xyzFeaturedPointImg"><img src="<?php echo $featuredImg['url']; ?>" alt="<?php echo $featuredImg['alt']; ?>" width="<?php echo $featuredImg['width']; ?>" height="<?php echo $featuredImg['height']; ?>"></div>
						<div class="xyzFeaturedPointContent">
							<div class="xyzFeaturedPointTitle"><?php the_sub_field('title');?></div>
							<div class="xyzFeaturedPointText"><?php the_sub_field('text');?></div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<?php if($count == 2):?>
					<div class="clearfix"></div>
					<?php $count = 0; ?>
				<?php endif;?>
			<?php endwhile; ?>
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
					<div class="quickQuoteTitle paddBottom5"><?php the_field('contact_form_heading2');?></div>
					<?php the_field('contact_form2');?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>


<?php get_footer(); ?>