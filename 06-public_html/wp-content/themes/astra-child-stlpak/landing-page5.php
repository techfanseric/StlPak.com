<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: Landing Page 5
?>

<?php if( get_field('banner')):?>
<?php while ( have_rows('banner') ) : the_row();?>
<?php if(get_sub_field('image') || get_sub_field('heading')):?>
<div class="pc3Banner paddTop70 paddBottom70" <?php if(get_sub_field('background')){ ?>style="background-image: url(<?php the_sub_field('background');?>);" <?php  } ?>>
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 <?php if(get_sub_field('image')){echo 'col-md-7';}?>">
				<h1 class="lp5BannerHeading" style="color:<?php the_sub_field('heading_color');?>"><?php the_sub_field('heading');?></h1>
				<div class="lp5BannerDetails">
					<?php the_sub_field('description');?>
					<?php if(get_sub_field('button_text')):?>
						<div class="paddTop10"><a href="#contactPopUpForm" class="commonBtn fancybox-inline"><?php the_sub_field('button_text');?></a></div>
					<?php endif; ?>
				</div>
			</div>
			<?php if(get_sub_field('image')):?>
			<div class="col-sm-12 col-md-5 responsiveMargin">
				<?php $lp5BannerImg = get_sub_field('image'); ?>
				<div class="lp5BannerImg "><img src="<?php echo $lp5BannerImg['url']; ?>" alt="<?php echo $lp5BannerImg['alt']; ?>" width="<?php echo $lp5BannerImg['width']; ?>" height="<?php echo $lp5BannerImg['height']; ?>"></div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php endif;?>
<?php endwhile; ?>
<?php endif;?>
<?php if( get_field('section1')):?>
<?php while ( have_rows('section1') ) : the_row();?>
<?php if(get_sub_field('heading') || get_sub_field('text')):?>
<div class="lp5Section1 ltBlueSection">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 lp5S1Content <?php if(get_sub_field('contact_form')){echo 'col-md-8';}?>">
				<h2><?php the_sub_field('heading');?></h2>
				<div class="lp5S1Text"><?php the_sub_field('text');?></div>
			</div>
			<?php if(get_sub_field('contact_form')):?>
			<div class="col-sm-12 col-md-4 responsiveMargin">
				<div class="pc3Form lp5Form">
					<div class="pc3FormTitle"><?php the_sub_field('contact_form_heading');?></div>
					<?php the_sub_field('contact_form');?>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php endif;?>
<?php endwhile; ?>
<?php endif;?>
<?php $counter = 1; ?>
<?php if( get_field('product_section') ):?>
<?php while ( have_rows('product_section') ) : the_row();?>
<div class="pc3ProductSection paddTop70 paddBottom40  <?php if($counter%2 == 0){echo 'greySection';} ?>">
    <div class="container">
        <div class="row cust-row <?php if( get_sub_field('products_alignment') == 'Left' ){echo 'text-left';}else if( get_sub_field('products_alignment') == 'Center' ){echo 'text-center';}else if( get_sub_field('products_alignment') == 'Right' ){echo 'text-right';}?>">
			<div class="col-sm-12 paddBottom30 text-center">
				<h2><?php the_sub_field('products_heading');?></h2>
			</div>
			<div class="clearfix"></div>
			<?php if( get_sub_field('products') ):?>
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
			<?php endif; ?>
        </div>
    </div>
</div>
<?php $counter++; ?>
<?php endwhile; ?>
<?php endif;?>
<?php if( get_field('section2')):?>
<?php while ( have_rows('section2') ) : the_row();?>
<?php if(get_sub_field('heading') || get_sub_field('details')):?>
<div class="lp5Section2 paddTop70 paddBottom70">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 <?php if(get_sub_field('text')){echo 'col-md-5';}?>">
				<h2><?php the_sub_field('heading');?></h2>
				<div class="lp5S2Text"><?php the_sub_field('details');?></div>
				<?php if(get_sub_field('button_text')):?>
					<div class="paddTop10"><a href="<?php the_sub_field('button_link');?>" class="commonBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
				<?php endif;?>
			</div>
			<?php if(get_sub_field('text')):?>
			<div class="col-sm-12 col-md-7 responsiveMargin">
				<div class="lp5S2Text2"><?php the_sub_field('text'); ?></div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php endif;?>
<?php endwhile; ?>
<?php endif;?>
<?php if( get_field('section3')):?>
<?php while ( have_rows('section3') ) : the_row();?>
<?php if(get_sub_field('heading') || get_sub_field('image') || get_sub_field('points')):?>
<div class="lp5Section3 greySection paddTop70 paddBottom70">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 paddBottom15 text-center">
				<h2><?php the_sub_field('heading');?></h2>
			</div>
			<div class="col-sm-12 col-md-5">
				<?php $lp5s3Img = get_sub_field('image') ?>
				<?php $lp5s3Link = get_sub_field('video_link') ?>
				<?php if($lp5s3Link != '' && $lp5s3Img): ?>
				<div class="videoImg"><a href="<?php echo $lp5s3Link; ?>"><img src="<?php echo $lp5s3Img['url']; ?>" alt="<?php echo $lp5s3Img['alt']; ?>" width="<?php echo $lp5s3Img['width']; ?>" height="<?php echo $lp5s3Img['height']; ?>"></a></div>
				<?php else: ?>
				<div class="pc3Section3img"><img src="<?php echo $lp5s3Img['url']; ?>" alt="<?php echo $lp5s3Img['alt']; ?>" width="<?php echo $lp5s3Img['width']; ?>" height="<?php echo $lp5s3Img['height']; ?>"></div>
				<?php endif; ?>
			</div>
			<?php if( get_sub_field('points')): ?>
			<div class="col-sm-12 col-md-7 responsiveMargin">
				<?php $count = 0; ?>
				<?php while ( have_rows('points') ) : the_row();?>
					<?php $count++; ?>
					<div class="col-sm-6">
						<div class="lp5FeaturedPoints">
							<div class="lp5FPTitle"><?php the_sub_field('title'); ?></div>
							<div class="lp5FPText"><?php the_sub_field('text'); ?></div>
						</div>
					</div>
					<?php if($count == 2): ?>
						<div class="clearfix"></div>
						<?php $count = 0; ?>
					<?php endif; ?>
				<?php endwhile; ?>
			</div>
			<?php endif;?>
		</div>
	</div>
</div>
<?php endif;?>
<?php endwhile; ?>
<?php endif;?>
<?php if( get_field('section4')):?>
<?php while ( have_rows('section4') ) : the_row();?>
<?php if(get_sub_field('heading') || get_sub_field('details')):?>
<div class="lp5Section2 paddTop70 paddBottom70">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-6">
				<h2><?php the_sub_field('heading');?></h2>
				<div class="lp5S4Text"><?php the_sub_field('text');?></div>
			</div>
			<div class="col-sm-12 col-md-6 responsiveMargin">
				<?php $lp5s4Img = get_sub_field('image') ?>
				<?php $lp5s4Link = get_sub_field('video_link') ?>
				<?php if($lp5s4Link != '' && $lp5s4Img): ?>
				<div class="videoImg"><a href="<?php echo $lp5s4Link; ?>"><img src="<?php echo $lp5s4Img['url']; ?>" alt="<?php echo $lp5s4Img['alt']; ?>" width="<?php echo $lp5s4Img['width']; ?>" height="<?php echo $lp5s4Img['height']; ?>"></a></div>
				<?php else: ?>
				<div class="pc3Section3img"><img src="<?php echo $lp5s4Img['url']; ?>" alt="<?php echo $lp5s4Img['alt']; ?>" width="<?php echo $lp5s4Img['width']; ?>" height="<?php echo $lp5s4Img['height']; ?>"></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php endif;?>
<?php endwhile; ?>
<?php endif;?>
<?php if( get_field('section5') ):?>
<div class="pc2TabSection paddTop70 paddBottom70 h3BorderSection">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12">
				<div class="pc2TabsWrapper">
					<ul class="pc2Tabs">
						<?php $j=1;?>
						<?php while ( have_rows('section5') ) : the_row();?>
						<li class="tab-link <?php if($j == 1){echo 'current';};?>" data-tab="tab-<?php echo $j;?>"><?php the_sub_field('title') ?></li>
						<?php $j++;?>
						<?php endwhile; ?>
					</ul>
					<?php $h=1;?>
					<?php while ( have_rows('section5') ) : the_row();?>
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
<?php if( get_field('section5a') ):?>
<div class="lp5FAQsSection paddTop20 paddBottom70">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 lp5FAQs">
				<?php while ( have_rows('section5a') ) : the_row();?>
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
<?php if( get_field('section6')):?>
<?php while ( have_rows('section6') ) : the_row();?>
<?php if(get_sub_field('heading') || get_sub_field('testimonial')):?>
<div class="lp5Section6 paddTop70 paddBottom70 greySection">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 paddBottom15 text-center">
				<h2><?php the_sub_field('heading');?></h2>
			</div>
			<?php $count = 0; ?>
			<?php if( get_sub_field('testimonial')): ?>
			<?php while ( have_rows('testimonial') ) : the_row();?>
				<?php $count++; ?>
				<?php $lp5Author = get_sub_field('image'); ?>
				<div class="col-sm-12 col-md-6 paddBottom30">
					<div class="lp5Testimonial">
						<div class="lp5Review"><?php the_sub_field('text'); ?></div>
						<div class="lp5Author"><img src="<?php echo $lp5Author['url']; ?>" alt="<?php echo $lp5Author['alt']; ?>" width="<?php echo $lp5Author['width']; ?>" height="<?php echo $lp5Author['height']; ?>"><?php the_sub_field('Author'); ?></div>
					</div>
				</div>
				<?php if($count == 2): ?>
					<div class="clearfix"></div>
					<?php $count = 0; ?>
				<?php endif; ?>
			<?php endwhile; ?>
			<?php endif;?>
		</div>
	</div>
</div>
<?php endif;?>	
<?php endwhile; ?>
<?php endif;?>		
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