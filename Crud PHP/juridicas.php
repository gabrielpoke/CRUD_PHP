<?php
require_once 'pessoas.php';

    class juridicas extends pessoas{
        private $cnpj;
        
        public function getCnpj(){
            return $this->cnpj;
        }
        
        public function setCnpj($v_cnpj){
            $this->cnpj = $v_cnpj;
        }
        
        public function insert(){
            parent::insert();
    	    // Buscando todos os dados da tabela pessoas
            $arr = parent::findAll();
            // Montando o objeto pessoas
            foreach($arr as $chave => $valor){
                $objeto = new pessoas();
                $objeto->setId($valor->ID);
            }
            $this->setId($objeto->getId());
            
            $this->table = 'JURIDICAS';
    		$sql  = "INSERT INTO $this->table (id, cnpj) VALUES (" . $this->getId() . ",'" . $this->getCnpj() . "')";
    		$stmt = DB::prepare($sql);
    		return $stmt->execute(); 
            
        }
        
        public function find($id){
    		$sql  = "SELECT * FROM PESSOAS INNER JOIN JURIDICAS USING (ID) WHERE JURIDICAS.ID = :id";
    		$stmt = DB::prepare($sql);
    		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
    		$stmt->execute();
    		return $stmt->fetchAll();
    	}
    
    	public function findAll(){
    		$sql  = "SELECT * FROM PESSOAS INNER JOIN JURIDICAS USING (ID)";
    		$stmt = DB::prepare($sql);
    		$stmt->execute();
    		return $stmt->fetchAll();
    	}
    	
        public function delete(){
            $this->table = 'JURIDICAS';
            $sql = "DELETE FROM $this->table WHERE ID = " . $this->getId();
            $stmt = DB::prepare($sql);
    		return $stmt->execute();
    		parent::delete();
        }
    	
    	public function listagem(){
		echo "<div style='text-align: left;'>";
			echo "<table border='1' cellpadding='1' cellspacing='1' style='width: 1100px'>";
				echo "<thead>";
					echo "<tr>";
						echo "<th scope='col'>Nome</th>";
						echo "<th scope='col'>Endere&ccedil;o</th>";
						echo "<th scope='col'>Telefones</th>";
						echo "<th scope='col'>Documento</th>";
						echo "<th scope='col'>Editar</th>";
						echo "<th scope='col'>Excluir</th>";
					echo "</tr>";
				echo "</thead>";
				echo "<tbody>";
    		$arr = $this->findAll();
    		foreach($arr as $chave => $valor){
    		    $nova = new juridicas();
    		    $nova->setId($valor->ID);
    		    $nova->setNome($valor->NOME);
    		    $nova->setLogradouro($valor->LOGRADOURO);
    		    $nova->setNumero($valor->NUMERO);
    		    $nova->setComplemento($valor->COMPLEMENTO);
    		    $nova->setBairro($valor->BAIRRO);
    		    $nova->setCidade($valor->CIDADE);
    		    $nova->setEstado($valor->ESTADO);
    		    $nova->setCep($valor->CEP);
    		    $nova->setFone1($valor->FONE1);
    		    $nova->setFone2($valor->FONE2);
    		    $nova->setCnpj($valor->CNPJ);
    		    echo "<tr>";
				echo "<td>".$nova->getNome()."</td>";		
				echo "<td>".$nova->getLogradouro().", ".$nova->getNumero()." - ".$nova->getComplemento()."</br>".$nova->getBairro()."</br>".$nova->getCidade()."/".$nova->getEstado()."</br>CEP ".$nova->getCep()."</td>";
				echo "<td>".$nova->getFone1()."</br>".$nova->getFone2()."</td>";
				echo "<td>".$nova->getCnpj()."</td>";
				echo "<td>";
				echo "<form action='editcliente.php' method='post' name='formEdicao'><p style='text-align: center;'>";
                echo "<input name='idcliente' type='hidden' value='".$nova->getId()."' />";
                echo "<input name='tpcliente' type='hidden' value='Juridica' />";
                echo "<input name='Editar' type='submit' value='Editar' />";
                echo "</form></td>";
				echo "<td>";
				echo "<form action='remcliente.php' method='post' name='formExclusao'><p style='text-align: center;'>";
                echo "<input name='idcliente' type='hidden' value='".$nova->getId()."' />";
                echo "<input name='tpcliente' type='hidden' value='Juridica' />";
                echo "<input name='Excluir' type='submit' value='Excluir' />";
                echo "</form></td>";
				echo "</tr>";
    		}

				echo "</tbody>";
			echo "</table>";
		echo "</div>";    	    
    	}

    }
?>