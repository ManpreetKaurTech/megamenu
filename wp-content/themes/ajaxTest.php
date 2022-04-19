<?php
global $wpdb;
//$ariport = $wpdb->get_results( "SELECT * FROM `airport` ORDER BY `name` ASC" );
if($_REQUEST['data'])
{
    die($_REQUEST['data']);
    $ariport = $wpdb->get_results( "SELECT * FROM `airport` WHERE `icao_code` LIKE '%".$_REQUEST['data']."%' OR `name` LIKE '%".$_REQUEST['data']."%' OR `city` LIKE '%".$_REQUEST['data']."%' OR `country` LIKE '%".$_REQUEST['data']."%' ORDER BY  `name` ASC");
    foreach($ariport as $result){ 
        $chang .='<option >';
        $chang .= $result->name; 
        $chang .= ','.($result->icao_code); 
        $chang .= ','.$result->city; 
        $chang .= ','.$result->country;
        $chang .= ' </option>';
}
echo json_encode($chang);
}
else{
    echo 0;
}
?>