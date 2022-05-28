<?php

//処理実行
main();

function main() {

  //昇順にソートされた配列
  $sortedArray = array(1, 2, 3, 5, 12, 7890, 12345);
  
  //探索対象の番号
  $targetNumber = 7890;
  
  //探索実行
  $targetIndex = searchIndex($sortedArray, $targetNumber);
  
  //結果出力
  print($targetIndex);


}

function searchIndex($sortedArray, $targetNumber) {
  //ここから記述
  
  //配列の添え字の最初、最後を変数に格納

    $low = 0;
    $high = count($sortedArray) - 1;
   
//配列に含まれている数の分ループを回す。
  
while ($low < $high){

    $pivot = floor(($low + $high) / 2);
   
//中間の値と目標値が等しい場合
    if($sortedArray[$pivot] == $targetNumber){
        return $pivot;
        
    }
//目標の値が配列の中間値より低い場合
    if($targetNumber < $sortedArray[$pivot]){
        $high = $pivot - 1;
    }

//目標の値が配列の中間値より高い場合 
    elseif ($sortedArray[$pivot] < $targetNumber) {
       $low = $pivot + 1;

    }

}
  
  return -1;
  
  
  
  //ここまでを記述


}




?>
