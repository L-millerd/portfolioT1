<?php

include("connect.php");
include("functions.php");
?>

<!DOCTYPE HTML>
<html>


<head>
<link rel="icon" 
      type="image/png" 
      href="images/favicon.png">

	<title>Lisa Millerd</title>
	
	 <!--stylesheet-->
	<Link href="CSS/week8_contactmap_CSS.css" rel= "stylesheet"/> 
	
	<!--javascript-->
	<script src="JS/week8_contactmap_JS.js"></script>
	
	<!--jquery-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<!--font-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">


	<!--bootstrap-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



	<style>
	
	html, body{
		padding: 0;
		margin: 0;

	}

		div.message{/*what*/
            font-size: 12px;
            margin: 4px 0;
            color: rgb(247, 243, 243);
            display:none;
    	}

        div.error{
            color: red;
        }

        div.success{
            color: green;
        }

        .imgerror{
            width:20px;
            height:20px;
            display:none;
        }

        .imgsuccess{
            width:20px;
            height:20px;
            display:none;
        }



	</style>

	<script>
		/*name-message*/
		$(document).ready(function(){

			$("#first_name").focusin(function(){
					$("#name-message").show();
			});

			$("#first_name").focusout(function(){
					$("#name-message").hide();
			});

			$("#first_name").keyup(function(){
				if(checkName($(this).val()) == false){
					$("#name-message").removeClass("success").addClass("error");
				}
				else{
					$("#name-message").removeClass("error").addClass("success");
				}

			});
		

		/*last-message*/

			$("#last_name").focusin(function(){
					$("#last-message").show();
			});

			$("#last_name").focusout(function(){
					$("#last-message").hide();
			});


			$("#last_name").keyup(function(){
				if(checkName($(this).val()) == false){
					$("#last-message").removeClass("success").addClass("error");
				}
				else{
					$("#last-message").removeClass("error").addClass("success");
				}

			});

		

		/*email-message*/

			$("#email").focusin(function(){
					$("#email-message").show();
			});

			$("#email").focusout(function(){
					$("#email-message").hide();
			});

		

			$("#email").keyup(function(){
               
			   if(isEmail($(this).val()) == false){
				   $("#email-message").removeClass("success").addClass("error");//add class to message that appears with focus
			   }

			   else{
				   $("#email-message").removeClass("error").addClass("success");
			   }
			   			   
		   });
		

		

		/*tel-message*/

			$("#phone_number").focusin(function(){
					$("#tel-message").show();
			});

			$("#phone_number").focusout(function(){
					$("#tel-message").hide();
			});
			

			$("#phone_number").keyup(function(){
               
			if(isTel($(this).val()) == false){
			 	$("#tel-message").removeClass("success").addClass("error");//add class to message that appears with focus
			 }

			else{
			 	   $("#tel-message").removeClass("error").addClass("success");
			}
			 
			   			   
		   });

		});


		function isEmail(email) { //checking that it is the right format
            return /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i.test(email);
        };

		function checkName(name){
             if(name.length >= 3 && isNaN(name))
                return true;
            else 
                return false;
        };

		 function isTel(tel){
		 	if(tel.length >= 10 && !isNaN(tel))
		 		return true;
		 	else
		 		return false;
		 };

		//  function isTel(tel){
		//  	var phoneno = /^\d{10}$/;
		// 	 if((tel.value.match(phoneno))){
		// 		 return true;
		// 	 }
		// 	 else{
		// 		 return false;
		// 	 }
		//   };

		// function isTel(tel) {
  		// 	var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
 		// 	 if(tel.value.match(phoneno)) {
    	// 		return true;
 		// 	 }
  		// 	else {
    	// 		return false;
  		// 	}
		// };



		/*----------------------map-----------*/

		function initMap()
		{

			//	1. Defining my lat long coordinates
			var mylocation = {
				lat: 49.27245,
				lng: -123.095725,
			}

			// 2. Draw your map

			var map = new google.maps.Map(document.getElementById("googleMap"), {
				zoom: 15,
				center: mylocation
			});

			//	3. Plot your marker
			var marker = new google.maps.Marker({
				position: mylocation,
				map: map
			})
		}

	

	
</script>

</head>

<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#" style="font-family: 'Abril Fatface';">Lisa Millerd</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="file:///C:/Users/lisam/Desktop/School/HTML%20CSS/Week8_LisaMillerd/week8_portfolio.html">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Blog <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>

  </div>
</nav>
<!-----END NAV--->

<div class="mainContainer row">
	
	<div class="contactContainer col-md-12 col-lg-6">
		<h3>Contact Me</h3>
		

		<div class="contactForm">	
		<form>
		  <div class="form-row">
			
		    <div class="form-group col-md-6">
		      <label for="first_name">First Name</label>
		      <input type="text" class="form-control" id="first_name" placeholder="First Name..">
			  <small id="name-message" class="">Please include first name</small>

			 </div>

		    <div class="form-group col-md-6">
		      <label for="last_name">Last Name</label>
		      <input type="text" class="form-control" id="last_name" placeholder="Last Name..">
			  <small id="last-message" class="">Please include last name</small>
		    </div>

		  </div>


		  <div class="form-group">
		    <label for="inputAddress">Email</label>
		    <input type="email" class="form-control" id="email" placeholder="yourname@email.com..">
			<small id="email-message" class="">Please use a valid email address</small>
		  </div>
		  


		  <div class="form-group">
		    <label for="inputAddress2">Phone Number</label>
		    <input type="tel" class="form-control" id="phone_number" placeholder="555.555.5555..">
			<small id="tel-message" class="">Please use a valid phone number</small>
		  </div>
		  
		  <div class="form-group">
		    <div class="form-check">
		      <input class="form-check-input" type="checkbox" id="gridCheck">
		      <label class="form-check-label" for="gridCheck">
		        Sign up for our mailing list
		      </label>
		    </div>
		  </div>

		  <div class="form-group">
		    
		      <label for="exampleFormControlTextarea1" class="form-label">How Can I Help You? </label>
		  		<textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Tell me more about your business and branding needs.."></textarea>
		    
		  </div>
		  <button type="submit" class="btn btn-warning">Sign in</button>
		</form>
	</div><!--end contactForm-->
   </div><!--end contactContainer-->


	<div id="googleMap"class="col-md-12 col-lg-6">
	</div><!--end googlemap-->


</div><!-- end mainContainer-->
</body>

<script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg
&callback=initMap">
</script>
</html>