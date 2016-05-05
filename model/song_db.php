<?php
function get_songs_by_album($albumID) {
  global $db;
  $songID = NULL;
  $query = 
  ' SELECT * FROM songs
    WHERE songID = :songID
    ORDER BY songID';
  $statement = $db->prepare($query);
  $statement->bindValue(":songID", $songID);
  $statement->execute();
  $songs = $statement->fetchAll();
  $statement->closeCursor();
  return $songs;
}

function get_songs($songID) {
  global $db;
  $query = 
  ' SELECT * FROM songs
    WHERE songID = :songID';
  $statement = $db->prepare($query);
  $statement->bindValue(":songID", $songID);
  $statement->execute();
  $songs = $statement->fetch();
  $statement->closeCursor();
  return $songs;
}

function delete_song($songID) {
  global $db;
  $query = 
  ' DELETE FROM songs
    WHERE songID = :songID';
  $statement = $db->prepare($query);
  $statement->bindValue(':songID', $songID);
  $statement->execute();
  $statement->closeCursor();
}

function add_song($songID, $songName, $artisID) {
  global $db;
  $query = 
  ' INSERT INTO songs
      (songID, songName, artistID)
    VALUES
      (NULL, :songName, :albumID)';
  $statement = $db->prepare($query);
  $statement->bindValue(':songID', $songID);
  $statement->bindValue(':songName', $songName);
  $statement->bindValue(':artistID', $artistID);
  $statement->execute();
  $statement->closeCursor();
}


?>