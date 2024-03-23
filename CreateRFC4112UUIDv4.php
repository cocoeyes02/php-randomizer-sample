<?php
// RFC 4122に基づくUUIDv4の作成
function createUUIDv4Variant1() {
    $randomizer = new \Random\Randomizer();
    $randomHex = $randomizer->getBytesFromString('0123456789abcdef', 32);
    $randomHex[12] = 4;
    $randomHex[16] = $randomizer->getBytesFromString('89ab', 1);

    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split($randomHex, 4));
}

// 5000万個のUUIDを生成して衝突が起きないか確認
$uuids = [];
$createdUuidCountIfNoConflict = 50000000;
for ($i = 0; $i < $createdUuidCountIfNoConflict; $i++) {
    $uuid = createUUIDv4Variant1();
    $uuids[$uuid] = $uuid;
}

echo 'Conflict Count: ' . ($createdUuidCountIfNoConflict - count($uuids)) . PHP_EOL;