While <br>
<?php
    $x = 1;
    while($x <= 5) {
        echo "The number is: $x <br>";
        $x++;
    } echo $x;
?> 

<br>

Do-While <br>
<?php
    $x = 1;
    do {
        echo "The number is: $x <br>";
        $x++;
    } while ($x <= 5);
?> 

<br>

for <br>
<?php
    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
    }
?> 

<br>
foreach <br>
<?php
    $colors = array("red", "green", "blue", "yellow");
    foreach ($colors as $value) {
        echo "$value <br>";
    }
    print_r($colors);
?> 
<br><br>
<?php
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    foreach($age as $x => $val) {
        echo "$x = $val<br>";
    }
?> 

<br>
Break and Continue <br>
<?php
    for ($x = 0; $x < 10; $x+=3) {
    if ($x == 4) {
    break;
    }
        echo "The number is: $x <br>";
    }
?>
<br>
<?php
$x = 0;
    while($x < 10) {
        if ($x == 4) { 
        $x++;
        continue;
        }
        echo "The number is: $x <br>";
        $x++;
    }
?>

