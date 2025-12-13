<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: Home 10
?>

<!-- 暂时不显示滑块 -->
<!-- <div style="display: none;"><?php echo do_shortcode('[smartslider3 slider="2"]'); ?></div> -->
<?php if( get_field('section1') ):?>
<div class="hp10Section1 paddTop15 paddBottom15">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12">
				<ul class="wus1Slider">
					<?php while ( have_rows('section1') ) : the_row();?>
						<?php $wus1Img = get_sub_field('image'); ?>
						<li class="slide"><img src="<?php echo $wus1Img['url']; ?>" alt="<?php echo $wus1Img['alt']; ?>"></li>
					<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('section2') ):?>
<?php while ( have_rows('section2') ) : the_row();?>
<!-- hp10Section2 已移除 - 包含 Professional Food Packaging Supplier in China 和特色优势展示部分，用于全新重新设计 -->
<div class="design-placeholder" style="background: #4ecdc4; color: white; padding: 140px; text-align: center; border-radius: 8px;">
    <h2 style="margin: 0 0 10px 0;">🎨 设计预留区域 - Home 10 Section 2</h2>
    <p style="margin: 0; font-size: 16px;">原内容："Professional Food Packaging Supplier in China" 和4个特色优势展示已移除，等待全新设计</p>
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section3') ):?>
<?php while ( have_rows('section3') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('products')):?>
<div class="hp10Section3 paddTop70 paddBottom40 greySection">
	<div class="container">
		<div class="row cust-row rowFlexEnd">
			<div class="col-sm-12 col-lg-6">
				<h2><?php the_sub_field('heading');?></h2>
				<div class="hp10SubHeading"><?php the_sub_field('sub_heading');?></div>
			</div>
			<?php if(get_sub_field('button_text')): ?>
			<div class="col-sm-12 col-lg-6 hp10CTA pc6CTA"><a href="<?php the_sub_field('button_link');?>" target="_blank"><?php the_sub_field('button_text');?></a></div>
			<?php endif; ?>
		</div>
		<div class="row cust-row text-center paddTop40">
			<?php $count = 0; ?>
			<?php $countSM = 0; ?>
			<?php while ( have_rows('products') ) : the_row();?>
			<?php $count++; ?>
			<?php $countSM++; ?>
			<?php $hp10s3Img = get_sub_field('image') ?>
			<div class="col-sm-6 col-md-4 paddBottom30">
				<div class="hp10s3Box">
					<div class="hp10s3Img"><a href="<?php the_sub_field('link');?>"><img src="<?php echo $hp10s3Img['url']; ?>" alt="<?php echo $hp10s3Img['alt']; ?>" width="<?php echo $hp10s3Img['width']; ?>" height="<?php echo $hp10s3Img['height']; ?>"></a></div>
					<div class="hp10s3Content">
						<div class="hp10s3Title"><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></div>
						<div class="hp10s3Text"><?php the_sub_field('text');?></div>
						<div class="hp10s3Link"><a href="<?php the_sub_field('link');?>">Readmore</a></div>
					</div>
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
<?php if( get_field('section4') ):?>
<?php while ( have_rows('section4') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('products')):?>
<div class="hp10Section4 paddTop70 paddBottom40">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-lg-6">
				<h2><?php the_sub_field('heading');?></h2>
				<div class="hp10SubHeading"><?php the_sub_field('sub_heading');?></div>
			</div>
		</div>
		<div class="row cust-row text-center paddTop40">
			<?php $count = 0; ?>
			<?php while ( have_rows('products') ) : the_row();?>
			<?php $count++; ?>
			<?php $hp10s4Img = get_sub_field('image') ?>
			<div class="col-sm-12 col-md-6 paddBottom30">
				<div class="hp10s4Box hp10s3Box">
					<div class="hp10s3Img"><a href="<?php the_sub_field('link');?>"><img src="<?php echo $hp10s4Img['url']; ?>" alt="<?php echo $hp10s4Img['alt']; ?>" width="<?php echo $hp10s4Img['width']; ?>" height="<?php echo $hp10s4Img['height']; ?>"></a></div>
					<div class="hp10s3Content">
						<div class="hp10s3Title"><a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></div>
						<div class="hp10s3Text"><?php the_sub_field('text');?></div>
						<div class="hp10s3Link"><a href="<?php the_sub_field('link');?>">Readmore</a></div>
					</div>
				</div>
			</div>
			<?php if($count == 2):?>
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
<?php if( get_field('section5') ):?>
<?php while ( have_rows('section5') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('products')):?>
<div class="hp10Section5 paddTop70 paddBottom40 greySection">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 col-lg-offset-1 col-lg-10 paddBottom30">
				<h2><?php the_sub_field('heading');?></h2>
				<div class="hp10SubHeading"><?php the_sub_field('sub_heading');?></div>
				<?php if(get_sub_field('button_text')):?>
				<div class="pc6CTA paddTop10"><a href="<?php the_sub_field('button_link');?>" target="_blank"><?php the_sub_field('button_text');?></a></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="row margin0">
		<div class="col-sm-12">
			<ul class="pc6s5Slider">
				<?php while ( have_rows('products') ) : the_row();?>
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
<?php if( get_field('section6') ):?>
<?php while ( have_rows('section6') ) : the_row();?>
<?php if( get_sub_field('background') || get_sub_field('heading')):?>
<div class="hp10Banner" <?php if(get_sub_field('background')):?>style="background-image: url(<?php the_sub_field('background'); ?>);"<?php endif; ?>>
	<div class="container">
		<div class="row cust-row">
			<div class="col-md-6">
				<div class="bannerHeading"><?php the_sub_field('heading');?></div>
				<div class="paddTop10 clrWhite"><?php the_sub_field('text');?></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section7') ):?>
<?php while ( have_rows('section7') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('faqs')):?>
<div class="hp10Section7 paddTop70 paddBottom70 greySection">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-6">
				<div class="hp10FAQs">
				<?php $count = 1; ?>
				<?php if( get_sub_field('faqs') ):?>
				<?php while ( have_rows('faqs') ) : the_row();?>
				<div class="accordiaBox <?php if($count == 1){echo 'active';}?>">
					<div class="accordion"><?php the_sub_field('title');?></div>
					<div class="panel"><?php the_sub_field('text');?></div>
				</div>
				<?php $count++; ?>
				<?php endwhile; ?>
				<?php endif; ?>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 responsiveMargin">
				<h2><?php the_sub_field('heading');?></h2>
				<div class="hp10s7Text"><?php the_sub_field('text');?></div>
				<div class="paddTop25"><a href="#contactPopUpForm" class="commonBtn fancybox-inline"><?php the_sub_field('button_text');?></a></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section8') ):?>
<?php while ( have_rows('section8') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('products')):?>
<div class="pc6Section5 paddTop70 paddBottom40">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 col-lg-offset-1 col-lg-10 paddBottom30">
				<h2><?php the_sub_field('heading');?></h2>
				<div class="pc6SubHeading"><?php the_sub_field('sub_heading');?></div>
				<?php if(get_sub_field('button_text')):?>
				<div class="pc6CTA paddTop10"><a href="<?php the_sub_field('button_link');?>" target="_blank"><?php the_sub_field('button_text');?></a></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="row margin0">
		<div class="col-sm-12">
			<ul class="pc6s5Slider">
				<?php while ( have_rows('products') ) : the_row();?>
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
<?php if( get_field('section9') ):?>
<?php while ( have_rows('section9') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('text')):?>
<div class="pc6Section6 greySection paddTop70 paddBottom40">
	<div class="container">
		<div class="row cust-row text-center">
			<div class="col-sm-12 col-lg-offset-1 col-lg-10 paddBottom30">
				<h2><?php the_sub_field('heading');?></h2>
				<div class="pc6SubHeading"><?php the_sub_field('text');?></div>
				<div class="paddTop25"><a href="#contactPopUpForm" class="commonBtn fancybox-inline"><?php the_sub_field('button_text');?></a></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>