<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// if (isset($_SESSION['topic'])) {$_SESSION['topic'] = $_POST['topic'];}
include "db.php";

if (isset($_POST['quiz'])) $quiz =$_SESSION['quiz'];
else $quiz = NULL;

if (isset($_POST['lastQuestionIndex'])) {
    $lastQuestionIndex = intval($_POST['lastQuestionIndex']);
} else {
    $lastQuestionIndex = -1;
}

// the name of the sites is saved inside global variable:
$scriptName = $_SERVER['SCRIPT_NAME'];

if (str_contains($scriptName, 'index')){
    session_unset();
    $quiz = NULL;
}
else if (str_contains($scriptName, 'question')){
    if ($quiz === NULL){
        $questionNum = intval($_POST['questionNum']);
        $questionIdSequence = fetchQuestionIdSequence($_POST['topic'], $questionNum, $dbConnection);
        
        // break the code if the number of questions more than the selected numbers are -- TODO Warning in index

        if ($questionNum > count($questionIdSequence)){
            $questionNum = count($questionIdSequence);
        } else {
            $numberErr= "Maximum questions about this topic are: $questionNum";
        }


        // collecting the data 
        $quiz = array(
            $topic = $_POST['topic'],
            "questionNum" => $questionNum,
            "lastQuestionIndex" => $lastQuestionIndex,
            "currentQuestionIndex" => -1,
            "questionIdSequence" => $questionIdSequence);
        $_SESSION['quiz'] = $quiz;
    }
}

// repeat the form, in case of finished number of questions redirect it to report 
$currentQuestionIndex= $lastQuestionIndex+1;
if ($currentQuestionIndex >= $questionNum-1){
    $actionUrl = "/includes/report.php";

}
else {
    $actionUrl = "/includes/question.php";

}
