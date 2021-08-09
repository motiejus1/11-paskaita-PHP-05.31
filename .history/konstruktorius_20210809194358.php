<?php 

//Funkcija(metodas) kuri pasileidzia objekto sukurimo metu - konstruktorius


//Klase
class Automobilis {
    //Modeli
    //Marke
    //Gamybos metus

    //Access modifier
    //public - kai bus sukurtas objektas, tas kintamas arba metodas bus pasiekiamas uz objekto/klases ribu
    //private - kintamasis arba metodas gali buti naudojamas tik pacioje klaseje
    
    //protected - kintamasis arba metodas gali buti naudojamas pacioje klaseje ir jos vaikinese klasese
    protected $duruSkaicius;
    private $spalva;
    public $modelis;
    public $marke;
    public $gamybosMetai;

    //Metodai(vidines funkcijos)
    //public
     function __construct($a, $b, $c) {
        $this->modelis = $a;
        $this->marke = $b;
        $this->gamybosMetai = $c;
        $this->spalva = "Raudona";
        $this->duruSkaicius = 5;
    }
}

//Objektas
$automobilis = new Automobilis("VW", "Passat", "1993");
$automobilis1 = new Automobilis("BMW", "320", 2003);

$automobiliu_masyvas = array($automobilis, $automobilis1);


var_dump($automobiliu_masyvas)
var_dump($automobilis);
var_dump($automobilis1);

?>