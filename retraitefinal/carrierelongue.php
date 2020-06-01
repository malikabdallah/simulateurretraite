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

    if($cond="oui"){
        $_SESSION["contrainte"]="aucune";

        $_SESSION["totplein"]="vrai";

    }else{
        $_SESSION["totplein"]="faux";

    }


    redirect_to("tauxliquidation.php");

    echo "vous avez ".$cond;
}

?>
<fieldset>

Vous ne beneficier pas du tot plein sans condition. Cependant vous pouvez peut-être, sous certaines conditions, avoir le taux pelin (voir ci-dessous).<br/><br/>

    <form  action="carrierehandicap.php" method="post">
        <div class="form-group">
            <strong>Vous validez une des conditions ci-dessous ?</strong>
            <br/>

            <div>
                <input class="form-check-input" type="radio" id="oui" name="condition" value="oui"
                       checked>
                <label for="oui">Oui</label>
            </div>
            <div>
                <input class="form-check-input" type="radio" id="non" name="condition" value="non"
                       checked>
                <label for="non">Non</label>
            </div>

            <button class="btn btn-primary" type="submit"  name="submit" class="btn btn-success btn-block">
                <i class="fas fa-check"> Valider</i>
            </button>
        </div>
    </form>
	
	<br>
	<strong>Conditions :</strong>
	<br>
Année de naissance

Départ anticipé à l’âge de-

Durée d’assurance totale (en trimestres) en étant handicapé-

Dont durée d’assurance cotisée (en trimestres) en étant handicap<br>
            <?php

            echo "voici l age legal au plus tot ".$_SESSION["ageLegalAuPlusTot"]["annee"]." et ".$_SESSION["ageLegalAuPlusTot"]["mois"];
            echo "<br/>";


            echo "vous avez ".$_SESSION["age"]." et ".$_SESSION["mois"];
            echo "<br/>";


            echo "voici l age legal au plus tot ".$_SESSION["ageAutoTotPlein"]["annee"]." et ".$_SESSION["ageAutoTotPlein"]["mois"];


            echo "<br/>";

            echo "vous avez cotise ".$_SESSION["nbtri"]." trimestre";


            echo "<br/>";

            ?>
	
	
<table style="width: 677px; border: solid 1px black" border="1">
    <tbody>
    <tr style="height: 63px;">
        <td style="height: 63px; width: 137px;">&nbsp;annee de naissance</td>
        <td style="height: 63px; width: 122px;">depart possible a&nbsp;&nbsp;</td>
        <td style="height: 63px; width: 320px;">
            <p>vous justifier de 5 trimestre avant la fin de l annee&nbsp;</p>
            <p>civil de vos&nbsp;&nbsp;</p>
        </td>
        <td style="height: 63px; width: 95px;">duree cotisee&nbsp;</td>
    </tr>
    <tr style="height: 34px;">
        <td style="height: 34px; width: 137px;" rowspan="3">&nbsp;1957</td>
        <td style="height: 34px; width: 122px;">&nbsp;57 ans</td>
        <td style="height: 34px; width: 320px;">16 ans</td>
        <td style="height: 34px; width: 95px;">174</td>
    </tr>
    <tr style="height: 34px;">
        <td style="height: 34px; width: 122px;">59 ans et 8 mois</td>
        <td style="height: 34px; width: 320px;">16 ans</td>
        <td style="height: 34px; width: 95px;">166</td>
    </tr>
    <tr style="height: 23px;">
        <td style="height: 23px; width: 122px;">&nbsp;60ans</td>
        <td style="height: 23px; width: 320px;">20 ans</td>
        <td style="height: 23px; width: 95px;">166</td>
    </tr>
    <tr style="height: 23px;">
        <td style="height: 23px; width: 122px;" rowspan="2">&nbsp;1958</td>
        <td style="height: 23px; width: 320px;">&nbsp;57 ans et 4</td>
        <td style="height: 23px; width: 95px;">&nbsp;16 ans</td>
        <td style="height: 23px; width: 10px;">175</td>
    </tr>
    <tr style="height: 23px;">
        <td style="height: 23px; width: 137px;">&nbsp;60ans</td>
        <td style="height: 23px; width: 122px;">20ans</td>
        <td style="height: 23px; width: 320px;">167</td>
    </tr>
    <tr style="height: 23px;">
        <td style="height: 23px; width: 137px;" rowspan="2">&nbsp;1959</td>
        <td style="height: 23px; width: 122px;">57 ans et 8 mois</td>
        <td style="height: 23px; width: 320px;">16 ans</td>
        <td style="height: 23px; width: 95px;">&nbsp;175</td>
    </tr>
    <tr style="height: 23px;">
        <td style="height: 23px; width: 137px;">&nbsp;60 ans</td>
        <td style="height: 23px; width: 122px;">20 ans</td>
        <td style="height: 23px; width: 320px;">167</td>
    </tr>
    <tr style="height: 23px;">
        <td style="height: 23px; width: 137px;" rowspan="2">&nbsp;1960</td>
        <td style="height: 23px; width: 122px;">&nbsp;58 ANS</td>
        <td style="height: 23px; width: 320px;">16ans</td>
        <td style="height: 23px; width: 95px;">175</td>
    </tr>
    <tr style="height: 23px;">
        <td style="height: 23px; width: 137px;">&nbsp;60ans</td>
        <td style="height: 23px; width: 122px;">20ans</td>
        <td style="height: 23px; width: 320px;">167</td>
    </tr>
    <tr style="height: 23px;">
        <td style="height: 23px; width: 137px;" rowspan="2">&nbsp;1961-62-63</td>
        <td style="height: 23px; width: 122px;">&nbsp;58ans</td>
        <td style="height: 23px; width: 320px;">&nbsp;16ans</td>
        <td style="height: 23px; width: 95px;">&nbsp;176</td>
    </tr>
    <tr style="height: 23px;">
        <td style="height: 23px; width: 137px;">&nbsp;60ans</td>
        <td style="height: 23px; width: 122px;">&nbsp;20ans</td>
        <td style="height: 23px; width: 320px;">&nbsp;168</td>
    </tr>
    </tbody>
</table>

</fieldset>
<?php include('template/footer.php') ?>