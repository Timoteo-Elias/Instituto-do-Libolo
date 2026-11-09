<?php
    require_once __DIR__ . '/../../../Config/config.php';
    use Model\Faculdade;

    class FaculdadeDao{
        public static function getCod() : string
        {
            try {

                $sql = "SELECT MAX(id_faculdade) as max_id FROM faculdade";
                $stmt = Connect::getConn()->query($sql);
                $stmt->execute();
                $res = $stmt->fetch(PDO::FETCH_ASSOC);

                $next = ($res['max_id'] ?? 0) + 1;
                return 'FD-' . str_pad($next, 4, '0', STR_PAD_LEFT);
            } catch (PDOException $e){
                return 'FD-' . '0001';
            }
        }

        public function create(Faculdade $faculdade) {
            try {
                $sql = "INSERT INTO faculdade (faculdade, codigo, data_abertura, decano, vice_decano_academica, vice_decano_cientifica) VALUES (?, ?, ?, ?, ?, ?)";
                $res = Connect::getConn()->prepare($sql);
                return $res->execute([
                    $faculdade->getFaculdade(),
                    FaculdadeDao::getCod(),
                    $faculdade->getDataDeAbertura(),
                    $faculdade->getDecano(),
                    $faculdade->getViceDecanoAcademica(),
                    $faculdade->getViceDecanoCientifica(),
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
            $sql = "SELECT * FROM funcionario WHERE codigo = ?";
            $res = Connect::getConn()->prepare($sql);
            $res->bindValue(1, $codigo);
            $res->execute();

            if ($res->rowCount() > 0) {
                return $res->fetch(\PDO::FETCH_ASSOC);
            }

            return false; // Retorna false se não encontrar nenhum e-mail
        }	

        public function read(){
            $sql = "SELECT f.id_faculdade,
                f.faculdade, f.codigo, f.data_abertura,
                d.nome AS decano, 
                vda.nome AS vice_decano_academica, 
                vdc.nome AS vice_decano_cientifica FROM faculdade f
            JOIN funcionario d ON f.decano = d.id_funcionario
            JOIN funcionario vda ON f.vice_decano_academica = vda.id_funcionario
            JOIN funcionario vdc ON f.vice_decano_cientifica = vdc.id_funcionario
            ";
            $res = Connect::getConn()->query($sql);
            $faculdade = $res->rowCount()>0 ? $res->fetchAll(PDO::FETCH_ASSOC) : [];
            return $faculdade;
        }

        public function delete(int $id){
            $sql = "DELETE FROM faculdade WHERE id_faculdade = ?";
            $res = Connect::getConn()->prepare($sql);
            $res->bindParam(1, $id);
            $res->execute();
        }

        public function getById(int $id){
            $sql = "SELECT * FROM faculdade WHERE id_faculdade = $id";
            $res = Connect::getConn()->query($sql);
            $faculdade = $res->rowCount()>0 ? $res->fetch() : [];
            return $faculdade;
        }
    }