<?php
    require_once __DIR__ . '/../../../Config/config.php';
    use Model\Funcionario;

    class FuncionarioDao{
        public static function getCod() : string
        {
            try {

                $sql = "SELECT MAX(id_funcionario) as max_id FROM funcionario";
                $stmt = Connect::getConn()->query($sql);
                $stmt->execute();
                $res = $stmt->fetch(PDO::FETCH_ASSOC);

                $next = ($res['max_id'] ?? 0) + 1;
                return 'FU-' . str_pad($next, 4, '0', STR_PAD_LEFT);
            } catch (PDOException $e){
                return 'FU-' . '0001';
            }
        }

        public function create(Funcionario $funcionario) {
            try {
                $sql = "INSERT INTO funcionario (codigo, nome, nif, genero, data_nascimento, formacao, nivel, funcao, imagem, email, telefone, usuario) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $res = Connect::getConn()->prepare($sql);
                return $res->execute([
                    FuncionarioDao::getCod(),
                    $funcionario->getNome(),
                    $funcionario->getNif(),
                    $funcionario->getGenero(),
                    $funcionario->getDataNascimento(),
                    $funcionario->getFormacao(),
                    $funcionario->getNivelFormacao(),
                    $funcionario->getFuncao(),
                    $funcionario->getImagem(),
                    $funcionario->getEmail(),
                    $funcionario->getTelefone(),
                    $funcionario->getUsuario()
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
       
        public function findByEmail(string $email) {
            $sql = "SELECT * FROM funcionario WHERE email = ?";
            $res = Connect::getConn()->prepare($sql);
            $res->bindValue(1, $email);
            $res->execute();

            if ($res->rowCount() > 0) {
                return $res->fetch(\PDO::FETCH_ASSOC);
            }

            return false; // Retorna false se não encontrar nenhum e-mail
        }

        public function read(){
            $sql = "SELECT * FROM funcionario";
            $res = Connect::getConn()->query($sql);
            $funcionario = $res->rowCount()>0 ? $res->fetchAll(PDO::FETCH_ASSOC) : [];
            return $funcionario;
        }

        public function delete(int $id){
            $sql = "DELETE FROM funcionario WHERE id_funcionario = ?";
            $res = Connect::getConn()->prepare($sql);
            $res->bindParam(1, $id);
            $res->execute();
        }

        public function getById(int $id){
            $sql = "SELECT * FROM funcionario WHERE id_funcionario = $id";
            $res = Connect::getConn()->query($sql);
            $funcionario = $res->rowCount()>0 ? $res->fetch() : [];
            return $funcionario;
        }
    }