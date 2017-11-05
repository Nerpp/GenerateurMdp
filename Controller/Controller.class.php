<?php
namespace Control;

require_once'module/clefAleatoire.class.php';

use Module\GenereClef;

class Controller
{

    private $_sMessageErr;
    
    private $_sLongueurChaine = '';
    
    public function getLongueurControleur(){
       return $this->_sLongueurChaine;
    }
    
    
    public function creationPassword($caracteresSpeciaux='',$longueurMdp='')
    {
        
        $genereClef = new GenereClef;
        return $genereClef->cleGenerer($caracteresSpeciaux,$longueurMdp);
        
    } 
    
}
