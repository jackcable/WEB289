<?php 
include'../view/admin_header.php'; 
require_once('../util/valid_admin.php');


?>
<main>
    <p>You are logged in as <?php echo $_SESSION['admin']; ?>.</p>
    <h1>Add Artist</h1>
    <form action="index.php" method="post" id="add_artist_form">
        <input type="hidden" name="action" value="add_artist">

        <label>Artist:</label>
        <select name="genreID">
        <?php foreach ( $genres as $genre) : ?>
            <option value="<?php echo $genre['genreID']; ?>">
                <?php echo $genre['genreDescription']; ?>
            </option>
        <?php endforeach; ?>
        </select>
        <br>

        <label>Artist Name:</label>
        <input type="text" name="artistName" />
        <br>

        <label>&nbsp;</label>
        <input type="submit" value="Add artist" />
        <br>
    </form>
    <p class="last_paragraph">
        <a href="index.php?action=list_artists">View Artist List</a>
    </p>

    <form action="" method="post">
        <input type="hidden" name="action" value="logout">
        <input type="submit" value="Logout">
    </form>
    

</main>
<?php include '../view/footer.php'; ?>