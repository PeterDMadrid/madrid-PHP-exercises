<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise9</title>
    <link href="https://fonts.cdnfonts.com/css/amoera" rel="stylesheet">
    <link rel="stylesheet" href="src/style/style.css"/>
</head>
<body>
    <form method="post" action="">
    <div class="container">
        <div class="item1">
            <div class="firstSection">
                <div class="first">
                    Enter first word:
                </div>
                <div class="inputFirst">
                    <input class="textBox1" type="text" name="first1" id="">
                </div>
            </div>
            <div class="secondSection">
                <div class="second">
                    Enter second word:
                </div>
                <div class="secondInput">
                    <input class="textBox2" type="text" name="second1" id="">
                </div>
            </div>
            <div class="thirdSection">
                <button class="btn" name="task" value="merge">Merge</button>
            </div>
            <div class="fourthSection">
                Result
            </div>
            <div class="fifthSection">
                <?php 
                if($x==0){
                    echo $result;
                }else
                    echo "";
                ?>
            </div>
        </div>
        <div class="item2">
            <div class="firstSection2">
                <div class="index">
                    Enter Index
                </div>
                <div class="indexInput">
                <input class="indexInputBox" type="number" name="index" id="" <?php echo empty($result) ? 'disabled' : ''; ?>/>


                </div>
            </div>
            <div class="secondSection2">
                    <button class="btn2" name="task" value="split">Split</button>
            </div>
            <div class="thirdSection2">
                Result
            </div>
            <div class="fourthSection2">
                <?php
                if($x == 1){
                    echo $result1;
                }else
                    echo ''; ?>
            </div>
        </div>
        <div class="item3">
                <div class="firstSection3">
                    <div class="result">
                        To be replaced:
                    </div>
                    <div class="result2">
                        <?php 
                        echo $result1;
                        ?>
                    </div>
                </div>
                <div class="secondSection3">
                    <div class="replace">
                        Replacement:
                    </div>
                    <div class="replaceInput">
                        <input class="replaceField" type="text" name="replace" id="" <?php echo empty($result) ? 'disabled' : ''; ?>>
                    </div>
                </div>
                <div class="thirdSection3">
                    <button class="btn2" name="task" value="replace" >Replace</button>
                </div>
                <div class="fourthSection3">
                    Result
                </div>
                <div class="fifthSection3">
                    <?php
                if($x == 3){
                    echo $result2;
                }else
                    echo ''; 
                    ?>
                </div>
        </div>
    </div>
    </form>
</body>
</html>