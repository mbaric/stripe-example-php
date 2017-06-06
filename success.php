<?php
require_once('vendor/autoload.php');
require_once('stripe_config.php');

if ($testmode == "on") {
    \Stripe\Stripe::setApiKey($params['private_test_key']);
    $pubkey = $params['public_test_key'];
} else {
    \Stripe\Stripe::setApiKey($params['private_live_key']);
    $pubkey = $params['public_live_key'];
}

if(isset($_POST['stripeToken'])) {
    $amount_cents = '999';  // Chargeble amount in cents

    try {
        $charge = \Stripe\Charge::create(array(
                "amount" => $amount_cents,
                "currency" => "GBP",
                "source" => $_POST['stripeToken'],
                "description" => 'Test transaction')
        );

        if ($charge->card->address_zip_check == "fail") {
            throw new Exception("zip_check_invalid");
        } else if ($charge->card->address_line1_check == "fail") {
            throw new Exception("address_check_invalid");
        } else if ($charge->card->cvc_check == "fail") {
            throw new Exception("cvc_check_invalid");
        }
        // Payment has succeeded, no exceptions were thrown or otherwise caught

        $result = "success";

    } catch(Stripe_CardError $e) {

        $error = $e->getMessage();
        $result = "declined";

    } catch (Stripe_InvalidRequestError $e) {
        $result = "declined";
    } catch (Stripe_AuthenticationError $e) {
        $result = "declined";
    } catch (Stripe_ApiConnectionError $e) {
        $result = "declined";
    } catch (Stripe_Error $e) {
        $result = "declined";
    } catch (Exception $e) {

        if ($e->getMessage() == "zip_check_invalid") {
            $result = "declined";
        } else if ($e->getMessage() == "address_check_invalid") {
            $result = "declined";
        } else if ($e->getMessage() == "cvc_check_invalid") {
            $result = "declined";
        } else {
            $result = "declined";
        }
    }

    echo "<BR>Stripe Payment Status : ".$result;

    echo "<BR>Stripe Response : ";

    var_dump($charge); exit;
}
?>