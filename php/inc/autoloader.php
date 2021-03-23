
<?php

//for all operating system (more preferrable)
spl_autoload_register(function($className){

    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    include_once '../class/' . $className . '.php';

    //include_once $_SERVER['DOCUMENT_ROOT'] . 'class/' . $className . '.php';

});


?>