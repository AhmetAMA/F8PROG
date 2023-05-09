<?php

$voornamen = array("Ahmet", "Abdi", "Ali", "Yusuf","Abdallah");

function zoek_naam($naam, $namen_array) {
    $index = array_search(strtolower($naam), array_map('strtolower', $namen_array));
    return $index !== false ? $index : -1;
}

$naam = "Ahmet";
$index = zoek_naam($naam, $voornamen);
echo "De naam $naam staat op positie $index in de array.\n";

$naam = "Abdi";
$index = zoek_naam($naam, $voornamen);
echo "De naam $naam staat op positie $index in de array.\n";

$naam = "Ali";
$index = zoek_naam($naam, $voornamen);
echo "De naam $naam staat op positie $index in de array.\n";

$naam = "Yusuf";
$index = zoek_naam($naam, $voornamen);
echo "De naam $naam staat op positie $index in de array.\n";

$naam = "Abdallah";
$index = zoek_naam($naam, $voornamen);
echo "De naam $naam staat op positie $index in de array.\n";

?>