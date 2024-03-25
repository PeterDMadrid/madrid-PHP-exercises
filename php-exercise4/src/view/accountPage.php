<?php
namespace src\AccountPage;

use src\Controller\ControllerAccount;

$controllerAcc = new ControllerAccount();
$controllerAcc->index();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Page</title>
</head>

<body>
    <form method="post" action="">
        <div class="container">
            <div class="item1">
                <h2>Login Successful</h2>
            </div>
            <div class="item2">
                <button class="button" name="logout">Log Out</button>
            </div>
        </div>
    </form>
    <style>
        body {
            box-sizing: border-box;
            margin: 0;
            font-family: 'Verdana', sans-serif;
            display: flex;
            justify-content: center;
            font-size: 14px;
            background-color: #d6d6d4;
        }

        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 80px;
            width: 300px;
            height: 200px;
            color: white;
            background-color: #1c1c1c;
            border-radius: 4px;

            background: rgba(35, 35, 35, 0.75);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            backdrop-filter: blur(14.5px);
            -webkit-backdrop-filter: blur(14.5px);
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.18);
        }

        .box3 {
            display: flex;
            justify-content: center;
        }

        .button {
            font-family: 'Verdana', sans-serif;
            width: 100px;
            height: 20px;
            background-color: white;
            color: black;
            border-radius: 10px;
            border: 1px solid white;
            cursor: pointer;
            text-align: center;
        }
    </style>
</body>

</html>