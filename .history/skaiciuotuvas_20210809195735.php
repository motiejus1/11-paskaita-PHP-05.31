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

}

if(isset($_GET["skaiciuoti"])) {
    if(isset($_GET["sk1"]) && !empty($_GET["sk1"]) && isset($_GET["sk2"]) && !empty($_GET["sk2"])  ) {
        $sk1 = $_GET["sk1"];
        $sk2 = $_GET["sk2"];
        $skaiciuotuvas = new Skaiciuotuvas($sk1, $sk2);
    } else {
        echo "Vienas arba abudu laukeliai yra neskaicius arba tusti";
    }
}

?>

</body>
</html>