
<?php 
 
function app_model_autoload($classe)
{

    require dirname(__FILE__)."\\".$classe.".php";
}
spl_autoload_register('app_model_autoload');