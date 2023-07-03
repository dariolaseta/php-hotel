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
?>

<?php 
    /*for ($i=0; $i < count($hotels); $i++) { 
        echo "<p>" . $hotels[$i]['name'] . "</p>";
        echo "<p>" . $hotels[$i]['description'] . "</p>";
        echo "<p>" . $hotels[$i]['parking'] . "</p>";
        echo "<p>" . $hotels[$i]['vote'] . "</p>";
        echo "<p>" . $hotels[$i]['distance_to_center'] . "</p>";
    }*/
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Hotels</title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Hotel</th>
                    <th>Description</th>
                    <th>Parking</th>
                    <th>Vote</th>
                    <th>Distance to Center</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                foreach ($hotels as $key => $hotel){
                ?>
                    <tr>
                        <th><?php echo $key ?></th>

                        <?php
                        foreach ($hotel as $key => $info){
                        ?>
                            <td><?php echo $info ?></td>
                        <?php
                        }
                        ?>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </body>
</html>