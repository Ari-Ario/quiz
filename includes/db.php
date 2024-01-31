<?php
    // Connection credentials for the database
    // You can find the credentials in docker-compose.yml
    $dbName = getenv('DB_NAME');
    $dbUser = getenv('DB_USER');
    $dbPassword = getenv('DB_PASSWORD');
    $dbHost = getenv('DB_HOST');

try {
    // Create a connection to the database
    $dbConnection = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8", $dbUser, $dbPassword);
    $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    die("Connection Error: " . $e->getMessage()); // display error message
}

// Query functions

function fetchQuestionIdSequence($topic, $questionNum, $dbConnection) {
    $query = "SELECT `id` FROM `questions` WHERE `topic` = '$topic' ORDER BY RAND() LIMIT $questionNum";
    // all data with 
    $sqlStatement = $dbConnection->query($query);
    $rows = $sqlStatement->fetchAll(PDO::FETCH_COLUMN, 0);
    return $rows;
}

?>