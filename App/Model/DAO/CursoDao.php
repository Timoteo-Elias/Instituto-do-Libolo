<?php
    require_once __DIR__ . '/../../../Config/config.php';
    use Model\Curso;

    class CursoDao{
        public static function getCod() : string
        {
            try {

                $sql = "SELECT MAX(id_curso) as max_id FROM curso";
                $stmt = Connect::getConn()->query($sql);
                $stmt->execute();
                $res = $stmt->fetch(PDO::FETCH_ASSOC);

                $next = ($res['max_id'] ?? 0) + 1;
                return 'CU-' . str_pad($next, 4, '0', STR_PAD_LEFT);
            } catch (PDOException $e){
                return 'CU-' . '0001';
            }
        }

        public function create(Curso $curso) {
            try {
                $sql = "INSERT INTO curso (nome, codigo, coordenador, duracao) VALUES (?, ?, ?, ?)";
                $res = Connect::getConn()->prepare($sql);
                return $res->execute([
                    $curso->getNome(),
                    CursoDao::getCod(),
                    $curso->getCoordenador(),
                    $curso->getDuracao(),
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
            $sql = "SELECT * FROM curso WHERE codigo = ?";
            $res = Connect::getConn()->prepare($sql);
            $res->bindValue(1, $codigo);
            $res->execute();

            if ($res->rowCount() > 0) {
                return $res->fetch(\PDO::FETCH_ASSOC);
            }

            return false;
        }	

        public function read(){
            $sql = "SELECT curso.id_curso, curso.nome, curso.codigo, funcionario.nome AS coordenador, curso.duracao FROM curso
            JOIN funcionario ON curso.coordenador = funcionario.id_funcionario
            ";
            $res = Connect::getConn()->query($sql);
            $faculdade = $res->rowCount()>0 ? $res->fetchAll(PDO::FETCH_ASSOC) : [];
            return $faculdade;
        }

        public function delete(int $id){
            $sql = "DELETE FROM curso WHERE id_curso = ?";
            $res = Connect::getConn()->prepare($sql);
            $res->bindParam(1, $id);
            $res->execute();
        }

        public function getById(int $id){
            $sql = "SELECT * FROM curso WHERE id_curso = $id";
            $res = Connect::getConn()->query($sql);
            $curso = $res->rowCount()>0 ? $res->fetch() : [];
            return $curso;
        }
    }