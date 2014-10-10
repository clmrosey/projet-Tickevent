 <?php
/*  //////NCIENNE VERSION ////////
$resultats = "";

if(isset($_POST['query'])) && !empty($_POST['query'])
{
    $query = preg_replace("#[^a-zA-Z ?0-9]#i", "", $_POST['query']);

    if($_POST['filtre']== "Site entier")

    else if($_POST['filtre'] == "blog")
    {
        $sql = "SELECT id, blog_title AS title FROM blog WHERE blog_title LIKE ? OR blog_content LIKE"
    }

    else if ($_POST['filtre'] == "page")
    {
        $sql = "SELECT id,page_title AS title FROM page WHERE page_title LIKE ? OR page_content LIKE"
    }
}*/
 
 ////////////// Version Clem M//////////////
 
 /*
    include(__SITE_PATH . '/Model/index.php');
    include(__SITE_PATH . '/Model/recherche.php');
    
    new INDEX();
    $rech = new RECHERCHE();
    $verif = $rech->rechercher($_POST['recherche']);
    
   if($verif == 1){
       include(__SITE_PATH . '/View/index.php');  
   }else{
       include(__SITE_PATH . '/View/error.php');
   }        
   */
 /*
    public function rechercher($recherche)
    {
        $con = CONNECT_DB::getInstance();
        $reponse = $con->query('SELECT IMAGE,TITRE,PRIX,DESCRIPTION FROM Articles WHERE TITRE ="'.$recherche.'" ');
        
        $index = 0;
        $auth = 0;
        
        while ($donnees = $reponse->fetch())
    {

        $GLOBALS['catalogue'][$index] = $donnees['IMAGE']; // format /img/nom.jpg
        $index++;  
        $GLOBALS['catalogue'][$index] = $donnees['TITRE']; 
        $index++;
        $GLOBALS['catalogue'][$index] = $donnees['PRIX']; // format /img/nom.jpg
        $index++;  
        $GLOBALS['catalogue'][$index] = $donnees['DESCRIPTION']; 
        $index++; 
        $auth =1;
        
        
    }
    $reponse->closeCursor();
    
    return $auth;
    
}
    }

*/
 
 
 
?>