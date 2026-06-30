<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Biblioteca</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<nav>
    <div class="logo">📚 Biblioteca Web</div>
    <div>
        <?php if(isset($_SESSION['usuario'])): ?>
            <span style="margin-right: 15px;">Hola, <strong><?php echo htmlspecialchars($_SESSION['nombre']); ?></strong> (<?php echo htmlspecialchars($_SESSION['rol']); ?>)</span>
            <a href="index.php">Inicio</a>
            <a href="libros.php">Libros</a>
            
            <?php if($_SESSION['rol'] === 'ADMIN'): ?>
                <a href="prestamos.php">Préstamos</a>
                <a href="admin_dashboard.php" style="background-color: #e67e22; color: white; padding: 0.3rem 0.7rem; border-radius: 4px; font-weight: bold;">⚙️ Panel Admin</a>
                <?php endif; ?>
            
            <a href="logout.php" class="btn btn-danger" style="padding: 0.3rem 0.7rem;">Salir</a>
        <?php endif; ?>
    </div>
</nav>
<div class="container">