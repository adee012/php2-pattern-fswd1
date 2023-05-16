<?php
require 'Animal.php';
require 'triangle.php';
require 'Kucing.php';
require 'Anjing.php';
?>

<section style="display: flex; justify-content:space-between; padding:50px">
    <div class="form-pyramid">
        <form method="post">
            <label>
                <h3>Pilih yang akan ditampilkan</h3>
                <p>Pilih 1 untuk menampilkan Pyramid Upside Left</p>
                <p>Pilih 2 untuk menampilkan Pyramid Downside Left</p>
                <p>Pilih 3 untuk menampilkan Pyramid Upside Right</p>
                <p>Pilih 4 untuk menampilkan Pyramid Downside Right</p>
            </label> <br>
            <input type="text" name="choose" placeholder="Masukkan pilihan 1 - 4" style="width:15rem; height:2rem">

            <button name="submit" style="width:5rem; height:2rem">Submit</button>
        </form>
        <?= choice(); ?>
    </div>

    <div class="pbo">
        <h3>Ini Untuk PBO</h3>
        <?php
        $animal = new Animals("Harimau", "Karnivora");
        echo $animal->getInfo();
        echo "<br>";
        echo "<br>";

        $cat = new Cat("Kitty");
        echo $cat->getInfo();
        echo "<br>";
        echo "<br>";

        $dog = new Dog("Buddy");
        echo $dog->getInfo();


        ?>

    </div>

    <div class="kosong"></div>
</section>