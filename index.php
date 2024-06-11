
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



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css
">
    <title>Document</title>
</head>
<body class="container d-flex justify-content-center align-items-center">

   <table class="">
    <th>Name</th>
    <th>description</th>
    <th>Parking</th>
    <th>Vote</th>
    <th>Distance_to_center</th>
    <?php 
        foreach($hotels as $h){
           echo "
            <tr class='border'>
                <td>$h[name]</td>
                <td>$h[description]</td>
                <td>$h[parking]</td>
                <td>$h[vote]</td>
                <td>$h[distance_to_center]</td>
            </tr>
           ";}
    ?>
   </table>
</body>
</html>
