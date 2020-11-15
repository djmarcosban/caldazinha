<?php
$id = $_GET['id'];
$noticiaState = 1;

try {
	$buscaNoticia = $sql->prepare("SELECT title, capa, introtext, id FROM noticias WHERE id = ? AND state = ?");
	$buscaNoticia->bindParam(1, $id, PDO::PARAM_STR);
	$buscaNoticia->bindParam(2, $noticiaState, PDO::PARAM_INT);
	$buscaNoticia->execute();
} catch (PDOException $e) {
	echo $e->getMessage();
}

if(!$buscaNoticia->rowCount()){
	echo 'Notícia não encontrada.';
	exit;
}

$rowNoticia = $buscaNoticia->fetchObject();
?>

<article class="interna">
	<h2 class="titulo"><?php echo $rowNoticia->title;?></h2>
	<a class="capa" href="https://caldazinha.go.gov.br/<?php echo $rowNoticia->capa;?>" rel="gallery2">
		<div class="thumb" style="background: url(https://caldazinha.go.gov.br/<?php echo $rowNoticia->capa;?>) center center no-repeat; background-size: cover;"></div>
	</a>

	<p><?php echo $rowNoticia->introtext;?></p>
</article>

<div id="share">
	<p>
		<span>Compartilhar</span>
		<a href="javascript:;" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?php echo BASE;?>noticia/<?php echo $rowNoticia->id;?>','Facebook', 'toolbar=0, status=0, width=560, height=625');" class="compartilhar">
			<i class="fab fa-facebook-f"></i>
		</a>
		<a href="javascript:;" onclick="window.open('https://twitter.com/intent/tweet?text=Cadastro+Cultural&amp;url=<?php echo BASE;?>noticia/<?php echo $rowNoticia->id;?>','Twitter', 'toolbar=0, status=0, width=560, height=260');" class="compartilhar">
			<i class="fab fa-twitter"></i>
		</a>
		<a href="javascript:;" onclick="window.open('https://plus.google.com/share?url=<?php echo BASE;?>noticia/<?php echo $rowNoticia->id;?>','Google Plus', 'toolbar=0, status=0, width=400, height=500');" class="compartilhar">
			<i class="fab fa-google-plus-g"></i>
		</a>
	</p>
</div>

<div id="mais_noticias">
	<h3><span>Mais notícias</span></h3>
	<div class="row">

		<?php
		try {
			$buscaNoticia = $sql->prepare("SELECT title, capa, created, id FROM noticias WHERE id != ? AND state = ? ORDER BY id DESC LIMIT 6");
			$buscaNoticia->bindParam(1, $id, PDO::PARAM_STR);
			$buscaNoticia->bindParam(2, $noticiaState, PDO::PARAM_INT);
			$buscaNoticia->execute();
		} catch (PDOException $e) {
			echo $e->getMessage();
		}

		while($rowNoticia = $buscaNoticia->fetchObject()){
		?>

		<div class="col-12 col-md-4">
			<div class="noticia">
				<a href="noticia/<?php echo $rowNoticia->id;?>">
					<div class="imagem" style="background: url(https://caldazinha.go.gov.br/<?php echo $rowNoticia->capa;?>) center center no-repeat; background-size: cover;"></div>
				</a>
				<span><?php echo $rowNoticia->created;?></span>
				<a href="noticia/<?php echo $rowNoticia->id;?>"><h4><?php echo $rowNoticia->title;?></h4></a>
			</div>
		</div>

		<?php }?>

	</div>
</div>