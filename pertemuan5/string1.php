<?php
/*langkah1 */
$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit.
Voluptatem reprehenderit nobis veritatis commodi fugiat molestias
impedit unde ipsum voluptatum, corrupti minus sit excepturi nostrum
quisquam? Quos impedit eum nulla optio.";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";
echo "Panjang kata: " . str_word_count($loremIpsum) . "<br>";

echo "<p>" . strtoupper($loremIpsum) . "</p>";//fungsi strtoupper(). Dalam hal ini, semua huruf dalam teks diubah menjadi huruf kapital.
echo "<p>" . strtolower($loremIpsum) . "</p>";//fungsi strtolower(). Dalam hal ini, semua huruf dalam teks diubah menjadi huruf kecil.
?>
