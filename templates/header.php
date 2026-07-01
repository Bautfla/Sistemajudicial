<?php
// Evitamos iniciar sesión si ya se inició en el archivo principal
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema Judicial</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<?php if (isset($_SESSION['username'])): ?>
    <div class="header">
        <h2>Sistema Judicial</h2>
        <div>
            Hola, <?php echo htmlspecialchars($_SESSION['username']); ?> 
            | <a href="logout.php" style="color: white;">Salir</a>
        </div>
    </div>
<?php endif; ?>
