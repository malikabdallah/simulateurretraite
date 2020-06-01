<?php
session_start();
include ("inclus/function.php");
include('template/header.php');

if(!isset($_POST["submit"])) {

    echo "<br/>";

/*    if ($_SESSION["totplein"] == "vrai") {
        echo "vous avez tot plein";
    } else {
        echo "vous avez pas tot plein";
    }*/
}else{
    $val=$_POST["sam"];
    $_SESSION["sam"]=$val;
    redirect_to("surcote.php");
}
?>

<fieldset>

    <?php echo " PENSION =               SAM     *    TAUX           *              (trimestrecotise / trimestre à cotiser)"; ?>

    <form  action="sam.php" method="post">
        <div class="form-group">
            <?php

            if($_SESSION["taux"]>50){
                $_SESSION["taux"]=50;
            }

            if($_SESSION["taux"]<37.5){
                $_SESSION["taux"]=37.5;
            }
            ?>
            <br/>
            Pension = SAM :<br />
            <input class="form-control" type="number" name="sam" />    * <?php echo ". ".$_SESSION["taux"] ;?> * 
            <?php
                     $ratio=($_SESSION["nbtri"]/$_SESSION["dureeDeTrimestrre"]);
                     if($ratio>1){
                         $ratio=1;
                     }
                     if($_SESSION["totplein"]=="vrai"){
                         //echo "tot plein";
                         $ratio=1;
                     }
                    echo $ratio;
                    $_SESSION["ratio"]=$ratio;
                    echo "<br/>";
            ?><br />

            <button class="btn btn-primary" type="submit"  name="submit" class="btn btn-success btn-block">
                <i class="fas fa-check"> Valider</i>
            </button>
        </div>
    </form>
</fieldset>

<script>
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();
    if(dd<10){
        dd='0'+dd
    }
    if(mm<10){
        mm='0'+mm
    }

    today = yyyy+'-'+mm+'-'+dd;
    document.getElementById("start").setAttribute("max", today);
    document.getElementById("start").setAttribute("value", today);
</script>
<?php include('template/footer.php') ?>