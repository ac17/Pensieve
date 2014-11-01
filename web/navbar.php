<div class="col-sm-3 col-md-2 sidebar">
  <ul class="nav navbar-inverse nav-sidebar">
    <li <?php if ($_SERVER['PHP_SELF'] == '/index.php') echo 'class="active"'; ?>><a href="index.php">About</a></li>
    <li <?php if ($_SERVER['PHP_SELF'] == '/datavisualizations.php') echo 'class="active"'; ?>><a href="datavisualizations.php">Data Visualizations</a></li>
    <li <?php if ($_SERVER['PHP_SELF'] == '/twittersentiment.php') echo 'class="active"'; ?>><a href="twittersentiment.php">Twitter Sentiment Analysis</a></li>
    <li <?php if ($_SERVER['PHP_SELF'] == '/bulletins.php') echo 'class="active"'; ?>><a href="bulletins.php">Anonymous Bulletin Board</a></li>
    <li><a href="#">Contact Us</a></li>
  </ul>
</div>