<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 4</title>
    <link rel="stylesheet" href="src/style/style.css" />
</head>

<body>
    <form method="post" action="">
        <div class="container">
            <div class="box box1">
                <div class="item item1">username: </div>
                <div class="item item2"><input type="text" name="username" id="fields"></div>
            </div>
            <div class="box box2">
                <div class="item item3">password: </div>
                <div class="item item4"><input type="password" name="password" id="fields"></div>
            </div>
            <div class="box3">
                <button type="submit" id="btn">Login</button>
            </div>
            <div class="box4 <?php echo $loginSuccessful; ?>">
                <h5><?php echo $response; ?></h5>
            </div>
            <div class="box5">
                <h3>Valid Inputs:</h3>
                <ul>
                    <li><b>U:</b> peter</li>
                    <li><b>P:</b> peter123<br><br></li>
                    <li><b>U:</b> kirsch</li>
                    <li><b>P:</b> kirsch123<br><br></li>
                    <li><b>U:</b> madrid</li>
                    <li><b>P:</b> madrid123<br><br></li>
                </ul>
            </div>
        </div>
    </form>



    <style>
        .box4 {
            position: absolute;
            margin-top: 100px;
            text-align: center;
            width: 100px;
            height: 20px;
            display: <?php echo $showMessage ? 'block' : 'none'; ?>;
            transition: opacity 0.5s ease-out;
            color: yellow;
        }
    </style>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                var box4 = document.querySelector('.box4');
                box4.classList.add('hidden');
            }, 1500);
        });
    </script>
</body>

</html>