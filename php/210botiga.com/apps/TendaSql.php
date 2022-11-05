<?php
require_once  __DIR__."/../dominis/Roba.php";
class TendaSql
{

    private $db;
    public function __construct( $para )
    {
        $arrOptions = array(
            PDO::ATTR_EMULATE_PREPARES => FALSE,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
        );
        $dbType = $para["type"];
        $sName = $para["sName"];
        $dbName = $para["dbName"];
        $conf = "$dbType:host=$sName;dbname=$dbName";
        try {
            $this->db = new PDO( $conf,$para["uName"], $para["pass"],$arrOptions);
        }catch ( PDOException $e){
            echo "Error no s'ha pogut conectar a la base de dades";
        }

    }

    private function query($query , $prep=array() ) : PDOStatement{
        $statement = $this -> db -> prepare($query);
        if(!$statement) throw new PDOException();
        $statement -> execute($prep);
        return $statement;

    }

    public function llistaProductes() : array {

        $query = "SELECT * FROM Estoc";
        $llistaRoba = array();
        try{
        $statement = self::query($query);
        $result =  $statement -> fetchAll( PDO::FETCH_ASSOC );
        foreach ($result as $roba){
            $llistaRoba[] = new Roba($roba);
        }
        $statement -> closeCursor();
        }catch (PDOException $e){
            echo "No s'ha pogud fer la consulta";
        } finally {
            return $llistaRoba;
        }

    }
    public function producte( $id ) : Roba{
        $query = "SELECT * FROM Estoc WHERE id = :id";
        $prep = array("id" => $id);
        try {
            $statement = self::query($query, $prep);
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            $roba = new Roba($result[0]);
            $statement->closeCursor();
        }catch (PDOException $e){
            $roba = new Roba(array());
            echo "No s'ha pogud fer la consulta";
        } finally {
            return $roba;
        }

    }
    public function addProducte( $nom , $preu , $descripcio ,$foto) {
        $para = array( "nom" => $nom, "preu" => $preu, "descripcio" => $descripcio );
        $query = "INSERT INTO Estoc (nom,preu,descripcio) VALUES (:nom,:preu,:descripcio)";
        $this -> db ->beginTransaction();
        $exect = false;
        try {
            self::query($query, $para);
            $id = $this->db->lastInsertId();
            if(! $this->afegirFoto($id,$foto)) {
                throw  new Exception("Foto no incluida");
            }
            $this->db->commit();
            $exect = true;
        } catch (PDOException $e) {
            $this->db->rollBack();
        } finally {
            return $exect;
        }


    }
    public function afegirFoto($id,$foto): bool{
        $ruta = __DIR__."/".$foto["imagen"]["name"];
        if(!move_uploaded_file( $_FILES["imagen"]["tmp_name"],$ruta)) return false;
        $extensio = pathinfo($foto["imagen"]["name"])["extension"];
        rename($ruta,__DIR__."/../img/$id.$extensio");
        return true;
    }
    public function close () { $this ->db = null; }

}