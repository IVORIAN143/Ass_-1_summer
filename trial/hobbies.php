<center>
    <H1>
  <?php
  echo "HOBBIES";
  ?>
  </H1>
  </center>
<h3>

<center>
 <button class="button">
    <div><a href='home.php'> HOME </a></div>
    </button>

  <button class="button">
    <div><a href='education.php'> EDUCATION </a></div>
  </button>

  <button class="button">
    <div><a href='movies.php'> MOVIES </a></div>
  </button class="button">

  <button class="button">
    <div><a href='music.php'> MUSIC </a></div>
  </button>
  
   <button class="button">
   <div><a href='hobbies.php'> HOBBIES </div>
  </button>
  
  <button class="button">
    <div><a href='index.php'> BACK </a></div>
  </button>
</center>
</h3>
<body style="background :url(Background.png);background-repeat:no-repeat;background-size:100% 100%">
<body class="row">
  <div class="column">
    <img src="Hobbies\dancing.gif" width="200px" height="200px">
    <H1>
      <?php
    echo "DANCING";
    ?>
    </H1>
  </div>
  <div class="column">
    <img src="Hobbies\eating.gif"  width="200px" height="200px">
    <H1>
      <?php
    echo "EATING";
    ?>
    </H1>
  </div>
  <div class="column">
    <img src="Hobbies\playing inst.gif"  width="200px" height="200px">
    <H1>
      <?php
    echo "PLAYING INSTRUMENT";
    ?>
    </H1>
  </div>
  <div class="column">
    <img src="Hobbies\playing games.gif"  width="200px" height="200px">
    <H1>
      <?php
    echo "PLAYING VIDEO GAMES";
    ?>
    </H1>
  </div>
  <div class="column">
    <img src="Hobbies\playing balls.gif"  width="200px" height="200px">
    <H1>
      <?php
    echo "PLAYING PHYSICAL GAMES";
    ?>
    </H1>
  </div>
</body>

<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 20%;
  padding: 5px;
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
H1 {
  color: white;
  text-align: center;
}
</style>