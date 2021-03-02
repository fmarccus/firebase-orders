<html>
<?php


fizz($fizz);



function fizz($fizz)
{

    $fizz = "ugly";

    for ($i = 1; $i < 100; $i++) {
        if ($i % 3 == 0) {
            echo $fizz;
        }
    }
    return $fizz + "<br>";
}

function buzz($buzz)
{
    for ($i = 1; $i < 100; $i++) {
        if ($i % 5 == 0) {
            echo $buzz;
        }
    }
    return $buzz + "";
}





?>

</html>