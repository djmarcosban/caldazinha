<?php
$id = 1;

try{
	$secs = $sql->prepare("SELECT * FROM m_viceprefeito WHERE id = ? ORDER BY id DESC");
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
				<h3>Gabinete do Vice-Prefeito</h3>
				<div class="field_item_institucional">
					<strong>Vice-Prefeito:</strong> <?php echo $rowSecs->nome;?>
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

<div class="competencia"><h3>Competências</h3><p style="text-align: justify; "><b>Lei Orgânica - Art. 60</b> – Substituirá o Prefeito, no caso de impedimento e suceder-lhe-á, no de vaga, o Vice-Prefeito.&nbsp;</p><p style="text-align: justify; "><br></p><p style="text-align: justify; "> § 1º - O Vice-Prefeito não poderá se recusar a substituir o Prefeito, sob pena de perca de mandato. </p><p style="text-align: justify; "><br></p><p style="text-align: justify; ">§ 2º - O Vice-Prefeito, além de outras atribuições que lhe forem conferidas por lei, auxiliará o Prefeito, sempre que por ele for convocado para missões especiais.&nbsp;</p><p style="text-align: justify; ">&nbsp;</p><p style="text-align: justify; "><b>Art. 61</b> – O Vice-Prefeito, além de outras atribuições que lhe forem conferidas por lei, auxiliará o Prefeito, na administração Municipal, especialmente sobre: </p><p style="text-align: justify; "><br></p><p style="text-align: justify; ">I – O Plano anual, diretrizes orçamentárias, orçamento anual e plano diretor;&nbsp; </p><p style="text-align: justify; "><br></p><p style="text-align: justify; ">II – a criação, estruturação, atribuições e funcionamento dos órgãos da administração municipal incluindo autarquias, empresas, sociedades de economia mista e fundações;&nbsp; </p><p style="text-align: justify; "><br></p><p style="text-align: justify; ">IV – celebrarão convênios, acordos, contratos e outros ajustes com a União, Estados, o Distrito Federal, ou outros municípios e entidades da administração direta ou fundacional e privada, para realização de suas atividades próprias;&nbsp; </p><p style="text-align: justify; "><br></p><p style="text-align: justify; ">V – organização, permissão ou autorização dos serviços públicos de interesse local, o de transporte coletivo de passageiros e definição de serviços administrativas necessários à sua organização e execução.&nbsp; </p><p style="text-align: justify; "><br></p><p style="text-align: justify; ">VI – a exploração dos serviços municipais de transportes coletivo de passageiros e critérios para fixação de tarifas a serem cobradas;&nbsp; </p><p style="text-align: justify; "><br></p><p style="text-align: justify; ">VII – regras de trânsito e multa aplicadas ao caso, regulando suas arrecadações;&nbsp;</p><p style="text-align: justify; "><br></p><p style="text-align: justify; "> VIII – ordenação territorial urbana, controle de ocupação e de uso do solo, zoneamento, parcelamento de áreas e aproveitamento;&nbsp;</p><p style="text-align: justify; "><br></p><p style="text-align: justify; "> IX – a exposição de situação do município quando da remessa de mensagem do Prefeito à Câmara Municipal, no início da sessão legislativa;&nbsp; </p><p style="text-align: justify; "><br></p><p style="text-align: justify; ">X- reivindicações gerais, de interesse do Município, junto aos órgãos da administração direta indireta e fundacional, no âmbito Federal e Estadual.&nbsp;&nbsp;</p><p style="text-align: justify; "><br></p><p style="text-align: justify; "><b>Art. 62 </b>– Verificando-se a vacância do cargo de Prefeito e inexistindo Vice-Prefeito, observa-se-á o seguinte;&nbsp;</p><p style="text-align: justify; "><br></p><p style="text-align: justify; "> I – ocorrendo a vacância nos três primeiros anos de mandato, dar-se-á eleição noventa dias após a sua abertura, cabendo aos eleitos completar o período dos seus antecessores;</p><p style="text-align: justify; "><br></p><p style="text-align: justify; "> II – ocorrendo a vacância no último ano do mandato, assumirá o Presidente da Câmara, que completará o período.</p><p style="text-align: justify; "><br></p><p style="text-align: justify; "><b>Art. 63 </b>– o mandato de prefeito é de quatro anos, vedada a reeleição para o período subsequencia e tirá em 1º de janeiro do ano seguinte ao da sua eleição.&nbsp;</p><p style="text-align: justify; ">&nbsp;</p><p style="text-align: justify; "><b>Art. 64</b> – O Prefeito e o Vice-Prefeito, quando no exercício do cargo, não poderão, sem licença da Câmara Municipal, ausentar-se do Município por período superior a quinze dias, sob pena de perda do cargo ou mandato.&nbsp; </p><p style="text-align: justify; "><br></p><p style="text-align: justify; "><b>Parágrafo único</b> -&nbsp; O Prefeito regularmente licenciado terá direito a perceber a remuneração, quando:&nbsp;</p><p style="text-align: justify; "><br></p><p style="text-align: justify; "> I – impossibilitado de exercer o cargo, por motivo de doença devidamente comprovada;</p><p style="text-align: justify; "><br></p><p style="text-align: justify; "> II – a serviço ou em missão de representação do Município. </p><p style="text-align: justify; "><br></p><p style="text-align: justify; ">§ 2º - A remuneração do Prefeito será estipulada na forma do § 1º do artigo 35 desta Lei Orgânica.&nbsp;&nbsp;</p><p style="text-align: justify; ">&nbsp;</p><p style="text-align: justify; "><b>Art. 65</b> – Em caso de impedimento do Prefeito e do Vice-Prefeito, ou vacância do cargo, assumirá a administração Municipal o Presidente da Câmara.&nbsp; </p><p style="text-align: justify; "><br></p><p style="text-align: justify; "><b>Parágrafo único</b> – O Presidente da Câmara, recusando se, por qualquer motivo, assumir o cargo de Prefeito, renunciará, incontinente, à sua função de dirigente do Legislativo, ensejando, assim, a Chefia do Poder Executivo.&nbsp;</p><p style="text-align: justify; ">&nbsp;</p><p style="text-align: justify; "><b>Art. 66 </b>– Na ocasião de posse e ao término do mandato o Prefeito fará declaração de seus bens as quais ficarão arquivadas na Câmara, constando das respectivas atas o seu resumo.</p><p style="text-align: justify; "><br></p><p style="text-align: justify; "><b> Parágrafo único</b> – O vice-Prefeito fará declaração de bens no momento em que assumir, pela primeira vez, o exercício do cargo.&nbsp;</p><p style="text-align: justify; "><b>&nbsp;</b></p><p style="text-align: justify; "><b>Art. 67</b> – Ao Vice-Prefeito caberá:&nbsp; </p><p style="text-align: justify; "><br></p><p style="text-align: justify; ">I – coordenar e fiscalizar a proteção de documentos, obras monumentos, paisagens naturais, sítios arqueológicos e outros bens de valor histórico e cultural, impedindo sua evasão, destruição e descaracterização; </p><p style="text-align: justify; "><br></p><p style="text-align: justify; ">II – fiscalizar as obras e serviços subvencionados pelo Município.&nbsp;&nbsp;</p><p style="text-align: justify; ">&nbsp;</p><p style=""><b>Art. 68&nbsp;</b>– O Vice-Prefeito poderá, sem perda do mandato e mediante autorização da Câmara Municipal, aceitar o exercer cargo ou função de confiança Municipal, Estadual ou Federal.&nbsp;</p><p style="text-align: justify; ">&nbsp;</p><p style="text-align: justify; "><b>Art. 69</b> – Fica o Vice-Prefeito autorizado a participar juntamente com o Prefeito do processo de escolha e indicação dos secretários e dirigentes de empresas públicas municipais.&nbsp;</p><p style="text-align: justify; ">&nbsp;</p><p style="text-align: justify; "><b>Art. 70</b> – A função do Subprefeito, nos limites destramais, será delegada pelo Prefeito ao Vice-Prefeito, o qual poderá aceitar ou não. </p><p style="text-align: justify; "><br></p><p style="text-align: justify; "><b>Parágrafo Único</b> – O Vice-Prefeito, no exercício de cargo, função ou emprego público, incluído de que seja demissível “ad Nilton”, não poderá ocupar o cargo de Subprefeito</p></div>
</article>