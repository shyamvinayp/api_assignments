<?php


require 'db_connect.php';
require 'function.php';


$datas = select_all('offers');

if(!empty($datas)){
    
   echo  json_encode($datas);
}