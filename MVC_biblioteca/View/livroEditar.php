<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Editar</title>
</head>
<body>
    <h2>Editar Usuário</h2>
    <a href= "listar">Ir para tela cadastrar</a>
    <form method="POST" action="atualizar?id=<?= $_GET['id'] ?>">
    <input type="text" name ="id" value="<?=htmlspecialchars($_GET['id'])?>" disabled>
     <input type= "text" name="titulo" value="<?=htmlspecialchars($_GET['titulo'])?>" require>
        <input type= "text" name="autor" value="<?=htmlspecialchars($_GET['autor'])?>" require>
        <input type= "number" name="anopublicacao" value="<?=htmlspecialchars($_GET['anopublicacao'])?>" require>
        <input type= "text" name="editora" value="<?=htmlspecialchars($_GET['editora'])?>" require>
        <button type= "submit">Editar</button>
        </form>
   </body>
</html>