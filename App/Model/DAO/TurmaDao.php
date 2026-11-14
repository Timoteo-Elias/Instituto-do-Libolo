<?php
    require_once __DIR__ . '/../../../Config/config.php';
    use Model\Turma;

    class TurmaDao{
        public static function getCod() : string
        {
            try {

                $sql = "SELECT MAX(id_curso) as max_id FROM turma";
                $stmt = Connect::getConn()->query($sql);
                $stmt->execute();
                $res = $stmt->fetch(PDO::FETCH_ASSOC);

                $next = ($res['max_id'] ?? 0) + 1;
                return 'TM-' . str_pad($next, 3, '0', STR_PAD_LEFT);
            } catch (PDOException $e){
                return 'TM-' . '001';
            }
        }

        public function create(Turma $turma) {
            try {
                $sql = "INSERT INTO turma (nome, codigo, periodo, nivel, curso, limite) VALUES (?, ?, ?, ?, ?, ?)";
                $res = Connect::getConn()->prepare($sql);
                return $res->execute([
                    $turma->getNome(),
                    TurmaDao::getCod(),
                    $turma->getPeriodo(),
                    $turma->getNivel(),
                    $turma->getCurso(),
                    $turma->getLimite()
                ]);

            } catch (PDOException $e) {
                // PARAR A EXECUÇÃO E MOSTRAR O ERRO REAL NA TELA
                echo "<div style='background: #f8d7da; color: #721c24; padding: 20px; font-family: monospace;'>";
                echo "<h3>Erro ao Inserir no MySQL:</h3>";
                echo "<p>" . $e->getMessage() . "</p>";
                echo "</div>";
                exit();
            }
        }
       
        public function findByCodigo(string $codigo) {
            $sql = "SELECT * FROM turma WHERE codigo = ?";
            $res = Connect::getConn()->prepare($sql);
            $res->bindValue(1, $codigo);
            $res->execute();

            if ($res->rowCount() > 0) {
                return $res->fetch(\PDO::FETCH_ASSOC);
            }

            return false;
        }	

        public function read(){
            $sql = "SELECT turma.id_turma, turma.nome, turma.codigo, turma.periodo, turma.nivel, curso.nome AS curso, turma.limite FROM turma
            JOIN curso ON turma.curso = curso.id_curso
            ";
            $res = Connect::getConn()->query($sql);
            $faculdade = $res->rowCount()>0 ? $res->fetchAll(PDO::FETCH_ASSOC) : [];
            return $faculdade;
        }

        public function delete(int $id){
            $sql = "DELETE FROM turma WHERE id_turma = ?";
            $res = Connect::getConn()->prepare($sql);
            $res->bindParam(1, $id);
            $res->execute();
        }

        public function getById(int $id){
            $sql = "SELECT * FROM turma WHERE id_turma = $id";
            $res = Connect::getConn()->query($sql);
            $turma = $res->rowCount()>0 ? $res->fetch() : [];
            return $turma;
        }
    }