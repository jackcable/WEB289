<?php 
include '../view/header.php'; 
?>
<div class="mainWrapper">
<div class="slider">
           <div id='coin-slider'>
      <a href="/tuneorater/img/tunorater.png" target="_blank">
        <img src='/tuneorater/img/tuneorater.png' >
        <span>
          Tune-O-Rater
        </span>
      </a>
      <a href="/tuneorater/img/Rock.png">
        <img src='/tuneorater/img/Rock.png' >
        <span>
          Rock
        </span>
      </a>
      <a href="/tuneorater/img/pop.png">
        <img src='tuneorater/img/pop.png' >
        <span>
          Pop
        </span>
      </a>
      <a href="/tuneorater/img/country.png">
        <img src='/tuneorater/img/country.png' >
        <span>
          Country
        </span>
      </a>
    </div>
    </div>
<script type="text/javascript">
  $(document).ready(function() {
    $('#coin-slider').coinslider();
  });
</script>
<div class="genre-page">
    <h1>Genres</h1>
                    <nav class="genre">
                        <ul class="formInput"> 
                            <?php foreach ($genres as $genre) : ?>
                            
                            <li><a href=".?genre_id=<?php echo $genre['genreID']; ?>"><?php echo $genre['genreName']; ?><br></a>  
                            </li>
                                              
                            <?php endforeach; ?>
                        </ul> 
                     </nav>   
                    <div class="genre">
                        
                       
                            <?php foreach ($artists as $artist) : ?>
            <p>
                <a href="?action=album_list.php<?php
                          echo $artist['artistID']; ?>">
                    <?php echo htmlspecialchars($artist['artistName']); ?>
                </a>
            </p>
                                    <?php endforeach; ?>
                            </tbody>
                        </table>   
                    </div>
                 </div>
                 </div>
</div><!-- end artist-page -->        
       
  

   


<?php include'../view/footer.php'; ?>