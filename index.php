<?php
// Funkcija koja provjerava je li broj prost
function jeProst($broj) {
    if ($broj <= 1) {
        return false; // Brojevi manji ili jednaki 1 nisu prosti
    }
    for ($i = 2; $i <= sqrt($broj); $i++) {
        if ($broj % $i == 0) {
            return false; // Ako je djeljiv s bilo kojim brojem osim 1 i sebe, nije prost
        }
    }
    return true;
}

// Ispis svih prostih brojeva manjih od 100
echo "Prosti brojevi manji od 100 su: <br>";
for ($i = 2; $i < 100; $i++) {
    if (jeProst($i)) {
        echo $i . " ";
    }
}
?>
