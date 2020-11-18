<?php

$mahasiswa = [
    [
        "nama" => "Asep Moh Aripin",
        "nrp" => "183040118",
        "email" => "aripin.183040118@unpas.ac.id"
    ],
    [
        "nama" => "Erik Doank",
        "nrp" => "023040001",
        "email" => "erik@gmail.com"
    ]
];

$data = json_encode($mahasiswa);
echo $data;

?>