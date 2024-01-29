<?php
if (session_status() === PHP_SESSION_NONE){
    session_start();
}
if ($_SERVER['REQUEST_METHOD'] === "POST"){
    $_SESSION['selected-topic'] = $_POST['selected-topic'];
    $selectedTopic = $_SESSION['selected-topic'];
    if (isset($selectedTopic) && $selectedTopic != ''){
        // print_r($_SESSION);
        header('location: /includes/form.php');
    }
}
 ?>