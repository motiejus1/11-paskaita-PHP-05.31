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
    <input type="text" name="veiksmas" value="+" />
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
    private $veiksmas;

    function __construct($sk1, $sk2, $veiksmas){
        $this->sk1 = floatval($sk1);
        $this->sk2 = floatval($sk2);
        $this->veiksmas = $veiksmas;
        switch($this->veiksmas) {
            case "+": 
                $this->suma();
                break;
            case "-": 
                $this->atimtis();
                break;
            case "/": 
                $this->dalyba();
                break;
            case "%": 
                $this->dalybaSuLiekana();
                break;
            case "":
                $this->saknis();
                break;
            case "":
                $this->kelimasLaipsniu();
                break;    
                
        }
        //Konstruktorius turi paleisti visas funkcijas
        $this->suma();
        $this->atimtis();
        $this->dalyba();
        $this->dalybaSuLiekana();
        $this->saknis();
        $this->kelimasLaipsniu();
        // echo "<input type='text' value='".$this->rezultatas."' disabled='true'>";
    }

    private function suma() {
        $this->rezultatas = $this->sk1 + $this->sk2;
        echo $this->rezultatas;
        echo "<br>";
    }

    private function atimtis() {
        $this->rezultatas = $this->sk1 - $this->sk2;
        echo $this->rezultatas;
        echo "<br>";
    }

    private function dalyba() {
        $this->rezultatas = $this->sk1 / $this->sk2;
        echo $this->rezultatas;
        echo "<br>";
    }

    private function dalybaSuLiekana() {
        $this->rezultatas = $this->sk1 % $this->sk2;
        echo $this->rezultatas;
        echo "<br>";
    }

    private function saknis() {
        $this->rezultatas = sqrt($this->sk1)." ".sqrt($this->sk2);
        echo $this->rezultatas;
        echo "<br>";
    }

    private function kelimasLaipsniu() {
        $this->rezultatas = (($this->sk1)**2)." ".(($this->sk2)**2);
        echo $this->rezultatas;
        echo "<br>";
    }

}

if(isset($_GET["skaiciuoti"])) {
    if(isset($_GET["sk1"]) && !empty($_GET["sk1"]) && isset($_GET["sk2"]) && !empty($_GET["sk2"]) && isset($_GET["veiksmas"]) && !empty($_GET["veiksmas"]) ) {
        $sk1 = $_GET["sk1"];
        $sk2 = $_GET["sk2"];
        $veiksmas = $_GET["veiksmas"];
        $skaiciuotuvas = new Skaiciuotuvas($sk1, $sk2, $veiksmas);


        //isvedame kintamaji
        // echo $skaiciuotuvas->rezultatas;// ERROR
        
        //kvieciame objekto metoda
        // echo "Bandom kviesti objekto metoda";
        // $skaiciuotuvas->suma(); //Error

    } else {
        echo "Vienas arba abudu laukeliai yra neskaicius arba tusti";
    }
}

?>

</body>
</html>