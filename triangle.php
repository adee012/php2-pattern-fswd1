<?php

// Triangle Upside Left
function upsideLeft($num=5){
    echo "<pre>";
    for ($i = 0; $i < $num; $i++){
        for($j = 0; $j <= $i; $j++ ){
            echo "* ";
        }
        echo "<br>";
    }
    echo "</pre>";
}

// Triangle Downside Left
function downsideLeft($num=5){
    echo "<pre>";
    for ($i = $num; $i > 0 ; $i--){
        for($j = 0; $j < $i; $j++ ){
            echo "* ";
        }
        echo "<br>";
    }
    echo "</pre>";
}

// Triangle Upside Right
function upsideRight($num=5){
    echo "<pre>";
    for ($i = 0; $i < $num; $i++){
        for($k = $num; $k > $i+1; $k-- ){
            echo "  ";
        }
        for($j = 0; $j <= $i; $j++ ){
            echo "* ";
        }
        echo "<br>";
    }
    echo "</pre>";
}

// Triangle Downside Right
function downsideRight($num=5){
    echo "<pre>";
    for ($i = $num; $i > 0; $i--){
        for($k = $i; $k < $num; $k++ ){
            echo "  ";
        }
        for($j = 0; $j < $i; $j++ ){
            echo "* ";
        }
        echo "<br>";
    }
    echo "</pre>";
}


function choose(){
    if(isset($_POST['submit'])){
        
    }
}
?>