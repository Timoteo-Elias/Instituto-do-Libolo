<?php

    use Model\Turma;

    require_once __DIR__ . '/../Model/DAO/TurmaDao.php';

    class TurmaController {
        private TurmaDao $turmaDao;

        public function __construct(TurmaDao $turmaDao) {
            $this->turmaDao = $turmaDao;
        }

        public function index() {
            return $this->turmaDao->read();
        }

        public function delete(int $id): void
        {
            $this->turmaDao->delete($id);
        }
        public function insert(string $nome, string $codigo, string $periodo, int $nivel, ?int $curso,
            int $limite) 
            {
            
            try { 
                // Instancia um novo objeto curso localmente (evita vazar estado)
                $tu = new Turma();
                $tu->setNome($nome);
                $tu->setCodigo($codigo);
                $tu->setPeriodo($periodo);
                $tu->setNivel($nivel);
                $tu->setCurso($curso);
                $tu->setLimite($limite);

                return $this->turmaDao->create($tu);
            } catch (Exception $e) {
                $_SESSION['erro'] = "Erro ao cadastrar turma: " . htmlspecialchars($e->getMessage());
                return false;
            }
        }
    }