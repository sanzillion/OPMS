<?php

function connect(){
   $db = new PDO("mysql:host=localhost;dbname=opms","root","");
   return $db;
}

function options(){
  $output = '<option disabled selected hidden value="">Expertise</option>
  <option>Beginner</option>
  <option>Intermediate</option>
  <option>Expert</option>
  <option>Master</option>';
  return $output;
}

function languages(){
  $output = '
  <option>English</option>
  <option>CSS</option>
  <option>SQL</option>
  <option>C/C#/C++</option>
  <option>JAVA</option>
  <option>PHP</option>
  <option>Javascript</option>
  <option>Python</option>
  <option>.NET</option>
  <option>iOS/Swift</option>
  <option>Ruby on Rails</option>';
  return $output;
}

function finduser($user, $password){
  $db = connect();
  $query = $db->prepare("SELECT * From users WHERE name = ? AND pass = ?");
  $query->bindParam(1,$user);
  $query->bindParam(2,$password);
  $query->execute();
  return $query->fetch(PDO::FETCH_OBJ);
}

function getuserinfo($id){
  $db = connect();
  $query = $db->prepare("SELECT * FROM users
    INNER JOIN info ON users.id = info.p_id
    INNER JOIN about ON info.p_id = about.p_id
    INNER JOIN img ON about.p_id = img.p_id
    WHERE users.id = '$id'");
  $query->execute();
  return $query->fetch(PDO::FETCH_OBJ);
}

function getskills($id){
  $db = connect();
  $query = $db->prepare("SELECT * FROM skills
    WHERE p_id = '$id'");
  $query->execute();
  return $query->fetchAll(PDO::FETCH_OBJ);
}

function getportfolio($id){
  $db = connect();
  $query = $db->prepare("SELECT * FROM portfolio
    WHERE p_id = '$id'");
  $query->execute();
  return $query->fetchAll(PDO::FETCH_OBJ);
}

 ?>
