<?php

    use Model\Funcionario\Dao;
    use Model\Funcionario;

    class FuncionarioController {
        private FuncionarioDao $funcionarioDao;

        // O construtor agora RECEBE a dependência do FuncionarioDao
        public function __construct(FuncionarioDao $funcionarioDao) {
            $this->funcionarioDao = $funcionarioDao;
        }

        public function index() {
            return $this->funcionarioDao->read();
        }

        // Cadastramento do funcionário
        public function insert($nome, $codigo, $nif, $genero, $data_nascimento, $formacao, $nivel_formacao, $funcao, $email, $telefone) {
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

                return $this->funcionarioDao->create($funcionario);

            } catch (Exception $e) {
                $_SESSION['erro'] = "Erro ao cadastrar funcionário: " . htmlspecialchars($e->getMessage());
                return false;
            }
        }
    }