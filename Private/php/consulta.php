<?php 

    class Consulta {

        private $conexao;

        public function __construct($conexao) {
            $this->conexao = $conexao->conection();
        }

        public function read() {
            
            $query = 'select * from tb_events';
            $stmt=$this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

    }


?>