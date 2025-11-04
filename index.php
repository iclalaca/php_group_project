<?php
session_start();
?>

<?php if(isset($_SESSION["user"])): ?>
    <p>Hoşgeldin, <?php echo $_SESSION["user"]["name"]; ?> 👋</p>
    <a href="logout.php">Çıkış Yap</a>
<?php else: ?>
    <a href="login.php">Giriş Yap</a>
    <a href="register.php">Kayıt Ol</a>
<?php endif; ?>