<?php

require('../vendor/autoload.php');

$app = new Silex\Application();
$app['debug'] = true;

// Register the monolog logging service
$app->register(new Silex\Provider\MonologServiceProvider(), array(
  'monolog.logfile' => 'php://stderr',
));

/* Our web handlers

$app->get('/', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return 'Hello';
});

$app->run(); */

?>

<!DOCTYPE html>
<?php include_once('head.php'); ?>
<body>
  <?php include_once('navbar.php'); ?>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="inner cover">
            <h1 class="cover-heading">YHack Project!</h1>
            <p class="lead">Description. Something will go here.</p>
            <p class="lead">
              <a href="#" class="btn btn-lg btn-default">Learn more</a>
            </p>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>Developed by Angelica Chen and Anna Matlin, Princeton University</p>
            </div>
          </div>

        </div>

      </div>

    </div>
    <?php include_once('foot.php'); ?>
  </body>
</html>
