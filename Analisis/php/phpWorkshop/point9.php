<?php 
//addcslashes()
echo 'addcslashes(): devuelve una cadena con una barra invertida \ delante de los caracteres selecionados.<br>';
$str = addcslashes("Hola mundo!","m");
echo($str);
echo '<br>';
//addslashes()
print '<br>addslashes(): agrega una barra invertida delante de las (").<br>'; 
$str1 = addslashes('Hola "mundo" que pasa');
echo($str1);
echo '<br>';
//bin2hex()
echo '<br>bin2hex(): convierte el valor de una cadena a hexadecima.<br>';
$bin2hex = bin2hex("Hola mundo");
echo($bin2hex); 
echo '<br>';
//chop()
echo '<br>chop(): elimina los caracteres seleccionados de el extremo derecjo<br>';
$cho = "Hola mundo!";
echo $cho . "<br>";
echo chop($cho,"mundo!");
echo '<br>';
echo '<br>';
//
echo chr(52) . "<br>"; // Decimal value
echo chr(053) . "<br>"; // Octal value
echo chr(0x52) . "<br>"; // Hex value


