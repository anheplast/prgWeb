<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vestidos Verano</title>
    <link rel="stylesheet" href="<?= base_url('public/css/catRopa.css') ?>">


    <!-- Que no se repita el fondo -->
    <style>
        body {
            background-color: #ffffffaf;
            background-image: url('<?= base_url('public/img/summer.jpg') ?>');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 style="color:rgb(145, 4, 180)">Vestidos Verano</h1>
        <div class="gallery">
        <img src="<?= base_url('public/img/cat-vestidos/verano1.jpg') ?>" alt="vestido-verano">
        <img src="<?= base_url('public/img/cat-vestidos/verano2.jpg') ?>" alt="vestido-verano">
        <img src="<?= base_url('public/img/cat-vestidos/verano3.jpg') ?>" alt="vestido-verano">
    </div>
    <a href="<?= base_url('/vestidos') ?>" style="text-decoration: none; color: rgb(145, 4, 180); font-weight: bold; font-size: 18px; display: inline-block; margin-top: 20px;">
    ← Volver al Catálogo de Vestidos
    </a>
</body>
</html>
