<?php
//connection to the database
$con = mysql_connect("localhost","root","") or die("<h2 align='center'>can not connect to local host server</h2><br /><h3 align='center'>contact the Admin for some help on kenny2brian@gmail.com</h3>");
mysql_select_db("Accounting_db",$con);

//insert the fields
$a = $_POST['id'];
$b = $_POST['fname'];
$c = $_POST['sname'];
$d = $_POST['gender'];
$e = $_POST['dob'];
$f = $_POST['pob'];
$g = $_POST['address'];
$h = $_POST['degree'];
$i = $_POST['salary'];
$j = $_POST['married'];
$k = $_POST['phone'];
$l = $_POST['email'];
$m = $_POST['note'];

//email address validation
if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $j))
{
echo "<center><h1>Invalid email</h1></center>";
}
else
{
echo "<center><h1>Valid Email</h1></center>";
}


//insert the fields into the table in the database
$sql = "INSERT into lecture_tb(id,fname,lname,gender,dob,pob,address,degree,salary,married,phone,email,note) values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m')";
$result = mysql_query($sql);
if($result)
{
	echo "Successfully added to the database";
}
else
{
	echo "Oooooops!!!!!!!!!!!!!!!! an ERROR OCCURED";
}
 
?>