<?php
session_start();
include ("inclus/function.php");
include('template/header.php');


if(isset($_POST["submit"])){
    $AGE=intval($_POST["ann"]);
    $moi=intval($_POST["moi"]);
    $an=intval($_POST["annee"]);
    $ar=intval($_POST["anneeR"]);
    $_SESSION["anneeR"]=$ar;
    $_SESSION["moisR"]=intval($_POST["moisR"]);
    $_SESSION["age"]=$_POST["ann"];
    $_SESSION["mois"]=$_POST["moi"];
    $_SESSION["ageNaissance"]=$_POST["annee"];
    $_SESSION["moisNaissance"]=$_POST["mois"];
    $_SESSION["jourNaissance"]=$_POST["jour"];
    $age=ageLegalAuPlustot($_POST["jour"],$_POST["mois"],$_POST["annee"]);
    $_SESSION["ageLegalAuPlusTot"]=$age;
    $duree=calculerDuree($_POST["jour"],$_POST["mois"],$_POST["annee"]);
    $_SESSION["dureeDeTrimestrre"]=$duree;
    $ageAutoTotPlein=ageAutoTotPlein($_POST["jour"],$_POST["mois"],$_POST["annee"]);
    $_SESSION["ageAutoTotPlein"]=$ageAutoTotPlein;


    echo "<br/>";
    echo "age legal au plus tot ";
    print_r($age);
    echo "<br/>";
    echo "nombre de trimestre a cotise ";
    print_r($duree);
    echo"<br/>";
    echo "age d attribution automatique ";
    print_r($ageAutoTotPlein);
    echo "<br/>";
    echo "vous avez ";
    echo $_POST["ann"]." ans  ".$_POST["moi"]." mois";
    echo "<br/>";
    $_SESSION["contrainte"]="aucune";


    if($_POST["ann"]<$age["annee"]){
        $_SESSION["contrainte"]="pastout";
        echo "probleme";

    }

    if($_POST["ann"]==$age["annee"]){
        if($_POST["moi"]<$age["mois"]){
            echo "probleme";
            $_SESSION["contrainte"]="pastout";


        }
    }




    redirect_to("nombreTrimestre.php");





}
?>
<fieldset>
    <form  action="index.php" method="post">
        <div class="form-group">
            <p><strong>Date de naissance :</strong></p>
            <div>
                <label for="jour">Jour :</label><br />
                <input class="form-control" type="number"  min="1" max="31" id="jour" name="jour"><br />

                <label for="mois">Mois :</label><br />
                <input class="form-control" type="number" id="mois"  min="1" max="12" name="mois"><br />

                <label for="annee">annee:</label><br />
                <input class="form-control" type="number" id="jour"  min="1900" max="2019" name="annee"><br/><br/>
            </div>

            <div>
                <label for="ann">Votre âge (années) :</label><br />
                <input class="form-control" type="number"   id="ann" name="ann"><br/>

                <label for="moi">Votre âge (mois) :</label><br />
                <input class="form-control" type="number" id="moi"   name="moi"><br/><br/>
            </div>

            <p><strong>Départ en retraite :</strong></p>

            <div>
                <label for="jour">Jour :</label><br />
                <input class="form-control" type="number"  min="1" max="31" id="jour" name="jourR"><br />

                <label for="mois">Mois :</label><br />
                <input class="form-control" type="number" id="mois"  min="1" max="12" name="moisR"><br />

                <label for="annee">Année :</label><br />
                <input class="form-control" type="number" id="jour"  min="1900" max="2100" name="anneeR"><br />
            </div>

            <button class="btn btn-primary" type="submit"  name="submit" class="btn btn-success btn-block">
                <i class="fas fa-check"> Valider</i>
            </button>
        </div>
    </form>
</fieldset>
<?php include('template/footer.php') ?>