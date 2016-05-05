<?php include 'view/header.php'; ?>
<?php if(!empty($_SESSION['admin'])) {
  header('Location: ./login/index.php');
} else if (!empty($_SESSION['member'])){
  header('Location: ./login/index.php');
}
?>
<main>

<div class="mainWrapper">

<div class="slider">
           <div id='coin-slider'>
      <a href="img/tunorater.png" target="_blank">
        <img src='img/tuneorater.png' >
        <span>
          Tune-O-Rater
        </span>
      </a>
      <a href="img/Rock.png">
        <img src='img/Rock.png' >
        <span>
          Rock
        </span>
      </a>
      <a href="img/pop.png">
        <img src='img/pop.png' >
        <span>
          Pop
        </span>
      </a>
      <a href="img/country.png">
        <img src='img/country.png' >
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
<div class="main">
<h1>About Tune-O-Rater</h1>
<p>Tune-O-Rater is the brain child of Jack Jordan. This Web site is designed as a final project for my WEB-289 class at Asheville Buncombe Community College.  The reason I chose this website is because I love music, and believe there are many like minded people in the world.</p>
<p>Not only can visitors come to vote on their favorite songs, they can also see how other listeners feel about the same tunes.  I disc jockey on a popular webcam site, and often look for popular play lists on the Internet.  It will be nice to have a spot that I know is not corporate influenced, and a true vote by the listeners.</p>
<h2>Related Sites</h2>
<ul>
  <li><a href="http://www.youtube.com/" target="blank">YouTube</a></li>
  <li><a href="http://www.pandora.com/" target="blank">Pandora</a></li>
  <li><a href="http://www.spotify.com/" target="blank">Spotify</a></li>
  <li><a href="http://iheart.com/" target="blank">iheart Radio</a></li>
</ul>
<h2>Not Just Another Tune Website</h2>
<p>Tune-O-Rater was created to give you, the registered user the power to control the status of your favorite songs all in one place.  Tune-O-Rater is a one of a kind website for music lovers.  Tune-O-Rater prides itself in offering not only it's users the ability to vote, but also keep track of their favorite song ratings.</p>
<p>Tune-O-Rater was conceived in January, 2016 with the help of my fellow students and my instructors, Alec Fehl, and Charie Wallen.  Alec, and Charlie have not only helped me on this project, but many more throughout my time at Asheville-Buncombe community college.  Tune-O-Rater, is a proud supporter of educational facilities and the ability for us to become educated.</p>
<h2>How you are the difference!</h2>
<p>Tune-O-Rater is the place that you can vote on the songs in the library, as well as request for new songs to be added.  You can make the difference by registering today!</p>
<div class="newsfeed">
	<script type="text/javascript"
src="http://www.freshcontent.net/music_news_feed.php"></script>
<p>Free content by <a href="http://www.freshcontent.net/directory/music/general_music.html">Fresh Content.net</a><p>
</div>
</div>

<div class="sidebar">
  <ul class="sidenav">
    <li><a href="/tuneorater/contact.php" class="contactLink">Contact Us</a></li>
    <li><a href="/tuneorater/partners.php" class="Partners"> Partners</a></li>
    </ul>
  <p>"For Those About To Rock (We Salute You)"

We roll tonight to the guitar bite

Stand up and be counted for what you are about to receive
We are the dealers
We'll give you everything you need
Hail hail to the good times
Cos rock has got the right of way
We ain't no legends ain't no cause
We're just livin' for today
For those about to rock, we salute you
For those about to rock, we salute you</p>
  <p>We rock at dawn on the front line
Like a bolt right outta the blue
The skies alight with a guitar bite
Heads will roll and rock tonight
For those about to rock, we salute you
For those about to rock, we salute you
For those about to rock, we salute you, yes we do
For those about to rock, we salute you
Salute
</p>
  <p>We're just a battery for hire with the guitar fire
Ready and aimed at you
Pick up your balls and load up your cannon
For a twenty one gun salute
For those about to rock
Fire
We salute you
For those about to rock
We salute you
For those about to rock
Fire
We salute you
Fire
We salute you</p>
  <p>We salute you, c'mon
For those about to rock, we salute you
For those about to rock, we salute you
For those about to rock, we salute you
For those about to rock, we salute you
Shoot, shoot
Shoot, shoot
For those who give
For those who take
Those left high
And those on the make
We salute you
We salute you
We salute you
Fire</p>
  <p>AC/DC &copy; 1981</p>
</div>
</div>
</main>

<?php include 'view/footer.php'; ?>
