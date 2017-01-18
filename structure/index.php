<?php

$class = "home"; //default controller
$function = "home"; //default class

$arr = explode("/", $_SERVER['REQUEST_URI']);

if(count($arr) > 3) $class = $arr[3];
if(count($arr) > 4) $function = $arr[4];

$params = array();
$count = 0;
if (count($arr) > 3){
    for($i=3; $i<count($arr); $i++)$params["arg".$count] = $arr[$i];
    $count++;
}


require_once "framework/base.php";


if($class != ""){ //check if class exists
    if(glob("./controllers/".$class.".php")){
        require_once "controllers/".$class.".php";
        if(class_exists($class) && method_exists($class, $function)){
            $ob = new $class($params);
            if($class != $function) $ob->$function();
        }
        else pathNotFound();

    }
    else if(glob("./views/".$class.".php")){
        $base = new Base($params);
        $base->load($class);
    }
    else pathNotFound();
}
else pathNotFound();



function pathNotFound(){
    die("path not found");
}

?>