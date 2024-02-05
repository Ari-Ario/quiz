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
<!-- <?php include "header.php"; ?> -->
<section id="form-quiz">
    <section id="form-container">
    <?php
    if (isset($quiz['questionIdSequence'])){
        $id = $quiz['questionIdSequence'][$currentQuestionIndex];
    }
    $question = questionRequest($id, $dbConnection);
?>
    <form action="<?php echo $actionUrl; ?>" method="post">
        <h1><?php echo $question['question_text'] ?></h1>
        <?php
        // show the answers and compare them with the correct answers
        // prettyPrint($question);
        $correct = $question['correct'];
        $pattern = "/\s*,\s*/";
        $correctItems = preg_split($pattern, $correct);

/*         foreach ($correctItems as $ $) {
            $
        } */

        // a flag for multiple-choice / Checkbox and/or single-choice / radio
        if (count($correctItems )> 1) $multipleChoice = true;
        else $multipleChoice = false;
        for ($i = 1; $i <=5; $i++){
            $answerColumnName = "answer_" . $i;
            if (isset($question[$answerColumnName]) && !empty($question[$answerColumnName])) {
                $answerText = $question[$answerColumnName];

                if (in_array($i, $correctItems, true)) $value = 1;
                else $value = 0;
                echo "<section id='form-check'>\n";
                if ($multipleChoice) {
                    echo "<input type='checkbox' name='$answerColumnName' id='$answerColumnName' value='$value'>\n";
                } else{
                    echo "<input type='radio' name='single-choice' id='$answerColumnName' value='$value'>\n";
                }
                echo "<label class='form-check-label' for='$answerColumnName'> $answerText</label>\n";
                echo "</section>";
            }
        }
        ?>
        <input type="hidden" name="questionNum" id="questionNum" value="<?php echo $quiz['questionNum']; ?>">
        <input type="hidden" name="lastQuestionIndex" id="lastQuestionIndex" value="<?php echo $currentQuestionIndex;?>">
        <input type="hidden" name="multipleChoice" id="multipleChoice" value="<?php echo $multipleChoice ? 'true': 'flase';?>"> 
        <input type="hidden" name="indexStep" id="indexStep" value="1">

        <!-- Validation of question -->
        <p id="validation-warning" class="warning"></p>

        <button type="submit" class="btn btn-primary" style="position:fixed;">Next</button>
        <p class="spacer"></p>

    </form>
    </section>
</section>

<?php include "footer.php" ?>
<script src="../script.js"></script>

</body>
</html>