<?php
namespace src\View;

use src\Controller\ControllerAccount;

$controllerAcc = new ControllerAccount();
$controllerAcc->index();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="src/style/styletwo.css" />
</head>

<body>
    <form method="post" action="">
        <div class="container">
            <div class="item1">
                <h3>You are now logged in</h3>
            </div>
            <div class="item2">
                <button class="goBack" name="logout">Log Out</button>
            </div>
        </div>
        <style>
            * {
                box-sizing: border-box;
                margin: 0;
                font-family: 'Verdana', sans-serif;
            }

            body {
                display: flex;
                justify-content: center;
                align-items: center;
                background-color: #d6d6d4;
            }

            .container {
                display: flex;
                flex-direction: column;
                text-align: center;
                margin-top: 150px;

                width: 400px;
                height: 200px;
                padding: 60px;

                background: rgba(35, 35, 35, 0.75);
                box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
                backdrop-filter: blur(14.5px);
                -webkit-backdrop-filter: blur(14.5px);
                border-radius: 10px;
                border: 1px solid rgba(255, 255, 255, 0.18);
                color: white;
            }

            .item2,
            .item1 {

                width: 250px;
                height: 100px;
                margin: 5px;
            }

            .goBack {
                width: 150px;
                height: 30px;
                background-color: white;
                border-radius: 5px;
                border-color: rgb(191, 191, 191);
                cursor: pointer;
            }
        </style>
    </form>
</body>

</html>