<?php 

    class Consulta {

        private $conexao;

        public function __construct($conexao) {
            $this->conexao = $conexao->conection();
        }

        public function read() {
            
            $query = 'SELECT title, color, start, end FROM tb_events';
            $stmt=$this->conexao->prepare($query);
            $stmt->execute();
            $eventos = [];
            $results  = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($results as $result) {
                extract($result);
        
                $eventos[] = [
                    'title' => $title,
                    'color' => $color,
                    'start' => $start,
                    'end' => $end
                ];
            }

            echo json_encode($eventos);
            
        }

    }


?>