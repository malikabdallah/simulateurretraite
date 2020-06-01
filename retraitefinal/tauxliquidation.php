<?php
session_start();

include ("inclus/function.php");
echo "<br/>";
echo "<br/>";

if($_SESSION["totplein"]=="vrai"){

    $_SESSION["taux"]=50;

}else {



    $nbtrimestretotplein=cbtrimestretotplein($_SESSION["age"],$_SESSION["mois"],$_SESSION["ageAutoTotPlein"]);


    $nbtrimestremanque=nbtrimestremanquant($_SESSION["nbtri"],$_SESSION["dureeDeTrimestrre"]);


    echo "<br/>";

    echo "methode 1 trimestre pour atteindre tot plein automatique:".$nbtrimestretotplein;
    echo "<br/>";
    echo "methode 2 trimestre pour avoir trimestre requit:".$nbtrimestremanque;



    echo "<br/>";

    if($nbtrimestremanque<$nbtrimestretotplein){
        $tx=0.625 * $nbtrimestremanque;
        $pourcentage=50-$tx;
        //echo "taux :".$pourcentage;

    }else{
        $tx=0.625 * $nbtrimestretotplein;
        $pourcentage=50-$tx;
       // echo "taux :".$pourcentage;
    }


    if($pourcentage<=37.5){
        $pourcentage=37.5;
    }


    $_SESSION["taux"]=$pourcentage;

}
    //CALCULE DECOTE;
echo "<br/>";
echo "le taux est ".$_SESSION["taux"];

redirect_to("sam.php");

    //$nbtrimestretotplein=cbtrimestretotplein($_)


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css"/>
    <style media="screen">
        .heading{
            font-family: Bitter,Georgia,"Times New Roman",Times,serif;
            font-weight: bold;
            color: #005E90;
        }
        .heading:hover{
            color: #0090DB;
        }
    </style>

</head>
<body>
<!--

<h1 class="display-1">hello world 1</h1>
<h1 class="display-2">hello world 1</h1>

-->
<header>
    <h1>Calculateur de retraite en ligne</h1>
</header>




<br/>

<!-- footer -->
<footer class="bg-dark text-white">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="lead text-center">  © Malik Mahamoud -- all right reserved</p>
            </div>
        </div>

    </div>

</footer>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
