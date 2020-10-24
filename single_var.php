<?php
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
Print_r($cars)
?>
<br>
<br>

<?php
class Car {
 function Car() {
 $this->model = "VW";
 }
}
// create an object
$herbie = new Car();
// show object properties
echo $herbie->model;
?>