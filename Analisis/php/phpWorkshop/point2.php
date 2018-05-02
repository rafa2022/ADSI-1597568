<?php

$dataString = (string) 'This data is string type.';
$dataInt = (int) 34;
$dataFloat = (float) 34.56;
$dataBoolean = (bool) true;
if ($dataBoolean === true) {
    echo 'This data is integer type '.$dataInt;
    echo '<br>This data is boolean type ('.$dataBoolean.') true';
    echo '<br>This data is string type '.$dataFloat;
    echo '<br>'.$dataString;
}
 else {
    echo 'sorry';    
}
