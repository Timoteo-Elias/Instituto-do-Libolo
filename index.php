<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Se o utilizador já estiver autenticado, vai direto para a Dashboard

?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISP LIBOLO - Login</title>
    <link rel="stylesheet" href="Public/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="Public/bootstrap-icons/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="Public/CSS/style.css">
    <link rel="stylesheet" href="Public/JS/action.js">
    <link rel="stylesheet" href="Public/JS/bootstrap.min.js">
</head>
<body class="bg-primary d-flex align-items-center justify-content-center vh-100">

<div class="container d-flex justify-content-center">
    <div class="card p-4 shadow-sm border-0" style="width: 100%; max-width: 400px; border-radius: 8px;">
        
        <div class=" mb-2 d-flex justify-content-center">
            <div>
                <h1 class="text-primary  pe-1 me-2 fw-bold border-end"><i class="bi bi-mortarboard-fill"></i></h1>
            </div>
            <div>
                <h3 class="fw-bold text-primary pb-0 mb-0">ISP LIBOLO</h3>
                <p class="text-muted small">Portal Acadêmico</p>
            </div>
        </div>

        <!-- Alerta para Mensagens de ERRO -->
        <?php if (isset($_SESSION['erro'])): ?>
            <div class="alert alert-danger p-2 small text-center" role="alert">
                ⚠️ <?= htmlspecialchars($_SESSION['erro']); ?>
            </div>
            <?php unset($_SESSION['erro']); ?>
        <?php endif; ?>
        <div class="mb-3">
            <h5 class="fw-bold mb-0 pb-0">Bem-vindo!</h5>
            <small style="font-size:12px ">Insira as tuas credenciais para aceder a sua conta</small>
        </div>
        <!-- Formulário de Autenticação -->
        <form action="login.php" method="POST">
            
            <div class="mb-3">
                <input 
                    type="email" 
                    name="email" 
                    id="email" 
                    class="form-control" 
                    placeholder="Insira seu email" 
                    required 
                    autofocus
                >
            </div>

            <div class="mb-3">
                <input 
                    type="password" 
                    name="senha" 
                    id="senha" 
                    class="form-control" 
                    placeholder="Palavra-passe" 
                    required
                >
            </div>

            <div class="">
                <a style="font-size:12px " class="nav-link" href="recuperar_senha.php">esqueci-me da senha?</a>
            </div>

            <button type="submit" name="btn-login" class="btn btn-sm btn-primary w-100 fw-bold mt-2">
                Entrar no Sistema
            </button>

        </form>

        <div class="text-center mt-3">
            <small class="text-muted">© <?= date("Y") ?> ISP-LIBOLO. Todos os direitos reservados.</small>
        </div>
    </div>
</div>

</body>
</html>