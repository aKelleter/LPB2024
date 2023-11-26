<?php

  /**
   * Fonction de debugging destinée à afficher le contenu de tableaux
   */
  function DEBUGDisplayArray($arr)
  {   
    if(!empty($arr))
    {
      $string = null;
      if(isset($arr))
      {
        echo'<pre><code>';
        print_r($arr);
        echo'</pre></code>';
      }          
    }else
      return false;       
  }


  /**
   * Fonction d'identification du bloc notes
   * 
   * @param : String : $login = login de l'utilisateur
   * @param : String : $password = mot de passe de l'utilisateur
   * @param : Array : $user = Tableau avec les données reçues de l'utilisateur
   * @return : Boolean : Status de la fonction
   */
  function identificationUser($login, $passwd, $user)
  {
    
    $status = false;
    
    if($login == $user['login'])
    {
        if($passwd == $user['passwd'])
        {
            if($user['status'] === 1)
            {
                $status = true;
            }
        }           
    }  
      
    return $status;

  }

  /**
   * Fonction d'identification du bloc notes
   * 
   * @param : String : $email = email de l'utilisateur
   * @param : String : $password = mot de passe de l'utilisateur
   * @return : Boolean : Status de la fonction (true ou false)
   */
  function identificationUserDB($email, $passwd)
  {
        
    try 
    {

      // Instanciation d'une connexion à la base de données
      $con = new PDO('mysql:host='.APP_DB_HOST.';dbname='.APP_DB_NAME, APP_DB_LOGIN, APP_DB_PASSWD, array( 
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',       
       /*PDO::ATTR_PERSISTENT => true)*/
       )); 

      // Déclarations et initialisations des variables
      $table = 'user';    
      $status = false;  

      // Préparation de la requête
      $q = array('email' => $email);
      $sql = "SELECT mdp FROM $table WHERE email = :email";
      $req = $con->prepare($sql);

      // Exécution de la requête
      $req->execute($q);

      // Traitement du résultat de la requête
      $mdp = @$req->fetch()[0];

      if($mdp == $passwd)
        $status = true;

      // Fermeture de la connexion
      $con = null;
      $req = null;
      
      // Retour du résulat de la fonction
      return $status;

    } catch (PDOException $e) {
          if(APP_DEBUG)
              print "Erreur !: " . $e->getMessage() . "<br/>";
          else
              print "Erreur : L'application a rencontré un problème lors de la connexion à la base de données";
          die();
    }
     
      
}

/**
 * Chargement des notes de la table notes
 * En paramètre $private si il est initialisé sur "true" retourne les notes privées,
 * si il est initialisé sur "false" retourne les notes publiques
 */
function selectNotesDB(bool $private)
{
    try 
    {

      // Instanciation d'une connexion à la base de données
      $con = new PDO('mysql:host='.APP_DB_HOST.';dbname='.APP_DB_NAME, APP_DB_LOGIN, APP_DB_PASSWD, array( 
       PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',       
      /*PDO::ATTR_PERSISTENT => true)*/
      ));  

      // Déclarations et initialisations des variables
      $table = 'notes';    
      
      // Préparation de la requête
      $q = array('private' => (int) $private);
      $sql = "SELECT * FROM $table WHERE private = :private";
      $req = $con->prepare($sql);

      // Exécution de la requête
      $req->execute($q);

      // Traitement du résultat de la requête
      $notes = $req->fetchall();

      // Fermeture de la connexion
      $con = null;
      $req = null;
      
      // Retour du résulat de la fonction
      return $notes;

    } catch (PDOException $e) {
          if(APP_DEBUG)
              print "Erreur !: " . $e->getMessage() . "<br/>";
          else
              print "Erreur : L'application a rencontré un problème lors de la connexion à la base de données";
          die();
    }
}


  /**
   * Fonction d'affichage de notes au format HTML sous la forme d'une liste
   */
  function HTMLAfficheNotesListe($notes)
  {
    
    $html = null;
    /*
      <ul>
        <li>Titre : blabla - Date :  blabla - Note : blabla<li>
        <li>Titre : blabla - Date :  blabla - Note : blabla<li>
        <li>Titre : blabla - Date :  blabla - Note : blabla<li>
        ...
      </ul>
    */
    $html .= "<ul>";
    foreach($notes as $note)
    {
        $html .= '<li>';       
        $html .= '<strong>'.$note["titre"] . '</strong> - ';
        $html .=  '<em>' . $note["date"] . '</em> : ';
        $html .=  $note["contenu"];
        $html .= '</li>';
    }
    $html .= "</ul>";

    return $html;
  }

  
  /**
   * Fonction d'affichage de notes au format HTML sous la forme d'un tableau
   */
  function HTMLAfficheNotesTableau($notes)
  {
    
    $html = null;
    
    $html .= '<table class="u-full-width">';
    $html .= '<thead>';
    $html .= '<thead>';
    $html .= '<tr>';
    $html .= '<th>Titre</th>';
    $html .= '<th>Date</th>';
    $html .= '<th>Note</th>';
    $html .= '</tr>';
    $html .= '</thead>';
    $html .= '<tbody>';

    foreach($notes as $note)
    {
        $html .= '<tr>';       
        $html .= '<td><strong>'.$note["titre"] . '</strong></td>';
        $html .= '<td>' . $note["date"] . '</td>';
        $html .= '<td>' .$note["contenu"] . '</td>';
        $html .= '</tr>';
    }
    
    $html .= '</tbody>';
    $html .= "</table>";

    return $html;
  }


  /**
   * Fonction qui retourne le code HTML du menu 
   */
  function HTMLMenu()
  {
    $string = null;

    $string .= '
      <div id="navigation" class="navigation" >
        <span class="brand">' . APP_TITLE . '</span>
        <span class= "nav-item"><a class="item" href="public.php">Notes Publiques</a></span>';
      
        //<span class= "nav-item"><a href="index.php">Sign-In</a></span>';
        if($_SESSION['IDENTIFY'] === 1) 
          $string .='          
          <span class= "nav-item"><a class="item" href="private.php">Notes Privées</a></span>
          <span class= "nav-item u-pull-right"><a class="sign-out"href="logoff.php">Sign-Out : '. strtoupper($_SESSION['login']) . '</a></span>         
          ';           
        else
          $string .='
          <span class= "nav-item u-pull-right"><a class="item" href="index.php">Sign-In</a></span>          
          ';        

    $string .= '</div>';


    return $string;
  }

  /**
   * Fonction qui retourne le code HTML du Footer
   */
  function HTMLFooter()
  {
    
    $string = "";

    $string .= '
    <hr class="lpb-mt-10">
    <div class="lpb-text-center lpb-mb-10">' . APP_TITLE . ' - ' . APP_YEAR . ' - ' . APP_VER . ' - ' . APP_UPD . '</div>
    ';
    //DEBUG//DEBUGDisplayArray($_SESSION);
    return $string;

  }

  function HTMLMenuNotes($file)
  {
    $string = "";
    
    $string .= '
      <div class="menu-notes">
        <span><a href="'.$file.'?disp=list" title="Afficher sous la forme d\'une liste"><img class="ico-note" src="images/ico-list.png" alt="icône liste" width="24"></a></span>
        <span><a href="'.$file.'?disp=tab" title="Afficher sous la forme d\'un tableau"><img class="ico-note" src="images/ico-tab.png" alt="icône tableau" width="24"></a></span>
      </div>
    ';
    return $string;
  }   