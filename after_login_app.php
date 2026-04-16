<?php
define("VALID_USERNAME", "Puspita Ikasari");
define("VALID_PASSWORD", "123456");

function isValidLogin($username, $password){
    return $username === VALID_USERNAME && $password === VALID_PASSWORD;
}

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$success = isValidLogin($username, $password);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Login</title>
    <style>
        body {
            font-family: Arial;
            background: linear-gradient(135deg, #43cea2, #185a9d);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .result-box {
            background: white;
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        .success {
            color: green;
            font-size: 20px;
        }

        .fail {
            color: red;
            font-size: 20px;
        }

        a {
            display: inline-block;
            margin-top: 15px;
            text-decoration: none;
            color: #667eea;
        }
    </style>
</head>
<body>

<div class="result-box">
    <?php if($success): ?>
        <p class="success">Login Berhasil 🎉</p>
    <?php else: ?>
        <p class="fail">Login Gagal ❌</p>
    <?php endif; ?>

    <a href="index.html">Kembali</a>
</div>

</body>
</html>
