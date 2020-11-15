<?php
$id = 1;

try{
	$secs = $sql->prepare("SELECT * FROM m_1dama WHERE id = ? ORDER BY id DESC");
	$secs->bindParam(1, $id, PDO::PARAM_STR);
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
				<h3>Gabinete da Primeira Dama</h3>
				<div class="field_item_institucional">
					<strong>Primeira Dama:</strong> <?php echo $rowSecs->nome;?>
				</div>
				<div class="field_item_institucional">
					<strong>Telefones:</strong> <?php echo $rowSecs->telefone1;?> - <?php echo $rowSecs->telefone2;?>
				</div>
				<div class="field_item_institucional">
					<strong>Ramal:</strong> <?php echo $rowSecs->ramal;?>
				</div>
				<div class="field_item_institucional">
					<strong>E-mail:</strong> <?php echo $rowSecs->email;?>
				</div>
			</div>
		</div>
	</div>
</article>