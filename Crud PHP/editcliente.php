<?php

 require_once'juridicas.php';
 require_once'fisicas.php';
 
if(ISSET($_POST['idcliente'])){

    $GLOBALS [ '$id']  = $_POST['idcliente'];
}
        
        $pessoas = new pessoas();
        
        $PessoaF_obj = new fisicas();
        
        $PessoaJ_obj= new juridicas();
        
        
        $PessoaF_obj->setId($GLOBALS [ '$id']);
        
        $PessoaJ_obj->setId($GLOBALS [ '$id']);
        
        $pessoas->setId($GLOBALS [ '$id']);
        
        
        
        $PessoaF = $PessoaF_obj->find($pessoas->getId());
        
        $PessoaJ = $PessoaJ_obj->find($pessoas->getId());
        
        if($PessoaF != null){
        
            foreach($PessoaF as $chave => $valor){
            
                $PessoaF_obj->setId( $valor -> ID);
            
                $PessoaF_obj ->setNome($valor -> NOME);
            
                $PessoaF_obj->setLogradouro($valor->LOGRADOURO);
    		
    		    $PessoaF_obj->setNumero($valor->NUMERO);
    		
    		    $PessoaF_obj->setComplemento($valor->COMPLEMENTO);
    		
    		    $PessoaF_obj->setBairro($valor->BAIRRO);
    		
    		    $PessoaF_obj->setCidade($valor->CIDADE);
    		
    		    $PessoaF_obj->setEstado($valor->ESTADO);
    		    
    		    $PessoaF_obj->setCep($valor->CEP);
    		
    		    $PessoaF_obj->setFone1($valor->FONE1);
    		
    		    $PessoaF_obj->setFone2($valor->FONE2);
    		
    		    $PessoaF_obj->setCpf($valor->CPF);
    		    
    		    
     echo "<html>";
     echo    "<head>";
     echo     "<title>Persistência de Objetos no PHP</title>";
     echo   "</head>";
     echo   "<body>";
     echo     "<h1 style='text-align: center;'>";
     echo       "EDIT CLIENTE</h1>";
     echo     "<form action='alterar.php' id='clientes' method='post' name='clientes'>";
     echo "<input name='idcliente' type='hidden' value='".$PessoaF_obj->getId()."' />";
     echo       "<p>";
     echo        "Nome:&nbsp;<input maxlength='80' name='nome' size='80' type='text' value=".$PessoaF_obj->getNome()." /></p>";
     echo       "<p>";
     echo         "Endere&ccedil;o</p>";
     
     echo       "<p>";
     echo         "Logradouro (rua, avenida, pra&ccedil;a, etc):&nbsp;<input maxlength='50' name='lograd' size='50' type='text' value=".$PessoaF_obj->getLogradouro()." /></p>";
     echo       "<p>";
     echo        "N&uacute;mero:&nbsp;<input maxlength='10' name='num' size='10' type='text' value=".$PessoaF_obj->getNumero()." /> &nbsp;Complemento:&nbsp;<input echomaxlength='30' name='comp' size='30' type='text' value=".$PessoaF_obj->getComplemento()." /></p>";
     echo      "<p>";
     echo        "Bairro:&nbsp;<input maxlength='50' name='bairro' size='50' type='text' value=".$PessoaF_obj->getBairro()." /></p>";
     echo       "<p>";
     echo         "Cidade:&nbsp;<input maxlength='50' name='cidade' size='50' type='text' value=".$PessoaF_obj->getCidade()." /></p>";
     echo   "<p>";
     echo     "Estado:&nbsp;";
     echo     "<select name='estado'>";
     echo           "<option value=".$PessoaF_obj->getEstado().">".$PessoaF_obj->getEstado()."</option>";
     echo         "<option value='AC'>AC</option>";
     echo                 "<option value='AL'>AL</option>";
     echo                 "<option value='AP'>AP</option>";
     echo                 "<option value='AM'>AM</option>";
     echo                     "<option value='BA'>BA</option>";
     echo                     "<option value='CE'>CE</option>";
     echo                     "<option value='DF'>DF</option>";
     echo                     "<option value='ES'>ES</option>";
     echo                    "<option value='GO'>GO</option>";
     echo                     "<option value='MA'>MA</option>";
     echo                     "<option value='MT'>MT</option>";
     echo                     "<option value='MS'>MS</option>";
     echo                     "<option value='MG'>MG</option>";
     echo                     "<option value='PA'>PA</option>";
     echo                     "<option value=vPB'>PB</option>";
     echo                    "<option value='PR'>PR</option>";
     echo                     "<option value='PE'>PE</option>";
     echo                     "<option value='PI'>PI</option>";
     echo                     "<option value='RJ'>RJ</option>";
     echo                     "<option value='RN'>RN</option>";
     echo                     "<option value='RS'>RS</option>";
     echo                     "<option value='RO'>RO</option>";
     echo                     "<option value='RRv>RR</option>";
     echo                     "<option value='SC'>SC</option>";
     echo                     "<option value='SP'>SP</option>";
     echo                     "<option value='SE'>SE</option>";
     echo                     "<option value='TO'>TO</option>";
     echo         "</select></p>";
     
     
     
    echo        "<p>";
     echo         "CEP:&nbsp;<input maxlength='12' name='cep' size='12' type='text' value=" .$PessoaF_obj->getCep() ." /></p>"
     ;
     
     echo        "<p>";
     echo         "Telefone (1):&nbsp;<input maxlength='22' name='fone1' size='22' type='text' value=".$PessoaF_obj->getFone1()." /> &nbsp;Telefone (2):&nbsp;<input maxlength='22' name='fone2' size='22' type='text' value=".$PessoaF_obj->getFone2()." /></p>";
    echo      "<p>";
    echo          "CPF / CNPJ:&nbsp;".$PessoaF_obj->getCpf()." ";
    echo       "</p>";
    
    echo      "<p>";
    echo         "<input name='tppessoa' type='radio' value='fisica' checked='checked' />&nbsp;Pessoa F&iacute;sica&nbsp; &nbsp;&nbsp;</p>";
     echo      "<p>";
     echo        "<input name='BtnEnviar' type='submit' value='Alterar' /></p>";
     echo    "</form>";
     echo    "<p>";
     echo      "&nbsp;</p>";
     echo  "</body>";
     echo "</html>";
    		
        }}
        
        else{
        
            foreach($PessoaJ as $chave => $valor){
            
                $PessoaJ_obj->setId( $valor -> ID);
                
                $PessoaJ_obj->setNome($valor -> NOME);
            
                $PessoaJ_obj->setLogradouro($valor->LOGRADOURO);
    		
    		    $PessoaJ_obj->setNumero($valor->NUMERO);
    		
    		    $PessoaJ_obj->setComplemento($valor->COMPLEMENTO);
    		
    		    $PessoaJ_obj->setBairro($valor->BAIRRO);
    		
    		    $PessoaJ_obj->setCidade($valor->CIDADE);
    		
    		    $PessoaJ_obj->setEstado($valor->ESTADO);
    		
    		    $PessoaJ_obj->setCep($valor->CEP);
    		
    		    $PessoaJ_obj->setFone1($valor->FONE1);
    		
    		    $PessoaJ_obj->setFone2($valor->FONE2);
    		
    		    $PessoaJ_obj->setCnpj($valor->CNPJ);
    		    
    		    echo "<html>";
     echo    "<head>";
     echo     "<title>Persistência de Objetos no PHP</title>";
     echo   "</head>";
     echo   "<body>";
     echo     "<h1 style='text-align: center;'>";
     echo       "EDIT CLIENTE</h1>";
     echo     "<form action='alterar.php' id='clientes' method='post' name='clientes'>";
    echo "<input name='idcliente' type='hidden' value='".$PessoaJ_obj->getId()."' />";
     echo       "<p>";
     echo        "Nome:&nbsp;<input maxlength='80' name='nome' size='80' type='text' value=".$PessoaJ_obj->getNome()." /></p>" ;
     echo       "<p>";
     echo         "Endere&ccedil;o</p>";
     echo       "<p>";
     echo         "Logradouro (rua, avenida, pra&ccedil;a, etc):&nbsp;<input maxlength='50' name='lograd' size='50' type='text' value=".$PessoaJ_obj->getLogradouro()." /></p>";
     echo       "<p>";
     echo        "N&uacute;mero:&nbsp;<input maxlength='10' name='num' size='10' type='text' value=".$PessoaJ_obj->getNumero()." /> &nbsp;Complemento:&nbsp;<input echomaxlength='30' name='comp' size='30' type='text' value=".$PessoaJ_obj->getComplemento()." /></p>";
     echo      "<p>";
     echo        "Bairro:&nbsp;<input maxlength='50' name='bairro' size='50' type='text' value=".$PessoaJ_obj->getBairro()." /></p>";
     echo       "<p>";
     echo         "Cidade:&nbsp;<input maxlength='50' name='cidade' size='50' type='text' value=".$PessoaJ_obj->getCidade()." /></p>";
     echo   "<p>";
     echo     "Estado:&nbsp;";
     echo     "<select name='estado'>";
     echo           "<option value=".$PessoaJ_obj->getEstado().">".$PessoaJ_obj->getEstado()."</option>";
     echo         "<option value='AC'>AC</option>";
     echo                 "<option value='AL'>AL</option>";
     echo                 "<option value='AP'>AP</option>";
     echo                 "<option value='AM'>AM</option>";
     echo                     "<option value='BA'>BA</option>";
     echo                     "<option value='CE'>CE</option>";
     echo                     "<option value='DF'>DF</option>";
     echo                     "<option value='ES'>ES</option>";
     echo                    "<option value='GO'>GO</option>";
     echo                     "<option value='MA'>MA</option>";
     echo                     "<option value='MT'>MT</option>";
     echo                     "<option value='MS'>MS</option>";
     echo                     "<option value='MG'>MG</option>";
     echo                     "<option value='PA'>PA</option>";
     echo                     "<option value=vPB'>PB</option>";
     echo                    "<option value='PR'>PR</option>";
     echo                     "<option value='PE'>PE</option>";
     echo                     "<option value='PI'>PI</option>";
     echo                     "<option value='RJ'>RJ</option>";
     echo                     "<option value='RN'>RN</option>";
     echo                     "<option value='RS'>RS</option>";
     echo                     "<option value='RO'>RO</option>";
     echo                     "<option value='RRv>RR</option>";
     echo                     "<option value='SC'>SC</option>";
     echo                     "<option value='SP'>SP</option>";
     echo                     "<option value='SE'>SE</option>";
     echo                     "<option value='TO'>TO</option>";
     echo         "</select></p>";
     
     
     
    echo        "<p>";
     echo         "CEP:&nbsp;<input maxlength='12' name='cep' size='12' type='text' value=" .$PessoaJ_obj->getCep() ." /></p>"
     ;
     
     echo        "<p>";
     echo         "Telefone (1):&nbsp;<input maxlength='22' name='fone1' size='22' type='text' value=".$PessoaJ_obj->getFone1()." /> &nbsp;Telefone (2):&nbsp;<input maxlength='22' name='fone2' size='22' type='text' value=".$PessoaJ_obj->getFone2()." /></p>";
    echo      "<p>";
    echo          "CPF / CNPJ:&nbsp;".$PessoaJ_obj->getCnpj()."";
    echo       "</p>";
    
    echo      "<p>";
    echo "<input name='tppessoa' type='radio' value='juridica' />&nbsp;Pessoa Jur&iacute;dica</p>";
     echo      "<p>";
     echo        "<input name='BtnEnviar' type='submit' value='Alterar' /></p>";
     echo    "</form>";
     echo    "<p>";
     echo      "&nbsp;</p>";
     echo  "</body>";
     echo "</html>";
    		
        }}

?>