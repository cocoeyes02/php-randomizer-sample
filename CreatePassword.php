<?php
// 英数字記号を対象に12文字のパスワードを15個作成する
$randomizer = new \Random\Randomizer();
$canUseChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789/*-+.,!#$%&()~|_';
for ($i = 0; $i < 15; $i++) {
    echo $i + 1 . '個目のパスワード: ' . $randomizer->getBytesFromString($canUseChars, 12) . PHP_EOL;
}