<?php
session_start();
include '../process/functions.php';
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
                 <li><a href="#">Login Information</a></li>
                 <li><a href="#" disabled>Credentials</a></li>
                 <li class="active"><a href="#" disabled>Portfolio</a></li>
               </ul>

             </div>
           </nav>
         </div>
         <div class="col-md-6 col-md-offset-3">
           <div class="container-fluid pull-center" style="background-color: white; padding-bottom: 30px;">
             <form class="form-group" action="../process/create.php" method="post" enctype="multipart/form-data">
               <div class="row">
                 <div class="sidepad">
                   <div class="col-md-4">
                     <hr>
                   </div>
                   <div class="col-md-4 text-center">
                      <h3 class="font2">TOP 3 PROJECTS</h3>
                   </div>
                   <div class="col-md-4">
                     <hr>
                   </div>
                 </div>
               </div>

               <div class="col-md-4">
                 <h4 class="font2 topspace-lg">Project 1</h4>
                 <input type="text" name="title1" class="form-control input-sm topspace" placeholder="Title" required>
                 <input type="text" name="desc1" class="form-control input-sm topspace" placeholder="Short Desciprtion" required>

                 <span class="help-block topspace">Images goes here</span>
                 <input type="file" name="port1" id="port1img">
                </div>

                <div class="col-md-4">
                  <h4 class="font2 topspace-lg">Project 2</h4>
                  <input type="text"  name="title2" class="form-control input-sm topspace" placeholder="Title" required>
                  <input type="text" name="desc2" class="form-control input-sm topspace" placeholder="Short Desciprtion" required>

                  <span class="help-block topspace">Images goes here</span>
                  <input type="file" name="port2" id="port1img">

                  <button type="submit" class="btn btn-primary btn-block topspace-lg" name="create-p">Finish &nbsp <i class="fa fa-arrow-right"></i></button>
                </div>

                <div class="col-md-4">
                  <h4 class="font2 topspace-lg">Project 3</h4>
                  <input type="text"  name="title3" class="form-control input-sm topspace" placeholder="Title" required>
                  <input type="text" name="desc3" class="form-control input-sm topspace" placeholder="Short Desciprtion" required>

                  <span class="help-block topspace">Images goes here</span>
                  <input type="file" name="port3" id="port1img">
                </div>

              </form>
         </div> <!-- end of container white background -->
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
