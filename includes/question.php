<?php
if (session_status() === PHP_SESSION_NONE){
    session_start();
}

include "db.php";

if (isset($_POST['quiz'])) $quiz =$_SESSION['quiz'];
else $quiz = NULL;

if (isset($_POST['lastQuestionIndex'])) {
    $lastQuestionIndex = intval($_POST['lastQuestionIndex']);
} else {
    $lastQuestionIndex = -1;
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

    if (isset($questions[$id]) && ($questions[$id]['topic'] === $topic)) {
        $id = $questions[$id]['id'];
        $question = $questions[$id]['question_text'];
        $options = array_slice($questions[$id], 3, 5);
        
        echo "<h2>Question $id:</h2>";
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