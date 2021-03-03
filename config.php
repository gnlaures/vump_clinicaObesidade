<?php
	$http = 'http://';
	$urllocal = '/vump_clinicaDaObesidade';
	$title = 'Clínica da Obesidade';

	#Retorna a página
	$URL = str_replace($urllocal, '', $_SERVER['REQUEST_URI']);
	$geturl = explode('/', $URL);
	$params = count($geturl);
	$pagina = explode('?', $geturl[1]);
	$pagina = reset($pagina);
	$fileSys = 'index.php';

	#Identifica se é home ou inner page
	$classOnBody = 'p-inner';
	
	switch ($pagina) {
		// Boilerplate
		case 'laures':
			$file = '_boilerplateComponents/index.php';
			$title_page = 'Components - '.$title;
			break;

		// projectPages
		case 'contato':
			$file = 'page_institucional_contato.php';
			$title_page = 'Fale Conosco - '.$title;
			break;
		case 'single-page':
			$file = 'page_singlePage.php';
			$title_page = 'Single Page - '.$title;
			break;
		case 'o-que-tratamos':
			$file = 'page_institucional_atuacao.php';
			$title_page = 'Áreas de Atuação - '.$title;
			break;
		case 'equipe-medica':
			$file = 'page_institucional_equipe.php';
			$title_page = 'Equipe Médica - '.$title;
			break;
		case 'voluntario':
			$file = 'page_institucional_voluntario.php';
			$title_page = 'Seja Voluntário - '.$title;
			break;

		// Home / 404
		case '' :
		case 'home' :
			$file = 'page_home.php';
			$title_page = $title;
			$classOnBody = 'p-home';
			break;
		default :
			header("HTTP/1.0 404 Not Found");
			$file = 'page_404.php';
			$title_page = 'Página não encontrada - '.$title;
			break;
	}

#Monta a base url
	$url_site = $http . $_SERVER['SERVER_NAME'] . $urllocal;
	$base_page = '<base href="' . $url_site . '/" />';
	include($fileSys);
?>