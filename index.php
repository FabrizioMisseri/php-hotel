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
$parking = $_GET["parking"] ?? "none";
$vote = $_GET["vote"] ?? "0";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="margin-left: 1rem;">
    <section style="margin-top: 1rem; margin-bottom: 2rem;">
        <form action="index.php" method="GET">

            <select name="parking" id="">
                <option value="none">parcheggio indifferente</option>
                <option value="1">con parcheggio</option>
                <option value="0">senza parcheggio</option>
            </select>

            <select name="vote" id="">
                <option value="0">nessun voto</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>

            <button type="submit">submittalo</button>
        </form>
    </section>

    <section>
        <table style="border-spacing: 0px;">

            <tr>
                <?php foreach ($hotels[0] as $key => $value) { ?>
                    <th style='border: 1px solid black;'>
                        <?php echo "<strong> $key </strong>" ?>
                    </th>
                <?php } ?>
            </tr>

            <?php

            foreach ($hotels as $hotel) {
                if ($parking == 'none' && intval($vote) <= $hotel['vote']) {
            ?>
                    <tr>
                        <?php foreach ($hotel as $key => $value) { ?>
                            <td style='border: 1px solid black;'>
                                <?php echo "$value" ?>
                            </td>
                        <?php } ?>
                    </tr>
                <?php } elseif ($hotel['parking'] == $parking && intval($vote) <= $hotel['vote']) {
                ?>
                    <tr>
                        <?php foreach ($hotel as $key => $value) { ?>
                            <td style='border: 1px solid black;'>
                                <?php echo "$value" ?>
                            </td>
                        <?php } ?>
                    </tr>
            <?php }
            } ?>


        </table>
    </section>



</body>

</html>