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
    <title>Secretaria Geral</title>
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
                            <h5 class="text-primary fw-bolder mt-2">Bem Vindo, Secretário/a</h5>
                            <small class="mt-0 pt-0 text-secondary" style="font-size:12px"><?php echo isset($_SESSION['usuario_logged']['nome']) ? htmlspecialchars($_SESSION['usuario_logged']['nome']) : 'Not Found'; ?></small>
                        </div>
                    </div>
                    
                </div>
                <div class="mt-4">
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <div class="dashboard-card p-2  bg-light ">
                                <div class="d-flex justify-content-between">
                                    <h1 class="text-success mt-2 pb-0 mb-0"><i class="bi bi-people-fill"></i></h1>
                                    <div class="text-center pb-0">
                                        <h3 class="fw-bold mb-0 pb-0">15</h3>
                                        <p class="text-secondary mb-0 pb-0" style="font-size: 12px">Total de Estudantes</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 mb-3">
                            <div class="dashboard-card p-2 bg-light">
                                <div class="d-flex justify-content-between">
                                    <h1 class="text-primary mt-2 pb-0 mb-0"><i class="bi bi-file-earmark-text-fill"></i></h1>
                                    <div class="text-center pb-0">
                                        <h3 class="fw-bold mb-0 pb-0">15</h3>
                                        <p class="text-secondary mb-0 pb-0" style="font-size: 12px">Matrículas no Período</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 mb-3">
                            <div class="dashboard-card p-2  bg-light">
                                <div class="d-flex justify-content-between">
                                    <h1 class="text-warning mt-2 pb-0 mb-0"><i class="bi bi-file-earmark-word-fill"></i></h1>
                                    <div class="text-center pb-0">
                                        <h3 class="fw-bold mb-0 pb-0">15</h3>
                                        <p class="text-secondary mb-0 pb-0" style="font-size: 12px">Requerimentos Pendentes</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 mb-3">
                            <div class="dashboard-card p-2  bg-light ">
                                <div class="d-flex justify-content-between">
                                    <h1 class="text-primary mt-2 pb-0 mb-0"><i class="bi bi-file-earmark-pdf-fill"></i></h1>
                                    <div class="text-center pb-0">
                                        <h3 class="fw-bold mb-0 pb-0">15</h3>
                                        <p class="text-secondary mb-0 pb-0" style="font-size: 12px">Documentos Emitidos</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <div class="card p-2 mt-3 w-100" style="background:azure;">
                        <div>
                            <h6 class="card-title fw-bold">Ações Rápidas</h6>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-lg-3">
                                <a class="btn btn-sm btn-outline-success" href=""><i class="bi bi-person-plus-fill"></i> Cadastrar Estudante</a>
                            </div>
                            <div class="col-md-3 col-lg-3">
                                <a class="btn btn-sm btn-outline-primary" href=""><i class="bi bi-file-earmark-text-fill"></i> Nova Matrícula</a>
                            </div>
                            <div class="col-md-3 col-lg-3">
                                <a class="btn btn-sm btn-outline-warning" href=""><i class="bi bi-file-earmark-word-fill"></i> Tratar Requerimento</a>
                            </div>
                            <div class="col-md-3 col-lg-3">
                                <a class="btn btn-sm btn-outline-info" href=""><i class="bi bi-search"></i> Consultar Estudante</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mt-3">
                        <div class="col-md-6 mb-3">
                            <div class="card p-2">
                                <div>
                                    <h6 class="card-title fw-bold">Movimentação de Matrículas</h6>
                                </div>
                                <div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card p-2">
                                <div>
                                    <h6 class="card-title fw-bold">Ultimos Processos</h6>
                                </div>
                                <div class="table-responsive ">
                                    <table class="table table-striped">
                                        <thead class="text-primary" style="background:azure;">
                                            <tr>
                                                <th>Tipo</th>
                                                <th>Descrição</th>
                                                <th>Estudante</th>
                                                <th>Data</th>
                                                <th>Estado</th>
                                            </tr>
                                        </thead>
                                        <tbody >
                                            <tr class="text-secondary">
                                                <td>Requerimento</td>
                                                <td>Declaração de frequência</td>
                                                <td>João Domingos</td>
                                                <td>12-03-2026</td> 
                                                <td>Em análise</td> 
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include_once '../resource/mobile.php' ?>
    </section>
</body>
</html>