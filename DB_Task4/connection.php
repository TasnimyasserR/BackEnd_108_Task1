<?php



//! PDO

//? mysql:host=?;dbname=?
$db="mysql:host=localhost;dbname=airport";
$con= new PDO($db,"root","");
$query ="SELECT * FROM `airline` ";
$query_insert ="INSERT INTO `airline`(`id`, `Name`, `Country`) VALUES ('1','Rofayda','Egypt')";
//? connection prepare
$sql= $con->prepare($query);

$res=$sql->execute();

// var_dump($res);

//? sql execute
//? sql fetch all
$airline= $sql->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
var_dump($airline);
echo "</pre>";
?>