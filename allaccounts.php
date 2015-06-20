<?php

require_once __DIR__ . "/vendor/autoload.php";

use Jaspersoft\Client\Client;

$c = new Client(
        "http://192.168.12.242:10080/jasperserver",
        "jasperadmin",
        "jasperadmin");

$report = $c->reportService()->runReport('/reports/samples/AllAccounts', 'html');
echo $report
?>
