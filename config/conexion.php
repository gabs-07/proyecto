<?php
    // Creación de la conexión en PHP

    session_start();

    class Conectar{
        protected $dbh;

        protected function conexion(){
            try{
                $conectar = $this->dbh = new PDO("mysql:host=localhost;dbname=conectaTec", "root", "admin");
                return $conectar;
            } catch(Exception $e){
                print "Error de conexión: " . $e->getMessage() . "<br/>";
                die();
            }
        }

        public function setNames(){
            return $this->dbh->query("SET NAMES 'utf8'");
        }
        
        // Validador de la ruta
        public function ruta(){
            return "http://localhost/conectaTecDos/";
        }
    }
?>