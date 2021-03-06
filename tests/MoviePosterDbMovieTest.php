<?php

use Imdb\Config;
use MoviePosterDb\Movie;

class MoviePosterDbMovieTest extends PHPUnit_Framework_TestCase {
  public function testPosters() {
    $movie = new Movie('0133093');
    $posters = $movie->posters();

    $this->assertInternalType('array', $posters);
    $this->assertGreaterThan(2, count($posters));

    $firstPoster = $posters[0];

    $this->assertInternalType('array', $firstPoster);
    $this->assertNotEmpty($firstPoster['title']);
    $this->assertNotEmpty($firstPoster['url']);
    $this->assertNotEmpty($firstPoster['lang']);
  }
}