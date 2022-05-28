<?php
// 処理実行
main();

function main() {
    // ランダムに並べられた重複のない整数の配列
    $array = array(5, 4, 6, 2, 1, 9, 8, 3, 7, 10);
    // ソート実行
    $sortedArray = sortArray($array);
    // 結果出力
    foreach ($sortedArray as $i) {
        print_r($i."\n");
    }
}

function sortArray(array $array): array
{
    // 要素が一つの場合はソートの必要がないので、そのまま返却
    if (count($array) == 1) {
        return $array;
    }

    // 配列の先頭を基準値とする
    $pivot = $array[0];

    // ここから記述
//配列の先頭と最後を変数に格納

$start = $array[0];
$end = count($array) - 1;

//$startの値がピボットより小さいときは、右に進む
while(true) {

while($array[$start] < $pivot) {
    $start++;
}

//$endの値がピボットより大きければ、ポインタを左へ進める
while ($pivot < $array[$end]) {
    $end--;
}

//$startと$endが遭遇すればループ終了

if($start <= $end) {
    break;
}

//$startと$rightの値を入れ替える
[$array[$start], $array[$end]] = [$arr[$right], $arr[$left]];

$start++;
$end--;

}

//左側に２つ以上あるとき、再帰
if($start < $end-1) {
    sortArray($start, $end-1, $array);
}

//右側に２つ以上あるとき、再帰

if($end+1 < $end) {
    sortArray($start, $end, $array);
}



    // ここまで記述

}
?>
© 2022 GitHub, Inc.
Terms
