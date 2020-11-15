<?php
$id = $_GET['id'];
$status = 1;

try{
	$secs = $sql->prepare("SELECT id, nome, info, foto FROM secs WHERE status = ? AND id = ? ORDER BY id DESC");
	$secs->bindParam(2, $id, PDO::PARAM_STR);
	$secs->bindParam(1, $status, PDO::PARAM_STR);
	$secs->execute(); 
}catch(PDOException $e){
	echo $e->getMessage();
}

$rowSecs = $secs->fetchObject();
?>

<style type="text/css" media="screen">
section .card .texto p{
	color: #48556a!important;
}
</style>

<article class="interna">
	<h2 class="titulo">Estrutura organizacional</h2>
	<div class="card card-profile flex-column secretarias" style="width: 100%;">
		<div class="linha">
			<div class="imagem" style="background: url(https://caldazinha.go.gov.br/<?php echo $rowSecs->foto;?>) center center no-repeat;background-size:cover;"></div>
			<div class="texto">
				<h3><?php echo $rowSecs->nome;?></h3>
				<div class="field_item_institucional">
					<?php echo $rowSecs->info;?>
				</div>
			</div>
		</div>
	</div>
</article>