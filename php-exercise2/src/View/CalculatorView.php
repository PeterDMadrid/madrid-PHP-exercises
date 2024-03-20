<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madrid-Calculator</title>
</head>

<body>
    <form method="post" action="">
        <div class="container">
            <div class="con firstContainer">
                <div class="item item1" id="item1">First Number:</div>
                <div class="item item2"><input type="number" name="first" id="number1"></div>
            </div>
            <div class="con secondContainer">
                <div class="item item3" id="item3">Second Number:</div>
                <div class="item item4"><input type="number" name="second" id="number2">
                </div>
            </div>
            <div class="con operation">
                <div class="item add"><input type="submit" name="operations" value="+" id="addition"></div>
                <div class="item sub"><input type="submit" name="operations" value="-" id="subtract"></div>
                <div class="item divide"><input type="submit" name="operations" value="/" id="divition"></div>
                <div class="item mult"><input type="submit" name="operations" value="*" id="mult"></div>
            </div>
            <div class="con output">Answer:<br><br><br><br><?php echo $result; ?></div>
        </div>
    </form>
    <style>
        body {
            display: block;
            margin: 0;
            font-family: Sans-Serif;
            color: white;
            background-color: black;
        }

        .container {
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-top: 80px;
            border: 2px dashed red;
            align-items: center;
            margin-right: 340px;
            margin-left: 340px;
            padding: 10px;
            min-width: 580px;

            background: rgba(102, 102, 102, 0.05);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            backdrop-filter: blur(2px);
            -webkit-backdrop-filter: blur(2px);
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.18);
        }

        .con {
            display: flex;
            padding: 4px;
            width: 350px;
            height: 50px;
            margin: 4px;
            margin-right: 220px;
        }

        .item {
            border: 1px dashed black;
            width: 180px;
            height: 48px;

        }

        .operation {
            flex: wrap;
            text-align: center;
            align-content: space-between;
        }

        .output {
            position: absolute;
            width: 190px;
            height: 170px;
            margin-top: 10px;
            margin-left: 590px;
            justify-content: center;
            background-color: white;
            color: black;
            text-align: center;
        }

        #mult,
        #divition,
        #addition,
        #subtract {
            width: 70px;
            height: 50px;
            font-size: 25px;
        }

        #number1,
        #number2,
        #item1,
        #item3 {
            padding: 5px;
            margin-top: 5px;
        }
    </style>
</body>

</html>