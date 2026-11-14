<?php

use Model\Funcionario;

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    require_once __DIR__ . '/../Controller/FaculdadeController.php';
    require_once __DIR__ . '/../Model/DAO/FaculdadeDao.php';
    require_once __DIR__ . '/../Model/Faculdade.php';

    require_once __DIR__ . '/../../Config/config.php';

    $faculdadeDao = new FaculdadeDao();
    $faculdadecontroller= new FaculdadeController($faculdadeDao);

    if (isset($_POST['add-faculdade'])) {
        $salvou = $faculdadecontroller->insert(
            trim($_POST['codigo'] ?? ''),
            trim($_POST['faculdade'] ?? ''),
            trim((int)$_POST['decano'] ?? ''),
            trim((int)$_POST['vice_decano_academica'] ?? ''),
            trim((int)$_POST['vice_decano_cientifica'] ?? ''),
            trim($_POST['data_de_abertura'] ?? '')
        );

        if ($salvou) {
            $_SESSION['sucesso'] = "Faculdade cadastrada com sucesso!";
        } else {
            if(empty($_SESSION['erro'])) {
                $_SESSION['erro'] = "Não foi possível salvar a Faculdade. Verifique os dados digitados.";
            }
        }
        header("Location: ../Views/adm/faculdade.php");
        exit();
    }

    if(isset($_GET['id']) && $_GET['id'] !== ''){
        $faculdadecontroller->delete($_GET['id']);

       $_SESSION['delete'] = "O registo da Faculdade foi Eliminado com sucesso.";
        header("location:../Views/adm/faculdade.php");
        exit;
    }
  

