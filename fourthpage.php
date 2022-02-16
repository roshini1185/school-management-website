<html>
<head><title>Club Selection</title>
<style>
label{
font-size:30px;
}
#cc{
color:#660099;
}

#sc{
	color:#ff884d;
}
</style>
</head>
<body>
<center><b><label>Congratulations on being selected for the HOGWARTS School</label></b></center>
<hr/>
<pre></pre><pre></pre>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>" >
<label><b>Please select the club you would like to join:</b><br/>
<label id="cc"><b>Cultural Club:</b></label><br/>
<input type="radio" name="club" value="Music Club" checked> 
Music Club<br/>
<input type="radio" name="club" value="Dance Club" > 
Dance Club<br/>
<label id="sc"><b>Sports Club:</b></label><br/>
<input type="radio" name="sclub" value="Badminton" checked> 
Badminton<br/>
<input type="radio" name="sclub" value="Cricket" > 
Cricket</label><br/>
<input type="submit" value="Submit" style="background-color:#ccccff; font-size:30px; padding:5px 30px " name="submit"/><br/>
</form>

<?php
if(isset($_POST['submit'])){
$cvalue=$_POST['club'];
$svalue=$_POST['sclub'];
if($cvalue=="Music Club"&& $svalue=="Badminton")
{
	
	header("LOCATION:fifthpage.php");
}
else if($cvalue=="Music Club"&& $svalue=="Cricket")
{
	header("LOCATION:sixthpage.php");
}
if($cvalue=="Dance Club"&& $svalue=="Badminton")
{
	header("LOCATION:seventhpage.php");
}
else if($cvalue=="Dance Club"&& $svalue=="Cricket"){
	header("LOCATION:eighthpage.php");
}
else{
	echo "Error!!!";
}
}
?>
</body>
</html>