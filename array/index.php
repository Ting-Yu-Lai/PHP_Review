<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array pratice</title>
    <style>
        .smalltitle {
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div>
        <table>
            <tr class="smalltitle">
                <td>利用程式來產生陣列</td>
            </tr>
            <tr>
                <td>
                    <ul>
                        <li>以迴圈的方式產生一個九九乘法表</li>
                        <li>將九九乘法表的每個項目以字串型式存入陣列中</li>
                        <li>再以迴圈方式將陣列內容印出</li>
                    </ul>
                </td>

            <tr>
                <td>
                    <?php
                    $array = [];
                    for ($i = 1; $i <= 9; $i++) {
                        for ($j = 1; $j <= 9; $j++) {
                            // $key = "$i$j";  
                            // $value = "$i x $j = " . ($i * $j);  // 儲存字串型式
                            $array["$i$j"] = "$i x $j = " . ($i * $j); //可以濃縮成這行
                        }
                    }
                    foreach ($array as $key => $value) {
                        echo "$key : $value<br>";
                    }
                    // echo $array[89];
                    // foreach($array as $value) {
                    //     echo $value . "<br>";
                    // }
                    // echo "<pre>";
                    // print_r($array);
                    // echo "</pre>";
                    ?>
                </td>
            </tr>
            </tr>
        </table>
        <table>
            <tr class="smalltitle">
                <td>威力彩電腦選號沒有重覆號碼(利用while迴圈)</td>
            </tr>
            <tr>
                <td>
                    <ul>
                        <li>使用亂數函式rand($a,$b)來產生號碼，產生1~39，6位號碼</li>
                        <li>將產生的號碼順序存入陣列中</li>
                        <li>每次存入陣列中時會先檢查陣列中的資料有沒有重覆</li>
                        <li>完成選號後將陣列內容印出</li>
                    </ul>
                </td>
            <tr>
                <td>
                    <?php
                    $lotto = [];
                    $num = 0;
                    while (count($lotto) < 6) {
                        $num = rand(1,39);
                        if(!in_array($num, $lotto)) {
                            $lotto[] = $num;
                        }
                    }
                    foreach ($lotto as $value) {
                        echo $value . ",";
                    }
                    
                    ?>
                </td>
            </tr>
            </tr>
        </table>
    </div>




</body>

</html>