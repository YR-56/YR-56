<?php





//マージソート

function sort_0($n){

//配列の数が1個しかないので、その数だけを返す
if(count($n) <= 1) return ($n);

//配列の数が二つあればそれらの大小を返す。２つの場合がある。
if($n[0] < $n[1]) return array($n[0], $n[1]);
  
if($n[1] < $n[1]) return array($n[0], $n[1]);


//配列の添え字の最初、最後を変数に格納

$low = 0;
$high = count($n) - 1;

//配列を半分にする。前半と後半に分けるため。
$m = array_sum($n) / count($n);

list($la, $ca, $ra) = [[], [], []]; //空の配列

foreach($n as $v) {
    if($v < $m)
    $la[] = $v;
    else if($v == $m)
    $ca[] = $v;

    else
    $ra[] = $v;
}

return array_merge(sort_0($la), $ca, sort_0($ra));



}

$num = [1,2,4,5,6];

var_dump($num);

$val = array(4,3,2,6,5,9);

var_dump(sort_0($val));

?>
