<?php
$matriks = array(
   array(1, 2, 3),
   array(4, 5, 6),
   array(7, 8, 9)
);

foreach ($matriks as $baris) {
    foreach ($baris as $nilai) {
        echo $nilai . " ";
    }
    echo "<br>";
}

echo "<p><strong><i>By Muhammad ilham</strong>";