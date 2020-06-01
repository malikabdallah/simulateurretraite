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
	
	
<table class="customTable" border="1">
    <thead>
    <tr style="height: 43px;">
        <th style="height: 43px;">Année de naissance</th>
        <th style="height: 43px;">Départ anticipé à partir de&nbsp;</th>
        <th style="height: 43px;">Durée totale d'assurance</th>
        <th style="height: 43px;">duree d assurance cotise</th>
    </tr>
    </thead>
    <tbody>
    <tr style="height: 23px;">
        <td style="height: 115px;" rowspan="5">1956-1957</td>
        <td style="height: 23px;">55 ans</td>
        <td style="height: 23px;">126</td>
        <td style="height: 23px;">106</td>
    </tr>
    <tr style="height: 23px;">
        <td style="height: 23px;">56 ans</td>
        <td style="height: 23px;">116</td>
        <td style="height: 23px;">96</td>
    </tr>
    <tr style="height: 23px;">
        <td style="height: 23px;">57 ans</td>
        <td style="height: 23px;">106</td>
        <td style="height: 23px;">86</td>
    </tr>
    <tr style="height: 23px;">
        <td style="height: 23px;">58 ans</td>
        <td style="height: 23px;">96</td>
        <td style="height: 23px;">76</td>
    </tr>
    <tr style="height: 23px;">
        <td style="height: 23px;">59 ans</td>
        <td style="height: 23px;">86</td>
        <td style="height: 23px;">66</td>
    </tr>
    <tr style="height: 23px;">
        <td style="height: 135px;" rowspan="5">1958-1959-1960</td>
        <td style="height: 23px;">55 ans</td>
        <td style="height: 23px;">127</td>
        <td style="height: 23px;">107</td>
    </tr>
    <tr style="height: 23px;">
        <td style="height: 23px;">56 ans</td>
        <td style="height: 23px;">117</td>
        <td style="height: 23px;">97</td>
    </tr>
    <tr style="height: 23px;">
        <td style="height: 23px;">57 ans</td>
        <td style="height: 23px;">107</td>
        <td style="height: 23px;">87</td>
    </tr>
    <tr style="height: 23px;">
        <td style="height: 23px;">58 ans</td>
        <td style="height: 23px;">97</td>
        <td style="height: 23px;">77</td>
    </tr>
    <tr style="height: 43px;">
        <td style="height: 43px;">59 ans</td>
        <td style="height: 43px;">87</td>
        <td style="height: 43px;">67</td>
    </tr>
    <tr style="height: 23px;">
        <td style="height: 23px;" rowspan="5">1961-1962-1963</td>
        <td style="height: 23px;">55 ans</td>
        <td style="height: 23px;">128</td>
        <td style="height: 23px;">108</td>
    </tr>
    <tr style="height: 23px;">
        <td style="height: 23px;">56 ans</td>
        <td style="height: 23px;">118</td>
        <td style="height: 23px;">98</td>
    </tr>
    <tr style="height: 23px;">
        <td style="height: 23px;">57 ans</td>
        <td style="height: 23px;">108</td>
        <td style="height: 23px;">88</td>
    </tr>
    <tr style="height: 23px;">
        <td style="height: 23px;">58 ans</td>
        <td style="height: 23px;">98</td>
        <td style="height: 23px;">78</td>
    </tr>
    <tr style="height: 23px;">
        <td style="height: 23px;">59 ans</td>
        <td style="height: 23px;">88</td>
        <td style="height: 23px;">68</td>
    </tr>

    </tbody>
</table>

</fieldset>
<?php include('template/footer.php') ?>