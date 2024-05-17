<?php 

    require '../../Private/php/conexao.php';
    require '../../Private/php/consulta.php';

    class Autentication {
        
        public function __construct() {
            $conexao = new Conection();
            $consulta = new Consulta($conexao);
            //$consulta->read();
            $resultado = $consulta->read();

            echo ("<pre>");
            print_r($resultado);
            echo ("</pre>");
            echo ("<hr>");

        }

    }

    $autentication = new Autentication();

?>