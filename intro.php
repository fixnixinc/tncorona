<?php 
require 'nav_header.html';
require 'nav_footer.html';

 ?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            background-color: #FFFFFF;
        }
        
        .btn_center{
            vertical-align: center;
            top: 136px;
        }
      .btn-danger {
  font-family: Raleway-SemiBold;
  font-size: 13px;
  color: white;
  letter-spacing: 1px;
  line-height: 30px;
  border: 2px solid rgba(217, 83, 78, 0.75);
  border-radius: 40px;
  background: transparent;
  transition: all 0.3s ease 0s;
}

.btn-danger:hover {
  color: #FFF;
  background: rgba(217, 83, 78, 0.75);
  border: 2px solid rgba(217, 83, 78, 0.75);
} 
    </style>

    <link href="./fonts/css/fontawesome.css" rel="stylesheet">
  <link href="./fonts/css/brands.css" rel="stylesheet">
  <link href="./fonts/css/solid.css" rel="stylesheet">

</head>
<body>

    <div class="container" style="padding-top: 18px;">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
        <div class="col"><i class="fas fa-info" style="font-size: 120px;"></i><br><br>Submit a case / Info</div>
        <div class="col"><i class="fas fa-bullhorn" style="font-size: 120px;"></i> <br><br>Report to Corona Speak Portal</i></div>
        <div class="col"><i class="fas fa-globe-americas" style="font-size: 120px;"></i><br><br>We Intimate to WHO and Govt.</div>
        <div class="col"><i class="fas fa-file-contract" style="font-size: 120px;"></i><br><br>Track your reports process through Followups</div>
       </div>
    </div>

   <div style="height: 135px;"></div>
<div class="container-fluid" style="background-color:#668eba; height: 135px; width: 100%; "> 
  <center><a href="case/caseplan.php"><button class="btn_center btn-danger" style="margin-top: 40px;">Submit your case / info here</button></a></center>
 </div>
</body>
</html>