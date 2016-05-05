<?php
require('../model/database_db.php');
require('../model/artist_db.php');
require('../model/genre_db.php');
require('../model/album_db.php');
require('../model/song_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_genres';
    }
}  

switch ($action) {
    case 'list_genres':
    session_start();
        $genre_id = filter_input(INPUT_GET, 'genre_id', FILTER_VALIDATE_INT);    
        if ($genre_id == NULL || $genre_id == FALSE) { 
            $genre_id = get_first_row();
        }

        $genres = get_genre();
        $genre_name = get_genre_name($genre_id);
        $artists = get_artists_by_genre($genre_id);
        include('artist_list.php');
        break;

    case'list_artists':
    $genre_id = filter_input(INPUT_GET, 'genre_id', FILTER_VALIDATE_INT);
    $artist_id = filter_input(INPUT_POST, 'artist_id', FILTER_VALIDATE_INT);
    
    if ($genre_id == NULL || $genre_id == FALSE) {
      $genre_id = 1;
    }
    if ($artist_id == NULl || $artist_id == FALSE) {
      $artist_id = 1;
    }
    $genre_name = get_genre_name($genre_id);
    $genres = get_genre();
    $artists = get_artists_by_genre($genre_id);
    $imagepaths = get_imagepath($artist_id);
    header('Location: .?action=list_artists');
    break;

    case'list_albums':
    $artist_id = filter_input(INPUT_GET, 'artist_id', FILTER_VALIDATE_INT);
    $album_id = filter_input(INPUT_POST, 'album_id', FILTER_VALIDATE_INT);
    
    if ($artist_id == NULL || $artist_id == FALSE) {
      $artist_id = 1;
    }
    if ($album_id == NULl || $album_id == FALSE) {
      $album_id = 1;
    }
    $artist_name = get_artist_name($artist_id);
    $artists = get_artist();
    $albums = get_albums_by_artist($artist_id);
    $imagepaths = get_imagepath($artist_id);
    header('Location: .?action=list_artists');
    break;
}
?>