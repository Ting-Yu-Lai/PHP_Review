<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
    <style>
        * {
            margin: 0;
            box-sizing: border-box;
        }

        .navbar_h1 {
            text-align: center;
            /* margin: 20px; */
            margin-top: 20px;
            /* margin-left: 20px; */
            padding-bottom: 20px;
            /* display: inline-block; */
            font-size: 30px;

        }

        .navbar {
            width: 100%;
            height: 10vh;
            position: static;
            top: 0;
            border-bottom: 1px solid black;
        }


        body {
            background-color: lightpink;

        }

        .container {
            width: 50%;
            margin: auto;
            height: 40vh;
            background-color: white;
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .backpage {
            width: 30px;
            height: 30px;
            /* background-color: lightpink; */
            /* background-color: green; */
            position: fixed;
            top: 450px;
            left: 50px;
            /* background-image: ur; */
        }

        .backimg {
            width: 50px;
            height: 50px;
        }

        .smalltitle {
            font-size: 32px;
            text-align: left;
            padding-top: 20px;
            margin-left: 50px;
        }

        .li-text {
            padding-left: 70px;
            font-size: 20px;
            padding-right: 70px;
        }

        .text-box {
            width: 600px;
            height: 300px;
            margin-left: 80px;
            padding-right: 80px;
            font-size: 18px;
            padding-top: 62px;
            /* background-color:blue; */
        }
    </style>

</head>

<body>
    <div class="backpage">

        <a href="../index.php" style="text-decoration: none; color: white;"><img src="../image/return.png" alt="back" class="backimg"></a>
    </div>
    <div class="navbar">
        <div class="navbar_h1">
            字串處理
        </div>
        <div class="navbar_text1"></div>
    </div>

    <div class="container">
        <div class="smalltitle">字串取代</div>
        <li class="li-text">將”aaddw1123”改成”*********”</li>
        <?php
        $str = "aaddw1123";
        $newstr = str_repeat("*", strlen($str));

        echo "<div class='text-box'>";
        echo "未取代前:" . $str . "<br>";
        echo "取代後:" . $newstr . "<br>";
        echo "</div>";
        ?>
    </div>
    <div class="container">
        <div class="smalltitle">字串分割</div>
        <li class="li-text">將”this,is,a,book”依”,”切割後成為陣列</li>
        <?php
        $str = "this,is,a,book";
        $newstr = explode(",", $str);

        echo "<div class='text-box'>";
        echo "未分割前:" . $str . "<br>";
        echo "取代後:";
        print_r($newstr);
        echo "<br>";
        echo "</div>";
        ?>
    </div>
    <div class="container">
        <div class="smalltitle">字串組合</div>
        <li class="li-text">將上例陣列重新組合成“this is a book”
        </li>
        <?php
        $str = "this,is,a,book";
        $explodestr = explode(",", $str);
        $newstr = join(" ", $explodestr);

        echo "<div class='text-box'>";
        echo "未組合前:" . $str . "<br>";
        echo "組合後:" . $newstr . "<br>";
        echo "</div>";
        ?>
    </div>
    <div class="container">
        <div class="smalltitle">子字串取用</div>
        <li class="li-text">將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”
        </li>
        <?php
        $str = "The reason why a great man is great is that he resolves to be a great man";
        $subStr = substr($str, 0, 10) . "...";
        // $newstr = join(" ", $explodestr);

        echo "<div class='text-box'>";
        echo "未取用前:" . $str . "<br>";
        echo "取用後:" . $subStr . "<br>";
        echo "</div>";
        ?>
    </div>

    <div class="container">
        <div class="smalltitle">尋找字串與HTML、css整合應用</div>
        <li class="li-text">給定一個句子，將指定的關鍵字放大</li>
        <li class="li-text">“學會PHP網頁程式設計，薪水會加倍，工作會好找”</li>
        <li class="li-text">請將上句中的 “程式設計” 放大字型或變色.</li>
        <?php
        $str = "學會PHP網頁程式設計，薪水會加倍，工作會好找";
        $substyle = "<span style='font-size: 30px; color: red;'>程式設計</span>";
        $newstr = str_replace("程式設計", $substyle, $str);
        // $newstr = join(" ", $explodestr);

        echo "<div class='text-box'>";
        echo "未改變前:" . $str . "<br>";
        echo "改變後:" . $newstr . "<br>";
        echo "</div>";
        ?>
    </div>
</body>

</html>