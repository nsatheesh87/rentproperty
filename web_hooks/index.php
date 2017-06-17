<?php
$access_token = "EAAGoM7ssCLwBAIfKGIGgdyNbaydb1E0w1iuRRq5LrEV76RJXiES99mV8OzqjbBEu1SoM9XCtHaPO4Xy0mw4Odt3pzCDLt5JRBYHRCQf0YIbkcbC8rAVODKqzZBtoxTVym9A3CHU1wRjtbZBVxkbZCXD5WrZAV14GdV2oppjZABgZDZD";
$verify_token = "homar_bot";
$hub_verify_token = null;

if(isset($_REQUEST['hub_challenge'])) {
    $challenge = $_REQUEST['hub_challenge'];
    $hub_verify_token = $_REQUEST['hub_verify_token'];
}


if ($hub_verify_token === $verify_token) {
      echo $challenge;
}
