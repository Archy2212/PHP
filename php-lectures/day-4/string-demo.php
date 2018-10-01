<?php
$firstName = "chetan";
$lastName = "vashistth";
print("Hello, my name is $firstName<br>");
print("Length of my first name is ".strlen($firstName)."<br>");
$fullName = $firstName." ".$lastName;
print("My full name is: ".$fullName."<br>");
print("Position of First Name is: ".strpos($fullName, $firstName)."<br>");
print("Position of last name is :".strpos($fullName, $lastName));

?>