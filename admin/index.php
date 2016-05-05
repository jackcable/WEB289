<?php
session_start();

require('../model/database_db.php');
require('../model/genre_db.php');
require('../model/member_db.php');
require('../model/admin_db.php');
require('../model/artist_db.php');
require('../model/song_db.php');
require('../model/album_db.php');

$action = filter_input(INPUT_POST, 'action');
  if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
      $action = 'list_genres';
    }
 }


switch($action) {
 	case 'view_login':
 		include'../login/';
 		break;
 	case'list_genres':
 		$genre_id = filter_input(INPUT_GET, 'genre_id', FILTER_VALIDATE_INT);
    /*$artistID = filter_input(INPUT_GET, 'artistID', FILTER_VALIDATE_INT);  
    $albumID = filter_input(INPUT_GET, 'albumID', FILTER_VALIDATE_INT); */

    if ($genre_id == NULL || $genre_id == FALSE) {
      $genre_id = get_first_row();
    } 

    $genres = get_genre();
    $genre_name = get_genre_name($genre_id);
    $artists = get_artists_by_genre($genre_id);
    include('genres_list.php');
    break;

 	case'add_genre':
 		$genreDescription = filter_input(INPUT_POST, 'gen_genreDescription');

    $genreID = filter_input(INPUT_GET, 'genreID', FILTER_VALIDATE_INT);   

    if ($genreID == NULL || $genreID == FALSE) {
      $genreID = get_first_row();
    }
    $genres = get_genre();
    $genre_name = get_genre_name($genreID);
    $artists = get_artists_by_genre($genreID);

    //Validate inputs
    if ($genre_name == NULL) {
      $error = "The genre cannot be empty, Please check genre and try again.";
      include'genres_list.php';

    } else if(detect_genre_name($genre_name) == false){
      add_genre($genre_name);
      header('Location: .?action=list_genres');  // display the Genre List page
    
    } else {
      $error = 'genre is already used';
      include'genres_list.php';

    }
 	    break;

 	case'delete_genre':
 	$genre_id = filter_input(INPUT_POST, 'genre_id', FILTER_VALIDATE_INT);
 	delete_genre($genre_id);
        header('Location: .?action=list_genres');      // display the Genre List page
 	 break;

 	case'update_genre':
 	$genreID = filter_input(INPUT_POST, 'genreID', FILTER_VALIDATE_INT);
        $genre_name = filter_input(INPUT_POST, 'genreDescription');
        update_genres($genreID, $genre_name);
        header('Location: .?action=list_genres');
        break;

  case'list_aritsts':
    $genreID = filter_input(INPUT_GET, 'genreID', FILTER_VALIDATE_INT);
    $artistID = filter_input(INPUT_POST, 'artistID', FILTER_VALIDATE_INT);
    
    if ($genreID == NULL || $genreID == FALSE) {
      $genreID = 1;
    }
    if ($artistID == NULL || $artistID == FALSE) {
      $artistID = 1;
    }
    $genreDescription = get_genreDescription($genreID);
    $genres = get_genres();
    $artists = get_artists_by_genres($genreID);
    header('Location: .?action=list_genres');
    break;

 case'delete_artist':
 	$artistID = filter_input(INPUT_POST, 'artistID', FILTER_VALIDATE_INT);   
 	$genreID = filter_input(INPUT_POST, 'genreID', FILTER_VALIDATE_INT);
            
    if ($genreID == NULL || $genreID == FALSE || $artistID == NULL || $artistID == FALSE) {    
      $error = "Missing or incorrect artist id or genre id.";
    } else { 
      delete_artist($artistID);
      header("Location: .?genreID=$genreID");
    }
    break;

 	case'show_add_form':
            $genres = get_genre();
            include('artist_add.php'); 
            break;

 	case'add_artist':
 		$genreID = filter_input(INPUT_POST, 'genreID', FILTER_VALIDATE_INT);    
                $artistName = filter_input(INPUT_POST, 'artistName');


    if ($genreID == NULL || $genreID == FALSE || $artistName == NULL || $artistName == FALSE) {
      $error = "Invalid artist data. Check all fields and try again.";
      $genres = get_genres();
      header('Location: .?action=show_add_form');

  	} else { 
      add_artist($genreID, $artistName);
      header('Location: .?action=list_genres'); 
    }
    break;

  case'add_album':
      $artistID = filter_input(INPUT_POST, 'artistID', FILTER_VALIDATE_INT);    
      $albumName = filter_input(INPUT_POST, 'albumName');


    if ($artistID == NULL || $artistID == FALSE || $albumName == NULL || $albumName == FALSE) {
      $error = "Invalid album data. Check all fields and try again.";
      $genres = get_genres();
      header('Location: .?action=show_add_form');

    } else { 
      add_album($artistID, $albumName);
      header('Location: .?action=list_genres'); 
    }
    break;

    case'add_song':
      $albumID = filter_input(INPUT_POST, 'albumID', FILTER_VALIDATE_INT);    
      $songName = filter_input(INPUT_POST, 'songName');


    if ($albumID == NULL || $albumID == FALSE || $songName == NULL || $songName == FALSE) {
      $error = "Invalid song data. Check all fields and try again.";
      $genres = get_genres();
      header('Location: .?action=show_add_form');

    } else { 
      add_song($albumID, $songName);
      header('Location: .?action=list_genres'); 
    }
    break;

 	case'view_comments':
 		$comments = comment_data();
 		include'comment_menu.php';
 		break;

 	case'delete_comment':
 		$comment_id = filter_input(INPUT_POST, 'comment_id', FILTER_VALIDATE_INT);
 		delete_comments($comment_id);
 		header('Location: .?action=view_comments');
 	  break;

 	case'add_comment':
 		$com_userid = 2;
 		$comment_text = filter_input(INPUT_POST, 'comment_text');
 		add_comments($com_userid, $comment_text);
 		header('Location: .?action=view_comments');
 	  break;

  case'search':
    $name = filter_input(INPUT_POST, 'search_names');
    $ids = find_userID_by_name($name);
    if(!empty($ids)){
      $comment_text = search_comments($ids);
      include'search_results.php';
    } else {
      $message = $name . " Name is not in the database";
      include'search_results.php';
    }
    break;

 	case'logout':
 		unset($_SESSION['admin']);
    header('Location: ../../index.php');
    break;

  default:
 		$error =  'Unknown Admin action: ' . $action;
 		include'../errors/error.php';	
		break;
 }
