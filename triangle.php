<?php

// Triangle Upside Left
function upsideLeft($num = 5)
{
    echo "<pre>";
    for ($i = 0; $i < $num; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
    echo "</pre>";
}

// Triangle Downside Left
function downsideLeft($num = 5)
{
    echo "<pre>";
    for ($i = $num; $i > 0; $i--) {
        for ($j = 0; $j < $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
    echo "</pre>";
}

// Triangle Upside Right
function upsideRight($num = 5)
{
    echo "<pre>";
    for ($i = 0; $i < $num; $i++) {
        for ($k = $num; $k > $i + 1; $k--) {
            echo "  ";
        }
        for ($j = 0; $j <= $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
    echo "</pre>";
}

// Triangle Downside Right
function downsideRight($num = 5)
{
    echo "<pre>";
    for ($i = $num; $i > 0; $i--) {
        for ($k = $i; $k < $num; $k++) {
            echo "  ";
        }
        for ($j = 0; $j < $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
    echo "</pre>";
}


function choose()
{
    if (isset($_POST['submit'])) {
    }
}

function choice()
{


    if (isset($_POST['submit'])) {
        $choose =  $_POST['choose'];
        switch ($choose) {
            case 1:
                echo upsideLeft();
                break;
            case 2:
                echo downsideLeft();
                break;
            case 3:
                echo upsideRight();
                break;
            case 4:
                echo downsideRight();
                break;
            default:
                echo 'Silahkan Masukkan Pilihan Terlebih Dahulu';
        }
    }
};
