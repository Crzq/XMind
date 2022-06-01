<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="04-两数最大公因数.php" method="get">
    <input type="text" name="a" placeholder="第一个数"/>
    <input type="text" name="b" placeholder="第二个数"/>
    <button type="submit">计算</button>
</form>

<?php
if (isset($_GET['a']) && isset($_GET['b'])) {
    $a = $_GET['a'];
    $b = $_GET['b'];

    $arr1 = [];
    $arr2 = [];

    for ($i = 2; $i <= $a; ++$i) {
        if ($a % $i == 0) {
            $arr1[count($arr1)] = $i;
            $a = $a / $i;
            $i--;
        }
    }

    for ($i = 2; $i <= $b; ++$i) {
        if ($b % $i == 0) {
            $arr2[count($arr2)] = $i;
            $b = $b / $i;
            $i--;
        }
    }

    echo "arr1: ";
    foreach ($arr1 as $value) {
        echo "$value ";
    }
    echo "<br/>";
    echo "arr2: ";
    foreach ($arr2 as $value) {
        echo "$value ";
    }
    echo "<br/>";


    $num = 1;

    // if (count < count)
    for ($i = 0; $i < count($arr1); ++$i) {
        for ($j = 0; $j < count($arr2); ++$j) {
            if ($arr2[$j] == $arr1[$i]) {
                $num *= $arr2[$j];
//                echo $num;
//                unset($arr1[$i]);
//                unset($arr2[$j]);
                // 将移除元素之后的元素向前挪
               /* for ($m = $i; $m < count($arr1) - 1; ++$m) {
                    $arr1[$m] = $arr1[$m + 1];
//                    echo "$arr1[$m] ";
                }
                unset($arr1[count($arr1) - 1]);*/
                for ($n = $j; $n < count($arr2) - 1; ++$n) {
                    $arr2[$n] = $arr2[$n + 1];
//                    echo "$arr2[$n] ";
                }
                unset($arr2[count($arr2) - 1]);
                break;
            }
        }
    }

    echo $num;
}
?>

</body>
</html>
