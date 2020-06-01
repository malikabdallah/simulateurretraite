<?php



function agelegalauplusot($date){

}




function diffAnnee($anneeNaissance,$anneeretraite){

    $an=intval($anneeNaissance);
    $ar=intval($anneeretraite);


    return $ar-$an;


}


function calculerDuree($jour,$mois,$annee){

    switch ($annee){
        case 1952:
            return 164;
            break;
        case 1953:
            return 165;
            break;
        case 1954:
            return 165;
            break;



    }

    if($annee>1954 && $annee<1958){
        return 166;
    }
    if($annee>1957 && $annee<1961){
        return 167;
    }


    if($annee>1960 && $annee<1964){
        return 168;
    }


    if($annee>1963 && $annee<1967){
        return 169;
    }

    if($annee>1966 && $annee<1970){
        return 170;
    }

    if($annee>1969 && $annee<1973){
        return 171;
    }

    if($annee>=1973){
        return 172;
    }


    if($annee<1952){
       return 163;
    }
    return null;

}






function ageAutoTotPlein($jour,$mois,$annee){


    switch ($annee) {
        case 1952:
            $array = array(
                "annee" => "65",
                "mois" => "9",
            );
            return $array;
            break;
        case 1953:
            $array = array(
                "annee" => "66",
                "mois" => "2",
            );
            return $array;

            break;
        case 1954:
            $array = array(
                "annee" => "66",
                "mois" => "7",
            );
            return $array;

            break;


        default:
            if($annee>1954){
                $array = array(
                    "annee" => "67",
                    "mois" => "0",
                );
                return $array;
            }else{
                if($mois>6){
                    $array = array(
                        "annee" => "65",
                        "mois" => "4",
                    );
                    return $array;
                }else{
                    $array = array(
                        "annee" => "65",
                        "mois" => "0",
                    );
                    return $array;
                }
            }

    }

}




function ageLegalAuPlustot($jour,$mois,$annee){

    switch ($annee) {
        case 1952:
            $array = array(
                "annee" => "60",
                "mois" => "9",
            );
            return $array;
            break;
        case 1953:
            $array = array(
                "annee" => "61",
                "mois" => "2",
            );
            return $array;

            break;
        case 1954:
            $array = array(
                "annee" => "61",
                "mois" => "7",
            );
            return $array;

            break;


        default:
            if($annee>1954){
                $array = array(
                    "annee" => "62",
                    "mois" => "0",
                );
                return $array;
            }else{
                if($mois>6){
                    $array = array(
                        "annee" => "60",
                        "mois" => "4",
                    );
                    return $array;
                }else{
                    $array = array(
                        "annee" => "60",
                        "mois" => "0",
                    );
                    return $array;
                }
            }

    }

}

function diffMois($moisNaissance,$moisRetraite){

    $an=intval($moisNaissance);
    $ar=intval($moisRetraite);


    return $ar-$an;


}





function calculermois($jour,$mois,$annee){


    $dat= date("Y");
    $an=intval ($dat);

    $dif=$an-$annee;

    $m=date("m");


    $m=intval($m);

    $diff=$m-intval($mois);
    if($diff<0){
        $dif-=1;
        $nbMois=12-$diff;
        return $nbMois;
    }else{
        return $diff;
    }


}




function calculerAnnee($jour,$mois,$annee){


    $dat= date("Y");
    $an=intval ($dat);

    $dif=$an-$annee;

    $m=date("m");


    $m=intval($m);

    $diff=$m-intval($mois);
    if($diff<0){
        $dif-=1;
        $nbMois=12-$diff;
    }else{
    }

    return $dif;
}



function cbtrimestretotplein($annee,$mois,$agetotplein){
    $anneetotplei=$agetotplein["annee"];
    $moistotplein=$agetotplein["mois"];






    $nb=($anneetotplei-$annee)*4;
    echo "<br/>";
    echo "<br/>";


    $x=0;
    if($anneetotplei==$annee){
        if($mois>=1 && $mois<3){
            $x=0;
        }else if($mois>=3 && $mois<6){
            $x=1;
        }else if($mois>=6 && $mois<9){
            $x=2;
        }else if($mois>=9 && $mois<12){
            $x=3;
        }else{
            $x=4;
        }

        if($agetotplein["mois"]==0){
            return $x;
        }
        switch ($agetotplein["mois"]){
            case 4:
                return 1-$x;
                break;
            case  9 :
                return 2-$x;
                break;
            case 2:
                return 0;
                break;
            case 7:
                return 2-$x;
                break;

        }

    }


    $nb=($anneetotplei-$annee)*4;


    if($mois>=1 && $mois<3){
        $x=0;
    }else if($mois>=3 && $mois<6){
        $x=1;
    }else if($mois>=6 && $mois<9){
        $x=2;
    }else if($mois>=9 && $mois<12){
        $x=3;
    }else{
        $x=4;
    }



    $zed=0;
    switch ($agetotplein["mois"]){
        case 4:
            $zed=1-$x;
            break;
        case  9 :
            $zed= 2-$x;
            break;
        case 2:
            $zed= 0;
            break;
        case 7:
            $zed= 2-$x;
            break;

    }


    $nb=$nb+$zed;

    return $nb;


}



function nbtrimestremanquant($nbCotise,$nbRequis){
    return $nbRequis-$nbCotise;
}





function redirect_to($location){
    header("Location:".$location);
    exit;
}




?>