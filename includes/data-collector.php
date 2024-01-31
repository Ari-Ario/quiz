<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include "db.php";

if (isset($_POST['quiz'])) $quiz =$_SESSION['quiz'];
else $quiz = NULL;

if (isset($_POST['lastQuestionId'])) {
    $lastQuestionIndex = intval($_POST['lastQuestionId']);
} else {
    $lastQuestionIndex = -1;
}

if ($quiz === NULL){
    $questionNum = intval($_POST['questionNum']);
    $questionIdSequence = fetchQuestionIdSequence($_POST['topic'], $questionNum, $dbConnection);
}
