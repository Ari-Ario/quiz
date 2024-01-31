<?php
if (session_status() === PHP_SESSION_NONE){
    session_start();
}
 ?>

<section id="main">
    <section id="main-content">

        <section id="man-bubble">
            <section class="head-bubble">
                <section class="thought-bubble">
                    <section class="text">QUIZ?!</section>
            </section>

        <section id="form-main-page">
            <form action="/includes/question.php" method="POST">
                <label for="topic">Select a topic:</label>
                <select name="topic" id="topic">
                    <option value="tech">Technic</option>
                    <option value="cinems">Cinema</option>
                    <option value="animals">Animals</option>
                    <option value="astronomy">astronomy</option>
                    <option value="geography">Geography</option>
                </select>
                <br>
                <label for="questionNum"># of questions:</label>
                <input type="number" name="questionNum" id="questionNum" value="10">
                <br>
                <input type="hidden" name="lastQuestionId" value="-1">
                <input type="hidden" name="IndexStep" value="1">
                <input type="submit" id="start-btn" value="Start Quiz">
            </form>
        </section>
    </section>
</section>