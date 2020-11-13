<?php
setlocale(LC_MONETARY, 'pt_BR');
header("Content-Type: text/html; charset=UTF-8",true);

$dev = false;

if($_SERVER['HTTP_HOST'] == 'localhost'){
	$dev = true;
} 

@$url_atual = "http" . (isset($_SERVER[HTTPS]) ? (($_SERVER[HTTPS]=="on") ? "s" : "") : "") . "://" . "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if($dev == true){
	
	define('HOST','localhost');
	define('USER','root');
	define('PASS','');
	define('DB','caldazinha_v3');

}else{
	
	define('HOST','localhost');
	define('USER','caldazin');
	define('PASS','LEK8Russ6YpWqrs');
	define('DB','caldazin_admin');

}


try{
	$sql_conn = 'mysql:host='.HOST.';dbname='.DB;
	$sql = new PDO($sql_conn, USER, PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	$sql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $erro_conn){
	echo $erro_conn->getMessage();
}