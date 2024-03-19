<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Exercise 10</title>
    <link rel="stylesheet" href="src/style/style.css" />
</head>

<body>
    <form method="post" action="">
        <div class="container">
            <div class="item1">
                <div class="firstSection">
                    <div class="enter">
                        Enter Filename:
                    </div>
                    <div class="filename">
                        <input type="text" name="fileName" id="">
                    </div>
                </div>
                <div class="secondSection">
                    <div class="textarea">
                        <textarea name="textWritten" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="thirdSection">
                    <div class="create">
                        <button class="btn" name="fileFun" value="create">Create</button>
                    </div>
                    <div class="update">
                        <button class="btn" name="fileFun" value="update">Update</button>
                    </div>
                </div>
                <div class="fourthSection">
                    <div class="delete">
                        <button class="btn1" name="fileFun" value="delete">Delete</button>
                    </div>
                </div>
            </div>
            <div class="item2">
                <div class="firstSection2">
                    <?php if ($x == 0) {
                        echo $message1 . "<br><br>" . $filename . "<br><br>";
                    } else echo $message1; ?>
                </div>
                <div class="secondSection2">
                    <?php
                    if ($x == 0) {
                        echo $message;
                    } else echo '';
                    ?>
                </div>
            </div>
        </div>
    </form>
</body>

</html>