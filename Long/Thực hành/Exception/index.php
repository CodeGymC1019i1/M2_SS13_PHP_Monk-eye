<?php
$result = divide(100, 5);
echo $result;
$result = divide(100, 0);
echo $result;

try {
    $result = divide(100, 5);
    echo $result;
    $result = divide(100, 0);
    echo $result;
} catch (DivideByZeroException $e) {
    echo 'Có lỗi xảy ra: '. $e;
}