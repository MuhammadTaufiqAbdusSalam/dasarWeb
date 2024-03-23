<?php
/*kode program ini untuk menampilkan menu bertingkat dalam 
bentuk list HTML menggunakan fungsi rekursif. */
$menu = [
    [
        "nama" => "beranda"
    ],
    [
        "nama" => "berita",
        "subMenu" =>[
            [
                "nama" => "wisata",
                "submenu" => [
                    [
                        "nama" => "pantai"
                    ],
                    [
                        "nama" => "gunung"
                    ]
                ]
            ],
            [
                "nama" => "kuliner"
            ],
            [
                "nama" => "hiburan"
            ]
        ]
    ],
    [
        "nama" => "tentang"
    ],
    [
        "nama" => "kontak"
    ],
];

function tampilkanMenuBertingkat(array $menu){
    echo "<ul>";
    foreach($menu as $key => $item){
        echo "<li>{$item['nama']}</li>";
        if (!empty($item['subMenu'])) {
            tampilkanMenuBertingkat($item['subMenu']);
        }
        elseif (!empty($item['submenu'])) {
            tampilkanMenuBertingkat($item['submenu']);
        }
    }
    echo "</ul>";
}

tampilkanMenuBertingkat($menu);
?>