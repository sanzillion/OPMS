<?php

function connect(){
   $db = new PDO("mysql:host=localhost;dbname=opms","root","");
   return $db;
}

if(connect()){
  echo 'Connected';
}
else{
  echo 'Not connected';
}

 ?>
