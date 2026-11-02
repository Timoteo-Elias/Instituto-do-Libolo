<?php

    use Model\Funcionario;

    require_once __DIR__ . '/../Model/DAO/FuncionarioDao.php';

    class FuncionarioController {
        private FuncionarioDao $funcionarioDao;

        // O construtor agora RECEBE a dependência do FuncionarioDao
        public function __construct(FuncionarioDao $funcionarioDao) {
            $this->funcionarioDao = $funcionarioDao;
        }

        public function index() {
            return $this->funcionarioDao->read();
        }

        public function delete(int $id): void
        {
            $this->funcionarioDao->delete($id);
        }
        // Cadastramento do funcionário
        public function insert(string $nome, string $codigo, string $nif, string $genero, string $data_nascimento, string $formacao, string $nivel_formacao, string $funcao, string $email, string $telefone, ?int $usuario) {
            
            try {    
                // Verificar se o e-mail já existe
                if ($this->funcionarioDao->findByEmail($email)) {
                    $_SESSION['erro'] = "O e-mail '$email' já está cadastrado no sistema. Utilize outro e-mail.";
                    return false;
                }

                // Validação do Email
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $_SESSION['erro'] = "O e-mail enviado ('" . htmlspecialchars($email) . "') não possui um formato válido!";
                    return false;
                }

                // Instancia um novo objeto Funcionario localmente (evita vazar estado)
                $funcionario = new Funcionario();
                $funcionario->setNome($nome);
                $funcionario->setCodigo($codigo);
                $funcionario->setNif($nif);
                $funcionario->setGenero($genero);
                $funcionario->setDataNascimento($data_nascimento);
                $funcionario->setFormacao($formacao);
                $funcionario->setNivelFormacao($nivel_formacao);
                $funcionario->setFuncao($funcao);
                $funcionario->setEmail($email);
                $funcionario->setTelefone($telefone);
                $funcionario->setUsuario($usuario);

                $nomeImagemFinal = '';

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
                            $nomeImagemFinal = '';
                        }
                    }
                }

                $funcionario->setImagem($nomeImagemFinal);

                return $this->funcionarioDao->create($funcionario);

            } catch (Exception $e) {
                $_SESSION['erro'] = "Erro ao cadastrar funcionário: " . htmlspecialchars($e->getMessage());
                return false;
            }
        }
    }