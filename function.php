writeMsg<br>
<?php
    function writeMsg() {
        echo "Hello world!";
    }
    writeMsg(); // call the function
?> 

<br>

<html>
    <body>
        <h1>Welcome to my home page!</h1>
        <p>Some text.</p>
        <p>Some more text.</p>
        <?php include 'footer.php';?>
    </body> 
</html> 
<br>
<html>
    <body>
        <h1>Welcome to my home page!</h1>
        <?php require 'noFileExists.php';
        echo "I have a $color $car.";
        ?>
    </body>
</html> 