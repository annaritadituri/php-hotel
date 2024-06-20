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

    $filter = $hotels;

    if(isset($_GET['parking-button'])) {
        
        $parking = $_GET['parking-button'];
        $filter = [];
        foreach ($hotels as $hotel) {

            if($hotel['parking'] == $parking) {
                $filter[] = $hotel;
            };

        };

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>

    <!--style-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <h1 class="text-center mt-3">Hotels</h1>

    <div class="container search w-50 my-5">

        <form action="index.php" method="GET" class="m-0 d-flex flex-row align-items-center">

            <span class="me-4">Parking</span>

            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">

                <input type="radio" class="btn-check" name="parking-button" value="1" id="btnradio1">
                <label class="btn btn-outline-primary" for="btnradio1">YES</label>

                <input type="radio" class="btn-check" name="parking-button" value="0" id="btnradio2">
                <label class="btn btn-outline-primary" for="btnradio2">NO</label>

            </div>

            <div class="vr mx-3"></div>

            <div class="input-group">
                <input type="text" name="ratings" class="form-control" placeholder="Search for ratings" aria-describedby="btnGroupAddon">
                <button class="input-group-text" id="btnGroupAddon">Search</button>
            </div>

        </form>

    </div>

    
    <div class="container table">

        <table class="table table-striped">

            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Parcheggio</th>
                    <th scope="col">Voto</th>
                    <th scope="col">Distanza</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($filter as $hotel) : ?>

                    <tr>
                        <td> <?php echo $hotel['name']; ?> </td>
                        <td> <?php echo $hotel['description']; ?> </td>
                        <td> <?php echo $hotel['parking'] ? 'YES' : 'NO'; ?> </td>
                        <td> <?php echo $hotel['vote']; ?> </td>
                        <td> <?php echo $hotel['distance_to_center'] . ' km'; ?> </td>
                    </tr>

                    <?php endforeach;
            
                ?>

            </tbody>

        </table>

    </div>
    
</body>
</html>