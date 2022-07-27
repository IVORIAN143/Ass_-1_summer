<center>
    <H1>
  <?php
  echo "MUSIC";
  ?>
  </H1>
  </center>
<h3>
  <center>
  <center>
  <button class="button">
    <div><a href='home.php'>HOME</a></div>
  </button>

  <button class="button">
    <div><a href='education.php'>EDUCATION</a></div>
  </button>

  <button class="button">
    <div><a href='movies.php'>MOVIES</a></div>
  </button class="button">

  <button class="button">
    <div><a href='music.php'>MUSIC</a></div>
  </button>
  
   <button class="button">
   <div><a href='hobbies.php'>HOBBIES</div>
  </button>
  
  <button class="button">
    <div><a href='index.php'>BACK</a></div>
  </button>
  
</center>

</h3>
<body style="background :url(Background.png);background-repeat:no-repeat;background-size:100% 100%">
<body class="row">
  <p class="column">
    <img src="Music\sexylady.png"  width="300px" height="300px">
    <audio src="Music\'Sexy Lady' - MC Magic - Lyrics🎵.mp3"controls></audio>
  </p>
  <p class="column">
    <img src="Music\parokyaniedgar.png"  width="300px" height="300px">
    <audio src="Music\Halaga - Parokya Ni Edgar (Lyrics)🎶.mp3"controls></audio>
  </p>
  <p class="column">
    <img src="Music\Callally.png"  width="300px" height="300px">
    <audio src="Music\Magbalik - Callalily (Lyrics)🎧.mp3"controls></audio>
  </p>
  <p class="column">
    <img src="Music\Shamrock.png" width="300px" height="300px">
    <audio src="Music\Shamrock - Alipin - (Official Lyric Video).mp3"controls></audio>
  </p>
  <p class="column">
    <img src="Music\SilentSanctuary.png"  width="300px" height="300px">
    <audio src="Music\Silent Sanctuary - Summer Song (Official Music Video).mp3"controls></audio>
  </p>
  <p class="column">
    <img src="Music\ne-yo.png"  width="300px" height="300px">
    <audio src="Music\So Sick - Ne-Yo (Lyrics) 🎵.mp3"controls></audio>
  </p>
</body>


<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.333%;
  padding: 30px;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}


.button {
  display: inline-block;
  padding: 9px 16px;
  font-size: 11px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 9px;
  box-shadow: 0 1px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>