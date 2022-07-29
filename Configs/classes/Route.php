<?php


class Route{

    private static $controller;
    private static $action;
    private static $url;


    /**
     * get in route
     *
     * @param [type] $url
     * @param [type] $controller
     * @param [type] $action
     * @return void
     */
    public static function get($url,$controller,$action){
        
        self::$url[] = $url;
        list($PATH_INFO1,$PATH_INFO2)=explode('/',$_SERVER['PATH_INFO']);
        
        if ($url == '/' && is_null($PATH_INFO2 )) {
            self::$controller = $controller;
            self::$action =  $action;
        }elseif( $url == $PATH_INFO2 ){
            self::$controller = $controller;
            self::$action =  $action;
        }
        
    }





    /**
     * run Route
     *
     * @return void
     */
    public static function run(){
        
        list($a,$PATH_INFO)=explode('/',$_SERVER['PATH_INFO']); 
        if(is_null($PATH_INFO)){
            $PATH_INFO ='/';
        }
        if (in_array($PATH_INFO,self::$url)) {

            $controller = self:: $controller;
            $action = self::$action;
    
                $controller->$action();

        }else{
            echo"<center><h1>404</h1></center>";

        }

    }
}