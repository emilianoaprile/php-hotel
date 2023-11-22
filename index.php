<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

foreach ($hotels as $key => $hotel) {
    // var_dump($hotel['name']);
    // var_dump($hotel['description']);
    // var_dump($hotel['parking']);
    // var_dump($hotel['vote']);
    // var_dump($hotel['distance_to_center']);
    var_dump($hotel);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
</head>

<body>

    <div>
        <?php
        foreach ($hotels as $key => $hotel) {
            ?>
            <h1>
                <?php echo $hotel['name']; ?>
            </h1>

            <p>descrizione:
                <?php echo $hotel['description']; ?>
            </p>

            <p>parcheggio:
                <?php echo $hotel['parking']; ?>
            </p>

            <p>voto:
                <?php echo $hotel['vote']; ?>
            </p>

            <p>distanza dal centro:
                <?php echo $hotel['distance_to_center']; ?>
            </p>
            <?php
        }
        ?>
    </div>



</body>



</html>