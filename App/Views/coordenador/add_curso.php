<?php 
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

        <div class="section" style="">
            <?php include_once '../resource/header.php'?>
            <div class="container p-2 body">
                <div class="mt-2" style="overflow-y: auto; max-height: 500px;">
                    <div class="card shadow-sm">
                        <div class="card-header bg-dark text-white">
                            <h4 class="mb-0">Cadastrar Nova Faculdade </h4>
                        </div>
                        <div class="card-body">
                            <form action="../../CPU/CPU_User.php" method="POST" enctype="multipart/form-data" >
                                <div class="row mb-3">
                                    <div class="col-md-2 mb-2">
                                        <label class="form-label fw-bold">Código</label>
                                        <input type="text" name="codigo" class="form-control " placeholder="FD-001" disabled>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label class="form-label fw-bold">Curso *</label>
                                        <input type="text" name="curso" class="form-control" placeholder="Ex: Contabilidadena frenquanla!" required>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label class="form-label fw-bold">Duração da formação*</label>
                                        <input type="text" name="curso" class="form-control" placeholder="Ex: Contabilidadena frenquanla!" required>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label class="form-label fw-bold">Data de Abertura*</label>
                                        <input type="text" name="curso" class="form-control" placeholder="Ex: Contabilidadena frenquanla!" required>
                                    </div>
                                    
                                </div>
                                
                                <div class="d-flex justify-content-end gap-2">
                                    <a href="curso.php" class="btn btn-sm btn-danger">Cancelar</a>
                                    <button type="submit" name="add-user" class="btn btn-sm btn-success"> Cadastrar</button>
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