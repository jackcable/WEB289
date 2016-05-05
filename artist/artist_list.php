<?php 
if(isset($_SESSION['admin'])) { 
    require_once('../util/valid_admin.php');
    include'../view/admin_header.php';
}else if(!isset($_SESSION['admin'])){
  include'../view/header.php';  
}
?>
<div class="artists-page">
                <h2>Artists</h2><br>
                
                    <nav class="artist">
                        <ul > 
                            <?php foreach ($genres as $genre) : ?>
                            
                            <li><a href=".?genreID=<?php echo $genre['genreID']; ?>"><?php echo $genre['genreDescription']; ?><br></a>  
                            </li>
                                              
                            <?php endforeach; ?>
                        </ul> 
                     </nav>   
                    <div class="artist">
                        <h2><?php echo $artist_name; ?> </h2>
                         <div class="formInput">
                        <table class="adminTable1">
                            <thead>
                                <tr class="artist-list"> 
                                    <th>artist ID</th>
                                    <th>artist Description</th>
                                </tr>
                            </thead>
                            <tbody >
                                    <?php foreach ($artists as $artist) : ?>
                                <tr class="artist-list">
                                    <td><?php echo $artist['artistID']; ?></td>
                                    <td><?php echo $artist['artistDescription']; ?></td>
                                </tr>
                                    <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div><!-- end artist-artist --> 
</div><!-- end artist-page -->        
       
  

   


<?php include'../view/footer.php'; ?>