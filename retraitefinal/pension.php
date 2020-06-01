<?php
session_start();
include ("inclus/function.php");
include('template/header.php');
?>
<fieldset>

    <?php
    echo "Votre pension est de : ".$_SESSION["pension"]." <br/>";

    $pension=$_SESSION["pension"];
    if($_SESSION["totplein"] && $pension<636.56){
        $pension=636.56;
        if($_SESSION["nbtri"]>=120){
            $pension=697.68;
        }

        echo "<br/>";
        echo "Pension revalorisée pour tenir compte du minimum contributif ".$pension;
        echo "<br/>";

    }

    if($_SESSION["bonus"]>0){
        echo $_SESSION["nbtri"]." cotise vs ".$_SESSION["dureeDeTrimestrre"]." requis ";
        echo "Vous beneficier d une surcote de ".$_SESSION["bonus"];
        echo "<br/>";

        $pension = $pension + ($pension * $_SESSION["bonus"]);
        echo "Votre pension vaut ".$pension;
        echo "<br/>";

    }


    if($_SESSION["bonus2"]=="oui"){
        echo "Ayant declarer 3 enfant votre pension est revalorise ";
        echo "<br/>";

        $ajout=$pension*0.1;
        $pension=$pension+$ajout;

    }

    echo "<br /><strong>Votre pension  mensuel final est de : ".$pension.' €</strong>';

    echo "<br/>";
    if($_SESSION["contrainte"]=="pastout"){
       // echo "vous avez ".$_SESSION["age"]." ans et ".$_SESSION["mois"]." mois ";
        echo "<br />Toutefois vous etes partie en retraite avant l age legal  vous ne pourrez toucher votre pension que a 62 ans";
    }

    ?>


</fieldset>
<?php include('template/footer.php') ?>