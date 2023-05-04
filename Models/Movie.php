<?php
class Movie {

public $title;
public $genres;
public $releaseYear;
public $director;
public $duration;


public function __construct($_title,$_genres,$_releaseYear,$_director,$_duration){
    $this->title = $_title;
    $this->genres = $_genres;
    $this->releaseYear = $_releaseYear;
    $this->director = $_director;
    $this->duration = $_duration;


}


public function getAllData(){

    return $this->title . '<br/>' . $this->releaseYear . '<br/>' . $this->director . '<br/>' . $this->duration . '<br/>';
}

public function getGenres(){

    $generi='';


    foreach( $this->genres as $genre) {

        $generi .= $genre->name . "<br/>";
    }

    return $generi;
}



}