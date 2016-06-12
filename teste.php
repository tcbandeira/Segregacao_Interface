<?php
//método mágico do PHP para carregar classes - descobre todas as classes
function __autoload($class_name){
    include $class_name . ".php";
    //include $class_name . '.php';
}

//localhost/Aula_RL/IDb/teste.php?tipo=o
$tipo = $_GET["tipo"];
$DB = null;

if($tipo == "m"){
    $db = new Mysql();
}else if($tipo == "o"){
    $db = new Oracle();
}

$db->connect();
echo "<br/>";
$db->disconnect();
echo "<br/>";
$db->query("SELECT * FROM blabla");
echo "<br/>";
$db->ping("192.168.1.1");