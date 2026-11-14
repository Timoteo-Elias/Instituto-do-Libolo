<?php

    use Model\Curso;

    require_once __DIR__ . '/../Model/DAO/CursoDao.php';

    class CursoController {
        private CursoDao $cursoDao;

        // O construtor agora RECEBE a dependência do curso dao
        public function __construct(CursoDao $cursoDao) {
            $this->cursoDao = $cursoDao;
        }

        public function index() {
            return $this->cursoDao->read();
        }

        public function delete(int $id): void
        {
            $this->cursoDao->delete($id);
        }
        // Cadastramento do curso
        public function insert(string $codigo, string $nome, ?int $coordenador,
            int $duracao) 
            {
            
            try { 
                // Instancia um novo objeto curso localmente (evita vazar estado)
                $cu = new Curso();
                $cu->setNome($nome);
                $cu->setCodigo($codigo);
                $cu->setCoordenador($coordenador);
                $cu->setDuracao($duracao);

                return $this->cursoDao->create($cu);

            } catch (Exception $e) {
                $_SESSION['erro'] = "Erro ao cadastrar curso: " . htmlspecialchars($e->getMessage());
                return false;
            }
        }
    }