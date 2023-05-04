<?php
class Movie {

public $title;
public $genre;
public $releaseYear;
public $director;
public $duration;


public function __construct($_title,$_genre,$_releaseYear,$_director,$_duration){
    $this->title = $_title;
    $this->genre = $_genre;
    $this->releaseYear = $_releaseYear;
    $this->director = $_director;
    $this->duration = $_duration;
}


public function getAllData(){
    return $this->title . '<br/>' . $this->genre . '<br/>' . $this->releaseYear . '<br/>' . $this->director . '<br/>' . $this->duration . '<br/>';
}
}