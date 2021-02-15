<?php

/** User class
 * @author Carl User carl@user.com
 * @copyright 2021 Carl User
 */

 class User {
     public $name;
     public $surname;
     public $age;
     public $height;
     public $city;

     public function __construct(string $name, string $surname, int $age, float $height, string $city)
     {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->height = $height;
        $this->city = $city;
     }
 }

 $gerry = new User ('Gerry', 'Calà', 70, 1.75, 'Milano');
 $gennaro = new User ('Gennaro', 'Esposito', 44, 1.85, 'Napoli');
 $claudio = new User ('Claudio', 'Coppola', 58, 1.70, 'Pisa');

 $users = [
     $gerry, $gennaro, $claudio
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
        <?php foreach ($users as $user) { ?>
            <h2><?php echo $user->name; ?></h2>
            <h3><?php echo $user->surname; ?></h3>
            <div><span><?php echo $user->age; ?></span></div>
            <div><span><?php echo $user->height; ?></span></div>
            <div><span><?php echo $user->city; ?></span></div>
        <?php } ?>
    </body>
</html>