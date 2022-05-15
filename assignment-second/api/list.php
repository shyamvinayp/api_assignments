<?php 

require '../db_connect.php';
require '../function.php';

$db_datas= select_all('data_table');

foreach($db_datas as $key=>$value):
unset($db_datas[$key]['data']['publisher']);
unset($db_datas[$key]['data']['publisherurl']);
$datas= json_encode($db_datas[$key]['data'],JSON_PRETTY_PRINT);
echo  $datas .'<br><br>';
endforeach;

