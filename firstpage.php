<html>
<head><title>HomePage</title>
<style>
marquee{
	font-size:19px;
	color: #00cc99;
	padding:2px 2px;
}
a{
	color: #008060;
}
</style></head>
<body  style="background-color:#ffff99">
<Center><b><font size="15px"  >Hogwarts School</font></b></Center>
<Center><b><font size="5px"  >Admission Form</font></b></Center>
<hr/>
<pre></pre>
<pre>
<marquee direction="right">To see the Merit List of Hogwarts school of the year 2020 <a style="text-decoration:none;" href="ninthpage.php">Click here</a></marquee><hr/>
<form method="post" action="thirdpage.php">
<div style="text-align:right;">
<label style="font-size:29px;">Already enrolled?</label><input type="submit" value="Login" style="background-color:#80ffe5; font-size:30px; padding:5px 30px; " name="login" required/>
</div></form>
</pre>
<form method="post" action="secondpage.php">
<Center><table >
<tr>
<td style="font-size:29px;">Your Name:</td>
<td></td>
<td><input type="text" placeholder="First Name" style="padding:10px 10px; font-size:15px" name="fname" required/></td>
</tr>

<tr>
<td style="font-size:29px;">Choose Class:</td>
<td></td>
<td><input type="number" placeholder ="Class you want to apply for" style="padding:10px 10px; font-size:15px" name="std" required/></td>
</tr>

<tr>
<td style="font-size:29px;">Parent/Guardian Name:</td>
<td></td>
<td><input type="text" placeholder ="Name" style="padding:10px 10px; font-size:15px" name="pname" required/></td>
</tr>

<tr>
<td style="font-size:29px;">Phone Number:</td>
<td></td>
<td><input type="number" placeholder ="Phone Number" style="padding:10px 10px; font-size:15px" name="phn" required/></td>
</tr>

<tr>
<td style="font-size:29px;">Email Address:</td>
<td></td>
<td><input type="email" placeholder ="Email" style="padding:10px 10px; font-size:15px" name="email" required/></td>
</tr>

<tr><td></td><td></td><td>
<input type="submit" value="Submit Form" style="background-color:#cc99ff; font-size:30px; padding:5px 30px " name="submit"/>
</td>
</tr>
</table>
</center>
</form>

<?php
?>
</body>

</html>