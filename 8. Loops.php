<?php
    $x = 30;
    while($x <= 50) {
    echo "The number is: $x <br>";
    $x+=10;
    }
    ?>

<?php
    $x = 6;
    do {
    echo "The number is: $x <br>";
    $x++;
    } while ($x <= 5);
    ?>

<?php
    for ($x = 70; $x <= 100; $x+=10) {
    echo "The number is: $x <br>";
    }
    ?>

<?php
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    foreach($age as $x => $val) {
    echo "$x = $val<br>";
    }
    ?>

<?php
    for ($x = 1; $x < 10; $x++) {
    if ($x == 4) {
        break;
    }
    echo "The number is: $x <br>";
    }
    ?>

<?php
    for ($x = 7; $x < 10; $x++) {
    if ($x == 4) {
        continue;
    }
    echo "The number is: $x <br>";
    }
    ?>

