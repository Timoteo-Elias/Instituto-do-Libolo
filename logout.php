<?php

require_once __DIR__ . '/Config/config.php';
require_once __DIR__ . '/App/Model/DAO/UsuarioDAO.php';
require_once __DIR__ . '/App/Controller/LoginController.php';


$loginController = new LoginController();
$loginController->logout();