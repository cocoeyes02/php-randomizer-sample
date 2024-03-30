<?php
// 適当な10文字のexample.comメールアドレスを作成する
$randomizer = new \Random\Randomizer();
$canUseChars = 'abcdefghijklmnopqrstuvwxyz0123456789';
for ($i = 0; $i < 15; $i++) {
    echo $i + 1 . '個目のメールアドレス: ' . $randomizer->getBytesFromString($canUseChars, 10) . '@example.com' . "<br>";
}