<?php
session_start();

include ("inclus/function.php");
include('template/header.php');


if(isset($_POST["submit"])){

    echo "<br/>";
    echo "vous avez ".$_SESSION["age"];
    echo "<br/>";

echo  "subbbbmit";

    $cond=$_POST["condition"];
    if($cond=="carierelonguespe"){
        redirect_to("carrierelongue.php");
    }

    if($cond=="carrierehandicapspe"){
        redirect_to("carrierehandicap.php");
    }
    if($cond =="penibilite"){
        $_SESSION["contrainte"]="aucune";

    }
    if($cond=="aucune"){
        $_SESSION["totplein"]="faux";

    }else{



        $_SESSION["totplein"]="vrai";


    }

    echo "contrainte ".$_SESSION["contrainte"];
    redirect_to("tauxliquidation.php");

    echo "vous avez ".$cond;
}

?>
<fieldset>

    <form  action="souscondition.php" method="post">
        <div class="form-group">
            <?php

            echo "Voici l'age légal au plus tôt ".$_SESSION["ageLegalAuPlusTot"]["annee"]." et ".$_SESSION["ageLegalAuPlusTot"]["mois"];
            echo "<br/>";

            echo "Vous avez ".$_SESSION["age"]."  ans et ".$_SESSION["mois"]." mois";
            echo "<br/>";

            echo "Voici l'âge legal au plus tot ".$_SESSION["ageAutoTotPlein"]["annee"]." ans  et ".$_SESSION["ageAutoTotPlein"]["mois"]." mois ";
            echo "<br/>";

            echo "Vous avez cotisé ".$_SESSION["nbtri"]." trimestre";
            echo "<br/>";

            echo "Il vous fallait  ".$_SESSION["dureeDeTrimestrre"]." trimestre";
            echo "<br/>";

            if($_SESSION["nbtri"]>=$_SESSION["dureeDeTrimestrre"]){
                echo "Vous avez cotise le nombre de trimestre requis. Le probleme vient de l'âge de votre départ.";
            }
            ?><br /><br />

            <strong>Vous validez une des conditions suivantes ?</strong><br /><br/>

            <div>
                <input type="radio" class="form-check-input" id="ina" name="condition" value="inaptitude"
                       checked>
                <label for="ina">Inaptitude au travail(entre age legal et depart au tot plein):</label>
            </div>
            <div>
                <input type="radio" class="form-check-input" id="mere" name="condition" value="mere"
                       checked>
                <label for="mere">Mère de famille ouvrire (30 ans assurance et 3 enfants eleves entre age legal et depart au taux plein):</label>
            </div>

            <div>
                <input type="radio" class="form-check-input" id="comba" name="condition" value="comba"
                       checked>
                <label for="comba">Anciens combattant et prisonier de guerre(entre age legal et taux plein)</label>
            </div>





            <div>
                <input type="radio" class="form-check-input" id="carrierehandicapspe" name="condition" value="carrierehandicapspe"
                       checked>
                <label for="carrierehandicapspe">Assuré handicapé (à compter de 55 ans)</label>
            </div>






            <div>
                <input type="radio" class="form-check-input" id="carrielonguespe" name="condition" value="carierelonguespe"
                       checked>
                <label for="carrielonguespe">Retraite anticipée des carriere longues (a compter de 56 ans)</label>
            </div>





            <div>
                <input type="radio" class="form-check-input" id="amiante" name="condition" value="penibilite"
                       checked>
                <label for="amiante">Retraite anticipée au titre de la penebilité (à compter de 60 ans, le 1 juillet 2011)</label>
            </div>


            <div>
                <input type="radio" class="form-check-input" id="amiante" name="condition" value="amiante"
                       checked>
                <label for="amiante">Dispositif amiante (à compter de 60 ans)</label>
            </div>



            <div>
                <input type="radio" class="form-check-input" id="aucune" name="condition" value="aucune"
                       checked>
                <label for="aucune"><i>Aucune des categories ci-dessus</label>
            </div>

            <button class="btn btn-primary" type="submit"  name="submit" class="btn btn-success btn-block">
                <i class="fas fa-check"> Valider</i>
            </button>

        </div>
    </form>
</fieldset>
<?php include('template/footer.php') ?>