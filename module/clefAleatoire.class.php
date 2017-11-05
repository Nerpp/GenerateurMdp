<?php
namespace Module;

class GenereClef
{
    
//    attribut
    
    
    public function cleGenerer($caractereSpeciaux='',$longueurMdp='')
    {
        //je crée uen chaine alphabetique
    $alphabet = 'aqwzsxcderfvbgtyhnjuiklomp';
//je crée une chaine alphabetique majuscule
 $alphabet_majuscule = 'PMAQLOSZIKEDJURFYHNTGBVCXW';
//je crée une chaine numerique
    $numerique = '3578951046';
//je crée une chaine de symbole
    $symbole = '@$&%:;.!§';
//je crée un array vide qui va me servir a stocker les 3 chaines melangés
    $selection_symbole = [];
        
       
        
        if($longueurMdp <= 0){
            $longueurMdp =31;
        }

        $longueurMdp = $longueurMdp -1;
        
        if($caractereSpeciaux === 'sansCaractereSpeciaux'){
//je vais melanger les chaines  sous la forme de 1caractere_alphabetique.1caractere_numerique.1caractere_symbole
    for( $i = 0 ; $i <= 300 ; $i++){

        $selection_symbole[] .= $alphabet [mt_rand ('0', '25')];

        $selection_symbole[] .= $alphabet_majuscule[mt_rand ('0', '25')];
        
       $selection_symbole[] .= $numerique [mt_rand ('0', '9')];}

        }else{ 
            for( $i = 0 ; $i <= 300 ; $i++){
            $selection_symbole[] .= $alphabet [mt_rand ('0', '25')];

            $selection_symbole[] .= $alphabet_majuscule[mt_rand ('0', '25')];

            $selection_symbole[] .= $numerique [mt_rand ('0', '9')];
                
                $chaineSymbole = strlen($symbole)-1;
                $selection_symbole[] .= $symbole [mt_rand ('0', $chaineSymbole)];}
        
        
        }
//Pour obtenir un tableau plus aleatoire je crée un nouveau tableau
    $clef_finale = [];

//Pour obtenir la clef_finale de 16 elements ou les chaine seront melangés de facon plus aleatoire
        for( $d = 0 ; $d <= $longueurMdp; $d++){

//            $chaineFinale = strlen($selection_symbole)-1;
            $chaineFinale = strlen(implode($selection_symbole))-1;
        $clef_finale[] .= $selection_symbole [mt_rand ('0', $chaineFinale)];

    }

//Je transforme le tableau clef_finale en string
//https://secure.php.net/manual/fr/function.implode.php
    $cle = implode($clef_finale);
        
      $this->_sLongueur = strlen($cle);
        

        return $cle;
    }
}
