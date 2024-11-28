<?php
function menampilkan() {
    echo "ini adalah function";
}
 menampilkan();
function tampilkanPembuka() {
    echo "Selamat datang di program PHP sederhana!";
}


function tampilkanMotivasi() {
    echo "Jangan pernah menyerah, setiap langkah penuh harapan pasti akan terwujud jika memiliki keinginan";
}


function tampilkanPenutup() {
    echo "Terima kasih sudah membaca motivasinya ayoo semangat jalani hari. Sampai jumpa!";
}


tampilkanPembuka();
tampilkanMotivasi();
tampilkanPenutup();
 function hitungLuasPersegiPanjang($panjang, $lebar) {
    return $panjang * $lebar;
}

$panjang = 10;
$lebar = 5;

$luas = hitungLuasPersegiPanjang($panjang, $lebar);

echo "Luas persegi panjang dengan panjang $panjang dan lebar $lebar adalah $luas";

?>
