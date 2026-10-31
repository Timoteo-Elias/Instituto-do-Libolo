<?php
    //use Model\DAO;
    require_once __DIR__.'/../Model/DAO/UsuarioDAO.php';

    use Model\Usuario;
    
    class UsuarioController{
        private UsuarioDAO $usuarioDao;
        private Usuario $usuario;

        public function __construct(){
            $this->usuarioDao = new UsuarioDao();
            $this->usuario = new Usuario();
        }

        public function index(){
            $usuario = $this->usuarioDao->read();
            return $usuario;
        }
        //Cadastramento do usuario
        public function insert(string $nome, string $email, string $perfil, string $senha) {
            try {    
                //Verificar se o email já existe
                if ($this->usuarioDao->findByEmail($email)) {
                    $_SESSION['erro'] = "O e-mail '$email' já está cadastrado no sistema. Utilize outro e-mail.";
                    return false;
                }
                //Validação do Email
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $_SESSION['erro'] = "O e-mail enviado ('" . htmlspecialchars($email) . "') não possui um formato válido!";
                    return false;
                }
                //Validação da Senha
                if (strlen($senha) < 4) {
                    $_SESSION['erro'] = "A senha deve ter no mínimo 4 caracteres.";
                    return false;
                }

                $this->usuario->setNome($nome);
                $this->usuario->setEmail($email);
                $this->usuario->setPerfil($perfil);
                $this->usuario->setSenha($senha);

                $nomeImagemFinal = '';

                if (isset($_FILES['foto_perfil']) && $_FILES['foto_perfil']['error'] === UPLOAD_ERR_OK) {
                    
                    $tmpName      = $_FILES['foto_perfil']['tmp_name'];
                    $nomeOriginal = $_FILES['foto_perfil']['name'];
                    $extensao     = strtolower(pathinfo($nomeOriginal, PATHINFO_EXTENSION));

                    $extensoesPermitidas = ['jpeg', 'jpg', 'png', 'webp'];

                    if (in_array($extensao, $extensoesPermitidas)) {
                        $nomeImagemFinal = md5(uniqid(rand(), true)) . '.' . $extensao;
                        $pastaDestino    = __DIR__ . '/../uploads/';

                        if (!is_dir($pastaDestino)) {
                            mkdir($pastaDestino, 0755, true);
                        }

                        if (!move_uploaded_file($tmpName, $pastaDestino . $nomeImagemFinal)) {
                            $nomeImagemFinal = '';
                        }
                    }
                }
                $this->usuario->setImagem($nomeImagemFinal);
                return $this->usuarioDao->create($this->usuario);

            } catch (\PDOException $e) {
                $_SESSION['erro'] = "Erro no banco de dados: " . $e->getMessage();
                return false;
            } catch (\Exception $e) {
                $_SESSION['erro'] = "Erro no sistema: " . $e->getMessage();
                return false;
            }
        }

        public function Delete(int $id){
            $idSanitizado = (int) $id;

            if($idSanitizado <= 0){
                $_SESSION['erro'] = "ID invalido";
            }
            $this->usuarioDao->delete($id);
        }

        public function getForId(int $id){
            return $this->usuarioDao->getById($id);
        }

    }


    