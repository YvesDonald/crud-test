<?php
echo "Hello";

echo "Excellent";

$myName = "All Out";

function surcharge($name=null){
    if (!is_null($name)) {
        echo "Bonjour"+$name;
    }else{
        echo "Bonjour";
    }
}

surcharge($myName);
?>
