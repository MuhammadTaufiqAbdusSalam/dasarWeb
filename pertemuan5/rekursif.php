<?php
/*langkah1 
function tampilkanHaloDunia(){
    echo "Halo dunia! <br>";
    tampilkanHaloDunia();
}
tampilkanHaloDunia();
*/


/*langkah3
for ($i=1; $i <= 25; $i++){
    echo "Perulangan ke-{$i} <br>";
    }
*/


/*langkah4
function tampilkanAngka(int $jumlah, int $indeks = 1){
    echo "Perulangan ke-{$indeks} <br>";

    // Panggil diri sendiri selama $indeks <= $jumlah
    if ($indeks <= $jumlah) {
        tampilkanAngka($jumlah, $indeks + 1);
    }
}

tampilkanAngka(20);
*/


/*langkah 3-langkah 5 selanjutnya buatlah fungsi di atas menjadi rekursif 
dengan memanggil dirinya sendiri ketika suatu item dari menu memiliki
 attribut subMenu. Sehingga tampilanya menjadi seperti berikut*/
$menu = [
  [
    "nama" => "Beranda"
  ],
  [
    "nama" => "Berita",
    "subMenu" => [
      [
        "nama" => "Wisata",
        "subMenu" => [
          [
            "nama" => "Pantai"
          ],
          [
            "nama" => "Gunung"
          ]
        ]
      ],
      [
        "nama" => "Kuliner"
      ],
      [
        "nama" => "Hiburan"
      ]
    ]
  ],
  [
    "nama" => "Tentang"
  ],
  [
    "nama" => "Kontak"
  ],
];

function tampilkanMenuBertingkat(array $menu) {
    echo "<ul>";
    foreach ($menu as $key => $item) {
        echo "<li>{$item['nama']}";
        if (isset($item['subMenu'])) {
            tampilkanMenuBertingkat($item['subMenu']);
        }
        echo "</li>";
    }
    echo "</ul>";
}

tampilkanMenuBertingkat($menu);
?>