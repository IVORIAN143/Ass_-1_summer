<center>
    <H1>
  <?php
  echo "MOVIES";
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
<body>
  <center>
  <p class="row">
    <div class="column">
        <img src="Movies\3_Idiots.png"  width="300px" height="300px">
    </div>
    <div class="column">
      <img src="Movies\bookofeliart.png"  width="300px" height="300px">
    </div>
    <div class="column">
      <img src="Movies\Forrest_Gump.png"   width="300px" height="300px">
    </div>
    <div class="column">
      <div class="img">
      <img src="Movies\kungfuhustle.png"   width="300px" height="300px">
      </div>
    </div>
    <div class="column">
      <img src="Movies\Readyplayer1.png"   width="300px" height="300px">
    </div>
    <div class="column">
      <img src="Movies\Thekingmaker.png"   width="300px" height="300px">
    </div>
  </p>
  </center>
</body>

<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 30%;
  padding: 22px;
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