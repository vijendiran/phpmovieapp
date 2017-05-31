<?php
$dbh = new PDO("mysql:host=localhost;dbname=kidsapp","root","root");
$sql = "SELECT * FROM kidsmovielist";
$movieQuery = $dbh->query($sql);
$movies = $movieQuery->fetchAll(PDO::FETCH_ASSOC);

if (isset($_GET["movieid"])) {
$dbh = new PDO("mysql:host=localhost;dbname=kidsapp","root","root");
$sql = "SELECT * FROM kidsmovielist WHERE id=".$_GET["movieid"];
$moviequery = $dbh->query($sql);
$selectedMovie = $moviequery->fetch(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  </head>
  <body>
    <!-- •••••••••••••••••••••••• -->
    <!-- section -->
    <!-- •••••••••••••••••••••••• -->
    <section>
      <div class="moreDetails">
        <?php
          echo "<h1 class='more-name'>MovieName = ".$selectedMovie["name"]."</h1>";
          echo "<h4 class='more-year'>Year = ".$selectedMovie["year"]."</h4>";
          echo "<h3 class='more-director'> Director = ".$selectedMovie["director"]."</h3>";
          echo "<h3 class='more-boxoffice'>BoxOffice = ".$selectedMovie["boxoffice"]."</h3>";
          ?>
      </div>
      <div class="backgroundMore">
        <?php
          echo "<img class='bgimages'src='".$selectedMovie["bgimage"]."'/>";
          ?>
      </div>
    </section>
    <!-- section -->
  </body>
</html>
