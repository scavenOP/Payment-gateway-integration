<?php

 $apiKey = "rzp_test_YCoPvckZRaIZKP";

?>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>



<form action="sucess.php" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="rzp_test_YCoPvckZRaIZKP" 
    data-amount="<?php echo $_POST['amount'] * 100;?>" 
    data-currency="INR"
    
    data-buttontext="Pay with Razorpay"
    data-name="Spark Donation"
    data-description="Donate for the Socity"
    
    data-prefill.name="<?php echo ($_POST['firstname'].=$_POST['lastname']);?>"
    data-prefill.email="<?php echo $_POST['email'];?>"
    
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>
<style>
    .razorpay-payment-button{
        display: none;
    }
</style>
<script>
    $(document).ready(function(){
        $('.razorpay-payment-button').click()
    });
</script>

