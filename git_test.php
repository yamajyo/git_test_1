<?php
$numArray = [
    [30, 65, 72, 47, 63, 96, 72],
    [35, 67, 57, 23, 14, 56, 61],
    [46, 16, 27, 58, 84, 34, 20],
    [84, 27, 40, 18, 92, 46, 21],
    [14, 54, 74, 2, 85, 35, 66]
];

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>合計値の計算</h1>
        <form action="" method="post">
            <p>
                配列の選択:
                <select name="" id="">
                    <option value="0">配列1</option>
                    <option value="1">配列2</option>
                    <option value="2">配列3</option>
                    <option value="3">配列4</option>
                    <option value="4">配列5</option>
                </select>
            </p>
            <p>
                掛ける数値:
                <input type="text" value="num" maxlength="2">
            </p>
            <p><input type="submit" value="送信"></p>
        </form>
</body>
</html>