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

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="500" class="Select">
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
<section>
    <div class="sub-dvs" data-bs-toggle="modal" data-bs-target="#myModal1">
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
    
        <!-- The Modal -->
        <div class="modal fade" id="myModal1">
          <div class="modal-dialog">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Code</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                ?php <br>
                $txt = "PHP";<br>
                echo "This is $txt!";<br>
                $x = 5;<br>
                $y = 4;<br>
                echo "Addition is: ";<br>
                echo $x + $y;<br>
                print "<a>PHP is Fun!</a>";<br>
                ?
            </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
    </div>
</section>


    <div class="dvs">
    <h1>Array</h1>
<section>
    <div class="sub-dvs" data-bs-toggle="modal" data-bs-target="#myModal2">
        <p>var_dump</p>
            <?php
            $cars = array("Volvo","BMW","Toyota");
            var_dump($cars);
            ?>
    </div>
    <div class="sub-dvs" data-bs-toggle="modal" data-bs-target="#myModal3">
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
        <!-- The Modal -->
        <div class="modal fade" id="myModal2">
          <div class="modal-dialog">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Code</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                ?php<br>
                $cars = array("Volvo","BMW","Toyota");<br>
                var_dump($cars);<br>
                ?
            </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <!-- The Modal -->
        <div class="modal fade" id="myModal3">
          <div class="modal-dialog">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Code</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                ?php <br>
                define("cars", [ <br>
                "Alfa Romeo", <br>
                "BMW", <br>
                "Toyota" <br>
                ]); <br>
                echo cars[0]; <br>
                ? <br>
            </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
    </div>
</section>


    <div class="dvs">
    <h1>Class</h1>
<section>
    <div class="sub-dvs" data-bs-toggle="modal" data-bs-target="#myModal4">
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

        <section class="buttonSep">
        <!-- The Modal -->
        <div class="modal fade" tabindex="-1" id="myModal4">
          <div class="modal-dialog">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Code</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                ?php <br>
                class Car {<br>
                public $color;<br>
                public $model;<br>
                public function __construct($color, $model) {<br>
                    $this->color = $color;<br>
                    $this->model = $model;<br>
                }<br>
                public function message() {<br>
                    return "My car is a " . $this->color . " " . $this->model . "!";<br>
                }<br>
                }<br>
                $myCar = new Car("black", "Volvo");<br>
                echo $myCar -> message();<br>
                $myCar = new Car("red", "Toyota");<br>
                echo $myCar -> message();<br>
                ?<br>
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </section>

    </div>
</section>


    <div class="dvs">
    <h1>String</h1>
<section>
    <p>strrev</p>
    <div class="sub-dvs" data-bs-toggle="modal" data-bs-target="#myModal5">
        <?php
        echo strrev("Hello world!"); 
        ?><br>
    </div>

        <section class="buttonSep">
        <!-- The Modal -->
        <div class="modal fade" tabindex="-1" id="myModal5">
          <div class="modal-dialog">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Code</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                ?php<br>
                echo strrev("Hello world!"); <span>// !dlrow olleH</span><br>
                ?
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </section>

    <div class="sub-dvs" data-bs-toggle="modal" data-bs-target="#myModal6">
    <p>strpos</p>
        <?php
        echo strpos("Hello world!", "world"); 
        ?>
          </div>

        <section class="buttonSep">
        <!-- The Modal -->
        <div class="modal fade" tabindex="-1" id="myModal6">
          <div class="modal-dialog">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Code</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                ?php<br>
                echo strpos("Hello world!", "world"); <span>// 6</span><br>
                ?
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
      </section>


    <div class="sub-dvs" data-bs-toggle="modal" data-bs-target="#myModal7">
    <p>str_replace</p>
        <?php
        echo str_replace("world", "Dolly", "Hello world!");
        ?>
        </div>

        <section class="buttonSep">
        <!-- The Modal -->
        <div class="modal fade" tabindex="-1" id="myModal7">
          <div class="modal-dialog">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Code</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                ?php<br>
                echo str_replace("world", "Dolly", "Hello world!"); <span>// Hello Dolly!</span><br>
                ?<br>
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
      </section>

    </div>
</section>


    <div class="dvs">
    <h1>Constants</h1>
<section>
    <div class="sub-dvs" data-bs-toggle="modal" data-bs-target="#myModal14">
    <p>define</p>
        <?php
        define("GREETING1", "Welcome to PHP!");
        echo GREETING1;
        ?>
    </div>
        
        <section class="buttonSep">
        <!-- The Modal -->
        <div class="modal fade" tabindex="-1" id="myModal14">
          <div class="modal-dialog">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Code</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                ?php<br>
                define("GREETING1", "Welcome to PHP!");<br>
                echo GREETING1;<br>
                ?<br>
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </section>

    <div class="sub-dvs" data-bs-toggle="modal" data-bs-target="#myModal15">
    <p>function</p>
        <?php
        define("GREETING2", "Welcome to PHP!");
        function myTest() {
        echo GREETING2;
        }
        myTest();
        ?>
    </div>
        
        <section class="buttonSep">
        <!-- The Modal -->
        <div class="modal fade" tabindex="-1" id="myModal15">
          <div class="modal-dialog">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Code</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                ?php <br>
                define("GREETING2", "Welcome to PHP!");<br>
                function myTest() {<br>
                echo GREETING2;<br>
                }<br>
                myTest();<br>
                ?<br>
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
</section>


    <div class="dvs">
    <h1>If-else</h1>
<section>
    <div class="sub-dvs" data-bs-toggle="modal" data-bs-target="#myModal16">
    <p>if</p>
        <?php
        $t = date("H");
        if ($t < "20") {
        echo "Have a good day!";
        }
        ?>
    </div>

    <section class="buttonSep">
        <!-- The Modal -->
        <div class="modal fade" tabindex="-1" id="myModal16">
          <div class="modal-dialog">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Code</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                ?php<br>
                $t = date("H");<br>
                if ($t < "20") {<br>
                echo "Have a good day!";<br>
                }<br>
                ?<br>
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </section>

    <div class="sub-dvs" data-bs-toggle="modal" data-bs-target="#myModal17">
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

    <section class="buttonSep">
        <!-- The Modal -->
        <div class="modal fade" tabindex="-1" id="myModal17">
          <div class="modal-dialog">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Code</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                ?php<br>
                $t = date("H");<br>
                if ($t < "20") {<br>
                echo "Have a good day!";<br>
                } else {<br>
                echo "Have a good night!";<br>
                }<br>
                ?<br>
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </section>

    </div>
</section>


    <div class="dvs">
    <h1>Switch</h1>
<section>
    <div class="sub-dvs" data-bs-toggle="modal" data-bs-target="#myModal18">
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

    <section class="buttonSep">
        <!-- The Modal -->
        <div class="modal fade" tabindex="-1" id="myModal18">
          <div class="modal-dialog">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Code</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                ?php<br>
                $favcolor = "red";<br>
                switch ($favcolor) {<br>
                case "red":<br>
                    echo "Your favorite color is red!";<br>
                    break;<br>
                case "blue":<br>
                    echo "Your favorite color is blue!";<br>
                    break;<br>
                case "green":<br>
                    echo "Your favorite color is green!";<br>
                    break;<br>
                default:<br>
                    echo "Your favorite color is neither red, blue, nor green!";<br>
                }<br>
                ?<br>
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </section>

    </div>
</section>


    <div class="dvs">
    <h1>Switch</h1>
<section>
    <div class="sub-dvs" data-bs-toggle="modal" data-bs-target="#myModal18">
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

    <section class="buttonSep">
        <!-- The Modal -->
        <div class="modal fade" tabindex="-1" id="myModal18">
          <div class="modal-dialog">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Code</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                ?php<br>
                $favcolor = "red";<br>
                switch ($favcolor) {<br>
                case "red":<br>
                    echo "Your favorite color is red!";<br>
                    break;<br>
                case "blue":<br>
                    echo "Your favorite color is blue!";<br>
                    break;<br>
                case "green":<br>
                    echo "Your favorite color is green!";<br>
                    break;<br>
                default:<br>
                    echo "Your favorite color is neither red, blue, nor green!";<br>
                }<br>
                ?<br>
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </section>

    </div>
</section>


    <div class="dvs">
    <h1>Loop</h1>
<section>
    <div class="sub-dvs" data-bs-toggle="modal" data-bs-target="#myModal19">
    <p>while-loop</p>
        <?php
        $x = 30;
        while($x <= 50) {
        echo "The number is: $x <br>";
        $x+=10;
        }
        ?>
    </div>

    <section class="buttonSep">
        <!-- The Modal -->
        <div class="modal fade" tabindex="-1" id="myModal19">
          <div class="modal-dialog">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Code</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                ?php<br>
                $x = 30;<br>
                while($x <= 50) {<br>
                echo "The number is: $x ";<br>
                $x+=10;<br>
                }<br>
                ?<br>
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </section>

    <div class="sub-dvs" data-bs-toggle="modal" data-bs-target="#myModal20">
    <p>do-while-loop</p>
        <?php
        $x = 6;
        do {
        echo "The number is: $x <br>";
        $x++;
        } while ($x <= 5);
        ?>
    </div>

    <section class="buttonSep">
        <!-- The Modal -->
        <div class="modal fade" tabindex="-1" id="myModal20">
          <div class="modal-dialog">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Code</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
              ?php<br>
        $x = 6;<br>
        do {<br>
        echo "The number is: $x ";<br>
        $x++;<br>
        } while ($x <= 5);<br>
        ?<br>
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </section>

    <div class="sub-dvs" data-bs-toggle="modal" data-bs-target="#myModal21">
    <p>for-loop</p>
        <?php
        for ($x = 70; $x <= 100; $x+=10) {
        echo "The number is: $x <br>";
        }
        ?>
    </div>

    <section class="buttonSep">
        <!-- The Modal -->
        <div class="modal fade" tabindex="-1" id="myModal21">
          <div class="modal-dialog">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Code</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                ?php<br>
                for ($x = 70; $x <= 100; $x+=10) {<br>
                echo "The number is: $x <br>";<br>
                }<br>
                ?<br>
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </section>

    <div class="sub-dvs" data-bs-toggle="modal" data-bs-target="#myModal22">
    <p>for-each-loop</p>
        <?php
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        foreach($age as $x => $val) {
        echo "$x = $val<br>";
        }
        ?>
    </div>

    <section class="buttonSep">
        <!-- The Modal -->
        <div class="modal fade" tabindex="-1" id="myModal22">
          <div class="modal-dialog">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Code</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
              ?php<br>
            $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");<br>
            foreach($age as $x => $val) {<br>
            echo "$x = $val";<br>
            }<br>
            ?<br>
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </section>

    <div class="sub-dvs" data-bs-toggle="modal" data-bs-target="#myModal23">
    <p>break</p>
        <?php
        for ($x = 1; $x < 10; $x++) {
        if ($x == 4) {
            break;
        }
        echo "The number is: $x <br>";
        }
        ?>
    </div>

    <section class="buttonSep">
        <!-- The Modal -->
        <div class="modal fade" tabindex="-1" id="myModal23">
          <div class="modal-dialog">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Code</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
              ?php<br>
        for ($x = 1; $x < 10; $x++) {<br>
        if ($x == 4) {<br>
            break;<br>
        }<br>
        echo "The number is: $x ";<br>
        }<br>
        ?<br>
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </section>

    <div class="sub-dvs" data-bs-toggle="modal" data-bs-target="#myModal24">
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

    <section class="buttonSep">
        <!-- The Modal -->
        <div class="modal fade" tabindex="-1" id="myModal24">
          <div class="modal-dialog">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Code</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
              ?php<br>
            for ($x = 7; $x < 10; $x++) {<br>
            if ($x == 4) {<br>
                continue;<br>
            }<br>
            echo "The number is: $x ";<br>
            }<br>
            ?<br>
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
</section>


    <div class="dvs">
    <h1>Numbers</h1>
<section>
    <div class="sub-dvs" data-bs-toggle="modal" data-bs-target="#myModal8">
    <p>is_float</p>
            <?php
        $x = 10.365;
        var_dump(is_float($x));
        ?>
              </div>

        <section class="buttonSep">
        <!-- The Modal -->
        <div class="modal fade" tabindex="-1" id="myModal8">
          <div class="modal-dialog">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Code</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                ?php<br>
                $x = 10.365;<br>
                var_dump(is_float($x));<br>
                ?<br>
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="sub-dvs" data-bs-toggle="modal" data-bs-target="#myModal9">
        <p>min,max</p>
        <?php
        echo(min(0, 150, 30, 20, -8, -200));  // returns -200
        echo(max(0, 150, 30, 20, -8, -200));  // returns 150
        ?>
        </div>
        
        <section class="buttonSep">
        <!-- The Modal -->
        <div class="modal fade" tabindex="-1" id="myModal9">
          <div class="modal-dialog">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Code</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                ?php <br>
                echo(min(0, 150, 30, 20, -8, -200));  <span>// -200</span> <br>
                echo(max(0, 150, 30, 20, -8, -200));  <span>// 150</span> <br>
                ?<br>
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
      </section>

    <div class="sub-dvs" data-bs-toggle="modal" data-bs-target="#myModal10">
        <p>abs</p>
        <?php
        echo(abs(-6.7));  // returns 6.7
        ?>
    </div>
        
        <section class="buttonSep">
        <!-- The Modal -->
        <div class="modal fade" tabindex="-1" id="myModal10">
          <div class="modal-dialog">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Code</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                ?php <br>
                echo(abs(-6.7)); <br>
                ?<br>
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </section>

    <div class="sub-dvs" data-bs-toggle="modal" data-bs-target="#myModal11">
        <p>sqrt</p>
        <?php
        echo(sqrt(64));  // returns 8
        ?>
    </div>
        
        <section class="buttonSep">
        <!-- The Modal -->
        <div class="modal fade" tabindex="-1" id="myModal11">
          <div class="modal-dialog">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Code</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                ?php <br>
                echo(sqrt(64)); <br>
                ?<br>
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </section>

    <div class="sub-dvs" data-bs-toggle="modal" data-bs-target="#myModal12">
        <p>round</p>
        <?php
        echo(round(0.60));
        echo "<br>";
        echo(round(0.49));
        ?>
    </div>
        
        <section class="buttonSep">
        <!-- The Modal -->
        <div class="modal fade" tabindex="-1" id="myModal12">
          <div class="modal-dialog">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Code</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                ?php <br>
                echo(round(0.60));  <span>// 1</span><br>
                echo(round(0.49));  <span>// 0</span><br>
                ?<br>
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </section>

    <div class="sub-dvs" data-bs-toggle="modal" data-bs-target="#myModal13">
        <p>rand</p>
        <?php
        echo(rand());
        ?><br>
        <?php
        echo(rand(10, 100));
        ?>
    </div>
        
        <section class="buttonSep">
        <!-- The Modal -->
        <div class="modal fade" tabindex="-1" id="myModal13">
          <div class="modal-dialog">
            <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Code</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <!-- Modal body -->
              <div class="modal-body">
                ?php <br>
                echo(rand());<br>
                echo(rand(10, 100));<br>
                ?<br>
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </section>

    </div>
</section>


</body>
</html>
