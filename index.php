<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="https://avatars.githubusercontent.com/u/76637730?v=4" type="image/gif" sizes="16x16" style="border-radius: 50%;">
    <link rel="stylesheet" href="./src/style.css">
    <link rel="stylesheet" href="https://app.staticsave.com/root/root.css">
    <link rel="stylesheet" href="https://app.staticsave.com/root/noselect.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="500" class="noSelect">
<nav class="navbar navbar-expand-sm bg-light fixed-top">
    <div class="container-fluid justify-content-start">
      <ul class="navbar-nav">
        <li class="nav-item">
        <a href="#section1">
          <img src="https://avatars.githubusercontent.com/u/76637730?v=4" draggable="false" width="50" style="border-radius:50%; filter: brightness(1.2);"/>
        </a>
        </li>
      </ul>
    </div>
</nav>

<h1>PHP Basics </h1>
<div class="all">
    <div class="dvs">
    <h1>Basics</h1>
        <?php
        $txt = "PHP";
        echo "This is $txt! <br>";
        $x = 5;
        $y = 4;
        echo "Addition is: ";
        echo $x + $y;
        print "<br><a>PHP is Fun!</a>";
        ?>
    </div>

    <div class="dvs">
    <h1>Array</h1>
    <div class="sub-dvs" >
        <p>var_dump</p>
            <?php
            $cars = array("Volvo","BMW","Toyota");
            var_dump($cars);
            ?>
    </div>
    <p>define</p>
        <?php
        define("cars", [
        "Alfa Romeo",
        "BMW",
        "Toyota"
        ]);
        echo cars[0];
        ?>


    </div>


    <div class="dvs">
    <h1>Class</h1>
        <?php
        class Car {
        public $color;
        public $model;
        public function __construct($color, $model) {
            $this->color = $color;
            $this->model = $model;
        }
        public function message() {
            return "My car is a " . $this->color . " " . $this->model . "!";
        }
        }

        $myCar = new Car("black", "Volvo");
        echo $myCar -> message();
        echo "<br>";
        $myCar = new Car("red", "Toyota");
        echo $myCar -> message();
        ?>
    </div>


    <div class="dvs">
    <h1>String</h1>
    <p>strrev</p>
        <?php
        echo strrev("Hello world!"); // outputs !dlrow olleH
        ?><br>
    <p>strpos</p>
        <?php
        echo strpos("Hello world!", "world"); // outputs 6
        ?>
    <p>str_replace</p>
        <?php
        echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
        ?>
    </div>


    <div class="dvs">
    <h1>Numbers</h1>
    <p>is_float</p>
        <?php
        $x = 10.365;
        var_dump(is_float($x));
        ?>
    <p>min,max</p>
        <?php
        echo(min(0, 150, 30, 20, -8, -200));  // returns -200
        echo(max(0, 150, 30, 20, -8, -200));  // returns 150
        ?>
    <p>abs</p>
        <?php
        echo(abs(-6.7));  // returns 6.7
        ?>
    <p>sqrt</p>
        <?php
        echo(sqrt(64));  // returns 8
        ?>
    <p>round</p>
        <?php
        echo(round(0.60));  // returns 1
        echo(round(0.49));  // returns 0
        ?>
    <p>rand</p>
        <?php
        echo(rand());
        ?><br>
        <?php
        echo(rand(10, 100));
        ?>
    </div>


    <div class="dvs">
    <h1>Constants</h1>
    <p>define</p>
        <?php
        define("GREETING1", "Welcome to PHP!");
        echo GREETING1;
        ?>
    <p>function</p>
        <?php
        define("GREETING2", "Welcome to PHP!");
        function myTest() {
        echo GREETING2;
        }
        myTest();
        ?>
    </div>


    <div class="dvs">
    <h1>If-else</h1>
    <p>if</p>
        <?php
        $t = date("H");
        if ($t < "20") {
        echo "Have a good day!";
        }
        ?>
    <p>if-else</p>
        <?php
        $t = date("H");

        if ($t < "20") {
        echo "Have a good day!";
        } else {
        echo "Have a good night!";
        }
        ?>
    </div>


    <div class="dvs">
    <h1>Switch</h1>
        <?php
        $favcolor = "red";
        switch ($favcolor) {
        case "red":
            echo "Your favorite color is red!";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        default:
            echo "Your favorite color is neither red, blue, nor green!";
        }
        ?>
    </div>


    <div class="dvs">
    <h1>Loop</h1>
    <p>while-loop</p>
        <?php
        $x = 30;
        while($x <= 50) {
        echo "The number is: $x <br>";
        $x+=10;
        }
        ?>
    <p>do-while-loop</p>
        <?php
        $x = 6;
        do {
        echo "The number is: $x <br>";
        $x++;
        } while ($x <= 5);
        ?>
    <p>for-loop</p>
        <?php
        for ($x = 70; $x <= 100; $x+=10) {
        echo "The number is: $x <br>";
        }
        ?>
    <p>for-each-loop</p>
        <?php
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        foreach($age as $x => $val) {
        echo "$x = $val<br>";
        }
        ?>
    <p>break</p>
        <?php
        for ($x = 1; $x < 10; $x++) {
        if ($x == 4) {
            break;
        }
        echo "The number is: $x <br>";
        }
        ?>
    <p>continue</p>
        <?php
        for ($x = 7; $x < 10; $x++) {
        if ($x == 4) {
            continue;
        }
        echo "The number is: $x <br>";
        }
        ?>
    </div>
</div>

</body>
</html>
