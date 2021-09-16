<?php
	include 'dbcon.php';
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
			    	while($row3 = $result3->fetch_assoc())
			    	{
			    		echo $row3['sub'].' '.$row3['f_name'].' '.$row3['l_name'].' '.$row3['email'].' '.$row3['mobile']."<br>";
			    	}
			    }
			    else{
			    	echo "here1".mysqli_error($con);
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
			    	while($row4 = $result4->fetch_assoc())
			    	{
			    		///write logic for class here then show it
			    		echo $row4['sub'].' '.$row4['f_name'].' '.$row4['l_name'].' '.$row4['email'].' '.$row4['mobile']."<br>";
			    	}
			    }
			    else{
			    	echo mysqli_error($con);
			    }
			}
		}
   

   
?>