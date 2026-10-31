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
                            <h5 class="text-primary fw-bolder mt-2">Bem Vindo, ADM</h5>
                            <small class="mt-0 pt-0 text-secondary" style="font-size:12px"><?php echo isset($_SESSION['usuario_logged']['nome']) ? htmlspecialchars($_SESSION['usuario_logged']['nome']) : 'Not Found'; ?></small>
                        </div>
                    </div>
                    
                </div>
                <div class="mt-4">
                    <div>
                        <h4>Faculdades Disponiveis</h4>
                    </div>
        
                    <div class="table-responsive ">
                        <table class="table table-striped">
                            <thead class="text-primary" style="background:azure;">
                                <tr>
                                    <th>Codigo</th>
                                    <th>Nome</th>
                                    <th></th>
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

        <?php include_once '../resource/mobile.php' ?>
    </section>
</body>
</html>