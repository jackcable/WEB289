<?php

function get_artist() {
    global $db;
    $query = 'SELECT * FROM artists
              ORDER BY artistName';
    try {
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    } catch (PDOException $e) {
        display_db_error($e->getMessage());
    }
}
?>

