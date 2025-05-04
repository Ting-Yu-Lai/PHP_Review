<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>程式基礎</title>
</head>
<style>
    ul {
        list-style-type: none;
        display: flex;
        justify-content: center;

    }

    li {
        padding: 10px 20px;
        border: 1px solid black;
        border-radius: 8px;
        box-shadow: 3px;
        margin: 10px 10px;

    }

    li:hover {
        background-color: black;
        padding: 15px 25px;
    }

    a {
        color: white;
        text-decoration: none;
    }

    .bg-container {
        background-image: url('../image/bodypic.png');
        background-size: cover;
        /* background-position: center; 固定上面不裁掉王冠 */
        background-repeat: no-repeat;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
    }

    .overlay {
        background-color: rgba(0, 0, 0, 0.5);

        width: 100%;
        height: 100%;
    }
</style>

<body>
    <div class="bg-container">
        <div class="overlay">
            <h1>PHP Review</h1>

            <ul>
                <li><a href="var.php">變數</a></li>
                <li><a href="./array/">陣列設計</li>
                <li><a href="./loop/index.php">迴圈設計</li>
                <li><a href="./select/index.php">選擇結構</li>
            </ul>
        </div>
    </div>
</body>

</html>