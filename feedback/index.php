

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
    <head>     
        
        
<link rel="stylesheet" href="https://cdn.rawgit.com/stevenmonson/googleReviews/master/google-places.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/LOGO_black_new-min.png" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:400,500%7CTeko:300,400,500%7CMaven+Pro:500">
    <link rel="stylesheet" href="css/bootstrap.css">
<!--    <link rel="stylesheet" href="css/fonts.css">-->
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/4.0.6/sweetalert2.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/4.0.6/sweetalert2.min.css">
<style>
/*
#size
    {
        border-radius: 50%;
        border: none;
    }
#headet_part {
line-height: 50px;
	}
 
*/
    ul.swatch-colors li{float:left;margin:15px;padding:0;width:32px;height:32px}
.swatch-colors  li .swatch-i{cursor:pointer;display:inline-block;}
label.lbswatches > input{visibility:hidden;position: relative;}
label.lbswatches > input + i{cursor:pointer;border:2px solid transparent;}
label.lbswatches > input:checked + i{ font-size: 60px;}

    #thumbnails2 li
    {
float:left;
        margin:15px;
        padding:0;
        width:32px;
        height:32px;
        margin-top: 0%;
        cursor:pointer;display:inline-block;
    }
    @media screen and (max-width:600px)
    {
            #thumbnails2
    {  
        margin-top:-20px;
        margin-left:25%;
    }
    #thumbnails2 li
    {
float:left;
        margin:0px;
        margin-left:30px;
    }
ul.swatch-colors li
{
float:left;
margin:0px;
margin-left:35px;
        }
    }
    #logo
    {
        float: left;
        margin-top: 5%;
        margin-left: 0%;
    }
/*    #heading*/
/*    {*/
/*        margin-left: 6%;*/
/*    }*/
    #text
    {
        float: right;
        margin-top: 9%;
        margin-right: 0%;
    }
    #companylogo
    {
        margin-left: 7%;
    }
  
    input::placeholder {
  color: black;
  opacity:1;
        font-size: 15px;
}
    input[type=text],input[type=email],input[type=tel] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid black;
  border-radius: 4px;
  box-sizing: border-box;
}
   #contact-message-2{
        width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid black;
  border-radius: 4px;
  box-sizing: border-box;
    }
    input:focus {
    box-shadow:0px 0px 5px #6192D1;
    -webkit-box-shadow: 0px 0px 5px  #6192D1;
    -moz-box-shadow: 0px 0px 5px  #6192D1;       
    outline: 0;
}
    #contact-message-2:focus {
    box-shadow:0px 0px 5px #6192D1;
    -webkit-box-shadow: 0px 0px 5px  #6192D1;
    -moz-box-shadow: 0px 0px 5px  #6192D1;       
    outline: 0;
}
    
textarea::placeholder {
    color:black;
    opacity:1;
    font-size: 20px;
}
    #foot
    {
        background-color: black;
    }
    #foot1
    {
        color: white;
        margin-top: 3%;
    }
    #h
    {
        color: white;
    }
    </style>
  
    <title>Feedback</title>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <link rel="stylesheet" href="path/to/sweet-alert.css" />
  </head>
  <body>
      <script>
                  $('#thumbnails1').delegate('img','click', function(){
	       $(this).prev().attr('checked',true);
	   });
      </script>
      <div class="container">
          <div class="row justify-content-md-center" style="margin-top:2%;">
              <div class="col-md-5" id="logo">
       <img src="LOGO/logo_big_transperent.png"id="companylogo" alt="companylogo" vertical-align="middle" width="25%" height="25%">
        <h3 id="heading">brainlift</h3>          
        </div>
              <div class="col-md-2"></div>
              <div class="col-md-3" id="text">
              <h3 style="margin-top:26%;">Feedback</h3>
              </div>
        </div>
      </div>
 
       <section class="section section-sm section-last bg-default text-left">
        <div class="container">
            <div id="banner">
          <article class="title-classic" >
            <div class="title-classic-title">
<!--              <h3>Feedback</h3>-->
                 <h5>We'd love to hear from you</h5>
            </div>
            <div class="title-classic-text">
              <p>Your opinion is important to us. Push us a feedback to keep improving us.<br>
                Whether you have any suggestion about the session, workshops, or anything else send a message.</p>

            </div>
          </article >
                </div>

           <script>
function myFunction() {
  document.getElementById("size").style.color = "red";
}
</script>
         <form class="rd-form rd-form-variant-2 rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="feedback_db.php" id="feedback" onsubmit="return validateForm()" style="margin-top:5%;"  >
             <div class="row row-14 gutters-14">
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-your-name-2" placeholder="Name*" type="text" name="name" data-constraints="@Required" pattern="[A-Za-z]{1,32}" required>
<!--                  <label class="form-label" for="contact-your-name-2">Your Name</label>-->
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-email-2" type="email" placeholder="Email*" name="email" data-constraints="@Email @Required"  pattern="[^ @]*@[^ @]*" / required>
<!--                  <label class="form-label" for="contact-email-2">E-mail</label>-->
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="contact-phone-2" type="text" placeholder="Contact Number*" name="phone" data-constraints="@Numeric" pattern="[6789][0-9]{9}" required>
<!--                  <label class="form-label" for="contact-phone-2">Phone</label>-->
                </div>
              </div>
             
            </div>
            <div class="row justify-content-md-center row-14 gutters-14" align="center" >
              <div class="col-md-12">
                <p style="font-size:20px;">How satisfied are you with our interaction ?</p>
                </div>
                <div class="col-md-4 col-sm-4">
                  <ul id="thumbnails1" class="noul swatch-colors"  >
                      <li><label class="lbswatches" data-toggle="tooltip" data-placement="bottom" title=" Very Good"><input name="q1" value="4"  type="radio" ><i class="fa fa-smile-o fa-3x" aria-hidden="true" style="color:darkgreen;"></i></label></li>
                      <li><label class="lbswatches" data-toggle="tooltip" data-placement="bottom" title="Good"><input name="q1" value="3"  type="radio" ><i class="fa fa-smile-o fa-3x" aria-hidden="true" style="color:#00ff00"></i></label></li>
                      <li><label class="lbswatches" data-toggle="tooltip" data-placement="bottom" title="Impressive"><input name="q1" value="2"  type="radio" ><i class="fa fa-meh-o fa-3x" aria-hidden="true" style="color:orange;"></i></label></li>
                      <li><label class="lbswatches" data-toggle="tooltip" data-placement="bottom" title="Bad"><input name="q1" value="1"  type="radio" ><i class="fa fa-frown-o fa-3x" aria-hidden="true" style="color:red;"></i></label></li>
                    </ul>
              </div>
             </div>
             
              <div class="row justify-content-md-center row-14 gutters-14" align="center" >
              <div class="col-md-12">
                <p style="font-size:20px;">How much this workshop ignite you for the devolopment??</p>
                  </div>
                  <div class="col-md-4">
                  <ul id="thumbnails1" class="noul swatch-colors">
                      <li><label class="lbswatches " data-toggle="tooltip" data-placement="bottom" title=" Very Good"><input name="q2" value="4"  type="radio" ><i class="fa fa-smile-o fa-3x" aria-hidden="true" style="color:darkgreen;"></i></label></li>
                      <li><label class="lbswatches" data-toggle="tooltip" data-placement="bottom" title="Good"><input name="q2" value="3"  type="radio"><i class="fa fa-smile-o fa-3x" aria-hidden="true" style="color:#00ff00;"></i></label></li>
                      <li><label class="lbswatches" data-toggle="tooltip" data-placement="bottom" title="Impressive"><input name="q2" value="2"  type="radio" ><i class="fa fa-meh-o fa-3x" aria-hidden="true" style="color:orange;"></i></label></li>
                      <li><label class="lbswatches" data-toggle="tooltip" data-placement="bottom" title="Bad"><input name="q2" value="1"  type="radio"><i class="fa fa-frown-o fa-3x" aria-hidden="true" style="color:red;"></i></label></li>
                  </ul>
              </div>
             </div>
              <div class="row justify-content-md-center row-14 gutters-14" align="center">
              <div class="col-md-12">
                <p style="font-size:20px;"> The session was well placed within the alloted time??  </p>
                  </div>
                  <div class="col-md-2">
                   <ul id="thumbnails2"   >
                      <li><label class="lbswatches" data-toggle="tooltip" data-placement="bottom" title="Yes"><input name="q3" value="1"  type="radio" ><i class="fa fa-thumbs-o-up fa-3x" aria-hidden="true" style="color:darkgreen;"></i></label></li>
                      <li><label class="lbswatches" data-toggle="tooltip" data-placement="bottom" title="No"><input name="q3" value="0"  type="radio" ><i class="fa fa-thumbs-o-down fa-3x" aria-hidden="true" style="color:red;"></i></label></li>
                  </ul>
                  </div>
             </div>
                   <div class="row justify-content-md-center  row-14 gutters-14" align="center" >
              <div class="col-md-12">
                <p style="font-size:20px;">Overall, How useful was this workshop for you??</p>
                  </div>
                  <div class="col-md-4 col-sm-4 col-lg-4">

                  <ul id="thumbnails1" class="noul swatch-colors"  >
                      <li><label class="lbswatches" data-toggle="tooltip" data-placement="bottom" title=" Very Good"><input name="q4" value="4"  type="radio" ><i class="fa fa-smile-o fa-3x" aria-hidden="true" style="color:darkgreen;"></i></label></li>
                      <li><label class="lbswatches" data-toggle="tooltip" data-placement="bottom" title="Good"><input name="q4" value="3"  type="radio" ><i class="fa fa-smile-o fa-3x" aria-hidden="true" style="color:#00ff00;"></i></label></li>
                      <li><label class="lbswatches" data-toggle="tooltip" data-placement="bottom" title="Impressive"><input name="q4" value="2"  type="radio" ><i class="fa fa-meh-o fa-3x" aria-hidden="true" style="color:orange;" ></i></label></li>
                      <li><label class="lbswatches" data-toggle="tooltip" data-placement="bottom" title="Bad" ><input name="q4" value="1"  type="radio" ><i class="fa fa-frown-o fa-3x" aria-hidden="true" style="color:red;"></i></label></li>
                  </ul>  
              </div>
             </div>
            
              <div class="col-12" style="margin-top:8%;">
                <div class="form-wrap">
                    <p align="center" style=" font-size:20px; margin-bottom:3%;">  Do you have any suggestion ?? </p>
<!--                  <label class="form-label" for="contact-message-2">Message</label>-->
                  <textarea class="form-input textarea-lg" id="contact-message-2" name="message" placeholder="Message..." data-constraints="@Required" maxlength="120"></textarea>
                </div>
              </div>
             <center style="margin-top:4%;"> <button type="submit" name="feedback_submit" class="button button-primary button-pipaluk"  >Send Feedback</button></center>
          </form>
        </div>
           
      </section>
      <div id="foot">
      <div class="container" >
      <div class="row justify-content-md-center">
            <div class="col-md-4" id="foot1">
               <h5 id="h">Address</h5><br>BRAINLIFT TECHNOLOGIES
                1st floor, Krishna Mansion,
                UB hill road, Dharwad-580001.
               </div>
               <div class="col-md-4" id="foot1">
               <h5 id="h">Phone Number</h5><br>+91 7676043435
               </div>
               <div class="col-md-4" id="foot1">
                   <h5 id="h"> Email</h5><br> connect@brainlift.in
               </div>
           
           </div>
      </div>
          </div>
  </body>
</html>
