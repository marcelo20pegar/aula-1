<?php 
Class Carro{
        private $modelo;
        private $ano;
        private $cor;  
        private $documentacao; 
        private $quilometragem;
        private $km1; 
        private $km2; 
        private $somaquilometragem;

        public function getModelo(){
            return $this->modelo;
        }

        public function setModelo($modelo){
            $this->modelo = $modelo;
        }
        public function getAno(){
            return $this->ano;
        }

        public function setAno($ano){
            $this->ano = $ano;
        }
        public function getCor(){
            return $this->cor;
        }

        public function setCor($cor){
            $this->cor = $cor;
        }
        public function getDocumentacao(){
            return $this->documentacao;
        }

        public function setDocumentacao($documentacao){
            $this->documentacao = $documentacao;
        }
        public function getQuiometragem(){
            return $this->quilometragem;
        }

        public function setQuilometragem($quilometragem){
            $this->quilometragem = $quilometragem;
        }
        public function getKm1(){
            return $this->km1;
        }

        public function setKm1($km1){
            $this->km1 = $km1;
        }   
            public function getKm2(){
                return $this->km2;
            }
    
            public function setKm2($km2){
                $this->km2 = $km2;
            }
        
        public function getSomaquilometragem(){
            return $this->somaquilometragem;
        }

        public function setSomaquilometragem($somaquilometragem){
            $this->somaquilometragem = $somaquilometragem;
        }
        function carroModelo(){
            echo "<br>O carro  do modelo {$this->modelo}, do ano {$this->ano}, está em ótimo estado!!";    
        } 

        function carroCor(){
            echo "O carro de cor {$this->cor} está com a documentação {$this->documentacao}!";
        }

        function calculo(){
            $calculo = ($this->km1 + $this->km2)/2;
            echo "Média: ".$calculo;

        }

    }

        ?>