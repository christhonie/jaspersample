<?php

require_once __DIR__ . "/vendor/autoload.php";

use Jaspersoft\Client\Client;

$c = new Client(
        "http://192.168.12.242:10080/jasperserver",
        "jasperadmin",
        "jasperadmin");

$controls = array(
   'Country_multi_select' => array('USA', 'Mexico'),
   'Cascading_state_multi_select' => array('CA', 'OR')
   );
 
 
$report = $c->reportService()->runReport('/reports/samples/Cascading_multi_select_report', 'html', null, null, $controls);
 
echo $report;		

?>
