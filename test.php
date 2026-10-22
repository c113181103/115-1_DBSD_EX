
<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>船舶靠泊時間判斷</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 80px;
            background-color: #f0f8ff;
        }

        .container {
            background: white;
            width: 350px;
            margin: auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
        }

        input, button {
            padding: 10px;
            margin: 10px;
        }

        .result {
            font-size: 22px;
            font-weight: bold;
            color: #0066cc;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>船舶靠泊時間判斷</h2>

    <form method="post">
        <label for="hours">請輸入靠泊時間（小時）：</label><br>

        <input
            type="number"
            id="hours"
            name="hours"
            min="0"
            step="any"
            required
            value="<?php
                if (isset($_POST['hours'])) {
                    echo htmlspecialchars($_POST['hours']);
                }
            ?>"
        >

        <br>
        <button type="submit">開始判斷</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $hours = filter_input(
            INPUT_POST,
            "hours",
            FILTER_VALIDATE_FLOAT
        );

        if ($hours === false || $hours === null || $hours < 0) {
            echo "<p class='result'>請輸入有效的靠泊時間！</p>";
        } elseif ($hours >= 20) {
            echo "<p class='result'>長時間靠泊</p>";
        } else {
            echo "<p class='result'>一般靠泊</p>";
        }
    }
    ?>
</div>

</body>
</html>