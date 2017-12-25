
<?php

spl_autoload_register('autoloader');

function autoloader($className){
    include __DIR__."/src/".$className.".php";
    include __DIR__."/src/Controller/".$className.".php";

}


Router::addRout('', 'Controller/Home');
Router::addRout('Hello', 'Controller/Hello');
Router::match();

