
<?php
// if (session_status() === PHP_SESSION_NONE){
//     session_start();
// }

 ?>

<link rel="stylesheet" href="../styles.css">
<?php include "header.php";
include dirname(__DIR__) . '/utils/queries.php'; ?>

<section id="form-quiz">
    <section id="form-container">
        <form action="" method="post">
        <input type="hidden" id="question-id" name="id" value="1">
        <input type="submit" value="Next" onsubmit="incrementId()">
        </form>
    </section>
</section>

<?php include "footer.php" ?>
<script src="../script.js"></script>