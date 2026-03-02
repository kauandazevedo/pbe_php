<?php

class Produto{
    private $nome;
    private $valor;
    private $quantidade;

    public function __construct($nome, $valor, $quantidade){
        $this->nome = $nome;
        $this->valor = $valor;
        $this->quantidade = $quantidade;
    }


    public function salvar(){
        if(!isset($_SESSION['Produto'])){
            $_SESSION['Produto'] = [];
        }

    
        $_SESSION ['Produto'][] = [
            'nome' => $this-> nome,
            'valor' => $this-> valor,
            'quantidade' => $this->quantidade
        ];
    }

    public static function listar(){
        //retorna a lista de produtos
        return $_SESSION['Produto'] ?? [];
    }

     public static function excluir($id){
             if(isset($_SESSION['produto'][$id])){ //verifica se o usuário existe
                unset ($_SESSION['produto'][$id]); //
            
       }
    }
}