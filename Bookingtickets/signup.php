<?php
include("db.php");
if(isset($_POST['signup'])){

$fullname=$_POST['name'];
$phonenumber=$_POST['number'];
$email=$_POST['email'];
$pswd=$_POST['pswd'];

$query="INSERT INTO `signup`(`Full Name`, `Mobile Number`, `Email`, `Password`) 
VALUES ('$fullname','$phonenumber','$email','$pswd')";

echo $result=mysqli_query($conn,$query);

if($result)
{
?>
<script>
alert("Registered successfully");
window.location.href="pr16.html";
    </script>
    <?php
}
else
{
 echo "false";

}
}

?>