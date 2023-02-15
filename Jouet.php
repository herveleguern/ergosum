<?php
class Jouet
{
    private $numero;
    private $libelle;
    private $tranche; //objet de la classe Tranche
    private $stock;
    function __construct($numero, $libelle, $tranche, $stock)
    {
        $this->numero = $numero;
        $this->libelle = $libelle;
        $this->tranche = $tranche;
        $this->stock = $stock;
    }
    function getNumero()
    {
        return $this->numero;
    }
    function getLibelle()
    {
        return $this->libelle;
    }
    function getTranche()
    {
        return $this->tranche;
    }
}
