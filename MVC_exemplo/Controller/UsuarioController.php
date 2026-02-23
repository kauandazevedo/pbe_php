<?php
session_start(); // "banco de dados, onde iremos salvar a ifnformação"
require_once "./Model/UsuarioModel.php";

class UsuarioController {

    public function telaCadastro(){
        // echo "<pre>";
        // print_r($_SESSION);
        // echo "</pre>";
       require "View/usuarioCadastrar.php";
       
   }

   public function cadastrar(){
    $nome = $_POST['nome'];
    $email = $_POST ['email'];

    $usuario = new Usuario($nome, $email);
    $usuario->salvar();
    //Redirionar depois de salvar
    header('Location: /pbe_php/MVC_EXEMPLO/usuario/TelaCadastro');
    exit;
   }
   public function listarUsuarios(){
       $usuarios = Usuario::listar();
       echo "<pre>";
       print_r($usuarios);
       echo "</pre>";
       require 'View/usuarioListar.php';
   }
}