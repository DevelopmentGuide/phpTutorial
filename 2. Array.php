<!-- var_dump -->
<?php
    $cars = array("Volvo","BMW","Toyota");
    var_dump($cars);
    ?><br>

<!-- define -->
<?php
    define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
    ]);
    echo cars[0];
    ?>