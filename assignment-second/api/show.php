<?php 

require '../db_connect.php';
require '../function.php';

if(isset($_GET['id'])):
  $id= $_GET['id']; 
$db_datas= find('data_table',$id);
if(isset($db_datas['data']['publisher']) && $db_datas['data']['publisherurl']):
unset($db_datas['data']['publisher']);
unset($db_datas['data']['publisherurl']);
endif;
$datas= json_encode($db_datas['data'],JSON_PRETTY_PRINT);

echo $datas;
else:
    echo 'invalid request '.'<br>';
    echo 'hint: keep id=1 as like show.php?id=1';
endif;