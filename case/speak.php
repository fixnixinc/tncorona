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

    $sql="INSERT INTO `case`(category,district,Description,name,email,phone,ran,secretkey,Artifacts,status,taking_test,age,gender,fever,drycough,feelingsmell,throatpain,bodyweak,nohunger,coughrange,shortness,breathing,drowsy,chestpain,weaknessbody,visitedoutside,contactaffect,infectedcountry,familycontact,healthcondition,diseasesymptoms)
     values('$category','$district','$Description','$name','$email','$phone','$ran','$secretkey','$Artifacts','$status','$taking_test','$age','$gender','$fever','$drycough','$feelingsmell','$throatpain','$bodyweak','$nohunger','$coughrange','$shortness','$breathing','$drowsy','$chestpain','$weaknessbody','$visitedoutside','$contactaffect','$infectedcountry','$familycontact','$healthcondition','$diseasesymptoms')";

        if(mysqli_query($link,$sql))
        {
           
           if (move_uploaded_file($_FILES["Artifacts"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["Artifacts"]["name"]). " has been uploaded.";
            }
              echo "successfully";
           header("location:casecode.php");
        }
        else
        {
           echo "Error: " . $sql . "<br>" . $link->error;
          }
        }
 
?>
<!DOCTYPE html>
<html>
 <head><!--begin::Base Path (base relative path for assets of this page) -->
<base href="/tncorona/">
        <meta charset="utf-8"/>

        <title>TN CoronaSpeak</title>
        <meta name="description" content="Base form control examples">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">        <!--end::Fonts -->
        <!--begin:: Global Mandatory Vendors -->
        <!--begin::Page Custom Styles(used by this page) -->
          <link href="./assets/css/demo2/pages/wizard/wizard-1.css" rel="stylesheet" type="text/css" />
                     <link href="assets/css/demo2/pages/support-center/home-2.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
<!--end:: Global Mandatory Vendors -->


                   
                    <link href="./assets/css/demo2/style.bundle.css" rel="stylesheet" type="text/css" />

                    <!-- <link href="./assets/css/demo2/style.bundle.css" rel="stylesheet" type="text/css" /> -->
                <!--end::Global Theme Styles -->

        <!--begin::Layout Skins(used by all pages) -->
                <!--end::Layout Skins -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/js/bootstrap-select.js"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.boot strapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="shortcut icon" href="assets/media/logos/fixnix.png" />
 <link rel="shortcut icon" href="assets/media/logos/fixnix.png" />
<?php include '../siteheader.php';?>
</head>


 <body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading"  >

    <!-- begin:: Page -->


<div class="kt-grid kt-grid--hor kt-grid--root">
<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper" >

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
            <a class="kt-wizard-v1__nav-item" data-ktwizard-type="step" data-ktwizard-state="current" id="sample1">
              <div class="kt-wizard-v1__nav-body">
                <div class="kt-wizard-v1__nav-icon">
                  <i class="flaticon-bus-stop"></i>
                </div>
                <div class="kt-wizard-v1__nav-label">
                  1. Your Info
                </div>
              </div>
            </a>
            <a class="kt-wizard-v1__nav-item" data-ktwizard-type="step" id="sample2">
              <div class="kt-wizard-v1__nav-body">
                <div class="kt-wizard-v1__nav-icon">
                  <i class="flaticon-list"></i>
                </div>
                <div class="kt-wizard-v1__nav-label">
                  2. Symptoms
                </div>
              </div>
            </a>
            <a class="kt-wizard-v1__nav-item" data-ktwizard-type="step" id="sample3">
              <div class="kt-wizard-v1__nav-body">
                <div class="kt-wizard-v1__nav-icon">
                  <i class="flaticon-responsive"></i>
                </div>
                <div class="kt-wizard-v1__nav-label">
                  3. Other Symptoms
                </div>
              </div>
            </a>
            <a class="kt-wizard-v1__nav-item" data-ktwizard-type="step" id="sample4">
              <div class="kt-wizard-v1__nav-body">
                <div class="kt-wizard-v1__nav-icon">
                  <i class="flaticon-truck"></i>
                </div>
                <div class="kt-wizard-v1__nav-label">
                  4. Travel
                </div>
              </div>
            </a>
            <a class="kt-wizard-v1__nav-item" data-ktwizard-type="step" id="sample5" onclick="showvalue()">
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
        <form class="kt-form" method="POST">
          <!--begin: Form Wizard Step 1-->
          <div class="kt-wizard-v1__content" data-ktwizard-type="step-content" data-ktwizard-state="current" id="p1">
            <!-- <div class="kt-heading kt-heading--md">Setup Your Current Location</div> -->
            <div class="kt-form__section kt-form__section--first">
              <div class="kt-wizard-v1__form">
                <div class="form-group row" id="div0" name="Description">
      <div class="col-md-2">
            <p style="font-size: 20px; font-weight: 500">District :</p>
          </div>
            <div class="col-md-10">
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

                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">1. For whom are You taking this test?</p>
                 <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="yourself" name="taking_test" value="For yourself" checked="checked">
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
                    <input type="radio" id="under12" name="age" value="Less Than 12" checked="checked">
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
                    <input type="radio" id="male" name="gender" value="Male" checked="checked">
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
                    <input type="radio" id="normal" name="fever" value="Normal" checked="checked">
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
                    <input type="radio" id="yes" name="drycough" value="Yes" checked="checked">
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
          <div class="kt-wizard-v1__content" data-ktwizard-type="step-content" id="p2" style="display: none;">
<!--             <div class="kt-heading kt-heading--md">Enter the Details of your Delivery</div>
 -->            <div class="kt-form__section kt-form__section--first">
              <div class="kt-wizard-v1__form">
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">6. Do you have lost or less Feeling to smell?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="yes" name="feelingsmell" value="Yes" checked="checked">
                    <label for="yes">Yes</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="normal" name="feelingsmell" value="Normal">
                    <label for="normal">Normal</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">7. Do you have throat pain?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="yes" name="throatpain" value="Yes" checked="checked">
                    <label for="yes">Yes</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="normal" name="throatpain" value="Normal">
                    <label for="normal">Normal</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">8. Does your Body feel weak?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="yes" name="bodyweak" value="Yes" checked="checked">
                    <label for="yes">Yes</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="normal" name="bodyweak" value="Normal">
                    <label for="normal">Normal</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">9. Do you have No Hunger?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="yes" name="nohunger" value="Yes" checked="checked">
                    <label for="yes">Yes</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="normalHunger" name="nohunger" value="Normal hunger">
                    <label for="normalHunger">Normal hunger</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">10. Do you have normal or heavy cough?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="yes" name="coughrange" value="Yes" checked="checked">
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
          <div class="kt-wizard-v1__content" data-ktwizard-type="step-content" id="p3" style="display: none;">
            <!-- <div class="kt-heading kt-heading--md">Select your Services</div> -->
            <div class="kt-form__section kt-form__section--first">
              <div class="kt-wizard-v1__form">
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">11. Do you have breath shortness?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="yes" name="shortness" value="Yes" checked="checked">
                    <label for="yes">Yes</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="normal" name="shortness" value="Normal">
                    <label for="normal">Normal</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">12. Do you have normal breathing?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="yes" name="breathing" value="Yes" checked="checked">
                    <label for="yes">Yes</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="normal" name="breathing" value="Normal">
                    <label for="normal">Normal</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">13. Do you Feel drowsy or sleep?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="yes" name="drowsy" value="Yes" checked="checked">
                    <label for="yes">Yes</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="normal" name="drowsy" value="Normal">
                    <label for="normal">Normal</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">14. Do you feel Pain in chest?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="yes" name="chestpain" value="Yes" checked="checked">
                    <label for="yes">Yes</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="normal" name="chestpain" value="Normal">
                    <label for="normal">Normal</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">15. Do you have Weakness across body?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="yes" name="weaknessbody" value="Yes" checked="checked">
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
          <div class="kt-wizard-v1__content" data-ktwizard-type="step-content" style="display: none;" id="p4">
            <!-- <div class="kt-heading kt-heading--md">Setup Your Delivery Location</div> -->
            <div class="kt-form__section kt-form__section--first">
              <div class="kt-wizard-v1__form">
                  <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">16. Have you  visited outside state or country  in last 21 days?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="yes" name="visitedoutside" value="Yes" checked="checked">
                    <label for="yes">Yes</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="no" name="visitedoutside" value="No">
                    <label for="no">No</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">17. Have you  came in contact with anyone affected?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="yes" name="contactaffect" value="Yes" checked="checked">
                    <label for="yes">Yes</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="no" name="contactaffect" value="No">
                    <label for="no">No</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">18. Have you visited any of the corona infected countries in last 21 days?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="china" name="infectedcountry" value="China" checked="checked">
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
                    <input type="radio" id="yes" name="familycontact" value="Yes" checked="checked">
                    <label for="yes">Yes</label><span></span> </label><br>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="no" name="familycontact" value="No">
                    <label for="no">No</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">20. Do you have any of these health condition?</p>
                    <label class="kt-checkbox kt-checkbox--bold kt-checkbox--success" style="color: black;">
                    <input type="checkbox" id="diabetes" name="healthcondition" value="Diabetes" checked="checked">
                    <label for="diabetes">Diabetes</label><span></span> </label><br>
                    <label class="kt-checkbox kt-checkbox--bold kt-checkbox--success" style="color: black;">
                    <input type="checkbox" id="high_bp" name="healthcondition" value="High BP">
                    <label for="high_bp">High BP</label><span></span></label><br>
                    <label class="kt-checkbox kt-checkbox--bold kt-checkbox--success" style="color: black;">
                    <input type="checkbox" id="heart_diseases" name="healthcondition" value="Heart Diseases">
                    <label for="heart_diseases">Heart Diseases</label><span></span></label><br>
                    <label class="kt-checkbox kt-checkbox--bold kt-checkbox--success" style="color: black;">
                    <input type="checkbox" id="kidney" name="healthcondition" value="Kidney">
                    <label for="kidney">Kidney</label><span></span></label><br>
                    <label class="kt-checkbox kt-checkbox--bold kt-checkbox--success" style="color: black;">
                    <input type="checkbox" id="lungs" name="healthcondition" value="Lungs">
                    <label for="lungs">Lungs</label><span></span></label><br>
                    <label class="kt-checkbox kt-checkbox--bold kt-checkbox--success" style="color: black;">
                    <input type="checkbox" id="stroke" name="healthcondition" value="Stroke">
                    <label for="stroke">Stroke</label><span></span></label><br>
                    <label class="kt-checkbox kt-checkbox--bold kt-checkbox--success" style="color: black;">
                    <input type="checkbox" id="immuno" name="healthcondition" value="Immuno compromised condition">
                    <label for="immuno">Immuno compromised condition</label><span></span></label><br>
                    <label class="kt-checkbox kt-checkbox--bold kt-checkbox--success" style="color: black;">
                    <input type="checkbox" id="noneoftheabove" name="healthcondition" value="None of the above">
                    <label for="noneoftheabove">None of the above</label><span></span></label><br>
                </div>
                <div class="form-group">
                  <p style="font-size: 20px; font-weight: 500">21. Any disease symptoms in 24 hours?</p>
                    <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
                    <input type="radio" id="yes" name="diseasesymptoms" value="Yes" checked="checked">
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
               
                     <input type="hidden" name="secretkey" id="secretkey">
          <input type="hidden" name="ran" id="ran">
             
              </div>
            </div>
          </div>
          <!--end: Form Wizard Step 4-->

          <!--begin: Form Wizard Step 5-->
          <div class="kt-wizard-v1__content" data-ktwizard-type="step-content" style="display: none;" id="p5">
            <div class="kt-heading kt-heading--md">Review your Details and Submit</div>
            <div class="kt-form__section kt-form__section--first">
              <div class="kt-wizard-v1__review">
                <div class="kt-wizard-v1__review-item">
                  <div class="kt-wizard-v1__review-title">
                    Your info
                  </div>
                  <div class="kt-wizard-v1__review-content">
                    <label><b>District:  </b></label><p id="result"></p>
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
            <div id="sub1" style="display: none;">
           <input type="submit" name="submit" value="submit" style="float: right;" class="btn btn-success">
           </div>
          <!--end: Form Wizard Step 5-->

          <!--begin: Form Actions -->
       <!--    <div class="kt-form__actions">
            <button class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev">
              Previous
            </button>
            <input type="submit" name="submit" value="submit" class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit">
                 <input type="submit" name="submit" value="submit" class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit">
             
            <button class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-next" onclick="showvalue()">
              Next Step
            </button>
          </div> -->
         
          <!--end: Form Actions -->
        </form>
  <!--       <a id="show">Click to Show/ Hide div</a>
 <div class="menu" style="display: none;">
    <ol>
      <li>India</li>
      <li>US</li>
      <li>UK</li>
      <li>Australia</li>
    </ol>
 </div> -->
</div>

        <!--end: Form Wizard Form-->
      </div>
    </div>
  </div>
</div>
  </div>
  </div>
</div>
</div>
<?php include '../footer.php'; ?>

</head>
<body>

             <script src="./assets/js/demo2/scripts.bundle.js" type="text/javascript"></script>
        <!--end::Global Theme Bundle -->

       
                    <!--begin::Page Scripts(used by this page) -->
                            <script src="./assets/js/demo2/pages/wizard/wizard-1.js" type="text/javascript"></script>
    <!-- end::Body -->
</body>
</html>
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
<script type="text/javascript">
  function showvalue(){
  var district = document.getElementById('district').value;
  document.getElementById('result').innerHTML = district;
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
    $('#sample1').click(function() {
      $('#p1').show();
    });
    $('#sample2').click(function() {
      $('#p2').show();
       $('#p1').hide();
        $('#p3').hide();
         $('#p4').hide();
          $('#p5').hide();
    });
     $('#sample3').click(function() {
      $('#p3').show();
       $('#p1').hide();
        $('#p2').hide();
         $('#p4').hide();
          $('#p5').hide();
    });
        $('#sample4').click(function() {
      $('#p4').show();
       $('#p1').hide();
        $('#p2').hide();
         $('#p3').hide();
          $('#p5').hide();
    });
            $('#sample5').click(function() {
      $('#p5').show();
       $('#p1').hide();
        $('#p2').hide();
         $('#p3').hide();
          $('#p4').hide();
          $('#sub1').show();
    });
});
</script>
</head>
<body>
  <!--updates by Aravind -->