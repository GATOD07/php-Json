<?php
// ====== PHP Array ke JSON (Encode) ======
$data = [
    "id" => 7,
    "nama" => "BimaAnjasSaputra",
    "umur" => 22,
    "agama" => "Islam",
    "pekerjaan" => "Karyawan Swasta",
    "status" => "Belum Menikah"
];

echo "<h3>PHP Array ke JSON</h3>";
$json = json_encode($data, JSON_PRETTY_PRINT);
echo "<pre>$json</pre>";


// ====== JSON ke PHP Object (Decode) ======
echo "<h3>JSON ke PHP Object</h3>";
$obj = json_decode($json);
echo "ID: " . $obj->id . "<br>";
echo "Nama: " . $obj->nama . "<br>";
echo "Umur: " . $obj->umur . "<br>";
echo "Agama: " . $obj->agama . "<br>";
echo "Pekerjaan: " . $obj->pekerjaan . "<br>";
echo "Status: " . $obj->status . "<br>";


// ====== JSON ke PHP Array (Decode) ======
echo "<h3>JSON ke PHP Array</h3>";
$arr = json_decode($json, true);
echo "ID: " . $arr['id'] . "<br>";
echo "Nama: " . $arr['nama'] . "<br>";
echo "Umur: " . $arr['umur'] . "<br>";
echo "Agama: " . $arr['agama'] . "<br>";
echo "Pekerjaan: " . $arr['pekerjaan'] . "<br>";
echo "Status: " . $arr['status'] . "<br>";
?>
