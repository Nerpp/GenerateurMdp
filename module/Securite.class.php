<?php
namespace Module;

class Securite
{
//    attribut
    private $_aParametres        = array();

//    Methodes

    public function __construct(){
    }

    public function getParametres(){
        return $this->_aParametres;
    }

    public function recuperationPost()
    {
        if(isset($_POST) && count($_POST) > 0) {   // Informations contenues dans le $_POST
            foreach($_POST as $index => $valeur) {
                $this->_aParametres[$index] = $valeur;}
            return $valeur;
        }
        else if(isset($_GET) && count($_GET) > 0) {   // Informations contenues dans le $_GET
            foreach($_GET as $index => $valeur) {
                $this->_aParametres[$index] = $valeur;}
            return $valeur;
            }
    }
}