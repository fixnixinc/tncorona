<?php 
include '../nav_header.html';


 ?>

<?php
   include "../php/common/config.php";
   $target_dir = "../documents/";
$target_file = $target_dir . basename($_FILES["Artifacts"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
   if(isset($_POST['submit']))
   {
     
          $district=$_POST['district'];
           $Description=htmlspecialchars($_POST['Description']);

               $ran=$_POST['tipno'];
                $secretkey=$_POST['passkey'];
                 $status="created";
                $Artifacts=$_FILES['Artifacts']['name'];
                $category = $_POST['category'];

    $sql="INSERT INTO `case`(district,Description,ran,secretkey,Artifact,status,category)
     values('$district','$Description','$ran','$secretkey','$Artifacts','$status', '$category')";

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
           // echo "Error: " . $sql . "<br>" . $link->error;
          }
        }
 
?>
<!DOCTYPE html>
<html lang="en" >
 <head><!--begin::Base Path (base relative path for assets of this page) -->
<base href="/corona/"><!--end::Base Path -->
        <meta charset="utf-8"/>

        <title>Corona | Case</title>
        <meta name="description" content="Base form control examples">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
 

     
<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->

<link href="assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/quill/dist/quill.snow.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/dual-listbox/dist/dual-listbox.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
<link href="assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
<link href="assets/toggleButton/bootstrap-toggle.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="assets/jquery-ui-1.11.4/jquery-ui.css"/>
 <link href="assets/css/demo3/style.bundle.css" rel="stylesheet" type="text/css" />
 <link rel="shortcut icon" href="corona/LG3.png" />
         <link rel="shortcut icon" href="./assets/media/company-logos/virus.png" />
         <link href="./assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
         <script src="./assets/js/demo3/pages/crud/forms/widgets/ion-range-slider.js" type="text/javascript"></script>
         <script src="./assets/vendors/general/ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>
    </head>

    <style type="text/css">
 .text-line {
        background-color: transparent;
        color: white;
        outline: none;
        outline-style: none;
        outline-offset: 0;
        border-top: none;
        border-left: none;
        border-right: none;
        border-bottom:solid white 1px;
        padding: 3px 10px;
        width: 700px;
        font-size: 16px;
    }
     .wid{
      position: relative;
      height: 40px;
    }
      .image {
      position: absolute;
      right: 24px;
      bottom: 149px;
    }

.imageandtext {
  position: relative;
}
.image_grid {
  display: inline-block;
  padding-left: 5px;
}
.image_grid img {                       /*  added rule  */
  display: block;
}

.image_grid input {
  display: none;
}
.image_grid input:checked + .caption {
  background: rgba(0,0,0,0.5);
}
.image_grid input:checked + .caption::after {
  content: '✔';    
  position: absolute;
  top: 60%; left: 51%;
  width: 30px; height: 30px;
  transform: translate(-50%,-50%);
  color: #CB3A29;
  font-size: 20px;
  text-align: center;
  border: 3px solid #CB3A29;
  border-radius: 50%;
}
@media screen and (min-width: 1024px) {
  .resp {
    position: absolute;
    margin-left: 930px;
    margin-top: -60px;
  }
  .icon {
    position: absolute;
    margin-left: 600px;
  }
  .sub {
    margin-left: 100%;
  }
}
@media only screen and (min-width: 320px) and (max-width: 425px) {
  .sub {
    margin-left: 40%;
  }
}
@media only screen and (min-width: 768px) and (max-width: 1023px) {
  .sub {
    margin-left: 50%;
  }
}
   </style>

  <body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading"> <br><br>
  
 <h3 style="text-align: center;color: black;font-size: 32px;"> Case
<a href="caselogin.php" title="FollowUp Case" class="icon" style="float: right;">
   <img src="./assets/media/company-logos/case1.png" height="40" class="idea1"  style=" border-radius: 50%; border-width: 2px;   border-color: red;   border-style: solid;"><br><h6>FollowUp Case</h6>
  </a></h3>
</div>
<br>
  <form class="kt-form kt-form" method="POST" enctype="multipart/form-data">

<div class="container">

   

    <div class="form-group row" id="div0" name="Description" >
      <div class="col-md-2">
            <label for="example-text-input" style="color: black;font-size: 20px;">District :</label>
          </div>
            <div class="col-md-10">
                <div id="searchbox2">
           
        <select id="district" name="district" class="form-control" style="border-color:#B8B8BB;background:transparent;" required="">
       <option>Select your District</option>
        <option value="Ariyalur">Ariyalur</option>
        <option value="Chennai" >Chennai</option>
        <option value="Coimbatore" >Coimbatore</option>
        <option value="Cuddalore" >Cuddalore</option>
        <option value="Dharmapur" >Dharmapur</option>
        <option value="Dindigul" >Dindigul</option>
        <option value="Erode" >Erode</option>
        <option value="Kanchipuram" >Kanchipuram</option>
        <option value="Kanniyakumari" >Kanniyakumari</option>
        <option value="Karur" >Karur</option>
        <option value="Krishnagiri" >Krishnagiri</option>
        <option value="Madurai" >Madurai</option>
        <option value="Nagapattinam" >Nagapattinam</option>
        <option value="Namakkal" >Namakkal</option>
        <option value="Nilgiris" >The Nilgiris</option>
        <option value="Perambalur" >Perambalur</option>
        <option value="Pudukkottai" >Pudukkottai</option>
        <option value="Ramanathapuram" >Ramanathapuram</option>
        <option value="Salem" >Salem</option>
        <option value="Sivaganga" >Sivaganga</option>
        <option value="Thanjavur" >Thanjavur</option>
        <option value="Theni" >Theni</option>
        <option value="Thoothukudi" >Thoothukudi</option>
        <option value="Tiruchirappalli" >Tiruchirappalli</option>
        <option value="Tirunelveli" >Tirunelveli</option>
        <option value="Tiruppur" >Tiruppur</option>
        <option value="Tiruvallur" >Tiruvallur</option>
        <option value="Tiruvannamalai" >Tiruvannamalai</option>
        <option value="Tiruvarur" >Tiruvarur</option>
        <option value="Vellore" >Vellore</option>
        <option value="Viluppuram" >Viluppuram</option>
        <option value="Virudhunagar" >Virudhunagar</option>
</select>
         
        </div>
      </div>
    </div>
    <br>
         
          <div class="form-group row" id="div1" name="Description" >
            <div class="col-md-2">
            <label for="example-text-input" style="color: black;font-size: 20px;">Details :</label>
          </div>
             <div class="col-md-10">
         
           <textarea type="text" rows="8" class="form-control output" name="Description" id="Description"  placeholder="Type something here....." style="border-color:#B8B8BB;background:transparent;" required=""></textarea> <span></span>
            <label aria-hidden="true"class="resp" style="color: black;font-size: 15px;">Artifacts<i class="btn btn-danger btn-block"><span class="flaticon-attachment"></span></i>
           <input type="file" name="Artifacts" hidden=""></label>
          </div>
          </div><br>
<div class="form-group row" id="div2" name="category" >
            <div class="col-md-2">
              <label for="example-text-input" style="color: black; font-size: 20px;">Infection :</label>
            </div>
            <div class="col-md-10">
          <div class="kt-ion-range-slider">
            <input type="hidden" name="category" id="kt_slider_1"/>
          </div>
        </div>
          </div>
          <br>
         


          <div class="form-group row" >
        <div class="col-md-2">
            <label for="example-text-input" style="font-size: 20px; margin-top: 40px; color: black">Info:</label>
          </div>
          <div class="col-md-10">
        <div class="grid-two imageandtext" >

  <div class="imageandtext image_grid">
    <label for="selimg1" style="text-align: center;">Death <br><br>
      <img src="info/death.png" class="img-thumbnail" style="height: 100px;width: 100px;border-radius: 50%;">
    </label>
    <input type="radio" name="selimg" id="selimg1" value="death">
    <div class="caption">
     
    </div>
  </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <div class="imageandtext image_grid">
    <label for="selimg2" style="text-align: center;">Neighborhood Alert<br><br>
      <img src="./assets/media/company-logos/neighbor.png" class="img-thumbnail" style="height: 100px;width: 100px;border-radius: 50%;">
    </label>
    <input type="radio" name="selimg" id="selimg2" value="NeighborhoodAlert">
    <div class="caption">
     
    </div>
  </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <div class="imageandtext image_grid">
    <label for="selimg3" style="text-align: center;">Travel Alert<br><br>
      <img src="./assets/media/company-logos/travel.png" class="img-thumbnail" style="height: 100px;width: 100px;border-radius: 50%;">
    </label>
    <input type="radio" name="selimg" id="selimg3" value="travelAlert">
    <div class="caption">
     
    </div>
  </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <div class="imageandtext image_grid">
    <label for="selimg4" style="text-align: center;">Feed<br><br>
      <img src="./assets/media/company-logos/feed.png" class="img-thumbnail" style="height: 100px;width: 100px;border-radius: 50%;">
    </label>
    <input type="radio" name="selimg" id="selimg4" value="feed">
    <div class="caption">
     
    </div>
  </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <div class="imageandtext image_grid">
    <label for="selimg5" style="text-align: center;">Operation<br><br>
      <img src="./assets/media/company-logos/operation.png" class="img-thumbnail" style="height: 100px;width: 100px;border-radius: 50%;">
    </label>
    <input type="radio" name="selimg" id="selimg5" value="operation">
    <div class="caption">
     
    </div>
  </div>

</div>
</div>
</div>
         

        <div id="div2" >
          <!-- <div class="form-group row">
            <div class="col-md-2">
            <label for="example-month-input" style="color: black;font-size: 20px;">Your details:</label>
          </div>
            <div class="col-md-10">
             
              <label class="kt-radio kt-radio--solid kt-radio--success" style="color: black;">
         <input type="radio" name="radio1" value="Anonymous" id="Anonymous" checked="checked">Keen to be Anonymous
         <span></span>
       </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <label class="kt-radio kt-radio--solid kt-radio--danger" style="color: black;">
             <input type="radio" name="radio1" value="disclose" id="disclose"> Keen to disclose

             <span></span>
           </label>

           <div id="details">
         <div class="col-md-4">
           <input type="text" placeholder="FullName" id="name" name="name" class="form-control" style="border-color:#B8B8BB;background:transparent;" required="">&nbsp;
        </div>
      <div class="col-md-4">
        <input type="text" placeholder="Email" id="email" name="email" class="form-control" style="border-color:#B8B8BB;background:transparent;" required="">&nbsp;
      </div>
      <div class="col-md-4">
        <input type="text" placeholder="Phone" id="phone" name="phone" class="form-control" style="border-color:#B8B8BB;background:transparent;" required="">
      </div>


  </div>
            </div>
             
          </div> -->
          <input type="hidden" name="passkey" id="passkey">
          <input type="hidden" name="tipno" id="tipno">

</div>


                 
                    <input type="submit" name="submit" id="Submit" class="btn btn-primary sub" data-toggle="modal" value="Submit">
                </div>
                <br>
</form>
</div>



    <script type="text/javascript">
      function reload() {
        location.reload();
      }
    </script>
<script type="text/javascript">
  var payment = document.getElementById('AHN'),
  downpayment = document.getElementById('BTC'),
    full_payment = document.getElementById('ETC');

function enableToggle(current, other1 , other2) {
    other1.disabled = current.value.replace(/\s+/,'').length > 0 ? true : false;
    other2.disabled = current.value.replace(/\s+/,'').length > 0 ? true : false;
}

downpayment.onkeyup = function () {
    enableToggle(this, full_payment, payment);
}
full_payment.onkeyup = function () {
    enableToggle(this, downpayment, payment);
}
payment.onkeyup = function () {
    enableToggle(this, full_payment, downpayment);
}
</script>
<script>
$(document).mouseup(function(e){
    var container = $("#category");

    // If the target of the click isn't the container
    if(!container.is(e.target) && container.has(e.target).length === 0){
         $('#div0').show();
    }
});
</script>
<!-- <script type="text/javascript">
  $(document).ready(function() {
    if($('#div0').on('change', function() {
      $('#div1').show();
     
     
    }));
       if($('#div1').on('click', function() {
      $('#div2').show();
     
     
    }));
         if($('#div2').on('click', function() {
      $('#div3').hide();
     
     
    }));
               if($('#div4').on('change', function() {
      $('#div5').hide();
     
     
    }));
   
  });
</script> -->

<script type="text/javascript">
  $(document).ready(function(){
 $("#Description").click(function(){
  var x = Math.floor((Math.random() * 10000000) + 1000080000000000);
  document.getElementById("tipno").value=x;
  var result = '';
   var characters= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
   var charactersLength = characters.length;
   for ( var i = 0; i < 10; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
   }
   document.getElementById("passkey").value=result;
     
});


});

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
   $("#peoples").hide();
   $("#donates").hide();
$("input[type='radio']").change(function(){
if($(this).val()=="donate")
{
  $("#donates").hide();
$("#peoples").show();
}
if($(this).val()=="self")
{
  $("#peoples").hide();
$("#donates").show();
}

});
});
</script>
<script type="text/javascript">
  class SpeechRecognitionApi{
  constructor(options) {
    const SpeechToText = window.speechRecogniton || window.webkitSpeechRecognition;
    this.speechApi = new SpeechToText();
    this.output = options.output ? options.output: document.createElement("");
    this.speechApi.continuous = true;
    this.speechApi.interimResult = false;
    this.speechApi.onresult = (event) => {
      var resultIndex = event.resultIndex;
      var transcript = event.results[resultIndex][0].transcript;
      this.output.textContent += transcript;
      console.log(this.output)
    }
  }
  init() {
    this.speechApi.start();
  }
  stop() {
    this.speechApi.stop();
  }
}
window.onload = function() {
  var speech = new SpeechRecognitionApi({
    output: document.querySelector(".output")
  })
  document.querySelector("#start").addEventListener("click", () => {
    speech.init();
  })

  document.querySelector("#end").addEventListener("click", () =>{
    speech.stop();
  })
}
</script>
    <script>
$(document).ready(function() {
  $("#countries").msDropdown();
})
</script>

</body>

</html>