<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="06-居中倒三角.php" method="get">
    <input type="text" name="line" placeholder="输入要打印的行数"/>
    <button type="submit">确定</button>
</form>

<?php
// 行数 - 星数
if (isset($_GET['line'])) {
    $line = $_GET['line'];
    $stars = "";

    for ($i = 0; $i < $line; ++$i) {
        for ($j = 0; $j < $i; ++$j) {
            $stars .= "&nbsp;"; // " ", "\n", "\r"都不管用
        }
        for ($j = 0; $j < $line - $i; ++$j) {
            $stars .= "* ";
        }
        $stars .= "<br/>";
    }
    echo $stars;
}
?>

</body>
</html>

