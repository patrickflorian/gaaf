
<?php 
 
function app_model_autoload($classe)
{

    require dirname(__FILE__)."\\".$classe.".php";
}
spl_autoload_register('action_autoload');