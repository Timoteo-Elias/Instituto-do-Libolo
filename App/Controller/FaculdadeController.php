<?php

    use Model\Faculdade;

    require_once __DIR__ . '/../Model/DAO/FaculdadeDao.php';

    class FaculdadeController {
        private FaculdadeDao $faculdadeDao;

        // O construtor agora RECEBE a dependência do FuncionarioDao
        public function __construct(FaculdadeDao $faculdadeDao) {
            $this->faculdadeDao = $faculdadeDao;
        }

        public function index() {
            return $this->faculdadeDao->read();
        }

        public function delete(int $id): void
        {
            $this->faculdadeDao->delete($id);
        }
        // Cadastramento da faculdade
        public function insert(string $codigo, string $faculdade, ?int $decano,
            ?int $vice_decano_academica, ?int $vice_decano_cientifica, 
            string $data_de_abertura) 
            {
            
            try { 
                // Instancia um novo objeto Funcionario localmente (evita vazar estado)
                $fau = new Faculdade();
                $fau->setCodigo($codigo);
                $fau->setFaculdade($faculdade);
                $fau->setDecano($decano);
                $fau->setViceDecanoAcademica($vice_decano_academica);
                $fau->setViceDecanoCientifica($vice_decano_cientifica);
                $fau->setDataDeAbertura($data_de_abertura);

                return $this->faculdadeDao->create($fau);

            } catch (Exception $e) {
                $_SESSION['erro'] = "Erro ao cadastrar faculdade: " . htmlspecialchars($e->getMessage());
                return false;
            }
        }
    }