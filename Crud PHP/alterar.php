<?php

require_once 'pessoas.php';
require_once 'juridicas.php';
require_once 'fisicas.php';
    
        extract($_POST);
        
        $pessoa = new pessoas();
        $pessoa->setId($idcliente);
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
        $pessoa->update();
        header('Location: lista.php');
        exit();
?>