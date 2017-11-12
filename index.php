<?php
  include("includes/config.php");

  // session_destroy();

  if(isset($_SESSION['userLoggedIn'])){
    $userLoggedIn = $_SESSION['userLoggedIn'];
  } else {
    header("Location: register.php");
  }

 ?>
  <!doctype html>
    <html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Welcome to PushND</title>
      <meta name="description" content="New Web Site">
      <meta name="author" content="">
      <link rel="stylesheet" href="assets/css/style.css?v=1.0">
      <link rel="stylesheet" href="assets/css/fonts.css?v=1.0">
      <link href="https://fonts.googleapis.com/css?family=Patua+One|Roboto" rel="stylesheet">
      <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
    </head>
    <body>
    <div id="mainContainer">
      <div id="topContainer">
        <div id="navBarContainer">
            <nav class="navBar">
              <a href="index.php" class="logo">
                <img src="assets/images/icons/pushnd-square.png" alt="PushND">
              </a>

              <div class="group">
                <div class="navItem">
                  <a href="search.php" class="navItemLink">Search
                    <img src="assets/images/icons/search.png" class="icon" alt="Search">
                  </a>
                </div>
              </div>

              <div class="group">

                <div class="navItem">
                  <a href="browse.php" class="navItemLink">Browse</a>
                </div>

                <div class="navItem">
                  <a href="yourMusic.php" class="navItemLink">Your Music</a>
                </div>

                <div class="navItem">
                  <a href="profile.php" class="navItemLink">Profile</a>
                </div>

              </div>

            </nav>
        </div>
      </div>
      <div id="nowPlayingBarContainer">
        <div id="nowPlayingBar">
          <div id="nowPlayingLeft">
            <div class="content">
              <span class="albumLink">
                <img class="albumArtwork" src="assets/images/albumCovers/LockedandLoaded.jpg" alt="Locked And Loaded Album Cover">
              </span>
              <div class="trackInfo">

                <span class="trackName">
                  <span>Locked and Loaded</span>
                </span>

                <span class="artistName">
                  <span>Vanishing Affair</span>
                </span>

              </div>
            </div>
          </div>

          <div id="nowPlayingCenter">
            <div class="content playerControls">

              <div class="buttons">
                  <button type="button" name="shuffleButton" class="controlButton shuffle" title="Shuffle Button">
                    <img src="assets/images/icons/shuffle.png" alt="Shuffle">
                  </button>

                  <button type="button" name="previousButton" class="controlButton previous" title="Previous Button">
                    <img src="assets/images/icons/previous.png" alt="Previous">
                  </button>

                  <button type="button" name="playButton" class="controlButton play" title="Play Button">
                    <img src="assets/images/icons/playbutton.svg" alt="Play">
                  </button>

                  <button type="button" name="pauseButton" class="controlButton pause" title="Pause Button" style="display: none;">
                    <img src="assets/images/icons/pause.png" alt="Pause">
                  </button>

                  <button type="button" name="nextButton" class="controlButton next" title="Next Button">
                    <img src="assets/images/icons/next.png" alt="Next">
                  </button>

                  <button type="button" name="repeatButton" class="controlButton repeat" title="Repeat Button">
                    <img src="assets/images/icons/repeat.png" alt="Repeat">
                  </button>

              </div>

              <div class="playbackBar">

                <span class="progressTime current">0.00</span>
                <div class="progressBar">
                  <div class="progressBarBg">
                    <div class="progress"></div>
                  </div>
                </div>
                <span class="progressTime remaining">0.00</span>

              </div>

            </div>
          </div>

          <div id="nowPlayingRight">
            <div class="volumeBar">

                <button type="button" name="volumeButton" class="controlButton volume" title="Volume Button">
                  <img src="assets/images/icons/volume.png" alt="Volume">
                </button>

              <div class="progressBar">
                <div class="progressBarBg">
                  <div class="progress"></div>
                </div>

            </div>
          </div>
        </div>
      </div>
  </div>
    <!-- run javascript at the end -->
      <script src="js/scripts.js"></script>
    </body>
    </html>
