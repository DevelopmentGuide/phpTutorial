<?php
    $x = 10.365;
    var_dump(is_float($x));
    ?>

<?php
    echo(min(0, 150, 30, 20, -8, -200));  // returns -200
    echo(max(0, 150, 30, 20, -8, -200));  // returns 150
    ?>

<?php
    echo(abs(-6.7));  // returns 6.7
    ?>

<?php
    echo(sqrt(64));  // returns 8
    ?>

<?php
    echo(round(0.60));
    echo "<br>";
    echo(round(0.49));
    ?>

<?php
    echo(rand());
    ?><br>
    <?php
    echo(rand(10, 100));
    ?>