<!DOCTYPE html>
<html>
<head>
	<?php wp_head(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name') ?></title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/blog-style.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/blog-media.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/font-awesome.min.css">
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery-2.2.4.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/blog_script.js"></script>
</head>
<?php 
		global $more;
		while ( have_posts() ) : the_post();
		$cat = get_the_category();
?>
<body class="blog_main_body">
	<div class="left_sidebar">
		<h1><?php wp_title('|', true, 'right'); ?><?php bloginfo('name') ?></h2>
		<h2><?php bloginfo('description') ?></h3>
		<ul>
			<?php
					$categories = get_categories(array(
						'orderby' => 'ID',
						'order' => 'ASC',
					));
					foreach( $categories as $category ){
						echo('<li><a href="'.get_category_link( $category->term_id ).'">'.$category->name.'</a></li>');
					}
			?>
		</ul>
	</div>
	<div class="main_blog">
		<div class="mobile_blog_head">
			<div class="mobile_logo"><a href="/"><img src="<?php echo get_template_directory_uri() ?>/img/fund-inn-ICU-logo.png"></a></div>
			<div class="mobile_menu">
				<div class="mobile_menu_polosa"></div>
				<div class="mobile_menu_polosa"></div>
				<div class="mobile_menu_polosa"></div>
				<div class="mobile_menu_polosa"></div>
			</div>
		</div>
		<div class="blog_statia_content">
			<div class="blog_head">
				<?php echo the_post_thumbnail('full'); ?>
			</div>
<?php endwhile; ?>