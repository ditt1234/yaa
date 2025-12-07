<?php
$passwordBenar = "ganteng123";

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: password.php");
    exit();
}

$teks = file_get_contents("jawaban.txt");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jawaban Masuk</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>

<div class="box">
    <h1>📬 Jawaban Masuk</h1>

    <?php
    $baris = explode("\n\n", trim($teks));
    echo "<table>";

    echo "<tr>
            <th>Waktu</th>
            <th>Jawaban</th>
          </tr>";

    foreach ($baris as $b) {
        if (trim($b) === "") continue;

        preg_match('/\[(.*?)\] - (.*)/', $b, $m);

        echo "<tr>
                <td>{$m[1]}</td>
                <td>{$m[2]}</td>
              </tr>";
    }

    echo "</table>";
    ?>
</div>

</body>
</html>
