<!DOCTYPE html>
<html class="<?php echo get_theme_option('Style Sheet'); ?>" lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=yes" />
    <?php if ($description = option('description')): ?>
    <meta name="description" content="<?php echo $description; ?>" />
    <?php endif; ?>
    <?php
    if (isset($title)) {
        $titleParts[] = strip_formatting($title);
    }
    $titleParts[] = option('site_title');
    ?>
    <title><?php echo implode(' &middot; ', $titleParts); ?></title>

    <?php echo auto_discovery_link_tags(); ?>

    <?php fire_plugin_hook('public_head',array('view'=>$this)); ?>
    <!-- Stylesheets -->
    <?php
    queue_css_url('https://fonts.googleapis.com/css?family=Playfair+Display:700,400|Playfair+Display+SC:400&subset=latin');
    queue_css_file(array('iconfonts', 'style'));

    echo head_css();
    if ($background = get_theme_option('Background Image')) {
        $storage = Zend_Registry::get('storage');
        $uri = $storage->getUri($storage->getPathByType($background, 'theme_uploads'));
        echo '<style>body { background: url("' . $uri . '") repeat; }</style>';
    }
    ?>
	
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	
	<!-- JavaScripts -->
	
    
    <?php queue_js_file('vendor/selectivizr', 'javascripts', array('conditional' => '(gte IE 6)&(lte IE 8)')); ?>
    <?php queue_js_file('vendor/respond'); ?>
    <?php queue_js_file('vendor/jquery-accessibleMegaMenu'); ?>
    <?php queue_js_file('bigstuff'); ?>
    <?php queue_js_file('globals'); ?>
	
    <?php echo head_js(); ?>
	
</head>
 <?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
    <a href="#content" id="skipnav"><?php echo __('Skip to main content'); ?></a>
    <?php fire_plugin_hook('public_body', array('view'=>$this)); ?>
        <header role="banner">
            <?php fire_plugin_hook('public_header', array('view'=>$this)); ?>
            <div id="site-title"><?php echo link_to_home_page(theme_logo()); ?></div>

            <div id="search-container" role="search">
                <?php if (get_theme_option('use_advanced_search') === null || get_theme_option('use_advanced_search')): ?>
                <?php echo search_form(array('show_advanced' => true)); ?>
                <?php else: ?>
                <?php echo search_form(); ?>
                <?php endif; ?>
            </div>
        </header>

         <div id="primary-nav" role="navigation">
             <?php
                  echo public_nav_main(); 
             ?> 
			 
         </div>  
         <div id="mobile-nav" role="navigation" aria-label="<?php echo __('Mobile Navigation'); ?>">
             <?php
                  echo public_nav_main();
             ?>
         </div>
        
        <?php echo theme_header_image(); ?>
    <div id="content" role="main" tabindex="-1">
<div class="icons_share">
	<?php $location = $_SERVER['REQUEST_URI']  ?>
<a href="http://www.facebook.com/sharer.php?u=<?php echo 'http://sitename.xyz'.$location ?>" target="_blank"  class="fa"><img src="https://localhost/omeka-2.5/themes/bigstuff/images/fb.png" style="border:0px;"/></a>
<br/>
<a href="https://twitter.com/share?url="<?php echo ' http://sitename.xyz'.$location ?> target="_blank" class="fa"><img src="https://localhost/omeka-2.5/themes/bigstuff/images/twitter.png" style="border:0px;"/></a><br/>

<a href="https://plus.google.com/share?url=<?php echo 'http://sitename.xyz'.$location ?>" target="_blank" class="fa"><img src="https://localhost/omeka-2.5/themes/bigstuff/images/googleplus.png" style="border:0px;"/></a><br/>

<a href="mailto:?Subject=Simple Share Buttons&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20<?php echo ' http://sitename.xyz'.$location ?>"  target="_blank" class="fa"><img src="https://localhost/omeka-2.5/themes/bigstuff/images/gmail.png"/></a><br/>

<a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo 'http://sitename.xyz'.$location ?>" target="_blank" class="fa"><img src="https://localhost/omeka-2.5/themes/bigstuff/images/linkedin.png"/></a><br/>
      </div>
		
		
		<?php if($_SERVER['REQUEST_URI'] == '/omeka-2.5/'){?>		

		<?php }?>
		
<?php fire_plugin_hook('public_content_top', array('view'=>$this)); ?>
