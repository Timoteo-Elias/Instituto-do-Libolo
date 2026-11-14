<?php

use Model\Curso;

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    require_once __DIR__ . '/../Controller/CursoController.php';
    require_once __DIR__ . '/../Model/DAO/CursoDao.php';
    require_once __DIR__ . '/../Model/Curso.php';

    require_once __DIR__ . '/../../Config/config.php';

    $cursoDao = new CursoDao();
    $cursocontroller= new CursoController($cursoDao);

    if (isset($_POST['add-curso'])) {
        $salvou = $cursocontroller->insert(
            trim($_POST['codigo'] ?? ''),
            trim($_POST['nome'] ?? ''),
            trim((int)$_POST['coordenador'] ?? ''),
            trim($_POST['duracao'] ?? '')
        );

        if ($salvou) {
            $_SESSION['sucesso'] = "Curso cadastrado com sucesso!";
        } else {
            if(empty($_SESSION['erro'])) {
                $_SESSION['erro'] = "Não foi possível salvar o Curso. Verifique os dados digitados.";
            }
        }
        header("Location: ../Views/coordenador/curso.php");
        exit();
    }

    if(isset($_GET['id']) && $_GET['id'] !== ''){
        $cursocontroller->delete($_GET['id']);

       $_SESSION['delete'] = "O registo do Curso foi Eliminado com sucesso.";
        header("location:../Views/coordenador/curso.php");
        exit;
    }
  

