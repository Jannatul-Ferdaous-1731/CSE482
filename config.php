<?php
require ('stripe-php-master/init.php');
$publishedKey = "pk_test_51KBAkgERUyfAL5kzQrScbTA8NRK8n59ZZrHZWWPbcDI2dgyZdFYu9T6u6xNmlSkm5qxMwIw4E1UeCzWF5wNqSjQM00biB37fUb";
$secretKey = "sk_test_51KBAkgERUyfAL5kzU7aH6PnxhkCe5PVbwTFdWCnzZjl8ZpRwxCpkIggapLO1FroTDwlWczjlJ5Ly6NCmaD8SBaYA00pMm9ROKW";
// authenticate request on the stripe server 
\Stripe\Stripe::setApiKey($secretKey);
?>