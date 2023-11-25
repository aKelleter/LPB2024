<?php
/**
 * Display an array variable in a more readable way
 * 
 * @param mixed $array 
 * @param string $type 'PR' for print_r() or 'VD' for var_dump()
 * @return void 
 */
function disp_ar($array, $type = 'PR'){

    if($type == 'PR')
    {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }elseif($type == 'VD')
    {
        echo '<pre>';
        var_dump($array);
        echo '</pre>';
    }
    
}
