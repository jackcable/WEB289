<?php 
if(isset($_SESSION['admin'])) { 
    require_once('../util/valid_admin.php');
    include'../view/admin_header.php';
}else if(!isset($_SESSION['admin'])){
  include'../view/header.php';  
}
?>
<div class="songs-page">
                <h2>Songs</h2><br>
                
                    <nav class="song">
                        <ul > 
                            <?php foreach (songs as $artist) : ?>
                            
                            <li><a href=".?artist=<?php echo $song['songID']; ?>"><?php echo $artist['songName']; ?><br><?php echo $artist['songID']; ?>
                            <br></a>  
                            </li>
                                              
                            <?php endforeach; ?>
                        </ul> 
                     </nav>   
                    <div class="song">
                        <h2><?php echo $songName; ?> </h2>
                         <div class="formInput">
                        <table class="adminTable1">
                            <thead>
                                <tr class="song-list"> 
                                    <th>Song Name</th>
                                </tr>
                            </thead>
                            <tbody >
                                    <?php foreach ($songs as $song) : ?>
                                <tr class="song-list">
                                    <td><?php echo $song['songID']; ?></td>
                                    <td><?php echo $song['songName']; ?></td>
                                    <td><?php echo $song['albumName']; ?></td>
                                    <td><?php echo $song['songYear']; ?></td>
                                </tr>
                                    <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div><!-- end song-song --> 
</div><!-- end song-page -->        
       
  

   


<?php include'../view/footer.php'; ?>