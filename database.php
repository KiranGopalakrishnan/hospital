<?php
class database{
  private $Date; 
  private $default;
  private $file;
  function database(){
    //$this->Date=Date("Y-m-d");   //Uses Date for storing each entry's log Date
  }
  function add($data){
    $file = file_put_contents('./database.json', $data , FILE_APPEND);
   }
}
?>

