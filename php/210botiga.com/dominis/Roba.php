<?php

class Roba
{
    private $id;
    private $nom;
    private $preu;
    private $descripcio;

    private $default =
        [
        "id" => -1,
        "nom" => "nom",
        "preu" => -1,
        "descripcio" => "descripcio"
        ];


    public function __construct( $roba )
    {
        if (count($roba) == 0) $roba = $this -> default;
        $this ->id = $roba["id"];
        $this->nom = $roba["nom"];
        $this->preu = $roba["preu"];
        $this->descripcio = $roba["descripcio"];
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPreu()
    {
        return $this->preu;
    }

    /**
     * @param mixed $preu
     */
    public function setPreu($preu)
    {
        $this->preu = $preu;
    }

    /**
     * @return mixed
     */
    public function getDescripcio()
    {
        return $this->descripcio;
    }

    /**
     * @param mixed $descripcio
     */
    public function setDescripcio($descripcio)
    {
        $this->descripcio = $descripcio;
    }

}