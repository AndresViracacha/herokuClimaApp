<?php

require_once __DIR__ . '/vendor/autoload.php';
//Variables de entrada
$a=$_GET['departamento'];

/*$b=$_GET['represa']; */
//--------------------------------------
$client = new MongoDB\Client(
    'mongodb+srv://andres:1234@cluster0.rjtat.mongodb.net/?retryWrites=true&w=majority');

$tb=$client->viento->viento;

$filter= ["departamento"=>['$eq'=>$a]];

$rows = $tb->find($filter);
$datos= iterator_to_array($rows);
echo json_encode($datos);
/*$registro=array(
"iduser"=>"1458",
"fecha"=>"1/1/2033",
"puntaje"=>"14589"
);*/

//$resultado=$tb->insertOne($registro);
//echo $resultado->getInsertedCount();




?>