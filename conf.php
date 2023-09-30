<?php

    const APP_UPDATE = '30/09/2023 16:16';
    const APP_VERSION = 'v1.1.0';
    const APP_YEAR = '2024';
     
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
        $string .= "LPB $year - Updated $date - $version -".'<a href="https://github.com/aKelleter/LPB2024"><img src="'.$path.'github-mark.svg"  alt="LPB20214 Github Repository" class="lpb-github"></a>';
        return $string;
    }
  