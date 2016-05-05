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
    case 'list_artist':
    session_start();
        $genreID = filter_input(INPUT_GET, 'genreID', FILTER_VALIDATE_INT);    
        if ($genreID == NULL || $genreID == FALSE) { 
            $genreID = get_first_row();
        }
        $genres = get_genres();
        $genreDescription = get_genres_description($genreID);
        $artists = get_artists_by_genre($genreID);
        include('artist_list.php');
        break;
       
    default:
        $error = 'OOPS! Sorry, We have an error.';
        include'../errors/error.php';
        break;
}
?>