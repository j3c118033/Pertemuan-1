<html>
    <body>
        <h2> Calculator </h2>
        <form method="GET" action="kalkulator.php">
            <input type="text" name="bil1" placeholder="Bilangan 1"
                <?php
                    if (isset($_GET["bil1"]))
                        echo 'value="'.$_GET["bil1"].'"'; 
                    else echo 'value="0"'; 
                ?>
            >
            <select name="opr">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="x">x</option>
            <option value="/">/</option>
            </select>

            <input type="text" name="bil2" placeholder="Bilangan 2"
                <?php
                    if (isset($_GET["bil2"]))
                        echo 'value="'.$_GET["bil2"].'"';
                    else echo 'value="0"'; 
                ?>
            >
            <input type="submit" name="sub" value="=">

            <?php
            if (isset($_GET["bil1"]) && strlen( $_GET["bil1"])){
                switch ($_GET["opr"]){
                    case "+" : 
                        {$result = $_GET["bil1"] + $_GET["bil2"]; break;}
                    case "-" : 
                        {$result = $_GET["bil1"] - $_GET["bil2"]; break;}
                    case "*" : 
                        {$result = $_GET["bil1"] * $_GET["bil2"]; break;}
                    case "/" : 
                        {$result = $_GET["bil1"] / $_GET["bil2"]; break;}
                    
                }
                echo $result;
            }
            else echo "0";
            ?>
        </form>

        
</html>