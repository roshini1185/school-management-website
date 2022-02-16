<html>
<head><title>Club Eligibility</title>
<style>
label{
	color:red;
}
div{
	font-size:29px;
	
}
</style></head>
<body  style="background-color:#b3ffff">
<Center><b><font size="15px"  >CLUB ELIGIBILITY</font></b></Center>
<hr/>
<pre></pre>
<pre>
</pre>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
<center><table >
<tr>
<td style="font-size:29px;">Name:</td>
<td></td>
<td><input type="text" placeholder="Name" style="padding:10px 10px; font-size:15px" name="sname" required/></td>
</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<td style="font-size:29px;">Class:</td>
<td></td>
<td><input type="number" placeholder ="Class" style="padding:10px 10px; font-size:15px" name="std" required/></td>
</tr>

<tr>
<td style="font-size:29px;">Percentage:<br/>(percentage should be <br/>rounded off to nearest Integer)</td>
<td></td>
<td><input type="number" placeholder ="Enter your percentage" style="padding:10px 10px; font-size:15px" name="pct" required/></td>
</tr>

<tr><td></td><td></td><td>
<input type="submit" value="Submit Form" style="background-color:#cc99ff; font-size:30px; padding:5px 30px " name="submit"/>
</td>
</tr>
</center>
</table>
</form>

<?php
if(isset($_POST['submit']))
{
	$s_name=$_POST['sname'];
	$pct=$_POST['pct'];
	$class=$_POST['std'];
	if($class>10||$class<9)
		echo "<div><label><b>Please enter valid class<br/>(You have to be studying in 9th or 10th to register for the clubs)</b></label></div>";
	else{
	if($pct>=95 && $pct<=100)
	{
		$obj=new mysqli("localhost","root","","school_management");
		if($obj->connect_errno)
		{
			echo "<b>Connection Error!!";
			
		}
		else{
			$sql="insert into merit_list values('$s_name',$class,$pct);";
			$result=$obj->query($sql);
			if($result==TRUE)
			{
				header("LOCATION:fourthpage.php");
			}
		}
	}
	

	else{
		echo "<div><b>Sorry! You dont satisfy the eligibility Criteria</b><br/>";
		echo "<b>(percentage>95) to register for clubs.<br/>However Students who aren't registered</b><br/>";
		echo "<b>in the clubs can still take part in all the activities conducted in the clubs.</b></div></br>";
	}
	}
	
	
}








?>
</body>
</html>