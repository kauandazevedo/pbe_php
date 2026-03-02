<?php
session_start(); // "banco de dados, onde iremos salvar a ifnformação"
require_once "./Model/ProdutoModel.php";

class ProdutoController {

    public function telaCadastro(){
        // echo "<pre>";
        // print_r($_SESSION);
        // echo "</pre>";
       require "View/produtoCadastrar.php";
       
   }

   public function cadastrar(){
    $nome = $_POST['nome'];
    $quantidade = $_POST ['quantidade'];
     $valor = $_POST ['valor'];

    $produto = new Produto($nome, $quantidade, $valor);
    $produto->salvar();
    //Redirionar depois de salvar
    header('Location: /pbe_php/Atividade_01/produto/TelaCadastro');
    exit;
   }
   public function listarProdutos(){
       $produto = Produto::listar();
       echo "<pre>";
       print_r($produto);
       echo "</pre>";
       require 'View/produtoListar.php';
   }

   public function telaEditar(){
    $produto = Produto::buscar($_GET['id']);//o GET deixa salvo as informações na URL
    require 'View/produtoEditar.php';
   }

   public function atualizar(){
    $produto = new Usuario($_POST['nome'], $_POST['email']);
    $produto->atualizar($_GET['id']);
    header('Location: /pbe_php/Atividade_01/produto/telaEditar?id=' .($_GET['id']));
    exit;
   }

   public function excluir(){
    Produto::excluir($_GET['id']);
    header('Location: /pbe_php/Atividade_01/produto/listar ');
    exit;
   }
}