<?php
if (session_status() === PHP_SESSION_NONE){
    session_start();
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include_once './includes/header.php';
    include './includes/main.php';
    include './includes/footer.php' ?>
    
    <script src="script.js"></script>
</body>
</html>