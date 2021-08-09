<?php 

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
     function nustatome_kintamuosius($a, $b, $c) {
        $this->modelis = $a;
        $this->marke = $b;
        $this->gamybosMetai = $c;
        $this->spalva = "Raudona";
        $this->duruSkaicius = 5;
    }
}

//Objektas
$automobilis = new Automobilis();
    //Objekta galime isivesti su var_dump komanda
var_dump($automobilis);

    $automobilis->nustatome_kintamuosius("VW", "Passat", "2010");


?>