<?php

/**
* Display the footer of the page
* 
* @param string $year	Current site Year 
* @param string $date	Date of the last update	
* @param string $version	Version of the site	
* @return string	HTML code of the footer
*/
function displayFooter($year, $date, $version, $path = '')
{
    $string = '';
    $string .= "LPB $year - Updated $date - $version -".'<a href="https://github.com/aKelleter/LPB2024"><img src="'.$path.'assets/img/github-mark.svg"  alt="LPB20214 Github Repository" class="lpb-github"></a>';
    return $string;
}

/** 
 * Display the list of courses
 * 
 * @param string $path	Path of the courses
 * @return string	HTML code of the list of courses
 */
function listCourses() {
    
    $donnees = null;
    $courses = null;            
    $compteur = 0;
    $cours = array();
    $dossiers = glob('*');

    // Classement des dossiers afin qu'ils soient affichés par ordre alphabétique / croissant
    asort($dossiers); 
    
    // Lister les dossiers
    foreach($dossiers as $repertoire) 
    {
        // Vérifier si c'est un dossier que l'on traite et non un fichier
        if(is_dir($repertoire)) 
        {
            $id = $repertoire;
            
            // Lecture du titre
            if(file_exists($repertoire.'/'.'title.html'))
                $titre = file_get_contents($repertoire.'/'.'title.html');

            $courses[$compteur]['id'] = $id;
            $courses[$compteur]['title'] = $titre; 

            $compteur++; 
        }
    }
    
    return $courses;    
}

/**
 * Display the ordered list HTML of courses
 * 
 * @param array $courses	List of courses
 * @return string	HTML code of the list of courses
 */
function displayCoursesList($courses)
{
    $string = '';
  
    if(!empty($courses))
    {
        $string .= '<ol>';
        foreach($courses as $course)
        {
            $string .= '<li><a href="course.php?code='.$course['id'].'" class="link">'.$course['title'].'</a></li>';
        } 
        $string .= '</ol>';   
    }else {
        $string .= '<p class="lpb-msg">No course available... patience :)</p>';
    }
    
    
    return $string;
}