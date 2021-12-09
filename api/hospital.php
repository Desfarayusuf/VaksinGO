<?php

function createData($nama, $img, $alamat, $kuota)
{
    return [
        'nama' => $nama,
        'img' => $img,
        'alamat' => $alamat,
        'kuota' => $kuota,
    ];
}

$rumahsakit_1 = createData(
    "Rumah Sakit Nasional Diponegoro",
    'img/RSND.jpg',
    "Jl. Professor Haji Soedarto S.H, Tembalang, Kec. Tembalang, Kota Semarang, Jawa Tengah 50275",
    '178'
);

$rumahsakit_2 = createData(
    "Rumah Sakit Umum Pusat Dr. Kariadi Semarang",
    'img/RSK.jpg',
    "Jl. DR. Sutomo No.16, Randusari, Kec. Semarang Sel., Kota Semarang, Jawa Tengah 50244",
    '123'
);

$rumahsakit_3 = createData(
    "Rumah Sakit Umum William Booth",
    'img/RSUWB.jpg',
    "Alamat : Jl. Letnan Jenderal S. Parman No.5, Petompon, Kec. Gajahmungkur, Kota Semarang, Jawa Tengah 50237",
    '120'
);

$rumahsakit_4 = createData(
    "Rumah Sakit Permata Medika",
    'img/RSMP.jpg',
    "Jl. Raya Mr. Moch Ichsan No.93-97, Ngaliyan, Kec. Ngaliyan, Kota Semarang, Jawa Tengah 50181",
    '120'
);

$rumahsakit_5 = createData(
    "Rumah Sakit RS Telogorejo",
    'img/RST.jpg',
    "Jl. Kh Ahmad Dahlan, Pekunden, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50134",
    '120'
);

$allhospital = [

    $rumahsakit_1,
    $rumahsakit_2,
    $rumahsakit_3,
    $rumahsakit_4,
    $rumahsakit_5
];



$all_hospital = [
 
    'hospital' => $allhospital,
 
];

echo json_encode($all_hospital);
