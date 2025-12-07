<?php
session_start();

$passwordBenar = "ganteng123";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $pw = $_POST["pw"];

    if ($pw === $passwordBenar) {
        $_SESSION["login"] = true;
        header("Location: lihat.php");
        exit();
    } else {
        $salah = true;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>

<div class="box">
    <h1>🔐 Login Admin</h1>

    <?php if (!empty($salah)): ?>
        <p class="error">Password salah yaa 😭</p>
    <?php endif; ?>

    <form method="POST">
        <input type="password" name="pw" placeholder="Masukkan password..." required>
        <button type="submit">Masuk</button>
    </form>
</div>

</body>
</html>
