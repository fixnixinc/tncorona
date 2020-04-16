<?php
 include '../php/common/config.php';
 session_start();
  if(isset($_POST['admin']))
  {
   $email=$_POST['email'];
    $password=$_POST['password'];
      $sql="SELECT email,password FROM user Where email= '" . $email. "' and password= '" . $password. "'";
     $result=mysqli_query($link,$sql);
            if($rows=mysqli_fetch_assoc($result))
             { 
               $_SESSION['email']=$email;
           $_SESSION['password']=$password;  
            $_SESSION['last_name']=$name;   
              $password == 'CoronaSpeak';
                if(md5($password) == 'aa18ca633f8192787eaef03a9d31187d'){
              
               if($_SESSION['email']=='CoronaSpeak@nixwhistle.com'&& $rows['password'] == 'CoronaSpeak')
               {
               
                 // echo "Sucessfully";
                header("location:/coronaspeak/view/common/overview.php");
               // break;
               }
             }

               if($_SESSION['email']=='clinic' && $_SESSION['password'] == 'coronaspeak')
               {
               
                 // echo "Sucessfully";
                header("location:/coronaspeak/case/clinicview.php");
               // break;
               }
               if($_SESSION['email']=='testing' && $_SESSION['password'] == 'coronaspeak')
               {
               
                 // echo "Sucessfully";
                header("location:/coronaspeak/case/testingview.php");
               // break;
               }
                 if($_SESSION['email']=='hospital' && $_SESSION['password'] == 'coronaspeak')
               {
               
                 // echo "Sucessfully";
                header("location:/coronaspeak/case/hospitalview.php");
               // break;
               }
           else if($rows['email']=='idea_analyst@nixwhistle.co'&& $rows['password']=='analyst')
               {
                 // echo "Sucessfully";
                header("location:/coronaspeak/idea/view.php");
               }
            else if($rows['email']=='investigator@nixwhistle.co'&& $rows['password']=='investigator')
               {
                 // echo "Sucessfully";
                header("location:/coronaspeak/investigator/view.php");
               }
               else if($rows['email']=='reviewer@nixwhistle.co'&& $rows['password']=='reviewer')
               {
                 // echo "Sucessfully";
                header("location:/coronaspeak/reviewer/reviewerview.php");
               }
             }
             else
               {
                // echo "Error: " . $sql . "<br>" . $link->error;
                // alert("incorrect username and password");
               }
  }
?>


<?php
   include "../php/common/config.php";
   $target_dir = "../documents/";
$target_file = $target_dir . basename($_FILES["Artifacts"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   if(isset($_POST['submit']))
   {
     $category=$_POST['selimg'];
     
          $district=$_POST['district'];
           $Description=htmlspecialchars($_POST['Description']);
           $name=$_POST['name'];
           $email=$_POST['email'];
           $phone=$_POST['phone'];
               $ran=$_POST['ran'];
                $secretkey=$_POST['secretkey'];
                 $status="created";
                $Artifacts=$_FILES['Artifacts']['name'];
                $taking_test=$_POST['taking_test'];
                 $age=$_POST['age'];

                  $gender=$_POST['gender'];
                  $fever=$_POST['fever'];
                  $drycough=$_POST['drycough'];
                   $feelingsmell=$_POST['feelingsmell'];

                 $throatpain=$_POST['throatpain'];
                  $bodyweak=$_POST['bodyweak'];

 $nohunger=$_POST['nohunger'];

 $coughrange=$_POST['coughrange'];

 $shortness=$_POST['shortness'];

 $breathing=$_POST['breathing'];

 $drowsy=$_POST['drowsy'];

 $chestpain=$_POST['chestpain'];

 $weaknessbody=$_POST['weaknessbody'];

 $visitedoutside=$_POST['visitedoutside'];

 $contactaffect=$_POST['contactaffect'];

 $infectedcountry=$_POST['infectedcountry'];

 $familycontact=$_POST['familycontact'];

 $healthcondition=$_POST['healthcondition'];

 $diseasesymptoms=$_POST['diseasesymptoms'];
 $city=$_POST['city'];
 $zipcode=$_POST['zipcode'];
 if($coughrange=="")
 {
    $heat="low";
    $sql="INSERT INTO `case`(category,district,Description,name,email,phone,ran,secretkey,Artifacts,status,taking_test,age,gender,fever,drycough,feelingsmell,throatpain,bodyweak,nohunger,coughrange,shortness,breathing,drowsy,chestpain,weaknessbody,visitedoutside,contactaffect,infectedcountry,familycontact,healthcondition,diseasesymptoms,heat)
     values('$category','$district','$Description','$name','$email','$phone','$ran','$secretkey','$Artifacts','$status','$taking_test','$age','$gender','$fever','$drycough','$feelingsmell','$throatpain','$bodyweak','$nohunger','$coughrange','$shortness','$breathing','$drowsy','$chestpain','$weaknessbody','$visitedoutside','$contactaffect','$infectedcountry','$familycontact','$healthcondition','$diseasesymptoms','$heat')";


     
        }
        
     else if($coughrange!=""||$shortness!=""||$breathing!==""||$drowsy!=""||$chestpain!=""||$weaknessbody!="")
        {
         $heat="medium";
    $sql="INSERT INTO `case`(category,district,Description,name,email,phone,ran,secretkey,Artifacts,status,taking_test,age,gender,fever,drycough,feelingsmell,throatpain,bodyweak,nohunger,coughrange,shortness,breathing,drowsy,chestpain,weaknessbody,visitedoutside,contactaffect,infectedcountry,familycontact,healthcondition,diseasesymptoms,heat)
     values('$category','$district','$Description','$name','$email','$phone','$ran','$secretkey','$Artifacts','$status','$taking_test','$age','$gender','$fever','$drycough','$feelingsmell','$throatpain','$bodyweak','$nohunger','$coughrange','$shortness','$breathing','$drowsy','$chestpain','$weaknessbody','$visitedoutside','$contactaffect','$infectedcountry','$familycontact','$healthcondition','$diseasesymptoms','$heat')";

        }
       else if($visitedoutside!=""||$contactaffect!=""||$infectedcountry!=""||$familycontact!=""||$healthcondition!=""||$diseasesymptoms!="")                                 
        {
    $heat="high";
    $sql="INSERT INTO `case`(category,district,Description,name,email,phone,ran,secretkey,Artifacts,status,taking_test,age,gender,fever,drycough,feelingsmell,throatpain,bodyweak,nohunger,coughrange,shortness,breathing,drowsy,chestpain,weaknessbody,visitedoutside,contactaffect,infectedcountry,familycontact,healthcondition,diseasesymptoms,heat)
     values('$category','$district','$Description','$name','$email','$phone','$ran','$secretkey','$Artifacts','$status','$taking_test','$age','$gender','$fever','$drycough','$feelingsmell','$throatpain','$bodyweak','$nohunger','$coughrange','$shortness','$breathing','$drowsy','$chestpain','$weaknessbody','$visitedoutside','$contactaffect','$infectedcountry','$familycontact','$healthcondition','$diseasesymptoms','$heat')";

        
        }
 if(mysqli_query($link,$sql))
        {
           
           if (move_uploaded_file($_FILES["Artifacts"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["Artifacts"]["name"]). " has been uploaded.";
            }
              echo "successfully";
           header("location:casecode.php");
        }
        else{
            echo "Error: " . $sql . "<br>" . $link->error;
        } 
        }
 
?>
<?php
   include "../php/common/config.php";
   $target_dir = "../documents/";
$target_file = $target_dir . basename($_FILES["Artifacts"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   if(isset($_POST['login']))
   {
     $category=$_POST['info'];
     
          $countries1=$_POST['countries1'];
           $Description1=htmlspecialchars($_POST['Description1']);
           $name1=$_POST['name1'];
           $email1=$_POST['email1'];
           $phone1=$_POST['phone1'];
               $ran1=$_POST['tipno1'];
                $secretkey1=$_POST['passkey1'];
               
                 $status1="created";
                $Artifacts1=$_FILES['Artifacts']['name1'];


 $sql1="INSERT INTO `info` (category,countries,Description,name,email,phone,ran,secretkey,Artifacts,status)
     values('$category1','$countries1','$Description1','$name1','$email1','$phone1','$ran1','$secretkey1','$Artifacts1','$status1')";

        if(mysqli_query($link,$sql1))
        {
           
           if (move_uploaded_file($_FILES["Artifacts"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["Artifacts"]["name"]). " has been uploaded.";
            }
              echo "successfully";
           header("location:../info/infocode.php");
        }
        else
        {
           echo "Error: " . $sql1 . "<br>" . $link->error;
          }
   
     
     
      }
 
?>
<?php
 include '../php/common/config.php';
  if(isset($_POST['track']))
  {
   $ran=$_POST['ran'];
    $secretkey=$_POST['secretkey'];
      $sql="SELECT secretkey,ran FROM `case` where ran='$ran' and secretkey='$secretkey'";
     $result=mysqli_query($link,$sql);
             if($rows=mysqli_fetch_assoc($result))
             {    
               if($rows['ran']==$ran && $rows['secretkey']==$secretkey)
               {
                  echo "Sucessfully";
                header("location:/coronaspeak/case/followup.php?ran=".$rows['ran']);
               }
             }
            
               else
               {
                 $sql="SELECT secretkey,ran FROM `info` where ran='$ran' and secretkey='$secretkey'";
     $result=mysqli_query($link,$sql);
             if($rows=mysqli_fetch_assoc($result))
             {    
               if($rows['ran']==$ran && $rows['secretkey']==$secretkey)
               {
                  echo "Sucessfully";
                header("location:/coronaspeak/info/followup.php?ran=".$rows['ran']);
               }
             }
               }
  }
?>
<?php
 include '../php/common/config.php';
if(isset($_POST['emotion']))
{
$city3=$_POST['city3'];
$zipcode3=$_POST['zipcode3'];
$category3=$_POST['category3'];
$email=$_POST['email'];
$phone=$_POST[''];
$address=$_POST['address'];
$category=$_POST['category'];
$quite_trivial=$_POST['quite_trivial'];
$dryness=$_POST['dryness'];
$positive_feeling=$_POST['positive_feeling'];
$breathing_difficulty=$_POST['breathing_difficulty'];
$seem=$_POST['seem'];
$over_react=$_POST['over_react'];
$shakiness=$_POST['shakiness'];
$difficult_relax=$_POST['difficult_relax'];
$anxious=$_POST['anxious'];
$look_forward=$_POST['look_forward'];
$upset=$_POST['upset'];
$nervous=$_POST['nervous'];
$depressed=$_POST['depressed'];
$delayed=$_POST['delayed'];
$faintness=$_POST['faintness'];
$faintness_interest=$_POST['faintness_interest'];
$worth=$_POST['worth'];
$rather_touchy=$_POST['rather_touchy'];
$noticeably=$_POST['noticeably'];
$scared=$_POST['scared'];
$worthwhile=$_POST['worthwhile'];
$wind_down=$_POST['wind_down'];
$swallowing=$_POST['swallowing'];
$enjoyment=$_POST['enjoyment'];
$absence=$_POST['absence'];
$down_hearted=$_POST['down_hearted'];
$irritable=$_POST['irritable'];
$panic=$_POST['panic'];
$unfamiliar=$_POST['unfamiliar'];
$enthusiastic=$_POST['enthusiastic'];
$interruptions=$_POST['interruptions'];
$tension=$_POST['tension'];
$worthless=$_POST['worthless'];
$intolerant=$_POST['intolerant'];
$terrified=$_POST['terrified'];
$hopeful=$_POST['hopeful'];
$meaningless=$_POST['meaningless'];
$agitated=$_POST['agitated'];
$fool_myself=$_POST['fool_myself'];
$trembling=$_POST['trembling'];
$initiative=$_POST['initiative'];
$ran3=$_POST['ran3'];
$secretkey3=$_POST['secretkey3'];

$sql4="INSERT INTO well_ness(city,zipcode,category,quite_trivial,dryness,positive_feeling,breathing_difficulty,seem,over_react,shakiness,difficult_relax,anxious,look_forward,upset,nervous,depressed,delayed,faintness,faintness_interest,worth,rather_touchy,noticeably,scared,worthwhile,intolerant,swallowing,enjoyment,absence,down_hearted,irritable,panic,unfamiliar,enthusiastic,interruptions,tension,worthless,intolerant,terrified,hopeful,meaningless,agitated,fool_myself,trembling,initiative,ran,secretkey3)VALUES('$city3','$zipcode3','$category3','$quite_trivial','$dryness','$positive_feeling','$breathing_difficulty','$seem','$over_react','$shakiness','$difficult_relax','$anxious','$look_forward','$upset','$nervous','$depressed','$delayed','$faintness','$faintness_interest','$worth','$rather_touchy','$noticeably','$scared','$worthwhile','$wind_down','$swallowing','$enjoyment','$absence','$down_hearted','$irritable','$panic','$unfamiliar','$enthusiastic','$interruptions','$tension','$worthless','$intolerant,'$terrified','$hopeful','$meaningless','$prettyworthless','$intolerant','$terrified','$hopefulabout','$meaningless','$agitated,'$panic','$trembling','$agitated','$fool_myself','$trembling','$initiative','$secretkey3')";
if(mysqli_query($link,$sql4))
{
         echo "successfully";
         header("location:casecode.php");
}
else
{
     echo "Error: " . $sql4 . "<br>" . $link->error;
}


}


     

?>
<style type="text/css">
  .nav-item:hover{
    border-bottom:3px solid #024da0;


  }
   .nav-item
   {
    border:2px solid transparent;
   }
</style>
<!DOCTYPE html>
<html>
 <head><!--begin::Base Path (base relative path for assets of this page) -->
<base href="/tncorona/">
        <meta charset="utf-8"/>

        <title>TNCoronaSpeak</title>
        <meta name="description" content="Base form control examples">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">        <!--end::Fonts -->
        <!--begin:: Global Mandatory Vendors -->
        <!--begin::Page Custom Styles(used by this page) -->
                             <link href="./assets/css/demo2/pages/wizard/wizard-1.css" rel="stylesheet" type="text/css" />
                     <link href="./assets/css/demo2/pages/wizard/wizard-3.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
<link href="./assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/quill/dist/quill.snow.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/dual-listbox/dist/dual-listbox.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/js/bootstrap-select.js"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                    <link href="./assets/css/demo2/style.bundle.css" rel="stylesheet" type="text/css" />
                <!--end::Global Theme Styles -->

        <!--begin::Layout Skins(used by all pages) -->
                <!--end::Layout Skins -->

 <link rel="shortcut icon" href="assets/media/logos/fixnix.png" />

</head>
<style>
.zoom {

  transition: transform .2s; /* Animation */

}

.zoom:hover {
  transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
#disc
{

 box-shadow:  1px 1px 2px #D9D7D6, 0 0 25px #D9D7D6, 0 0 5px #D9D7D6;
}
#content
{

 box-shadow:  1px 1px 2px #D9D7D6, 0 0 25px #D9D7D6, 0 0 5px #D9D7D6;
}
.kt-font-transform-u
{

    font-size: 16px;
    color: white;
    text-align: center;
    padding: 15px;
    width: 240px;
    display: inline-block;
    border-radius: 18px;
    font-weight: 600;
    cursor: pointer;
    margin-right: 15px;

}
</style>
<?php include '../siteheader.php'; ?>

 <body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading" style="background-color: white;">

    <!-- begin:: Page -->
    <br>
<br>
 <div class="kt-container  kt-grid__item kt-grid__item--fluid" >
        <div class="row">
    <div class="col">
        <div class="zoom">
        <div class="alert alert-light alert-elevate fade show" role="alert" id="disc">
            <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
            <div class="alert-text">
            Do not hesitate to share your symptoms about Covid 19 (Corona). Los Angeles County Medical Association will make best effort to reach out through the near by testing center, clinic or hospital based on your criticality.
You can stay anonymous and choose to followup with us also
            </div>
        </div>
    </div>
    </div>
</div>
</div>


 <div class="kt-container  kt-grid__item kt-grid__item--fluid" id="content">
                                         <div class="kt-portlet">
           <!--  <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                    TITLE
                    </h3>
                </div>
            </div> -->
            <div class="kt-portlet__body">
                <ul class="nav nav-tabs nav-justified" role="tablist">
                    <li class="nav-item" >
                        <a class="" data-toggle="tab" href="#kt_tabs_1_1">
                            <i class="la la-comment" style="font-size: 50px; color: #034ea2;"></i>  <label style="font-size:20px;font-weight: 500;color: black;">CASE</label>
                        </a>
                    </li>
               
                    <li class="nav-item">
                        <a class="" data-toggle="tab" href="#kt_tabs_1_3">
                            <i class="flaticon-presentation" style="font-size: 50px; color: #afd135;"></i>  <label style="font-size:18px;font-weight: 500;color: black;">INFO</label>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="" data-toggle="tab" href="#kt_tabs_1_4">
                            <i class="fa flaticon-customer" style="font-size: 50px; color: #034ea2;"></i>  <label style="font-size:18px;font-weight: 500;color: black;">Emotinal Wellness</label>
                        </a>
                    </li>
                 
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="kt_tabs_1_1" role="tabpanel">


<div class="kt-grid kt-grid--hor kt-grid--root" style="">
<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="kt-portlet">
  <div class="kt-portlet__body kt-portlet__body--fit">
    <div class="kt-grid  kt-wizard-v1 kt-wizard-v1--white" id="kt_wizard_v1" data-ktwizard-state="step-first">
      <div class="kt-grid__item">
        <!--begin: Form Wizard Nav -->
        <div class="kt-wizard-v1__nav">
          <div class="kt-wizard-v1__nav-items">
            <!--doc: Replace A tag with SPAN tag to disable the step link click -->
            <a class="kt-wizard-v1__nav-item" data-ktwizard-type="step" data-ktwizard-state="current">
              <div class="kt-wizard-v1__nav-body">
                <div class="kt-wizard-v1__nav-icon">
                  <i class="flaticon-bus-stop"></i>
                </div>
                <div class="kt-wizard-v1__nav-label">
                  1. Your Info
                </div>
              </div>
            </a>
            <a class="kt-wizard-v1__nav-item" data-ktwizard-type="step">
              <div class="kt-wizard-v1__nav-body">
                <div class="kt-wizard-v1__nav-icon">
                  <i class="flaticon-list"></i>
                </div>
                <div class="kt-wizard-v1__nav-label">
                  2. Symptoms
                </div>
              </div>
            </a>
            <a class="kt-wizard-v1__nav-item" data-ktwizard-type="step">
              <div class="kt-wizard-v1__nav-body">
                <div class="kt-wizard-v1__nav-icon">
                  <i class="flaticon-responsive"></i>
                </div>
                <div class="kt-wizard-v1__nav-label">
                  3. Other Symptoms
                </div>
              </div>
            </a>
            <a class="kt-wizard-v1__nav-item" data-ktwizard-type="step">
              <div class="kt-wizard-v1__nav-body">
                <div class="kt-wizard-v1__nav-icon">
                  <i class="flaticon-truck"></i>
                </div>
                <div class="kt-wizard-v1__nav-label">
                  4. Travel
                </div>
              </div>
            </a>
            <a class="kt-wizard-v1__nav-item" data-ktwizard-type="step">
              <div class="kt-wizard-v1__nav-body">
                <div class="kt-wizard-v1__nav-icon">
                  <i class="flaticon-globe"></i>
                </div>
                <div class="kt-wizard-v1__nav-label">
                  5. Review and Submit
                </div>
              </div>
            </a>
          </div>
        </div>
        <!--end: Form Wizard Nav -->

      </div>
      <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v1__wrapper">
        <!--begin: Form Wizard Form-->
        <form class="kt-form"  method="POST">
          <!--begin: Form Wizard Step 1-->
          <div class="kt-wizard-v1__content" data-ktwizard-type="step-content" data-ktwizard-state="current" id="kt_form">
            <!-- <div class="kt-heading kt-heading--md">Setup Your Current Location</div> -->
            <div class="kt-form__section kt-form__section--first">
              <div class="kt-wizard-v1__form">

                <div class="row">
                  <div class="col-md-6">



                <div name="Description" style="display: ;">
            <p style="font-size: 20px; font-weight: 500">DISTRICT :</p>
            <div>
                <div id="searchbox2">
           
                                                 
<select id="district" name="district" class="form-control" style="border-color:#B8B8BB;background:transparent;">
       <option>Select your District</option>
         <option value='Chennai'  data-title="Chennai">Chennai</option>
         <option value='Ariyalur'  data-title="Ariyalur">Ariyalur</option>
         <option value='Chengalpattu'  data-title="Chengalpattu">Chengalpattu</option>
         <option value='Coimbatore'  data-title="Coimbatore">Coimbatore</option>
         <option value='Cuddalore'  data-title="Cuddalore">Cuddalore</option>
         <option value='Dharmapuri'  data-title="Dharmapuri">Dharmapuri</option>
         <option value='Dindigul'  data-title="Dindigul">Dindigul</option>
         <option value='Erode'  data-title="Erode">Erode</option>
         <option value='Kallakurichi'  data-title="Kallakurichi">Kallakurichi</option>
         <option value='Kanchipuram'  data-title="Kanchipuram">Kanchipuram</option>
         <option value='Kanniyakumari'  data-title="Kanniyakumari">Kanniyakumari</option>
         <option value='Karur'  data-title="Karur">Karur</option>
         <option value='Krishnagiri'  data-title="Krishnagiri">Krishnagiri</option>
         <option value='Madurai'  data-title="Madurai">Madurai</option>
         <option value='Mayiladuthurai'  data-title="Mayiladuthurai">Mayiladuthurai</option>
         <option value='Nagapattinam'  data-title="Nagapattinam">Nagapattinam</option>
         <option value='Namakkal'  data-title="Namakkal">Namakkal</option>
         <option value='Nilgiris'  data-title="Nilgiris">Nilgiris</option>
         <option value='Perambalur'  data-title="Perambalur">Perambalur</option>
         <option value='Pudukkottai'  data-title="Pudukkottai">Pudukkottai</option>
         <option value='Ramanathapuram'  data-title="Ramanathapuram">Ramanathapuram</option>
         <option value='Ranipet'  data-title="Ranipet">Ranipet</option>
         <option value='Salem'  data-title="Salem">Salem</option>
         <option value='Sivagangai'  data-title="Sivagangai">Sivagangai</option>
         <option value='Tenkasi'  data-title="Tenkasi">Tenkasi</option>
         <option value='Thanjavur'  data-title="Thanjavur">Thanjavur</option>
         <option value='Theni'  data-title="Theni">Theni</option>
         <option value='Thoothukudi'  data-title="Thoothukudi">Thoothukudi</option>
         <option value='Tiruchirappalli'  data-title="Tiruchirappalli">Tiruchirappalli</option>
         <option value='Tirunelveli'  data-title="Tirunelveli">Tirunelveli</option>
         <option value='Tirupattur'  data-title="Tirupattur">Tirupattur</option>
         <option value='Tiruppur'  data-title="Tiruppur">Tiruppur</option>
         <option value='Tiruvallur'  data-title="Tiruvallur">Tiruvallur</option>
         <option value='Tiruvannamalai'  data-title="Tiruvannamalai">Tiruvannamalai</option>
         <option value='Tiruvarur'  data-title="Tiruvarur">Tiruvarur</option>
         <option value='Vellore'  data-title="Vellore">Vellore</option>
         <option value='Viluppuram'  data-title="Viluppuram">Viluppuram</option>
         <option value='Virudhunagar'  data-title="Virudhunagar">Virudhunagar</option>

</select>
         
        </div>
      </div>
    </div>
  </div>


</div>
<br>
<br>




                                        <div class="form-group">
                                      <div class="kt-section__content">
                        <label data-toggle="kt-popover" title="tooltip title" data-content="And here's some amazing content. It's very engaging. Right?" class="kt-heading kt-heading--md" style="font-size: 20px; font-weight: 500">Your Details:</label>
                    </div>  
                     <div class="form-group ">
             
              <label class="kt-radio kt-radio--solid kt-radio--info" style="color: black;font-size: 14px;background-color: ">
         <input type="radio" name="radio1" value="Anonymous" id="Anonymous" checked="checked">Keen to be Anonymous
         <span></span>
       </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black; font-size: 14px;">
             <input type="radio" name="radio1" value="disclose" id="disclose"> Keen to disclose

             <span></span>
           </label>


      </div>
     </div>
     <div id="details">
            <div class="row">
         <div class="col-md-4 ">
           <input type="text" placeholder="FullName" id="name" name="name" class="form-control">&nbsp;
        </div>
      <div class="col-md-4">
        <input type="text" placeholder="Age" id="email" name="email" class="form-control">&nbsp;
      </div>
      <div class="col-md-4">
        <input type="text" placeholder="Phone" id="phone" name="phone" class="form-control" >
      </div>


  </div>
  <div class="row">
     <div class="col-md-12">
        <input type="text" placeholder="Address" id="address" name="address" class="form-control" >
      </div>
  </div>

</div>
       
   <input type="hidden" name="secretkey" id="secretkey">
          <input type="hidden" name="ran" id="ran">
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">1. For whom are You taking this test?</p>
                 <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="yourself" name="taking_test" value="For yourself">
                    <label for="yourself">For yourself</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="parent" name="taking_test" value="Parent">
                    <label for="parent">Parent</label><span></span></label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="spouce" name="taking_test" value="Spouce">
                    <label for="spouce">Spouce</label><span></span></label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="Child" name="taking_test" value="Child">
                    <label for="Child">Child</label><span></span></label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="someone_else" name="taking_test" value="Someone else">
                    <label for="someone_else">Someone else</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">2. What is your age group?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="under12" name="age" value="Less Than 12">
                    <label for="under12">Less Than 12</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="above12" name="age" value="12-50">
                    <label for="above12">12-50</label><span></span></label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="above51" name="age" value="51-60">
                    <label for="above51">51-60</label><span></span></label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="above60" name="age" value=">60">
                    <label for="above60">>60</label><span></span> </label><br>
                   
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">3. What is your gender?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="male" name="gender" value="Male">
                    <label for="male">Male</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="female" name="gender" value="Female">
                    <label for="female">Female</label><span></span></label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="other" name="gender" value="Other">
                    <label for="other">Other</label><span></span></label><br>
                                       
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">4. Do you have fever?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="normal" name="fever" value="Normal">
                    <label for="normal">Normal</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="moderate" name="fever" value="Moderate">
                    <label for="moderate">Moderate</label><span></span></label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="heavy" name="fever" value="Heavy">
                    <label for="heavy">Heavy</label><span></span></label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="notAware" name="fever" value="Not aware">
                    <label for="notAware">Not aware</label><span></span></label><br>
                                       
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">5. Do you have dry cough?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="yes" name="drycough" value="Yes">
                    <label for="yes">Yes</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="no" name="drycough" value="No">
                    <label for="no">No</label><span></span></label><br>
                                       
                </div>
               
             
              </div>
            </div>
          </div>
          <!--end: Form Wizard Step 1-->

          <!--begin: Form Wizard Step 2-->
          <div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
<!--             <div class="kt-heading kt-heading--md">Enter the Details of your Delivery</div>
 -->            <div class="kt-form__section kt-form__section--first">
              <div class="kt-wizard-v1__form">
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">6. Do you have lost or less Feeling to smell?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="yes" name="feelingsmell" value="Yes">
                    <label for="yes">Yes</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="normal" name="feelingsmell" value="Normal">
                    <label for="normal">Normal</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">7. Do you have throat pain?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="yes" name="throatpain" value="Yes">
                    <label for="yes">Yes</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="normal" name="throatpain" value="Normal">
                    <label for="normal">Normal</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">8. Does your Body feel weak?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="yes" name="bodyweak" value="Yes">
                    <label for="yes">Yes</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="normal" name="bodyweak" value="Normal">
                    <label for="normal">Normal</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">9. Do you have No Hunger?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="yes" name="nohunger" value="Yes">
                    <label for="yes">Yes</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="normalHunger" name="nohunger" value="Normal hunger">
                    <label for="normalHunger">Normal hunger</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">10. Do you have normal or heavy cough?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="yes" name="coughrange" value="Yes">
                    <label for="yes">Yes</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="normal" name="coughrange" value="Normal">
                    <label for="normal">Normal</label><span></span></label><br>
                </div>
               
              </div>
            </div>
          </div>
          <!--end: Form Wizard Step 2-->

          <!--begin: Form Wizard Step 3-->
          <div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
            <!-- <div class="kt-heading kt-heading--md">Select your Services</div> -->
            <div class="kt-form__section kt-form__section--first">
              <div class="kt-wizard-v1__form">
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">11. Do you have breath shortness?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="yes" name="shortness" value="Yes">
                    <label for="yes">Yes</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="normal" name="shortness" value="Normal">
                    <label for="normal">Normal</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">12. Do you have normal breathing?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="yes" name="breathing" value="Yes">
                    <label for="yes">Yes</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="normal" name="breathing" value="Normal">
                    <label for="normal">Normal</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">13. Do you Feel drowsy or sleep?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="yes" name="drowsy" value="Yes">
                    <label for="yes">Yes</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="normal" name="drowsy" value="Normal">
                    <label for="normal">Normal</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">14. Do you feel Pain in chest?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="yes" name="chestpain" value="Yes">
                    <label for="yes">Yes</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="normal" name="chestpain" value="Normal">
                    <label for="normal">Normal</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">15. Do you have Weakness across body?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="yes" name="weaknessbody" value="Yes">
                    <label for="yes">Yes</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="normal" name="weaknessbody" value="Normal">
                    <label for="normal">Normal</label><span></span></label><br>
                </div>
               
               
              </div>
            </div>
          </div>
          <!--end: Form Wizard Step 3-->

          <!--begin: Form Wizard Step 4-->
          <div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
            <!-- <div class="kt-heading kt-heading--md">Setup Your Delivery Location</div> -->
            <div class="kt-form__section kt-form__section--first">
              <div class="kt-wizard-v1__form">
                  <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">16. Have you  visited outside state or country  in last 21 days?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="yes" name="visitedoutside" value="Yes">
                    <label for="yes">Yes</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="no" name="visitedoutside" value="No">
                    <label for="no">No</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">17. Have you  came in contact with anyone affected?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="yes" name="contactaffect" value="Yes">
                    <label for="yes">Yes</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="no" name="contactaffect" value="No">
                    <label for="no">No</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">18. Have you visited any of the corona infected countries in last 21 days?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="china" name="infectedcountry" value="China">
                    <label for="china">China</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="italy" name="infectedcountry" value="Italy">
                    <label for="italy">Italy</label><span></span></label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="spain" name="infectedcountry" value="Spain">
                    <label for="spain">Spain</label><span></span></label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="iran" name="infectedcountry" value="Iran">
                    <label for="iran">Iran</label><span></span></label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="europe" name="infectedcountry" value="Europe">
                    <label for="europe">Europe</label><span></span></label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="middle_east" name="infectedcountry" value="Middle East">
                    <label for="middle_east">Middle East</label><span></span></label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="southeast_asia" name="infectedcountry" value="Southeast asia">
                    <label for="southeast_asia">Southeast asia</label><span></span></label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="country_not_listed" name="infectedcountry" value="Country not listed">
                    <label for="country_not_listed">Country not listed</label><span></span></label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="not_visited" name="infectedcountry" value="Not visited">
                    <label for="not_visited">Not visited</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">19. Have you or your family came in contact with anyone affected in last 21 days?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="yes" name="familycontact" value="Yes">
                    <label for="yes">Yes</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="no" name="familycontact" value="No">
                    <label for="no">No</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">20. Do you have any of these health condition?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="checkbox" id="diabetes" name="healthcondition" value="Diabetes">
                    <label for="diabetes">Diabetes</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="checkbox" id="high_bp" name="healthcondition" value="High BP">
                    <label for="high_bp">High BP</label><span></span></label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="checkbox" id="heart_diseases" name="healthcondition" value="Heart Diseases">
                    <label for="heart_diseases">Heart Diseases</label><span></span></label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="checkbox" id="kidney" name="healthcondition" value="Kidney">
                    <label for="kidney">Kidney</label><span></span></label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="checkbox" id="lungs" name="healthcondition" value="Lungs">
                    <label for="lungs">Lungs</label><span></span></label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="checkbox" id="stroke" name="healthcondition" value="Stroke">
                    <label for="stroke">Stroke</label><span></span></label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="checkbox" id="immuno" name="healthcondition" value="Immuno compromised condition">
                    <label for="immuno">Immuno compromised condition</label><span></span></label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="checkbox" id="noneoftheabove" name="healthcondition" value="None of the above">
                    <label for="noneoftheabove">None of the above</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">21. Any disease symptoms in 24 hours?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="yes" name="diseasesymptoms" value="Yes">
                    <label for="yes">Yes</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="normal" name="diseasesymptoms" value="Normal">
                    <label for="normal">Normal</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">22. Other info</p>
                    <textarea type="text" rows="8" class="form-control output" name="Description" id="Description"  placeholder="Type something here....." style="border-color:#B8B8BB;background:transparent;"></textarea>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">23. Proof</p>
                    <div class="dropzone dropzone-default dropzone-brand" id="kt_dropzone_2">
                      <div class="dropzone-msg dz-message needsclick">
                          <h3 class="dropzone-msg-title">Drop files here or click to upload.</h3>
                          <!-- <span class="dropzone-msg-desc">Upload up to 10 files</span> -->
                          <label for="Artifacts" aria-hidden="true">
                   <img src="csv.svg" title="Upload File" width="35" height="35" >
                           <input type="file" name="Artifacts" id="Artifacts" style="display: none;">
                         </label>
                      </div>
                    </div>
                </div>
               
               
                 
              </div>
            </div>
          </div>
          <!--end: Form Wizard Step 4-->

          <!--begin: Form Wizard Step 5-->
          <div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
            <div class="kt-heading kt-heading--md">Review your Details and Submit</div>
            <div class="kt-form__section kt-form__section--first">
              <div class="kt-wizard-v1__review">
                <div class="kt-wizard-v1__review-item">
                  <div class="kt-wizard-v1__review-title">
                    Your info
                  </div>
                  <div class="kt-wizard-v1__review-content">
                    <label><b>City:  </b></label><p id="district1"></p>
                    <label><b>ZipCode:  </b></label><p id="zipcode1"></p>
                    <label><b>1. From whom are you taking this test :  </b></label><p id="result1"></p>
                    <label><b>2. What is your age group :  </b></label><p id="result2"></p>
                    <label><b>3. What is your gender :  </b></label><p id="result3"></p>
                    <label><b>4. Do you have fever :  </b></label><p id="result4"></p>
                    <label><b>5. Do you have dry cough :  </b></label><p id="result5"></p>
                  </div>
                </div>
                <div class="kt-wizard-v1__review-item">
                  <div class="kt-wizard-v1__review-title">
                    Symptoms
                  </div>
                  <div class="kt-wizard-v1__review-content">
                    <label><b>6. Do you have lost or less Feeling to smell :  </b></label><p id="result6"></p>
                    <label><b>7. Do you have throat pain :  </b></label><p id="result7"></p>
                    <label><b>8. Does your Body feel weak :  </b></label><p id="result8"></p>
                    <label><b>9. Do you have No Hunger :  </b></label><p id="result9"></p>
                    <label><b>10. Do you have normal or heavy cough :  </b></label><p id="result10"></p>
                  </div>
                </div>
                <div class="kt-wizard-v1__review-item">
                  <div class="kt-wizard-v1__review-title">
                    Other Symptoms
                  </div>
                  <div class="kt-wizard-v1__review-content">
                    <label><b>11. Do you have breath shortness :  </b></label><p id="result11"></p>
                    <label><b>12. Do you have normal breathing :  </b></label><p id="result12"></p>
                    <label><b>13. Do you Feel drowsy or sleep :  </b></label><p id="result13"></p>
                    <label><b>14. Do you feel Pain in chest :  </b></label><p id="result14"></p>
                    <label><b>15. Do you have Weakness across body :  </b></label><p id="result15"></p>
                  </div>
                </div>
                <div class="kt-wizard-v1__review-item">
                  <div class="kt-wizard-v1__review-title">
                    Travel
                  </div>
                  <div class="kt-wizard-v1__review-content">
                    <label><b>16. Have you visited outside state or country in last 21 days :  </b></label><p id="result16"></p>
                    <label><b>17. Have you came in contact with anyone affected :  </b></label><p id="result17"></p>
                    <label><b>18. Have you visited any of the corona infected countries in last 21 days :  </b></label><p id="result18"></p>
                    <label><b>19. Have you or your family came in contact with anyone affected in last 21 days :  </b></label><p id="result19"></p>
                    <label><b>20. Do you have any of these health condition :  </b></label><p id="result20"></p>
                    <label><b>21. Any disease symptoms in 24 hours :  </b></label><p id="result21"></p>
                    <label><b>22. Other info :  </b></label><p id="result22"></p>
                    <label><b>23. Proof :  </b></label><p id="result23"></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--end: Form Wizard Step 5-->

          <!--begin: Form Actions -->
          <div class="kt-form__actions">
            <button class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev">
              Previous
            </button>
         
                 <input type="submit" name="submit" id="case" value="submit" class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit" style="background-color:#afd135;border:2px solid #afd135;">

            <button class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-next" onclick="showvalue()" style="background-color:#034ea2;">
              Next Step
            </button>
          </div>

       
          <!--end: Form Actions -->
        </form>
        <!--end: Form Wizard Form-->
      </div>
    </div>
  </div>
</div>
  </div>
  </div>
</div>
</div>
</div>

</div>

 <div class="tab-pane" id="kt_tabs_1_3" role="tabpanel">
      <form class="kt-form" method="post">
                    <!--begin: Form Wizard Step 1-->
                    <div class="kt-wizard-v1__content" data-ktwizard-type="step-content" data-ktwizard-state="current" style="padding-left: 10%; padding-right: 10%;">
                        <div class="kt-heading kt-heading--md" style="font-size: 18px; font-weight: 300">Setup Your Current Info:</div>
                        <div class="kt-form__section kt-form__section--first">
                            <div class="kt-wizard-v1__form">
                                <div class="form-group">
                                 <div class="kt-section__content">
                        <label data-toggle="kt-popover" title="tooltip title" data-content="And here's some amazing content. It's very engaging. Right?" class="kt-heading kt-heading--md" style="font-size:16px;font-weight: 600;">Info:</label>
                    </div>  

                              <div class="row">
                                  <div class="col-md-2" style="text-align: center;">
                                     <i class="fa fa-user-shield" style="font-size: 50px; color: #034ea2;"></i>
                                 
                                    <div>
                                      Death
                                    </div>
                                  </div>
                                  <div class="col-md-2" style="text-align: center;">
                                    <i class="fa fa-hands-helping" style="font-size: 50px; color: #afd135;"></i>
                                    <div>
                                      Neighborhood Alert
                                    </div>
                                  </div>
                                  <div class="col-md-2" style="text-align: center;">
                                     <i class="fa fa-bus-alt" style="font-size: 50px; color: #034ea2;"></i>
                                    <div>
                                      Travel Alert
                                    </div>
                                  </div>
                                  <div class="col-md-2" style="text-align: center;">
                                    <i class="la la-feed" style="font-size: 50px; color: #afd135;"></i>
                                    <div>
                                      Medicine
                                    </div>
                                  </div>
                                     <div class="col-md-2" style="text-align: center;">
                                    <i class="flaticon-shopping-basket" style="font-size: 50px; color: #034ea2;"></i>
                                    <div>
                                      Grocery
                                    </div>
                                  </div>
                                     <div class="col-md-2" style="text-align: center;">
                                    <i class="fa fa-ambulance" style="font-size: 50px; color: #afd135;"></i>
                                    <div>
                                      Operation
                                    </div>
                                  </div>
                                </div>
           
                                  <!--   <span class="form-text text-muted">Please enter your Address.</span> -->
                                </div>
                                        <div class="form-group">
                                               <div class="kt-section__content">
                        <label data-toggle="kt-popover" title="tooltip title" data-content="And here's some amazing content. It's very engaging. Right?" class="kt-heading kt-heading--md" style="font-size:16px;font-weight: 600;">District:</label>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                                                                                       
<select id="district2" name="district2" class="form-control" style="border-color:#B8B8BB;background:transparent;">
       <option>Select your District</option>
         <option value='Chennai'  data-title="Chennai">Chennai</option>
         <option value='Ariyalur'  data-title="Ariyalur">Ariyalur</option>
         <option value='Chengalpattu'  data-title="Chengalpattu">Chengalpattu</option>
         <option value='Coimbatore'  data-title="Coimbatore">Coimbatore</option>
         <option value='Cuddalore'  data-title="Cuddalore">Cuddalore</option>
         <option value='Dharmapuri'  data-title="Dharmapuri">Dharmapuri</option>
         <option value='Dindigul'  data-title="Dindigul">Dindigul</option>
         <option value='Erode'  data-title="Erode">Erode</option>
         <option value='Kallakurichi'  data-title="Kallakurichi">Kallakurichi</option>
         <option value='Kanchipuram'  data-title="Kanchipuram">Kanchipuram</option>
         <option value='Kanniyakumari'  data-title="Kanniyakumari">Kanniyakumari</option>
         <option value='Karur'  data-title="Karur">Karur</option>
         <option value='Krishnagiri'  data-title="Krishnagiri">Krishnagiri</option>
         <option value='Madurai'  data-title="Madurai">Madurai</option>
         <option value='Mayiladuthurai'  data-title="Mayiladuthurai">Mayiladuthurai</option>
         <option value='Nagapattinam'  data-title="Nagapattinam">Nagapattinam</option>
         <option value='Namakkal'  data-title="Namakkal">Namakkal</option>
         <option value='Nilgiris'  data-title="Nilgiris">Nilgiris</option>
         <option value='Perambalur'  data-title="Perambalur">Perambalur</option>
         <option value='Pudukkottai'  data-title="Pudukkottai">Pudukkottai</option>
         <option value='Ramanathapuram'  data-title="Ramanathapuram">Ramanathapuram</option>
         <option value='Ranipet'  data-title="Ranipet">Ranipet</option>
         <option value='Salem'  data-title="Salem">Salem</option>
         <option value='Sivagangai'  data-title="Sivagangai">Sivagangai</option>
         <option value='Tenkasi'  data-title="Tenkasi">Tenkasi</option>
         <option value='Thanjavur'  data-title="Thanjavur">Thanjavur</option>
         <option value='Theni'  data-title="Theni">Theni</option>
         <option value='Thoothukudi'  data-title="Thoothukudi">Thoothukudi</option>
         <option value='Tiruchirappalli'  data-title="Tiruchirappalli">Tiruchirappalli</option>
         <option value='Tirunelveli'  data-title="Tirunelveli">Tirunelveli</option>
         <option value='Tirupattur'  data-title="Tirupattur">Tirupattur</option>
         <option value='Tiruppur'  data-title="Tiruppur">Tiruppur</option>
         <option value='Tiruvallur'  data-title="Tiruvallur">Tiruvallur</option>
         <option value='Tiruvannamalai'  data-title="Tiruvannamalai">Tiruvannamalai</option>
         <option value='Tiruvarur'  data-title="Tiruvarur">Tiruvarur</option>
         <option value='Vellore'  data-title="Vellore">Vellore</option>
         <option value='Viluppuram'  data-title="Viluppuram">Viluppuram</option>
         <option value='Virudhunagar'  data-title="Virudhunagar">Virudhunagar</option>

</select>
                                    </div>
                                  </div>
                                </div>
                                   
                                    <div class="form-group">
                                      <div class="kt-section__content">
                        <label data-toggle="kt-popover" title="tooltip title" data-content="And here's some amazing content. It's very engaging. Right?" class="kt-heading kt-heading--md" style="font-size:16px;font-weight: 600;">Description:</label>
                    </div>  
                         <textarea type="text" rows="8" class="form-control" name="Description1" id="Description1"></textarea>
                                </div>
                               <div class="form-group">
                                      <div class="kt-section__content">
                        <label data-toggle="kt-popover" title="tooltip title" data-content="And here's some amazing content. It's very engaging. Right?" class="kt-heading kt-heading--md" style="font-size:16px;font-weight: 600;">Artifacts:</label>
                    </div>  
                     <div class="form-group">
       
          <div class="dropzone dropzone-default dropzone-brand" id="kt_dropzone_2">
            <div class="dropzone-msg dz-message needsclick">
                <h3 class="dropzone-msg-title">Drop files here or click to upload.</h3>
                <!-- <span class="dropzone-msg-desc">Upload up to 10 files</span> -->
                <label for="Artifacts1" aria-hidden="true">
         <img src="csv.svg" title="Upload File" width="35" height="35" >
                 <input type="file" name="Artifacts1" id="Artifacts1" style="display: none;">
               </label>
            </div>
          </div>
        </div>
      </div>

                                        <div class="form-group">
                                      <div class="kt-section__content">
                        <label data-toggle="kt-popover" title="tooltip title" data-content="And here's some amazing content. It's very engaging. Right?" class="kt-heading kt-heading--md" style="font-size:16px;font-weight: 600;">Your Details:</label>
                    </div>  
                     <div class="form-group">
             
              <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;font-size: 14px;">
         <input type="radio" name="radio1" value="Anonymous1" id="Anonymous1" checked="checked">Keen to be Anonymous
         <span></span>
       </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <label class="kt-radio kt-radio--solid kt-radio--danger" style="color: black; font-size: 14px;">
             <input type="radio" name="radio1" value="disclose1" id="disclose1"> Keen to disclose

             <span></span>
           </label>


      </div>
     </div>
           <div id="details1">
            <div class="row">
         <div class="col-md-4">
           <input type="text" placeholder="FullName" id="name" name="name1" class="form-control" required="">&nbsp;
        </div>
      <div class="col-md-4">
        <input type="text" placeholder="Email" id="email" name="email1" class="form-control">&nbsp;
      </div>
      <div class="col-md-4">
        <input type="text" placeholder="Phone" id="phone" name="phone1" class="form-control" required="">
      </div>


  </div>
</div>

                            </div>
                        </div>
                    </div>
                        <input type="hidden" name="passkey1" id="passkey1">
          <input type="hidden" name="tipno1" id="tipno1">
                   <div style="text-align:center">  
    <input type="submit" name="login" id="info" value="submit" class="btn btn-success" style="display: inline-block;border-radius: 8px solid transparent;border:2px solid #afd135;color:#fff;background:#afd135;width: 30%;">
</div>  
                </form>


 </div>


<div class="tab-pane" id="kt_tabs_1_4" role="tabpanel">
    <div class="kt-container  kt-grid__item kt-grid__item--fluid">
    <div class="kt-portlet">
  <div class="kt-portlet__body kt-portlet__body--fit">
    <div class="kt-grid kt-wizard-v3 kt-wizard-v3--white" id="kt_wizard_v3" data-ktwizard-state="step-first">
      <div class="kt-grid__item">
        <!--begin: Form Wizard Nav -->
        <div class="kt-wizard-v3__nav">
          <div class="kt-wizard-v3__nav-items">
            <!--doc: Replace A tag with SPAN tag to disable the step link click -->
            <a class="kt-wizard-v3__nav-item" data-ktwizard-type="step" data-ktwizard-state="current">
              <div class="kt-wizard-v3__nav-body">
                <div class="kt-wizard-v3__nav-label">
                  <span>1</span> Anxiety
                </div>
                <div class="kt-wizard-v3__nav-bar"></div>
              </div>
            </a>
            <a class="kt-wizard-v3__nav-item" data-ktwizard-type="step">
              <div class="kt-wizard-v3__nav-body">
                <div class="kt-wizard-v3__nav-label">
                  <span>2</span> Depression
                </div>
                <div class="kt-wizard-v3__nav-bar"></div>
              </div>
            </a>
            <a class="kt-wizard-v3__nav-item" data-ktwizard-type="step">
              <div class="kt-wizard-v3__nav-body">
                <div class="kt-wizard-v3__nav-label">
                  <span>3</span> Stress
                </div>
                <div class="kt-wizard-v3__nav-bar"></div>
              </div>
            </a>
            <a class="kt-wizard-v3__nav-item" data-ktwizard-type="step">
              <div class="kt-wizard-v3__nav-body">
                <div class="kt-wizard-v3__nav-label">
                  <span>4</span> Self Esteem
                </div>
                <div class="kt-wizard-v3__nav-bar"></div>
              </div>
            </a>
            <a class="kt-wizard-v3__nav-item" data-ktwizard-type="step">
              <div class="kt-wizard-v3__nav-body">
                <div class="kt-wizard-v3__nav-label">
                  <span>5</span> Review 
                </div>
                <div class="kt-wizard-v3__nav-bar"></div>
              </div>
            </a>
          </div>
        </div>
        <!--end: Form Wizard Nav -->

      </div>
      <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v3__wrapper">
        <!--begin: Form Wizard Form-->
        <form class="kt-form" id="kt_form" method="post">
          <!--begin: Form Wizard Step 1-->
          <div class="kt-wizard-v3__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
              <div class="kt-form__section kt-form__section--first">
              <div class="kt-wizard-v1__form">


   <input type="hidden" name="secretkey3" id="secretkey">
          <input type="hidden" name="ran3" id="ran">


                <div class="row">
                  <div class="col-md-6">



                <div name="Description" style="display: ;">
            <p style="font-size: 20px; font-weight: 500">City :</p>
            <div>
                <div id="searchbox2">
                                                   
<select id="district3" name="district3" class="form-control" style="border-color:#B8B8BB;background:transparent;">
       <option>Select your District</option>
         <option value='Chennai'  data-title="Chennai">Chennai</option>
         <option value='Ariyalur'  data-title="Ariyalur">Ariyalur</option>
         <option value='Chengalpattu'  data-title="Chengalpattu">Chengalpattu</option>
         <option value='Coimbatore'  data-title="Coimbatore">Coimbatore</option>
         <option value='Cuddalore'  data-title="Cuddalore">Cuddalore</option>
         <option value='Dharmapuri'  data-title="Dharmapuri">Dharmapuri</option>
         <option value='Dindigul'  data-title="Dindigul">Dindigul</option>
         <option value='Erode'  data-title="Erode">Erode</option>
         <option value='Kallakurichi'  data-title="Kallakurichi">Kallakurichi</option>
         <option value='Kanchipuram'  data-title="Kanchipuram">Kanchipuram</option>
         <option value='Kanniyakumari'  data-title="Kanniyakumari">Kanniyakumari</option>
         <option value='Karur'  data-title="Karur">Karur</option>
         <option value='Krishnagiri'  data-title="Krishnagiri">Krishnagiri</option>
         <option value='Madurai'  data-title="Madurai">Madurai</option>
         <option value='Mayiladuthurai'  data-title="Mayiladuthurai">Mayiladuthurai</option>
         <option value='Nagapattinam'  data-title="Nagapattinam">Nagapattinam</option>
         <option value='Namakkal'  data-title="Namakkal">Namakkal</option>
         <option value='Nilgiris'  data-title="Nilgiris">Nilgiris</option>
         <option value='Perambalur'  data-title="Perambalur">Perambalur</option>
         <option value='Pudukkottai'  data-title="Pudukkottai">Pudukkottai</option>
         <option value='Ramanathapuram'  data-title="Ramanathapuram">Ramanathapuram</option>
         <option value='Ranipet'  data-title="Ranipet">Ranipet</option>
         <option value='Salem'  data-title="Salem">Salem</option>
         <option value='Sivagangai'  data-title="Sivagangai">Sivagangai</option>
         <option value='Tenkasi'  data-title="Tenkasi">Tenkasi</option>
         <option value='Thanjavur'  data-title="Thanjavur">Thanjavur</option>
         <option value='Theni'  data-title="Theni">Theni</option>
         <option value='Thoothukudi'  data-title="Thoothukudi">Thoothukudi</option>
         <option value='Tiruchirappalli'  data-title="Tiruchirappalli">Tiruchirappalli</option>
         <option value='Tirunelveli'  data-title="Tirunelveli">Tirunelveli</option>
         <option value='Tirupattur'  data-title="Tirupattur">Tirupattur</option>
         <option value='Tiruppur'  data-title="Tiruppur">Tiruppur</option>
         <option value='Tiruvallur'  data-title="Tiruvallur">Tiruvallur</option>
         <option value='Tiruvannamalai'  data-title="Tiruvannamalai">Tiruvannamalai</option>
         <option value='Tiruvarur'  data-title="Tiruvarur">Tiruvarur</option>
         <option value='Vellore'  data-title="Vellore">Vellore</option>
         <option value='Viluppuram'  data-title="Viluppuram">Viluppuram</option>
         <option value='Virudhunagar'  data-title="Virudhunagar">Virudhunagar</option>

</select>
         
        </div>
      </div>
    </div>
  </div>





    
</div>




<br>

                <div id="div0" name="Description" style="display: ;">
            <p style="font-size: 20px; font-weight: 500">Category :</p>
            <div>
                <div id="searchbox2">
           
<select class="form-control kt-select2" id="kt_select2_3" name="category3" multiple="multiple" style="width: 100%; height:60px;" placeholder="select">
        <option value="DEPRESSSION" selected>DEPRESSSION</option>
        <option value="ANXIETY">ANXIETY</option>
        <option value="STRESS">STRESS</option>


        <option value="ADHD">ADHD</option>
        <option value="ALCOHOL/DRUGUSE">ALCOHOL/DRUG USE</option>
        <option value="BIPOLAR">BIPOLAR</option>
        <option value="BORDERLINE">BORDERLINE(BPD)</option>
        <option value="BREAKUP">BREAK UPS</option>
        <option value="BULLYING">BULLYING</option>
        <option value="CANCER">CANCER</option>
        <option value="CHRONICPAIN">CHRONIC PAIN</option>
        <option value="DIABETES">DIABETES</option>
        <option value="DISABILITIES">DISABILITIES</option>
        <option value="DOMESTICVIOLENCE">DOMESTIC VIOLENCE</option>
        <option value="EATINGDISORDERS">EATING DISORDERS</option>
        <option value="EXERCISEMOTIVATION">EXERCISE MOTIVATION</option>
        <option value="FORGIVENESS">FORGIVENESS</option>
        <option value="GENERALMENTALHEALTH">GENERAL MENTAL HEALTH</option>
        <option value="GETTINGUNSTUCK">GETTING UNSTUCK</option>
        <option value="GRIEF">GRIEF</option>
        <option value="LGBTQ+">LGBTQ+</option>
        <option value="LONELINESS">LONELINESS</option>
        <option value="MANAGINGEMOTIONS">MANAGING EMOTIONS</option>
        <option value="MENSANDWOMENSISSUES">MENS AND WOMENS ISSUES</option>
        <option value="OBSESSIVECOMPLSIVEDISORDER">OBSESSIVE COMPULSIVE DISORDER(OCD)</option>
        <option value="PANICATTACKS">PANIC ATTACKS</option>
        <option value="PARENTING">PARENTING</option>
        <option value="PERINATALMOODDISORDER">PERINATAL MOOD DISORDER</option>
        <option value="PTSD/TRAUMA">PTSD/TRAUMA</option>
        <option value="RECOVERY">RECOVERY</option>
        <option value="RELATIONSHIPSTRESS">RELATIONSHIP STRESS</option>
        <option value="SELFESTEEM">SELF ESTEEM</option>
        <option value="SELFHARM">SELF HARM</option>
        <option value="SLEEPINGWELL">SLEEPING WELL</option>
        <option value="SLEEPLESSNESS">SLEEPLESSNESS</option>
        <option value="SOCIALANXIETY">SOCIAL ANXIETY</option>
        <option value="SPIRITUALITY">SPIRITUALITY</option>
        <option value="STUDENTLIFT">STUDENT LIFT</option>
        <option value="WEIGHTMANAGEMENT">WEIGHT MANAGEMENT</option>
        <option value="WORKSTRESS">WORK STRESS</option>


</select>
         
        </div>
      </div>
    </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">1. I found myself getting upset by quite trivial things ?</p>
                 <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="quitetrivial" name="quite_trivial" value="Not at all">
                    <label for="quitetrivial">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="quitetrivial" name="quite_trivial" value="All the time">
                    <label for="quitetrivial">All the time</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">2. I was aware of dryness of my mouth ?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="dryness" name="dryness" value="Not at all">
                    <label for="dryness">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="dryness" name="dryness" value="All the time">
                    <label for="dryness">All the time</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">3. I couldn't seem to experience any positive feeling at all ?</p>
                 <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="positivefeeling" name="positive_feeling" value="Not at all">
                    <label for="positivefeeling">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="positivefeeling" name="positivefeeling" value="All the time">
                    <label for="positivefeeling">All the time</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">4. I experienced breathing difficulty (eg, excessively rapid breathing, breathlessness in the absence of physical exertion) ?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="breathing" name="breathing_difficult" value="Not at all">
                    <label for="breathing">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="breathing" name="breathing_difficult" value="All the time">
                    <label for="breathing">All the time</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">5. I just couldn't seem to get going ?</p>
                 <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="getgoing" name="seem" value="Not at all">
                    <label for="getgoing">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="getgoing" name="seem" value="All the time">
                    <label for="getgoing">All the time</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">6. I tended to over-react to situations ?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="situations" name="over-react" value="Not at all">
                    <label for="situations">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="situations" name="over-react" value="All the time">
                    <label for="situations">All the time</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">7. I had a feeling of shakiness (eg, legs going to give way) ?</p>
                 <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="shakiness" name="shakiness" value="Not at all">
                    <label for="shakiness">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="shakiness" name="shakiness" value="All the time">
                    <label for="shakiness">All the time</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">8. I found it difficult to relax ?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="relax" name="difficult_relax" value="Not at all">
                    <label for="relax">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="relax" name="difficult_relax" value="All the time">
                    <label for="relax">All the time</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">9. II found myself in situations that made me so anxious I was most relieved when they ended ?</p>
                 <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="anxious" name="anxious" value="Not at all">
                    <label for="anxious">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="anxious" name="anxious" value="All the time">
                    <label for="anxious">All the time</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">10. I felt that I had nothing to look forward to ?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="forward" name="look_forward" value="Not at all">
                    <label for="forward">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="forward" name="look_forward" value="All the time">
                    <label for="forward">All the time</label><span></span></label><br>
                </div>
               
               
             
              </div>
            </div>
          </div>
          <!--end: Form Wizard Step 1-->

          <!--begin: Form Wizard Step 2-->
          <div class="kt-wizard-v3__content" data-ktwizard-type="step-content">
              <div class="kt-form__section kt-form__section--first">
              <div class="kt-wizard-v1__form">
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">11. I found myself getting upset rather easily ?</p>
                 <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="upset" name="upset" value="Not at all">
                    <label for="upset">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="upset" name="upset" value="All the time">
                    <label for="upset">All the time</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">12. I felt that I was using a lot of nervous energy ?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="nervous" name="nervous" value="Not at all">
                    <label for="nervous">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="nervous" name="nervous" value="All the time">
                    <label for="nervous">All the time</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">13. I felt sad and depressed ?</p>
                 <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="saddepressed" name="depressed" value="Not at all">
                    <label for="saddepressed">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="saddepressed" name="depressed" value="All the time">
                    <label for="saddepressed">All the time</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">14. I found myself getting impatient when I was delayed in any way (eg, lifts, traffic lights, being kept waiting) ?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="impatient" name="delayed" value="Not at all">
                    <label for="impatient">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="impatient" name="delayed" value="All the time">
                    <label for="impatient">All the time</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">15. I had a feeling of faintness ?</p>
                 <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="faintness" name="faintness" value="Not at all">
                    <label for="faintness">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="faintness" name="faintness" value="All the time">
                    <label for="faintness">All the time</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">16. I felt that I had lost interest in just about everything ?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="lostinterest" name="faintness_interest" value="Not at all">
                    <label for="lostinterest">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="lostinterest" name="faintness_interest" value="All the time">
                    <label for="lostinterest">All the time</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">17. I felt I wasn't worth much as a person ?</p>
                 <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="worthperson" name="worth" value="Not at all">
                    <label for="worthperson">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="worthperson" name="worth" value="All the time">
                    <label for="worthperson">All the time</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">18. I felt that I was rather touchy ?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="touchy" name="rather_touchy" value="Not at all">
                    <label for="touchy">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="touchy" name="rather_touchy" value="All the time">
                    <label for="touchy">All the time</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">19. I perspired noticeably (eg, hands sweaty) in the absence of high temperatures or physical exertion ?</p>
                 <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="noticeably" name="noticeably" value="Not at all">
                    <label for="noticeably">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="noticeably" name="noticeably" value="All the time">
                    <label for="noticeably">All the time</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">20. I felt scared without any good reason ?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="goodreason" name="scared" value="Not at all">
                    <label for="scared">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="scared" name="scared" value="All the time">
                    <label for="scared">All the time</label><span></span></label><br>
                </div>
               
              </div>
            </div>
          </div>
          <!--end: Form Wizard Step 2-->

          <!--begin: Form Wizard Step 3-->
          <div class="kt-wizard-v3__content" data-ktwizard-type="step-content">
              <div class="kt-form__section kt-form__section--first">
              <div class="kt-wizard-v1__form">
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">21. I felt that life wasn't worthwhile ?</p>
                 <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="worthwhile" name="worthwhile" value="Not at all">
                    <label for="worthwhile">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="worthwhile" name="worthwhile" value="All the time">
                    <label for="worthwhile">All the time</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">22. I found it hard to wind down ?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="winddown" name="wind_down" value="Not at all">
                    <label for="winddown">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="winddown" name="wind_down" value="All the time">
                    <label for="winddown">All the time</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">23. I had difficulty in swallowing ?</p>
                 <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="swallowing" name="swallowing" value="Not at all">
                    <label for="swallowing">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="swallowing" name="swallowing" value="All the time">
                    <label for="swallowing">All the time</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">24. I couldn't seem to get any enjoyment out of the things I did ?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="enjoyment" name="enjoyment" value="Not at all">
                    <label for="enjoyment">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="enjoyment" name="enjoyment" value="All the time">
                    <label for="enjoyment">All the time</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">25. I was aware of the action of my heart in the absence of physical exertion (eg, sense of heart rate increase, heart missing a beat) ?</p>
                 <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="physicalexertion" name="absence" value="Not at all">
                    <label for="physicalexertion">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="physicalexertion" name="absence" value="All the time">
                    <label for="physicalexertion">All the time</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">26. I felt down-hearted and blue ?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="feltdown" name="down-hearted" value="Not at all">
                    <label for="feltdown">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="feltdown" name="down-hearted" value="All the time">
                    <label for="feltdown">All the time</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">27. I found that I was very irritable ?</p>
                 <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="irritable" name="irritable" value="Not at all">
                    <label for="irritable">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="irritable" name="irritable" value="All the time">
                    <label for="irritable">All the time</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">28. I felt I was close to panic ?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="closepanic" name="panic" value="Not at all">
                    <label for="closepanic">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="closepanic" name="panic" value="All the time">
                    <label for="closepanic">All the time</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">29. I found it hard to calm down after something upset me ?</p>
                 <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="somethingupset" name="somethingupset" value="Not at all">
                    <label for="somethingupset">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="somethingupset" name="somethingupset" value="All the time">
                    <label for="somethingupset">All the time</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">30. I feared that I would be "thrown" by some trivial but unfamiliar task ?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="trivial" name="unfamiliar" value="Not at all">
                    <label for="trivial">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="trivial" name="unfamiliar" value="All the time">
                    <label for="trivial">All the time</label><span></span></label><br>
                </div>
               
               
              </div>
            </div>
          </div>
          <!--end: Form Wizard Step 3-->

          <!--begin: Form Wizard Step 4-->
          <div class="kt-wizard-v3__content" data-ktwizard-type="step-content">
<!--             <div class="kt-heading kt-heading--md">Setup Your Delivery Location</div>
 -->            <div class="kt-form__section kt-form__section--first">
              <div class="kt-wizard-v1__form">
                  <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">31. I was unable to become enthusiastic about anything ?</p>
                 <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="enthusiastic" name="enthusiastic" value="Not at all">
                    <label for="enthusiastic">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="enthusiastic" name="enthusiastic" value="All the time">
                    <label for="enthusiastic">All the time</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">32. I found it difficult to tolerate interruptions to what I was doing ?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="interruptions" name="interruptions" value="Not at all">
                    <label for="interruptions">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="interruptions" name="interruptions" value="All the time">
                    <label for="interruptions">All the time</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">33. I was in a state of nervous tension ?</p>
                 <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="nervoustension" name="tension" value="Not at all">
                    <label for="nervoustension">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="nervoustension" name="tension" value="All the time">
                    <label for="nervoustension">All the time</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">34. I felt I was pretty worthless ?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="prettyworthless" name="worthless" value="Not at all">
                    <label for="prettyworthless">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="prettyworthless" name="worthless" value="All the time">
                    <label for="prettyworthless">All the time</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">35. I was intolerant of anything that kept me from getting on with what I was doing ?</p>
                 <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="intolerant" name="intolerant" value="Not at all">
                    <label for="intolerant">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="intolerant" name="intolerant" value="All the time">
                    <label for="intolerant">All the time</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">36. I felt terrified ?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="terrified" name="terrified" value="Not at all">
                    <label for="terrified">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="terrified" name="terrified" value="All the time">
                    <label for="terrified">All the time</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">37. I could see nothing in the future to be hopeful about ?</p>
                 <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="hopefulabout" name="hopeful" value="Not at all">
                    <label for="hopefulabout">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="hopefulabout" name="hopeful" value="All the time">
                    <label for="hopefulabout">All the time</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">38. I felt that life was meaningless ?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="meaningless" name="meaningless" value="Not at all">
                    <label for="meaningless">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="meaningless" name="meaningless" value="All the time">
                    <label for="meaningless">All the time</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">39. I found myself getting agitated   ?</p>
                 <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="agitated" name="agitated" value="Not at all">
                    <label for="agitated">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="agitated" name="agitated" value="All the time">
                    <label for="agitated">All the time</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">40. I was worried about situations in which I might panic and make a fool of myself ?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="panic" name="" value="Not at all">
                    <label for="panic">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="panic" name=" fool_myself" value="All the time">
                    <label for="panic">All the time</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">41. I experienced trembling (eg, in the hands) ?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="trembling" name="trembling" value="Not at all">
                    <label for="trembling">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="trembling" name="trembling" value="All the time">
                    <label for="trembling">All the time</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">42. I found it difficult to work up the initiative to do things ?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="difficultwork" name="initiative" value="Not at all">
                    <label for="difficultwork">Not at all</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="difficultwork" name="initiative" value="All the time">
                    <label for="difficultwork">All the time</label><span></span></label><br>
                </div>
<!-- 
                <div id="div0" name="Description" style="display: ;">
            <p style="font-size: 20px; font-weight: 500">Category :</p>
            <div>
                <div id="searchbox2">
           
<select class="form-control kt-select2" id="kt_select2_3" name="param" multiple="multiple" style="width: 100%;" placeholder="select">
        <option value="DEPRESSSION" selected>DEPRESSSION</option>
        <option value="ANXIETY">ANXIETY</option>
        <option value="STRESS">STRESS</option>
        <option value="ADHD">ADHD</option>
        <option value="ALCOHOL/DRUGUSE">ALCOHOL/DRUG USE</option>
        <option value="BIPOLAR">BIPOLAR</option>
        <option value="BORDERLINE">BORDERLINE(BPD)</option>
        <option value="BREAKUP">BREAK UPS</option>
        <option value="BULLYING">BULLYING</option>
        <option value="CANCER">CANCER</option>
        <option value="CHRONICPAIN">CHRONIC PAIN</option>
        <option value="DIABETES">DIABETES</option>
        <option value="DISABILITIES">DISABILITIES</option>
        <option value="DOMESTICVIOLENCE">DOMESTIC VIOLENCE</option>
        <option value="EATINGDISORDERS">EATING DISORDERS</option>
        <option value="EXERCISEMOTIVATION">EXERCISE MOTIVATION</option>
        <option value="FORGIVENESS">FORGIVENESS</option>
        <option value="GENERALMENTALHEALTH">GENERAL MENTAL HEALTH</option>
        <option value="GETTINGUNSTUCK">GETTING UNSTUCK</option>
        <option value="GRIEF">GRIEF</option>
        <option value="LGBTQ+">LGBTQ+</option>
        <option value="LONELINESS">LONELINESS</option>
        <option value="MANAGINGEMOTIONS">MANAGING EMOTIONS</option>
        <option value="MENSANDWOMENSISSUES">MENS AND WOMENS ISSUES</option>
        <option value="OBSESSIVECOMPLSIVEDISORDER">OBSESSIVE COMPULSIVE DISORDER(OCD)</option>
        <option value="PANICATTACKS">PANIC ATTACKS</option>
        <option value="PARENTING">PARENTING</option>
        <option value="PERINATALMOODDISORDER">PERINATAL MOOD DISORDER</option>
        <option value="PTSD/TRAUMA">PTSD/TRAUMA</option>
        <option value="RECOVERY">RECOVERY</option>
        <option value="RELATIONSHIPSTRESS">RELATIONSHIP STRESS</option>
        <option value="SELFESTEEM">SELF ESTEEM</option>
        <option value="SELFHARM">SELF HARM</option>
        <option value="SLEEPINGWELL">SLEEPING WELL</option>
        <option value="SLEEPLESSNESS">SLEEPLESSNESS</option>
        <option value="SOCIALANXIETY">SOCIAL ANXIETY</option>
        <option value="SPIRITUALITY">SPIRITUALITY</option>
        <option value="STUDENTLIFT">STUDENT LIFT</option>
        <option value="WEIGHTMANAGEMENT">WEIGHT MANAGEMENT</option>
        <option value="WORKSTRESS">WORK STRESS</option>


</select>
         
        </div>
      </div>
    </div> -->
             
              </div>
            </div>
          </div>
          <!--end: Form Wizard Step 4-->

          <!--begin: Form Wizard Step 5-->
          <div class="kt-wizard-v3__content" data-ktwizard-type="step-content">
            <div class="kt-heading kt-heading--md">Review your Details and Submit</div>
              <div class="kt-form__section kt-form__section--first">
              <div class="kt-wizard-v1__review">
                <div class="kt-wizard-v1__review-item">
                  <div class="kt-wizard-v1__review-title">
                    Your info
                  </div>
                  <div class="kt-wizard-v1__review-content">
                    <label><b>1. I found myself getting upset by quite trivial things :  </b></label><p id="res1"></p>
                    <label><b>2. I was aware of dryness of my mouth :  </b></label><p id="res2"></p>
                    <label><b>3. I couldn't seem to experience any positive feeling at all :  </b></label><p id="res3"></p>
                    <label><b>4. I experienced breathing difficulty :  </b></label><p id="res4"></p>
                    <label><b>5. I just couldn't seem to get going :  </b></label><p id="res5"></p>
                    <label><b>6. I tended to over-react to situations :  </b></label><p id="res6"></p>
                    <label><b>7. I had a feeling of shakiness :  </b></label><p id="res7"></p>
                    <label><b>8. I found it difficult to relax :  </b></label><p id="res8"></p>
                    <label><b>9. I found myself in situations that made me so anxious I was most relieved when they ended :  </b></label><p id="res9"></p>
                    <label><b>10. I felt that I had nothing to look forward to :  </b></label><p id="res10"></p>
                  </div>
                </div>
                <div class="kt-wizard-v1__review-item">
                  <div class="kt-wizard-v1__review-title">
                    Symptoms
                  </div>
                  <div class="kt-wizard-v1__review-content">
                    <label><b>11. I found myself getting upset rather easily :  </b></label><p id="res11"></p>
                    <label><b>12. I felt that I was using a lot of nervous energy :  </b></label><p id="res12"></p>
                    <label><b>13. I felt sad and depressed :  </b></label><p id="res13"></p>
                    <label><b>14. I found myself getting impatient when I was delayed in any way  :  </b></label><p id="res14"></p>
                    <label><b>15. I had a feeling of faintness :  </b></label><p id="res15"></p>
                     <label><b>16. I felt that I had lost interest in just about everything :  </b></label><p id="res16"></p>
                    <label><b>17. I felt I wasn't worth much as a person :  </b></label><p id="res17"></p>
                    <label><b>18. I felt that I was rather touchy :  </b></label><p id="res18"></p>
                    <label><b>19. I perspired noticeably (eg, hands sweaty) in the absence of high temperatures or physical exertion :  </b></label><p id="res19"></p>
                    <label><b>20. I felt scared without any good reason :  </b></label><p id="res20"></p>
                   
                  </div>
                </div>
                <div class="kt-wizard-v1__review-item">
                  <div class="kt-wizard-v1__review-title">
                    Other Symptoms
                  </div>
                  <div class="kt-wizard-v1__review-content">
                    <label><b>21. I felt that life wasn't worthwhile :  </b></label><p id="res21"></p>
                    <label><b>22. I found it hard to wind down :  </b></label><p id="res22"></p>
                    <label><b>23. I had difficulty in swallowing :  </b></label><p id="res23"></p>
                    <label><b>24. I couldn't seem to get any enjoyment out of the things I did :  </b></label><p id="res24"></p>
                    <label><b>25. I was aware of the action of my heart in the absence of physical exertion :  </b></label><p id="res25"></p>
                     <label><b>26. I felt down-hearted and blue :  </b></label><p id="res26"></p>
                    <label><b>27. I found that I was very irritable :  </b></label><p id="res27"></p>
                    <label><b>28. I felt I was close to panic :  </b></label><p id="res28"></p>
                    <label><b>29. I found it hard to calm down after something upset me :  </b></label><p id="res29"></p>
                    <label><b>30. I feared that I would be "thrown" by some trivial but unfamiliar task :  </b></label><p id="res30"></p>
                  </div>
                </div>
                <div class="kt-wizard-v1__review-item">
                  <div class="kt-wizard-v1__review-title">
                    Travel
                  </div>
                  <div class="kt-wizard-v1__review-content">
                   <label><b>31. I was unable to become enthusiastic about anything :  </b></label><p id="res31"></p>
                    <label><b>32. I found it difficult to tolerate interruptions to what I was doing :  </b></label><p id="res32"></p>
                    <label><b>33. I was in a state of nervous tension :  </b></label><p id="res33"></p>
                    <label><b>34. I felt I was pretty worthless :  </b></label><p id="res34"></p>
                    <label><b>35. I was intolerant of anything that kept me from getting on with what I was doing :  </b></label><p id="res35"></p>
                    <label><b>36. I felt terrified :  </b></label><p id="res36"></p>
                    <label><b>37. I could see nothing in the future to be hopeful about :  </b></label><p id="res37"></p>
                    <label><b>38. I felt that life was meaningless :  </b></label><p id="res38"></p>
                    <label><b>39. I found myself getting agitated :  </b></label><p id="res39"></p>
                    <label><b>40. I was worried about situations in which I might panic and make a fool of myself :  </b></label><p id="res40"></p>
                    <label><b>41. I experienced trembling  :  </b></label><p id="res41"></p>
                    <label><b>42. I found it difficult to work up the initiative to do things :  </b></label><p id="res42"></p>
                    <label><b>43. Category : </b></label><p id="res43"></p>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--end: Form Wizard Step 5-->

          <!--begin: Form Actions -->
          <div class="kt-form__actions">
            <button class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev">
              Previous
            </button>
          
                 <input type="submit" name="emotion" value="submit" class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit" style="background-color:#afd135;border:2px solid #afd135;">
            <button class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-next" onclick="showvalue1()">
              Next Step
            </button>
          </div>
          <!--end: Form Actions -->
        </form>
       
        <!--end: Form Wizard Form-->
      </div>
    </div>
  </div>
</div>
  </div>

 </div>


</div>

</div>
</div>
</div>
<br><br>
 
<script type="text/javascript">
  $(document).ready(function(){

  var x = Math.floor((Math.random() * 10000000) + 1000080000000000);
  document.getElementById("ran").value=x;
  var result = '';
   var characters= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
   var charactersLength = characters.length;
   for ( var i = 0; i < 10; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
   }
   document.getElementById("secretkey").value=result;
   

});

</script>

 <script>
            var KTAppOptions = {"colors":{"state":{"brand":"#2c77f4","light":"#ffffff","dark":"#282a3c","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
        </script>
     
<script src="./assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
<script src="./assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
<script src="./assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
<script src="./assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>
<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
<script src="./assets/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/bootstrap-switch.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/select2/dist/js/select2.full.js" type="text/javascript"></script>
<script src="./assets/vendors/general/ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>
<script src="./assets/vendors/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
<script src="./assets/vendors/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
<script src="./assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
<script src="./assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
<script src="./assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
<script src="./assets/vendors/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
<script src="./assets/vendors/general/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
<script src="./assets/vendors/general/autosize/dist/autosize.js" type="text/javascript"></script>
<script src="./assets/vendors/general/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/dropzone/dist/dropzone.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/dropzone.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/quill/dist/quill.js" type="text/javascript"></script>
<script src="./assets/vendors/general/@yaireo/tagify/dist/tagify.polyfills.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/@yaireo/tagify/dist/tagify.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/summernote/dist/summernote.js" type="text/javascript"></script>
<script src="./assets/vendors/general/markdown/lib/markdown.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/bootstrap-markdown.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/bootstrap-notify.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
<script src="./assets/vendors/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/jquery-validation.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/toastr/build/toastr.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/dual-listbox/dist/dual-listbox.js" type="text/javascript"></script>
<script src="./assets/vendors/general/raphael/raphael.js" type="text/javascript"></script>
<script src="./assets/vendors/general/morris.js/morris.js" type="text/javascript"></script>
<script src="./assets/vendors/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
<script src="./assets/vendors/general/counterup/jquery.counterup.js" type="text/javascript"></script>
<script src="./assets/vendors/general/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
<script src="./assets/vendors/custom/js/vendors/sweetalert2.init.js" type="text/javascript"></script>
<script src="./assets/vendors/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
<script src="./assets/vendors/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
<script src="./assets/vendors/general/jquery.repeater/src/repeater.js" type="text/javascript"></script>
<script src="./assets/vendors/general/dompurify/dist/purify.js" type="text/javascript"></script>
<!--end:: Global Optional Vendors -->

<!--begin::Global Theme Bundle(used by all pages) -->
               
             <script src="./assets/js/demo2/scripts.bundle.js" type="text/javascript"></script>
        <!--end::Global Theme Bundle -->

       
                    <!--begin::Page Scripts(used by this page) -->
                            <script src="./assets/js/demo2/pages/wizard/wizard-1.js" type="text/javascript"></script>
                            <script src="./assets/js/demo2/pages/wizard/wizard-3.js" type="text/javascript"></script>
                            <script src="./assets/js/demo2/pages/crud/forms/widgets/select2.js" type="text/javascript"></script>
    <!-- end::Body -->
</body>
</html>
<script type="text/javascript">
  function showvalue(){
  var district = document.getElementById('district').value;
  document.getElementById('district1').innerHTML = district;
  var zipcode = document.getElementById('zipcode').value;
  document.getElementById('zipcode1').innerHTML = zipcode;
  var test = document.querySelector('input[name=taking_test]:checked').value;
  document.getElementById('result1').innerHTML = test;
  var age = document.querySelector('input[name=age]:checked').value;
  document.getElementById('result2').innerHTML = age;
  var gender = document.querySelector('input[name=gender]:checked').value;
  document.getElementById('result3').innerHTML = gender;
  var fever = document.querySelector('input[name=fever]:checked').value;
  document.getElementById('result4').innerHTML = fever;
  var drycough = document.querySelector('input[name=drycough]:checked').value;
  document.getElementById('result5').innerHTML = drycough;
  var feelingsmell = document.querySelector('input[name=feelingsmell]:checked').value;
  document.getElementById('result6').innerHTML = feelingsmell;
  var throatpain = document.querySelector('input[name=throatpain]:checked').value;
  document.getElementById('result7').innerHTML = throatpain;
  var bodyweak = document.querySelector('input[name=bodyweak]:checked').value;
  document.getElementById('result8').innerHTML = bodyweak;
  var nohunger = document.querySelector('input[name=nohunger]:checked').value;
  document.getElementById('result9').innerHTML = nohunger;
  var coughrange = document.querySelector('input[name=coughrange]:checked').value;
  document.getElementById('result10').innerHTML = coughrange;
  var shortness = document.querySelector('input[name=shortness]:checked').value;
  document.getElementById('result11').innerHTML = shortness;
  var breathing = document.querySelector('input[name=breathing]:checked').value;
  document.getElementById('result12').innerHTML = breathing;
  var drowsy = document.querySelector('input[name=drowsy]:checked').value;
  document.getElementById('result13').innerHTML = drowsy;
  var chestpain = document.querySelector('input[name=chestpain]:checked').value;
  document.getElementById('result14').innerHTML = chestpain;
  var weaknessbody = document.querySelector('input[name=weaknessbody]:checked').value;
  document.getElementById('result15').innerHTML = weaknessbody;
  var visitedoutside = document.querySelector('input[name=visitedoutside]:checked').value;
  document.getElementById('result16').innerHTML = visitedoutside;
  var contactaffect = document.querySelector('input[name=contactaffect]:checked').value;
  document.getElementById('result17').innerHTML = contactaffect;
  var infectedcountry = document.querySelector('input[name=infectedcountry]:checked').value;
  document.getElementById('result18').innerHTML = infectedcountry;
  var familycontact = document.querySelector('input[name=familycontact]:checked').value;
  document.getElementById('result19').innerHTML = familycontact;
  var healthcondition = document.querySelector('input[name=healthcondition]:checked').value;
  document.getElementById('result20').innerHTML = healthcondition;
  var diseasesymptoms = document.querySelector('input[name=diseasesymptoms]:checked').value;
  document.getElementById('result21').innerHTML = diseasesymptoms;
  var description = document.getElementById('Description').value;
  document.getElementById('result22').innerHTML = description;
  var artifact = document.getElementById('Artifacts').value;
  document.getElementById('result23').innerHTML = artifact;

}
</script>
<script>
$(document).ready(function(){
  $("#details").hide();
$("input[type='radio']").change(function(){
if($(this).val()=="Anonymous")
{
$("#details").hide();
}
if($(this).val()=="disclose")
{
$("#details").show();
}
});
});
</script>
<script>
$(document).ready(function(){
  $("#details1").hide();
$("input[type='radio']").change(function(){
if($(this).val()=="Anonymous1")
{
$("#details1").hide();
}
if($(this).val()=="disclose1")
{
$("#details1").show();
}
});
});
</script>

<script type="text/javascript">
  $(document).ready(function(){

  var x = Math.floor((Math.random() * 10000000) + 1000080000000000);
  document.getElementById("tipno1").value=x;
  var result = '';
   var characters= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
   var charactersLength = characters.length;
   for ( var i = 0; i < 10; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
   }
   document.getElementById("passkey1").value=result;
     
});


</script>
<?php include '../footer.php'; ?>


<!-- Changes Made-->