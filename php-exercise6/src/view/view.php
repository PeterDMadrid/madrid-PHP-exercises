<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 6</title>
    <link rel="stylesheet" href="src/style/style.css" />
</head>

<body>
    <form method="post" action="">
        <div class="container">
            <div class="container1">
                <div class="item1">
                    Numbers:
                </div>
                <div class="item2">
                    <input type="text" name="inputNumber" id="">
                </div>
            </div>

            <div class="container2">
                <div class="item3">
                    <p>Ascending</p>
                    <div class="ascending"><?php
                                            foreach ($ascending as $asc) {
                                                echo $asc . "<br>";
                                            }
                                            ?></div>
                </div>
                <div class="item4">
                    <p>Descending</p>
                    <div class="descending"><?php
                                            foreach ($descending as $desc) {
                                                echo $desc . "<br>";
                                            }
                                            ?></div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>