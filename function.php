<?php
	function head($tags){
			if(!isset($_GET['p']) or ($_GET['p'] == '')){
				$arTags = array('title' => 'Pagina Home');
				return $arTags[$tags];
			}else{
					if(file_exists($_GET['p'].'.php')){
						$pags = $_GET['p'];
						$arPaginas = array(
						'sobre'   => array('title'  => 'Pagina Sobre'),
						'contato' => array('title'  => 'Pagina Contato')
						);
						return $arPaginas[$pags][$tags];
					}else{
						$arTags = array('title' => 'Ops!, Pagina Não econtrada!');
					    return $arTags[$tags];	
				    }
			    }
	}
?>