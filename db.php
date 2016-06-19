<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'database.php';
$fl = new database();
$arr["Email"]=$_POST["login"];
$arr["Password"]=$_POST["password"];
$fl->add(json_encode($arr));
$gh = fopen("./database.json","r");
$fl = fread($gh,filesize("./database.json"));
//$dk=json_decode(file_get_contents("./database.json"), true);
$bl=json_encode($fl);
$ty=json_decode((string)$bl);
//var_dump(json_encode($arr));
$entry=" ";
for($i=0;$i<strlen($ty);$i++){
   
    if($ty[$i]!="}"){
            $entry = $entry . $ty[$i];
        }
    //echo $ty[$i];
}
//echo strlen($ty);
var_dump($entry);
