<! DOCTYPE html>
<html>
	<head>
  		<meta charset="utf-8">
    	<title>Projeto 1</title>
   
       	<! - bootstrap ->
    	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" >

		<style type="text/css">

			#logo{
				height: 50px;
				width: 50px;
				margin-bottom: 0px;
				margin-top: 0px;
			}

			#footer/*rodape*/{
			 	font-size: 13px;
			 	background-color: #E59D5C;
			 	padding-top: 10px;
			 	padding-bottom: 10px; 
			 	position: absolute;
			 	right: 0;
			 	left: 0;
			 	text-align: center;
			}

			#background{
				background-image: url('imagens/frutas.jpg'); 
				background-repeat:no-repeat; 
				background-size:130%; 
				text-align:center;"
			}

			.background-box-service{
		    	opacity: 0.5;
		    	background-color:#E5FFEA;
		     	position:absolute;
				top:0px;
				left:0px;
				width:100%;
				height:100%;
				z-index:1;
			}

			#box-standard/*standard = padrão*/{
				width: 900px;
			    padding: 15px;
			    border: 4px solid gray;
			    border-radius: 10px;
	    	    text-align: center;
			    display: inline-block;
			    margin-top: 40px;
			    margin-bottom: 80px;
			    background-color:#E5FFEA; 
			}
			
			.box-left-service{
				width: 250px;
		  		padding: 0px;
		    	border: 4px solid gray;
		    	border-radius: 10px;
		    	margin: 100;
		    	text-align: left;
		    	display: inline-block;
		    	margin-top: 40px;
		    	margin-bottom: 50px;
		    	position: relative;

		    }

			.box-right-service{
				width: 250px;
		  		padding: 0px;
		    	border: 4px solid gray;
		    	border-radius: 10px;
		    	margin: 100;
		    	text-align: right;
		    	display: inline-block;
		    	margin-top: 40px;
		    	margin-bottom: 50px;
		    	position: relative;
			}

			.box-center-service{
				width: 250px;
		  		padding: 0px;
		    	border: 4px solid gray;
		    	border-radius: 10px;
		    	margin: 0;
		    	text-align: center;
		    	display: inline-block;
		    	margin-top: 40px;
		    	margin-bottom: 50px;
		    	position: relative;
			}

			.title-text{
				font-weight:bold
			}

			.text-service{
				margin: 0;
				margin-left: 5px;
				padding-top: 5px;
				padding-bottom: 4px;
				font-weight:bold;
				color: #f00000;
				font-size: medium;
				position: relative;
				z-index:5;
				text-align: left;
			}

			.text-contact{
				display: block !important;
				text-align: justify; 
				margin-top:0; 
				margin-bottom:0;
				padding-left: 0px;
				padding-right: 0px;
				font-weight:bold;
			}

			.camp{
				padding: 0px;
			}

			#text-business/*business = empresa*/{
					text-align: justify; 
					margin-top:40; 
					margin-bottom:40;
					padding-left: 15px;
					padding-right: 15px;
			}

			#text-index-content/*content = conteudo*/{
				margin-bottom: 100px;
				margin-top: 5px;
			} 

			#erro{
				font-size: 40px;
				text-align: center;
				clear: both;
				margin-top: 50px;
				margin-bottom: 80px;
				color: red;
			}

			#photo-link{
				margin-top: 100px;
				margin-bottom: 150px;
				margin-left: 85px;
				margin-right: 90px;
				width: 20%;
				height: 20%;
				display: inline-block;
			}

			.photo-service{
					position: relative;
					z-index:5;
			}

			.button{
				display:inline-block;
			}

			ul.list-inline li{
				padding-right: 40px !important; 
				padding-left: 90px !important;
				font-size: 20px;
				margin-top: 20px;
				margin-bottom: 10px;
			}

			ul.list-inline a{
				color: red;
			}

			ul.list-inline a:hover{
				color:green;
				text-decoration: none;
			}

			form{
				margin:30px !important;
				display: block;
			}

 		</style>

 	</head>

	<body>
	
    <?php 

   		require_once ("menu.php");
        
    	//$pagina = filter_input(INPUT_GET, "pagina"); 

   		function rotaAtual(){

			$url = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
			$rota = explode('/', substr( $url['path'], 1 ) );

			return $rota[0];
		}

    	if(rotaAtual() == 'home'){ 
    		echo '<div>
    			<img src="imagens/frutas-da-dieta.jpg" style="width:100%;"/>
   				</div>';
		}

		require_once("funcao.php");

  		require_once ("rodape.php");
    ?>

    <Script  src = "http://code.jquery.com/jquery.js" > </script>
    <Script  src = "bootstrap/js/bootstrap.min.js" > </script>

  </body>
</html>