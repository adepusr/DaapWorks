<?php
$title = __('Browse Exhibits') . ' ' . __('(%s total)', $total_results);
echo head(array('title'=>$title, 'bodyclass'=>'exhibits'));
?>
<?php echo pagination_links(); ?>
<?php foreach($exhibits as $key=>$exhibit): ?>
            <a href="<?php echo html_escape(exhibit_builder_exhibit_uri($exhibit)); ?>"><?php echo metadata($exhibit, 'title'); ?></a>
<?php endforeach; ?>

<?php echo pagination_links(); ?>
<?php echo foot(); ?>