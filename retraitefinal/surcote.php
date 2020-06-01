<?php
session_start();
include ("inclus/function.php");
include('template/header.php');

if(isset($_POST["submit"])) {
    echo "<br/>";
    echo "on est bien ici";
    echo "<br/>";


    echo "taux  : ".$_SESSION["taux"]."<br/>";
    $pension = $_SESSION["sam"] * ($_SESSION["taux"] / 100) * $_SESSION["ratio"];

    $pension=$pension/12;
    $_SESSION["pension"]=$pension;
    echo" <br/> pension ".$pension." <br/>";
   // $pension=1375;
    $_SESSION["bonus"]=0;

   // echo "pension avant surcote et enfant ".$pension;
    if ($_SESSION["nbtri"]>$_SESSION["dureeDeTrimestrre"] ) {
        echo "<br/>";
        echo "on est bien ici 2";
        echo "<br/>";
        echo "<br/>";

/*
        echo "vous toucherez une pension de " . $pension;
        echo "<br/>";
        echo " nb trimestre cotise ".$_SESSION["nbtri"]." et a cotise ".$_SESSION["dureeDeTrimestrre"]." et en plus".($_SESSION["nbtri"]-$_SESSION["dureeDeTrimestrre"]);
*/

        $bon = 1.25 * ($_SESSION["nbtri"] - $_SESSION["dureeDeTrimestrre"]);

        echo "bon bon".$bon;
        echo "<br/>";
        $bon=$bon/100;
        if($bon>0) {
            $_SESSION["bonus"] = $bon;
        }else{
            $_SESSION["bonus"]=0;
        }
      //  $pension = $pension + ($pension * $bon);
        echo "<br/>";

        echo " bonus " . $bon." et ".$pension;
        echo "<br/>";

    }
    echo "<br/>";
    $_SESSION["bonus2"]="non";

    if ($_POST["nb"] == "oui") {
        echo "vous avez âu moins trois enfant";
        $_SESSION["bonus2"]="oui";

       // $pension=$pension*1.1;
        echo "<br/>";
        echo "pension ".$pension;

    }


    if($_SESSION["totplein"] && $pension<636.56){
        $pension=636.56;
        if($_SESSION["nbtri"]>=120){
            $pension=697.68;
        }
    }


    echo "<br/>";


   // echo "vous toucherez une pension de " . $pension;


    echo "bonus ".$_SESSION["bonus"];
    redirect_to("pension.php");
}
?>
<fieldset>

    <i>Possibilite de majoration de la pension ?</i><br /><br />

    <form  action="surcote.php" method="post">
        <div class="form-group">


            <strong>Avez vous au moins 3 enfants ?</strong>
            <div>
                <input class="form-check-input" type="radio" id="nb" name="nb" value="oui"
                       checked>
                <label for="nb">Oui</label><br />


                <input class="form-check-input" type="radio" id="nbb" name="nb" value="non"
                       >
                <label for="nbb">Non</label>
            </div><br />

            <button class="btn btn-primary" type="submit"  name="submit" class="btn btn-success btn-block">
                <i class="fas fa-check"> Valider</i>
            </button>
        </div>
    </form>


</fieldset>
<?php include('template/footer.php') ?>