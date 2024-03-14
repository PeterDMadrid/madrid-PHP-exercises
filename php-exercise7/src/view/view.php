<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise7</title>
    <link rel="stylesheet" href="src/style/style.css" />
</head>
<body>
    <div class="container">
        <form method="post" action="">
        <div class="box">
            <div class="header">
                    Exercise 7
            </div>
            <div class="item1">
                <div class="first">
                    First Name:
                </div>
                <div class="firstInput">
                <input class="textBox" type="text" name="first">
                </div>
            </div>
            <div class="item2">
                <div class="last">
                    Last Name:
                </div>
                <div class="lastInput">
                    <input class="textBox" type="text" name="last">
                </div>
            </div>
            <div class="item4">
                <div class="email">
                    Email:
                </div>
                <div class="emailInput">
                    <input class="textBox" type="text" name="email">
                </div>
                
            </div>
            <div class="item3">
                <div class="labelMessage">
                    Message
                </div>
                <div class="messageBox">
                    <textarea name="message" id="" cols="30" rows="5"></textarea>
                </div>
            </div>
            <div class="signup">
                <button class="btn" name="submit">Show Message</button>
            </div>
        </div>
        </form>
        <div class="new">  
            Firstname: <?php echo $first; ?> <br><br>
            Lastname: <?php echo $last; ?> <br><br>
            Email: <?php echo $em; ?> <br><br>
            Text: <?php echo $text; ?> <br><br>
        </div>
    </div>
</body>
</html>