<?php
if (session_status() === PHP_SESSION_NONE){
    session_start();
}
include dirname(__DIR__) . "/utils/db.php";
$topic = $_SESSION['selected-topic'];
$queryString = "SELECT * FROM questions WHERE topic = '$topic'";
?>
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
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id = isset($_POST['id']) ? (int)$_POST['id'] : 0;
        $userAnswer = isset($_POST['id']) ? (int)$_POST['id'] : null;

        //validation
        if (isset($questions[$id])) {
            $_SESSION['quiz_result'][$id] = $userAnswer;
            $nextQuestionId = $id +1;

            if (isset($questions[$nextQuestionId])){
                header("location: ./form.php?id=$nextQuestionId");
                exit();
            } else {
                $_SESSION['quiz_completed'] = true;
                header("location: form.php");
                exit();
            }
        }
    }

    // Display the current question
    $id = isset($_GET['id']) ? (int)$_GET['id'] : 1;

    if (isset($questions[$id]) && ($questions[$id]['topic'] === $topic)) {
        $id = $questions[$id]['id'];
        $question = $questions[$id]['question_text'];
        $options = array_slice($questions[$id], 3, 5);
        
        echo "<h2>Question $id:</h2>";
        echo "<p>$question</p>";

        echo '<form action="form.php" method="post">';
        echo '<input type="hidden" name="id" value="' . $id . '">';

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