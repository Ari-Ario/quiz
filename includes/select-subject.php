<?php
// if (session_status() === PHP_SESSION_NONE){
//     session_start();
// }
if ($_SERVER['REQUEST_METHOD'] === "POST"){
    $_SESSION['selected-subject'] = $_POST['select-subject'];
    $selectedSubject = $_SESSION['selected-subject'];
    if (isset($selectedSubject) && $selectedSubject != ''){
        header('location: /form.php');
    }
}
 ?>