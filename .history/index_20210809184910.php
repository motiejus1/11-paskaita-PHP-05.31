<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11 paskaita</title>
</head>
<body>
    <?php
    //Klases ir objektai

    // Objektas - paimam ir susikuriam, t.y. pats objektas neturejo sablono
    //PHP sukurtume objekta, visu pirma objektas turi tureti savo sablona. Klase

    //Klase - yra objekto sablonas, pagal kurio duomenis yra kuriamas objektas
    //Objektas - tai yra tam tikras kintamuju ir metodu(vidiniu objekto funkciju rinkinys)

    // Automobilio objekta
    class Automobilis {
        //Modeli
        //Marke
        //Gamybos metus

        //Access modifier
        //public - kai bus sukurtas objektas, tas kintamas arba metodas bus pasiekiamas uz objekto/klases ribu
        //private - kintamasis arba metodas gali buti naudojamas tik pacioje klaseje
        private $spalva;
        public $modelis;
        public $marke;
        public $gamybosMetai;

        //Metodai(vidines funkcijos)
        function nustatome_kintamuosius($a, $b, $c) {
            $this->modelis = $a;
            $this->marke = $b;
            $this->gamybosMetai = $c;
            $this->spalva = "Raudona";
        }
    }


    //$automobilis - yra objektas
    $automobilis = new Automobilis();
    //Objekta galime isivesti su var_dump komanda
    var_dump($automobilis);

    $automobilis->nustatome_kintamuosius("VW", "Passat", "2010");


    //O kaip pavyzdiui isivesti tik automobilio modeli?
    echo $automobilis->modelis;
    echo "<br>";
    echo $automobilis->marke;
    echo "<br>";
    echo $automobilis->gamybosMetai;
    echo "<br>";

    //ar as galiu padaryti taip?
    $naujasKintamasis = $automobilis->modelis;
    echo $naujasKintamasis;

    $automobilis->modelis = "BMW";
    echo "<br>";
    echo $automobilis->modelis;

    var_dump($automobilis);
    ?>
</body>
</html>