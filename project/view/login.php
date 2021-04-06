
<!DOCTYPE html>
<html>
<head>
	
<title>Unite Online Shopping Mart</title>
<meta charset="utf-8">
	<title>Unite Online Shopping Mart</title>
	<link rel="stylesheet" type="text/css" href="../css/log-reg.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
<body>
	
		<div class="hero">
			<div class="form-box">
				<div class="button-box">
					<div id="btn"></div>
               <button  type="button" class="toggle-btn" onclick="login()">Log In</button>
	         <button  type="button" class="toggle-btn"onclick="resister()">Register
	     </button>
	 </div>
	      <div class="social-icon">
					<img src="../pic/fb.jpg" >
					<img src="../pic/google-logo.png" >
					<img src="../pic/tweeter.jpg" >

							</div> 
						
				<form class="input" id="login" action="../controller/logcheck.php" method="post" >

					<input type="text" class="input-field" name="username" placeholder="Enter the Email" required>

					<input type="password" class="input-field"name="password" required>
					<br>
					<input type="checkbox" class="chech-box"><span>Remamber password</span>
			  <br>

					<button type="submit" class="submit-btn" name="login"> Log In</button>
								
							</form>
							
							

		<form class="input" id="register" action="../controller/reg.php" method="POST" onsubmit="return myfun()">
            
              <input type="text" class="input-field" placeholder="Name" name ="name" id="name" id="user">
              <span id="username" class="text-danger font-weight-bold"> </span>
			
              <input type="text" class="input-field" placeholder="User name" name ="username">
              <span id="username" class="text-danger font-weight-bold"> </span>
              
			

              <input type="number" class="input-field" placeholder="Phone Number" name ="phone" id="mobileNumber">
              <span id="mobileno" class="text-danger font-weight-bold"> </span>
             
			
              <input type="email" class="input-field" placeholder="Email" name="email" id="emails">
                <span id="emailids" class="text-danger font-weight-bold"> </span>
              
              <input type="password" class="input-field" id="pass" >
              <span id="passwords" class="text-danger font-weight-bold"> </span>

              <input type="password" class="input-field"name ="repass" required id="compass" >
              <span id="confrmpass" class="text-danger font-weight-bold"> </span>
             
             
              <input type="area" class="input-field" placeholder="Address" name="address"  required>
              <span id="username" class="text-danger font-weight-bold"> </span>
           

<div class="input-field" style="color:#686060;">
	<label>Gender:</label><br>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label>
</div>
<span id="username" class="text-danger font-weight-bold"> </span>

              <input type="checkbox" class="chech-box" required="tweeter"><span>Agree with the tearms and condition</span>
      
              <a href="login.php"><input type="submit" name="signup" value="Submit"class="submit-btn" name="Resister"></a>
         
          </form>
            </form>

          
          </div>
          
        </div>
            
                    
	 </div>
	</div>


<script>
			var x=document.getElementById("login");
			var y=document.getElementById("register");
			var z=document.getElementById("btn");
			 function resister()
			 {
			 	x.style.left ="-250px";
			 	y.style.left ="0";
			 	z.style.left ="130px";
			 }

			 function login()
			 {
			 	x.style.left ="50px";
			 	y.style.left ="450px";
			 	z.style.left ="0";
			 }

 function myfun()
	{

		var correct_way=/^[A-Za-z.-]+$/;
		var a= document.getElementById("myname").value;

		if(a=="")
		{
			document.getElementById("msg").innerHTML="**please fill username ";
			return false;
		}
		

		 if(a.length <2)
		 {
		 	document.getElementById("msg").innerHTML="**must be more then 2";
		 	return false;
		 }
		


		if(a.match(correct_way))
		
			true;
		
		 else {
		 	document.getElementById("msg").innerHTML="**only alphabets are allowed";
		 	return false;

		 }
	}

</script>

</body>
</html>
