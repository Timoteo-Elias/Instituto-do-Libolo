<?php
    use Model\Usuario\Dao;
    use Model\Usuario;

    class UsuarioController {
        private UsuarioDao $usuarioDao;

        // O construtor agora RECEBE a dependência do UsuarioDao
        public function __construct(UsuarioDao $usuarioDao) {
            $this->usuarioDao = $usuarioDao;
        }

        public function index() {
            return $this->usuarioDao->read();
        }

        // Cadastramento do usuário
        public function insert($nome, $email, $perfil, $senha) {
            try {    
                // Verificar se o e-mail já existe
                if ($this->usuarioDao->findByEmail($email)) {
                    $_SESSION['erro'] = "O e-mail '$email' já está cadastrado no sistema. Utilize outro e-mail.";
                    return false;
                }

                // Validação do Email
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $_SESSION['erro'] = "O e-mail enviado ('" . htmlspecialchars($email) . "') não possui um formato válido!";
                    return false;
                }

                // Validação da Senha
                if (strlen($senha) < 4) {
                    $_SESSION['erro'] = "A senha deve ter no mínimo 4 caracteres.";
                    return false;
                }

                // Instancia um novo objeto Usuario localmente (evita vazar estado)
                $usuario = new Usuario();
                $usuario->setNome($nome);
                $usuario->setEmail($email);
                $usuario->setPerfil($perfil);
                // Dica de segurança: Lembra-te de fazer o hash da senha aqui ou no DAO (ex: password_hash)
                $usuario->setSenha($senha); 

                $nomeImagemFinal = null;

                if (isset($_FILES['foto_perfil']) && $_FILES['foto_perfil']['error'] === UPLOAD_ERR_OK) {
                    $tmpName      = $_FILES['foto_perfil']['tmp_name'];
                    $nomeOriginal = $_FILES['foto_perfil']['name'];
                    $extensao     = strtolower(pathinfo($nomeOriginal, PATHINFO_EXTENSION));

                    $extensoesPermitidas = ['jpeg', 'jpg', 'png', 'webp'];

                    if (in_array($extensao, $extensoesPermitidas)) {
                        $nomeImagemFinal = md5(uniqid(rand(), true)) . '.' . $extensao;
                        $pastaDestino   = __DIR__ . '/../uploads/';

                        if (!is_dir($pastaDestino)) {
                            mkdir($pastaDestino, 0755, true);
                        }

                        if (!move_uploaded_file($tmpName, $pastaDestino . $nomeImagemFinal)) {
                            $nomeImagemFinal = null;
                        }
                    }
                }

                $usuario->setImagem($nomeImagemFinal);
                return $this->usuarioDao->create($usuario);

            } catch (\PDOException $e) {
                $_SESSION['erro'] = "Erro no banco de dados: " . $e->getMessage();
                return false;
            } catch (\Exception $e) {
                $_SESSION['erro'] = "Erro no sistema: " . $e->getMessage();
                return false;
            }
        }

        public function delete($id) {
            $idSanitizado = (int) $id;

            if ($idSanitizado <= 0) {
                $_SESSION['erro'] = "ID inválido";
                return false;
            }
            
            return $this->usuarioDao->delete($idSanitizado);
        }

        public function getForId($id) {
            return $this->usuarioDao->getById($id);
        }
    }
    