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
                            <h5 class="text-primary fw-bolder mt-2">Dashboard do Professor</h5>
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
                                        <p class="text-secondary mb-0 pb-0" style="font-size: 12px">Meus Cursos</p>
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
                                        <p class="text-secondary mb-0 pb-0" style="font-size: 12px">Minhas Turmas</p>
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
                                        <p class="text-secondary mb-0 pb-0" style="font-size: 12px">Total de alunos</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 mb-3">
                            <div class="dashboard-card p-2  bg-light ">
                                <div class="d-flex justify-content-between">
                                    <h1 class="text-warning mt-2 pb-0 mb-0"><i class="bi bi-clipboard-check-fill"></i></h1>
                                    <div class="text-center pb-0">
                                        <h3 class="fw-bold mb-0 pb-0">15</h3>
                                        <p class="text-secondary mb-0 pb-0" style="font-size: 12px">Avaliações</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6 mb-3">
                            <div class="card p-2">
                                <div>
                                     <h6><i class="bi bi-calendar3"></i> Minhas Aulas Hoje</h6>
                                </div>
                                <div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card p-2">
                                
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex">
                                        <h6 class="me-1"><i class="bi bi-receptio"></i>Desempenho das turmas</h6>
                                    </div>
                                    <div class="d-flex justify-content-evenly">
                                        <p class="me-2 txt-rd"><i class="bi bi-record-fill text-success"></i>Aprovados</p>
                                        <p class="me-2 txt-rd"><i class="bi bi-record-fill text-primary"></i>Em curso</p>
                                        <p class="txt-rd"><i class="bi bi-record-fill text-danger"></i>Reprovados</p>
                                    </div>
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