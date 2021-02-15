<?php

/** Videogame class
 * @author Carl Game carl@game.com
 * @copyright 2021 Carl Game
 */

 class Videogame {
     public $title;
     public $release;
     public $platform;
     public $genre;
     public $originCountry;
     public $mode;

     public function __construct(string $title, int $release, string $platform, string $genre, string $originCountry, string $mode)
     {
         $this->title = $title;
         $this->release = $release;
         $this->platform = $platform;
         $this->genre = $genre;
         $this->originCountry = $originCountry;
         $this->mode = $mode;
     }
 }

 $tombi = new Videogame ('Tombi', 1997, 'PS1','platform-adventure','Japan','single-player');
 $mario = new Videogame ('Super Mario Bros.', 1985, 'NES','platform','Japan','multi-player');
 $crash = new Videogame ('Crash Bandicoot', 1996, 'PS1','platform','North America','single-player');

 //var_dump($tombi);
$videogames = [
    $tombi, $mario, $crash
]
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Php oop 1</title>
    </head>
    <body>
        <?php foreach ($videogames as $videogame) { ?>
           <h2><?php echo $videogame->title; ?></h2>
           <div><span><?php echo $videogame->release; ?></span></div>
           <div><span><?php echo $videogame->platform; ?></span></div>
           <div><span><?php echo $videogame->genre; ?></span></div>
           <div><span><?php echo $videogame->originCountry; ?></span></div>
           <div><span><?php echo $videogame->mode; ?></span></div>
        <?php } ?>
    </body>
</html>