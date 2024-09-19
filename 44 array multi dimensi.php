<?php
// membuat array 2 dimensi yang berisi array asosiatif
$artikel = [
    [
        "judul" => "Belajar PHP & MySQL untuk Pemula",
        "penulis" => "ilham"
    ],
    [
        "judul" => "Tutorial PHP dari Nol hingga Mahir",
        "penulis" => "ilham"
    ],
    [
        "judul" => "Membuat Aplikasi Web dengan PHP",
        "penulis" => "ilham"
    ]
];

// menampilkan array
foreach($artikel as $post){
    echo "<h2>".$post["judul"]."</h2>";
    echo "<p>".$post["penulis"]."<p>";
    echo "<hr>";
}

echo "<p><strong>By muhammad ilham</strong>";