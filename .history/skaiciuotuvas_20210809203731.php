<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skaiciuotuvas</title>
</head>
<body>
<form action="skaiciuotuvas.php" action="get">
    <input type="text" name="sk1" value="15" />
    <input type="text" name="sk2" value="20" />
<button type="submit" name="skaiciuoti">Skaiciuoti</button>
</form>


<?php 
//Objektiniu principu suprogramuoti skaiciuotuva, kuris atliktu sudeties, atimties, dalybos, dalybos su liekana
//saknies traukimo ir kelimo antruoju laipsniu operacijas.
class Skaiciuotuvas {
    private $sk1;
    private $sk2;
    private $rezultatas;

    function __construct($sk1, $sk2){
        $this->sk1 = floatval($sk1);
        $this->sk2 = floatval($sk2);
        //Konstruktorius turi paleisti visas funkcijas
        $this->suma();
        $this->atimtis();
        $this->dalyba();
        $this->dalybaSuLiekana();
        $this->saknis();
        $this->kelimasLaipsniu();
        // echo "<input type='text' value='".$this->rezultatas."' disabled='true'>";
    }

    function suma() {
        $this->rezultatas = $this->sk1 + $this->sk2;
        echo $this->rezultatas;
        echo "<br>";
    }

    function atimtis() {
        $this->rezultatas = $this->sk1 - $this->sk2;
        echo $this->rezultatas;
        echo "<br>";
    }

    function dalyba() {
        $this->rezultatas = $this->sk1 / $this->sk2;
        echo $this->rezultatas;
        echo "<br>";
    }

    function dalybaSuLiekana() {
        $this->rezultatas = $this->sk1 % $this->sk2;
        echo $this->rezultatas;
        echo "<br>";
    }

    function saknis() {
        $this->rezultatas = sqrt($this->sk1)." ".sqrt($this->sk2);
        echo $this->rezultatas;
        echo "<br>";
    }

    function kelimasLaipsniu() {
        $this->rezultatas = (($this->sk1)**2)." ".(($this->sk2)**2);
        echo $this->rezultatas;
        echo "<br>";
    }

}

if(isset($_GET["skaiciuoti"])) {
    if(isset($_GET["sk1"]) && !empty($_GET["sk1"]) && isset($_GET["sk2"]) && !empty($_GET["sk2"])  ) {
        $sk1 = $_GET["sk1"];
        $sk2 = $_GET["sk2"];
        $skaiciuotuvas = new Skaiciuotuvas($sk1, $sk2);


        //isvedame kintamaji
        // echo $skaiciuotuvas->rezultatas;// ERROR
        
        //kvieciame objekto metoda
        ""
        $skaiciuotuvas->suma();

    } else {
        echo "Vienas arba abudu laukeliai yra neskaicius arba tusti";
    }
}

?>

</body>
</html>