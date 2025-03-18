<?php

//class persegi panjang
class PersegiPanjang {
    public $panjang;
    public $lebar;

    //kalkulator persegi panjang
    function __construct($panjang, $lebar){
        $this->panjang = $panjang;
        $this->lebar = $lebar;
}

    //method untuk menghitung luas persegi panjang
    function hitungLuas(){
    $luasPP = $this->panjang * $this->lebar;
    return $luasPP;
}

    //method untuk menghitung keliling persegi panjang
    function getkeliling(){
        $kelilingPP = 2 * ($this->panjang + $this->lebar);
        return $kelilingPP;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Persegi Panjang</h1>

        <?php
        $pp = new PersegiPanjang (5, 6);

        echo "Panjang : $pp->panjang <br>";
        echo "Lebar : $pp->lebar <br>";
        echo '<hr>';
        echo "Luas = " .$pp->getluas(). "<br>";
        echo "Keliling = " .$pp->getkeliling(). "<br>";
        ?>
    </div>
</body>
</html>