<?php

for ($i = 1; $i <= 100; $i++) {

$str = "";

//ここから記述

if($i % 3 === 0) {
$str = "Fizz" ."\n";

} elseif ($i % 5 === 0){

$str = "Buzz" ."\n";
} elseif ($i % 15 === 0) {
$str = "FizzBuzz" ."\n";

}

else {
print($i ."\n");
}


print($str ."\n");

}

?>
