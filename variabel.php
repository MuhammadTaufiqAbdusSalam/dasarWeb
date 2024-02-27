<?php
$name="fauzan";
$alamat="malang";
define("GAJI", 500000000);
define("nomorrumah", 19);

echo $name;
echo "<br>";
echo GAJI;
echo "<br>";
echo nomorrumah;
echo "<br>";
echo "$name bergaji rp. GAJI";
echo "<br>";
echo "$name bergaji rp. " .GAJI;
echo "<hr>";
echo "nama saya : $name";
echo "<br>";
echo "alamat rumah saya : ".$alamat;
echo "<br>";
echo "$name $alamat";
echo "<br>";
echo $name .$alamat;
echo "<hr>";
unset($name);
echo " ini memakai unset $name ";
echo $nama;


?>