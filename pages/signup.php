<?php
session_start();
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>OPMS: New Account</title>
     <!-- Bootstrap Core CSS -->
     <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

     <!-- Custom Fonts -->
     <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

     <link href="https://fonts.googleapis.com/css?family=Average+Sans|Squada+One" rel="stylesheet">

     <!-- Custom CSS -->
     <link href="../css/master.css" rel="stylesheet">
   </head>
   <body style="background-color: #E0E0E0">

     <div class="container-fluid">
       <div class="row">
         <div class="col-md-12 text-center verticalspace">
           <h1 class="font1">Create Portfolio</h1>
         </div>
       </div>
       <div class="row">
         <div class="col-md-6 col-md-offset-3">
           <nav class="navbar navbar-inverse" style="margin-bottom: 0px;">
             <div class="container-fluid">
               <ul class="nav navbar-nav">
                 <li class="active" disabled><a href="#">Login Information</a></li>
                 <li><a href="#" disabled>Credentials</a></li>
                 <li><a href="#" disabled>Portfolio</a></li>
               </ul>

             </div>
           </nav>
         </div>
         <div class="col-md-6 col-md-offset-3">
           <div class="container-fluid pull-center" style="background-color: white; padding-bottom: 30px;">
               <div class="col-md-6">
                 <div class="row pull-left">
                    <a class="btn btn-default btn-sm topspace" href="../index.html"><i class="fa fa-arrow-left"></i> Back</a>
                 </div>
                   <hr>
                 <h2 class="font2  topspace-lg">Login Details</h2>
                 <form class="form-group" action="../process/create.php" method="post" enctype="multipart/form-data">
                   <input type="text" name="user" placeholder="username" class="form-control topspace" required>
                   <input type="password" name="pass" placeholder="password" class="form-control topspace" required>
                   <input type="password" name="conpass" placeholder="confirm password" class="form-control topspace" required>
                   <label for="img" class="topspace">Profile Img:</label>
                   <input type="file" name="img" id="img" class="form-control topspace" required>
                   <span class="help-block">Images goes here</span>
               </div>
               <div class="col-md-6">
                 <h2 class="font2">Personal Information</h2>
                 <input type="text" name="first" placeholder="Givenname" class="form-control topspace" required>
                 <input type="text" name="last" placeholder="Lastname" class="form-control topspace" required>
                 <input type="text" name="nick" placeholder="Nickname" class="form-control topspace" required>
                 <input type="text" name="descr" placeholder="Short Description" class="form-control topspace" required>
                 <span class="help-block" style="margin-bottom: 20px;">Ex. Full Stack Developer</span>
                 <button type="submit" value="submit" class="btn btn-primary btn-block" name="create">Register &nbsp <i class="fa fa-arrow-right"></i></button>
                 </form>
               </div>
           </div>
         </div>

       </div>
     </div>

   </body>
   <!-- jQuery -->
   <script src="../vendor/jquery/jquery.js"></script>

   <!-- Bootstrap Core JavaScript -->
   <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

   <!-- Plugin JavaScript -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

   <!-- Custom JavaScript -->
   <script src="../js/master.js"></script>
 </html>

 <?php
 if(isset($_GET['error']) && $_GET['error'] == 1){
   echo '<script type="text/javascript">
     alert("'.$_SESSION['error'].'");
   </script>';
 }

  ?>
