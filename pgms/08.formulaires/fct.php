<?php
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
