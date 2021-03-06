<?php 

class Movie {
    // attributi
    public $title;
    public $genre;
    public $plot;
    public $poster;
    public $year;
    public $actors;
    public $language;
    public $rating;

    // costruttore
    function __construct($title, $genre, $plot, $poster, $year, $actors, $language, $rating) {
        $this->title = $title;
        $this->genre = $genre;
        $this->plot = $plot;
        $this->poster = $poster;
        $this->year = $year;
        $this->actors = $actors;
        $this->language = $language;
        $this->rating = $rating;
    }
    // metodi
    public function getExtract() {
        return substr($this->plot, 0, 90) . "...";
    }

    public function getActors() {
        return implode(", ", $this->actors);
    }

    public function getStars() {
        $i = 0;
        while($i < $this->rating) {
            echo '<i class="fas fa-star"></i>';
            $i++;
        }
        $j = 0;
        while($j < (5 - $this->rating)) {
            echo '<i class="far fa-star"></i>';
            $j++;
        }
    }
}

