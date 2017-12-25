
<?php

spl_autoload_register('autoloader');

function autoloader($className){
    include __DIR__."/src/".$className.".php";
    include __DIR__."/src/Controller/".$className.".php";

}


Router::addRout('', 'Home');
Router::addRout('Hello', 'Hello');
Router::match();

