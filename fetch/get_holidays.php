<?php
// このプログラムはxserverのcronにて毎週月曜日7:00に定期実行されます。
$url = "https://holidays-jp.github.io/api/v1/date.json";
$json = file_get_contents($url);
$json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
$dir = './json/holiday.json';
file_put_contents($dir, $json, LOCK_EX);