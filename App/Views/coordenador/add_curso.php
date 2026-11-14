<?php 
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    require_once __DIR__ . '/../../Controller/FuncionarioController.php';
    require_once __DIR__ . '/../../Model/DAO/FuncionarioDao.php';
    require_once __DIR__ . '/../../Model/DAO/FaculdadeDao.php';

    require_once __DIR__ . '/../../Model/DAO/CursoDao.php';


    $funcionarioDao = new FuncionarioDao(); 
    $funcionarioController = new funcionarioController($funcionarioDao );
    $funcionarios = $funcionarioController->index();

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
    <title>Cadastro do Curso</title>
</head>
<body>
    <section class="wrapper">
        <?php include_once '../resource/sidebar.php' ?>

        <div class="section" style="">
            <?php include_once '../resource/header.php'?>
            <div class="container p-2 body">
                <div class="mt-2" style="overflow-y: auto; max-height: 500px;">
                    <div class="card shadow-sm">
                        <div class="card-header bg-dark text-white">
                            <h4 class="mb-0">Cadastrar Novo Curso </h4>
                        </div>
                        <div class="card-body">
                            <form action="../../CPU/CPU_Curso.php" method="POST" enctype="multipart/form-data" >
                                <div class="row mb-3">
                                    <div class="col-md-2 mb-2">
                                        <label class="form-label fw-bold">Código</label>
                                        <input type="text" name="codigo" class="form-control" disabled value="<?=CursoDao::getCod()?>">
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label class="form-label fw-bold">Curso *</label>
                                        <input type="text" name="nome" class="form-control" placeholder="Ex: Contabilidade!" required>
                                    </div>
                                    
                                    <div class="col-md-4 mb-2">
                                        <label class="form-label fw-bold">Duração da formação*</label>
                                        <select name="duracao" class="form-select" required>
                                            <option value="">Selecione a duração do curso</option>
                                            <option value="4">4 anos</option>
                                            <option value="5">5 anos</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 mb-2">
                                        <label class="form-label fw-bold">Cordenador *</label>
                                         <select name="coordenador" class="form-select" required>
                                            <option value="">Selecione o cordenador do curso</option>
                                            <?php foreach($funcionarios as $trim):?>
                                            <option value="<?= $trim['id_funcionario'] ?>"><?= $trim['nome'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    
                                </div>
                                
                                <div class="d-flex justify-content-end gap-2">
                                    <a href="curso.php" class="btn btn-sm btn-danger">Cancelar</a>
                                    <button type="submit" name="add-curso" class="btn btn-sm btn-success"> Cadastrar</button>
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