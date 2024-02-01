<?php
if (session_status() === PHP_SESSION_NONE){
    session_start();
}

include "data-collector.php";
?>

<!DOCTYPE html>
<html lan="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
<?php include "header.php"; ?>
<section id="form-quiz">
    <section id="form-container">
    <?php
    if (isset($quiz['questionIdSequence'])){
        $id = $quiz['questionIdSequence'][$currentQuestionIndex];
    }
    $question = questionRequest($id, $dbConnection);
    
    // https://www.w3schools.com/php/php_form_required.asp

    // function to validate the input in case of a hacking input
    // function test_input($data) {
    //     $data = trim($data);
    //     $data = stripslashes($data);
    //     $data = htmlspecialchars($data);
    //     return $data;
    //   }
?>
    <form action="<?php echo $actionUrl; ?>" method="post">
        <h1><?php echo $question['question_text'] ?></h1>
        <?php
        $correct = $question["correct"];
        for ($i = 1; $i <=5; $i++){
            $answerColumnName = "answer_" . $i;
            if (isset($question[$answerColumnName]) && !empty($question[$answerColumnName])) {
                $answerText = $question[$answerColumnName];
                if ($correct === $question[$answerColumnName]) $value = 1;
                else $value = 0;
                echo "<section id='form-check'>
                <input type='radio' name='single-choice' id='$answerColumnName' value='$value'>
                <label for='$answerColumnName'> $answerText</label>
                </section>";
            }
        }
        ?>
        <input type="submit" value="Next">

    </form>
    </section>
</section>

<?php include "footer.php" ?>
<script src="../script.js"></script>

</body>
</html>