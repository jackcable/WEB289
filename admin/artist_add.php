<?php 
require_once('../util/valid_admin.php');
include( '../view/admin_header.php');
?>
<div class="mainWrapper">

        <div class="error">
          <?php if(!empty($error)) { echo $error; } ?>
        </div> 

            <!-- Allow the administrator to add artists -->
            <h2>Add Artists</h2>
                <form action="." method="post" class="formInput">
                    <input type="hidden" name="action" value="add_artist">
                    <label for="genre">Genre Name:</label>
                <select name="genre_id">
                    <?php foreach ($genres as $genre) : ?>
                    <option value="<?php echo $genre['gen_genreID']; ?>" id="genre"><?php echo $genre['gen_genreDescription']; ?>
                    </option> 
                    <?php endforeach; ?>
                </select><br>
                    <label for="artist">Artist Name:</label>
                    <input type="text" name="artist" id="artist"><br>        
                    <input class="button" type="submit" value="Add Artist" /><br>
                </form>

              <!-- Allow the administrator to add albums -->
            <h2>Add Album</h2>
                <form action="." method="post" class="formInput">
                    <input type="hidden" name="action" value="add_artist">
                    <label for="album">Artist Name:</label>
                <select name="artistID">
                    <?php foreach ($albums as $album) : ?>
                    <option value="<?php echo $album['alb_albumID']; ?>" id="artist"><?php echo $artist['art_artistName']; ?>
                    </option> 
                    <?php endforeach; ?>
                </select><br>
                    <label for="album">Album Name:</label>
                    <input type="text" name="album" id="album"><br>        
                    <input class="button" type="submit" value="Add Album" /><br>
                </form>

                 <!-- Allow the administrator to add songs -->
            <h2>Add Songs</h2>
                <form action="." method="post" class="formInput">
                    <input type="hidden" name="action" value="add_song">
                    <label for="album">Album Name:</label>
                <select name="albumID">
                    <?php foreach ($songs as $song) : ?>
                    <option value="<?php echo $song['son_songID']; ?>" id="song"><?php echo $album['son_songName']; ?>
                    </option> 
                    <?php endforeach; ?>
                </select><br>
                    <label for="song">Song Name:</label>
                    <input type="text" name="song" id="song"><br>        
                    <input class="button" type="submit" value="Add song" /><br>
                </form>
</div><!-- end main content --> 

<?php include '../view/footer.php'; ?>