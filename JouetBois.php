<?php
class JouetBois extends Jouet{
    private $provenanceBois;
    private static $nbInstances=0;

    public function __construct($numero, $libelle, $tranche,$stock,$provenanceBois)
    {
           parent::__construct($numero, $libelle, $tranche,$stock);
           $this->provenanceBois=$provenanceBois;
           self::$nbInstances++;
    }

    public static function getNbInstances(){
        return self::$nbInstances;
    }
}