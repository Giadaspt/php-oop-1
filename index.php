<?php

  require_once __DIR__ . "/Movie.php";

  $movie = new Movie("Scream","2022","Horror/Thriller");
  $movie->image = "./img/scream-locandina-lassassino-e-nel-poster.jpg";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    body{
      background-color: grey;
    }

    .movie{
      width: 150px;
      text-align: center;
      background-color: lightgrey;
      padding-bottom: 8px;
    }

    .cover {
      width: 150px;
    }
    
    .cover img{
      width: 100%;
    }
  </style>

  <title>php-oop-1</title>
</head>
<body>
  <section class="movie">

    <div class="cover">
      <img src="<?php echo $movie->image ?>" 
      alt="<?php echo $movie->title ?>">
    </div>

    <h2>
      <?php echo $movie->title ?>
    </h2>
  
    <h4>
      <?php echo $movie->release_year ?>
    </h4>
  
    <h4>
      <?php echo $movie->genre ?>
    </h4>
  </section>

  
</body>
</html>