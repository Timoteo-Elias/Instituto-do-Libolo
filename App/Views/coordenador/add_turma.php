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
                            <h4 class="mb-0">Cadastrar Nova Turma </h4>
                        </div>
                        <div class="card-body">
                            <form action="../../CPU/CPU_User.php" method="POST" enctype="multipart/form-data" >
                                <div class="row mb-3">
                                    <div class="col-md-2 mb-2">
                                        <label class="form-label fw-bold">Código</label>
                                        <input type="text" name="codigo" class="form-control " placeholder="TM-001" readonly>
                                    </div>
                                    <div class="col-md-2 mb-2">
                                        <label class="form-label fw-bold">Turma*</label>
                                        <select name="turma" class="form-select" required>
                                            <option value="TM-A">TM-A</option>
                                            <option value="TM-B">TM-B</option>
                                            <option value="TM-C">TM-C</option>
                                            <option value="TM-D">TM-D</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label class="form-label fw-bold">Curso*</label>
                                        <select name="curso" class="form-select" required>
                                            <option value="">Selecionar Curso</option>
                                            <option value="TM-A">TM-A</option>
                                            <option value="TM-B">TM-B</option>
                                            <option value="TM-C">TM-C</option>
                                            <option value="TM-D">TM-D</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label class="form-label fw-bold">Nível Acadêmico*</label>
                                        <select name="perfil" class="form-select" required>
                                            <option value="">Selecione Nível</option>
                                            <option value="1 anos">1 anos</option>
                                            <option value="2 anos">2 anos</option>
                                            <option value="3 anos">3 anos</option>
                                            <option value="4 anos">4 anos</option>
                                            <option value="5 anos">5 anos</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label class="form-label fw-bold">Período*</label>
                                        <select name="perfil" class="form-select" required>
                                            <option value="">Selecione Período</option>
                                            <option value="Manhã">Manhã</option>
                                            <option value="Tarde">Tarde</option>
                                            <option value="Noite">Noite</option>
                                        </select>
                                    </div> 
                                    <div class="col-md-2 mb-2">
                                        <label class="form-label fw-bold">Limite de Estudantes</label>
                                        <input type="number" name="limite" class="form-control " min="20" max="80" oninput=" if(this.value < 20  )this.value = 20;"  required>
                                    </div>                                   
                                </div>
                                
                                <div class="d-flex justify-content-end gap-2">
                                    <a href="turma.php" class="btn btn-sm btn-danger">Cancelar</a>
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