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
            <form action="/includes/form.php" method="post">
                <label for="select-subject">select a subject:</label>
                <select name="select-subject" id="select-subject">
                    <option value="music">Music</option>
                    <option value="film">FIlm</option>
                    <option value="animals">Animals</option>
                    <option value="astronautic">Astronautic</option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
                <br>
                <input id="start-btn" type="submit" value="Start Quiz">
            </form>
        </section>
    </section>
</section>