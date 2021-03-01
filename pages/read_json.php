<?php

$url = $_SERVER['DOCUMENT_ROOT'].'/my_schedule/data/sch_rate.json';
$json_string = file_get_contents($url);
echo $json_string;

?>