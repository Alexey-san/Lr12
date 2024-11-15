<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $namecard = htmlspecialchars($_POST["namecard"]);
    $cardnumber = htmlspecialchars($_POST["cardnumber"]);
    $securitycode = htmlspecialchars($_POST["securitycode"]);
    $month = htmlspecialchars($_POST["month"]);
    $year = htmlspecialchars($_POST["year"]);
    $firstName = htmlspecialchars($_POST["firstName"]);
    $lastname = htmlspecialchars($_POST["lastName"]);
    $billingAddress = htmlspecialchars($_POST["billingAddress"]);
    $city = htmlspecialchars($_POST["city"]);
    $zip = htmlspecialchars($_POST["zip"]);
    $country = htmlspecialchars($_POST["country"]);

    echo "<h2>Дані форми:</h2>";
    echo "Ім'я на картці: $namecard<br>";
    echo "Номер картки: $cardnumber<br>";
    echo "CVC: $securitycode<br>";
    echo "Місяць: $month<br>";
    echo "Рік: $year<br>";
    echo "Ім'я: $firstName<br>";
    echo "Прізвище: $lastname<br>";
    echo "Адреса: $billingAddress<br>";
    echo "Місто: $city<br>";
    echo "Індекс: $zip<br>";
    echo "Країна: $country<br>";
} else {
    echo "Дані не були передані коректно.";
}
?>