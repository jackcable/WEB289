<?php
require('../model/database_db.php');
require('../model/artist_db.php');
require('../model/genres_db.php');


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_genres';
    }
}  

switch ($action) {
    case 'list_albums':
    session_start();
        $artistID = filter_input(INPUT_GET, 'artistID', FILTER_VALIDATE_INT);    
        if ($artistID == NULL || $artistID == FALSE) { 
            $artistID = get_first_row();
        }
        $artists = get_artists();
        $artistName = get_artist_name($artistID);
        $albums = get_albums_by_artist($artistID);
        include('album_list.php');
        break;
       
    default:
        $error = 'OOPS! Sorry, We have an error.';
        include'../errors/error.php';
        break;
}
?>