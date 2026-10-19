<main class="sidebar" >
    <div class="d-flex justify-content-center text-white mb-0 pb-0 mt-1 logo-menu">
        <img class="me-1" src="../../../Public/IMG/helitech.jpg" width="40" height="40" alt="Logo">
        <div>
            <h6 class=" fw-bold pb-0 mb-0 txt-logo">Insituto Superior </h6>
            <small class="mt-0 pt-0 pb-0 mb-0" style="font-size: 12px; letter-spacing: 0.5px;">Politécnico do Libolo</small>
        </div>
    </div>
    <hr class="bg-secondary ">
    <ul class="menu">
        <?php
            $pagina = basename($_SERVER['PHP_SELF']);
            if($_SESSION['usuario_logged']['perfil'] == 'admin'){
        ?>
            <li><a href="index.php"><i class="bi bi-house-fill"></i> Dashboard</a></li>
            <li><a href=""><i class="bi bi-mortarboard-fill"></i> Cursos</a></li>
            <li><a href=""><i class="bi bi-person-badge-fill"></i> Professores</a></li>
            <li><a href=""><i class="bi bi-people-fill"></i> Turmas</a></li>
            <li><a href=""><i class="bi bi-building-fill"></i> Faculdades</a></li>
            <li><a href="user.php"><i class="bi bi-person-fill"></i> Usuarios</a></li>
            <li><a href=""> <i class="bi bi-gear-fill"></i></i> Configuracoes</a></li>
        <?php
            }elseif($_SESSION['usuario_logged']['perfil'] == 'professor'){  
        ?>
            <li><a href="index.php"><i class="bi bi-house-fill"></i> Dashboard</a></li>
            <li><a href=""><i class="bi bi-mortarboard-fill"></i> Minhas Turmas</a></li>
            <li><a href=""><i class="bi bi-person-badge-fill"></i> Aulas</a></li>
            <li><a href=""><i class="bi bi-people-fill"></i> Materiais</a></li>
            <li><a href=""><i class="bi bi-building-fill"></i> Avaliações</a></li>
            <li><a href="user.php"><i class="bi bar-chart-fill"></i> Frequência</a></li>
            <li><a href="user.php"><i class="bi bi-person-fill"></i> Notas</a></li>
        <?php
            }elseif($_SESSION['usuario_logged']['perfil'] == 'coordenador'){
        ?>
            <li><a href="index.php"><i class="bi bi-house-fill"></i> Dashboard</a></li>
            <li><a href=""><i class="bi bi-building-fill"></i> Cursos</a></li>
            <li><a href=""><i class="bi bi-book-fill"></i> Turmas</a></li>
            <li><a href=""><i class="bi bi-people-fill"></i> Estudantes</a></li>
            <li><a href=""><i class="bi bi-person-badge-fill"></i> Professores</a></li>
            <li><a href=""><i class="bi bi-file-earmark-text-fill"></i> Matrículas</a></li>
            <li><a href=""><i class="bi bi-building-fill"></i> Horários</a></li>
            <li><a href="user.php"><i class="bi bi-person-fill"></i> Avaliações</a></li>
            <li><a href=""> <i class="bi bi-bar-chart-fill"></i></i> Relatórios</a></li>
        <?php
            }elseif($_SESSION['usuario_logged']['perfil'] == 'aluno'){  
        ?>
            <li><a href="index.php"><i class="bi bi-house-fill"></i> Dashboard</a></li>
            <li><a href=""><i class="bi bi-mortarboard-fill"></i> Materiais</a></li>
            <li><a href=""><i class="bi bi-person-badge-fill"></i> Disciplinas</a></li>
            <li><a href=""><i class="bi bi-people-fill"></i> Notas</a></li>
            <li><a href=""><i class="bi bi-calendar-week-fill"></i> Horário</a></li>
            <li><a href="user.php"><i class="bi bi-person-fill"></i> Faltas</a></li>
            <li><a href=""> <i class="bi bi-cash"></i></i> Pagamentos</a></li>
        <?php  
            }elseif($_SESSION['usuario_logged']['perfil'] == 'secretaria'){  
        ?>
            <li><a href="index.php"><i class="bi bi-house-fill"></i> Dashboard</a></li>
            <li><a href=""><i class="bi bi-mortarboard-fill"></i> Cursos</a></li>
            <li><a href=""><i class="bi bi-person-badge-fill"></i> Professores</a></li>
            <li><a href=""><i class="bi bi-book-fill"></i> Turmas</a></li>
            <li><a href=""><i class="bi bi-building-fill"></i> Faculdades</a></li>
            <li><a href=""><i class="bi bi-bar-chart-fill"></i> Relatórios</a></li>
            <li><a href=""> <i class="bi bi-gear-fill"></i></i> Configuracoes</a></li>
        <?php
            }elseif($_SESSION['usuario_logged']['perfil'] == 'contabilidade'){  
        ?>
            <li><a href="index.php"><i class="bi bi-house-fill"></i> Dashboard</a></li>
            <li><a href=""><i class="bi bi-cash"></i> Pagamentos</a></li>
            <li><a href=""><i class="bi bi-mortarboard-fill"></i> Receita</a></li>
            <li><a href=""><i class="bi bi-person-badge-fill"></i> Despesas</a></li>
            <li><a href=""><i class="bi bi-people-fill"></i> Contas a Receber</a></li>
            <li><a href=""><i class="bi bi-building-fill"></i> Contas a Pagar</a></li>
            <li><a href="user.php"><i class="bi bi-bar-chart-fill"></i> Relatórios</a></li>
            <li><a href=""> <i class="bi bi-gear-fill"></i></i> Configuracoes</a></li>
        <?php 
            }   
        ?>
    </ul>
    <hr class="bg-secondary ">
    <div class="sider-footer">
        <div class=" ">
            <a class="nav-link text-secondary" href="..\..\..\logout.php"><i class="bi bi-box-arrow-right me-1"></i>Sair</a>
        </div>
    </div>

</main>