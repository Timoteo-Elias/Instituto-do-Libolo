<?php

    require_once __DIR__ . '/../../Controller/FuncionarioController.php';
    require_once __DIR__ . '/../../Model/DAO/FuncionarioDao.php';
    require_once __DIR__ . '/../../Model/DAO/FaculdadeDao.php';

    $funcionarioDao = new FuncionarioDao(); 
    $funcionarioController = new funcionarioController($funcionarioDao );
    $funcionarios = $funcionarioController->index();

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Public/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../../../Public/bootstrap-icons/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../../../Public/CSS/style.css">
    <link rel="stylesheet" href="../../../Public/JS/action.js">
    <title>Cadastro de Funcionário</title>
</head>
<body>
    <section class="wrapper">
        <?php include_once '../resource/sidebar.php' ?>

        <div class="section">
            <?php include_once '../resource/header.php'?>
            <div class="container p-2 body">
                <div class="mt-2" style="overflow-y: auto; max-height: 500px;">
                    <div class="card shadow-sm">
                        <div class="card-header bg-dark text-white">
                            <h4 class="mb-0">Cadastrar Nova Faculdade </h4>
                        </div>
                        <div class="card-body">
                            <form action="../../CPU/CPU_Faculdade.php" method="POST" enctype="multipart/form-data" >
                                <div class="row mb-3">
                                    <div class="col-md-2 mb-2">
                                        <label class="form-label fw-bold">Código</label>
                                        <input type="text" name="codigo" class="form-control " value="<?= FaculdadeDao::getCod() ?>"disabled>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label class="form-label fw-bold">Faculdade *</label>
                                        <input type="text" name="faculdade" class="form-control" placeholder="Ex: Faculdade de direito" required>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label class="form-label fw-bold">Decâno *</label>
                                        <select name="decano" class="form-select" required>
                                            <option value="">Selecione Decâno</option>
                                            <?php foreach($funcionarios as $trim):?>
                                            <option value="<?= $trim['id_funcionario'] ?>"><?= $trim['nome'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label class="form-label fw-bold">Vice Decâno para Área Acadêmica *</label>
                                        <select name="vice_decano_academica" class="form-select" required>
                                            <option value="">Selecione Vice-Decâno</option>
                                            <?php foreach($funcionarios as $trim):?>
                                            <option value="<?= $trim['id_funcionario'] ?>"><?= $trim['nome'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label class="form-label fw-bold">Vice Decâno para Área Científica *</label>
                                        <select name="vice_decano_cientifica" class="form-select" required>
                                            <option value="">Selecione Vice-Decâno</option>
                                            <?php foreach($funcionarios as $trim):?>
                                            <option value="<?= $trim['id_funcionario'] ?>"><?= $trim['nome'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label class="form-label fw-bold">Data de Abertura *</label>
                                        <input type="date" name="data_de_abertura" class="form-control"  required>
                                    </div>
                                </div>
                                
                                <div class="d-flex justify-content-end gap-2">
                                    <a href="faculdade.php" class="btn btn-sm btn-danger">Cancelar</a>
                                    <button type="submit" name="add-faculdade" class="btn btn-sm btn-success"> Cadastrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include_once '../resource/mobile.php' ?>
    </section>
</body>
</html>