<?php

    const APP_UPDATE = '28/09/2023 15:20';
    const APP_VERSION = 'v1.0.4';
    const APP_YEAR = '2024';
        
    function displayFooter($year, $date, $version)
    {
        $string = '';
        $string .= "LPB $year - Updated $date - $version";
        return $string;
    }
  