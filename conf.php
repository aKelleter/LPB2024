<?php

    const APP_UPDATE = '29/09/2023 17:55';
    const APP_VERSION = 'v1.0.7';
    const APP_YEAR = '2024';
     
    /**
     * Display the footer of the page
     * 
     * @param string $year	Current site Year 
     * @param string $date	Date of the last update	
     * @param string $version	Version of the site	
     * @return string	HTML code of the footer
     */
    function displayFooter($year, $date, $version)
    {
        $string = '';
        $string .= "LPB $year - Updated $date - $version";
        return $string;
    }
  