<?php
namespace App;
class Autoload{
    public static function register():void{
       
        spl_autoload_register(function($class){
             if(strpos($class,"App\\") !== 0){
                return;
             }
            $class = str_replace("App\\","", $class);
            $class = str_replace("\\","/",$class);
           $file =  __DIR__ . "/src/" . $class . ".php";

              if(file_exists($file)){
                 require_once $file;
              }
        });
    }
}