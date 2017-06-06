<?php
require_once('stripe_config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Stripe Pay Checkout Demo</title>
</head>
<body>
<h1 class="bt_title" align="center">Stripe Pay Checkout Demo</h1>
<div align="center">
  <form action="success.php" method="POST">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="<?php echo $params['public_test_key']; ?>"
    data-amount="999"
    data-name="BAC"
    data-description="Annual subscription"
    data-image="http://britishairsoftclub.com/wp-content/uploads/2014/05/white-morale1.jpg"
    data-locale="auto"
    data-zip-code="true">
  </script>
</form>
</div>
</body>
</html>