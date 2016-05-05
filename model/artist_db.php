<?php
function get_artists_by_genre($genreID) {
  global $db;
  $query = 
  ' SELECT * FROM artists
    WHERE artistID = :genreID
    ORDER BY artistID';
  $statement = $db->prepare($query);
  $statement->bindValue(":genreID", $genreID);
  $statement->execute();
  $artists = $statement->fetchAll();
  $statement->closeCursor();
  return $artists;
}

function get_artist($artistID) {
  global $db;
  $query = 
  ' SELECT * FROM artists
    WHERE art_artistID = :artistID';
  $statement = $db->prepare($query);
  $statement->bindValue(":artistID", $artistID);
  $statement->execute();
  $artist = $statement->fetch();
  $statement->closeCursor();
  $artistName = $artist['art_artistName'];
  return $artistName;
}

function delete_artist($artistID) {
  global $db;
  $query = 
  ' DELETE FROM artists
    WHERE artistID = :artistID';
  $statement = $db->prepare($query);
  $statement->bindValue(':artistID', $artistID);
  $statement->execute();
  $statement->closeCursor();
}

function add_artist($artistID, $artistName) {
  global $db;
  $query = 
  ' INSERT INTO artists
      (artistID, artistName)
    VALUES
      (NULL, :artistName)';
  $statement = $db->prepare($query);
  $statement->bindValue(':artistID', $genreID);
  $statement->bindValue(':artistName', $artistName);
  $statement->execute();
  $statement->closeCursor();
}


?>