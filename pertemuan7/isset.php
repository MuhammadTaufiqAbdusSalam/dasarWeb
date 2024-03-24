<?php
/*kode program ini digunakan untuk melakukan pengecekan terhadap 
variabel dan elemen dalam array, dan mencetak pesan yang sesuai 
tergantung pada hasil pengecekan tersebut. */
$umur;
if(isset($umur)&&$umur<=18){
    echo "Anda sudah dewasa";
}else{
    echo "Anda belum dewasa atau variabel'umur' tidak ditemukan.";
    
}

$data = array("nama"=>"Jane","usia"=>25);
if (isset($data["nama"])){
    echo "nama : ". $data["nama"];
}else{
    echo "Variabel 'nama' tidak ditemukan dalam array.";
}
?>