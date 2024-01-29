<?php
if (session_status() === PHP_SESSION_NONE){
    session_start();
}

$topic = $_SESSION['selected-topic'];

if ($_SERVER['REQUEST_METHOD'] === "POST"){
    $q = "";
}

 ?>

<?php include "header.php"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles.css">

</head>
<body>
<?php include dirname(__DIR__) . '/utils/queries.php'; ?>
<section id="form-quiz">
    <section id="form-container">
    <?php  // Display the current question
    $questionId = isset($_GET['question_id']) ? (int)$_GET['question_id'] : 1;

    if (isset($questions[$questionId]) && ($questions[$questionId]['topic'] === $topic)) {
        $questionId = $questions[$questionId]['id'];
        $question = $questions[$questionId]['question_text'];
        $options = array_slice($questions[$questionId], 2, 7);
        
        echo "<h2>Question $questionId:</h2>";
        echo "<p>$question</p>";

        echo '<form action="index.php" method="post">';
        echo '<input type="hidden" name="question_id" value="' . $questionId . '">';

        foreach ($options as $option) {
            echo '<label><input type="radio" name="answer" value="' . $option . '"> ' . $option . '</label><br>';
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


<!-- Array ( [id] => 1 [topic] => music [question_text] => Which category of musical instrument is reputed to be the oldest in the world? [answer-1] => strings [answer-2] => subtractive synthesis [answer-3] => wind instruments [answer-4] => drums [answer-5] => brass [correct] => answer-3 ) -->


<!-- (id, topic, question_text, answer-1, answer-2, answer-3, ..., correct)

(1, 'music', 'Which category of musical instrument is reputed to be the oldest in the world?', 'strings', 'subtractive synthesis', 'wind instruments', 'drums', 'brass', 'answer-3'),
(2, 'music', 'Which is the national musical instrument of Japan?', 'Sitar (a plucked instrument)', 'Kalimba ', 'Koto (a kind of zither)', 'Bodhran', 'Oboe', 'answer-3') -->