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
<?php

function findMax($arr)
{
    $max = $arr[0][0];
    for ($index = 0; $index < count($arr); $index++) {
        for ($jndex = 0; $jndex < count($arr[$index]); $jndex++) {
            if ($max < $arr[$index][$jndex]) {
                $max = $arr[$index][$jndex];
            }
        }
    }
    return $max;
}

$arr = array(array(2, 5, 6, 7, 8),
    array(5, 7, 8, 9, 5),
    array(2, 6, 8, 7, 9),
);
echo "Giá trị lớn nhất là: ". findMax($arr);


?>
</body>
</html>