<?php
include("db.php");
if(isset($_POST['credit details'])){

$creditcardnumber=$_POST['credit card number'];
$nameofthecard=$_POST['name of the card'];
$month =$_POST['month'];
$year =$_POST['year'];
$cvvcode=$_POST['cvv code'];

$query="INSERT INTO `credit details`(`credit card number`, `name of the card`, `month`, `year`, `cvv code`) 
VALUES ('$creditcardnumber','$nameofthecard','$month','$year','$cvvcode')";

echo $result=mysqli_query($conn,$query);

if($result)
{
?>
<script>
alert("payment successfull");
window.location.href="pr13.html";
    </script>
    <?php
}
else
{
 echo "false";

}
}

?>