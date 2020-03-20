<!DOCTYPE html>
<html lang="en" >
 <head><!--begin::Base Path (base relative path for assets of this page) -->
<base href="/corona/"><!--end::Base Path -->
        <meta charset="utf-8"/>

        <title>Corona</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <meta name="description" content="Base form control examples">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://www.marghoobsuleman.com/misc/jquery.js"></script>
<!-- <msdropdown> -->
<link rel="stylesheet" type="text/css" href="css/msdropdown/dd.css" />
<script src="js/msdropdown/jquery.dd.min.js"></script>
<!-- </msdropdown> -->
<link rel="stylesheet" type="text/css" href="css/msdropdown/flags.css" />
        <link rel="shortcut icon" href="./assets/media/company-logos/virus.png" />
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script src="sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">

 <style type="text/css">
   @media screen and (max-width:600px)
   {
    .process{
      width:100%;
    }
   }
 </style>
    </head>
    <?php
      include "siteheader.php";
    ?>

<!-- Changes edited in siteheader2 -->

      <body>

<br>


<div class="container">
           
    <div class="row" style="margin-left: 40px;">
        <div class="col-xs-6 col-md-2">
           
            <div class="panel status" style="background-color: #D1D4FF;">
                <div class="panel-heading">
                    <h1 class="panel-title text-center" style="color: #5A64FF; font-size: 18px;"><b>Country</b></h1>
                </div>
       <div class="panel-body" style="background-color: #EAEBFC">                        
   <select name="countries" id="countries" style="width: 100%;" onchange="fun()">
   <option value='gb' data-image="images/msdropdown/icons/global.jpeg" style="background: transparent;" data-imagecss="flag ad" data-title="Andorra">Global</option>
   <option value='China' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag cn" data-title="China">China</option>
    <option value='italy' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag it" data-title="Italy">Italy</option>
    <option value='iran' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ir" data-title="Iran">Iran</option>
    <option value='Korea' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag kr" data-title="Korea (South)">Korea (South)</option>
    <option value='france' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag fr" data-title="France">France</option>
     <option value='Spain' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag es" data-title="Spain">Spain</option>
     <option value='Germany' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag de" data-title="Germany">Germany</option>
     <option value='States' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag us" data-title="United States">United States</option>
     <option value='Japan' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag jp" data-title="Japan">Japan</option>
     <option value='Switzerland' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ch" data-title="Switzerland">Switzerland</option>
    <option value='Kingdom' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag uk" data-title="United Kingdom">United Kingdom</option>
    <option value='Netherlands' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag an" data-title="Netherlands Antilles">Netherlands Antilles</option>
    <option value='Sweden' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag se" data-title="Sweden">Sweden</option>
    <option value='Belgium' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag be" data-title="Belgium">Belgium</option>
    <option value='Norway' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag no" data-title="Norway">Norway</option>
    <option value='Singapore' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag sg" data-title="Singapore">Singapore</option>
    <option value='Austria' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag at" data-title="Austria">Austria</option>
    <option value='Malaysia' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag my" data-title="Malaysia">Malaysia</option>
    <option value='Hong Kong' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag hk" data-title="Hong Kong">Hong Kong</option>
    <option value='Denmark' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag dk" data-title="Denmark">Denmark</option>
    <option value='Bahrain' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag bh" data-title="Bahrain">Bahrain</option>
    <option value='Australia' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag au" data-title="Australia">Australia</option>
     <option value='Greece' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag gr" data-title="Greece">Greece</option>
     <option value='Canada' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ca" data-title="Canada">Canada</option>
     <option value='Arab' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ae" data-title="United Arab Emirates">United Arab Emirates</option>
     <option value='Iraq' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag iq" data-title="Iraq">Iraq</option>
     <option value='Kuwait' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag kw" data-title="Kuwait">Kuwait</option>
     <option value='Iceland' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag is" data-title="Iceland">Iceland</option>
     <option value='Egypt' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag eg" data-title="Egypt">Egypt</option>
     <option value='India' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag in" data-title="India">India</option>
      <option value='Thailand' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag th" data-title="Thailand">Thailand</option>
       <option value='San Marino' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag sm" data-title="San Marino">San Marino</option>
    <option value='Israel' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag il" data-title="Israel">Israel</option>
    <option value='Taiwan' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag tw" data-title="Taiwan">Taiwan</option>
    <option value='Lebanon' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag lb" data-title="Lebanon">Lebanon</option>
    <option value='Finland' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag fi" data-title="Finland">Finland</option>
    <option value='Czech Republic' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag cz" data-title="Czech Republic">Czech Republic</option>
    <option value='Portugal' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag pt" data-title="Portugal">Portugal</option>
    <option value='Philippines' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ph" data-title="Philippines">Philippines</option>
    <option value='Brazil' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag br" data-title="Brazil">Brazil</option>
    <option value='Slovenia' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag si" data-title="Slovenia">Slovenia</option>
    <option value='Ireland' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ie" data-title="Ireland">Ireland</option>
    <option value='Russia' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ru" data-title="Russian Federation">Russian Federation</option>
    <option value='Saudi Arabia' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag sa" data-title="Saudi Arabia">Saudi Arabia</option>
    <option value='Algeria' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag dz" data-title="Algeria">Algeria</option>
    <option value='Indonesia' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag id" data-title="Indonesia">Indonesia</option>
     <option value='Oman' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag om" data-title="Oman">Oman</option>
    <option value='Qatar' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag qa" data-title="Qatar">Qatar</option>
    <option value='Romania' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ro" data-title="Romania">Romania</option>
    <option value='Argentina' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ar" data-title="Argentina">Argentina</option>
    <option value='Poland' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag pl" data-title="Poland">Poland</option>
    <option value='Pakistan' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag pk" data-title="Pakistan">Pakistan</option>
     <option value='Ecuador' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ec" data-title="Ecuador">Ecuador</option>
    <option value='Croatia' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag hr" data-title="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
    <option value='Chile' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag cl" data-title="Chile">Chile</option>
    <option value='Estonia' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ee" data-title="Estonia">Estonia</option>
    <option value='Peru' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag pe" data-title="Peru">Peru</option>
    <option value='Azerbaijan' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag az" data-title="Azerbaijan">Azerbaijan</option>
    <option value='Costa Rica' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag cr" data-title="Costa Rica">Costa Rica</option>
    <option value='Hungary' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag hu" data-title="Hungary">Hungary</option>
     <option value='Latvia' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag lv" data-title="Latvia">Latvia</option>
    <option value='Mexico' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag mx" data-title="Mexico">Mexico</option>
    <option value='South Africa' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag za" data-title="South Africa">South Africa</option>
    <option value='Slovakia' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag sk" data-title="Slovakia">Slovakia</option>
     <option value='Belarus' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag by" data-title="Belarus">Belarus</option>

    <option value='Albania' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag al" data-title="Albania">Albania</option>
     <option value='Maldives' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag mv" data-title="Maldives">Maldives</option>
     <option value='Tunisia' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag tn" data-title="Tunisia">Tunisia</option>
     <option value='Luxembourg' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag lu" data-title="Luxembourg">Luxembourg</option>
     <option value='French Guiana' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag gf" data-title="French Guiana">French Guiana</option>
    <option value='New Zealand' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag nz" data-title="New Zealand (Aotearoa)">New Zealand (Aotearoa)</option>
    <option value='Dominican Republic' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag do" data-title="Dominican Republic">Dominican Republic</option>
    <option value='Bosnia and Herzegovina' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ba" data-title="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
    <option value='Afghanistan' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag af" data-title="Afghanistan">Afghanistan</option>

    <option value='Senegal' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag sn" data-title="Senegal">Senegal</option>

     <option value='Bulgaria' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag bg" data-title="Bulgaria">Bulgaria</option>

      <option value='Serbia' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag cs" data-title="Serbia and Montenegro">Serbia and Montenegro</option>
      <option value='Malta' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag mt" data-title="Malta">Malta</option>
      <option value='Bangladesh' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag bd" data-title="Bangladesh">Bangladesh</option>
      <option value='Colombia' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag co" data-title="Colombia">Colombia</option>
       <option value='Cyprus' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag cy" data-title="Cyprus">Cyprus</option>
       <option value='Faroe Islands' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag fo" data-title="Faroe Islands">Faroe Islands</option>
     <option value='Morocco' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ma" data-title="Morocco">Morocco</option>
     <option value='Nigeria' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ng" data-title="Nigeria">Nigeria</option>

</select>
                </div>
            </div>

        </div>          
        <div class="col-xs-6 col-md-2">
         
            <div class="panel status" style="background-color: #FCD7D7;">
                <div class="panel-heading">
                    <h1 class="panel-title text-center" style="color: #E53E3E; font-size: 18px;"><b>Confirmed</b></h1>
                </div>
                <div class="panel-body text-center" style="background-color: #FEF5F5;">        
           
                    <strong style="color: #E53E3E; font-size: 24px;" id="conf">170,247</strong>
                </div>
            </div>

        </div>
        <div class="col-xs-6 col-md-2">
           
            <div class="panel status" style="background-color: #C6F6D5; ">
                <div class="panel-heading">
                    <h1 class="panel-title text-center"style="color: #38A169; font-size: 18px;"><b>Death</b></h1>
                </div>
                <div class="panel-body text-center" style="background-color: #F0FFF4;">  
       
                    <strong style="color: #38A169; font-size: 24px;" id="death">6,526</strong>
                </div>
            </div>

         
        </div>

        <div class="col-xs-6 col-md-2">
           
            <div class="panel status" style="background-color: #C7F4FA; ">
                <div class="panel-heading">
                    <h1 class="panel-title text-center"style="color: #27DDFA; font-size: 18px;"><b>Case</b></h1>
                </div>
                <div class="panel-body text-center" style="background-color: #E2F8FB;">        
                 <strong style="color: #27DDFA; font-size: 24px;" id="case">691</strong>
               

                </div>
            </div>

         
        </div>

        <div class="col-xs-6 col-md-2">
           
            <div class="panel status" style="background-color: #FCD6F6; ">
                <div class="panel-heading">
                    <h1 class="panel-title text-center"style="color: #FC63E4; font-size: 18px;"><b>Info</b></h1>
                </div>
                <div class="panel-body text-center" style="background-color: #FCEEFA;">                    
                    <strong style="color: #FC63E4; font-size: 24px;" id="info">754</strong>
                </div>
            </div>

         
        </div>
       


<!-- <div class="panel status" style="background-color: #D1D4FF; width: 200px; position: absolute; margin-left:900px;">
            <div class="panel-heading">
                <h1 class="panel-title text-center" style="color: #5A64FF; font-size: 18px;"><b>Language</b></h1>
            </div>
             <div id="google_translate_element"></div>
          </div> -->

</div>
</div>

        <div class="container">
         
                      <h1 class="d-flex justify-content-center mb-3"><b>Are you keen to share any infection or info related to #Corona ? </b></h1>
 <h2 class="d-flex justify-content-center mb-3">Try our #CoronaSpeak clicking the below icon</h2>
          <div class="row d-flex justify-content-center" >
           

                  <div class="col-md-6 mb-3 d-flex justify-content-center">
               
                <button type="button" name="button" class="btn btn-default" onclick="fun1()">
                  <img src="./assets/media/company-logos/coronaLogo.png" title="" height="170" class="face" id="face">        
                </button>
         
          </div>
              </div>
              
               <img src="./assets/media/company-logos/process.png" class="process">
        </div>
        <?php
      include "footer.php";
    ?>

   </body>
       


 
<style type="text/css">
.face {
  size: #;
}

.face:hover {
  animation: shake 0.82s cubic-bezier(.36,.07,.19,.97) both;
  transform: translate3d(0, 0, 0);
  backface-visibility: hidden;
  perspective: 1000px;
}

@keyframes shake {
  10%, 90% {
    transform: translate3d(-1px, 0, 0);
  }
 
  20%, 80% {
    transform: translate3d(2px, 0, 0);
  }

  30%, 50%, 70% {
    transform: translate3d(-4px, 0, 0);
  }

  40%, 60% {
    transform: translate3d(4px, 0, 0);
  }
}


  .blower
  {
    margin-left: 70%;
    margin-top: 15px;
    background-color:#;

  }
  .blower1:hover{
    background-color:#07bbf7;
    transform: scale(1.05);
    -webkit-transform: scale(1.05);
    -moz-transform: scale(1.05);
    -ms-transform: scale(1.05);
    -o-transform: scale(1.05);
    transition: all .3s ease-in-out;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
  }
    .idea1:hover{
    background-color:#07bbf7;
    transform: scale(1.05);
    -webkit-transform: scale(1.05);
    -moz-transform: scale(1.05);
    -ms-transform: scale(1.05);
    -o-transform: scale(1.05);
    transition: all .3s ease-in-out;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
  }

</style>

    <!-- end::Body -->
</html>
<script>
$(document).ready(function() {
  $("#countries").msDropdown();
})
</script>
<script type="text/javascript">
  function fun ()
  {
     var sa=document.getElementById("countries").value;
     if(sa=="China")
        {
      document.getElementById("conf").innerHTML="81,214";
      document.getElementById("death").innerHTML="3,253";
      document.getElementById("case").innerHTML="431";
      document.getElementById("info").innerHTML="457";
       }
    if(sa=="italy")
    {
        document.getElementById("conf").innerHTML="41,038";
       document.getElementById("death").innerHTML="3,405";
       document.getElementById("case").innerHTML="66";
       document.getElementById("info").innerHTML="70";
    }
      if(sa=="iran")
    {
        document.getElementById("conf").innerHTML="18,407";
       document.getElementById("death").innerHTML="1,284";
       document.getElementById("case").innerHTML="54";
       document.getElementById("info").innerHTML="57";
    }
     if(sa=="Korea")
    {
      document.getElementById("conf").innerHTML="8,652";
      document.getElementById("death").innerHTML="94";
      document.getElementById("case").innerHTML="42";
      document.getElementById("info").innerHTML="44";
    }
     if(sa=="Spain")
    {
        document.getElementById("conf").innerHTML="18,077";
       document.getElementById("death").innerHTML="833";
       document.getElementById("case").innerHTML="12";
       document.getElementById("info").innerHTML="13";
    }
     if(sa=="France")
    {
        document.getElementById("conf").innerHTML="10,995";
       document.getElementById("death").innerHTML="372";
       document.getElementById("case").innerHTML="12";
       document.getElementById("info").innerHTML="13";
    }
     if(sa=="Germany")
    {
        document.getElementById("conf").innerHTML="16,290";
       document.getElementById("death").innerHTML="44";
       document.getElementById("case").innerHTML="12";
       document.getElementById("info").innerHTML="13";
    }
     if(sa=="States")
    {
        document.getElementById("conf").innerHTML="14,363";
       document.getElementById("death").innerHTML="217";
       document.getElementById("case").innerHTML="8";
       document.getElementById("info").innerHTML="8";
    }
 
      if(sa=="Japan")
    {
        document.getElementById("conf").innerHTML="943";
       document.getElementById("death").innerHTML="33";
       document.getElementById("case").innerHTML="4";
       document.getElementById("info").innerHTML="4";
    }
     if(sa=="Switzerland")
    {
        document.getElementById("conf").innerHTML="4,222";
       document.getElementById("death").innerHTML="43";
       document.getElementById("case").innerHTML="4";
       document.getElementById("info").innerHTML="4";
    }
     if(sa=="Kingdom")
    {
        document.getElementById("conf").innerHTML="3,269";
       document.getElementById("death").innerHTML="144";
       document.getElementById("case").innerHTML="3";
       document.getElementById("info").innerHTML="3";
    }
     if(sa=="Netherlands")
    {
        document.getElementById("conf").innerHTML="2,460";
       document.getElementById("death").innerHTML="76";
       document.getElementById("case").innerHTML="3";
       document.getElementById("info").innerHTML="3";
    }
     if(sa=="Belgium")
    {
        document.getElementById("conf").innerHTML="1,795";
       document.getElementById("death").innerHTML="21";
       document.getElementById("case").innerHTML="2";
       document.getElementById("info").innerHTML="2";
    }
     if(sa=="Sweden")
    {
        document.getElementById("conf").innerHTML="1,439";
       document.getElementById("death").innerHTML="11";
       document.getElementById("case").innerHTML="3";
       document.getElementById("info").innerHTML="3";
    }
     if(sa=="Norway")
    {
        document.getElementById("conf").innerHTML="1,790";
       document.getElementById("death").innerHTML="7";
       document.getElementById("case").innerHTML="4";
       document.getElementById("info").innerHTML="4";
    }
   

      if(sa=="Singapore")
    {
        document.getElementById("conf").innerHTML="345";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="1";
    }



     if(sa=="Austria")
    {
        document.getElementById("conf").innerHTML="2,013";
       document.getElementById("death").innerHTML="6";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="1";
    }
     if(sa=="Malaysia")
    {
        document.getElementById("conf").innerHTML="900";
       document.getElementById("death").innerHTML="2";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="1";
    }
     if(sa=="Hong Kong")
    {
        document.getElementById("conf").innerHTML="208";
       document.getElementById("death").innerHTML="4";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
     if(sa=="Denmark")
    {
        document.getElementById("conf").innerHTML="1,223";
       document.getElementById("death").innerHTML="6";
       document.getElementById("case").innerHTML="4";
       document.getElementById("info").innerHTML="4";
    }
     if(sa=="Bahrain")
    {
        document.getElementById("conf").innerHTML="278";
       document.getElementById("death").innerHTML="1";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="1";
    }
     if(sa=="Australia")
    {
        document.getElementById("conf").innerHTML="814";
       document.getElementById("death").innerHTML="7";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="1";
    }
   
      if(sa=="Greece")
    {
        document.getElementById("conf").innerHTML="464";
       document.getElementById("death").innerHTML="6";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="1";
    }
     if(sa=="Canada")
    {
        document.getElementById("conf").innerHTML="873";
       document.getElementById("death").innerHTML="12";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="1";
    }
     if(sa=="Arab")
    {
        document.getElementById("conf").innerHTML="140";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
     if(sa=="Iraq")
    {
        document.getElementById("conf").innerHTML="192";
       document.getElementById("death").innerHTML="13";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
     if(sa=="Kuwait")
    {
        document.getElementById("conf").innerHTML="148";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="1";
    }
     if(sa=="Iceland")
    {
        document.getElementById("conf").innerHTML="330";
       document.getElementById("death").innerHTML="1";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="1";
    }
     if(sa=="Egypt")
    {
        document.getElementById("conf").innerHTML="256";
       document.getElementById("death").innerHTML="7";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }


      if(sa=="India")
    {
        document.getElementById("conf").innerHTML="197";
       document.getElementById("death").innerHTML="4";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
     if(sa=="Thailand")
    {
        document.getElementById("conf").innerHTML="322";
       document.getElementById("death").innerHTML="1";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
     if(sa=="San Marino")
    {
        document.getElementById("conf").innerHTML="109";
       document.getElementById("death").innerHTML="7";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
     if(sa=="Israel")
    {
        document.getElementById("conf").innerHTML="251";
       document.getElementById("death").innerHTML="4";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="1";
    }
     if(sa=="Taiwan")
    {
        document.getElementById("conf").innerHTML="59";
       document.getElementById("death").innerHTML="1";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
     if(sa=="Lebanon")
    {
        document.getElementById("conf").innerHTML="99";
       document.getElementById("death").innerHTML="3";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
     if(sa=="Finland")
    {
        document.getElementById("conf").innerHTML="244";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
   
      if(sa=="Czech Republic")
    {
        document.getElementById("conf").innerHTML="298";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="1";
    }
     if(sa=="Portugal")
    {
        document.getElementById("conf").innerHTML="245";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="1";
    }
     if(sa=="Philippines")
    {
        document.getElementById("conf").innerHTML="140";
       document.getElementById("death").innerHTML="12";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
   
     if(sa=="Brazil")
    {
        document.getElementById("conf").innerHTML="200";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
     if(sa=="Slovenia")
    {
        document.getElementById("conf").innerHTML="319";
       document.getElementById("death").innerHTML="1";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="1";
    }
     if(sa=="Ireland")
    {
        document.getElementById("conf").innerHTML="557";
       document.getElementById("death").innerHTML="3";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }


      if(sa=="Russia")
    {
        document.getElementById("conf").innerHTML="199";
       document.getElementById("death").innerHTML="1";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="0";
    }
     if(sa=="Saudi Arabia")
    {
        document.getElementById("conf").innerHTML="274";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
     if(sa=="Algeria")
    {
        document.getElementById("conf").innerHTML="90";
       document.getElementById("death").innerHTML="9";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="1";
    }
     if(sa=="Indonesia")
    {
        document.getElementById("conf").innerHTML="311";
       document.getElementById("death").innerHTML="25";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
     if(sa=="Oman")
    {
        document.getElementById("conf").innerHTML="48";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
     if(sa=="Qatar")
    {
        document.getElementById("conf").innerHTML="460";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="2";
       document.getElementById("info").innerHTML="2";
    }
     if(sa=="Romania")
    {
        document.getElementById("conf").innerHTML="277";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
   
      if(sa=="Argentina")
    {
        document.getElementById("conf").innerHTML="128";
       document.getElementById("death").innerHTML="3";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="1";
    }
     if(sa=="Poland")
    {
        document.getElementById("conf").innerHTML="355";
       document.getElementById("death").innerHTML="3";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
     if(sa=="Pakistan")
    {
        document.getElementById("conf").innerHTML="454";
       document.getElementById("death").innerHTML="2";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
     if(sa=="Ecuador")
    {
        document.getElementById("conf").innerHTML="260";
       document.getElementById("death").innerHTML="3";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="1";
    }
     if(sa=="Georgia")
    {
        document.getElementById("conf").innerHTML="33";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }

     if(sa=="Croatia")
    {
        document.getElementById("conf").innerHTML="110";
       document.getElementById("death").innerHTML="1";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
     if(sa=="Chile")
    {
        document.getElementById("conf").innerHTML="342";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="0";
    }
      if(sa=="Estonia")
    {
        document.getElementById("conf").innerHTML="267";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
   
     if(sa=="Peru")
    {
        document.getElementById("conf").innerHTML="234";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="1";
    }
     if(sa=="Azerbaijan")
    {
        document.getElementById("conf").innerHTML="44";
       document.getElementById("death").innerHTML="1";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
     if(sa=="Costa Rica")
    {
        document.getElementById("conf").innerHTML="87";
       document.getElementById("death").innerHTML="1";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }1
     if(sa=="Hungary")
    {
        document.getElementById("conf").innerHTML="73";
       document.getElementById("death").innerHTML="1";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
     if(sa=="Latvia")
    {
        document.getElementById("conf").innerHTML="86";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
   
      if(sa=="Mexico")
    {
        document.getElementById("conf").innerHTML="43";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
     if(sa=="South Africa")
    {
        document.getElementById("conf").innerHTML="150";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
     if(sa=="Slovakia")
    {
        document.getElementById("conf").innerHTML="319";
       document.getElementById("death").innerHTML="1";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }1
     if(sa=="Belarus")
    {
        document.getElementById("conf").innerHTML="51";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="1";
    }1
     if(sa=="Albania")
    {
        document.getElementById("conf").innerHTML="64";
       document.getElementById("death").innerHTML="2";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
     if(sa=="Maldives")
    {
        document.getElementById("conf").innerHTML="13";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
     if(sa=="Tunisia")
    {
        document.getElementById("conf").innerHTML="20";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }


      if(sa=="Luxembourg")
    {
        document.getElementById("conf").innerHTML="335";
       document.getElementById("death").innerHTML="4";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="1";
    }
     if(sa=="French Guiana")
    {
        document.getElementById("conf").innerHTML="5";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
     if(sa=="New Zealand")
    {
        document.getElementById("conf").innerHTML="39";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
     if(sa=="Dominican Republic")
    {
        document.getElementById("conf").innerHTML="5";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
     if(sa=="Bosnia and Herzegovina")
    {
        document.getElementById("conf").innerHTML="63";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="0";
    }
     if(sa=="Afghanistan")
    {
        document.getElementById("conf").innerHTML="22";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
     if(sa=="Senegal")
    {
        document.getElementById("conf").innerHTML="24";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
   
      if(sa=="Bulgaria")
    {
        document.getElementById("conf").innerHTML="107";
       document.getElementById("death").innerHTML="3";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
     if(sa=="Serbia")
    {
        document.getElementById("conf").innerHTML="103";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
     if(sa=="Malta")
    {
        document.getElementById("conf").innerHTML="53";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
     if(sa=="Bangladesh")
    {
        document.getElementById("conf").innerHTML="3";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
     if(sa=="Colombia")
    {
        document.getElementById("conf").innerHTML="102";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
     if(sa=="Cyprus")
    {
        document.getElementById("conf").innerHTML="67";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
     if(sa=="Faroe Islands")
    {
        document.getElementById("conf").innerHTML="2";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="1";
    }
      if(sa=="Morocco")
    {
        document.getElementById("conf").innerHTML="63";
       document.getElementById("death").innerHTML="2";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
     if(sa=="Nigeria")
    {
        document.getElementById("conf").innerHTML="2";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
    if(sa=="gb")
    {
        document.getElementById("conf").innerHTML="170,247";
       document.getElementById("death").innerHTML="6526";
       document.getElementById("case").innerHTML="691";
       document.getElementById("info").innerHTML="754";
    }
     

  }
</script>
    <script type="text/javascript">
        function fun1(){

Swal.fire({
  title: 'CoronaSpeak',
  input: 'checkbox',
   showCloseButton: true,
  text: ' CoronaSpeak Disclaimer The CoronaSpeak  is a platform which aims to share information about public health events and emergencies.The data on the dashboard is refreshed every fifteen (15) minutes and data is accurate as at time of refreshing. We source info from WHO and many other sources.CoronaSpeak is just an initiatve to support the citizens who want to submit cases, info to authorities like WHO, governments anonymously.The CoronaSpeak  is not a comprehensive representation of all the events and emergencies that CoronaSpeak is aware of and responding to. The content of the CoronaSpeak  is for general information only. It is subject to change without notice. While every reasonable effort has been made to make the information on the CoronaSpeak  as timely and accurate as possible, CoronaSpeak makes no claims, promises or guarantees about the effectiveness, completeness and accuracy of the contents of the CoronaSpeak , and expressly disclaims any liability for damages as a result of the use and/or application of the CoronaSpeak , errors and/or omissions in the content.The responsibility for the interpretation and use of the content lies with the reader. CoronaSpeak reserves the right to make updates and changes to posted content without notice and accepts no liability for any errors or omissions in this regard.CoronaSpeak assumes no responsibility or liability for any consequence resulting directly or indirectly from any action or inaction readers take based on or made in reliance on the information and material available on the CoronaSpeak .While every reasonable effort has been made to use appropriate language and pictures on the CoronaSpeak , CoronaSpeak expressly disclaims any responsibility for inadvertent offensive or insensitive, perceived or actual, language or pictures. CoronaSpeak will take no responsibility for or be liable for the CoronaSpeak  being temporarily unavailable in the event of technical or other issues.The size of the pie charts corresponds to the number of events in a given country or territory; the size does not indicate the severity or risk associated with the event(s). The designations employed and the presentation of content on the CoronaSpeak , including names of the events, maps and other illustrative materials, do not imply the expression of any opinion whatsoever on the part of CoronaSpeak concerning the legal status of any country, territory, city or area, or of its authorities, or concerning the delineation of frontiers and borders. Grey areas on maps represent approximate border lines for which there may not yet be full agreement  ',
  width : 1380,
  height: 1500,
  imageAlt: 'Custom image',
  confirmButtonColor:"Accept",
  confirmButtonText:"Accept"
},function (isConfirm){
   alert("Accept");
});
$('.swal2-confirm').click(function(result){
 
    window.location.href = 'option.php';
});
}
      </script>