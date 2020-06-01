<?php
session_start();

include ("inclus/function.php");
include('template/header.php');


if(isset($_POST["submit"])){


    echo "<br/>";
    echo "vous avez ".$_SESSION["age"];
    echo "<br/>";

    $cotise=$_POST["cotise"];
    $ncotise=$_POST["ncotise"];


    $cotise=intval($cotise);
    $ncotise=intval($ncotise);



    $nbtotal=$cotise+$ncotise;

    echo "nb total  trimestre".$nbtotal;

    echo "<br/>";
    echo "age legal au plus tot".$_SESSION["ageLegalAuPlusTot"]["annee"]." ".$_SESSION["ageLegalAuPlusTot"]["mois"];
    echo "<br/>";
    echo "nb trimestre a cotise".$_SESSION["dureeDeTrimestrre"];
    echo "<br/>";
    echo "age automatique  tot plein".$_SESSION["ageAutoTotPlein"]["annee"]." ".$_SESSION["ageAutoTotPlein"]["mois"];

    echo "<br/>";

    echo "la personne a ".$_SESSION["age"]." et ".$_SESSION["mois"];



    echo "<br/>";


    $totplein=false;
    if(intval($_SESSION["age"])>intval($_SESSION["ageAutoTotPlein"]["annee"])){
        $totplein=true;
        echo "tot plein assuré automatiquement";
    }

    if(intval($_SESSION["age"])==intval($_SESSION["ageAutoTotPlein"]["annee"])) {
        if ($_SESSION["mois"] >= $_SESSION["ageAutoTotPlein"]["mois"]){
            echo "ici 1";
            $totplein = true;
        }
    }

    if(intval($_SESSION["age"])>intval($_SESSION["ageLegalAuPlusTot"]["annee"])){
        if($nbtotal>=intval($_SESSION["dureeDeTrimestrre"])){
            $totplein=true;
            echo "ici 2";

        }
    }




    if(intval($_SESSION["age"])==intval($_SESSION["ageLegalAuPlusTot"]["annee"])){
        if(intval($_SESSION["mois"])>=intval($_SESSION["ageLegalAuPlusTot"]["mois"])){
            if($nbtotal>=$_SESSION["dureeDeTrimestrre"]) {
                $totplein = true;
            }
            echo "ici 3";

        }
    }




    $_SESSION["nbtri"]=$nbtotal;

    if($totplein){
        $_SESSION["totplein"]="vrai";
        redirect_to("tauxliquidation.php");

    }else{
        echo "vous avez pas le tot plein";
        $_SESSION["totplein"]="faux";
        redirect_to("souscondition.php");


    }







}


?>
<fieldset>
    <form  action="nombreTrimestre.php" method="post">
        <div class="form-group">
            <p>Nombre trimestres :</p>
            <div>
                <label for="cotise">Cotisé :</label><br />
                <input class="form-control" type="number"  id="cotise" name="cotise"><br/>
            </div>

            <br/>

            <strong>Rappel :</strong><br>
            Maladie : 60 jours indemnisation = 1 trimestre<br/>
            Invalidité : 3 versements au cours d'un trimestre civil = 1 trimestre<br/>
            Chômage : 50 jours d'indemnisation = 1 trimestre<br/>
            Service militaire : 90 jours = 1 trimestre<br/>
            Maternité : 2 trimestres (3 en cas de triplés), avant d'avoir travaillé<br/>
            Racheté : 12 trimestre max.<br/>
            Les enfants nés et élevés :<br/>
            - Enfant nés avant 01/01/2010 : 4 trimestres pour la mère<br/>
            - Eprès : 4 trimestres à la mère ou le père <br/>
            Aidant familiaux : 1 trimestre par periode de 30 mois de prise en charge d'un adulte handicapé<br/><br />


            <div>
                <label for="ncotise">Non cotisé :</label><br />
                <input class="form-control" type="number"   id="ncotise" name="ncotise"><br/>
            </div>

            <button class="btn btn-primary" type="submit"  name="submit" class="btn btn-success btn-block">
                <i class="fas fa-check"> Valider</i>
            </button>

        </div>
    </form>
</fieldset>
<?php include('template/footer.php') ?>