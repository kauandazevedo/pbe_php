<?php

require_once "./database/DataBase.php";


Class Livro{
    private $titulo;
    private $autor;
    private $anopublicacao;
    private $editora;

    public function __construct($titulo, $autor, $anopublicacao, $editora){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anopulicacao = $anopublicacao;
        $this->editora = $editora;
    }
        
    public function salvar(){
      $pdo = Database::conectar();
      $sql = "INSERT INTO livros (titulo, autor, anopublicacao, editora) VALUES (:titulo, :autor, :anopublicacao, :editora)";
      $stmt = $pdo->prepare($sql);
      $stmt->execute(['titulo' =>$this->titulo, 'autor' =>$this->autor, 'anopublicacao' =>$this->anopublicacao, 'editora' =>$this->editora]);
        }

        public static function listar(){
            $pdo= Database::conectar();
            $stmt = $pdo->query("SELECT * FROM livros");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public static function buscar($id){
            $pdo = Database::conectar();
            $stmt = $pdo->prepare("SELECT * FROM livros WHERE id = :id");
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        public static function atualizar($id){
            $pdo = Database::conectar();
            $stmt = $pdo->prepare("UPDATE livros SET titulo = :titulo, autor = :autor, anopublicacao = :anopublicacao, editora = :editora WHERE id = :id ");
            $stmt->execute(['id' => $id, 'titulo' => $this->titulo, 'autor' => $this->autor, 'anopublicacao' => $this->anopublicacao, 'editora' => $this->editora ]);
        }

        public static function excluir($id){
            $pdo = Database::conectar();
            $stmt = $pd->prepare("DELETE FROM livros WHERE id = :id");
            $stmt->execute(['id' => $id]);
        }
}