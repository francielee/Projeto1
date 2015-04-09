<! DOCTYPE html>
<html>
	
	<style type="text/css">
	#link{
		margin-top: 100px;
		margin-bottom: 150px;
		margin-left: 85px;
		margin-right: 90px;
		width: 20%;
		height: 20%;
		display: inline-block;
	}
	#texto{
		margin-bottom: 100px;
		margin-top: 5px;
	} 
	</style>
	
	<?php require_once ("head.php"); ?>

  <body>
    <?php require_once ("menu.php"); ?>	
    
    <?php 
    	$pagina = filter_input(INPUT_GET, "pagina"); 

    	if($pagina == 'index'){ 
    		echo '<div>
    			<img src="imagens/frutas-da-dieta.jpg" style="width:100%;"/>
   				</div>';
		}
    ?>
 
	<?php
		if ($pagina == "index"){
			require_once("index-conteudo.php");
		}
		else if($pagina == "home"){
			require_once("home.php");
		}
		elseif ($pagina == "empresa") {
			require_once("empresa.php");
		}
		elseif ($pagina == "servico") {
			require_once("servico.php");
		}
		elseif ($pagina == "contato") {
			require_once("contato.php");
		}else{
			echo "Página não encontrada!";
		}
	?>

    <?php require_once ("rodape.php"); ?>

    <Script  src = "http://code.jquery.com/jquery.js" > </script>
    <Script  src = "bootstrap/js/bootstrap.min.js" > </script>
  </body>
</html>