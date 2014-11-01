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

          <div class="inner cover">
            <table>
              <tr width="100%">
                <td class="text-right">
                  <h1 class="cover-heading">YHack Project!</h1>
                  <p class="lead">Description. Something will go here.</p>
                  <a href="#" class="btn btn-lg btn-default">Learn more</a>
                </td>
                <td class="text-left">
                  <img src="brain.png" height="100%">
                </td>
              </tr>
            </table>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p class="text-center">Developed by Angelica Chen and Anna Matlin, Princeton University</p>
            </div>
          </div>

        </div>

      </div>

    </div>
    <?php include_once('foot.php'); ?>
  </body>
</html>
