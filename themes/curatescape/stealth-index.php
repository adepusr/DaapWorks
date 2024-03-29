<!DOCTYPE html>
<html lang="en" class="notie no-js">
<head>

<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
<title><?php echo option('site_title');?></title>

<meta name="description" content="<?php echo option('description'); ?>" />
<meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="<?php echo img('favicon.ico');?>"/> <!-- ICO for old browsers -->

<!-- Apple Stuff -->
<link rel="apple-touch-icon-precomposed" href="<?php echo mh_apple_icon_logo_url();?>"/>

<!-- Stylesheets -->
<?php 
// also returns conditional styles from queue above
queue_css_file('screen');
echo head_css();
?>

<!-- Custom CSS via theme config -->
<?php echo mh_custom_css(); ?>

</head>

<body id="home" class="stealth-mode"> 

<div id="wrap">

	<header class="main">	
		<h1 id="site-title" class="visuallyhidden">
		<a href="<?php echo url('');?>" ><?php echo option('site_title');?></a>
		</h1>
		
		<div id="stealth-logo-container" class="clearfix">
			<div id="logo">
				<a href="<?php echo url('');?>" >
				<?php echo mh_the_logo();?>
				</a>
			</div>
		</div>
	</header>		

<!--STEALTH MODE-->
<div class="soon"><?php echo __('Coming Soon!');?></div> 

<div id="content">
			<section id="about">

				<?php echo mh_about();?>		
							
			</section>
								
</div> <!-- end content -->

<footer>
<?php echo mh_homepage_find_us();?>	
<div class="clearfix"></div>
<?php 
$contact_address = get_theme_option('contact_address');
	echo ($contact_address ? '<div id="homecol-address">'.$contact_address.'</div>' : '');	
?>	
<div class="clearfix"></div>
<a id="curatescape-logo" href="http://curatescape.org/"><img title="<?php echo __('Powered by Curatescape');?>" alt="<?php echo __('Powered by Curatescape');?>" src="<?php echo img('curatescape-logo.png');?>"></a>
</footer>