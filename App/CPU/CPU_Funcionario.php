<?php

use Model\Funcionario;

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    require_once __DIR__ . '/../Controller/FuncionarioController.php';
    require_once __DIR__ . '/../Model/DAO/FuncionarioDao.php';
    require_once __DIR__ . '/../Model/Funcionario.php';

    require_once __DIR__ . '/../../Config/config.php';

    $funcionarioDao = new FuncionarioDao();
    $funcionariocontroller= new FuncionarioController($funcionarioDao);

    $usuario = $_POST['usuario'] ?? null;
    if (empty($usuario) || strtolower($usuario) == 'null' || $usuario == '0'){
        $usuario_id = null;
    }
    else{
        $usuario_id = (int) $usuario;
    }
    if (isset($_POST['nome'])) {
        $salvou = $funcionariocontroller->insert(
            trim($_POST['nome'] ?? ''),
            trim($_POST['codigo'] ?? ''),
            trim($_POST['nif'] ?? ''),
            trim($_POST['genero'] ?? ''),
            trim($_POST['data_nascimento'] ?? ''),
            trim($_POST['formacao'] ?? ''),
            trim($_POST['nivel_formacao'] ?? ''),
            trim($_POST['funcao'] ?? ''),
            trim($_POST['email'] ?? ''),
            trim($_POST['telefone'] ?? ''),         
            $usuario_id        
        );



        if ($salvou) {
            $_SESSION['sucesso'] = "Funcionário cadastrado com sucesso!";
        } else {
            if(empty($_SESSION['erro'])) {
                $_SESSION['erro'] = "Não foi possível salvar o Funcionário. Verifique os dados digitados.";
            }
        }
        header("Location: ../Views/adm/funcionario.php");
        exit();
    }

    if(isset($_GET['id']) && $_GET['id'] !== ''){
        $funcionariocontroller->delete($_GET['id']);

       $_SESSION['delete'] = "O registo do Funcionário foi Eliminado com sucesso.";
        header("location:../Views/adm/funcionario.php");
        exit;
    }
  

