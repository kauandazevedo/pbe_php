<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Cadastro</title>
</head>
<body>
    <a href= "listar">ir para tela cadastrar</a>
    <form method="POST" action="salvar">
        <input type= "text" name="nome" placeholder= "nome do produto" require>
        <input type= "number" name="valor" placeholder= "valor do produto" require>
        <input type= "number" name="quantidade" placeholder= "Quantidade do produto" require>
        <button type= "submit">Enviar</button>
        </form>  
    </body>
</html>