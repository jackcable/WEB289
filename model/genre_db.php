<?php
function get_genre() {
    global $db;
    $query = 
    ' SELECT * FROM genres
      ORDER BY genreID';          
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;     
}

function get_genre_name($genreID) {
    global $db;
    $query = 
    ' SELECT * FROM genres
      WHERE genreID = :genreID';    
    $statement = $db->prepare($query);
    $statement->bindValue(':genreID', $genreID);
    $statement->execute();    
    $genre = $statement->fetch();
    $statement->closeCursor();    
    $genreDescription = $genre['genreName'];
    return $genreDescription;
}

function add_genre($genre_name){
	global $db;
	$query = 
  ' INSERT INTO genres
      (genreID, genreName)
    VALUES
      (null, :genreName)';
    $statement = $db->prepare($query);
    $statement->bindValue(':genreName', $genre_name);
    $statement->execute();
    $statement->closeCursor();
}

function delete_genre($genreID) {
    global $db;
    $query = 
    ' DELETE FROM genres
      WHERE genreID = :genreID';
    $statement = $db->prepare($query);
    $statement->bindValue(':genreID', $genreID);
    $statement->execute();
    $statement->closeCursor();
}

  function detect_genre_name($genreName){
  	global $db;
  	$query = 
    ' SELECT genreDescription 
      FROM genres
      WHERE genreName = :genreName'; 	
    $statement = $db->prepare($query);
    $statement->bindValue(':genreName', $genreName);
  	$statement->execute();
    $testValue = $statement->fetch();
    $statement->closeCursor();
    return $testValue;
}

function update_genre($genreID, $genreName) {
    global $db;
    $query = 
    ' UPDATE genres 
      SET genreName = :genreName 
      WHERE genreID = :genreID';
    $statement = $db->prepare($query);
    $statement->bindValue(':genreName', $genreName);
    $statement->bindValue(':genreID', $genreID);
    $statement->execute();
    $statement->closeCursor();
}

function get_first_row(){
  global $db;
  $query = 
  ' SELECT genreID
    FROM genres
    LIMIT 1';
  $statement = $db->prepare($query);
  $statement->execute();
  $genres = $statement->fetchAll();
  $statement->closeCursor();
  foreach($genres as $genre){ 
  return $genre['genreID'];
  }
}

?>