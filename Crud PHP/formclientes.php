<html>
	<head>
		<title>Persistência de Objetos no PHP</title>
	</head>
	<body>
		<h1 style="text-align: center;">
			Cadastro de Clientes</h1>

		<form action="cadclientes.php" id="clientes" method="post" name="clientes">
			<p>
				Nome:&nbsp;<input maxlength="80" name="nome" size="80" type="text" /></p>
			<p>
				Endere&ccedil;o</p>
			<p>
				Logradouro (rua, avenida, pra&ccedil;a, etc):&nbsp;<input maxlength="50" name="lograd" size="50" type="text" /></p>
			<p>
				N&uacute;mero:&nbsp;<input maxlength="10" name="num" size="10" type="text" /> &nbsp;Complemento:&nbsp;<input maxlength="30" name="comp" size="30" type="text" /></p>
			<p>
				Bairro:&nbsp;<input maxlength="50" name="bairro" size="50" type="text" /></p>
			<p>
				Cidade:&nbsp;<input maxlength="50" name="cidade" size="50" type="text" /></p>
			<p>
				Estado:&nbsp;
				<select name="estado">
				    <option value="AC">AC</option>
                    <option value="AL">AL</option>
                    <option value="AP">AP</option>
                    <option value="AM">AM</option>
                    <option value="BA">BA</option>
                    <option value="CE">CE</option>
                    <option value="DF">DF</option>
                    <option value="ES">ES</option>
                    <option value="GO">GO</option>
                    <option value="MA">MA</option>
                    <option value="MT">MT</option>
                    <option value="MS">MS</option>
                    <option value="MG">MG</option>
                    <option value="PA">PA</option>
                    <option value="PB">PB</option>
                    <option value="PR">PR</option>
                    <option value="PE">PE</option>
                    <option value="PI">PI</option>
                    <option value="RJ">RJ</option>
                    <option value="RN">RN</option>
                    <option value="RS">RS</option>
                    <option value="RO">RO</option>
                    <option value="RR">RR</option>
                    <option value="SC">SC</option>
                    <option value="SP">SP</option>
                    <option value="SE">SE</option>
                    <option value="TO">TO</option>
				</select></p>
			<p>
				CEP:&nbsp;<input maxlength="12" name="cep" size="12" type="text" /></p>
			<p>
				Telefone (1):&nbsp;<input maxlength="22" name="fone1" size="22" type="text" /> &nbsp;Telefone (2):&nbsp;<input maxlength="22" name="fone2" size="22" type="text" /></p>
			<p>
			    CPF / CNPJ:&nbsp;<input maxlength="22" name="documento" size="22" type="text" />
			</p>
			<p>
				<input name="tppessoa" type="radio" value="fisica" checked="checked" />&nbsp;Pessoa F&iacute;sica&nbsp; &nbsp;&nbsp;<input name="tppessoa" type="radio" value="juridica" />&nbsp;Pessoa Jur&iacute;dica</p>
			<p>
				<input name="BtnEnviar" type="submit" value="Cadastrar" /></p>
		</form>
		
		</div>
		<p>
			&nbsp;</p>
	</body>
</html>
