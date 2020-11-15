<?php
$idPagina = '';

if(isset($_GET['go'])){
	switch ($_GET['go']) {
		case 'noticias':
			$idPagina = 'noticias';
			break;
		case 'fale-conosco':
			$idPagina = 'contato';
			break;
		
		default:
			$idPagina = '';
			break;
	}
}