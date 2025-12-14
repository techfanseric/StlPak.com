<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
// Template Name: Home 14
?>

<?php echo do_shortcode('[smartslider3 slider="8"]'); ?>
<?php if( get_field('section1')):?>
<div class="hp14Section1">
	<div class="container">
		<div class="row cust-row">
			<?php while ( have_rows('section1') ) : the_row();?>
			<?php $hp14s1Img = get_sub_field('image'); ?>
			<div class="col-md-4 paddBottom30">
				<div class="hp14s1Box">
					<div class="hp14s1Img"><img src="<?php echo $hp14s1Img['url']; ?>" alt="<?php echo $hp14s1Img['alt']; ?>"></div>
					<div class="hp14s1Title"><?php the_sub_field('title'); ?></div>
					<div class="hp14s1Text"><?php the_sub_field('text'); ?></div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('section2')):?>
<?php while ( have_rows('section2') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('tabs')):?>
<div class="hp14Section2">
	<div class="container hp14Tabs">
		<div class="row cust-row">
			<div class="col-sm-12 col-lg-6">
				<h2><?php the_sub_field('heading'); ?></h2>
			</div>
			<div class="col-sm-12 col-lg-6">
				<ul class="tabs">
					<?php $j=1;?>
					<?php while ( have_rows('tabs') ) : the_row();?>
					<li class="tab-link <?php if($j == 1){echo 'current';};?>" data-tab="tab-<?php echo $j;?>"><?php the_sub_field('title') ?></li>
					<?php $j++;?>
					<?php endwhile; ?>
				</ul>
			</div>
			<div class="col-sm-12"><div class="hp14Sep"></div></div>
		</div>
		<div class="row">
			<div class="col-sm-12 hp14s2Content">
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
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section3')):?>
<?php while ( have_rows('section3') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('image')):?>
<div class="hp14Section3">
	<div class="container hp14Tabs">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-7 col-lg-6">
				<h2><?php the_sub_field('heading'); ?></h2>
			</div>
		</div>
		<div class="row cust-row">
			<div class="col-sm-12 col-md-6 col-lg-5">
				<div class="hp14s3Text"><?php the_sub_field('text'); ?></div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-7">
				<?php $hp14s3Img = get_sub_field('image'); ?>
				<?php $hp14s3Link = get_sub_field('video_link'); ?>
				<?php if($hp14s3Link != ''): ?>
					<div class="hp14s3Img videoImg"><a href="<?php echo $hp14s3Link; ?>"><img src="<?php echo $hp14s3Img['url']; ?>" alt="<?php echo $hp14s3Img['alt']; ?>"></a></div>
				<?php else: ?>
					<div class="hp14s3Img"><img src="<?php echo $hp14s3Img['url']; ?>" alt="<?php echo $hp14s3Img['alt']; ?>"></div>
				<?php endif; ?>
				<?php if(get_sub_field('button_text')): ?>
					<div class="hp14s3Btn"><a href="<?php the_sub_field('button_link');?>" class="commonBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section4')):?>
<?php while ( have_rows('section4') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('products')):?>
<div class="hp14Section4">
	<div class="container">
		<div class="row cust-row paddBottom30">
			<div class="col-sm-12 text-center">
				<h2><?php the_sub_field('heading'); ?></h2>
				<div class="hp14s4Text"><?php the_sub_field('text'); ?></div>
			</div>
		</div>
		<div class="row cust-row">
			<?php while ( have_rows('products') ) : the_row();?>
			<div class="hp14s4Box">
				<?php $hp14s4Img = get_sub_field('image'); ?>
				<?php $hp14s4Link = get_sub_field('link'); ?>
				<?php if($hp14s4Link != ''): ?>
					<div class="hp14s4Img"><img src="<?php echo $hp14s4Img['url']; ?>" alt="<?php echo $hp14s4Img['alt']; ?>"></div>
					<div class="hp14s4Title"><a href="<?php echo $hp14s4Link; ?>"><?php the_sub_field('title'); ?></a></div>
					<div class="hp14s4Link"><a href="<?php echo $hp14s4Link; ?>">Link</a></div>
				<?php else: ?>
					<div class="hp14s4Img"><img src="<?php echo $hp14s4Img['url']; ?>" alt="<?php echo $hp14s4Img['alt']; ?>"></div>
					<div class="hp14s4Title"><?php the_sub_field('title'); ?></div>
				<?php endif; ?>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section5')):?>
<?php while ( have_rows('section5') ) : the_row();?>
<?php if( get_sub_field('heading1') || get_sub_field('heading2')):?>
<div class="hp14Section5">
	<div class="container">
		<div class="row cust-row rowFlex">
			<div class="col-sm-12 col-md-6 col-lg-5">
				<h2><?php the_sub_field('heading1'); ?></h2>
				<div class="hp14s5Text1"><?php the_sub_field('text1'); ?></div>
				<?php if(get_sub_field('cta1_text')): ?>
					<div class="hp14s5Btn hp14s5Btn1"><a href="<?php the_sub_field('cta1_link');?>" class="<?php if(get_sub_field('cta1_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('cta1_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('cta1_text');?></a></div>
				<?php endif; ?>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-offset-2 col-lg-5 responsiveMargin">
				<h2 class="clrWhite"><?php the_sub_field('heading2'); ?></h2>
				<div class="hp14s5Text2"><?php the_sub_field('text2'); ?></div>
				<?php if(get_sub_field('cta2_text')): ?>
					<div class="hp14s5Btn hp14s5Btn2"><a href="<?php the_sub_field('cta2_link');?>" class="<?php if(get_sub_field('cta2_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('cta2_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('cta2_text');?></a></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section6')):?>
<?php while ( have_rows('section6') ) : the_row();?>
<?php if( get_sub_field('image') || get_sub_field('list')):?>
<div class="hp14Section6">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 col-md-6 col-lg-5">
				<?php $hp14s6Img = get_sub_field('image'); ?>
				<div class="hp14s6Img"><img src="<?php echo $hp14s6Img['url']; ?>" alt="<?php echo $hp14s6Img['alt']; ?>"><?php if(get_sub_field('button_text')): ?>
					<div class="hp14s6Btn"><a href="<?php the_sub_field('button_link');?>" class="commonBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
				<?php endif; ?></div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-offset-1 col-lg-6 paddTop35">
				<h2><?php the_sub_field('heading'); ?></h2>
				<div class="hp14s6Text"><?php the_sub_field('text'); ?></div>
				<div class="row">
				<?php $count = 0; ?>
				<?php while ( have_rows('list') ) : the_row();?>
					<?php $count++; ?>
					<div class="col-sm-6">
						<div class="hp14s6List">
							<div class="hp14s6ListTitle"><?php the_sub_field('title'); ?></div>
							<div class="hp14s6ListText"><?php the_sub_field('text'); ?></div>
						</div>
					</div>
					<?php if($count == 2): ?>
						<div class="clearfix"></div>
						<?php $count = 0; ?>
					<?php endif; ?>
				<?php endwhile; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section7')):?>
<?php while ( have_rows('section7') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('image')):?>
<div class="hp14Section7">
	<div class="container">
		<div class="row cust-row paddBottom30">
			<div class="col-sm-12 col-md-6 col-lg-5">
				<h2><?php the_sub_field('heading'); ?></h2>
				<?php if(get_sub_field('button_text')): ?>
					<div class="paddTop20"><a href="<?php the_sub_field('button_link');?>" class="commonBtn" target="_blank"><?php the_sub_field('button_text');?></a></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<?php $hp14s7Img = get_sub_field('image'); ?>
	<div class="hp14s7Img text-center"><a href="<?php the_sub_field('button_link');?>"><img src="<?php echo $hp14s7Img['url']; ?>" alt="<?php echo $hp14s7Img['alt']; ?>"></a></div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section9')):?>
<?php while ( have_rows('section9') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('tabs')):?>
<div class="hp14Section9">
	<div class="container hp14Tabs2">
		<div class="row cust-row">
			<div class="col-sm-12 text-center paddBottom35">
				<h2><?php the_sub_field('heading'); ?></h2>
			</div>
			<div class="clearfix"></div>
			<div class="col-md-6 col-lg-5">
				<ul class="tabs2">
					<?php $j=100;?>
					<?php while ( have_rows('tabs') ) : the_row();?>
					<li class="tab-link <?php if($j == 100){echo 'current';};?>" data-tab="tab-<?php echo $j;?>">
						<?php $hp14s9Img = get_sub_field('image'); ?>
						<div class="hp14s9Img"><img src="<?php echo $hp14s9Img['url']; ?>" alt="<?php echo $hp14s9Img['alt']; ?>"></div>
						<div class="hp14s9Content">
							<div class="hp14s9Title"><?php the_sub_field('title') ?></div>
							<div class="hp14s9SubTitle"><?php the_sub_field('sub_title') ?></div>
						</div>
					</li>
					<?php $j++;?>
					<?php endwhile; ?>
				</ul>
			</div>
			<div class="col-md-6 col-lg-offset-1 col-lg-6 paddTop20">
				<?php $h=100;?>
				<?php while ( have_rows('tabs') ) : the_row();?>
				<div id="tab-<?php echo $h;?>" class="tab-content2 <?php if($h == 100){echo 'current';};?>">
					<div class="hp14s9Title"><?php the_sub_field('title') ?></div>
					<div class="hp14s9SubTitle"><?php the_sub_field('sub_title') ?></div>
					<?php the_sub_field('text') ?>
					<div class="clearfix"></div>
				</div>
				<?php $h++;?>
				<?php endwhile; ?>	
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section10')):?>
<?php while ( have_rows('section10') ) : the_row();?>
<?php if( get_sub_field('heading') || get_sub_field('resources')):?>
<div class="hp14Section10">
	<div class="container">
		<div class="row cust-row">
			<div class="col-sm-12 paddBottom20">
				<h2><?php the_sub_field('heading'); ?></h2>
			</div>
			<div class="clearfix"></div>
			<?php while ( have_rows('resources') ) : the_row();?>
			<div class="col-sm-4 text-center paddBottom30">
				<div class="hp14s10Box">
					<?php $hp14s10Img = get_sub_field('image'); ?>
					<div class="hp14s10Img"><a href="<?php the_sub_field('link'); ?>"><img src="<?php echo $hp14s10Img['url']; ?>" alt="<?php echo $hp14s10Img['alt']; ?>"></a></div>
					<div class="hp14s10Title"><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?></a></div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<?php if( get_field('section11')):?>
<div class="hp14Section11">
	<div class="container">
		<div class="row cust-row">
			<ul class="hp14Brands">
			<?php while ( have_rows('section11') ) : the_row();?>
				<?php $hp14s11Img = get_sub_field('image'); ?>
				<li><img src="<?php echo $hp14s11Img['url']; ?>" alt="<?php echo $hp14s11Img['alt']; ?>"></li>
			<?php endwhile; ?>
			</ul>
		</div>
	</div>
</div>
<?php endif; ?>
<?php if( get_field('section12')):?>
<?php while ( have_rows('section12') ) : the_row();?>
<?php if( get_sub_field('heading')):?>
<div class="hp14Section12" <?php if(get_sub_field('background')):?>style="background-image: url(<?php the_sub_field('background'); ?>);"<?php endif; ?>>
	<div class="container">
		<div class="row cust-row rowFlex">
			<div class="col-md-9 col-lg-7">
				<h2 class="clrWhite margin0"><?php the_sub_field('heading'); ?></h2>
			</div>
			<?php if(get_sub_field('button_text')): ?>
			<div class="col-md-3 col-lg-offset-2 col-lg-3">
				<div class="hp14s12Btn"><a href="<?php the_sub_field('button_link');?>" class="commonBtn<?php if(get_sub_field('button_link') == "#contactPopUpForm" ){echo ' fancybox-inline';}?>" <?php if(get_sub_field('button_link') != "#contactPopUpForm" ){echo 'target="_blank"';}?>><?php the_sub_field('button_text');?></a></div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>