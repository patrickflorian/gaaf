<?php
/**
 * document styler class
 * @authors Noumbissi (noumbissipatrick@gmail.com)
 * @date    2018-06-29 13:31:35
 * @version 0.0.1
 */

class Document  {
    const APP_TITLE = 'GAAF';
    function __construct(){
        
    }
    public static function setdocumentTitle($new_title){
        echo "<script> document.title=\"". Document::APP_TITLE." | ". $new_title."\"; </script>";
    }
}