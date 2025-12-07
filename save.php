\\<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jawaban = trim($_POST["jawaban"]);
    $waktu = date("Y-m-d H:i:s");

    $data = "[$waktu] - $jawaban\n\n";
    file_put_contents("jawaban.txt", $data, FILE_APPEND);

    echo "success";
}
?>
