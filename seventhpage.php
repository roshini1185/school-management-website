<html>
<head><title>Dance Club and Badminton Registration</title>
<style>
div{
font-size:29px;
color: green;
}
</style>
</head>
<body>
<fieldset >
<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>" >
<table align="center">
<legend ><font color="#00cc99" size="7px" ><b>Dance Club & Badminton Club Registration</b></font><hr/></legend>
<tr></tr><tr><td  style="font-size:29px;"><b>Name</b></td>
<td><input type="text" name="dname"  style="padding:10px 10px; font-size:15px" placeholder="Enter your Name" required/></td>
</tr>
<tr><td></td><td></td></tr>

<tr></tr><tr><td  style="font-size:29px;"><b>Roll Number</b></td>
<td><input type="text" name="droll"  style="padding:10px 10px; font-size:15px" placeholder="Enter your Roll Number" required/></td>
</tr>
<tr><td></td><td></td></tr>

<tr><td></td><td></td></tr>
<tr><td></td><td>
<input type="submit" value="Register" style="background-color:#ccccff; font-size:30px; padding:5px 30px " name="submit"/>
</td>
</tr>
</table>
</form>
</fieldset>
<pre></pre>
<?php
if(isset($_POST['submit']))
{$dname=$_POST['dname'];
$droll=$_POST['droll'];

   $obj=new mysqli("localhost","root","","school_management");
   //$obj1=new mysqli("localhost","root","","school_management");
    if($obj->connect_errno&&$obj1->connect_errno)
      echo "Connection Error";	
    else{
		
	        $sql="insert into dance_club values('$dname','$droll');";
	         $result=$obj->query($sql);
	            if($result==TRUE)
				{
					$sql="insert into badminton_club values('$dname','$droll');";
	               $result=$obj->query($sql);
				    if($result==TRUE)
		           echo "<div><b>You Have registered successfully</b></div>";
                }else
	               echo "ERROR!!";
        }
}

?>

</body>
</html>