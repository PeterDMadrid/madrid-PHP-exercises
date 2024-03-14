<?php 
require_once 'src/control/FiboControl.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
    <link rel="stylesheet" href="src/styles/style3.css" />
</head>
<body>
    <div class="container">
        <form method="post" action="">
            <div class="item1">
                Enter Length <input type="number" name="length" id="length"> 
            </div>
            <div class="item2">
                Number list: <br>
                <?php 

                if(isset($results) && is_array($results)) {
                    foreach ($results as $item) {
                        echo $item . "<br>";
                    }
                }
                ?>
            </div>
        </form>
    </div>
</body>
</html>
