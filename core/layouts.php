<?php
require_once __DIR__.'/route.php';

function getURl($routes){

    $url=parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
   // $urlPart=explode('/',$url);

    $urlFinal='';
    
        foreach($routes as $r){

            if($r[0]==$url){
                $urlFinal=$r[1];
            break;
            }
            
        }

        return $urlFinal;
}   

   $get=getURl($route);
function show($url){

   $myView=require_once __DIR__."/../controller/{$url}.php";
    //echo $url;
    
}


 return show($get);