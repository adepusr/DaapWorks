<?php echo head(array('bodyid'=>'home', 'bodyclass' =>'two-col')); ?>
<div id="geolocation-browse">
    <?php echo $this->googleMap('map_browse', array('list' => 'map-links', 'params' => $params)); ?>
	<div id="map-links"></div>
</div>
<div id="primary">
    <?php if ($item = get_random_hero_shot()): ?>
    <div id="hero-shot" class="hero-shot">
        <div>
            <?php echo link_to_item(item_image('fullsize', array(), 0, $item), array(), 'show', $item);?>
        </div>
        <p class="caption"><?php echo metadata($item, array('Dublin Core', 'Title')); ?></p>
    </div>
    <?php endif; ?>
    <?php if ($homepageText = get_theme_option('Homepage Text')): ?>
    <div class="homepage-text"><?php echo $homepageText; ?></div>
    <?php endif; ?>
</div><!-- end primary -->


<div id="secondary">
    <?php if (get_theme_option('Display Featured Item') == 1): ?>
        <!-- Featured Item -->
        <div id="featured-item" class="featured">
            <h2><?php echo __('Featured Item'); ?></h2>
            <?php echo random_featured_items(1); ?>
        </div><!--end featured-item-->
    <?php endif; ?>
    <?php if (get_theme_option('Display Featured Collection')): ?>
        <!-- Featured Collection -->
        <div id="featured-collection" class="featured">
            <h2><?php echo __('Featured Collection'); ?></h2>
            <?php echo random_featured_collection(); ?>
        </div><!-- end featured collection -->
    <?php endif; ?>
    <?php if ((get_theme_option('Display Featured Exhibit')) &&  function_exists('exhibit_builder_display_random_featured_exhibit')): ?>
    <!-- Featured Exhibit -->
    <?php echo exhibit_builder_display_random_featured_exhibit(); ?>
    <?php endif; ?> 

    <?php
    $recentItems = get_theme_option('Homepage Recent Items');
    if ($recentItems === null || $recentItems === ''):
        $recentItems = 3;
    else:
        $recentItems = (int) $recentItems;
    endif;
    if ($recentItems):
    ?>
    <div id="recent-items">
        <h2><?php echo __('Recently Added Items'); ?></h2>
        <?php echo recent_items($recentItems); ?>
        <p class="view-items-link"><a href="<?php echo html_escape(url('items')); ?>"><?php echo __('View All Items'); ?></a></p>
    </div><!--end recent-items -->
    <?php endif; ?>
    
    <?php fire_plugin_hook('public_home', array('view' => $this)); ?>

</div><!-- end secondary -->

<div class="test video">
	<br/>
	<h2>Campus Video</h2>
	<iframe width="580" height="315" src="https://www.youtube.com/embed/ze-BghpFXDY" frameborder="0px" allowfullscreen></iframe>
	<div>
	<h4 >Into to the clg and the details about the site  bla aa ,.. 9 niyu myg Into to the clg and the details about the site ,.. 9 niyu myg Into to the clg and the details about the site ,.. 9 niyu myg</h4>
	</div>
	
</div>


<?php echo foot(); ?>
