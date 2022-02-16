<html>
<head><title>Merit List</title>
<style>
div{
font-size:30px;
}
#cc{
color:#660099;
}

#sc{
	color:#ff884d;
}
table{
font-size:25px;
}
table{
border-collapse:collapse;
width:100%;
}
th,td{
border-bottom:1px solid #ddd;

padding:15px;
}
td{
text-align:center;}
tr:hover{
background-color:#d1e0e0;
}
label{
background-color:#d9b3ff;
}
</style>
</head>
<body>
<center><b><div>Merit List of Hogwarts school</div></b></center>
<hr/>
<pre></pre><pre></pre>
<?php
/* $s_name=$_POST['sname'];
$std=$_POST['std'];
$pctg=$_POST['pct'];
*/
$obj=new mysqli("localhost","root","","school_management");
if($obj->connect_errno)
	echo "Connection error!";
else
{  $sql ="delete from merit_list where class=9;";
    $result=$obj->query($sql);
	
	$sql="select name,percentage from merit_list;";
   $result=$obj->query($sql);
    
	 echo "<center><table>";
        echo "<label><tr><th>Name</th>";	
        echo  "<th>Percentage</th></tr></label>";
	 while( $row=$result->fetch_assoc())
	 {
        echo "<tr><td>".$row['name']."</td>";
		echo "<td>".$row['percentage']."</td></tr>";
	 }
	 echo "</table></center>";
	 
}
?>
</body>
</html>