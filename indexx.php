<?php

include("config.php");
session_start();
if(isset($_POST['amount'])){

    $amount=$_POST['amount'];
    $_SESSION['a']=$amount;
    $_SESSION['name']="rahul";
    $_SESSION['email']="rahulkumar661979@gmail.com";
?>

<form action="submit.php" method="post">

<center><script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="<?php echo $pk ?>" data-amount="<?php echo $amount*100 ?>" data-name="rahul" data-description="Test" data-image="https://ecommercenews.eu/wp-content/uploads/2013/06/most_common_payment_methods_in_europe.png" data-currency="inr" data-email="rahul88628@gmail.com"></center>
 
</script>

</form>


<?php

}else{
    die("Not found rs");
}

?>