<?php
$noticiaState = 1;
try {
	$buscaCategoria = $sql->prepare("SELECT nome, id FROM noticias_cat WHERE state = ?");
	$buscaCategoria->bindParam(1, $noticiaState, PDO::PARAM_INT);
	$buscaCategoria->execute();
} catch (PDOException $e) {
	echo $e->getMessage();
}
?>

<article class="interna">
	<h2 class="titulo">Notícias</h2>
	<div class="row">
		<div class="col-12">
		</div>
		<div class="col-12">
			<form id="form_filter" action="" method="POST">
				<div class="row">
					<div class="col-12 col-md-6">
						<label>
							<span>Filtrar por</span>
							<select name="cat">
								<option value="0">Todas as categorias</option>
								<?php while($rowCategoria = $buscaCategoria->fetchObject()){ ?>
								<option <?php echo(isset($_GET['categoria']) && $_GET['categoria'] == $rowCategoria->id ? 'selected' : ''); ?> value="<?php echo $rowCategoria->id;?>"><?php echo $rowCategoria->nome;?></option>
								<?php }?>
							</select>
						</label>
					</div>
					<div class="col-12 col-md-6">
						<label>
							<span>Listar por</span>
							<select name="ordem">
								<option value="DESC" <?php echo(isset($_GET['ordem']) && $_GET['ordem'] == 'DESC' ? 'selected' : ''); ?>>Mais recentes</option>
								<option value="ASC" <?php echo(isset($_GET['ordem']) && $_GET['ordem'] == 'ASC' ? 'selected' : ''); ?>>Menos recentes</option>
							</select>
						</label>
					</div>
					<div class="col-12 col-md-6">
						<input type="submit" value="Filtrar" class="btn btn-success">
					</div>
				</div>
			</form>
		</div>

		<?php
		try {
			if(isset($_GET['categoria']) && $_GET['categoria'] != '0'){
				$ordem = $_GET['ordem'];

				if($ordem == 'ASC'){
					$newOrdem = 'ASC';
				}else{
					$newOrdem = 'DESC';
				}

				$buscaNoticia = $sql->prepare("SELECT title, capa, created, id, catid FROM noticias WHERE state = ? AND catid = ? ORDER BY id $newOrdem");
				$buscaNoticia->bindParam(1, $noticiaState, PDO::PARAM_INT);
				$buscaNoticia->bindParam(2, $_GET['categoria'], PDO::PARAM_INT);
				$buscaNoticia->execute();
			}elseif(isset($_GET['categoria']) && $_GET['categoria'] == '0'){
				$ordem = $_GET['ordem'];

				if($ordem == 'ASC'){
					$newOrdem = 'ASC';
				}else{
					$newOrdem = 'DESC';
				}
				$buscaNoticia = $sql->prepare("SELECT title, capa, created, id, catid FROM noticias WHERE state = ? ORDER BY id $newOrdem");
				$buscaNoticia->bindParam(1, $noticiaState, PDO::PARAM_INT);
				$buscaNoticia->execute();
			}else{
				$buscaNoticia = $sql->prepare("SELECT title, capa, created, id, catid FROM noticias WHERE state = ? ORDER BY id DESC");
				$buscaNoticia->bindParam(1, $noticiaState, PDO::PARAM_INT);
				$buscaNoticia->execute();
			}
		} catch (PDOException $e) {
			echo $e->getMessage();
		}

		$m = 0;

		if(!$buscaNoticia->rowCount()){
			echo 'Nenhum notícia encontrada para essa categoria.';
		}else{
		
			while($rowNoticia = $buscaNoticia->fetchObject()){
				
				$m++;

				try {
					$buscaCategoria = $sql->prepare("SELECT nome, id FROM noticias_cat WHERE id = ? AND state = ?");
					$buscaCategoria->bindParam(1, $rowNoticia->catid, PDO::PARAM_INT);
					$buscaCategoria->bindParam(2, $noticiaState, PDO::PARAM_INT);
					$buscaCategoria->execute();
				} catch (PDOException $e) {
					echo $e->getMessage();
				}

				if(!$buscaCategoria->rowCount()){
					$categoriaID = '0';
					$categoriaNome = 'Categoria desconhecida';
				}else{
					$rowCategoria = $buscaCategoria->fetchObject();
					$categoriaID = $rowCategoria->id;
					$categoriaNome = $rowCategoria->nome;

					if(isset($_GET['categoria']) && $_GET['categoria'] != 0 && $m == 1){
						echo '<div class="col-12"><h3>'.$categoriaNome.' - '.$buscaNoticia->rowCount().' resultados encontrados</h3></div>';
					}
				}
		?>

		<div class="col-12 noticia">
			<div class="row">
				<a href="<?php echo BASE;?>noticia/<?php echo $rowNoticia->id;?>" class="col-12 col-md-4">
					<div class="imagem" style="background: url(https://caldazinha.go.gov.br/<?php echo $rowNoticia->capa;?>) center center no-repeat; background-size: cover;"></div>
				</a>
				<div class="col-12 col-md-8">
					<span><?php echo $rowNoticia->created;?> • <a href="<?php echo BASE;?>categoria/<?php echo $categoriaID;?>" rel="category tag"><?php echo $categoriaNome;?></a></span>
					<a href="<?php echo BASE;?>noticia/<?php echo $rowNoticia->id;?>"><h3><?php echo $rowNoticia->title;?></h3></a>
				</div>
			</div>
		</div>

			<?php
				} //end while
			} //end if !count
			?>

	</div>
</article>

<script type="text/javascript">
$('#form_filter').on('submit', function(e){
	e.preventDefault()
	let categoria = $('select[name=cat]').val()
	let ordem = $('select[name=ordem]').val()
	location.href = '<?php echo BASE;?>noticias/categoria/' + categoria + '/' + ordem
})
</script>