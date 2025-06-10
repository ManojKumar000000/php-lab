<html>
    <head>
        <body>
            <h1>constructor and destructor</h1>
            <?php 
            class Myclass 
            {
                public $name;
                function __construct($name)
                {
                    $this ->name = $name;
                    echo "constructor called , hello". $this ->name."<br>";
                }
                function __destruct()
                {
                echo "destructor called ,hello".$this ->name.",<br>";
                }
            }
            $obj = new Myclass("manu");
            ?>
        </body>
    </html>