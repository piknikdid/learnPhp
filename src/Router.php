<?php



class Router {

    static private $_registry = array();



    public static function addRout($key, $value)
    {

        if (isset(self::$_registry[$key])) {
            print $key.' already exists';
        }
        self::$_registry[$key] = $value;


    }

    public static function  match(){
        $home = explode('/', $_SERVER["REQUEST_URI"]);



        if (isset(self::$_registry[$home[1]]))
        {

            $obj = new self::$_registry[$home[1]]();

            $obj->dispatch();
        }

        else{
            Controller_NotFound::dispatch();
        }







    }



}