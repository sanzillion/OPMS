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
                 <li class="active" ><a href="#" >Credentials</a></li>
                 <li><a href="#" disabled>Portfolio</a></li>
               </ul>

             </div>
           </nav>
         </div>
         <div class="col-md-6 col-md-offset-3">
           <div class="container-fluid pull-center" style="background-color: white; padding-bottom: 30px;">
              <div class="col-md-12">
                <div class="row pull-right">
                  <a class="btn btn-default btn-sm topspace" href="port.php">Skip <i class="fa fa-arrow-right"></i></a>
                </div>
                <hr>
              </div>
               <div class="col-md-6">
                 <h3 class="font2" style="margin-top:0px;">College</h3>
                 <form class="form-group" action="../process/create.php" method="post">
                   <input type="text" name="ed" placeholder="School" class="form-control topspace" required>
                   <div class="col-md-6">
                      <input type="text" class="form-control input-sm verticalspace-sm" placeholder="Course" name="course" required>
                   </div>
                   <div class="col-md-6">
                     <input type="text" class="form-control input-sm verticalspace-sm" placeholder="year attended" name="ed-year" required>
                   </div>
                   <h3 class="font2">Top 3 languages</h3>
                   <div class="row">
                     <div class="col-md-7">
                       <select class="form-control input-sm topspace" name="lang1" required>
                         <option disabled selected hidden value="">Language 1</option>
                         <?php echo languages(); ?>
                       </select>
                       <select class="form-control input-sm topspace" name="lang2" required>
                         <option disabled selected hidden value="">Language 2</option>
                         <?php echo languages(); ?>
                       </select>
                       <select class="form-control input-sm topspace" name="lang3" required>
                         <option disabled selected hidden value="">Language 3</option>
                         <?php echo languages(); ?>
                       </select>
                     </div>
                     <div class="col-md-5">
                       <select class="form-control input-sm topspace" name="lang1ex" required>
                         <?php echo options(); ?>
                       </select>
                       <select class="form-control input-sm topspace" name="lang2ex" required>
                         <option disabled selected hidden value="">Expertise</option>
                         <?php echo options(); ?>
                       </select>
                       <select class="form-control input-sm topspace" name="lang3ex" required>
                         <option disabled selected hidden value="">Expertise</option>
                        <?php echo options(); ?>
                       </select>
                     </div>
                   </div>
               </div>
               <div class="col-md-6">
                 <h3 class="font2" style="margin-top:0px;">Company</h3>
                 <input type="text" name="com" placeholder="Company" class="form-control topspace" required>
                 <div class="col-md-6">
                    <input type="text" class="form-control input-sm verticalspace-sm" placeholder="position" name="pos" required>
                 </div>
                 <div class="col-md-6">
                   <input type="text" class="form-control input-sm verticalspace-sm" placeholder="year attended" name="com-year" required>
                 </div>
                 <h3 class="font2">Top 3 Skills</h3>
                 <div class="row">
                   <div class="col-md-7">
                     <input type="text" class="form-control topspace input-sm" placeholder="Skill 1" name="skill1" required>
                     <input type="text" class="form-control topspace input-sm" placeholder="Skill 2" name="skill2" required>
                     <input type="text" class="form-control topspace input-sm" placeholder="Skill 3" name="skill3" required>
                   </div>
                   <div class="col-md-5">
                     <select class="form-control input-sm topspace" name="skill1ex" required>
                       <?php echo options(); ?>
                     </select>
                     <select class="form-control input-sm topspace" name="skill2ex" required>
                       <option disabled selected hidden value="">Expertise</option>
                       <?php echo options(); ?>
                     </select>
                     <select class="form-control input-sm topspace" name="skill3ex" required>
                       <option disabled selected hidden value="">Expertise</option>
                      <?php echo options(); ?>
                     </select>
                   </div>
                 </div>
                 <button type="submit" class="btn btn-primary btn-block verticalspace-sm" name="create-c">Continue &nbsp <i class="fa fa-arrow-right"></i></button>
               </div>
           </div>

           </form>
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
