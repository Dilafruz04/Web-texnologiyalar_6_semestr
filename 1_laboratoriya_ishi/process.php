<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kurs_nomi = $_POST["kurs_nomi"];
    $kurs_turi = $_POST["kurs_turi"];
    $kurs_boshlanish = $_POST["kurs_boshlanish"];
    $kurs_davomiylik = $_POST["kurs_davomiylik"];
    $kurs_narxi = $_POST["kurs_narxi"];
    if (!is_numeric($kurs_narxi)) {
        echo "❌ Kurs narxi son bo‘lishi kerak!";
        exit;
    }
    echo "<h3>Yuborilgan ma'lumotlar:</h3>";
    echo "Kurs nomi: " . htmlspecialchars($kurs_nomi) . "<br>";
    echo "Kurs turi: " . htmlspecialchars($kurs_turi) . "<br>";
    echo "Boshlanish sanasi: " . htmlspecialchars($kurs_boshlanish) . "<br>";
    echo "Davomiyligi: " . htmlspecialchars($kurs_davomiylik) . " oy<br>";
    echo "Narxi: " . htmlspecialchars($kurs_narxi) . " so'm<br>";
}
?>

