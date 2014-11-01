<?php

require('../vendor/autoload.php');

$app = new Silex\Application();
$app['debug'] = true;

// Register the monolog logging service
$app->register(new Silex\Provider\MonologServiceProvider(), array(
  'monolog.logfile' => 'php://stderr',
));

?>

<!DOCTYPE html>
<?php include_once('head.php'); ?>
<body>
  <?php include_once('navbar.php'); ?>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <!-- banner -->
          <div class="inner cover">
            <table id="home-page-table">
              <tr width="100%">
                <td class="text-right">
                  <h1 class="cover-heading">pensieve</h1>
                  <p class="lead">Description. Something will go here.</p>
                  <a href="#" class="btn btn-lg btn-default">Learn more</a>
                </td>
                <td class="text-right" height="100%">
                  <img src="img/gradient-brain.png" id="home-page-brain" height="40%">
                </td>
              </tr>
            </table>
          </div>

          <!-- glide scroll arrow -->
          <div class="mastfoot">
            <div class="inner">
              <a class="arrow-wrap" href="#carousel-about">
                <span class="arrow"></span>
              </a>
            </div>
          </div>
        </div>

        </div>

      </div>

    </div>

    <!-- about -->
          <div id="carousel-about" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="carousel-about" data-slide-to="0" class="active"></li>
              <li data-target="carousel-about" data-slide-to="1" class="active"></li>
              <li data-target="carousel-about" data-slide-to="2" class="active"></li>
            </ol>

            <!-- Slide wrapper -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="img/vis-background.png">
                <div class="carousel-caption">
                  <h1>thought visualizations</h1>
                  <p>See what your peers are feeling with our simple Twitter visualizations.</p>
                  <button class="btn btn-white">Twitter Visualizations</button>
                </div>
              </div>
              <div class="item">
                <div class="carousel-caption">
                </div>
              </div>
              <div class="item">
                <div class="carousel-caption">
                </div>
              </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-about" role="button" slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-about" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>

    <!-- Catchphrase -->
    <div id="catchphrase">
      <h1>JOIN THE EFFORT. RAISE AWARENESS.</h1>
    </div>
    <?php include_once('foot.php'); ?>
  </body>
</html>
