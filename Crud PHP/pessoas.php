<?php

include 'Crud.php';

    class pessoas extends Crud{
        private $id;
        private $nome;
        private $logradouro;
        private $numero;
        private $complemento;
        private $bairro;
        private $cidade;
        private $estado;
        private $cep;
        private $fone1;
        private $fone2;
        
        public function getId(){
            return $this->id;
        }
        
        public function setId($v_id){
            $this->id = $v_id;
        }
        
        public function getNome(){
            return $this->nome;
        }
        
        public function setNome($v_nome){
            $this->nome = $v_nome;
        }
        
        public function getLogradouro(){
            return $this->logradouro;
        }
        
        public function setLogradouro($v_logradouro){
            $this->logradouro = $v_logradouro;
        }        
        
        public function getNumero(){
            return $this->numero;
        }
        
        public function setNumero($v_numero){
            $this->numero = $v_numero;
        }        
        
        public function getComplemento(){
            return $this->complemento;
        }
        
        public function setComplemento($v_complemento){
            $this->complemento = $v_complemento;
        }        
        
        public function getBairro(){
            return $this->bairro;
        }
        
        public function setBairro($v_bairro){
            $this->bairro = $v_bairro;
        }        
        
        public function getCidade(){
            return $this->cidade;
        }
        
        public function setCidade($v_cidade){
            $this->cidade = $v_cidade;
        }        
        
        public function getEstado(){
            return $this->estado;
        }
        
        public function setEstado($v_estado){
            $this->estado = $v_estado;
        }        
        
        public function getCep(){
            return $this->cep;
        }
        
        public function setCep($v_cep){
            $this->cep = $v_cep;
        }        
        
        public function getFone1(){
            return $this->fone1;
        }
        
        public function setFone1($v_fone1){
            $this->fone1 = $v_fone1;
        }        
        
        public function getFone2(){
            return $this->fone2;
        }
        
        public function setFone2($v_fone2){
            $this->fone2 = $v_fone2;
        }
        
    	public function insert(){
    	    $this->table = 'PESSOAS';
    		$sql  = "INSERT INTO $this->table (nome, logradouro, numero, complemento, bairro, cidade, estado, cep, fone1, fone2) VALUES ('" . $this->getNome() . "','" . $this->getLogradouro() . "','" . $this->getNumero() . "','" . $this->getComplemento() . "','" . $this->getBairro() . "','". $this->getCidade() . "','" . $this->getEstado() . "','" . $this->getCep() . "','" . $this->getFone1() ."','". $this->getFone2() . "')";
    		$stmt = DB::prepare($sql);
    		return $stmt->execute(); 
    	}
        
        public function update(){
    	    $this->table = 'PESSOAS';
    		$sql  = "UPDATE $this->table  SET nome = '" . $this->getNome() . "', logradouro = '" . $this->getLogradouro() . "', numero = '" . $this->getNumero() . "', complemento = '" . $this->getComplemento() . "', bairro = '" . $this->getBairro() . "', cidade = '". $this->getCidade() . "', estado = '" . $this->getEstado() . "', cep = '" . $this->getCep() . "', fone1 = '" . $this->getFone1() ."', fone2 = '". $this->getFone2() . "' WHERE ID = " . $this->getId();
    		$stmt = DB::prepare($sql);
    		return $stmt->execute();             
        }
        
        public function delete(){
            $this->table = 'PESSOAS';
            $sql = "DELETE FROM $this->table WHERE ID = " . $this->getId();
            $stmt = DB::prepare($sql);
    		return $stmt->execute();
        }
    }
?>