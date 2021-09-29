<?php
session_start();
require("config.php");
\Stripe\Stripe::setVerifySslCerts(false);
$sname="localhost";
$uname="root";
$pass="";
$conn=mysqli_connect($sname,$uname,$pass,'table');
$pname=$_SESSION['pname'];

$am=$_SESSION['a'];

if(isset($_POST['stripeToken'])){
    $token=$_POST['stripeToken'];
    $se=$_SESSION['email'];
    $data=\Stripe\Charge::create(array(
        "amount"=>$am*100,
        "currency"=>"inr",
        "description"=>"Test",
        "source"=>$token,
    ));
    $sql="INSERT INTO `success`(`pname`, `email`, `price`, `success`) VALUES ('$pname','$se',$am,'Payment Done')";
    $y=mysqli_query($conn,$sql);


?>
<script>

alert("Payment Successfull");
window.location.href="cart.php";

</script>

<?php
}else{
    die("NO run error");
    
}
?>