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
    <option value='italy' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag it" data-title="Italy">Italy</option>
   <option value='China' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag cn" data-title="China">China</option>
    <option value='iran' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ir" data-title="Iran">Iran</option>
     <option value='Spain' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag es" data-title="Spain">Spain</option>
    <option value='france' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag fr" data-title="France">France</option>
     <option value='States' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag us" data-title="United States">United States</option>
    <option value='Kingdom' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag uk" data-title="United Kingdom">United Kingdom</option>
    <option value='Netherlands' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag an" data-title="Netherlands Antilles">Netherlands Antilles</option>
    <option value='Korea' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag kr" data-title="Korea (South)">Korea (South)</option>
     <option value='Germany' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag de" data-title="Germany">Germany</option>
     <option value='Switzerland' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ch" data-title="Switzerland">Switzerland</option>
    <option value='Belgium' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag be" data-title="Belgium">Belgium</option>
    <option value='Indonesia' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag id" data-title="Indonesia">Indonesia</option>
     <option value='Japan' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag jp" data-title="Japan">Japan</option>
    <option value='Philippines' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ph" data-title="Philippines">Philippines</option>
    <option value='Turkey' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag tr" data-title="Turkey">Turkey</option>
    <option value='Sweden' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag se" data-title="Sweden">Sweden</option>
    <option value='San Marino' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag sm" data-title="San Marino">San Marino</option>
    <option value='Canada' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ca" data-title="Canada">Canada</option>
         <option value='Iraq' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag iq" data-title="Iraq">Iraq</option>
    <option value='Algeria' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag dz" data-title="Algeria">Algeria</option>
     <option value='Greece' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag gr" data-title="Greece">Greece</option>
    <option value='Portugal' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag pt" data-title="Portugal">Portugal</option>
    <option value='Malaysia' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag my" data-title="Malaysia">Malaysia</option>
     <option value='Egypt' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag eg" data-title="Egypt">Egypt</option>
    <option value='Austria' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag at" data-title="Austria">Austria</option>
     <option value='Luxembourg' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag lu" data-title="Luxembourg">Luxembourg</option>
                
          <option value='Norway' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag no" data-title="Norway">Norway</option>
    <option value='Australia' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag au" data-title="Australia">Australia</option>
     <option value='Ecuador' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ec" data-title="Ecuador">Ecuador</option>
    <option value='Poland' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag pl" data-title="Poland">Poland</option>
     <option value='India' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag in" data-title="India">India</option>
    <option value='Peru' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag pe" data-title="Peru">Peru</option>
    <option value='Hong Kong' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag hk" data-title="Hong Kong">Hong Kong</option>
    <option value='Lebanon' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag lb" data-title="Lebanon">Lebanon</option>
    <option value='Argentina' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ar" data-title="Argentina">Argentina</option>
    <option value='Hungary' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag hu" data-title="Hungary">Hungary</option>
    <option value='Ireland' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ie" data-title="Ireland">Ireland</option>
<option value='Pakistan' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag pk" data-title="Pakistan">Pakistan</option>
<option value='Panama' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag pa" data-title="Panama">Panama</option>
 <option value='Bulgaria' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag bg" data-title="Bulgaria">Bulgaria</option>
    <option value='Dominican Republic' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag do" data-title="Dominican Republic">Dominican Republic</option>
     <option value='Morocco' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ma" data-title="Morocco">Morocco</option>
 <option value='Burkina Faso' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag bf" data-title="Burkina Faso">Burkina Faso</option>
 <option value='Ukraine' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ua" data-title="Ukraine">Ukraine</option>
     <option value='Singapore' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag sg" data-title="Singapore">Singapore</option>
    <option value='Mexico' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag mx" data-title="Mexico">Mexico</option>
    <option value='Arab' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ae" data-title="United Arab Emirates">UAE</option>
    <option value='Taiwan' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag tw" data-title="Taiwan">Taiwan</option>
    <option value='Costa Rica' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag cr" data-title="Costa Rica">Costa Rica</option>
    <option value='Albania' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag al" data-title="Albania">Albania</option>
    <option value='Israel' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag il" data-title="Israel">Israel</option>
    <option value='Chile' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag cl" data-title="Chile">Chile</option>
    <option value='Finland' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag fi" data-title="Finland">Finland</option>
    <option value='Iceland' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag is" data-title="Iceland">Iceland</option>
     <option value='Thailand' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag th" data-title="Thailand">Thailand</option>    
    <option value='Slovenia' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag si" data-title="Slovenia">Slovenia</option>
    <option value='Bahrain' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag bh" data-title="Bahrain">Bahrain</option>
    <option value='Russia' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ru" data-title="Russian Federation">Russia</option>
    <option value='Croatia' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag hr" data-title="Croatia (Hrvatska)">Croatia</option>
    <option value='Colombia' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag co" data-title="Colombia">Colombia</option>
    <option value='Slovakia' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag sk" data-title="Slovakia">Slovakia</option>
      <option value='Serbia' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag cs" data-title="Serbia and Montenegro">Serbia and Montenegro</option>
    <option value='Lithuania' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag lt" data-title="Lithuania">Lithuania</option>
    <option value='Bosnia and Herzegovina' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ba" data-title="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
       <option value='Cyprus' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag cy" data-title="Cyprus">Cyprus</option>
       <option value='Moldova' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag md" data-title="Moldova">Moldova</option>
      <option value='Czechia' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag cz" data-title="Czechia">Czechia</option>
    <option value='Qatar' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag qa" data-title="Qatar">Qatar</option>
    <option value='Saudi Arabia' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag sa" data-title="Saudi Arabia">Saudi Arabia</option>
    <option value='Romania' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ro" data-title="Romania">Romania</option>
    <option value='Estonia' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ee" data-title="Estonia">Estonia</option>
    <option value='South Africa' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag za" data-title="South Africa">South Africa</option>
     <option value='Kuwait' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag kw" data-title="Kuwait">Kuwait</option>
   
     <option value='Latvia' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag lv" data-title="Latvia">Latvia</option>
     <option value='Armenia' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag am" data-title="Armenia">Armenia</option>
     <option value='Latvia' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag lv" data-title="Latvia">Latvia</option>
     <option value='Uruguay' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag uy" data-title="Uruguay">Uruguay</option>
     <option value='Jordan' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag jo" data-title="Jordan">Jordan</option>
     <option value='Vietnam' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag vn" data-title="Vietnam">Vietnam</option>
     <option value='Andorra' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ad" data-title="Andorra">Andorra</option>
     <option value='North Macedonia' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag mk" data-title="North Macedonia">North Macedonia</option>
     <option value='Brunei' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag bn" data-title="Brunei">Brunei</option>
     <option value='Sri Lanka' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag lk" data-title="Sri Lanka">Sri Lanka</option>
     <option value='Belarus' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag by" data-title="Belarus">Belarus</option>
     <option value='Malta' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag mt" data-title="Malta">Malta</option>
     <option value='Venezuela' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ve" data-title="Venezuela">Venezuela</option>
     <option value='New Zealand' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag nz" data-title="New Zealand">New Zealand</option>
     <option value='Palestine' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ps" data-title="Palestine">Palestine</option>
     <option value='Cambodia' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag kh" data-title="Cambodia">Cambodia</option>
     <option value='Afghanistan' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag af" data-title="Afghanistan">Afghanistan</option>
     <option value='Macau' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag mo" data-title="Macau">Macau</option>
     <option value='Maldives' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag mv" data-title="Maldives">Maldives</option>
     <option value='Seychelles' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag sc" data-title="Seychelles">Seychelles</option>
     <option value='Others' data-image="" data-imagecss="flag ot" data-title="Others">Others</option>
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
           
                    <strong style="color: #E53E3E; font-size: 24px;" id="conf">307,321</strong>
                </div>
            </div>

        </div>
        <div class="col-xs-6 col-md-2">
           
            <div class="panel status" style="background-color: #C6F6D5; ">
                <div class="panel-heading">
                    <h1 class="panel-title text-center"style="color: #38A169; font-size: 18px;"><b>Death</b></h1>
                </div>
                <div class="panel-body text-center" style="background-color: #F0FFF4;">  
       
                    <strong style="color: #38A169; font-size: 24px;" id="death">13,065</strong>
                </div>
            </div>

         
        </div>

        <div class="col-xs-6 col-md-2">
           
            <div class="panel status" style="background-color: #C7F4FA; ">
                <div class="panel-heading">
                    <h1 class="panel-title text-center"style="color: #27DDFA; font-size: 18px;"><b>Case</b></h1>
                </div>
                <div class="panel-body text-center" style="background-color: #E2F8FB;">        
                 <strong style="color: #27DDFA; font-size: 24px;" id="case">1,117</strong>
               

                </div>
            </div>

         
        </div>

        <div class="col-xs-6 col-md-2">
           
            <div class="panel status" style="background-color: #FCD6F6; ">
                <div class="panel-heading">
                    <h1 class="panel-title text-center"style="color: #FC63E4; font-size: 18px;"><b>Info</b></h1>
                </div>
                <div class="panel-body text-center" style="background-color: #FCEEFA;">                    
                    <strong style="color: #FC63E4; font-size: 24px;" id="info">1,338</strong>
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
    if(sa=="gb")
    {
        document.getElementById("conf").innerHTML="307,321";
       document.getElementById("death").innerHTML="13,065";
       document.getElementById("case").innerHTML="1,117";
       document.getElementById("info").innerHTML="1,338";
    }
        if(sa=="China")
        {
      document.getElementById("conf").innerHTML="81,355";
      document.getElementById("death").innerHTML="3,265";
      document.getElementById("case").innerHTML="297";
      document.getElementById("info").innerHTML="356";
       }
    if(sa=="italy")
    {
        document.getElementById("conf").innerHTML="53,578";
       document.getElementById("death").innerHTML="4,825";
       document.getElementById("case").innerHTML="195";
       document.getElementById("info").innerHTML="234";
    }
      if(sa=="iran")
    {
        document.getElementById("conf").innerHTML="20,160";
       document.getElementById("death").innerHTML="1,556";
       document.getElementById("case").innerHTML="75";
       document.getElementById("info").innerHTML="90";
    }
     if(sa=="Korea")
    {
      document.getElementById("conf").innerHTML="8,897";
      document.getElementById("death").innerHTML="104";
      document.getElementById("case").innerHTML="32";
      document.getElementById("info").innerHTML="39";
    }
     if(sa=="Spain")
    {
        document.getElementById("conf").innerHTML="25,496";
       document.getElementById("death").innerHTML="1,381";
       document.getElementById("case").innerHTML="93";
       document.getElementById("info").innerHTML="112";
    }
     if(sa=="France")
    {
        document.getElementById("conf").innerHTML="14,459";
       document.getElementById("death").innerHTML="562";
       document.getElementById("case").innerHTML="53";
       document.getElementById("info").innerHTML="63";
    }
     if(sa=="Germany")
    {
        document.getElementById("conf").innerHTML="22,364";
       document.getElementById("death").innerHTML="84";
       document.getElementById("case").innerHTML="82";
       document.getElementById("info").innerHTML="98";
    }
     if(sa=="States")
    {
        document.getElementById("conf").innerHTML="26,683";
       document.getElementById("death").innerHTML="348";
       document.getElementById("case").innerHTML="98";
       document.getElementById("info").innerHTML="118";
    }
 
      if(sa=="Japan")
    {
        document.getElementById("conf").innerHTML="1055";
       document.getElementById("death").innerHTML="35";
       document.getElementById("case").innerHTML="4";
       document.getElementById("info").innerHTML="5";
    }
     if(sa=="Switzerland")
    {
        document.getElementById("conf").innerHTML="6863";
       document.getElementById("death").innerHTML="80";
       document.getElementById("case").innerHTML="25";
       document.getElementById("info").innerHTML="30";
    }
     if(sa=="Kingdom")
    {
        document.getElementById("conf").innerHTML="5018";
       document.getElementById("death").innerHTML="233";
       document.getElementById("case").innerHTML="18";
       document.getElementById("info").innerHTML="22";
    }
     if(sa=="Netherlands")
    {
        document.getElementById("conf").innerHTML="3631";
       document.getElementById("death").innerHTML="136";
       document.getElementById("case").innerHTML="13";
       document.getElementById("info").innerHTML="16";
    }
     if(sa=="Belgium")
    {
        document.getElementById("conf").innerHTML="2815";
       document.getElementById("death").innerHTML="67";
       document.getElementById("case").innerHTML="10";
       document.getElementById("info").innerHTML="12";
    }
     if(sa=="Sweden")
    {
        document.getElementById("conf").innerHTML="1,770";
       document.getElementById("death").innerHTML="20";
       document.getElementById("case").innerHTML="6";
       document.getElementById("info").innerHTML="8";
    }
     if(sa=="Norway")
    {
        document.getElementById("conf").innerHTML="2164";
       document.getElementById("death").innerHTML="7";
       document.getElementById("case").innerHTML="8";
       document.getElementById("info").innerHTML="9";
    }
   

      if(sa=="Singapore")
    {
        document.getElementById("conf").innerHTML="432";
       document.getElementById("death").innerHTML="2";
       document.getElementById("case").innerHTML="2";
       document.getElementById("info").innerHTML="2";
    }



     if(sa=="Austria")
    {
        document.getElementById("conf").innerHTML="3021";
       document.getElementById("death").innerHTML="8";
       document.getElementById("case").innerHTML="11";
       document.getElementById("info").innerHTML="13";
    }
     if(sa=="Malaysia")
    {
        document.getElementById("conf").innerHTML="1306";
       document.getElementById("death").innerHTML="10";
       document.getElementById("case").innerHTML="5";
       document.getElementById("info").innerHTML="6";
    }
     if(sa=="Hong Kong")
    {
        document.getElementById("conf").innerHTML="274";
       document.getElementById("death").innerHTML="4";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="1";
    }
     if(sa=="Denmark")
    {
        document.getElementById("conf").innerHTML="1418";
       document.getElementById("death").innerHTML="13";
       document.getElementById("case").innerHTML="5";
       document.getElementById("info").innerHTML="6 ";
    }
     if(sa=="Bahrain")
    {
        document.getElementById("conf").innerHTML="310";
       document.getElementById("death").innerHTML="1";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="1";
    }
     if(sa=="Australia")
    {
        document.getElementById("conf").innerHTML="1286";
       document.getElementById("death").innerHTML="7";
       document.getElementById("case").innerHTML="5";
       document.getElementById("info").innerHTML="6";
    }
   
      if(sa=="Greece")
    {
        document.getElementById("conf").innerHTML="530";
       document.getElementById("death").innerHTML="13";
       document.getElementById("case").innerHTML="2";
       document.getElementById("info").innerHTML="2";
    }
     if(sa=="Canada")
    {
        document.getElementById("conf").innerHTML="1328";
       document.getElementById("death").innerHTML="19";
       document.getElementById("case").innerHTML="5";
       document.getElementById("info").innerHTML="6";
    }
     if(sa=="Arab")
    {
        document.getElementById("conf").innerHTML="153";
       document.getElementById("death").innerHTML="2";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="1";
    }
     if(sa=="Iraq")
    {
        document.getElementById("conf").innerHTML="214";
       document.getElementById("death").innerHTML="17";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="1";
    }
     if(sa=="Kuwait")
    {
        document.getElementById("conf").innerHTML="176";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="1";
    }
     if(sa=="Iceland")
    {
        document.getElementById("conf").innerHTML="473";
       document.getElementById("death").innerHTML="1";
       document.getElementById("case").innerHTML="2";
       document.getElementById("info").innerHTML="2";
    }
     if(sa=="Egypt")
    {
        document.getElementById("conf").innerHTML="294";
       document.getElementById("death").innerHTML="10";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="1";
    }


      if(sa=="India")
    {
        document.getElementById("conf").innerHTML="332";
       document.getElementById("death").innerHTML="5";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="1";
    }
     if(sa=="Thailand")
    {
        document.getElementById("conf").innerHTML="411";
       document.getElementById("death").innerHTML="1";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="2";
    }
     if(sa=="San Marino")
    {
        document.getElementById("conf").innerHTML="144";
       document.getElementById("death").innerHTML="20";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="1";
    }
     if(sa=="Israel")
    {
        document.getElementById("conf").innerHTML="883";
       document.getElementById("death").innerHTML="1";
       document.getElementById("case").innerHTML="3";
       document.getElementById("info").innerHTML="4";
    }
     if(sa=="Taiwan")
    {
        document.getElementById("conf").innerHTML="153";
       document.getElementById("death").innerHTML="2";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="1";
    }
     if(sa=="Lebanon")
    {
        document.getElementById("conf").innerHTML="230";
       document.getElementById("death").innerHTML="4";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="1";
    }
     if(sa=="Finland")
    {
        document.getElementById("conf").innerHTML="523";
       document.getElementById("death").innerHTML="1";
       document.getElementById("case").innerHTML="2";
       document.getElementById("info").innerHTML="2";
    }
   
      if(sa=="Czechia")
    {
        document.getElementById("conf").innerHTML="1047";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="4";
       document.getElementById("info").innerHTML="5";
    }
     if(sa=="Portugal")
    {
        document.getElementById("conf").innerHTML="1280";
       document.getElementById("death").innerHTML="12";
       document.getElementById("case").innerHTML="5";
       document.getElementById("info").innerHTML="6";
    }
     if(sa=="Philippines")
    {
        document.getElementById("conf").innerHTML="380";
       document.getElementById("death").innerHTML="25";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="2";
    }
   
     if(sa=="Brazil")
    {
        document.getElementById("conf").innerHTML="1021";
       document.getElementById("death").innerHTML="18";
       document.getElementById("case").innerHTML="4";
       document.getElementById("info").innerHTML="4";
    }
     if(sa=="Slovenia")
    {
        document.getElementById("conf").innerHTML="383";
       document.getElementById("death").innerHTML="1";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="2";
    }
     if(sa=="Ireland")
    {
        document.getElementById("conf").innerHTML="785";
       document.getElementById("death").innerHTML="3";
       document.getElementById("case").innerHTML="3";
       document.getElementById("info").innerHTML="3";
    }


      if(sa=="Russia")
    {
        document.getElementById("conf").innerHTML="306";
       document.getElementById("death").innerHTML="1";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="1";
    }
     if(sa=="Saudi Arabia")
    {
        document.getElementById("conf").innerHTML="392";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="2";
    }
     if(sa=="Algeria")
    {
        document.getElementById("conf").innerHTML="139";
       document.getElementById("death").innerHTML="15";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="1";
    }
     if(sa=="Indonesia")
    {
        document.getElementById("conf").innerHTML="514";
       document.getElementById("death").innerHTML="48";
       document.getElementById("case").innerHTML="2";
       document.getElementById("info").innerHTML="2";
    }
     
     if(sa=="Qatar")
    {
        document.getElementById("conf").innerHTML="481";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="2";
       document.getElementById("info").innerHTML="2";
    }
     if(sa=="Romania")
    {
        document.getElementById("conf").innerHTML="139";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
   
      if(sa=="Argentina")
    {
        document.getElementById("conf").innerHTML="158";
       document.getElementById("death").innerHTML="4";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="1";
    }
     if(sa=="Poland")
    {
        document.getElementById("conf").innerHTML="536";
       document.getElementById("death").innerHTML="5";
       document.getElementById("case").innerHTML="2";
       document.getElementById("info").innerHTML="2";
    }
     if(sa=="Pakistan")
    {
        document.getElementById("conf").innerHTML="733";
       document.getElementById("death").innerHTML="3";
       document.getElementById("case").innerHTML="3";
       document.getElementById("info").innerHTML="3";
    }
     if(sa=="Ecuador")
    {
        document.getElementById("conf").innerHTML="532";
       document.getElementById("death").innerHTML="7";
       document.getElementById("case").innerHTML="2";
       document.getElementById("info").innerHTML="2";
    }
     

     if(sa=="Croatia")
    {
        document.getElementById("conf").innerHTML="206";
       document.getElementById("death").innerHTML="1";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="1";
    }
     if(sa=="Chile")
    {
        document.getElementById("conf").innerHTML="537";
       document.getElementById("death").innerHTML="1";
       document.getElementById("case").innerHTML="2";
       document.getElementById("info").innerHTML="2";
    }
      if(sa=="Estonia")
    {
        document.getElementById("conf").innerHTML="306";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="1";
    }
   
     if(sa=="Peru")
    {
        document.getElementById("conf").innerHTML="318";
       document.getElementById("death").innerHTML="5";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="1";
    }
     if(sa=="Costa Rica")
    {
        document.getElementById("conf").innerHTML="117";
       document.getElementById("death").innerHTML="2";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="1";
    }1
     if(sa=="Hungary")
    {
        document.getElementById("conf").innerHTML="103";
       document.getElementById("death").innerHTML="4";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
     if(sa=="Latvia")
    {
        document.getElementById("conf").innerHTML="124";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="1";
    }
   
      if(sa=="Mexico")
    {
        document.getElementById("conf").innerHTML="203";
       document.getElementById("death").innerHTML="2";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="1";
    }
     if(sa=="South Africa")
    {
        document.getElementById("conf").innerHTML="240";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="1";
    }
     if(sa=="Slovakia")
    {
        document.getElementById("conf").innerHTML="178";
       document.getElementById("death").innerHTML="1";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="1";
    }1
     if(sa=="Belarus")
    {
        document.getElementById("conf").innerHTML="76";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }1
     if(sa=="Albania")
    {
        document.getElementById("conf").innerHTML="76";
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
   

      if(sa=="Luxembourg")
    {
        document.getElementById("conf").innerHTML="670";
       document.getElementById("death").innerHTML="8";
       document.getElementById("case").innerHTML="2";
       document.getElementById("info").innerHTML="3";
    }
     
     if(sa=="New Zealand")
    {
        document.getElementById("conf").innerHTML="66";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
     if(sa=="Dominican Republic")
    {
        document.getElementById("conf").innerHTML="112";
       document.getElementById("death").innerHTML="3";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
     if(sa=="Bosnia and Herzegovina")
    {
        document.getElementById("conf").innerHTML="93";
       document.getElementById("death").innerHTML="1";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
     if(sa=="Afghanistan")
    {
        document.getElementById("conf").innerHTML="24";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
     
   
      if(sa=="Bulgaria")
    {
        document.getElementById("conf").innerHTML="163";
       document.getElementById("death").innerHTML="3";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="1";
    }
     if(sa=="Serbia")
    {
        document.getElementById("conf").innerHTML="171";
       document.getElementById("death").innerHTML="1";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="1";
    }
     if(sa=="Malta")
    {
        document.getElementById("conf").innerHTML="73";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
     
     if(sa=="Colombia")
    {
        document.getElementById("conf").innerHTML="196";
       document.getElementById("death").innerHTML="1";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="1";
    }
     if(sa=="Cyprus")
    {
        document.getElementById("conf").innerHTML="84";
       document.getElementById("death").innerHTML="1";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
     
      if(sa=="Morocco")
    {
        document.getElementById("conf").innerHTML="96";
       document.getElementById("death").innerHTML="3";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }
 
  if(sa=="Turkey")
    {
        document.getElementById("conf").innerHTML="947";
       document.getElementById("death").innerHTML="21";
       document.getElementById("case").innerHTML="3";
       document.getElementById("info").innerHTML="4";
    }
     if(sa=="Panama")
    {
        document.getElementById("conf").innerHTML="245";
       document.getElementById("death").innerHTML="3";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="1";
    }

     if(sa=="Burkina Faso")
    {
        document.getElementById("conf").innerHTML="64";
       document.getElementById("death").innerHTML="3";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }

     if(sa=="Ukraine")
    {
        document.getElementById("conf").innerHTML="47";
       document.getElementById("death").innerHTML="3";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }

     if(sa=="Lithuania")
    {
        document.getElementById("conf").innerHTML="99";
       document.getElementById("death").innerHTML="1";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }

     if(sa=="Moldova")
    {
        document.getElementById("conf").innerHTML="80";
       document.getElementById("death").innerHTML="1";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }

     if(sa=="Armenia")
    {
        document.getElementById("conf").innerHTML="160";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="1";
       document.getElementById("info").innerHTML="1";
    }

     if(sa=="Uruguay")
    {
        document.getElementById("conf").innerHTML="110";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }

     if(sa=="Jordan")
    {
        document.getElementById("conf").innerHTML="100";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }

     if(sa=="Vietnam")
    {
        document.getElementById("conf").innerHTML="94";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }

     if(sa=="Andorra")
    {
        document.getElementById("conf").innerHTML="88";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }

     if(sa=="North Macedonia")
    {
        document.getElementById("conf").innerHTML="85";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }

     if(sa=="Brunei")
    {
        document.getElementById("conf").innerHTML="83";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }

     if(sa=="Sri Lanka")
    {
        document.getElementById("conf").innerHTML="77";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }

     if(sa=="Venezuela")
    {
        document.getElementById("conf").innerHTML="70";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }

     if(sa=="Palestine")
    {
        document.getElementById("conf").innerHTML="53";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }

     if(sa=="Cambodia")
    {
        document.getElementById("conf").innerHTML="53";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }

     if(sa=="Macau")
    {
        document.getElementById("conf").innerHTML="19";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }

     if(sa=="Seychelles")
    {
        document.getElementById("conf").innerHTML="7";
       document.getElementById("death").innerHTML="0";
       document.getElementById("case").innerHTML="0";
       document.getElementById("info").innerHTML="0";
    }

     if(sa=="Others")
    {
        document.getElementById("conf").innerHTML="712";
       document.getElementById("death").innerHTML="8";
       document.getElementById("case").innerHTML="3";
       document.getElementById("info").innerHTML="3";
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
  customClass: 'swal-wide',
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
       <style type="text/css">
          @media screen and (max-width: 425px)
          {
            .swal-wide
            {
                width: 100%;
                height: 100%;
                overflow-y: auto;
                overflow-x: auto;
                }          
            }
      </style>