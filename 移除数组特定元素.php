<?php
/*$arr = [1, 2, 3];

unset($arr[1]);


foreach ($arr as $value) {
    echo "$value ";
}

echo $arr[0];
echo $arr[1];
echo $arr[2];*/

/*$arr = [1, 2, 3];
array_splice($arr, 1, 1, 5);

foreach ($arr as $value) {
    echo "$value ";
}*/


$arr = [1, 2, 3, 4, 5];
unset($arr[2]);
// echo count($arr); // 4

for ($i = 2; $i < count($arr) - 1; ++$i) {
    $arr[$i] = $arr[$i + 1];
    echo "$arr[$i] ";
}
echo count($arr);
echo "arr[3] = $arr[3]";
echo "arr[4] = $arr[4]";
unset($arr[count($arr) - 1]);

foreach ($arr as $value) {
    echo "$value "; // 1 2 5 4 // 顺序乱了，很奇怪
}

for ($i = 0; $i < count($arr); ++$i) {
    echo "$arr[$i] "; // 1 2 4 5 // 正确的顺序
}



