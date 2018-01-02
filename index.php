
<?php

spl_autoload_register('autoloader');

function autoloader($className){
    include __DIR__."/src/".str_replace("_","/", $className).".php";

}


Router::addRout('', 'Controller_Home');
Router::addRout('Hello', 'Controller_Hello');
Router::match();

