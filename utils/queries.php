<?php
/*
    INCLUDE DATABASE CONNECTION
*/
include 'db.php';

/*
    SCHREIBE HIER DIE QUERIES
    Speichere diese immer in der Variable $queryString ab
    Bsp: SELECT * FROM books
*/

$queryString = "SELECT * FROM questions";



/*
    DATEN
    Hier kannst Du Platzhalter im Query mit Daten füllen
    Bsp: ':id' => 1
*/

$data = [];



/*
    DER QUERY WIRD AUSGEFÜHRT
    Die verschiedenen Schritte für PDO
*/

try{

    // überprüfe, ob Abfrage vorhanden ist
    if($queryString == ''){
        throw new \Exception('No querry written yet!');
    }

    // bereite die Abfrage vor
    $query = $dbConnection->prepare($queryString);

    // füge Daten für Platzhalter ein, falls vorhanden
    $query->execute($data);

    // überprüfe, ob Daten zurück gegeben werden
    if($query->rowCount() == 0) {
        throw new \Exception('Deine Abfrage gibt keine Daten zurück');
    }

    // alle Daten werden aus der DB geholt und in einem assoziativen Array gespeichert
    $questions = $query->fetchAll(PDO::FETCH_ASSOC);

    

} catch (PDOException $e) {
    die("Fehler: " . $e->getMessage());
}



