<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5dc396147b.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>PHP Hotel</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    </style>
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
</head>

<body>
    <header>
        <h1>
            <?php
            echo "<h1 class='text-center'> Cerca l'hotel migliore </h1>";
            ?>
        </h1>
    </header>
    <main>
        <section class="container">
            <div class="row justify-content-space-around">
                <?php
                foreach ($hotels as $hotel) {
                    $name = $hotel["name"];
                    $descr = $hotel["description"];
                    $vote = $hotel["vote"];
                    $distance = $hotel["distance_to_center"];
                    $parking = $hotel["parking"] ? '<i class="fa-solid fa-car"></i>' : '<i class="fa-solid fa-ban"></i>';

                    echo "<div class='card col-2 m-3'>"
                        . "<h4>" . $name . "</h4>" . "<p>" . $descr . "</p>"
                        . "<div> Parcheggio: " . $parking . "</div>"
                        . "<div> Distanza dal centro: " . $distance . "km</div>"
                        . "</div>";
                }
                ?>
            </div>
        </section>
    </main>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>