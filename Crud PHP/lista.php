<?php
require_once 'fisicas.php';
require_once 'juridicas.php';
?>
<html>
	<head>
		<title>Lista de Pessoas Cadastradas</title>
	</head>
	<body>
		<h1 style="text-align: center;">Cadastro de Clientes</h1>
		<h2>Clientes - Pessoas Físicas</h2>
		<div style="text-align: left;">
		<?php
            $pfis = new fisicas();
            $pfis->listagem();
        ?>
		</div>
		

		<h2>Clientes - Pessoas Jurídicas</h2>
		<div style="text-align: left;">
        <?php
        $pjur = new juridicas();
        $pjur->listagem();
        ?>
		</div>
    		<p style="text-align: center;">
			<a href="formclientes.php"><input name="Cadastrar" type="button" value="Novo Cadastro" /></a></p>
	</body>
</html>