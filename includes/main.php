<?php
if (session_status() === PHP_SESSION_NONE){
    session_start();
}
 ?>

<section id="main">
    <section id="main-content">

        <section id="man-bubble">
            <div class="head-bubble">
                <div class="thought-bubble">
                    <div class="text">QUIZ?!</div>
            </div>
            <!-- <section id="thinking-man">
                <img id="thinking" src="/photos/thinking.png" alt="image">
            </section>
        </section> -->

        <section id="form-main-page">
            <form action="/includes/select.php" method="POST">
                <label for="selected-topic">select a topic:</label>
                <select name="selected-topic" id="selected-topic">
                    <option value="music">Music</option>
                    <option value="film">FIlm</option>
                    <option value="animals">Animals</option>
                    <option value="astronautic">Astronautic</option>
                    <option value="1"></option>
                    <option value="2"></option>
                    <option value="4"></option>
                    <option value="5"></option>
                    <option value="6"></option>
                    <option value="7"></option>
                </select>
                <br>
                <input type="submit" id="start-btn" value="Start Quiz">
            </form>
        </section>
    </section>
</section>