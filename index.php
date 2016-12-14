<?php 
	include 'function.php';
	include 'header.php';
    if(isset($_GET['p']) && ($_GET['p'] != '')){
		$pagina =  $_GET['p'];
		if(file_exists($pagina.'.php')){
		    include $pagina.'.php';
		}else{
			include 'erro.php';
		}
	}else{
		include 'home.php';
	}
	include 'footer.php';
?>