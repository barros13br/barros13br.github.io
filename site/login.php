<?php
// Simulação de login com um usuário fixo
$username = $_POST['username'];
$password = $_POST['password'];

// Substitua isso com uma verificação de banco de dados no futuro
if ($username == "student" && $password == "password123") {
    header("Location: dashboard.html");
    exit();
} else {
    echo "<script>alert('Invalid credentials. Try again.'); window.location.href = 'index.html';</script>";
}
?>
