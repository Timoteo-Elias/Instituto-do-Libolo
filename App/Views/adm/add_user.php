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
                            <h5 class="text-primary fw-bolder mt-2">Bem Vindo, ADM</h5>
                        </div>
                    </div>
                    
                </div>
                <div class="mt-4">
                    <div class="card shadow-sm">
                        <div class="card-header bg-dark text-white">
                            <h4 class="mb-0">Cadastrar Novo Usuario </h4>
                        </div>
                        <div class="card-body">
                            <form action="../../CPU/CPU_User.php" method="POST" enctype="multipart/form-data">
                                
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label class="form-label fw-bold">Nome de usuario *</label>
                                        <input type="text" name="usuario" class="form-control" placeholder="Ex: Jose Augusto" required>
                                    </div>
                                    <div class="col-md-5">
                                        <label class="form-label fw-bold">Email *</label>
                                        <input type="text" name="email" class="form-control" placeholder="joseaugusto@gmail.com" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label fw-bold">Perfil *</label>
                                        <select name="perfil" class="form-select" required>
                                            <option value="">Selecione um perfil</option>
                                            <option value="admin">Admin</option>
                                            <option value="contabilidade">Contabilidade</option>
                                            <option value="coordenador">Coordenador</option>
                                            <option value="secretaria">Secretaria</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">  
                                    <div class="col-md-3">
                                        <label class="form-label fw-bold">Senha *</label>
                                        <input type="password" name="senha" class="form-control" placeholder="Senha do usuario" required>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label fw-bold">Carregar foto de perfil *</label>
                                        <input type="file" name="foto_perfil" class="form-control">
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end gap-2">
                                    <a href="user.php" class="btn btn-sm btn-secondary">Cancelar</a>
                                    <button type="submit" name="add-user" class="btn btn-sm btn-success">Gravar Usuário</button>
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