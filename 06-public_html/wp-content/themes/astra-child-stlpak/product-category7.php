<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: Product Category 7
?>

<?php if( get_field('banner') ):?>
<?php while ( have_rows('banner') ) : the_row();?>
<?php if( get_sub_field('background') || get_sub_field('heading')):?>
<div class="bannerWraper pc6Banner">
    <?php $bannerImg = get_sub_field('background') ?>
	<div class="bannerImg"><img src="<?php echo $bannerImg['url']; ?>" alt="<?php echo $bannerImg['alt']; ?>" width="<?php echo $bannerImg['width']; ?>" height="<?php echo $bannerImg['height']; ?>"></div>
	<div class="container">
		<div class="row cust-row">
			<div class="bannerContent">
				<h1 class="bannerHeading" style="color:<?php the_sub_field('color');?>"><?php the_sub_field('heading');?></h1>
				<div class="bannerText" style="color:<?php the_sub_field('color');?>"><?php the_sub_field('text');?></div>
				<?php if(get_sub_field('button_text')):?>
				<div class="bannerBtn paddTop30"><a href="#contactPopUpForm" class="commonBtn fancybox-inline"><?php the_sub_field('button_text');?></a></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<div class="pc5Wrapper">
<?php if(get_field('menu_links')): ?>
<div class="pc7ScrollSection">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 pc7ssContent">
				<ul>
					<?php while (have_rows('menu_links')) : the_row();?>
						<li><a href="<?php the_sub_field('link');?>" target="_blank"><?php the_sub_field('title');?></a></li>
					<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('section1') ):?>
<?php while ( have_rows('section1') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('products')):?>
<div id="pc7Section1" class="pc7Section1 paddTop70 paddBottom70">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 col-lg-offset-1 col-lg-10 paddBottom40">
				<h2><?php the_sub_field('heading');?></h2>
				<div class="pc6SubHeading"><?php the_sub_field('text');?></div>
				<?php if(get_sub_field('cta_text')):?>
				<div class="pc6CTA paddTop10"><a href="<?php the_sub_field('cta_link');?>" target="_blank"><?php the_sub_field('cta_text');?></a></div>
				<?php endif; ?>
			</div>
			<div class="clearfix"></div>
			<?php if(get_sub_field('products')):?>
			<?php
				$count = 0;

				if(get_sub_field('product_per_page')){
					$productPerPage = get_sub_field('product_per_page');	
				}else{
					$productPerPage = 8;	
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
				?>
				<?php $pc6s2Img1 = get_sub_field('image') ?>
				<?php $pc6s2Img2 = get_sub_field('back_image') ?>
				<?php 
				if(get_sub_field('link')){
					$productLink = get_sub_field('link');
				}else{
					$productLink = "javascript:void(0);";
				}
			?>
			<div class="col-sm-6 col-md-3 paddBottom30">
				<div class="pc6s2Box">
					
					<div class="pc6s2Img"><a href="<?php echo $productLink;?>"><img class="pc6s2Img1" src="<?php echo $pc6s2Img1['url']; ?>" alt="<?php echo $pc6s2Img1['alt']; ?>" width="<?php echo $pc6s2Img1['width']; ?>" alt="<?php echo $pc6s2Img1['height']; ?>"><img class="pc6s2Img2" src="<?php echo $pc6s2Img2['url']; ?>" alt="<?php echo $pc6s2Img2['alt']; ?>" width="<?php echo $pc6s2Img2['width']; ?>" alt="<?php echo $pc6s2Img2['height']; ?>"></a></div>
					<div class="pc6s2SKU"><?php the_sub_field('sku');?></div>
					<div class="pc6s2Title"><a href="<?php echo $productLink;?>"><?php the_sub_field('title');?></a></div>
				</div>
			</div>
			<?php if($count == 2):?>
				<div class="clearfix visible-sm"></div>
			<?php endif; ?>
			<?php if($count == 4):?>
				<div class="clearfix"></div>
				<?php $count = 0; ?>
			<?php endif; ?>
			<?php
				endwhile;
				// Pagination
				echo '<div class="col-sm-12">';
				echo '<div class="pc7PageNo">';
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
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section2') ):?>
<?php while ( have_rows('section2') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('products')):?>
<div id="pc7Section2" class="pc7Section2 paddTop70 paddBottom40 greySection">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-lg-6">
				<h2><?php the_sub_field('heading');?></h2>
				<div class="hp10SubHeading"><?php the_sub_field('text');?></div>
			</div>
		</div>
		<div class="row cust-row text-center paddTop40">
			<?php $count = 0; ?>
			<?php while ( have_rows('products') ) : the_row();?>
			<?php $count++; ?>
			<?php $pc7s2Img = get_sub_field('image') ?>
			<div class="col-sm-6 col-md-3 paddBottom30">
				<div class="pc7s2Box hp10s3Box">
					<div class="hp10s3Img"><a href="<?php the_sub_field('link');?>"><img src="<?php echo $pc7s2Img['url']; ?>" alt="<?php echo $pc7s2Img['alt']; ?>" width="<?php echo $pc7s2Img['width']; ?>" height="<?php echo $pc7s2Img['height']; ?>"></a></div>
					<div class="hp10s3Content">
						<div class="hp10s3Title"><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></div>
						<div class="hp10s3Link paddTop5"><a href="<?php the_sub_field('link');?>">Readmore</a></div>
					</div>
				</div>
			</div>
			<?php if($count == 2):?>
				<div class="clearfix visible-sm"></div>
			<?php endif; ?>
			<?php if($count == 4):?>
				<div class="clearfix"></div>
				<?php $count = 0; ?>
			<?php endif; ?>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section3') ):?>
<?php while ( have_rows('section3') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('tabs')):?>
<div id="pc7Section3" class="pc7Section3 paddTop70 paddBottom40">
	<div class="container paddBottom40">
		<div class="row cust-row rowFlexEnd">
			<div class="col-sm-12 col-lg-6">
				<h2><?php the_sub_field('heading');?></h2>
				<div class="hp10SubHeading"><?php the_sub_field('text');?></div>
			</div>
			<?php if(get_sub_field('cta_text')):?>
			<div class="col-sm-12 col-lg-6">
				<div class="pc6CTA pc7s4CTA"><a href="<?php the_sub_field('cta_link');?>" target="_blank"><?php the_sub_field('cta_text');?></a></div>
			</div>
			<?php endif; ?>
		</div>
	</div>
	<div class="pc7s3TabsWraper">
		<div class="pc7s3Tabs">
			<div class="container">
				<ul class="tabs">
					<?php $j=1;?>
					<?php while ( have_rows('tabs') ) : the_row();?>
					<li class="tab-link <?php if($j == 1){echo 'current';};?>" data-tab="tab-<?php echo $j;?>"><?php the_sub_field('title') ?></li>
					<?php $j++;?>
					<?php endwhile; ?>
				</ul>
			</div>
		</div>
		<div class="container paddTop40">
			<?php $h=1;?>
			<?php while ( have_rows('tabs') ) : the_row();?>
			<div id="tab-<?php echo $h;?>" class="tab-content <?php if($h == 1){echo 'current';};?>">
				<?php the_sub_field('text') ?>
				<div class="clearfix"></div>
				<div class="row text-center">
					<?php $count = 0; ?>
					<?php while ( have_rows('products') ) : the_row();?>
					<?php $count++; ?>
					<?php $pc7s3Img = get_sub_field('image') ?>
					<div class="col-sm-6 col-md-3 paddBottom30">
						<div class="pc7s3Box hp10s3Box">
							<div class="hp10s3Img"><a href="<?php the_sub_field('link');?>"><img src="<?php echo $pc7s3Img['url']; ?>" alt="<?php echo $pc7s3Img['alt']; ?>" width="<?php echo $pc7s3Img['width']; ?>" height="<?php echo $pc7s3Img['height']; ?>"></a></div>
							<div class="hp10s3Content">
								<div class="hp10s3Title"><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></div>
								<div class="hp10s3Text"><?php the_sub_field('text');?></div>
							</div>
						</div>
					</div>
					<?php if($count == 2):?>
					<div class="clearfix visible-sm"></div>
					<?php endif; ?>
					<?php if($count == 4):?>
					<div class="clearfix"></div>
					<?php $count = 0; ?>
					<?php endif; ?>
					<?php endwhile; ?>
				</div>
			</div>
			<?php $h++;?>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>


<?php if( get_field('section4') ):?>
<?php while ( have_rows('section4') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('featured_points')):?>
<div id="pc7Section4" class="pc7Section4 paddTop70 paddBottom40 greySection">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 col-lg-offset-1 col-lg-10 paddBottom40">
				<h2><?php the_sub_field('heading');?></h2>
				<div class="pc6SubHeading"><?php the_sub_field('text');?></div>
			</div>
			<div class="col-sm-12 paddBottom50">
				<?php $pc7s4Img = get_sub_field('image') ?>
				<div class="pc7s4Img"><img src="<?php echo $pc7s4Img['url']; ?>" alt="<?php echo $pc7s4Img['alt']; ?>" width="<?php echo $pc7s4Img['width']; ?>" height="<?php echo $pc7s4Img['height']; ?>"></div>
			</div>
			<?php $count = 0; ?>
			<?php $countSM = 0; ?>
			<?php while ( have_rows('featured_points') ) : the_row();?>
			<?php $count++; ?>
			<?php $countSM++; ?>
			<div class="col-sm-6 col-md-4 paddBottom30">
				<div class="pc7s4Box">
					<div class="pc7s4Title"><?php the_sub_field('title');?></div>
					<div class="pc7s4Text"><?php the_sub_field('text');?></div>
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
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section5') ):?>
<?php while ( have_rows('section5') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('featured_points')):?>
<div id="pc7Section5" class="pc7Section5 paddTop70 paddBottom40">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 col-lg-offset-1 col-lg-10 paddBottom40">
				<h2><?php the_sub_field('heading');?></h2>
				<div class="pc6SubHeading"><?php the_sub_field('text');?></div>
				<?php if(get_sub_field('cta_text')):?>
				<div class="pc6CTA paddTop10"><a href="<?php the_sub_field('cta_link');?>" target="_blank"><?php the_sub_field('cta_text');?></a></div>
				<?php endif; ?>
			</div>
			<div class="clearfix"></div>
			<?php $count = 0; ?>
			<?php $countSM = 0; ?>
			<?php while ( have_rows('featured_points') ) : the_row();?>
			<?php $count++; ?>
			<?php $countSM++; ?>
			<?php $pc6s4Img = get_sub_field('image') ?>
			<div class="col-sm-6 col-md-4 paddBottom30">
				<div class="pc6s4Box">
					<div class="pc6s4Img"><img src="<?php echo $pc6s4Img['url']; ?>" alt="<?php echo $pc6s4Img['alt']; ?>" width="<?php echo $pc6s4Img['width']; ?>" height="<?php echo $pc6s4Img['height']; ?>"></div>
					<div class="pc6s4Title"><?php the_sub_field('title');?></div>
					<div class="pc6s4Text"><?php the_sub_field('text');?></div>
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
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section6') ):?>
<?php while ( have_rows('section6') ) : the_row();?>
<?php if( get_sub_field('background')):?>
<div id="pc7Section6" class="pc7Section6 pc6Banner">
    <?php $bannerImg = get_sub_field('background') ?>
	<div class="bannerImg"><img src="<?php echo $bannerImg['url']; ?>" alt="<?php echo $bannerImg['alt']; ?>" width="<?php echo $bannerImg['width']; ?>" height="<?php echo $bannerImg['height']; ?>"></div>
	<?php if( get_sub_field('heading') || get_sub_field('text')):?>
	<div class="container">
		<div class="row cust-row">
			<div class="pc6BannerContent">
				<h2 class="pc6BannerHeading"><?php the_sub_field('heading');?></h2>
				<div class="pc6BannerText"><?php the_sub_field('text');?></div>
				<?php if(get_sub_field('button_text')):?>
					<div class="bannerBtn paddTop20"><a href="#contactPopUpForm" class="commonBtn fancybox-inline"><?php the_sub_field('button_text');?></a></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<?php endif; ?>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section7') ):?>
<?php while ( have_rows('section7') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('brands')):?>
<div id="pc7Section7" class="pc7Section7 greySection paddTop70 paddBottom40">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 col-lg-offset-1 col-lg-10 paddBottom30">
				<h2><?php the_sub_field('heading');?></h2>
				<div class="pc6SubHeading"><?php the_sub_field('sub_heading');?></div>
				<?php if(get_sub_field('cta_text')):?>
				<div class="pc6CTA paddTop10"><a href="<?php the_sub_field('cta_link');?>" target="_blank"><?php the_sub_field('cta_text');?></a></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="row margin0">
		<div class="col-sm-12">
			<ul class="pc6s5Slider">
				<?php while ( have_rows('brands') ) : the_row();?>
				<li class="slide">
					<div class="pc6s5Box">
						<?php $pc6s5Img = get_sub_field('image') ?>
						<div class="pc6s5Img"><img src="<?php echo $pc6s5Img['url']; ?>" alt="<?php echo $pc6s5Img['alt']; ?>" width="<?php echo $pc6s5Img['width']; ?>" height="<?php echo $pc6s5Img['height']; ?>"></div>
						<div class="pc6s5Title"><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></div>
						<div class="pc6s5Link"><a href="<?php the_sub_field('link');?>">Readmore</a></div>
					</div>
				</li>
				<?php endwhile; ?>
			</ul>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section8') ):?>
<?php while ( have_rows('section8') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('text')):?>
<div id="pc7Section8" class="pc7Section8 paddTop70 paddBottom40">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 col-lg-offset-1 col-lg-10 paddBottom30">
				<h2><?php the_sub_field('heading');?></h2>
				<div class="pc6SubHeading"><?php the_sub_field('text');?></div>
				<?php if(get_sub_field('cta_text')):?>
				<div class="paddTop25"><a href="#contactPopUpForm" class="commonBtn fancybox-inline"><?php the_sub_field('cta_text');?></a></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>