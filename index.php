<?php

$hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere, sit amet consectetur adipisicing elit. Debitis fuga illum iste vero eum quis natus hic ad, ex nulla temporibus ipsam dolores tempore laborum. Eius similique necessitatibus quod illum.',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro, sit amet consectetur adipisicing elit. Debitis fuga illum iste vero eum quis natus hic ad, ex nulla temporibus ipsam dolores tempore laborum. Eius similique necessitatibus quod illum.',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare, sit amet consectetur adipisicing elit. Debitis fuga illum iste vero eum quis natus hic ad, ex nulla temporibus ipsam dolores tempore laborum. Eius similique necessitatibus quod illum.',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista, sit amet consectetur adipisicing elit. Debitis fuga illum iste vero eum quis natus hic ad, ex nulla temporibus ipsam dolores tempore laborum. Eius similique necessitatibus quod illum.',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano, sit amet consectetur adipisicing elit. Debitis fuga illum iste vero eum quis natus hic ad, ex nulla temporibus ipsam dolores tempore laborum. Eius similique necessitatibus quod illum.',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PHP Hotel</title>
</head>

<body>
    <div class="container">
        <div class="row row-cols-4 gap-3">
            <?php foreach ($hotels as $item) { ?>
            <div class="card text-center col px-0">
                <div class="card-header">
                    <h5>
                        <?php echo $item['name'] ?>
                    </h5>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        <?php echo $item['description'] ?>
                    </p>
                    <span>
                        <?php if (!empty($item['vote'])) {
                    echo str_repeat('<i class="fa-solid fa-star"></i>', $item['vote']);
                } ?>
                    </span>
                </div>
                <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                    <span>
                        <?php if ($item['parking']) {
                    echo '<i class="fa-solid fa-square-parking"></i>';
                } ?>
                    </span>
                    <span>
                        <?php if ($item['distance_to_center']) {
                    echo '<i class="fa-regular fa-compass"></i>' . ' ' . $item['distance_to_center'] . ' km dal centro';
                } ?>
                    </span>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>