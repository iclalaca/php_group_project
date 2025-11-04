<?php
require "inc/db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO users (name,email,password_hash) VALUES (?,?,?)");
    $stmt->execute([$name, $email, $password]);

    header("Location: login.php");
    exit;
}
?>

<form method="POST">
  <input name="name" placeholder="Name">
  <input name="email" placeholder="Email">
  <input type="password" name="password" placeholder="Password">
  <button type="submit">Register</button>
</form>