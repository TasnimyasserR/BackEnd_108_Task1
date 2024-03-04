<?php

$data=[
[
    "title"=>"product title",
    "description"=>"product description",
    "price"=>"22$",
    "color"=>["red","black"],
],
[
    "title"=>"product title",
    "description"=>"product description",
    "price"=>"22$",
    "color"=>["red","black"],
],
[
    "title"=>"product title",
    "description"=>"product description",
    "price"=>"22$",
    "color"=>["red","black"],
],
[
    "title"=>"product title",
    "description"=>"product description",
    "price"=>"22$",
    "color"=>["red","black"],
],
[
    "title"=>"product title",
    "description"=>"product description",
    "price"=>"22$",
    "color"=>["red","black"],
],
[
    "title"=>"product title",
    "description"=>"product description",
    "price"=>"22$",
    "color"=>["red","black"],
],
[
    "title"=>"product title",
    "description"=>"product description",
    "price"=>"22$",
    "color"=>["red","black"],
],
[
    "title"=>"product title",
    "description"=>"product description",
    "price"=>"22$",
    "color"=>["red","black"],
],
[
    "title"=>"product title",
    "description"=>"product description",
    "price"=>"22$",
    "color"=>["red","black"],
],
[
    "title"=>"product title",
    "description"=>"product description",
    "price"=>"22$",
    "color"=>["red","black"],
],
[
    "title"=>"product title",
    "description"=>"product description",
    "price"=>"22$",
    "color"=>["red","black"],
],
[
    "title"=>"product title",
    "description"=>"product description",
    "price"=>"22$",
    "color"=>["red","black"],
]
];
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Cards</title>
    <style>
        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin: 10px;
            width: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card h2 {
            margin-top: 0;
        }

        .card p {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>

<?php foreach ($data as $product): ?>
    <div class="card">
        <h2><?= $product['title'] ?></h2>
        <p>Description: <?= $product['description'] ?></p>
        <p>Price: <?= $product['price'] ?></p>
        <p>Colors: <?= implode(", ", $product['color']) ?></p>
    </div>
<?php endforeach; ?>

</body>
</html>