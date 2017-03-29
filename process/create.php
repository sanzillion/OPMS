<?php
session_start();
include 'functions.php';
$db = connect();

$_SESSION['error'] = '';
if(isset($_POST['create'])){
    echo $user = $_POST['user'];
    echo '<br>';
    echo $pass = $_POST['pass'];
    echo '<br>';
    echo $first = $_POST['first'];
    echo '<br>';
    echo $last = $_POST['last'];
    echo '<br>';
    echo $nick = $_POST['nick'];
    echo '<br>';
    echo $descr = $_POST['descr'];
    echo '<br>';
    echo $p_name = $_FILES["img"]["name"];

  $target_dir = "../uploads/";
  $target_file = $target_dir . basename($_FILES["img"]["name"]);
  $uploadOk = 1;
  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
  $_SESSION['img'] = $target_file;
  // Check if image file is a actual image or fake image
  // $check = getimagesize($_FILES["image"]["tmp_name"]);
  // if($check !== false) {
  //     echo "File is an image - " . $check["mime"] . ".";
  //     $uploadOk = 1;
  // } else {
  //     $_SESSION['error'] .= "File is not an image.";
  //     $uploadOk = 0;
  // }
  // Check if file already exists
  if (file_exists($target_file)) {
      $_SESSION['error'] .= "Sorry, file already exists.";
      $uploadOk = 0;
  }
  // Check file size
  if ($_FILES["img"]["size"] > 500000) {
      $_SESSION['error'] .= "Sorry, your file is too large.";
      $uploadOk = 0;
  }
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
      $_SESSION['error'] .= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
  }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
  // if everything is ok, try to upload file
      header('Location: ../pages/signup.php?error=1');
  } else {
      unset($_SESSION['error']);
      if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
          echo "The file ". basename( $_FILES["img"]["name"]). " has been uploaded.";

          $query = $db->prepare("INSERT INTO users set
                                name = '$user',
                                pass = '$pass'");

          if($query->execute()){
            $r = finduser($user,$pass);
            echo $id = $r->id;
            $_SESSION['userid'] = $id;
            $query1 = $db->prepare("INSERT INTO info set
                                  p_id = '$id',
                                  first = '$first',
                                  last = '$last',
                                  nick = '$nick',
                                  descr = '$descr'");

            $query2 = $db->prepare("INSERT INTO img set
                                  pic_name = '$p_name',
                                  p_id = '$id'");

            if($query1->execute() && $query2->execute()){
              header('Location: ../pages/credentials.php?success=1');
              echo "success";
            }else {
              header('Location: ../pages/index.php?error=2');
              echo "error";
            }
          }
          else{
            echo "error 1st query";
            header('Location: ../pages/index.php?error=3');
          }

      } else {
         $_SESSION['error'] = "Sorry, there was an error uploading your file.";
         echo 'errorz';
      }
    }

}

if(isset($_POST['create-c'])){
  echo $ed = $_POST['ed'];
  echo '<br>';
  echo $cou = $_POST['course'];
  echo '<br>';
  echo $edy = $_POST['ed-year'];
  echo '<br>';
  $la1 = $_POST['lang1'];
  $la2 = $_POST['lang2'];
  $la3 = $_POST['lang3'];
  $la1x = $_POST['lang1ex'];
  $la2x = $_POST['lang2ex'];
  $la3x = $_POST['lang3ex'];
  echo $com = $_POST['com'];
  echo '<br>';
  echo $pos = $_POST['pos'];
  echo '<br>';
  echo $comy = $_POST['com-year'];
  echo '<br>';
  $ski1 = $_POST['skill1'];
  $ski2 = $_POST['skill2'];
  $ski3 = $_POST['skill3'];
  $ski1x = $_POST['skill1ex'];
  $ski2x = $_POST['skill2ex'];
  $ski3x = $_POST['skill3ex'];

  $id = $_SESSION['userid'];
  $query = $db->prepare("INSERT INTO about SET p_id = '$id', ed_bg = '$ed',
                        course = '$cou', ed_y = '$edy', company = '$com',
                        pos = '$pos', com_y = '$comy' ");

  $query2 = $db->prepare("INSERT INTO skills SET p_id = '$id', lang = '$la1',
                          langex = '$la1x', skill = '$ski1', skillex = '$ski1x' ");

  $query3 = $db->prepare("INSERT INTO skills SET p_id = '$id', lang = '$la2',
                            langex = '$la2x', skill = '$ski2', skillex = '$ski2x' ");

  $query4 = $db->prepare("INSERT INTO skills SET p_id = '$id', lang = '$la3',
                            langex = '$la3x', skill = '$ski3', skillex = '$ski3x' ");

  if($query->execute() && $query2->execute() && $query3->execute() && $query4->execute()){
    echo 'success';
    header('Location: ../pages/port.php');
  }
  else{
    echo 'error';
    //header('Location: ../pages/credentials.php?error=1');
  }

}

if(isset($_POST['create-p'])){
  $t1 = $_POST['title1'];
  $t2 = $_POST['title2'];
  $t3 = $_POST['title3'];
  $d1 = $_POST['desc1'];
  $d2 = $_POST['desc2'];
  $d3 = $_POST['desc3'];

  $target_dir = "../uploads/";
  $target_file1 = $target_dir . basename($_FILES["port1"]["name"]);
  $target_file2 = $target_dir . basename($_FILES["port2"]["name"]);
  $target_file3 = $target_dir . basename($_FILES["port3"]["name"]);
  $uploadOk = 1;
  $imageFileType1 = pathinfo($target_file1,PATHINFO_EXTENSION);
  $imageFileType2 = pathinfo($target_file2,PATHINFO_EXTENSION);
  $imageFileType3 = pathinfo($target_file3,PATHINFO_EXTENSION);
  // Check if image file is a actual image or fake image
  // $check = getimagesize($_FILES["image"]["tmp_name"]);
  // if($check !== false) {
  //     echo "File is an image - " . $check["mime"] . ".";
  //     $uploadOk = 1;
  // } else {
  //     $_SESSION['error'] .= "File is not an image.";
  //     $uploadOk = 0;
  // }
  // Check if file already exists
  if (file_exists($target_file1) && file_exists($target_file2) && file_exists($target_file3)) {
      $_SESSION['error'] .= "Sorry, file already exists.";
      $uploadOk = 0;
  }
  // Check file size
  if ($_FILES["port1"]["size"] > 500000 && $_FILES["port2"]["size"] > 500000 && $_FILES["port3"]["size"] > 500000) {
      $_SESSION['error'] .= "Sorry, your files are too large.";
      $uploadOk = 0;
  }
  // Allow certain file formats
  if($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg" &&
    $imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg" &&
    $imageFileType3 != "jpg" && $imageFileType3 != "png" && $imageFileType3 != "jpeg") {
      $_SESSION['error'] .= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
  }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
  // if everything is ok, try to upload file
      header('Location: ../pages/port.php?error=1');
  }else{
    unset($_SESSION['error']);
    if (move_uploaded_file($_FILES["port1"]["tmp_name"], $target_file1) &&
        move_uploaded_file($_FILES["port2"]["tmp_name"], $target_file2) &&
        move_uploaded_file($_FILES["port3"]["tmp_name"], $target_file3)) {
        echo "The file ". basename( $_FILES["port1"]["name"]). " has been uploaded.<br>";
        echo "The file ". basename( $_FILES["port2"]["name"]). " has been uploaded.<br>";
        echo "The file ". basename( $_FILES["port3"]["name"]). " has been uploaded.<br>";

        $id = $_SESSION['userid'];
        $port1 = $_FILES["port1"]["name"];
        $port2 = $_FILES["port2"]["name"];
        $port3 = $_FILES["port3"]["name"];
        $query1 = $db->prepare("INSERT INTO portfolio SET p_id = '$id', title = '$t1', s_desc = '$d1',
                                proj_name = '$port1'");
        $query2 = $db->prepare("INSERT INTO portfolio SET p_id = '$id', title = '$t2', s_desc = '$d2',
                                proj_name = '$port2'");
        $query3 = $db->prepare("INSERT INTO portfolio SET p_id = '$id', title = '$t3', s_desc = '$d3',
                                proj_name = '$port3'");

        if($query1->execute() && $query2->execute() && $query3->execute()){
          header('Location: ../portfolio.php');
        }
        else{
          header('Location: ../pages/port.php?somethingwentwrong');
        }

  }
}
}



 ?>
