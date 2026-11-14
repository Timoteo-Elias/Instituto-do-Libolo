<?php
    namespace Model;

    class Turma
    {
        private int $id;
        private string $nome;
        private string $codigo;
        private string $periodo;
        private int $nivel;
        private ?int $curso;
        private int $limite;

        //id
        public function getId(): int
        {
            return $this->id;
        }

        //codigo
        public function getCodigo(): string
        {
            return $this->codigo;
        }

        public function setCodigo(string $codigo): void
        {
            $this->codigo = $codigo;
        }

        //nome
        public function getNome(): string
        {
            return $this->nome;
        }
        public function setNome(string $nome): void
        {
            $this->nome = $nome;
        }
        public function getPeriodo(): string
        {
            return $this->periodo;
        }
        public function setPeriodo(string $periodo): void
        {
            $this->periodo = $periodo;
        }

        
        public function getNivel(): int
        {
            return $this->nivel;
        }
        public function setNivel(int $nivel): void
        {
            $this->nivel = $nivel;
        }

        public function getCurso(): int
        {
            return $this->curso;
        }
        public function setCurso(int $curso): void
        {
            $this->curso = $curso;
        }

        public function getLimite(): int
        {
            return $this->limite;
        }
        public function setLimite(int $limite): void
        {
            if ($limite <= 20)
            {
                $this->limite = 20;
            } else if ($limite >= 80){
                $this->limite = 80;
            } else {
                $this->limite = $limite;
            }
        }

    }