<?php 
require_once("conn.php");

class Departamento{
    public $last;
    public function obtenerDepartamentos(){
        $db = new DB('mysql:host=localhost;dbname=catalogos;charset=utf8mb4',"root","admin");
        $sql = 'SELECT
                    d.id_departamento as id,
                    d.nombre_departamento as departamento,
                    z.id_zona,
                    z.nombre_zona
                FROM
                    departamento d
                INNER JOIN zona z on d.id_zona=z.id_zona;';
        $data = $db->run($sql)->fetchAll();
        return $data;
    }

    public function obtenerDepartamentosPorZona($idzona){
        $db = new DB('mysql:host=localhost;dbname=catalogos;charset=utf8mb4',"root","admin");
        $sql = 'SELECT
                    d.id_departamento as id,
                    d.nombre_departamento as departamento,
                    z.id_zona,
                    z.nombre_zona
                FROM
                    departamento d
                INNER JOIN zona z on d.id_zona=z.id_zona
                WHERE
                    d.id_zona='.$idzona.';';
        $data = $db->run($sql)->fetchAll();
        return $data;
    }

    public function obtenerDepartamento($iddepto){
        $db = new DB('mysql:host=localhost;dbname=catalogos;charset=utf8mb4',"root","admin");
        $sql = 'SELECT
                    d.id_departamento as id,
                    d.nombre_departamento as departamento,
                    z.id_zona,
                    z.nombre_zona
                FROM
                    departamento d
                INNER JOIN zona z on d.id_zona=z.id_zona
                WHERE
                    d.id_departamento='.$iddepto.';';
        $data = $db->run($sql)->fetchAll();
        return $data;
    }
}
?>