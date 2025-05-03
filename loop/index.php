<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>重覆結構</title>

</head>
<style>
    table {
        border: 1px solid black;
        border-collapse: collapse;
        width: 100%;
    }

    table th {
        text-align: left;
        font-size: 30px;
    }

    .smalltitle {
        font-size: 20px;
        font-weight: bold;
    }

    .table99 {
        border: 3px solid black; 
        border-collapse: separate; 
        border-spacing: 0; 
        width: 70%;
        margin: auto;
}

    .table99 td, .table99 th {
        border: 1px solid black; 
        padding: 8px; 
}
</style>

<body>
    <h1>PHP Review</h1>
    <div>
        <table>
            <th>
                流程控制練習 - 重覆結構
            </th>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="smalltitle">使用for迴圈來產生以下的數列</p>
                    <ul>
                        <li>1,3,5,7,9……n</li>
                        <li>10,20,30,40,50,60……n</li>
                        <li>3,5,7,11,13,17……97</li>
                        <!-- <li></li> -->
                    </ul>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                        $n = 30;
                        for ($i = 1; $i <= $n; $i+=2) {
                            if ($i + 2 > $n) { 
                                echo $i;
                            } else {
                                echo $i . ",";
                            }
                        }
                        echo "<br>";
                        $n = 60;
                        for ($i = 10; $i <= $n; $i+=10) {
                            if ($i + 10 > $n) {
                                echo $i;
                            } else {
                                echo $i . ",";
                            }
                        }
                        echo "<br>";

                    $n = 100;
                    for ($i = 3; $i <= $n; $i++) {
                        $isprime = true;
                        for ($j = 2; $j < $i; $j++) {
                            if ($i % $j == 0) {
                                $isprime = false;
                                break;
                            }
                        }
                        if ($isprime) {
                            echo $i . ",";
                        }
                    }
                    ?>
                </td>
            <tr>
                <td>
                    <p class=" smalltitle">九九乘法表</p>
                    <ul>
                        <li>以表格排列的九九乘法表</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>
                <?php
                echo "<table class='table99'>";
                    for ($i = 1; $i <=9 ; $i++) {
                        echo "<tr>";
                        for ($j = 1; $j <= 9; $j++) {
                            echo "<td>";
                            echo $j . " * " . $i . " = " . ($i * $j);
                            echo "</td>";
                        }
                        echo "</tr>";    
                    }
                echo "</table>";
                ?>
                </td>
            </tr>
            
            
        </table>
    </div>
</body>

</html>