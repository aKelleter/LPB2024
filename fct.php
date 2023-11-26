<?php

/**
* Returns the HTML code of footer of the page
* 
* @param string $year	Current site Year 
* @param string $date	Date of the last update	
* @param string $version	Version of the site	
* @return string	HTML code of the footer
*/
function getHtmlFooter($year, $date, $version, $path = '')
{
    $string = '';
    $string .= "LPB $year - Updated $date - $version -".'<a href="https://github.com/aKelleter/LPB2024"><img src="'.$path.'assets/img/github-mark.svg"  alt="LPB20214 Github Repository" class="lpb-github"></a>';
    return $string;
}

/**
 * Returns the HTML code of the application's main menu
 * 
 * @param string $path	Path of the site
 * @param string $active	Active menu
 * @return string	HTML code of the main menu
 */
function getHtmlMainMenu($path, $active = '', $tools = '')
{
    $string = '<nav class="navbar navbar-expand-lg bg-body-tertiary menu">';
    $string .= '    <div class="container-fluid">';
    $string .= '    <a class="navbar-brand" href="'.$path.'index.php"><i class="bi bi-house"></i></a>';
    $string .= '    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>';
    $string .= '    <div class="collapse navbar-collapse" id="navbarNav">';
    $string .= '    <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-center">';    
    $string .= '<li class="nav-item dropdown">';
        $string .= '<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Sections </a>';
        $string .= '<ul class="dropdown-menu">';
            ($active == 'php') ? $string .= '<li><a class="dropdown-item active" href="'.$path.'courses/php">Php</a></li>': $string .= '<li><a class="dropdown-item" href="'.$path.'courses/php">Php</a></li>';
            ($active == 'javascript') ? $string .= '<li><a class="dropdown-item active" href="'.$path.'courses/javascript">Javascript</a></li>': $string .= '<li><a class="dropdown-item" href="'.$path.'courses/javascript">Javascript</a></li>';
            $string .= '<li><hr class="dropdown-divider"></li>';
            ($active == 'tests') ? $string .= '<li><a class="dropdown-item active" href="'.$path.'courses/tests">Tests</a></li>': $string .= '<li><a class="dropdown-item" href="'.$path.'courses/tests">Tests</a></li>';
            $string .= '<li><a class="dropdown-item" href="'.$path.'pgms">PGM\'s</a></li>';         
            $string .= '<li><a class="dropdown-item" href="'.$path.'exos">EXO\'s</a></li>';         
        $string .= '</ul>';
    $string .= '</li>'; 
    ($active == 'courses') ? $string .= '<li class="nav-item"> <a class="nav-link" href="'.$tools.'/index.php"><i class="bi bi-arrow-counterclockwise"></i> back</a> </li>' : $string .= '';      
    $string .= '</ul>';
    $string .= '<div class="d-flex" > <span class="menu">'.strtoupper($active).'</span> </div>';
    $string .= '</div></div></nav>';
    
    return $string;
}

/** 
 * Returns the LIST (array) of courses
 * 
 * @return array	The list of courses
 */
function listCourses() {
    
    $donnees = null;
    $courses = null; 
    $titre = null;
    $id = null;           
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
 * Returns the LIST (array) of program
 * 
 * @return array  of the list of program
 */
function listProgrammes() {
    
    $compteur = 0;
    $pgms = array();
    $dossiers = glob('*');

    // Classement des dossiers afin qu'ils soient affichés par ordre alphabétique / croissant
    asort($dossiers); 
    
    // Lister les dossiers
    foreach($dossiers as $repertoire) 
    {
        // Vérifier si c'est un dossier que l'on traite et non un fichier
        if(is_dir($repertoire)) 
        {
      
            $pgms[$compteur]['id'] = $repertoire;
            $pgms[$compteur]['title'] = $repertoire; 

            $compteur++; 
        }
    }
    
    return $pgms;    
}

/**
 * Returns the HTML code of the ordered list HTML of courses
 *  
 * @param array $courses	List of courses
 * @param string $courseType	Type of course
 * @return string	HTML code of the list of courses
 */
function getHtmlCoursesList($courses, $courseType)
{
    $string = '';
  
    if(!empty($courses))
    {
        $string .= '<ol>';
        foreach($courses as $course)
        {
            $string .= '<li><a href="../course.php?code='.$course['id'].'&type='.$courseType.'" class="link-script">'.$course['title'].'</a></li>';
        } 
        $string .= '</ol>';   
    }else {
        $string .= '<div class="lpb-msg">No course available... patience :)</div>';
    }
    
    
    return $string;
}

/**
 * Returns the HTML code of the ordered list HTML of program
 * 
 * @param array $pgms	List of program
 * @return string	HTML code of the list of program
 */
function getHtmlPgmList($pgms)
{
    $string = '';
  
    if(!empty($pgms))
    {
        $string .= '<ol>';
        foreach($pgms as $pgm)
        {
            if($pgm['title'] != '_src')
                $string .= '<li><a href="'.$pgm['id'].'" class="link-script">'.$pgm['title'].'</a></li>';
        } 
        $string .= '</ol>';   
    }else {
        $string .= '<div class="lpb-msg">No program available... work! :)</div>';
    }
    
    
    return $string;
}

/**
* Génère et retourne un token
* 
*/
function LPBgetToken()
{
    return sha1(uniqid(rand()));
}

/**
*  Replaces accented characters in a string
*
* @param string $str
* @return string 
*/
function LPBremoveAccents($str)
{
    $a = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð',
        'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'ß', 'à', 'á', 'â', 'ã',
        'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ',
        'ö', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', 'Ā', 'ā', 'Ă', 'ă', 'Ą', 'ą', 'Ć', 'ć', 'Ĉ',
        'ĉ', 'Ċ', 'ċ', 'Č', 'č', 'Ď', 'ď', 'Đ', 'đ', 'Ē', 'ē', 'Ĕ', 'ĕ', 'Ė', 'ė', 'Ę', 'ę',
        'Ě', 'ě', 'Ĝ', 'ĝ', 'Ğ', 'ğ', 'Ġ', 'ġ', 'Ģ', 'ģ', 'Ĥ', 'ĥ', 'Ħ', 'ħ', 'Ĩ', 'ĩ', 'Ī', 'ī',
        'Ĭ', 'ĭ', 'Į', 'į', 'İ', 'ı', 'Ĳ', 'ĳ', 'Ĵ', 'ĵ', 'Ķ', 'ķ', 'Ĺ', 'ĺ', 'Ļ', 'ļ', 'Ľ', 'ľ',
        'Ŀ', 'ŀ', 'Ł', 'ł', 'Ń', 'ń', 'Ņ', 'ņ', 'Ň', 'ň', 'ŉ', 'Ō', 'ō', 'Ŏ', 'ŏ', 'Ő', 'ő', 'Œ',
        'œ', 'Ŕ', 'ŕ', 'Ŗ', 'ŗ', 'Ř', 'ř', 'Ś', 'ś', 'Ŝ', 'ŝ', 'Ş', 'ş', 'Š', 'š', 'Ţ', 'ţ', 'Ť', 
        'ť', 'Ŧ', 'ŧ', 'Ũ', 'ũ', 'Ū', 'ū', 'Ŭ', 'ŭ', 'Ů', 'ů', 'Ű', 'ű', 'Ų', 'ų', 'Ŵ', 'ŵ', 'Ŷ', 
        'ŷ', 'Ÿ', 'Ź', 'ź', 'Ż', 'ż', 'Ž', 'ž', 'ſ', 'ƒ', 'Ơ', 'ơ', 'Ư', 'ư', 'Ǎ', 'ǎ', 'Ǐ', 'ǐ',
        'Ǒ', 'ǒ', 'Ǔ', 'ǔ', 'Ǖ', 'ǖ', 'Ǘ', 'ǘ', 'Ǚ', 'ǚ', 'Ǜ', 'ǜ', 'Ǻ', 'ǻ', 'Ǽ', 'ǽ', 'Ǿ', 'ǿ');

    $b = array('A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O',
        'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 's', 'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c',
        'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u',
        'y', 'y', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'D',
        'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g',
        'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K',
        'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n', 'O', 'o',
        'O', 'o', 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'S',
        's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W',
        'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i',
        'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'A', 'a', 'AE', 'ae', 'O', 'o');

    return str_replace($a, $b, $str);
}

/**
* Returns a character string in the form of a slug
*
* @param string $text
* @return string
*/
function LPBslugify($text)
{
    // replace non letter or digits by -
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);

    // remove accents
    $text = LPBremoveAccents($text);

    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

    // trim
    $text = trim($text, '-');

    // remove duplicate -
    $text = preg_replace('~-+~', '-', $text);

    // lowercase
    $text = strtolower($text);

    if (empty($text))
    {
        return 'na-'.LPBgetToken();
    }

    return $text;
}

/**
 * Display a HTML separator line with a character or a string
 */
function sep($sep = '-'){
    $string = '<br>';

    for($i = 0 ; $i <= 30 ; $i++){
         $string .= $sep;
    }

    echo $string .'<br>';
}

/**
 * Display a HTML <br>  
 */
function br()
{
    echo '<br>';
}

/**
 * Display the line number of the code
 * 
 * @return void 
 */
function ln($line)
{
    return 'LIGNE ' . $line . ' : ' ;
}

/**
 * Display an array variable in a more readable way
 * 
 * @param mixed $array 
 * @param string $info
 * @param string $type 'PR' for print_r() or 'VD' for var_dump()
 * @return void 
 */
function disp_ar($array, $info = null, $type = 'PR'){

    if($type == 'PR')
    {
        echo '<pre>';
        echo (isset($info)?'<h4>' . $info . '</h4>':'');
        print_r($array);
        echo '</pre>';
    }elseif($type == 'VD')
    {
        echo '<pre>';
        echo (isset($info)?'<h4>' . $info . '</h4>':'');
        var_dump($array);
        echo '</pre>';
    }
    
}
