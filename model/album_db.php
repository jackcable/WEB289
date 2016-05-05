
<?php

function get_albums_by_artist($artistID) {
  global $db;
  $albumID = NULL;
  $query = 
  ' SELECT * FROM albums
    WHERE albumID = :albumID
    ORDER BY albumID';
  $statement = $db->prepare($query);
  $statement->bindValue(':albumID', $albumID);
  $statement->execute();
  $albums = $statement->fetchAll();
  $statement->closeCursor();
  return $albums;
}

function get_albums($albumID) {
  global $db;
  $query = 
  ' SELECT * FROM albums
    WHERE albumID = :albumID';
  $statement = $db->prepare($query);
  $statement->bindValue(':albumID', $albumID);
  $statement->execute();
  $albums = $statement->fetch();
  $statement->closeCursor();
  return $albums;
}

function delete_album($albumID) {
  global $db;
  $query = 
  ' DELETE FROM albums
    WHERE albumID = :albumID';
  $statement = $db->prepare($query);
  $statement->bindValue(':albumID', $albumID);
  $statement->execute();
  $statement->closeCursor();
}

function add_album($albumID, $albumName, $albumYear) {
  global $db;
  $query = 
  ' INSERT INTO albums
      (albumID, albumName, albumYear)
    VALUES
      (NULL, :albumName, :albumYear)';
  $statement = $db->prepare($query);
  $statement->bindValue(':albumID', $albumID);
  $statement->bindValue(':albumName', $albumName);
  $statement->bindValue(':albumYear', $albumYear);
  $statement->execute();
  $statement->closeCursor();
}


?>