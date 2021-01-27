<?php
    require_once 'fisicas.php';
    require_once 'juridicas.php';
    
    if(ISSET($_POST['idcliente'])AND ISSET($_POST['tpcliente']))
    {
        $GLOBALS['$_id'] = $_POST['idcliente'];
        $GLOBALS['$tpcliente'] = $_POST['tpcliente'];
    }
    
    if($GLOBALS['$tpcliente'] == 'Fisica'){
        $fisicas = new fisicas();
    
        $fisicas->setId($GLOBALS['$_id']);
        $fisicas->delete();
        
        $pessoaF = new pessoas();
        
        $pessoaF->setId($GLOBALS['$_id']);
        $pessoaF->delete();
    
    }
    
    else{
        
        $juridicas = new juridicas();
        
        $juridicas->setId($GLOBALS['$_id']);
        $juridicas-> delete();
        
        $pessoasJ = new pessoas();
        
        $pessoasJ->setId($GLOBALS['$_id']);
        $pessoasJ-> delete();
        
    }

    
    
    
    header('Location: lista.php');
    exit();

?>