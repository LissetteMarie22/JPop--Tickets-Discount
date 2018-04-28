<?php

    $customer_age = $_POST['customer_age'];
    $is_veteran = $_POST['is_veteran'];

     if($customer_age >= 65  or $is_veteran == "yes"){
     $discount = 5;
    echo "Your discount is " . $discount . "%";
	 }
     elseif($customer_age >= 65 and $is_veteran == "yes"){
    $discount = 10;
    echo "Your discount is " . $discount . "%";
	 }
     elseif(date("l") == "Tuesday" and (customer_age >= 65 and is_veteran == 'yes')){
    $discount = 15;
    echo "Your discount is " . $discount . "%";
	 }
     else{
    echo "You did not receive a discount, sorry.";
    }    

?>
