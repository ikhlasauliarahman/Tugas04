<?php

function perhitunganSederhana(int $angkatan, int $semester)
{
    $hasil = $angkatan * $semester;
    if ($hasil % 3 === 0){
        return "Habis dibagi tiga";
    } else {
        return "Tidak habis dibagi tiga";
    }
}

echo perhitunganSederhana(2021, 1);

?>