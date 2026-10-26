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
                            <h4 class="mb-0">Cadastrar Novo Funcionário </h4>
                        </div>
                        <div class="card-body">
                            <form action="../../CPU/CPU_User.php" method="POST" enctype="multipart/form-data" >
                                <h6 class="bg-secondary form-label fw-bold p-1 text-white text-center">Dados pessoais</h6>
                                <div class="row mb-3">
                                    <div class="col-md-2 mb-2">
                                        <label class="form-label fw-bold">Código</label>
                                        <input type="text" name="codigo" class="form-control " placeholder="F001" disabled>
                                    </div>
                                    <div class="col-md-10 mb-2">
                                        <label class="form-label fw-bold">Nome Completo *</label>
                                        <input type="text" name="nome" class="form-control" placeholder="Ex: Jose Augusto" required>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label class="form-label fw-bold">NIF/BI *</label>
                                        <input type="text" name="nif" class="form-control" placeholder="joseaugusto@gmail.com" required>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label class="form-label fw-bold">Gênero *</label>
                                        <select name="perfil" class="form-select" required>
                                            <option value="">Selecione o gênero</option>
                                            <option value="Masculino">Masculino</option>
                                            <option value="Femenino">Feminino</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label class="form-label fw-bold">Data de Nascimento *</label>
                                        <input type="date" name="data_nascimento" class="form-control" placeholder="joseaugusto@gmail.com" required>
                                    </div>
                                </div>
                                <h6 class="bg-secondary form-label fw-bold p-1 text-white text-center">Dados Académicos</h6>
                                <div class="row mb-3">  
                                    <div class="col-md-6 mb-2">
                                        <label class="form-label fw-bold">Área de Formação *</label>
                                        <input type="text" name="formacao" class="form-control" placeholder="Formação do usuário" required>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label class="form-label fw-bold">Nível de Formação *</label>
                                        <input type="text" name="nivel_formacao" class="form-control" placeholder="Nível de formação do usuário" required>
                                    </div>

                                </div>
                                <h6 class="bg-secondary form-label fw-bold p-1 text-white text-center">Dados de Funcionário</h6>
                                <div class="row mb-3">  
                                    <div class="col-md-6 mb-2">
                                        <label class="form-label fw-bold">Função *</label>
                                        <input type="text" name="funcao" class="form-control" placeholder="Função do funcionário" required>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label class="form-label fw-bold">Fotografia tipo Passe *</label>
                                        <input type="file" name="foto_perfil" class="form-control">
                                    </div>

                                </div>
                                <h6 class="bg-secondary form-label fw-bold p-1 text-white text-center">Dados de Contato</h6>
                                <div class="row mb-3">
                                    <div class="col-md-6 mb-2">
                                        <label class="form-label fw-bold">Telefone *</label>
                                        <input type="tel" name="telefone" class="form-control" placeholder="Número de telefone" required>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label class="form-label fw-bold">Email *</label>
                                        <input type="email" name="email" class="form-control" placeholder="Endereço de email" required>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end gap-2">
                                    <a href="funcionario.php" class="btn btn-sm btn-danger">Cancelar</a>
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