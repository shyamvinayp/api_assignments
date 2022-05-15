<?php

require 'db_connect.php';
require 'function.php';

$urls=[
    /*'https://appjobs-general.s3.eu-west-1.amazonaws.com/test-xml-feeds/feed_1.xml',
    'https://appjobs-general.s3.eu-west-1.amazonaws.com/test-xml-feeds/feed_2.xml',
    'https://appjobs-general.s3.eu-west-1.amazonaws.com/test-xml-feeds/feed_3.xml',
    'https://appjobs-general.s3.eu-west-1.amazonaws.com/test-xml-feeds/feed_4.xml',*/
    'https://appjobs-general.s3.eu-west-1.amazonaws.com/test-xml-feeds/feed_5.xml'
];

// $url='https://appjobs-general.s3.eu-west-1.amazonaws.com/test-xml-feeds/feed_1.xml';
// $xml = simplexml_load_file($url);
// $json_data = json_encode($xml,JSON_PRETTY_PRINT);
$db_datas= select_all('data_table');
// // echo '<pre>';
// echo $json_data;
//if(empty($db_datas)):
foreach($urls as $url):
    
   try {
        $xml = simplexml_load_file($url);
        $json_data = json_encode($xml);
       // dd($json_data);
        insert('data_table',$json_data,$url);
   } catch (\Exception $e) {
       echo $e->getMessage();
   }
       
    
     
endforeach;
//endif;


