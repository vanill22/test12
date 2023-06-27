<?php

//1. Каким будет результат выполнения следующего куска кода:

$a = "0";
if (isset($a)) {
    echo 0;
} else {
    echo 1;
}
if (empty($a)) {
    echo 0;
} else {
    echo 1;
}

if ($a) {
    echo 0;
} else {
    echo 1;
}

//result 001

//2. Задан ассоциативный массив на 10 элементов. Напишите код для получения ключа первого элемента 3-мя разными способами.

$array = [
    'key1' => 'value1',
    'key2' => 'value2',
    'key3' => 'value3',
    'key4' => 'value4',
    'key5' => 'value5',
    'key6' => 'value6',
    'key7' => 'value7',
    'key8' => 'value8',
    'key9' => 'value9',
    'key10' => 'value10'
];

// 1

$keys = array_keys($array);
$firstKey = $keys[0];

echo $firstKey;

// 2

$firstKey = key($array);

echo $firstKey;

// 3

reset($array);
$firstKey = key($array);

echo $firstKey;

// 3. Задан массив с числовыми ключами. Напишите код для получения значения последнего элемента массива 3-мя разными способами.

$array = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

// 1

$lastValue = end($array);

// 2

$lastIndex = count($array) - 1;
$lastValue = $array[$lastIndex];

// 3

$lastValue = array_pop($array);

// 4. Напишите функцию вычисления факториала числа.

function factorial(int $n): int {
    $factorial = 1;

    for ($i = 2; $i <= $n; $i++) {
        $factorial *= $i;
    }

    return $factorial;
}


