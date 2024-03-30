<?php
// 10パターンのテスト用名前を作成する
$randomizer = new \Random\Randomizer();
$testLastNames = $randomizer->shuffleArray(['佐藤', '鈴木', '高橋', '田中', '渡辺', '伊藤', '山本', '中村', '小林', '斎藤']);
$testFirstNames = $randomizer->shuffleArray(['太郎', '花子', '次郎', '三郎', '美和', '健太', '恵子', '雅彦', '裕子', '和美']);
for ($i = 0; $i < 10; $i++) {
    echo $i + 1 . '個目の名前: '
        . 'テスト' . $testLastNames[$i]
        . ' '
        . $testFirstNames[$i] . 'テスト'
        . "<br>";
}

// 適当な10文字のexample.comメールアドレスを作成する
$randomizer = new \Random\Randomizer();
$canUseChars = 'abcdefghijklmnopqrstuvwxyz0123456789';
for ($i = 0; $i < 15; $i++) {
    echo $i + 1 . '個目のメールアドレス: ' . $randomizer->getBytesFromString($canUseChars, 10) . '@example.com' . "<br>";
}