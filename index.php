<?php

  require_once __DIR__ . "/Movie.php";
  require_once __DIR__ . "/db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    body{
      font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-evenly;
      background-color: grey;
    }

    .movie{
      width: 200px;
      text-align: center;
      background-color: lightgrey;
      padding-bottom: 8px;
      margin: 24px;
    }

    .cover {
      height: 300px;
      padding-bottom: 32px;
    }
    
    .cover img{
      width: 100%;
      height: 100%;
    }

    p:last-child {
      text-align: left;
      padding: 14px;
    }

    .feedback {
      color: red;
    }

  </style>

  <title>php-oop-1</title>
</head>
<body>
  <?php foreach($movies as $movie): 

    $new_movie = new Movie($movie['image'],$movie['title'],$movie['releaseYear'],$movie['duration'],$movie['genre']);

    $new_movie->feedback = $movie['feedback'];
    $new_movie->description = $movie['description'];
  ?>
    <section class="movie">
      <div class="cover">
        <img src="<?php echo $new_movie->image ?>" 
        alt="<?php echo $new_movie->title ?>">
      </div>

      <h2>
        <?php echo $new_movie->title ?>
      </h2>

      <p>
        <strong>
          <?php echo $new_movie->releaseYear ?>
        </strong>
      </p>

      <p>
        Durata:
        <strong>        
          <?php echo $new_movie->duration ?>
        </strong>
      </p>
    
      <h4>
        <?php echo $new_movie->genre ?>
      </h4>

      <p class="feedback">
        <?php echo $new_movie->feedback ?>/5
      </p>
      <p>
      <?php echo $new_movie->getFeedback() ?>
      </p>

      <p>
        <?php echo $new_movie-> getDescription(60)?>
      </p>


    </section>
  <?php endforeach; ?>

  
</body>
</html>