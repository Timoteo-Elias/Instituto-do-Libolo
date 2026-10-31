<?php
    class Connect{
        private static PDO $conn;

        /**
         * @return PDO
         */
        public static function getConn()
        {
            if (!isset(self::$conn)) {

                try {
                    self::$conn = new PDO(
                        "mysql:host=localhost;dbname=isp-libolo;charset=utf8mb4",
                        "dev",
                        ""
                    );
                    self::$conn->setAttribute(
                        PDO::ATTR_ERRMODE,
                        PDO::ERRMODE_EXCEPTION
                    );

                } catch (PDOException $e) {
                    die("Erro ao conectar ao banco de dados: " . $e->getMessage());
                }
            }
            return self::$conn;
        }
    }