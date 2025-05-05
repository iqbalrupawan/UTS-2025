<?php
// Periksa apakah parameter 'nama' ada di URL
if (isset($_GET['nama'])) {
    $nama = htmlspecialchars($_GET['nama']); // Menghindari XSS
    echo "Halo, $nama!";
} else {
    echo "Halo, siapa namamu?";
    echo "iqbal rupawan";
}
?>