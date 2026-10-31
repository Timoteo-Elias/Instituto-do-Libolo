<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    require_once __DIR__ . '/../Controller/UsuarioController.php';
    require_once __DIR__ . '/../Model/DAO/UsuarioDAO.php';
    require_once __DIR__ . '/../Model/Usuario.php';

    require_once __DIR__ . '/../../Config/config.php';

    $usuarioDao = new UsuarioDao();
    $usuariocontroller= new UsuarioController($usuarioDao);

    if (isset($_POST['usuario'])) {

        $salvou = $usuariocontroller->insert(
            trim($_POST['usuario'] ?? ''),
            trim($_POST['email'] ?? ''),
            trim($_POST['perfil'] ?? ''),
            trim($_POST['senha'] ?? '')
            
        );

        if ($salvou) {
            $_SESSION['sucesso'] = "Usuário cadastrado com sucesso!";
        } else {
            if(empty($_SESSION['erro'])) {
                $_SESSION['erro'] = "Não foi possível salvar o usuário. Verifique os dados digitados.";
            }
        }
        header("Location: ../Views/adm/user.php");
        exit();
    }

    if(isset($_GET['id']) && $_GET['id'] !== ''){
        $usuariocontroller->Delete($_GET['id']);

       $_SESSION['delete'] = "O registo do Usuario foi Eliminado com sucesso.";
        header("location:../Views/adm/user.php");
        exit;
    }
  

