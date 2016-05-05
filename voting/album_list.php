<?php 
  include'../view/header.php';  
?>
<div class="mainWrapper">
<div class="artist-page">
    <h1>artists</h1>
                    <nav class="artist">
                        <ul class="formInput"> 
                            <?php foreach ($artists as $artist) : ?>
                            
                            <li><a href=".?artist_id=<?php echo $artist['artistID']; ?>"><?php echo $artist['artistName']; ?><br></a>  
                            </li>
                                              
                            <?php endforeach; ?>
                        </ul> 
                     </nav>   
                    <div class="album">
                        
                       
                            <?php foreach ($albums as $album) : ?>
            <p>
                <a href="?action=album_list.php&amp;album_id=<?php
                          echo $album['albumID']; ?>">
                    <?php echo htmlspecialchars($album['albumName']); ?>
                </a>
            </p>
                                    <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                 </div>
                 </div>
</div><!-- end album-page -->        
       
  

   


<?php include'../view/footer.php'; ?>