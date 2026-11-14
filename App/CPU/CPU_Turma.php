<?php

use Model\Turma;

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    require_once __DIR__ . '/../Controller/TurmaController.php';
    require_once __DIR__ . '/../Model/DAO/TurmaDao.php';
    require_once __DIR__ . '/../Model/Turma.php';

    require_once __DIR__ . '/../../Config/config.php';

    $turmaDao = new TurmaDao();
    $turmacontroller= new TurmaController($turmaDao);

    if (isset($_POST['add-turma'])) {
        $salvou = $turmacontroller->insert(
            trim($_POST['nome'] ?? ''),
            trim($_POST['codigo'] ?? ''),
            trim($_POST['periodo'] ?? ''),
            trim((int)$_POST['nivel'] ?? ''),
            trim((int)$_POST['curso'] ?? ''),
            trim((int)$_POST['limite'] ?? '')
        );

        if ($salvou) {
            $_SESSION['sucesso'] = "Turma cadastrada com sucesso!";
        } else {
            if(empty($_SESSION['erro'])) {
                $_SESSION['erro'] = "Não foi possível salvar a Turma. Verifique os dados digitados.";
            }
        }
        header("Location: ../Views/coordenador/turma.php");
        exit();
    }

    if(isset($_GET['id']) && $_GET['id'] !== ''){
        $turmacontroller->delete($_GET['id']);

       $_SESSION['delete'] = "O registo da turma foi Eliminado com sucesso.";
        header("location:../Views/coordenador/turma.php");
        exit;
    }
  

