<?php

class Movie {
  public $image = "./img/scream-locandina-lassassino-e-nel-poster.jpg";
  public $title;
  public $release_year;
  public $duration;
  public $genre;
  public $feedback;

  function __construct($_title,$_release_year, $_genre)
  {
    $this->title = $_title;
    $this->release_year = $_release_year;
    $this->genre = $_genre;
  }

}