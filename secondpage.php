<html>
<head><title>Application Status</title>
<style>
div{
font-size:29px;
padding:30px 30px ;
border-style:ridge;
border-color:#ccccff;
border-top-right-radius:10px;
border-top-left-radius:10px;
border-bottom-right-radius:10px;
border-bottom-left-radius:10px;	
}
label{
font-size:29px;
color: #00e600;	
}
</style>
</head>
<body>


<?php
$fname=$_REQUEST['fname'];
$std=$_REQUEST['std'];
$pname=$_REQUEST['pname'];
$phn=$_REQUEST['phn'];
$email=$_REQUEST['email'];
//echo $fname;
//echo $std;
$num=(string)$phn;
$count=strlen($num);
// echo $count;
if($count==10 && $std<=12)
{
$obj=new mysqli("localhost","root","","school_management");
if($obj->connect_errno)
{
echo "Connection Error";	
}
else{
	$sql="insert into application_forms values('$fname',$std,'$pname',$phn,'$email');";
	$result=$obj->query($sql);
	if($result==TRUE){
		echo "<div>";
		echo "Your details have been recorded.</br>";
		 echo "Thank You!!!<br/>";
		echo "For filling the Application Form.<br/>";
         echo "The school will get back to you as soon as possible<br/>";
		 echo "<b>Application Status : </b><label>Confirmed</label>";
		  echo "</div>";
}
else{
	echo "ERROR!!";
}
}
}
else{
	echo "<div>";
	echo  "<center><b>Please enter a valid mobile number and class (u would like to apply for)</b></center>";
	echo  "<center><b>The phone number is a 10-digit long number.</b></center></br>";
	echo  "<center><b>Choose the number from 1-12(Class 1/Class2.. etc) <br/>while filling the Class field</b></center>";
	echo   "</div>";
}
?>
</body>
</html>