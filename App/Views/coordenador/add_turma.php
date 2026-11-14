<?php 
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    require_once __DIR__ . '/../../Controller/CursoController.php';
    require_once __DIR__ . '/../../Model/DAO/CursoDao.php';
    require_once __DIR__ . '/../../Model/DAO/TurmaDao.php';
    require_once __DIR__ . '/../../Model/Curso.php';

    require_once __DIR__ . '/../../../Config/config.php';

    $cursoDao = new CursoDao();
    $cursocontroller= new CursoController($cursoDao);
    $cursos = $cursocontroller->index()
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

        <div class="section" style="">
            <?php include_once '../resource/header.php'?>
            <div class="container p-2 body">
                <div class="mt-2" style="overflow-y: auto; max-height: 500px;">
                    <div class="card shadow-sm">
                        <div class="card-header bg-dark text-white">
                            <h4 class="mb-0">Cadastrar Nova Turma </h4>
                        </div>
                        <div class="card-body">
                            <form action="../../CPU/CPU_Turma.php" method="POST" enctype="multipart/form-data" >
                                <div class="row mb-3">
                                    <div class="col-md-2 mb-2">
                                        <label class="form-label fw-bold">Código</label>
                                        <input type="text" name="codigo" class="form-control " disabled value="<?=TurmaDao::getCod()?>">
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <label class="form-label fw-bold">Turma*</label>
                                        <select name="nome" class="form-select" required>
                                            <option value="TM-A">TM-A</option>
                                            <option value="TM-B">TM-B</option>
                                            <option value="TM-C">TM-C</option>
                                            <option value="TM-D">TM-D</option>
                                            <option value="TM-E">TM-E</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label class="form-label fw-bold">Curso*</label>
                                        <select name="curso" class="form-select" required>
                                            <option value="">Selecionar Curso</option>
                                            <?php foreach( $cursos as $trim):?>
                                            <option value="<?= $trim['id_curso'] ?>"> <?= $trim['nome'] ?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label class="form-label fw-bold">Nível Acadêmico*</label>
                                        <select name="nivel" class="form-select" required>
                                            <option value="">Selecione Nível</option>
                                            <option value="1">1º ano</option>
                                            <option value="2">2º ano</option>
                                            <option value="3">3º ano</option>
                                            <option value="4">4º ano</option>
                                            <option value="5">5º ano</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label class="form-label fw-bold">Período*</label>
                                        <select name="periodo" class="form-select" required>
                                            <option value="">Selecione Período</option>
                                            <option value="Manhã">Manhã</option>
                                            <option value="Tarde">Tarde</option>
                                            <option value="Noite">Noite</option>
                                        </select>
                                    </div> 
                                    <div class="col-md-2 mb-2">
                                        <label class="form-label fw-bold">Limite de Estudantes</label>
                                        <input type="number" name="limite" class="form-control " min="20" max="80"  required>
                                    </div>                                   
                                </div>
                                
                                <div class="d-flex justify-content-end gap-2">
                                    <a href="turma.php" class="btn btn-sm btn-danger">Cancelar</a>
                                    <button type="submit" name="add-turma" class="btn btn-sm btn-success"> Cadastrar</button>
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