<?php

// 1
function mafonction(){
    return true;
}

// 2
function mafonction2($text){
    return $text;
}

// 3
function mafonction3($text1, $text2){
    return $text1 . $text2;
}

// 4
function mafonction4($nb1, $nb2){
    if ($nb1 > $nb2){
        echo "Le premier nombre est plus grand.";
    }
    else if ($nb1 < $nb2){
        echo "Le premier nombre est plus petit.";
    }
    else {
        echo "Les deux nombres sont identiques.";
    }
}

// 5
function mafonction5 ($text5, $nb5){
    return $text5 . $nb5;
}

// 6
function mafonction6($nom, $prenom, $age){
    echo "Bonjour " . $nom . " " . $prenom . ", tu as " . $age . " ans.";
}

// 8
function mafonction8($nb1, $nb2, $nb3){
    echo ($nb1 + $nb2 + $nb3);
}

?>