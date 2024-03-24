<?php
/*kode ini membuat sebuah array kosong dengan 
menggunakan $myArray = array();. Kemudian, kode tersebut 
menggunakan fungsi empty() untuk memeriksa apakah array tersebut kosong atau tidak terdefinisi. */
$myArray = array();
if (empty($myArray)){
    echo "Array tidak terdefinisi atau kosong.";
}else{
    echo "Array terdefinisi dan tidak kosong.";
}
/* ode ini memeriksa sebuah variabel yang tidak terdefinisi, 
yaitu $nonExistentVar. Jika variabel tersebut tidak terdefinisi 
atau kosong, maka akan dicetak pesan "Variabel tidak terdefinisi atau kosong.*/
if(empty($nonExistentVar)){
    echo "Variabel tidak terdefinisi atau kosong.";
}else{
    echo "Variabel terdefinisi dan tidak kosong.";
}
?>