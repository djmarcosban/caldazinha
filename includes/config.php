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
	define('BASE', 'https://localhost/caldazinha/wordpress/');

}else{
	
	define('HOST','localhost');
	define('USER','caldazin');
	define('PASS','LEK8Russ6YpWqrs');
	define('DB','caldazin_admin');
	define('BASE', 'https://caldazinha.go.gov.br/v3/');

}


try{
	$sql_conn = 'mysql:host='.HOST.';dbname='.DB;
	$sql = new PDO($sql_conn, USER, PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	$sql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $erro_conn){
	echo $erro_conn->getMessage();
}


date_default_timezone_set('America/Sao_Paulo');
switch(date("D")){
	case "Mon":	$semana = "Seg";	break;
	case "Tue":	$semana = "Ter";	break;
	case "Wed":	$semana = "Qua";	break;	
	case "Thu":	$semana = "Qui";	break;	
	case "Wed":	$semana = "Qua";	break;	
	case "Fri":	$semana = "Sex";	break;	
	case "Sat":	$semana = "Sáb";	break;	
	case "Sun":	$semana = "Dom";	break;	
}
$mes1 = date("m");
switch(date("m")){
	case 1:$mes = "janeiro";break;
	case 2:$mes = "fevereiro";break;
	case 3:$mes = "março";break;
	case 4:$mes = "abril";break;
	case 5:$mes = "maio";break;
	case 6:$mes = "junho";break;
	case 7:$mes = "julho";break;
	case 8:$mes = "agosto";break;
	case 9:$mes = "setembro";break;
	case 10:$mes = "outubro";break;
	case 11:$mes = "novembro";break;
	case 12:$mes = "dezembro";break;
}
$dia = date("d");
$ano = date("Y");
$tempo = date("H:i");
$tempo1 = date("H:i:s");
$tempoAtual = $semana.', '.$dia.' de '.$mes.' de '.$ano.' &agrave;s '.$tempo;