<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>選擇結構</title>

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
</style>

<body>
    <h1>PHP Review</h1>
    <div>
        <table>
            <th>
                流程控制練習 - 選擇結構
            </th>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="smalltitle">判斷成績及格學生</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;給定一個成績數字，判斷是否及格(60)分</p>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                    $score = 60;
                    echo "成績是：$score<br>";
                    if ($score >= 60) {
                        echo "及格";
                    } else {
                        echo "不及格";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    &nbsp;
                    &nbsp;
                </td>
            </tr>
            <tr>
                <td>
                    <p class="smalltitle">分配成績等級</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;給定一個成績數字，根據成績所在的區間，給定等級</p>
                    <ul>
                        <li>0 ~ 59 => E</li>
                        <li>60 ~ 69 => D</li>
                        <li>70 ~ 79 => C</li>
                        <li>80 ~ 89 => B</li>
                        <li>90 ~ 100 => A</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                    $score = 90;
                    echo "成績是：$score<br>";
                    if ($score < 60) {
                        echo "等級：E";
                    } elseif ($score >= 60 && $score < 70) {
                        echo "等級：D";
                    } elseif ($score >= 70 && $score < 80) {
                        echo "等級：C";
                    } elseif ($score >= 80 && $score < 90) {
                        echo "等級：B";
                    } else {
                        echo "等級：A";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="smalltitle">依據學生成績等級給予評價</p>
                </td>

            </tr>
            <tr>
                <td>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp; 根據學生不同的成績等級在網頁上印出不同的文字評價</p>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                    $score = "A";
                    echo "成績是：$score<br>";

                    switch ($score) {
                        case "A":
                            echo "excellent!";
                            break;
                        case "B":
                            echo "great!";
                            break;
                        case "C":
                            echo "good!";
                            break;
                        case "D":
                            echo "progress!";
                            break;
                        case "E":
                            echo "keepgoing!";
                            break;
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="smalltitle">閏年判斷</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;給定一個西元年份，判斷是否為閏年</p>
                    <ul>
                        <li>地球對太陽的公轉一年的真實時間大約是365天5小時48分46秒，因此以365天定為一年 的狀況下，每年會多出近六小時的時間，所以每隔四年設置一個閏年來消除這多出來的一天。</li>
                        <li>公元年分除以4不可整除，為平年。</li>
                        <li>公元年分除以4可整除但除以100不可整除，為閏年。</li>
                        <li>公元年分除以100可整除但除以400不可整除，為平年。</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td>
                    <p>錯誤次數：1</p>
                    <p style="color: red;">更好的整理應該是，除以4可整除是閏年，但被100整除就不是閏年，<strong>除非</strong>被400整除</p>
                    <?php
                    $year = 2000;
                    echo "年份是：$year<br>";
                        if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
                            echo "閏年";
                        } else {
                            echo "平年";
                        }
                    ?>
                </td>
            </tr>
            
        </table>
    </div>
</body>

</html>