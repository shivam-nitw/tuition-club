 <?php 
   session_start();
   if(!isset($_SESSION['name1']))
   {
   	 ?>
          <script >
          	 alert( "You are Logout Plz Login");
            location.replace("login.php");
          </script>
     <?php
   }
   ?>
 <!DOCTYPE html>
<html>
<head>
	<title>TUITION CLUB</title>
	
	  <?php 
     include 'links/links1.php';

     ?>
  <link rel="stylesheet" type="text/css" href="css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
</head>
<body>
	 <?php
	 include 'dbcon.php';
  	$locality=$_SESSION['locality1'];
	$add1=$_SESSION['add_11'];
	$add2= $_SESSION['add_21'];
	$board= $_SESSION['board1'];
	$class=$_SESSION['class1'];
	$mode=$_SESSION['mode1'];
	$subject= $_SESSION['subject'];
	$id=$_SESSION['id1'];
	$query1="insert into student (id,locality,add_1,add_2,board, class,mode) VALUES ('$id','$locality',' $add1','$add2','$board','$class','$mode')";
    $result1=mysqli_query($con,$query1);
    if(!$result1)
    {
   		#echo mysqli_error($con);
    }
    foreach($subject as $sub)
    {
    	$query2="insert into stdsub values('$id','$sub')";
    	$result2=mysqli_query($con,$query2);
    	if(!$result2)
    	{
    		#echo mysqli_error($con)."<br>";
    	}
    }
  ?>
		 <!--    </div>
		</div>
	</div> -->



<!-- **************** Header Part start ****************** -->

<div class="header" id="topheader">
	<nav class=" navbar navbar-expand-lg fixed-top">
		<div class="container text-uppercase pt-3">
		<a class="navbar-brand text-white font-weight-bold" href="home.php">Tuition Club</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto text-white">
				<li class="nav-item active">
					<a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
				</li>	
				<li class="nav-item">
					<a class="nav-link" href="#servicediv">TUITION</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#pricingdiv">Exam coaching</a>
				</li>
					<li class="nav-item">
					<a class="nav-link" href="#pricingdiv">Courses</a>
				</li>
				<li class="nav-item" >
									<div class="drop">
				  <a class="nav-link"> Hii,<?php echo $_SESSION['name1']; ?></a>
				  <div class="drop-content">
				    <a class="nav-link" href="#" onclick="myFunction2();">My profile</a>
				    <a class="nav-link" href="#" >My students</a>
				    <a class="nav-link" href="logout.php">Logout</a>
				  </div>
				</div>
				</li>
			</ul>
			 
		</div>

		</div>
	
	</nav>
	<section class="header-section">
		<div id="mydiv1" style="display: block;">
		<div class="center-div">
			
			
			<h1 class="font-weight-bold">🙂 Student   🙂<?php echo $_SESSION['name1']; ?>🙂</h1>
			<h1 class="font-weight-bold">Find Tutors, Trainers & Institutes near you or Online</h1>
			<div class="upStats">
			<span><span class="upstatCt">6.5 Lakh+</span> <span>Verified</span> Tutors & Institutes !! </span>
			<span><span class="upstatCt">  25 Lakh+</span> Students !!</span>
			<span><span class="upstatCt">  1 Lakh+</span> Reviews</span>
		</div>
		<br>
		
			<div class="header-buttons">
				<a href="#aboutus">AboutUs</a>
				<a href="#contact" class="header-second-button">Contact</a>
				<a href="#" class="header-second-button" >Result</a>
			</div> <br>
				<div class="d-flex justify-content-center">
		 <form class="form-inline my-2 my-lg-0" >
		 	
		 	<input style="width: 200px; margin-left: 40px;" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button style="margin-left: 90px" class="btn btn-outline-success my-2 my-sm-0" type="submit">Find -></button>	
		 
      
    </form>
    	</div>
    	</div>
    	</div>
    	<!-- my div1 end -->
    	<!-- mydiv 2 start -->
    	<div id="mydiv2" style="display: none;">
    		  <?php 
     			include 'user.php';
     			?>
              <script>
             <a href="#" class="header-second-button" onclick="myFunction1();">Result</a>
              </script>
              <?php 
     	
     			?>
    	</div>
    	<!-- mydiv 2 end -->
		
	</section>
</div>

<!-- ***************** Header part end **************** -->

<!-- ******************** header extra three div start ************ -->

<section class="header-extradiv">
	<div class="container ">
		 <div class="row text-center">
		 	<div class=" extradiv col-lg-4  col-md-4 col-12">
		 			<a href="#">
		 				<i class="fa fa-3x fa-desktop" aria-hidden="true"></i>
		 			</a>
		 			<h2>Post your learning requirement</h2>
		 			<p>Want to learn something? Just enter
					details such as subject or category,
					locality and preference.</p>
		 	</div>

		 	<div class=" extradiv col-lg-4  col-md-4 col-12">
		 			<a href="#">
		 				<i class="fa fa-3x fa-trophy" aria-hidden="true"></i>
		 			</a>
		 			<h2>Get customised responses</h2>
		 			<p>Based on your requirement you will start
					getting customised responses from tutors and
					institutes.</p>
		 	</div>

		 	<div class=" extradiv col-lg-4  col-md-4 col-12">
		 			<a href="#">
		 				<i class="fa fa-3x fa-magic" aria-hidden="true"></i>
		 			</a>
		 			<h2>Compare & select the best</h2>
		 			<p>Once you get responses, you can
compare them and choose the ones that
fit your learning requirement.</p>
		 	</div>
		 </div>
	</div>
</section>

<!-- ******************  header extra three div end ******************* -->


<!-- *************************contactus o/p start************************* -->

<section class=" contactus" style="height: auto; margin-top: 100px;" >
	<div class="container headings text-center" >
		<h1 class="text-center font-weight-bold " id="signup">A/c your responce result!!!</h1>
		<p class="text-capitalize pt-1">Join Tuition club , silliguri and connect with more than 25 Lakh students on the platform. Give your Info and grow your network.Signup as a Tutor 🙂</p>
	</div>
<div class="container">    
			<form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="myForm" >
				<table class="table table-hover" border="0">
    <thead>
      <tr>
        <th>Teacher</th>
        <th>Subject</th>
        <th>Study Mode </th>
        <th>Contact No. </th>
        <th>Email</th>
         <th>Intrested</th>
      </tr>
    </thead>
    <tbody>
				<!-- datab fatchong according to student requirment start-->
			<?php 
				if($mode=="online" || $mode=="any")
    	{
    		foreach($subject as $sub)
    		{
		    	$query3="select t.class,s.sub,r.f_name,r.l_name,r.email,r.mobile from teacher t inner join registration1 r on r.id=t.id inner join tutsub s on s.tut_id=r.id 
		    		and s.sub='$sub' and t.board='$board' and t.class='$class'
		    	    group by s.sub";
		    	$result3=mysqli_query($con,$query3);
			    if($result3)
			    {
			    	/*echo " <table class='table table-hover' border='0'>
						    <thead>
						      <tr>
						        <th>Teacher</th>
						        <th>Subject</th>
						        <th>Study Mode </th>
						        <th>Contact No. </th>
						        <th>Email</th>
						         <th>Intrested</th>
						      </tr>
						    </thead>
						    <tbody>";*/
			    	while($row3 = $result3->fetch_assoc())
			    	{

			    		echo "<tr >"; 
			    		 echo "<td>" . $row3['f_name']." ".$row3['l_name']. "</td>";
			    		  echo "<td>" .$row3['sub']. "</td>";
			    		   echo "<td>" . $mode. "</td>";
			    		    echo "<td>" . $row3['mobile'] . "</td>";
			    		     echo "<td>" . $row3['email'] . "</td>";
			    		      echo "<td>" . '<input type="checkbox" name="teach[]" value="'. $row3['f_name'] .$row3['l_name'].'"  class="form-control">
                  ' . "</td>";
                  	 echo "</tr>";
			    		 /*
			    		echo $row3['sub'].' '.$row3['f_name'].' '.$row3['l_name'].' '.$row3['email'].' '.$row3['mobile']."<br>";*/
			    		
			    	}
			    	 /*echo"</tbody";
			    	 echo"</table>";
*/
			    }
			    else{
			    	echo "<h1 class='text-center font-weight-bold' style='color:red;'>Sry...No Tutor is availabe in your area this time Please revisit after Some days!!<h1>";
			    	echo mysqli_error($con);
			    }
			}
		}
		else if($mode=="offline" || $mode=="any")
		{

			foreach($subject as $sub)
    	{
				$query4="select s.sub,r.f_name,r.l_name,r.email,r.mobile from teacher t inner join registration1 r on r.id=t.id inner join tutsub s on s.tut_id=r.id 
		    		and s.sub='$sub' and t.board='$board' and t.add_2='$add2' and t.class='$class'
		    	    group by s.sub";
		    $result4=mysqli_query($con,$query4);
			    if($result4)
			    {
			    	/*echo " <table class='table table-hover' border='0'>
						    <thead>
						      <tr>
						        <th>Teacher</th>
						        <th>Subject</th>
						        <th>Study Mode </th>
						        <th>Contact No. </th>
						        <th>Email</th>
						         <th>Intrested</th>
						      </tr>
						    </thead>
						    <tbody>";*/
			    	while($row4 = $result4->fetch_assoc())
			    	{
			    		
			    		///write logic for class here then show it
			    	

			    		echo "<tr >"; 
			    		 echo "<td>" . $row4['f_name']." ".$row4['l_name']. "</td>";
			    		  echo "<td>" .$row4['sub']. "</td>";
			    		   echo "<td>" . $mode. "</td>";
			    		    echo "<td>" . $row4['mobile'] . "</td>";
			    		     echo "<td>" . $row4['email'] . "</td>";
			    		      echo "<td>" . '<input type="checkbox" name="teach[]" value="'. $row4['f_name'] .$row4['l_name'].'"  class="form-control">
                  ' . "</td>";
                  	 echo "</tr>";
			    		/*echo $row4['sub'].' '.$row4['f_name'].' '.$row4['l_name'].' '.$row4['email'].' '.$row4['mobile']."<br>";*/
			    	}
			    	/*echo"</tbody";
			    	 echo"</table>";*/
			    }
			    else{
			    	echo "hello";
			    	echo mysqli_error($con);
			    	echo "<h1 class='text-center font-weight-bold' style='color:red;'>Sry...No Tutor is availabe in your area this time Please revisit after Some days!!<h1>";
			    }
			}
		}
   		
			 ?>  
	</tbody>
  </table>      
			 <!-- datab fatchong according to student requirment end-->
  					<div class="form-group">
					
					  <p class="font-weight-bold" style="text-align: center;">if your intrested in any of the Tutor,click on intrested and submit please!!</p>
					</div>
  <div class="d-flex justify-content-center">
						<!-- <input type="submit"  value="Submit" name="req"> -->
				 <button type="submit" class="text-center" value="Submit" name="intrest" >Submit</button> 
				    </div>
				</form>
</div>

</section>

<!-- *************************contactus o/p end************************* -->









<!-- ******************* Project done start *********************** -->
	
<section class="project-work">
	<div class="container headings text-center">
		<p class="text-center font-weight-bold text-uppercase">MORE THAN 2,000 TUTORS AND STUDENT</p>
	</div>

	<div class="container servicediv project-works d-flex justify-content-around align-items-center">
		<div>
			<h1 class="count"> 1500</h1>
			<p>IT courses Tutors</p>
		</div>
		<div>
			<h1 class="count"> 2500 </h1>
			<p>JEE NEET & MEDICAL Tutors</p>
		</div>
		<div>
			<h1 class="count"> 700 </h1>
			<p>Language Tutors</p>
		</div>
		<div>
			<h1 class="count"> 500 </h1>
			<p>Hobby Class Tutors</p>
		</div>
	</div>
</section>

<!-- ******************* Project done ends *********************** -->
<!-- ******************* director start *********************** -->
		<section class="happy">
	<div class="container headings text-center" >
		<h1 class="text-center font-weight-bold " id="aboutus">Why students love Tuition Club ?</h1>
		<p class="text-capitalize pt-1">Know something different about us</p>
	</div>

	<div class="container">

				<div id="demo1" class="carousel slide" data-ride="carousel">

				  <!-- Indicators -->
				  <ul class="carousel-indicators1">
				    <li data-target="#demo" data-slide-to="0" class="active"></li>
				    <li data-target="#demo" data-slide-to="1"></li>
				    <li data-target="#demo" data-slide-to="2"></li>
				  </ul>
				  
				  <!-- The slideshow -->
				  <div class="carousel-inner">

				    <div class="carousel-item active">

				    	<div class="row">
				    		<div class="col-lg-4 col-md-4 col-12">
				    				<div class="box1">
							    		<a href="#">
							    			<img src="images/aditya.jpg" class="img-fluid img-thumbnail" >
							    		</a>

							    		<p class="m-4">Very professional and transparent service from Tuition Club. Last year I contacted them for my daughter's drawing class and got multiple options near my home. I recommend parents to take service from Tuition Club.</p>

							    		<h1>Aditya Kumar</h1>
							    		<h2>CEO , Tuition Club</h2>
							    	</div>
				    		</div>

				    		<div class="col-lg-4 col-md-4 col-12">
				    				<div class="box">
							    		<div>
							    		<a href="#">
							    			<img src="images/sattu.jpeg" class="img-fluid img-thumbnail">
							    		</a>
							    		</div>

							    	<p class="m-4">Tuition Club has done an impressive job by connecting me with an excellent iOS Trainer. For the first time, I am able to understand the basics of iOS programming clearly.</p>

							    		<h1>Satyam Prakash</h1>
							    		<h2>Director , Tuition Club</h2>
							    	</div>
				    		</div>

				    		<div class="col-lg-4 col-md-4 col-12">
				    				<div class="box">
							    		<div>
							    		<a href="#">
							    			<img src="images/shivam1.jpeg" class="img-fluid img-thumbnail">
							    		</a>
							    		</div>

							    		<p class="m-4">I am using this service for a pretty long time to get teachers, and it was always very easy for me. Moreover, these guys response pretty quickly and I am quite satisfied with their way of working.</p>

							    		<h1>Shivam Rathore</h1>
							    		<h2>Asst Director</h2>
							    	</div>
				    		</div>
				    	</div>
				   

				    </div>
	 </div>
<!-- ******************* director end *********************** -->

<!-- ******************* Pricing starts *********************** -->

<section class="pricing" id="pricingdiv">
	<div class="container headings text-center">
		<h1 class="text-center font-weight-bold text-white">Our Best Guidelines</h1>
	</div>

<div class="container">
	<div class="row">
		<div class="col-lg-4 col-12">
			<div class="card text-center">
			  <div class="card-header">All Classes – NCERT Solutions</div>
			 <div class="card-footer ">
			  	<a href="https://www.learncbse.in/ncert-solutions-2/#NCERT_Solutions_For_Class_6">Class 6</a>
			  </div>
			  <div class="card-footer ">
			  	<a href="https://www.learncbse.in/ncert-solutions-2/#NCERT_Solutions_For_Class_7">Class 7</a>
			  </div>
			  <div class="card-footer ">
			  	<a href="https://www.learncbse.in/ncert-solutions-2/#NCERT_Solutions_For_Class_8">Class 8</a>
			  </div>
			  <div class="card-footer ">
			  	<a href="https://www.learncbse.in/ncert-solutions-2/#NCERT_Solutions_For_Class_9">Class 9</a>
			</div>
			 <div class="card-footer ">
			  	<a href="https://www.learncbse.in/ncert-solutions-2/#NCERT_Solutions_For_Class_10">Class 10</a>
			</div>
			 <div class="card-footer ">
			  	<a href="https://www.learncbse.in/ncert-solutions-2/#NCERT_Solutions_For_Class_11">Class 11</a>
			</div>
			 <div class="card-footer ">
			  	<a href="https://www.learncbse.in/ncert-solutions-2/#NCERT_Solutions_For_Class_12">Class 12</a>
			</div>
		</div>
</div>
				<div class="col-lg-4 col-12">
			<div class="card text-center">
			  <div class="card-header">All Classes – WBBSE syllabus</div>
			 <div class="card-footer ">
			  	<a href="https://www.ncertbooks.guru/west-bengal-board-books/#West_Bengal_State_Board_TextBooks_Class_6_Books">Class 6</a>
			  </div>
			  <div class="card-footer ">
			  	<a href="https://www.ncertbooks.guru/west-bengal-board-books/#West_Bengal_State_Board_TextBooks_Class_7_Books">Class 7</a>
			  </div>
			  <div class="card-footer ">
			  	<a href="https://www.ncertbooks.guru/west-bengal-board-books/#West_Bengal_State_Board_TextBooks_Class_8_Books">Class 8</a>
			  </div>
			  <div class="card-footer ">
			  	<a href="https://www.ncertbooks.guru/west-bengal-board-books/#West_Bengal_State_Board_TextBooks_Class_9_Books">Class 9</a>
			</div>
			 <div class="card-footer ">
			  	<a href="https://www.ncertbooks.guru/west-bengal-board-books/#West_Bengal_State_Board_TextBooks_Class_10_Books">Class 10</a>
			</div>
			 <div class="card-footer ">
			  	<a href="https://www.ncertbooks.guru/west-bengal-board-books/#West_Bengal_State_Board_TextBooks_Class_11_Books">Class 11</a>
			</div>
			 <div class="card-footer ">
			  	<a href="https://www.ncertbooks.guru/west-bengal-board-books/#West_Bengal_State_Board_TextBooks_Class_12_Books">Class 12</a>
			</div>
		</div>
</div>
				<div class="col-lg-4 col-12">
			<div class="card text-center">
			  <div class="card-header">All Classes – CBSE syllabus</div>
			 <div class="card-footer ">
			  	<a href="https://www.ncertbooks.guru/ncert-books-pdf/amp/#NCERT_Books_for_Class_6">Class 6</a>
			  </div>
			  <div class="card-footer ">
			  	<a href="https://www.ncertbooks.guru/ncert-books-pdf/amp/#NCERT_Books_for_Class_7">Class 7</a>
			  </div>
			  <div class="card-footer ">
			  	<a href="https://www.ncertbooks.guru/ncert-books-pdf/amp/#NCERT_Books_for_Class_8">Class 8</a>
			  </div>
			  <div class="card-footer ">
			  	<a href="https://www.ncertbooks.guru/ncert-books-pdf/amp/#NCERT_Books_for_Class_9">Class 9</a>
			</div>
			 <div class="card-footer ">
			  	<a href="https://www.ncertbooks.guru/ncert-books-pdf/amp/#NCERT_Books_for_Class_10">Class 10</a>
			</div>
			 <div class="card-footer ">
			  	<a href="https://www.ncertbooks.guru/ncert-books-pdf/amp/#NCERT_Books_for_Class_11">Class 11</a>
			</div>
			 <div class="card-footer ">
			  	<a href="https://www.ncertbooks.guru/ncert-books-pdf/amp/#NCERT_Books_for_Class_12">Class 12</a>
			</div>
		</div>
</div>
	</div>
</div>


</section>
<br><br>
	
<!-- ******************* Pricing ends *********************** -->
<!-- ******************* director start *********************** -->

<!-- ******************* director end *********************** --><!-- ******************* Our Happy Clients starts *********************** -->
<!-- ******************* Our Happy Clients starts *********************** -->

<section class="happyclients">
	<div class="container headings text-center">
		<h1 class="text-center font-weight-bold ">Our Happy Clients</h1>
		<p class="text-capitalize pt-1">Our satisfied customer says</p>
	</div>

	<div class="container">

				<div id="demo" class="carousel slide" data-ride="carousel">

				  <!-- Indicators -->
				  <ul class="carousel-indicators">
				    <li data-target="#demo" data-slide-to="0" class="active"></li>
				    <li data-target="#demo" data-slide-to="1"></li>
				    <li data-target="#demo" data-slide-to="2"></li>
				  </ul>
				  
				  <!-- The slideshow -->
				  <div class="carousel-inner">

				    <div class="carousel-item active">

				    	<div class="row">
				    		<div class="col-lg-4 col-md-4 col-12">
				    				<div class="box">
							    		<a href="#">
							    			<img src="images/varun.jpg" class="img-fluid img-thumbnail" >
							    		</a>

							    		<p class="m-4"> Tuition Club has really been beneficial in fetching us leads and boosting our business.Tuition Club   services are really commendable. We are happy to be a part of Tuition Club 's family.</p>

							    		<h1>Varun Gautam</h1>
							    		<h2>Computer Faculty</h2>
							    	</div>
				    		</div>

				    		<div class="col-lg-4 col-md-4 col-12">
				    				<div class="box">
							    		<div>
							    		<a href="#">
							    			<img src="images/harshit.jpeg" class="img-fluid img-thumbnail">
							    		</a>
							    		</div>

							    			<p class="m-4"> Tuition Club has done an impressive job by connecting me with an excellent iOS Trainer. For the first time, I am able to understand the basics of iOS programming clearly.</p>

							    		<h1>Harshit Arora</h1>
							    		<h2>Coding Tutor</h2>
							    	</div>
				    		</div>

				    		<div class="col-lg-4 col-md-4 col-12">
				    				<div class="box">
							    		<div>
							    		<a href="#">
							    			<img src="images/danny.jpg" class="img-fluid img-thumbnail">
							    		</a>
							    		</div>

							    		<p class="m-4"> Tuition Club has really been beneficial in fetching us leads and boosting our business. Tuition Club  services are really commendable. We are happy to be a part of Tuition Club 's family.</p>

							    		<h1>Ghanshyam singh Sisodia</h1>
							    		<h2>Math Faculty</h2>
							    	</div>
				    		</div>
				    	</div>
				   

				    </div>
				    <div class="carousel-item">
				      <div class="row">
				    		<div class="col-lg-4 col-md-4 col-12">
				    				<div class="box">
							    		<a href="#">
							    			<img src="images/ankit.jpg" class="img-fluid img-thumbnail" >
							    		</a>

							    			<p class="m-4"> "I am so thank ful ma'am and sir for guiding me you are a mentor for me and inspiration to. You are as sweet as your voice the way you explain everything is amazing. I just loved it. "</p>

							    	<h1>Ankit Kumar</h1>
							    		<h2>10th Student</h2>
							    	</div>
				    		</div>

				    		<div class="col-lg-4 col-md-4 col-12">
				    				<div class="box">
							    		<div>
							    		<a href="#">
							    			<img src="images/sudhanshu.jpg" class="img-fluid img-thumbnail">
							    		</a>
							    		</div>

							    		<p class="m-4"> Tuition Club has really been beneficial in fetching us leads and boosting our business. Tuition Club services are really commendable. We are happy to be a part of Tuition Club's family.</p>


							    	<h1>Sudhanshu singh</h1>
							    		<h2>12th Student</h2>
							    	</div>
				    		</div>

				    		<div class="col-lg-4 col-md-4 col-12">
				    				<div class="box">
							    		<div>
							    		<a href="#">
							    			<img src="images/sanu.jpg" class="img-fluid img-thumbnail">
							    		</a>
							    		</div>

							    			<p class="m-4"> Tuition Club has done an impressive job by connecting me with an excellent iOS Trainer. For the first time, I am able to understand the basics of iOS programming clearly.</p>


							    	<h1>Sanu Ranjan</h1>
							    		<h2>JEE MAINS/ADVANCE Student</h2>
							    	</div>
				    		</div>
				    	</div>
				    </div>
				    <div class="carousel-item">
				      <div class="row">
				    		<div class="col-lg-4 col-md-4 col-12">
				    				<div class="box">
							    		<a href="#">
							    			<img src="images/anjali.jpeg" class="img-fluid img-thumbnail" >
							    		</a>

							    			<p class="m-4"> "Teachers have a passion for teaching and focus on each and every student. She knows her student well and knows which areas to focus more.They are very hardworking and very polite.  "</p>

							    	<h1>Anjali  Mani</h1>
							    		<h2>NEET Student</h2>
							    	</div>
				    		</div>

				    		<div class="col-lg-4 col-md-4 col-12">
				    				<div class="box">
							    		<div>
							    		<a href="#">
							    			<img src="images/shantanu.jpg" class="img-fluid img-thumbnail">
							    		</a>
							    		</div>
 
							    			<p class="m-4">I am using this service for a pretty long time to get teachers, and it was always very easy for me. Moreover, these guys response pretty quickly and I am quite satisfied with their way of working.</p>


							    		<h1>Shantanu Agarawal</h1>
							    		<h2>Computer Faculty</h2>
							    	</div>
				    		</div>

				    		<div class="col-lg-4 col-md-4 col-12">
				    				<div class="box">
							    		<div>
							    		<a href="#">
							    			<img src="images/akhilesh.jpg" class="img-fluid img-thumbnail">
							    		</a>
							    		</div>

							    			<p class="m-4"> Tuition Club has really been beneficial in fetching us leads and boosting our business. Tuition Club services are really commendable. We are happy to be a part of Tuition Club's family.</p>


							    		<h1>Akhilesh Yadav</h1>
							    		<h2>Biology Faculty(NEET)</h2>
							    	</div>
				    		</div>
				    	</div>
				    </div>
				  </div>
				  
				  <!-- Left and right controls -->
				  <a class="carousel-control-prev" href="#demo" data-slide="prev">
				    <span class="carousel-control-prev-icon"></span>
				  </a>
				  <a class="carousel-control-next" href="#demo" data-slide="next">
				    <span class="carousel-control-next-icon"></span>
				  </a>
				</div>

	</div>
</section>

<!-- ***************************** happy clients end ************************ -->






<!-- *************************footer start************************* -->
<footer class="footersection" id="footerdiv"> 
	<div class="container"  style="width: 100%">
		<div class="row">
			<div class="footer-div  col-lg-4 col-md-6 col-12">
				<div>
					<h3> About Tution Club </h3>
					<p>
						Tuition Club is a good online platform for Students & Trainers.
					Come and join with us.
					</p>
				</div>
			</div>

			<div class="footer-div  col-lg-4 col-md-6 col-12 text-center">
				<div>
					<h3> NAVIGATION LINKS </h3>
					<li class=" active">
					<a  href="#">Home <span class="sr-only">(current)</span></a>
					</li>	
					<li class="">
						<a  href="#">Tution</a>
					</li>
					<li class="">
						<a  href="#">Exam Coaching</a>
					</li>
					<li class=" ">
						<a  href="#">Courses </a>
					</li>
				</div>
			</div>

			<div class="footer-div  col-lg-4 col-md-12 col-12">
				<div>
					<h3> Feedback and Query </h3>
					<p>
						For Feedback and Query plz write .
					</p>

					<div class="newsletter-main container">
						<div class="row">
							<div class="col-12">
							 <div class="input-group mb-3">
							    <input type="email" class="form-control news-input" placeholder="Write us"  required>
							    <div class="input-group-append">
							      <span class="input-group-text text-center">Submit</span>
							    </div>
							  </div>
							</div>
						</div>
					
					</div>
				</div>
			</div>
		</div>
		<div class="mt-5 text-center">
			<p>Copyright ©2021 All rights reserved | TuitionClub.com </p>
		</div>
		<div class="scrolltop float-right">
			<i class="fa fa-arrow-up"  onclick="topFunction()" id="myBtn" > </i> 
		</div>
	</div>
</footer>
<!-- **************************** footer ends *********************/ -->


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha256-JtQPj/3xub8oapVMaIijPNoM0DHoAtgh/gwFYuN5rik=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <script>
  	$('.count').counterUp({
  		delay:10,
  		time:3000
  	})
		  	function valthisform()
		{
		    var checkboxs=document.getElementsByName("subject[]");
		    //var  checkboxs=document.getElementsByTag(subject[]);
		    var ok=false;
		    for(var i=0,l=checkboxs.length;i<l;i++)
		    {
		    	//debugger;
		        if(checkboxs[i].checked)
		        {
		        	ok=true;
		            break;
		        }
		    }
		   		       if(!ok)
		       	{
		       		document.getElementById("demo").innerHTML = "* Please select at least one subject";
		       		//alert("Please check a checkbox");
		       		return false;
		       	}
		       	else
		       		return true;
    			//else alert("Please check a checkbox");
		    //return false;
		   }

		    		

  	function checkvalidation(){
  		let email = document.getElementById('email').value;
  		let username = document.getElementById('username').value;
  		debugger;
  		if(username == "" ){
  			alert("Please Fill the username Id");
  			return false;
  		}

  		if(email == ""){
  			alert("Please Fill the Email Id");
  			return false;
  		}

  		return true;
  	}

  	function checknewsletter(){
		let newsletter = document.getElementById('newsletter').value;
  
  		if(newsletter == ""){
  			alert("Please Fill the Email Id");
  			return false;
  		}

  		return true;
  	}


  		mybutton = document.getElementById("myBtn");

		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
		  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		    mybutton.style.display = "block";
		  } else {
		    mybutton.style.display = "none";
		  }
		}

		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
		  document.body.scrollTop = 0; // For Safari
		  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
		}
		function myFunction1(e) {

        document.getElementById("mydiv1").style.display = "block";

        document.getElementById("mydiv2").style.display = "none";
        	e.preventDefault();
      

      

    }

    function myFunction2(e) {

       document.getElementById("mydiv1").style.display = "none";

        document.getElementById("mydiv2").style.display = "block";
        e.preventDefault();
  

    }
    /*function gototab(reload)
   {
    window.location.hash = '#tab';
    window.location.reload(true);
 }*/
  </script>




</body>
</html>