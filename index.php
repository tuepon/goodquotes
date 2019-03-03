<?php include './config.php'; ?>
<?php include './classes/database.php'; ?>
<?php include './classes/quote.php'; ?>
<?php
  $quotesObj = new Quote();
  $quotes = $quotesObj->index();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>GoodQuotes</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills float-right">
            <li class="nav-item"><a href="index.php" class="nav-link active">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link">New Quote</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">GoodQuotes</h3>
      </div>

      <div class="jumbotron">
        <h1>Got A Quote?</h1>
        <p class="lead">Store your favorite quotes here to access and read them daily and better your life</p>
        <p><a class="btn btn-lg btn-success" href="new.php" role="button">Add Quote Now</a></p>
      </div>

      <div class="row marketing">
        <div class="col-lg-12">
          <?php foreach($quotes as $q) : ?>
            <h3><?php echo $q['text']; ?></h3>
            <p><?php echo $q['creator']; ?></p>
          <?php endforeach; ?>
        </div>
      </div>

      <footer class="footer">
        <p>&copy; 2019 GoodQuotes, Inc.</p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
