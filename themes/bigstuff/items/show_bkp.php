<script>
	
	$(".file-metadata").appendTo(".item-file");

	</script>



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
	
    <h3><?php echo __(' Images '); ?></h3>
    <div id="item-images">
		<?php echo files_for_item(); ?>
    </div>
	
	
<!-- tessssssssssssssssssssssstttttttttttttt tttttttttttttttttttttttt   -->	
<?php
	set_loop_records('files', get_current_record('item')->Files);
	foreach(loop('files') as $file): ?>
	<?php if(all_element_texts(
			$file,
			array('show_element_sets' =>
				array ('Dublin Core'))) != null){ ?>
			<div class="file-metadata" style="border: 2px black solid">
				<?php
		echo all_element_texts(
			$file,
			array('show_element_sets' =>
				array ('Dublin Core')));
		} else continue;?>
			</div>

	<?php endforeach; ?>

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
