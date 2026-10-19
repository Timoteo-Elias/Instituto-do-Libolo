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
    <link rel="stylesheet" href="../../../Public/CSS/style.css">
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
                            <h5 class="text-primary fw-bolder mt-2 mb-0 pb-0">Departamento de Contabilidade</h5>
                            <small class="mt-0 pt-0 text-secondary" style="font-size:12px"><?php echo isset($_SESSION['usuario_logged']['nome']) ? htmlspecialchars($_SESSION['usuario_logged']['nome']) : 'Not Found'; ?></small>
                        </div>
                    </div>
                    
                </div>
                <div class="mt-4">
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <div class="dashboard-card p-2  bg-light ">
                                <div class="d-flex justify-content-between">
                                    <h1 class="text-success mt-2 pb-0 mb-0"><i class="bi bi-piggy-bank-fill"></i></h1>
                                    <div class="text-end pb-0">
                                        <h3 class="fw-bold mb-0 pb-0">150.000.000,39 Kz</h3>
                                        <p class="text-secondary mb-0 pb-0" style="font-size: 12px">Total de Receita</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 mb-3">
                            <div class="dashboard-card p-2 bg-light">
                                <div class="d-flex justify-content-between">
                                    <h1 class="text-danger mt-2 pb-0 mb-0"><i class="bi bi-credit-card-2-back-fill"></i></h1>
                                    <div class="text-end pb-0">
                                        <h3 class="fw-bold mb-0 pb-0">15000000 Kz</h3>
                                        <p class="text-secondary mb-0 pb-0" style="font-size: 12px">Total de Despesas</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 mb-3">
                            <div class="dashboard-card p-2  bg-light">
                                <div class="d-flex justify-content-between">
                                    <h1 class="text-primary mt-2 pb-0 mb-0"><i class="bi bi-calculator-fill"></i></h1>
                                    <div class="text-end pb-0">
                                        <h3 class="fw-bold mb-0 pb-0">1500000 Kz</h3>
                                        <p class="text-secondary mb-0 pb-0" style="font-size: 12px">Saldo Atual</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 mb-3">
                            <div class="dashboard-card p-2  bg-light ">
                                <div class="d-flex justify-content-between">
                                    <h1 class="text-warning mt-2 pb-0 mb-0"><i class="bi bi-file-earmark-text-fill"></i></h1>
                                    <div class="text-end pb-0">
                                        <h3 class="fw-bold mb-0 pb-0">150000000 Kz</h3>
                                        <p class="text-secondary mb-0 pb-0" style="font-size: 12px">Contas Pendentes</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6 mb-3">
                            <div class="card p-2">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex">
                                        <h6 class="me-1">Receitas e Despesas</h6>
                                        <small class="" style="font-size:12px">(ultimos 6 meses)</small>
                                    </div>
                                    <div class="d-flex justify-content-evenly">
                                        <p class="me-2 txt-rd"><i class="bi bi-record-fill text-success"></i>Receitas</p>
                                        <p class="txt-rd"><i class="bi bi-record-fill text-danger"></i>Despesas</p>
                                    </div>
                                </div>
                                <div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="card p-2">
                                <div class="d-flex justify-content-between">
                                    <h6>Movimentações Recentes:</h6>
                                    <a class="btn btn-outline-primary btn-sm border-0" style="font-size:10px" href="#">Ver Todos</a>
                                </div>
                                <div class="table-responsive ">
                                    <table class="table table-striped table-light">
                                        <thead>
                                            <tr>
                                                <th>Tipo</th>
                                                <th>Descrição</th>
                                                <th>Valor</th>
                                                <th>Data</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td> 
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6 mb-3">
                            <div class="card p-2">
                                <div class="d-flex justify-content-between">
                                    <h6><i class="bi bi-people-fill text-primary"></i> Contas a Receber</h6>
                                    <a class="btn btn-outline-primary btn-sm border-0" style="font-size:10px" href="#">Ver Todos</a>
                                </div>
                                <div class="table-responsive ">
                                    <table class="table table-striped table-light">
                                        <thead>
                                            <tr>
                                                <th>Estudante</th>
                                                <th>Curso</th>
                                                <th>Descrição</th>
                                                <th>Valor</th>
                                                <th>Vencimento</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td> 
                                                <td></td>
                                                <td></td> 
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card p-2">
                                <div class="d-flex justify-content-between">
                                    <h6><i class="bi bi-people-fill text-primary"></i> Contas a Pagar</h6>
                                    <a class="btn btn-outline-primary btn-sm border-0" style="font-size:10px" href="#">Ver Todos</a>
                                </div>
                                <div class="table-responsive ">
                                    <table class="table table-striped table-light">
                                        <thead>
                                            <tr>
                                                <th>Fornecedor</th>
                                                <th>Descrição</th>
                                                <th>Valor</th>
                                                <th>Vencimento</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td> 
                                                <td></td> 
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