<?php declare(strict_types=1);
/**
 * データ型とStrictモード
 */
function add1 (int $val):int {
    return $val + 1;
}
$result = add1(1);
echo var_dump($result);