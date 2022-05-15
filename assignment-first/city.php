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


if(empty($db_datas)):
   foreach($city_old_data as $city_data):
   insert('offers',$city_data);
   endforeach;
else:
foreach($expected_data as $expected_city):
    update('offers',$expected_city);
endforeach;
endif;
?>
<a  href="index.php">back</a>
<a  href="update_city.php" class="btn btn-primary">Update cities</a>
<a target="_blank" href="api.php" class="btn btn-secondary">Check Api</a>