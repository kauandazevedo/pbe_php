<?php

require_once "Controller/LivroController.php";

$LivroController = new LivroController();
$route = $_GET["route"]  ?? '';


switch ($route){
    case 'livro/telaCadastro';
    $LivroController->telaCadastro();
    break;

    case "livro/salvar":
        $LivroController->Cadastrar();
        break;

        case "livro/listar":
            $LivroController->listarLivros();
            break;

            case "livro/telaEditar":
                $LivroController->telaEditar();
                break;

                case "livro/autualizar":
                    $LivroController->atualizar();
                    break;

                    case "livro/excluir":
                        $LivroController->excluir();
                        break;

                        default:
                        echo"Página não encontrada!";
                        break;
}