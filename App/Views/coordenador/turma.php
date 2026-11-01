<?php
    include_once(__DIR__ . '/../resource/auth.php');
    
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Public/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../../../Public/bootstrap-icons/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../../../Public/CSS/style.css">
    <link rel="stylesheet" href="../../../Public/JS/action.js">
    <title>Turmas</title>
</head>
<body>
    <section class="wrapper">
        <?php include_once '../resource/sidebar.php' ?>

        <div class="section" style="">
            <?php include_once '../resource/header.php'?>
            <div class="container p-4 body">
                <div class="rounded shadow p-2 card-adm" style="background:azure;">
                    <div class="d-flex">
                        <div>
                            <h1 class="text-danger  me-3"><i class="bi bi-mortarboard-fill"></i></h1>
                        </div>
                        <div>
                            <h5 class="text-primary fw-bolder mt-2">Coordenação de Cursos</h5>
                            <small class="mt-0 pt-0 text-secondary" style="font-size:12px"><?php echo isset($_SESSION['usuario_logged']['nome']) ? htmlspecialchars($_SESSION['usuario_logged']['nome']) : 'Not Found'; ?></small>
                        </div>
                    </div>
                    
                </div>
                <div class="mt-4">
                    <div class="row">
                        <div class="col-sm-12 col-md-4 col-lg-3 mb-3">
                            <h4 class="text-primary">Nossas Turmas</h4>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
                            <form action="" method="POST" class="w-100">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Buscar Curso pelo Codigo" >
                                    <button class="btn btn-sm btn-primary" type="submit"><i class="bi bi-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3 text-end mb-3">
                            <a href="add_turma.php" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Adicionar</a>
                            <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-printer-fill"></i> Imprimir</button>
                        </div>
                    </div>
                </div>
        
                <div class="table-responsive mt-2">
                    <table class="table align-middle table-sm table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>Codigo</th>
                                <th>Turma</th>
                                <th>Curso</th>
                                <th>Nível</th>
                                <th>Período</th>
                                <th>Limite</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody >
                            <tr class="fs-6">
                                <td>TM-001</td>
                                <td>TM-A</td> 
                                <td>Direiro</td>
                                <td>5 anos</td> 
                                <td>Tarde</td> 
                                <td><span class="text-primary">60</span> Estudantes</td>  
                                <td>
                                    <button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></button>
                                    <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
               
            </div>
        </div>

        <?php include_once '../resource/mobile.php' ?>
    </section>
</body>
</html>