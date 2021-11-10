<?php
require "form.php";
if (isset($_POST["go"])) {
    echo "Name : " . $_POST['firstName'] . "<br>" . "Last Name : " . $_POST['lastName'] . "<br>" .
        "Emaile : " . $_POST['email'] . "<br>" . "City : " . $_POST['city'] . "<br>" .
        "Delivery : " . $_POST['delivery'] . "<br>" . "Zip : " . $_POST['zip'] . "<br>";
}