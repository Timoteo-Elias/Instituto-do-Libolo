<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    // 1. Primeiro as dependências de base de dados
    require_once __DIR__ . '/Config/config.php';
    require_once __DIR__ . '/App/Model/Dao/UsuarioDao.php'; 

    // 2. Depois os Controllers
    require_once __DIR__ . '/App/Controller/UsuarioController.php';
    require_once __DIR__ . '/App/Controller/LoginController.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn-login'])) {

        $loginController = new LoginController();

        $sucesso = $loginController->login(
            $_POST['email'] ?? '',
            $_POST['senha'] ?? ''
        );

        if ($sucesso) {
            if(htmlspecialchars($_SESSION['usuario_logged']['perfil'])=="admin"){
                header("Location: App/Views/adm/index.php");
                exit();
            }
            if(htmlspecialchars($_SESSION['usuario_logged']['perfil'])=="aluno"){
                header("Location: App/Views/aluno/index.php");
                exit();
            }
            if(htmlspecialchars($_SESSION['usuario_logged']['perfil'])=="contabilidade"){
                header("Location: App/Views/contabilidade/index.php");
                exit();
            }
            if(htmlspecialchars($_SESSION['usuario_logged']['perfil'])=="coordenador"){
                header("Location: App/Views/coordenador/index.php");
                exit();
            }
            if(htmlspecialchars($_SESSION['usuario_logged']['perfil'])=="professor"){
                header("Location: App/Views/professor/index.php");
                exit();
            }
            if(htmlspecialchars($_SESSION['usuario_logged']['perfil'])=="secretaria"){
                header("Location: App/Views/secretaria/index.php");
                exit();
            }
            else{
                header("Location: index.php");
                exit();
            }
            
        } else {
            header("Location: index.php");
            exit();
        }
    }