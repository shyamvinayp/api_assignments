<?php

require 'db_connect.php';
require 'function.php';

$city_old_data=[
    [
        "id" => 1,
        "title"=> "AssisiOAssisifAssisifAssisirAssisiiAssisi AssisisAssisieAssisirAssisivAs
        sisiiAssisizAssisiiAssisi AssisidAssisiiAssisi AssisitAssisirAssisiaAssisisAssisilAssi
        sioAssisicAssisioAssisi AssisiaAssisi AssisiCAssisieAssisirAssisiiAssisigAssisinAssisi
        oAssisilAssisiaAssisi AssisicAssisioAssisinAssisi AssisiEAssisirAssisinAssisieAssisisA
        ssisitAssisioAssisi",
        "description"=> ""
    ],
    [
        "id"=> 2,
        "title"=> "This title is good enough. Corsico.Still is good, Corsico.",
        "description"=> "FormigineGFormigineoFormigineoFormigined FormiginejFormigineoFormi
        gineb."
    ],
    [
        "id"=> 3,
        "title"=> "FormigineGFormigineoFormigineoFormigined FormiginejFormigineoFormiginebF
        ormigine.",
        "description"=> "FormigineGFormigineoFormigineoFormigined FormiginejFormigineoFormi
        ginebFormigine"
    ]

];

$expected_data=[
    [
        "id"=> 1,
        "title"=> "Offri servizi di trasloco a Cerignola con Ernesto",
        "description"=> ""
    ],
    [
        "id"=> 2,
        "title"=> "This title is good enough. Corsico.Still is good, Corsico.",
        "description"=> "Good job."
    ],
    [
        "id"=> 3,
        "title"=> "Good job.",
        "description"=> "Good job"
    ]

];
echo "old dummy data:";
echo '<pre>';
print_r($city_old_data);

$db_datas= select_all('offers');

if(!empty($db_datas)):
    foreach($expected_data as $expected_city):
        update('offers',$expected_city);
    endforeach;
    endif;
$db_datas_2= select_all('offers');
echo '<br> updated records data:';
echo '<pre>';
print_r($db_datas_2);
?>

<a  href="index.php">back</a>
<a target="_blank" href="api.php" class="btn btn-secondary">Check Api</a>