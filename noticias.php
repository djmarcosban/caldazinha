<?php
$noticiaState = 1;

try {
  $buscaNoticia = $sql->prepare("SELECT title, capa, created, id FROM noticias WHERE state = ? ORDER BY id DESC LIMIT 1");
  $buscaNoticia->bindParam(1, $noticiaState, PDO::PARAM_INT);
  $buscaNoticia->execute();
} catch (PDOException $e) {
  echo $e->getMessage();
}

$rowNoticia = $buscaNoticia->fetchObject();
?>

            <div class="noticias">
              <div class="row">
                <div class="col-12">
                  <h2>Últimas notícias <a href="noticias/" class="right">ver todas as notícias</a></h2>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-lg-6 destaque">
                  <div class="noticia">
                    <a href="noticia/<?php echo $rowNoticia->id;?>">
                      <div class="imagem" style="background:url(https://caldazinha.go.gov.br/<?php echo $rowNoticia->capa;?>) center center no-repeat;background-size:cover;"></div>
                    </a>
                    <span><?php echo $rowNoticia->created;?></span>
                    <a href="noticia/<?php echo $rowNoticia->id;?>">
                      <h3><?php echo $rowNoticia->title;?></h3>
                    </a>
                  </div>
                </div>
                <div class="col-12 col-lg-6">
                  <div class='row'>
<?php
try {
  $buscaNoticias = $sql->prepare("SELECT title, capa, created, id FROM noticias WHERE id != ? AND state = ? ORDER BY id DESC LIMIT 4");
  $buscaNoticias->bindParam(1, $rowNoticia->id, PDO::PARAM_STR);
  $buscaNoticias->bindParam(2, $noticiaState, PDO::PARAM_INT);
  $buscaNoticias->execute();
} catch (PDOException $e) {
  echo $e->getMessage();
}
while($rowNoticias = $buscaNoticias->fetchObject()){
?>
                    <div class="col-6">
                      <div class="noticia">
                        <a href="noticia/<?php echo $rowNoticias->id;?>">
                          <div class="imagem" style="background: url(https://caldazinha.go.gov.br/<?php echo $rowNoticias->capa;?>) center center no-repeat; background-size: cover;"></div>
                        </a>
                        <span><?php echo $rowNoticias->created;?></span>
                        <a href="noticia/<?php echo $rowNoticias->id;?>">
                        <h3><?php echo $rowNoticias->title;?></h3></a>
                      </div>
                    </div>
<?php }?>
                  </div>
                </div>
              </div>
            </div>