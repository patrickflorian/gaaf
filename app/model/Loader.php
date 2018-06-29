<?php
/**
 * Description
 * @authors Noumbissi (noumbissipatrick@gmail.com   )
 * @date    2018-06-29 13:04:59
 * @version 1.0.0
 */


class Loader {
    const MODULE_APP = 'app';
    const MODULE_MODEL = 'model';
    const MODULE_AJAX = 'app/ajax';
    

    static function load($file_name,$module){
        $f = $module."/".$file_name.'.php';
        if(file_exists($f))
        {
            include_once ('autoload.php');
            include_once ($f);
            Document::setdocumentTitle(strtoupper($file_name));
        }
    }

}