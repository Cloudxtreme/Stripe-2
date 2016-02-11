<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_W8LXJYr4iBerrR5o9nAVgCTx",
  "publishable_key" => "pk_test_w95g73A1h84YhKXM3qVNb3BI"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>