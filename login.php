<?php 
   session_start();
   ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
    
     <?php 
     include 'links/links.php';

     ?>
   <link rel="stylesheet" type="text/css" href="css/style1.css">
   
<body>
<?php
  include 'dbcon.php';
  if(isset($_POST['ca1']))
  {

        $fname=mysqli_real_escape_string($con,$_POST['f_name']) ;
        //$_SESSION['name1']=$fname;
        $lname=mysqli_real_escape_string($con,$_POST['l_name']);
        $email=mysqli_real_escape_string($con,$_POST['email']);
        $mobile=mysqli_real_escape_string($con,$_POST['mobile']);
        $pass=mysqli_real_escape_string($con,$_POST['password']);
        $cpass=mysqli_real_escape_string($con,$_POST['cpassword']);
        $p=md5($pass);
        $cp=md5($cpass);
        $emailquery=" select * from registration where email='$email' ";
        $query=mysqli_query($con, $emailquery);
        $emailcount=mysqli_num_rows($query);
        if($emailcount>0)
        {
              ?>
              <script >
              alert("email already Exist"); 
              </script>
              <?php 
        }
        else
          {
          if($pass ==$cpass)
            {
              $insertquery="insert into registration(f_name, l_name, email, mobile, password, cpassword) values('$fname',' $lname','$email','  $mobile','$p','$cp')";
              $iquery=mysqli_query($con,$insertquery);
                    if(!$iquery)
                    {
                          ?>
                        <script >
                        alert("Not inserted");  
                        </script>
                        <?php 
                    }
                /*$query1="select id from registration where email='$email'";
                $result1=mysqli_query($con,$query1);
                if($result1)
                {
                    $row=mysqli_fetch_assoc($result1);
                    $_SESSION['id1']=$row['id'];
                    header('location:home.php');
                }
                else{
                  echo mysqli_error($con);
                }*/
            }
            else
            {
                  ?>
                    <script >
                    alert( "Password not matched"); 
                    </script>
                  <?php 
             
            }
          }
  } 
    if(isset($_POST['ca2']))
  {
       
        $fname=mysqli_real_escape_string($con,$_POST['f_name1']) ;
        $_SESSION['name2']=$fname;
        $lname=mysqli_real_escape_string($con,$_POST['l_name1']);
        $email=mysqli_real_escape_string($con,$_POST['email1']);
        $mobile=mysqli_real_escape_string($con,$_POST['mobile1']);
        $pass=mysqli_real_escape_string($con,$_POST['password1']);
        $cpass=mysqli_real_escape_string($con,$_POST['cpassword1']);
        $p=md5($pass);
        $cp=md5($cpass);
        $emailquery=" select * from registration1 where email='$email' ";
        $query=mysqli_query($con, $emailquery);
        $emailcount=mysqli_num_rows($query);
        if($emailcount>0)
        {
              ?>
              <script >
              alert("email already Exist"); 
              </script>
              <?php 
        }
         
        
        else
          {
          if($pass ==$cpass)
            {
              $insertquery="insert into registration1(f_name, l_name, email, mobile, password, cpassword) values('$fname',' $lname','$email','  $mobile','$p','$cp')";
              $iquery=mysqli_query($con,$insertquery);
                      if($iquery)
                    {
                      ?>
                      <script >
                      alert("inserted successfully"); 
                      </script>
                      <?php 
                    }
                      else
                        {
                          ?>
                        <script >
                        alert("Not inserted");  
                        </script>
                        <?php 
                    }
                   /* $query1="select id from registration where email='$email'";
                $result1=mysqli_query($con,$query1);
                if($result1)
                {
                    $row=mysqli_fetch_assoc($result1);
                    $_SESSION['id2']=$row['id'];
                    header('location:home1.php');
                }
                else{
                  echo mysqli_error($con);
                }*/
            }
            else
            {
                  ?>
                    <script >
                    alert( "Password not matched"); 
                    </script>
                  <?php 
             
            }
          }
  }
  if(isset($_POST['l1']))
  {
    $email=$_POST['emails1'];
     $password=$_POST['passwords1'];
      $email_search="select * from registration where email='$email' "; 
      $query=mysqli_query($con,$email_search);
      $email_count=mysqli_num_rows($query);
      if($email_count)
      {
        $email_pass=mysqli_fetch_assoc( $query);
        $db_pass=$email_pass['password'];
        $_SESSION['name1']= $email_pass['f_name'];
        $_SESSION['lname1']= $email_pass['l_name'];
        $_SESSION['email1']= $email_pass['email'];
        $_SESSION['mobile1']= $email_pass['mobile'];
        $_SESSION['id1']= $email_pass['id'];
        //$pass_decode=password_verify($password, $db_pass);
        if(md5( $password)==$db_pass)
        {
          echo "Login Sucessful";
          ?>
          <script >
            location.replace("home.php");
          </script>
          <?php
        }
        else
        {
          echo "Password Incorrect";
        }
          
      }
        else
        {
          echo "user Doesn't exist";
        }

      }
  
if(isset($_POST['l2']))
  {
    $email=$_POST['emails2'];
     $password=$_POST['passwords2'];
      $email_search="select * from registration1 where email='$email' "; 
      $query=mysqli_query($con,$email_search);
      $email_count=mysqli_num_rows($query);
      if($email_count)
      {
        $email_pass=mysqli_fetch_assoc( $query);
        $db_pass=$email_pass['password'];
        $_SESSION['name2']= $email_pass['f_name'];
          $_SESSION['lname2']= $email_pass['l_name'];
          $_SESSION['email2']= $email_pass['email'];
           $_SESSION['mobile2']= $email_pass['mobile'];
                 $_SESSION['id2']= $email_pass['id'];
        //$pass_decode=password_verify($password, $db_pass);
        if( md5($password)==$db_pass)
        {
          echo "Login Sucessful";
          ?>
          <script >
            location.replace("home1.php");
          </script>
          <?php
        }
        else
        {
          echo "Password Incorrect";
        }
          
      }
        else
        {
          echo "user Doesn't exist";
        }

      }
  
  ?>
  
  
<header>
	 

	<main>
		<section>
			<!--1st -->

    <div id="myDIV1" style="display: block;">
   			<h3>Welcome To Tuition Club</h3>
			<h1>DO COME & Learn <span class="change_content"> </span> <span style="margin-top: -10px;"> | </span> </h1>
			<p>"We Help Students and Tutors To Find Each Other"</p>
			  <button class="btnone" onclick="myFunction1()">Student</button>
			<button class="btntwo" onclick="myFunction2()">Tutors</button>
			
	</div>
  <!--2nd -->

    <div id="myDIV2" style="display: none;" >
    	<!--student Login-->
    	 <div id="myDIV4" style="display: block;" >
    	 <div class="main_div">
    	 	
      <div class="box"  style="top: 50%">
      <button class="btnone" style='margin-right:10px; margin-bottom: 20px;' 
      onclick="myFunction4()">Login</button>
	  <button class="btntwo" style='margin-right:20px;margin-bottom: 20px;' onclick="myFunction5()">SignUP</button>
        <h4>Login Form</h4>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
          <div class="input-box">
            <input
              type="text"
              name="emails1"
              id="name"
              autocomplete="off"
              required
            />
            <label for="Username">Email</label>
          </div>
           
          <div class="input-box">
            <input
              type="password"
              id="psw"
              name="passwords1"
              pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
              title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
              autocomplete="off"
              required
            />
            <label for="Password">Password</label>
          </div>
          <div class="form-group" id="message">
				    	
					  <h4 class="font-weight-bold"  style="text-align: center;">Password must contain the following:</h4>
  					  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  					<p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  					<p id="number" class="invalid">A <b>number</b></p>
  					<p id="length" class="invalid">Minimum <b>8 characters</b></p>

					</div>
          <div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
				</div>
          <input type="submit" value="Login" name="l1" />
        </form>
      </div>
      			
    </div>
 		 <button class="btntwo" onclick="myFunction3()">Back</button> 
    	 </div>
    	 <!--student login end-->
    	  

        <!--student create account start-->
     	  <div id="myDIV5" style="display: none;" >
     	  <div class="main_div">
      <div class="box"  style="top: 58%">
      	<button class="btnone" style='margin-right:10px; margin-bottom: 20px;' 
      onclick="myFunction4()">Login</button>
	  <button class="btntwo" style='margin-right:20px;margin-bottom: 20px;' onclick="myFunction5()">SignUP</button>
        <h4>Create Account</h4>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
          <div class="input-box">
            <input
              type="text"
              name="f_name"
              id="name"
              autocomplete="off"
              required
            />
            <label for="Username">First Name </label>
          </div>
           <div class="input-box">
            <input
              type="text"
              name="l_name"
              id="name"
              autocomplete="off"
              required
            />
            <label for="Username">Last Name</label>
          </div>
          <div class="input-box">
            <input
              type="text"
              name="email"
              id="name"
              autocomplete="off"
              required
            />
            <label for="Username">Email</label>
          </div>
           <div class="input-box">
            <input
              type="number"
              name="mobile"
              id="name"
              autocomplete="off"
              required
            />
            <label for="Username">Contact No.</label>
          </div>
          
          <div class="input-box">
            <input
              type="password"
              name="password"
              id="name"
              autocomplete="off"
              required
            />
            <label for="Password">Create Password</label>
          </div>
          <div class="input-box">
            <input
              type="password"
              name="cpassword"
              id="name"
              autocomplete="off"
              required
            />
            <label for="Password">Repeat Password</label>
          </div>
          <input type="submit" name="ca1" value="Create Account" />
         <button class="back" onclick="myFunction3()">Reset</button>
         
        </form>

      </div>

    </div> 
    	<!--student create account end-->
     	  </div>
 		
    </div>
    <!--3rd -->
     <div id="myDIV3" style="display: none;" >
     	 
 			<!--tutor Login-->
    	 <div id="myDIV6" style="display: block;" >
    	 <div class="main_div">
      <div class="box"  style="top: 50%">
      	<button class="btnone" style='margin-right:10px; margin-bottom: 20px;' 
      onclick="myFunction6()">Login</button>
	  <button class="btntwo" style='margin-right:20px;margin-bottom: 20px;' onclick="myFunction7()">SignUP</button>
        <h4>Login Form</h4>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
          <div class="input-box">
            <input
              type="text"
              name="emails2"
              id="name"
              autocomplete="off"
              required
            />
            <label for="Username">Email</label>
          </div>
          <div class="input-box">
            <input
              type="password"
              name="passwords2"
              id="name"
              autocomplete="off"
              required
            />
            <label for="Password">Password</label>
          </div>
          <input type="submit" value="Login" name="l2" />
        </form>
      </div>

    </div>
 		 <button class="btntwo" onclick="myFunction3()">Back</button> 
    	 </div>
    	 <!--tutor login end-->
    	  <!--tutor create account start-->
     	  <div id="myDIV7" style="display: none;" >
     	  <div class="main_div">
      <div class="box"  style="top:58%">
      	<button class="btnone" style='margin-right:10px; margin-bottom: 20px;' 
      onclick="myFunction6()">Login</button>
	  <button class="btntwo" style='margin-right:20px;margin-bottom: 20px;' onclick="myFunction7()">SignUP</button>
        <h4>Create Account</h4>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
          <div class="input-box">
            <input
              type="text"
              name="f_name1"
              id="name"
              autocomplete="off"
              required
            />
            <label for="Username">First Name </label>
          </div>
           <div class="input-box">
            <input
              type="text"
              name="l_name1"
              id="name"
              autocomplete="off"
              required
            />
            <label for="Username">Last Name</label>
          </div>
          <div class="input-box">
            <input
              type="text"
              name="email1"
              id="name"
              autocomplete="off"
              required
            />
            <label for="Username">Email</label>
          </div>
           <div class="input-box">
            <input
              type="number"
              name="mobile1"
              id="name"
              autocomplete="off"
              required
            />
            <label for="Username">Contact No.</label>
          </div>
        
          
          <div class="input-box">
            <input
              type="password"
              name="password1"
              id="name"
              autocomplete="off"
              required
            />
            <label for="Password">Create Password</label>
          </div>
           <div class="input-box">
            <input
              type="password"
              name="cpassword1"
              id="name"
              autocomplete="off"
              required
            />
            <label for="Password">Repeat Password</label>
          </div>
          <input type="submit" value="Create Account" name="ca2" />
         <button class="back" onclick="myFunction3()">Reset</button>
         
        </form>

      </div>

    </div> 
    	<!--Tutor create account end-->
     	  </div>
 		
    </div>
		</section>
	</main>


</header>

</body>
		<script type="text/javascript">
    function myFunction1() {

        document.getElementById("myDIV1").style.display = "none";

        document.getElementById("myDIV2").style.display = "block";

        document.getElementById("myDIV3").style.display = "none";

      

    }

    function myFunction2() {

      document.getElementById("myDIV1").style.display = "none";

      document.getElementById("myDIV2").style.display = "none";

      document.getElementById("myDIV3").style.display = "block";

  

    }

    function myFunction3() {

      document.getElementById("myDIV1").style.display = "block";

      document.getElementById("myDIV2").style.display = "none";

      document.getElementById("myDIV3").style.display = "none";
}
     function myFunction4() {

        document.getElementById("myDIV4").style.display = "block";

        document.getElementById("myDIV5").style.display = "none";



        

      

    }

    function myFunction5() {

      document.getElementById("myDIV4").style.display = "none";

      document.getElementById("myDIV5").style.display = "block";

   

  

    }

    function myFunction6() {

      document.getElementById("myDIV6").style.display = "block";

      document.getElementById("myDIV7").style.display = "none";

  


    }

   	  function myFunction7() {

      document.getElementById("myDIV6").style.display = "none";

      document.getElementById("myDIV7").style.display = "block";

    


    }
    var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}

</script>
</html>