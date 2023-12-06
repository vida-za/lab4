<?php

// Задание 15: Найти первые N простых чисел (N<10, случайное число).
function checkPrime($num)
{
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
$N = rand(1, 9);
$primeCount = 0;
$num = 2;
echo "15: ";
while ($primeCount < $N) {
    if (checkPrime($num)) {
        echo "$num ";
        $primeCount++;
    }
    $num++;
}
