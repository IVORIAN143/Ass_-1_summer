
  <center>
    <H1>
  <?php
  echo "GLENN ALVAREZ IV";
  ?>
  </H1>
  <H1>
BSIT-2 Santiago Extension
</H1>
  </center>
<h3>  
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

</center>
</h3>
<center>
<img src="index\swing-dance-swing-your-hips.gif" width="200" height="200">
</center>
<body style="background :url(Background.png);background-repeat:no-repeat;background-size:100% 100%">

<style>
.button {
  display: inline-block;
  padding: 9px 16px;
  font-size: 11px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: 0868AC;
  border: none;
  border-radius: 9px;
  box-shadow: 0 1px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 2px #666;
  transform: translateY(4px);
}
H1 {
  color: white;
  text-align: center;
}
</style>

<script>
    function playSound(obj, text){
        var video = document.getElementById(obj);
        var text = document.getElementById(text);
        text.textContent = "Playing...";
        audio.play();
    }
    function stopSound(obj, text){
        var video = document.getElementById(obj);
        var text = document.getElementById(text);
        text.textContent = "";
        audio.pause();
        // audio.currentTime = 0;
    }
</script>
