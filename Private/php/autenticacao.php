<?php 

    require '../../Private/php/conexao.php';
    require '../../Private/php/consulta.php';

    class Autentication {
        
        public function __construct() {
            $conexao = new Conection();
            $consulta = new Consulta($conexao);
            $consulta->read();

        }

    }

    $autentication = new Autentication();

?>