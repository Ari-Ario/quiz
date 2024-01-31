<?php
if (session_status() === PHP_SESSION_NONE){
    session_start();
}
include "includes/data-collector.php";
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
    <?php 
    include './includes/header.php';
    include './includes/topic-selection.php';
    include './includes/footer.php';
    ?>
    
    <script src="script.js"></script>
</body>
</html>