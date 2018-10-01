<?
define("name", "Chetan");
define("PI", 3.14);
print(name);
$area = PI * 5*5;
print(constant("name"));
print("<br> area of circle is $area");
/* never define constant like 2Number, we can define it Number2. Constant can't be defined without using define.
constant can be used in any scope.*/
?>