<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $ism     = htmlspecialchars(trim($_POST["ism"] ?? ""));
    $email   = htmlspecialchars(trim($_POST["email"] ?? ""));
    $telefon = htmlspecialchars(trim($_POST["telefon"] ?? ""));
    $mavzu   = htmlspecialchars(trim($_POST["mavzu"] ?? ""));
    $xabar   = htmlspecialchars(trim($_POST["xabar"] ?? ""));

    if (empty($ism) || empty($email) || empty($telefon) || empty($mavzu) || empty($xabar)) {
        echo "<p style='color:red; font-weight:bold'>Barcha maydonlarni to'ldiring!</p>";
        exit;
    }

    echo "<h3 style='color:#2E7D32'>Xabar qabul qilindi!</h3>";
    echo "<p><strong>Ism:</strong> " . $ism . "</p>";
    echo "<p><strong>Email:</strong> " . $email . "</p>";
    echo "<p><strong>Telefon:</strong> " . $telefon . "</p>";
    echo "<p><strong>Mavzu:</strong> " . $mavzu . "</p>";
    echo "<p><strong>Xabar:</strong><br>" . nl2br($xabar) . "</p>";
    echo "<p style='font-size:0.9em; color:#555; margin-top:15px;'>Yuborilgan vaqt: " . date("d.m.Y H:i") . "</p>";

} else {
    echo "<p style='color:red'>Noto'g'ri so'rov!</p>";
}
?>
