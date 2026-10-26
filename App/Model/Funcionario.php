<?php
    namespace Model;

    class Funcionario
    {
        private int $id;
        private string $codigo;
        private string $nome;
        private string $nif;
        private string $genero;
        private string $data_nascimento;
        private string $formacao;
        private string $nivel_formacao;
        private string $funcao;
        private string $email;
        private string $telefone;
        private string $imagem;

        // ID
        public function getId():int
        {
            return $this->id;
        }

        public function setId(int $id):void
        {
            $this->id = $id;
        }

        // NOME
        public function getNome(): string
        {
            return $this->nome;
        }

        public function setNome(string $nome): void
        {
            $this->nome = $nome;
        }  
        
        public function getCodigo(): string
        {
            return $this->codigo;
        }

        public function setCodigo(string $codigo): void
        {
            $this->codigo = $codigo;
        }

        public function getNif(): string
        {
            return $this->nif;
        }

        public function setNif(string $nif): void
        {
            $this->nif = $nif;
        }

        public function getGenero(): string
        {
            return $this->genero;
        }

        public function setGenero(string $genero): void
        {
            $this->genero = $genero;
        }

        public function getDataNascimento(): string
        {
            return $this->data_nascimento;
        }

        public function setDataNascimento(string $data_nascimento): void
        {
            $this->data_nascimento = $data_nascimento;
        }

        public function getFormacao(): string
        {
            return $this->formacao;
        }

        public function setFormacao(string $formacao): void
        {
            $this->formacao = $formacao;
        }

        public function getNivelFormacao(): string
        {
            return $this->nivel_formacao;
        }

        public function setNivelFormacao(string $nivel_formacao): void
        {
            $this->nivel_formacao = $nivel_formacao;
        }

        public function getFuncao(): string
        {
            return $this->funcao;
        }

        public function setFuncao(string $funcao): void
        {
            $this->funcao = $funcao;
        }

        public function getEmail(): string
        {
            return $this->email;
        }

        public function setEmail(string $email): void
        {
            $this->email = $email;
        }

        public function getTelefone(): string
        {
            return $this->telefone;
        }

        public function setTelefone(string $telefone): void
        {
            $this->telefone = $telefone;
        }   

        public function getImagem(): string
        {
            return $this->imagem;
        }

        public function setImagem(string $imagem): void
        {
            $this->imagem = $imagem;
        }

    }