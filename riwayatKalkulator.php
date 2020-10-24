<html>
    <body>
        <h2> Calculator ke-2 </h2>
        <form method="GET" action="riwayatKalkulator.php">
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

            <input type="hidden" name="historysebelumnya"
                <?php
                    if (isset($_GET["historysebelumnya"])) $str1 = "";  
                    else $str1 = $_GET["historysebelumnya"];
                ?>
            >

            <?php
                include "pustaka.php";
                if (isset($_GET["bil1"])){
                    $hsl = operasikan($_GET["bil1"],$_GET["bil2"],$_GET["opr"]);
                    $str1 = $str1.$_GET["bil1"]." ".$_GET["opr"]." ".$_GET["bil2"]." = ".$hsl."<br>";
                    echo $hsl;
                }
                else echo "0";
            ?>

            <h3> Riwayat Pencarian </h3>
        </form>    
</html>