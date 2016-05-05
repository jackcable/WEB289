<?php
function add_member( $userName, $firstName, $lastName, $password, $email, $phone, $userlevel) {
    global $db;
    $password = hash('sha256', $password);
    $query = 
    'INSERT INTO users
            (userName, firstName, lastName, password, email, phone, userLevel )
        VALUES
            (:userName, :firstName, :lastName, :password, :email, :phone, :userLevel )';
    $statement = $db->prepare($query);
    $statement->bindValue(':userName', $userName);
    $statement->bindValue(':firstName', $firstName);
    $statement->bindValue(':lastName', $lastName);
    $statement->bindValue(':password', $password);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':phone', $phone);
    $statement->bindValue(':userLevel', $userlevel);  
    $statement->execute();
    $statement->closeCursor();
   
}

// check for existing member name
function detect_member_name($name){
	global $db;
	$query = 
    "   SELECT username 
        FROM users 
        WHERE username = '$name'";
	$stmt = $db->prepare($query);
	$stmt->execute();
		if($data = $stmt->fetch()){
			$error_message = "The username you entered is already in the database, please try another name.";
            include 'register.php';
		} else {
			return false;
		}
}

function get_comments($member_id) {
   
    global $db;
    $query = 'SELECT * FROM comments
              WHERE com_userID = :member_id';          
    $statement = $db->prepare($query);
    $statement->bindValue(':member_id', $member_id);
    $statement->execute();
    return $statement;    
}

function add_comments($com_userid, $comment_text) {
    global $db;
    $query = 
    '   INSERT INTO comments
            (com_commentID, com_userID, com_commentText)
        VALUES
            (NULL, :com_userid, :com_commentText)';
    $statement = $db->prepare($query);
    $statement->bindValue(':com_userid', $com_userid);
    $statement->bindValue(':com_commentText', $comment_text);
    $statement->execute();
    $statement->closeCursor();
}


?>
