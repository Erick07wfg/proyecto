<?php
session_start();
class Conectar{
    protected $dbh;

    protected function conexion(){
        try{
            $conectar = $this->dbh = new PDO("mysql:host=localhost;dbname=proyectoc","root","ISA1902_");
            return $conectar;
        }
        catch(PDOException $e){
            print "!ERROR BD!" . $e->getMessage(). "<br/>";
            die();
        }
    }

    public function set_name(){
        return $this->dbh->query("SET NAMES 'utf8'");
    }

    public function ruta(){
        return "http://localhost/login/";
    }
}
?>
