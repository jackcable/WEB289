<?php 
if(isset($_SESSION['admin'])) { 
    require_once('../util/valid_admin.php');
    include'../view/admin_header.php';
}else if(!isset($_SESSION['admin'])){
  include'../view/header.php';  
}
?>
<div class="albums-page">
                <h2>Albums</h2><br>
                
                    <nav class="album">
                        <ul > 
                            <?php foreach (artists as $artist) : ?>
                            
                            <li><a href=".?artist=<?php echo $aritist['artistID']; ?>"><?php echo $artist['artistName']; ?><br><?php echo $artist['artistID']; ?>
                            <br></a>  
                            </li>
                                              
                            <?php endforeach; ?>
                        </ul> 
                     </nav>   
                    <div class="album">
                        <h2><?php echo $artistName; ?> </h2>
                         <div class="formInput">
                        <table class="adminTable1">
                            <thead>
                                <tr class="album-list"> 
                                    <th>album Name</th>
                                    <th>album Year</th>
                                </tr>
                            </thead>
                            <tbody >
                                    <?php foreach ($albums as $album) : ?>
                                <tr class="album-list">
                                    <td><?php echo $album['albumID']; ?></td>
                                    <td><?php echo $album['albumName']; ?></td>
                                    <td><?php echo $album['artistName']; ?></td>
                                    <td><?php echo $album['albumYear']; ?></td>
                                </tr>
                                    <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div><!-- end album-album --> 
</div><!-- end album-page -->        
       
  

   


<?php include'../view/footer.php'; ?>