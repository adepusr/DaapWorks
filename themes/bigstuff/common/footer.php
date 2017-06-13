</div><!-- end content -->
<center>
<footer role="contentinfo">

    <div id="footer-content" class="center-div">
		<br/>
        <?php if($footerText = get_theme_option('Footer Text')): ?>
        <div id="custom-footer-text">
            <p><?php echo get_theme_option('Footer Text'); ?></p>
        </div>
        <?php endif; ?>
        <?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = option('copyright')): ?>
        <p><?php echo $copyright; ?></p>
        <?php endif; ?>
        <nav><?php echo public_nav_main()->setMaxDepth(0); ?></nav>
			<br/><br/>	
<p><?php $_SERVER['REQUEST_URI']  ?></p>
    </div><!-- end footer-content -->

     <?php fire_plugin_hook('public_footer', array('view'=>$this)); ?>
	</footer>
</center>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
</footer>

<script type="text/javascript">
    jQuery(document).ready(function(){
        Omeka.showAdvancedForm();
        Omeka.skipNav();
        Omeka.megaMenu();
        Bigstuff.dropDown();
    });
</script>

</body>

</html>
