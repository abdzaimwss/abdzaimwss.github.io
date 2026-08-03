<?php
$minuman = "cimory";

if ($minuman == "Ades"){
    $harga = 2000; 
}
else if ($minuman == "nobo"){
    $harga = 3500;
}
else if ($minuman == "cimory"){
    $harga = 7500;
}
else if ($minuman == "Aqua"){
    $harga = 3000;
}

$jumlah = 2;
$total_bayar = $harga * $jumlah;
echo "total_pembayaran=" . $total_bayar;
?>