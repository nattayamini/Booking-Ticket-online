<?php
if(isset($_POST['submit'])){
$email=$_POST['email'];
$password=$_POST['pswd'];
$conn=mysqli_connect("localhost","root","","bookingtickets");
if(!$conn){
	die('could not connect:'.mysqli_connect_error());
}

$sql="SELECT * FROM `signup`  where Email='$email' and Password='$password'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);
if($count==1)
{
	?>
	<script>
	alert("Login successfully");
	window.location.href="index.html";
		</script>
		<?php
}
else
{
 echo '<h1> Login Failed. Invalid Username or Password.</h1>';
}
}
?>