<?php
  // database connection
  $dbh = new PDO("mysql:host=localhost;dbname=kidsapp","root","root");
  $sql = "SELECT * FROM kidsmovielist";
  $movieQuery = $dbh->query($sql);
  $movies = $movieQuery->fetchAll(PDO::FETCH_ASSOC);

  // Add movie information to database
  if(isset($_POST["submit-new-movie"])){
    $name = $_POST["name"];
    $year = $_POST["year"];
    $director = $_POST["director"];
    $boxoffice = $_POST["boxoffice"];
    $poster = $_POST["poster"];
    $bgimage = $_POST["bgimage"];
    $dbh = new PDO("mysql:host=localhost;dbname=kidsapp","root","root");
    $sql = "INSERT INTO kidsmovielist (name, year, director, boxoffice, poster, bgimage)
    VALUES('$name','$year','$director','$boxoffice','$poster','$bgimage')";
    $movieQuery = $dbh->query($sql);
    header("Location:index.php");
  }
  // delete
  if(isset($_GET["delete-id"])){
    $dbh = new PDO("mysql:host=localhost;dbname=kidsapp", "root", "root");
    $sql = "DELETE FROM kidsmovielist WHERE id =" .$_GET["delete-id"] ;
    $movies = $dbh->prepare($sql) ;
    $movies->execute();
    header("Location:index.php");
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kidsMovieAppinPHP</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  </head>
  <body>
    <!-- •••••••••••••••••••••••• -->
    <!-- header -->
    <!-- •••••••••••••••••••••••• -->
    <header>
      <h1 class="app-title">Kids Movie</h1>
      <img class="plusIcon" src="./image/plus.png" alt="" height="40" width="40">
        <form class="addMovieToDatabase" action="index.php?movie-id=<?php echo $_GET["movie-id"]; ?>" method="post">
        <label>MovieName</label>
        <input type="text" name="name" value="" placeholder="moviename">
        <label>Year</label>
        <input type="text" name="year" value="" placeholder="year">
        <label>Director</label>
        <input type="text" name="director" value="" placeholder="director">
        <label>BoxOffice</label>
        <input type="text" name="boxoffice" value="" placeholder="boxoffice">
        <label>Poster</label>
        <input type="text" name="poster" value="" placeholder="poster">
        <label>BackgroundImage</label>
        <input type="text" name="bgimage" value="" placeholder="backgroundimage">
        <input type="submit" name="submit-new-movie" value="Submit">
        </form>
    </header>
    <!-- header -->
    <!-- •••••••••••••••••••••••• -->
    <!-- main -->
    <!-- •••••••••••••••••••••••• -->
    <main>
      <div class="movieList">
        <ul>
          <?php foreach ($movies as $movie) { ?>
            <li>
              <a href='details.php?movieid="<?php echo $movie["id"] ?>"' class='links'>
                <div class='name-year'>
                  <img class='poster-img' src="<?php echo $movie["poster"]?>"/>
                  <h2 class='moviename'><?php echo $movie["name"] ?></h2>
                  <small class='year'><?php echo $movie["year"] ?></small></br>
                  <div class='upbtn'>
                    <a class='updateBtn' href='update.php?movie-id=<?php echo $movie["id"];?>'> Update</a>
                  </div>
                  <div class='dbtn'>
                    <a class='deleteBtn' href='index.php?delete-id=<?php echo $movie["id"];?>'> Delete</a>
                  </div>
                </div>
              </a>
            </li>
          <?php } ?>
        </ul>
      </div><!--movielist-->
    </main>
    <!-- main -->
  </body>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="script.js"></script>
</html>
