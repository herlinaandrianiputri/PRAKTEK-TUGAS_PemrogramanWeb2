<?php
echo "looping menggunakan for : </br>";
for ($i = 1; $i <= 25; $i++) {
    echo "<li>Bilangan ke-$i</li>";
}

echo "</br>";
echo "looping menggunakan while";
$i = 1;
while ($i <= 25) {
    echo "<li>Bilangan ke- $i</li>";
    $i++;
}

?>