<html>
<head><title>Music Club and Cricket Registration</title>
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
<legend ><font color="#00cc99" size="7px" ><b>Music Club & Cricket Club Registration</b></font><hr/></legend>
<tr></tr><tr><td  style="font-size:29px;"><b>Name</b></td>
<td><input type="text" name="cname"  style="padding:10px 10px; font-size:15px" placeholder="Enter your Name" required/></td>
</tr>
<tr><td></td><td></td></tr>

<tr></tr><tr><td  style="font-size:29px;"><b>Roll Number</b></td>
<td><input type="text" name="croll"  style="padding:10px 10px; font-size:15px" placeholder="Enter your Roll Number" required/></td>
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
{$cname=$_POST['cname'];
$croll=$_POST['croll'];

   $obj=new mysqli("localhost","root","","school_management");
   //$obj1=new mysqli("localhost","root","","school_management");
    if($obj->connect_errno)
      echo "Connection Error";	
    else{
		
	        $sql="insert into music_club values('$cname','$croll');";
	         $result=$obj->query($sql);
	            if($result==TRUE)
				{
					$sql="insert into cricket_club values('$cname','$croll');";
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