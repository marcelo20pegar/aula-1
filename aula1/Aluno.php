<?php
    class Aluno{
        public $nome;
        public $turma;
        private $idade;
        private $nota1;
        private $nota2;

       public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getTurma(){
            return $this->turma;
        }

        public function setTurma($turma){
            $this->turma = $turma;
        }

        public function getIdade(){
            return $this->idade;
        }

        public function setIdade($idade){
            $this->idade = $idade;
        }

        public function getNota1(){
            return $this->nota1;
        }

        public function setNota1($nota1){
            $this->nota1 = $nota1;
        }

        public function getNota2(){
            return $this->nota2;
        }

        public function setNota2($nota2){
            $this->nota2 = $nota2;
        }

        function fazerProva(){
            echo "<br>O aluno(a) {$this->nome} esta fazendo prova na {$this->turma}!!";    
        } 

        function intervalo(){
            echo "O aluno {$this->nome} esta no intervalo!";
        }

        function calculo(){
            $calculo = ($this->nota1 + $this->nota2)/2;
            echo "Média: ".$calculo;

        }

    }

?>