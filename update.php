<?php
$dbh = new PDO("mysql:host=localhost;dbname=kidsapp","root","root");
$sql = "SELECT * FROM kidsmovielist WHERE id = ".$_GET["movie-id"];
$movieQuery = $dbh->query($sql);
$movie = $movieQuery->fetch(PDO::FETCH_ASSOC);

//upadate information
if($_SERVER["REQUEST_METHOD"]=="POST") {
  $name= $_POST["name"];
  $year= $_POST["year"];
  $director= $_POST["director"];
  $boxoffice= $_POST["boxoffice"];
  $poster= $_POST["poster"];
  $bgimage= $_POST["bgimage"];

  $dbh = new PDO("mysql:host=localhost;dbname=kidsapp","root","root");
  $sql = "UPDATE kidsmovielist SET name= :name ,year= :year , director= :director ,boxoffice= :boxoffice,poster =:poster, bgimage = :bgimage WHERE id=".$_GET["movie-id"];
  $movies= $dbh->prepare($sql);
  $movies->bindParam(":name", $name, PDO::PARAM_STR);
  $movies->bindParam(":year", $year, PDO::PARAM_STR);
  $movies->bindParam(":director", $director,  PDO::PARAM_STR);
  $movies->bindParam(":boxoffice", $boxoffice,  PDO::PARAM_STR);
  $movies->bindParam(":poster", $poster,  PDO::PARAM_STR);
  $movies->bindParam(":bgimage", $bgimage,  PDO::PARAM_STR);
  $movies->execute();
  header("Location:index.php");
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link rel="stylesheet" href="updatestyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  </head>
  <body>
    <!-- •••••••••••••••••••••••• -->
    <!-- header -->
    <!-- •••••••••••••••••••••••• -->
    <header>
      <h1 class="update">Update Form</h1>
    </header>
    <!-- header -->
    <!-- •••••••••••••••••••••••• -->
    <!-- main -->
    <!-- •••••••••••••••••••••••• -->
    <main>
      <div class="backForm">
        <form  class="updateForm"action="update.php?movie-id=<?php echo $_GET["movie-id"]; ?>" method="post">
          <div>
            <label for="">MovieName</label><br>
            <input class="textField"type="text" name="name" value="<?php echo $movie["name"]; ?>">
          </div>
          <div>
            <label for="">Year</label><br>
            <input class="textField"type="text" name="year" value="<?php echo $movie["year"]; ?>">
          </div>
          <div>
            <label for="">Director</label><br>
            <input class="textField"type="text" name="director" value="<?php echo $movie["director"]; ?>">
        </div>
        <div>
          <label for="">BoxOffice</label><br>
          <input class="textField"type="text" name="boxoffice" value="<?php echo $movie["boxoffice"]; ?>">
        </div>
        <div>
          <label for="">Poster</label><br>
          <input class="textField"type="text" name="poster" value="<?php echo $movie["poster"]; ?>">
        </div>
        <div>
          <label for="">BackgroundImage</label><br>
          <input class="textField"type="text" name="bgimage" value="<?php echo $movie["bgimage"]; ?>">
        </div>
        <input type="submit" name="" value="Submit">
      </form>
    </div>
  </main>
  <!-- main -->
  </body>
</html>
