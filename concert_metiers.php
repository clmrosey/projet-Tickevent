<?php
class CONCERT_METIER{
    function __construct()
    {
        
    }
    
    public function Enregistrement(){
         
        $con = CONNECT_DB::getInstance();
        $reponse = $con->query('SELECT IMAGE,TITRE FROM Articles WHERE STATUT =\'NOUVEAUTE\'');
        
        while($donnee = $reponse->fetch())
        {
            
        }
        $reponse->closeCursor();
    }
    
}
?>
