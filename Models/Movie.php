<?php
class Movie
{
    public $title;
    public $director;
    public $year;
    public $genre;

    public function __construct($titolo, $regista, $anno, $genere)
    {
        $this->title = $titolo;
        $this->director = $regista;
        $this->year = $anno;
        $this->genre = $genere;
    }

    public function getMovieInfo()
    {
        $result = $this->title . ", " . $this->director . ", " . $this->year . ", " . $this->genre . ".";
        return $result;
    }
}
