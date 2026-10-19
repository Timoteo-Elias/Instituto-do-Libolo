<?php
    include_once(__DIR__ . '/../resource/auth.php');
    
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
    <link rel="stylesheet" href="../../../Public/CSS/styl.css">
    <link rel="stylesheet" href="../../../Public/JS/action.js">
    <title>Document</title>
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
                            <h5 class="text-primary fw-bolder mt-2">Painel do Estudante</h5>
                        </div>
                    </div>
                    
                </div>
                
                <div class="mt-4">
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <div class="dashboard-card p-2  bg-light ">
                                <div class="d-flex justify-content-between">
                                    <h1 class="text-primary mt-2 pb-0 mb-0"><i class="bi bi-mortarboard-fill"></i></h1>
                                    <div class="text-center pb-0">
                                        <h3 class="fw-bold mb-0 pb-0">15</h3>
                                        <p class="text-secondary mb-0 pb-0" style="font-size: 12px">Minhas Disciplinas</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 mb-3">
                            <div class="dashboard-card p-2 bg-light">
                                <div class="d-flex justify-content-between">
                                    <h1 class="text-primary mt-2 pb-0 mb-0"><i class="bi bi-person-fill"></i></h1>
                                    <div class="text-center pb-0">
                                        <h3 class="fw-bold mb-0 pb-0">15</h3>
                                        <p class="text-secondary mb-0 pb-0" style="font-size: 12px">Avaliações Realizadas</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 mb-3">
                            <div class="dashboard-card p-2  bg-light">
                                <div class="d-flex justify-content-between">
                                    <h1 class="text-danger mt-2 pb-0 mb-0"><i class="bi bi-file-pdf-fill"></i></h1>
                                    <div class="text-center pb-0">
                                        <h3 class="fw-bold mb-0 pb-0">15</h3>
                                        <p class="text-secondary mb-0 pb-0" style="font-size: 12px">Avaliações Pendentes</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 mb-3">
                            <div class="dashboard-card p-2  bg-light ">
                                <div class="d-flex justify-content-between">
                                    <h1 class="text-warning mt-2 pb-0 mb-0"><i class="bi bi-calendar3"></i></h1>
                                    <div class="text-center pb-0">
                                        <h3 class="fw-bold mb-0 pb-0">15</h3>
                                        <p class="text-secondary mb-0 pb-0" style="font-size: 12px">Faltas</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6 mb-3">
                            <div class="card p-2">
                                <div class="text-primary">
                                    <h6>Meu processo Acadêmico</h6>
                                </div>
                                <div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card p-2">
                                <div class="d-flex justify-content-between text-primary">
                                    <h6><i class="bi bi-people-fill "></i> Próximas Atividades</h6>
                                    <a class="btn btn-outline-primary btn-sm border-0" style="font-size:10px" href="#">Ver Todos</a>
                                </div>
                                <div>

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