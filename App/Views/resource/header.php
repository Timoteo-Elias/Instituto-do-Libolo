<div class="d-flex justify-content-between align-items-center p-2 bg-light header">
    <div>
        
    </div>
    
    <div class="d-flex">
        <img src="../../uploads/<?php echo isset($_SESSION['usuario_logged']['foto']) ? htmlspecialchars($_SESSION['usuario_logged']['foto']) : 'default.jpeg'; ?>" alt="Foto do Usuário" class="img-fluid rounded-circle" style="width: 40px; height: 40px;">
        <a class="nav-link text-dark text-center pt-0 ps-0" href="">
           <p style="font-size: 14px" class="mb-0 pb- fw-bolder"><?php echo isset($_SESSION['usuario_logged']['perfil']) ? htmlspecialchars($_SESSION['usuario_logged']['perfil']) : 'Not Found'; ?></p>
           <p style="font-size: 10px" class="pt-0 mt-0 mb-0 pb-0"><?php echo isset($_SESSION['usuario_logged']['email']) ? htmlspecialchars($_SESSION['usuario_logged']['email']) : 'Not Found'; ?></p>
        </a>
    </div>
</div>
