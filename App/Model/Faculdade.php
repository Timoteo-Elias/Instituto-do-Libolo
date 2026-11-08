<?php
    namespace Model;

    class Faculdade
    {
        private int $id;
        private string $codigo;
        private string $faculdade;
        private ?int $decano;
        private ?int $vice_decano_academica;
        private ?int $vice_decano_cientifica;
        private string $data_de_abertura;

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
        public function getFaculdade(): string
        {
            return $this->faculdade;
        }
        public function setFaculdade(string $faculdade): void
        {
            $this->faculdade = $faculdade;
        }

        //decano
        public function getDecano(): int
        {
            return $this->decano;
        }
        public function setDecano(int $decano): void
        {
            $this->decano = $decano;
        }

        //vice_decano_academica;
        public function getViceDecanoAcademica(): int
        {
            return $this->vice_decano_academica;
        }
        public function setViceDecanoAcademica(int $vice_decano_academica): void
        {
            $this->vice_decano_academica = $vice_decano_academica;
        }

        //vice_decano_cientifica;
        public function getViceDecanoCientifica(): int
        {
            return $this->vice_decano_cientifica;
        }
        public function setViceDecanoCientifica(int $vice_decano_cientifica): void
        {
            $this->vice_decano_cientifica = $vice_decano_cientifica;
        }

        //data_de_abertura
        public function getDataDeAbertura(): string
        {
            return $this->data_de_abertura;
        }
        public function setDataDeAbertura(string $data_de_abertura): void
        {
            $this->data_de_abertura = $data_de_abertura;
        }
    }