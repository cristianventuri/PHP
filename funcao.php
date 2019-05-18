<?php
//array para json
$pessoas = array();

array_push($pessoas, array(
    'nome'=>'Cristian',
    'idade'=>23
));

array_push($pessoas, array(
    'nome'=>'Cris',
    'idade'=>25
));

echo json_encode($pessoas);

//json para array
$json = '[{"nome":"Cristian","idade":23},{"nome":"Cris","idade":25}]';
$data = json_decode($json, true);

print_r($data);



