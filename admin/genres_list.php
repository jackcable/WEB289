<?php 
require_once('../util/valid_admin.php');
include'../view/admin_header.php';
?>
<div class="mainWrapper">


                <!-- display any errors -->
                <div class="error">
                    <?php if(!empty($error)){
                        echo $error;
                    } ?>
                </div>
                <div class="mainFormInput">
                <h1>Administrator Home</h1>
                <!-- allow the administrator to add a genre-->
                <h2>Add Genre</h2>
                <form class="mainFormInput" id="add_genre_form"action="index.php" method="post">
                    <input type="hidden" name="action" value="add_genre" >
                    <label for="genre_name">Genre Name:</label>
                    <input type="text" name="gen_name" id="genre_name"><br>
                    <input class="button" type="submit" value="Add genre">
                </form>
     
                <!-- display the genre list in a table format-->
                <h2>Genres List</h2>
                <div class="mainFormInput">
                <table class="adminTable1">
                    <thead>
                        <tr>
                            <th>Genre</th>
                            <th>&nbsp;</th>
                        </tr>
                            <?php foreach ($genres as $genre) : ?>
                    </thead>
                    
                        <tr>
                            <td><a class="button" href=".?genre_id=<?php echo $genre['genreID']; ?>"><?php echo $genre['genreName']; ?></a></td>
                           
                            <td>
                                <form action="index.php" method="post">
                                    <input type="hidden" name="action" value="delete_genre" />
                                    <input type="hidden" name="genre_id" value="<?php echo $genre['genreID']; ?>"/>
                                    <input class="button-delete" type="submit" value="Delete"/>
                                </form>
                            </td>
                        </tr>
                            <?php endforeach; ?>
                    
                </table>

                <p>NOTE: You cannot delete a genre with artists in it.</p>
                
                <!-- display the artists in a table format -->
                <h2>Artists</h2>
                
                <p> <?php echo $genre_name; ?>:</p> 
                <table class="adminTable2">
                    <thead>
                        <tr>
                            <th>Artist</th>
                            <th>&nbsp;</th>
                        </tr>
                            <?php foreach ($artists as $artist) : ?>
                    </thead>
                    <tr> 
                        <td><?php echo $artist['artistID']; ?></td>
                        <td><?php echo $artist['artistName']; ?></td>

                        <td>
                            <form action="." method="post">
                                <input type="hidden" name="action"
                                       value="delete_artist">
                                <input type="hidden" name="artistName"
                                       value="<?php echo $artist['artistName']; ?>">
                                <input type="hidden" name="genre_id"
                                       value="<?php echo $artist['genreID']; ?>">
                                <input class="button-delete" type="submit" value="Delete"> 
                            </form>
                        </td>
                    </tr>
                        <?php endforeach; ?>
                </table>
               </div>
 </div><!-- end formInput div -->
</div><!-- end main content -->
<?php include'../view/footer.php'; ?>