<?php

require_once "Controller/ProdutoController.php";

$ProdutoController = new ProdutoController();
$route = $_GET["route"] ?? '';

switch ($route) {
    case 'produto/TelaCadastro':
        $ProdutoController->TelaCadastro();
        break;

    case "produto/salvar":
        $ProdutoController->cadastrar();
        break;

        case "produto/listar":
            $ProdutoController->listarProdutos();
            break;
            
            case"produto/telaEditar":
                $ProdutoController->telaEditar();
                break;

               case "produto/atualizar":
                    $ProdutoController->atualizar();
                    break;


             case"produto/excluir":
                        $ProdutoController->excluir();
                        break;


        default:
            echo "Página não encontrada";
            break;
}