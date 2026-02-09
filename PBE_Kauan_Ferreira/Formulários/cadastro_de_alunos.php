<?php
    session_start();
    $totalNotas = 0;
    $cont = 0;

   class Aluno{
      private $nome;
      private $sobrenome;
      private $nota;
      private $datadenascimento;

    // criou o objeto aluno
    public function __construct ($nome, $sobrenome, $nota, $datadenascimento){
        $this-> nome = $nome;
        $this-> sobrenome = $sobrenome;
        $this-> nota = $nota;
        $this-> datadenascimento = $datadenascimento;
      }
     
      public function salvar(){
        // criar o array se ainda nao existir
        if(!isset($_SESSION['alunos'])){
          $_SESSION['alunos'] = [];
        }


      $_SESSION['alunos'][] =[
      'nome' => $this->nome,
      'sobrenome' => $this->sobrenome,
      'nota' => $this->nota,
      'datadenascimento' => $this->datadenascimento

      ];


      }
   }


  if($_SERVER ["REQUEST_METHOD"] == "POST"){
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $nota = $_POST['nota'];
    $datadenascimento = $_POST['datadenascimento'];

    $usuario = new Aluno($nome,$sobrenome, $nota, $datadenascimento);
    $usuario->salvar();
  }

 if (isset($_POST['calcular'])) {
        $n1 = $_POST['nota1'];
        $n2 = $_POST['nota2'];
        $n3 = $_POST['nota3'];

        $media = ($n1 + $n2 + $n3) / 3;

        // Exibe o resultado com 2 casas decimais
        echo "<h3>Média Final: " . number_format($media, 2) . "</h3>";
  }

?> 

<!DOCTYPE html>
<html lang= "pt-BR">  
  <head>
     <meta charset="UTF-08">
     <title>Formulário</title>
</head>
<body>
    <h2> </h2>
</body>
      <h2 style="color:darkblue; font-family:Arial"> Cadastro de Alunos</h2> <form action= "" method="POST" style="background:#f2f2f2; padding: 15px 
      border-radius: 8px; width: 300px">
      Nome: <br>
      <input type= "text" name="nome" value="" style= "width:100%;
        margin-bottom:10px"><br>
      Sobrenome: <br>
      <input type="name" name="email" value= "" style=width:100%
        margin-bottom:10px><br>
      Nota: <br>
       <input type="number" name="nota" value= "" style=width:100%;
        margin-bottom:10px><br>
 <form method="POST" action="doc.php">
   Data de Nascimento: <input type="date" id="data" name="data">
</form>
     <button type="submit" style="background": green;
     color: white; padding: 5px 10px; >Cadastrar</button>
     <button type="submit" style="background": red;
     color white; padding: 5px 10px;>Limpar</button>
</form>
<?php if (isset($_SESSION ['alunos'])): ?>
<table border= "1">
  <thead>
   <tr>
    <th>Nome</th>
    <th>Sobrenome</th>
    <th>Nota</th>
    <th>Data de nascimento</th>
</tr>
</thead>
<tbody>
     <td>Kauan</td>
     <td>Ferreira</td>
     <td>7</td>
     <td>11/03/2009</td>
        </tr>
    </tbody>
    <?php foreach($_SESSION["alunos"] as $nome): ?>
    <tr>
        <td><?= $usuario['nome'] ?></td>
        <td><?= $sobrenome['Sobrenome'] ?></td>
        <td><?= $nota['nota'] ?></td>
        <td>Ferreira</td>
        <td>7</td>
    </tr>
    <?php endforeach; ?>
  </table>
   <?php endif; ?>
 </body>
 </html>