<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Wisata</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
function curl($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$send = curl("http://localhost:8080/rekayasaweb/pertemuan2/skripgetwisata.php");
$data = json_decode($send, TRUE);

echo "<table>";
echo "<tr>
        <th>Kota</th>
        <th>Landmark</th>
        <th>Tarif</th>
      </tr>";
foreach($data as $row){
    echo "<tr>";
    echo "<td>".$row["kota"]."</td>";
    echo "<td>".$row["landmark"]."</td>";
    echo "<td>".$row["tarif"]."</td>";
    echo "</tr>";
}
echo "</table>";
?>

</body>
</html>
