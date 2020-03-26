<!DOCTYPE html>
<html>
<head>
  <base href="/corona/">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  background-color: #333;
 
  background-color: #333;
  top: 0;
  width: 100%;
}

.topnav a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 20px 20px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color:#F6E0E6;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}
.goog-logo-link, .goog-logo-link:link, .goog-logo-link:visited, .goog-logo-link:hover, .goog-logo-link:active{
              visibility: hidden;
          }
          .goog-te-gadget{
                  margin-top: 20px;
          }
          #demo1{
              cursor:pointer;
          }
          .goog-te-banner-frame.skiptranslate {
          display: none !important;
          }
      body {
          top: 0px !important;
          }
       
      .form-popup {
        display: none;
        position: fixed;
       
      }
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
  .nav ,#a1 {
    margin-top: 40px;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
 
}
.topnav .logo1:hover

{
  background-color: transparent;
}
a.logo1
{
  float: left;
}
.goog-te-combo  {border:1px solid #D5DAD9; border-radius:5px; padding: 1px 1px 1px 10px;-moz-appearance: none; appearance: none; -webkit-appearance: none; }
</style>

</head>
<body>
<div style="background-color: #C70039; height: 35px;"><a href="https://www.coronaspeak.com" style="color:white;">&nbsp;&nbsp;<i class="fa fa-envelope" style="font-size: 20px;color: white;"></i></a><div id="google_translate_element" style="float: right;margin-top: -20px;"></div><a href="login.php"><i class="fa fa-bank" title="Regulator Authority Login" style="float: right;font-size:30px;color:white;">&nbsp;</i></a>
</div>

<div class="topnav"  id="myTopnav">
   <a href="intro.php" class="logo1"><img src=" ./assets/media/company-logos/coronaLogo.png" alt="" width="80px" height="75px" style="margin-left: 15px;" /> &nbsp;<strong style="font-size: 25px;"><span style="color: white;">Corona<span style="color: red;">Speak</span></span></strong></a>

   
    <a href="infologin.php" title="FollowUp Info">
   <img src="./assets/media/company-logos/info1.jpg" height="40" class="blower1" style=" border-radius: 50%; border-width: 2px;   border-color: red;   border-style: solid;"><br><h6>FollowUp Info</h6>
       
  </a>
  <a href="caselogin.php" title="FollowUp Case">
   <img src="./assets/media/company-logos/case1.png" height="40" class="idea1"  style=" border-radius: 50%; border-width: 2px;   border-color: red;   border-style: solid;"><br><h6>FollowUp Case</h6>
  </a>
   <a href="javascript:void(0);" class="icon" onclick="myFunction()">
  <i class="fa fa-bars"></i></a>

  <div class="nav1" style="margin-right: 40%;margin-top:30px;">
    <a href=""></a>
  <a href="contributors.php" id="a1">Contributors</a>
  <!-- <a href="donate.php">Donate</a> -->
  <a href="news.php">News</a>  
  <a href="analytics.html">Analytics</a>
  <a href="who.php">W&nbsp;H&nbsp;O</a>
  </div>
 

</div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
  document.querySelector('.goog-te-gadget').setAttribute('style', 'font-size: 0');
}
</script>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>