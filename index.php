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
            'distance_to_center' => 2,
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1,
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5,
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50,
        ],

    ];

    $park_select = $_GET["park_select"] ?? "";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>

<!-- FORM -->
<form action="index.php" method="GET">
    <select name="park_select" id="">
        <option value="all">tutti i tipi di hotel</option>
        <option value="true">hotel con parcheggio</option>
        <option value="false">hotel senza parcheggio</option>
    </select>
    <button type="submit">BUTTONE</button>
</form>
<!-- / FORM -->

    
<!-- TABELLA -->
<table class="table">

  <thead>

    <tr>
        <?php foreach ($hotels[0] as $title => $description) { ?>
        
        <th scope="col">
            <?php echo $title ?>
        </th>

        <?php } ?>

    </tr>

  </thead>

  <tbody>

        <!-- CON PARCHEGGIO -->
        <?php foreach ($hotels as $index) { 
            if($park_select === 'true'){
                if ($index['parking'] === true) {
            ?>
        <tr>
            <?php foreach($index as $title => $description){ ?>
            <td>
                <?php 
                    if ($title === 'parking') {
                        echo "con parcheggio";
                    } else {
                        echo $description;

                    }
                ?>
            </td>
            <?php } ?>
            
            
        </tr>
        <!-- / CON PARCHEGGIO -->



        <!-- SENZA PARCHEGGIO -->
        <?php }}elseif ($park_select === 'false') {
                if ($index['parking'] === false) {
            ?>

        <tr>

            
            <?php foreach($index as $title => $description){ ?>
                <td>
                <?php 
                    if ($title === 'parking') {
                        echo "senza parcheggio";
                    } else {
                        echo $description;

                    }
                ?>
            </td>
            <?php } ?>

        </tr>
        <?php }} else{?>
        <!-- / SENZA PARCHEGGIO -->

        <!-- ALL TYPE -->
        
        <tr>

            
            <?php foreach($index as $title => $description){ ?>
                <td>
                <?php 
                    
                        echo $description;

                    
                ?>
                </td>
            <?php } ?>

        </tr>
        <?php } } ?>
        <!-- ALL TYPE -->
    
  </tbody>

</table>
<!-- / TABELLA -->

</body>
</html>