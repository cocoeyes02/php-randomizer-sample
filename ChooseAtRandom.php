<?php
$randomizer  = new \Random\Randomizer();

// 6面サイコロを2つ
echo '6面サイコロを2つ振った結果: ' . $randomizer->getInt(1, 6) . ', ' . $randomizer->getInt(1, 6) . PHP_EOL;

// くじびき
$name = match ($randomizer->getInt(1, 4)) {
    1 => '名前1',
    2 => '名前2',
    3 => '名前3',
    4 => '名前4',
};
echo '本日ファシリをする方はこの方！！：' . $name . PHP_EOL;

// 順番ぎめ
$persons = ['名前1', '名前2', '名前3', '名前4', ];
echo 'LTの発表順はこちら！：' . implode(', ', $randomizer->shuffleArray($persons)) . PHP_EOL;

// 順番ぎめ（ドキドキver）
$persons = ['名前1', '名前2', '名前3', '名前4', ];
$persons = $randomizer->shuffleArray($persons);
echo '次の発表者はこの人だ！：' . array_shift($persons) . PHP_EOL;