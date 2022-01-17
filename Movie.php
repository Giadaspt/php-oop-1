<?php

class Movie {
  public $image;
  public $title;
  public $releaseYear;
  public $duration;
  public $genre;
  public $feedback;
  public $description;

  function __construct($_image,$_title,$_releaseYear, $_duration, $_genre)
  {
    $this->image = $_image;
    $this->title = $_title;
    $this->releaseYear = $_releaseYear;
    $this->duration = $_duration;
    $this->genre = $_genre;
  }

  public function getDescription($length = 30){
    return substr($this->description, 0, $length) . "...";
  }

  public function getFeedback(){
    if($this->feedback >= 3.5){
      return "Questo film è congiliatissimo";
    }
    return "Se vuoi vedilo ma poi non dire che le recensioni sono inutili! Noi ti abbiamo avvertito.";
  }

}