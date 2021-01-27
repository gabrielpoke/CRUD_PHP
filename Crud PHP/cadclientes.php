<?php
    require_once 'fisicas.php';
    require_once 'juridicas.php';

    // Capturar os dados que chegaram do formulário
    extract($_POST);

    // Se os dados pertencerem a uma pessoa física, instanciar um objeto da
    // classe fisicas e setar os valores para suas propriedades
    if ($tppessoa == 'fisica'){
        $pessoa = new fisicas();
        $pessoa->setNome($nome);
        $pessoa->setLogradouro($lograd);
        $pessoa->setNumero($num);
        $pessoa->setComplemento($comp);
        $pessoa->setBairro($bairro);
        $pessoa->setCidade($cidade);
        $pessoa->setEstado($estado);
        $pessoa->setCep($cep);
        $pessoa->setFone1($fone1);
        $pessoa->setFone2($fone2);
        $pessoa->setCpf($documento);
        $pessoa->insert();
    } else {
        // Senão, instanciar um objeto da classe juridicas e setar os valores para
        // suas propriedades
        $pessoa = new juridicas();
        $pessoa->setNome($nome);
        $pessoa->setLogradouro($lograd);
        $pessoa->setNumero($num);
        $pessoa->setComplemento($comp);
        $pessoa->setBairro($bairro);
        $pessoa->setCidade($cidade);
        $pessoa->setEstado($estado);
        $pessoa->setCep($cep);
        $pessoa->setFone1($fone1);
        $pessoa->setFone2($fone2);
        $pessoa->setCnpj($documento);
        $pessoa->insert();
    }
    $newURL = "lista";
    header("Location: $newURL.php");
    die();

?>