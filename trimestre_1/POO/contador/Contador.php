<?php 

class Contador
{
    private $count;
    private static $instance;
    public function __construct($count = 0)
    {
        $this->count = $count;
        self::$instance++;
    }
    public function incrementar()
    {
        $this->count++;
    }
    public function decrementar()
    {
        $this->count--;
    }
    public function getCount()
    {
        return $this->count;
    }
    public function getInstance()
    {
        return self::$instance;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Carlos Hidalgo Risco">
    <title>Contador</title>
</head>
<body>
    <?php
    require_once "Contador.php";

    $contador1 = new Contador();
    echo $contador1->getCount()."<br>";
    echo $contador1->getInstance()."<br>";
    $contador2 = new Contador();
    echo $contador2->getCount()."<br>";
    echo $contador2->getInstance()."<br>";
    $contador3 = new Contador();
    echo $contador3->getCount()."<br>";
    echo $contador3->getInstance()."<br>";
    $contador4 = new Contador();
    echo $contador4->getCount()."<br>";
    echo $contador4->getInstance()."<br>";
    $contador5 = new Contador();
    echo $contador5->getCount()."<br>";
    echo $contador5->getInstance()."<br>";
    ?>
</body>
</html>