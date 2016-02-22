<html>
<?php
require('model/database.php');

$query = 'SELECT * FROM artists
            ORDER BY artistName'; 
$statement = $db->prepare($query);
$statement->execute(); 
$artists = $statement->fetchAll();
$statement->closeCursor();
?>

<?php foreach ($artists as $artist) : ?>
<tr>
    <td><?php echo $artist['artistID']; ?></td></br>
    <td><?php echo $artist['artistName']; ?></td></br>
</tr>
<?php endforeach; ?>
</html>