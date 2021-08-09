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
        public $modelis;
        public $marke;
        public $gamybosMetai;

        //Metodai(vidines funkcijos)
        function nustatome_kintamuosius($a, $b, $c) {
            $this->modelis = $a;
            $this->marke = $b;
            $this->gamybosMetai = $c;
        }
    }


    //$automobilis - yra objektas
    $automobilis = new Automobilis();
    //Objekta galime isivesti su var_dumo komanda
    var_dump($automobilis);

    $automobilis->nustatome_kintamuosius("VW", "Passat", "2010");

    var_dump($automobilis)
    ?>
</body>
</html>