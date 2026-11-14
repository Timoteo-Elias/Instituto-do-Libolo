<?php
    namespace Model;

    class Curso
    {
        private int $id;
        private string $codigo;
        private string $nome;
        private int $duracao;
        private ?int $coordenador;

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

        //decano
        public function getCoordenador(): int
        {
            return $this->coordenador;
        }
        public function setCoordenador(int $coordenador): void
        {
            $this->coordenador = $coordenador;
        }

        //vice_decano_academica;
        public function getDuracao(): int
        {
            return $this->duracao;
        }
        public function setDuracao(int $duracao): void
        {
            $this->duracao = $duracao;
        }

    }