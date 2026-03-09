<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
</head>
<body>
    <a href= "/pbe_php/MVC_biblioteca/livro/telaCadastro">Ir para tela cadastrar</a>
    <h2>Usuários</h2>
    <table border="1">
    <tr>
        <th>titulo</th>
        <th>Autor</th>
        <th>Ano de publicação</th>
        <th>Editora</th>
</tr>
 <?php foreach($livros as $id => $l): ?>
    <tr>
        <td><?= $l['TITULO']?></td>
        <td><?= $l['AUTOR']?></td>
        <td><?= $l['ANO DE PUBLICAÇÃO']?></td>
        <td><?= $l['EDITORA']?></td>
        <td>
            <a href="/pbe_php/MVC_biblioteca/livro/telaEditar?id=<?= $l['ID'] ?>">
                Editar
            </a>
            <a href="/pbe_php/MVC_biblioteca/livro/excluir?id=<?= $l['ID'] ?>">
                Excluir
            </a>
       </td>
    </tr>
    <?php endforeach; ?>
   </table>
</body>
</html>