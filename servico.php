<html>

	<style type="text/css">

	.text{
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

	.principal-left{
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

	.principal-right{
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

	.principal-center{
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

	.fundo{
    	opacity: 0.5;
    	background-color:#E5FFEA;
     	position:absolute;
		top:0px;
		left:0px;
		width:100%;
		height:100%;
		z-index:1;
	}

	.imagem{
		position: relative;
		z-index:5;
	}

	</style>
	<body>
		<div class="central" style="background-image: url('/projeto1-php/imagens/frutas.jpg'); background-repeat:no-repeat; background-size:130%;">

			<div class="principal-left">
				<div class="imagem">
					<img src="imagens/noiva.jpg">
				</div>
				<p class="text">Noiva em Forma</p>
				<div class="fundo"></div>
			</div>

			<div class="principal-center">
				<div class="imagem">
					<img src="imagens/gestante.jpg">
				</div>
				<p class="text">Programa Gestante</p>
				<div class="fundo"></div>
			</div>

			<div class="principal-right">
				<div class="imagem">
					<img src="imagens/familia.jpg">
				</div>
				<p class="text">Consulta Familiar</p>
				<div class="fundo"></div>
			</div>
			
			<div class="principal-left">
				<div class="imagem">
					<img src="imagens/consulta.jpg">
				</div>
				<p class="text">Consulta Nutricional</p>
				<div class="fundo"></div>
			</div>

			<div class="principal-center">
				<div class="imagem">
					<img src="imagens/cardapio.jpg">
				</div>
				<p class="text">Cardápio Personalizado</p>
				<div class="fundo"></div>
			</div>

			<div class="principal-right">
				<div class="imagem">
					<img src="imagens/treinamento.jpg">
				</div>
				<p class="text">Treinamento Teórico</p>
				<div class="fundo"></div>
			</div>
		</div>
	</body>
</html>