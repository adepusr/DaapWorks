<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://localhost/omeka-2.5/application/views/scripts/javascripts/abc.js"></script>

<?php echo head(array('title' => metadata('item', array('Dublin Core', 'Title')),'bodyclass' => 'items show')); ?>
<div id="primary">
    <h1><?php echo metadata('item', array('Dublin Core','Title')); ?></h1>

	<!-- First Items metadata -->	
	 <?php if (metadata('item', 'has files')): ?>
		<div class="frontimg">
				<?php echo item_image('original', array(), 0, $item); ?>
			</div>
     <?php endif; ?>
	
    <!-- Items metadata -->
    <span id="item-metadata">
        <?php echo all_element_texts('item'); ?>
    </span>	
	
	
<!-- tessssssssssssssssssssssstttttttttttttt tttttttttttttttttttttttt   -->
	
		<h3><?php echo 'Images' ?><br/></h3>
<?php
	set_loop_records('files', get_current_record('item')->Files); ?>
	<div id='easyPaginate'>
	<?php foreach(loop('files') as $file): ?>
	<?php $val = all_element_texts(	$file,array('show_element_sets' =>array ('Dublin Core')));?>		
		<div >
		<?php $a = "<span  class='sample' data-toggle='tooltip' data-placement='right' title='$val' data-html='true'  >"; echo $a; ?>
			<!-- Display the file itself-->
			<?php echo file_markup(get_current_record('file')); ?>
							
	<?php echo '</span>' ?></div>
		<!-- <div style="clear:both"></div> -->
	<?php endforeach; ?>		
		</div>
	<script>
$(document).ready(function(){
	$('#easyPaginate').easyPaginate({
		paginateElement: '.sample',
		elementsPerPage: 9,
	});
		
});
		
	setInterval(function() {
		
$('.sample').tooltip();
		
}, 500);

		
</script>
<!--     tyughij yuimo, byunimo,-->	




   <?php if(metadata('item','Collection Name')): ?>
      <div id="collection" class="element">
        <h3><?php echo __('Collection :'); ?></h3>
        <div class="element-text"><?php echo link_to_collection_for_item(); ?></div>
      </div>
   <?php endif; ?>

     <!-- The following prints a list of all tags associated with the item -->
    <?php if (metadata('item','has tags')): ?>
    <div id="item-tags" class="element">
        <h3><?php echo __('Tags :'); ?></h3>
        <div class="element-text"><?php echo tag_string('item'); ?></div>
    </div>
	
    <?php endif;?>
	

    <!-- The following prints a global citation for this item.on the web site -->
    <div id="item-citation" class="element">
        <h3><?php echo __('Reference :'); ?></h3>
        <div class="element-text"><?php echo make_citation($item); ?></div>
    </div>

    <!-- The following prints a citation for this item.on the web site -->
    <div id="item-citation" class="element">
        <h3><?php echo __('Cite As :'); ?></h3>
        <div class="element-text"><?php echo metadata('item','citation',array('no_escape'=>true)); ?></div>
    </div>
       <?php fire_plugin_hook('public_items_show', array('view' => $this, 'item' => $item)); ?>

    <ul class="item-pagination navigation">
        <li id="previous-item" class="previous"><?php echo link_to_previous_item_show(); ?></li>
        <li id="next-item" class="next"><?php echo link_to_next_item_show(); ?></li>
    </ul>

</div> <!-- End of Primary. -->



 <?php echo foot(); ?>
