<html>

	<style type="text/css">
	form{
		margin:30px !important;
		display: block;
	}

	.bot{
		width: 800px;
	    padding: 15px;
	    border: 4px solid gray;
	    border-radius: 10px;
	    margin-bottom: 80px;
	    text-align: center;
	    display: inline-block;
	    margin-top: 40px;
	    background-color:#E5FFEA; 
	}

	.text{
		display: block !important;
		text-align: justify; 
		margin-top:0; 
		margin-bottom:0;
		padding-left: 0px;
		padding-right: 0px;
		font-weight:bold;
	}

	.campo{
		padding: 0px;
	}

	.envio{
		display: block !important;
		text-align: justify; 
		
		padding-left: 0px;
		padding-right: 0px;
		font-weight:bold;
		margin:30px !important;
		display: block;
	}

	</style>
	<body>
		<div style="background-image: url('imagens/frutas.jpg'); background-repeat:no-repeat; background-size:130%; text-align:center;">
			<div class="bot">
				<p class="text">Entre em contato conosco.</p>
				<div>
					<form method="post" action="?pagina=contato">
						<fieldset>
							<label class="text" >Nome:</label><input class="campo" type="text" name="nome"/>
							<label class="text" >E-mail:</label><input class="campo" type="text" name="email"/>
							<label class="text" >Assunto:</label><input class="campo" type="text" name="assunto"/>
							<label class="text" >Mensagem:</label><textarea rows="7" name="mensagem"></textarea>
							<input class="botao" style="display:inline-block;" type="submit" value="Enviar">
						</fieldset>
					</form>
				</div>

				<?php 
					if ((filter_input(INPUT_POST,"nome")) && filter_input(INPUT_POST,"nome") != null &&
						(filter_input(INPUT_POST,"email")) && filter_input(INPUT_POST,"email") != null &&
						(filter_input(INPUT_POST,"assunto")) && filter_input(INPUT_POST,"assunto") != null &&
						(filter_input(INPUT_POST,"mensagem")) && filter_input(INPUT_POST,"mensagem") != null){

						//fazer mensagem que seja obrigatorio todos os campos

						echo "<div>
								<p class=\"text\">
									Dados enviados com sucesso, abaixo seguem os dados que você enviou
								</p>
								</br>
								<p>
									Nome:" . $_POST["nome"] . "
									</br>
									E-mail:" . $_POST["email"] . "
									</br>
									Assunto:" . $_POST["assunto"] . "
									</br>
									Mensagem:" . $_POST["mensagem"] . "

								</p>
							</div>";
					}
				?>
			</div>
			<div style="clear:both"></div>
		</div>
	</body>
</html>