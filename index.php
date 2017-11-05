<?php
require_once 'Module/Securite.class.php';
require_once 'Controller/Controller.class.php';

use module\Securite;
use Control\Controller;

$vueCourante = 'Accueil';
$parametres = array();
$parametres['page']='';

$MDP = '';
$longueurChaine = '';


$verificationPost = new Securite();

if (!is_object($verificationPost->recuperationPost()) && !is_null($verificationPost->recuperationPost()) ) {
    $parametres = $verificationPost->getParametres();
        
}

if($parametres['page']==='envoit'){
    
    $envoitInfo = new Controller();
    $MDP = htmlentities( $envoitInfo->creationPassword(isset($parametres['sansCaractereSpeciaux'])?$parametres['sansCaractereSpeciaux']:'',
                                  $parametres['lMDP']),
                        ENT_SUBSTITUTE,'ISO-8859-15'
                        );
}
    



$fichierVue = 'vue/' . $vueCourante. '.vue.php';
if (file_exists($fichierVue)) {
  include $fichierVue;
}