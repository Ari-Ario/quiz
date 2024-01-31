<?php
if (session_status() === PHP_SESSION_NONE){
    session_start();
}

include "data-collector.php";
$_SESSION['topic'] = $_POST['topic'];
$questionArray = Array();
foreach ($questionIdSequence as $el) {
    $question = questionRequest($el, $dbConnection);
    array_push($questionArray ,$question);
}
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
<section id="form-quiz">
    <section id="form-container">
    <?php
    // https://www.w3schools.com/php/php_form_required.asp

    // function to validate the input in case of a hacking input
    // function test_input($data) {
    //     $data = trim($data);
    //     $data = stripslashes($data);
    //     $data = htmlspecialchars($data);
    //     return $data;
    //   }

    $id = isset($_POST['lastQuestionId']) ? (int)$_POST['lastQuestionId'] : 0;
    if ($_SERVER['REQUEST_METHOD'] === "POST"){
        $id++;
    }

    if (isset($questionArray[$id][0]) && ($questionArray[$id][0]['topic'] === $_SESSION['topic'])) {
        $questionId = $questionArray[$id][0]['id'];
        $question = $questionArray[$id][0]['question_text'];
        $options = array_slice($questionArray[$id][0], 3, 5);
        $questionNumber= $id +1;
        echo "<h2>Question $questionNumber:</h2>";
        echo "<h3>$question</h3>";

        echo '<form action="question.php" method="post">';
        echo '<input type="hidden" name="id" value="' . $id . '">';

        foreach ($options as $option) {
            if ($option != ""){echo '<label><input type="radio" name="answer" value="' . $option . '"> ' . $option . '</label><br>';}
        }

        echo '<button type="submit">Submit Answer</button>';
        echo '</form>';
    } else {
        echo "<p>Invalid question ID.</p>";
    }
    ?>
    </section>
</section>

<?php include "footer.php" ?>
<script src="../script.js"></script>

</body>
</html>