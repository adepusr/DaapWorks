<?php $center = array(
                'latitude'  => (double) get_option(),
                'longitude' => (double) get_option('longitude'),
                'zoomLevel' => (double) get_option('zoom_level')
            );; 
$reflFunc = new ReflectionFunction('get_option');
print $reflFunc->getFileName() . ':' . $reflFunc->getStartLine();
print_r($center);
?>