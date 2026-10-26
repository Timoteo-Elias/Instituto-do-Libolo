<?php
    
    include_once(__DIR__ . '/../resource/auth.php');
    require_once __DIR__ . '/../../Controller/UsuarioController.php';
    require_once __DIR__ . '/../../Model/DAO/UsuarioDAO.php';
    require_once __DIR__ . '/../../Model/Usuario.php';
    use Model\Usuario;
    $usuarioDao = new UsuarioDao(); 
    $UsuarioController = new UsuarioController($usuarioDao );
    $usuario = $UsuarioController->index(); 
    
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
                            <h5 class="text-primary fw-bolder mt-2">Bem Vindo, ADM</h5>
                            <small class="mt-0 pt-0 text-secondary" style="font-size:12px"><?php echo isset($_SESSION['usuario_logged']['nome']) ? htmlspecialchars($_SESSION['usuario_logged']['nome']) : 'Not Found'; ?></small>
                        </div>
                    </div>
                </div>
                <div>
                    <?php if (isset($_SESSION['sucesso'])): ?>
                        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                            <strong>✓ Sucesso!</strong> <?= $_SESSION['sucesso']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php 
                        unset($_SESSION['sucesso']); 
                        ?>
                    <?php endif; ?>
                    <?php if (isset($_SESSION['erro'])): ?>
                        <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                            <strong>✗ Erro!</strong> <?= $_SESSION['erro']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php 
                        unset($_SESSION['erro']); 
                        ?>
                    <?php endif; ?>
                    <?php if (isset($_SESSION['delete'])): ?>
                        <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
                            <strong>✓ Sucesso!</strong> <?= $_SESSION['delete']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php 
                        unset($_SESSION['delete']); 
                        ?>
                    <?php endif; ?>
                    <?php if (isset($_SESSION['atualizado'])): ?>
                        <div class="alert alert-primary alert-dismissible fade show mt-3" role="alert">
                            <strong>✓ Sucesso!</strong> <?= $_SESSION['atualizado']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php 
                        unset($_SESSION['atualizado']); 
                        ?>
                    <?php endif; ?>
                </div>
                <div class="mt-4">
                    <div class="table-responsive desktop-table ">

                        <div class="d-flex justify-content-between">
                            <h5 class="mt-2 text-primary fw-bolder">Lista de usuarios</h5>
                            <div class="">
                                <a href="" class="btn btn-sm btn-danger me-3"> <i class="bi bi-file-pdf-fill"></i> imprimir</a>
                                <a href="add_user.php" class="btn btn-sm btn-success"> <i class="bi bi-plus"></i> Novo Usuário</a>
                            </div>
                        </div>
                        <table class="table align-middle table-sm table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Perfil</th>
                                    <th>Foto</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($usuario as $trim):?>
                                    <tr class="fs-6">
                                        <td><?= $trim['nome'] ?></td>
                                        <td><?= $trim['email'] ?></td>
                                        <td><?= $trim['perfil'] ?></td>
                                        <td><img src="../../uploads/<?= $trim['foto'] ?>" alt="tt" width="25"></td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-primary"><i class="bi bi-eye-fill"> </i></a>
                                            <a href="edit_usuario.php?id=<?= $trim['id_user'] ?>" class="btn btn-sm btn-success"><i class="bi bi-pen-fill"></i></a>
                                            <a href="../../CPU/CPU_User.php?id=<?= $trim['id_user'] ?>" class="btn btn-sm btn-danger"><i class="bi bi-trash3-fill"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
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