<?php
if (session_status() === PHP_SESSION_NONE){
    session_start();
}

// topic is recorded into the session here
if (isset($_POST['selected-topic'])) {
    $_SESSION['selected-topic'] = $_POST['selected-topic'];
    $topic = $_SESSION['selected-topic'];
}

include dirname(__DIR__) . "/utils/db.php";
$topic = $_SESSION['selected-topic'];
$queryString = "SELECT * FROM questions WHERE topic = '$topic'";
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
<?php include dirname(__DIR__) . '/utils/queries.php'; ?>
<section id="form-quiz">
    <section id="form-container">
    <?php

    //check if a question is submited
    $questionArray = Array();
    foreach ($questions as $Key => $Value){
        if ($Value['topic'] === $_SESSION['selected-topic']){
            array_push($questionArray);
        }
    }
    print_r($questionArray);


    // Display the current question TODO-----------------------------------------------------------------------

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