<?php
	include 'dbcon.php';
	session_start();
    if(!isset($_SESSION['name2']))
    {
   	 	?>
          <script >
          	 alert( "You are Logout Plz Login");
            location.replace("login.php");
          </script>
     	<?php
    }
    $locality=$_SESSION['locality1'];
	$add1=$_SESSION['add_11'];
	$add2= $_SESSION['add_21'];
	$board= $_SESSION['board1'];
	$class=$_SESSION['class1'];
	$mode=$_SESSION['mode1'];
	$subject= $_SESSION['subject'];
	$id=$_SESSION['id2'];
	$query1="insert into teacher (id,locality,add_1,add_2,board, class,mode) VALUES ('$id','$locality',' $add1','$add2','$board','$class','$mode')";
    $result1=mysqli_query($con,$query1);
    if(!$result1)
    {
   		echo mysqli_error($con)."<br>";
    }
    foreach($subject as $sub)
    {
    	$query2="insert into tutsub values('$id','$sub')";
    	$result2=mysqli_query($con,$query2);
    	if(!$result2)
    	{
    		echo mysqli_error($con)."<br>";
    	}
    }
    foreach($subject as $sub)
    {
    	if($mode=="online")
    	{
	    	$query3="select s.sub,r.f_name,r.l_name,r.email,r.mobile,st.board
					from student st 
					inner join registration r on r.id=st.id 
					inner join stdsub s on s.std_id=r.id 
					and s.sub='$sub' and st.board='$board' 
					group by s.sub";
						    	$result3=mysqli_query($con,$query3);
		    if($result3)
		    {
		    	while($row3 = $result3->fetch_assoc())
		    	{
		    		///write logic for class here then show it
		    		echo $row3['sub'].' '.$row3['f_name'].' '.$row3['l_name'].' '.$row3['email'].' '.$row3['mobile']."<br>";
		    	}
		    }
		    else{
		    	echo "here1".mysqli_error($con);
		    }
		}
		else{
			/// code for offline later
		}
    }

                     

?>