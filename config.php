<?php

require('stripe-php-master/init.php');

$pk="pk_test_51JdCmrSBbjKVmF2wsFuZjcxCg3fIDt1FMjdSamuzcD3it3Nf2e0FxhNBJjBkIfAx5Kmf5blJr2u2K5O8X2ewsQBt00tkPyIONE";

$sk="sk_test_51JdCmrSBbjKVmF2w6QrayIRI6H6dor3jGlDhAuDLnjizrNFZiMiM9hpa9DaRDS7vByCjwDX3mnS8QNP55fOfsQYJ009UT8XdwO";

\Stripe\Stripe::setApiKey($sk);


?>