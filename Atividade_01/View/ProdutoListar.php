<!-- TELA ProdutoListar.php -->
 <!DOCTYPE html>
 <html lang="pt-BR">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
 </head>
 <body>
    <h2>Produtos</h2>
    <table border="1">
    <tr> 
   <th>Nome</th>
   <th>Quantidade</th>
   <th>Valor</th>
    </tr>
    <?php foreach($produto as $u): ?>
    <tr>
        <td><?= $u['nome']?></td>
        <td><?= $u['valor']?></td>
        <td><?= $u['quantidade']?></td>
    </tr>
     <a href="/pbe_php/Atividade_01/produto/listar?id=<?= $id ?>">
                Editar

    </a>
     <a href="/pbe_php/Atividade_01/produto/listar?id=<?= $id ?>">
                Excluir
    </a>
        <?php endforeach; ?>
       </table>
   </body>
 </html>