<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $books = [
        [
            'name' => 'Do Androids Dream of Electric Sheep',
            'author' => 'Philip K. Dick',
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => 'Project Hail Mary',
            'author' => 'Andy Weir',
            'purchaseUrl' => 'http://example.com'
        ]
    ];
    ?>

    <ul>
        <?php foreach ($books as $book): ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['author'] . " => " . $book['name'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

    <h1>All list</h1>
    <ul>
        <?php foreach ($books as $book): ?>
            <?php foreach ($book as $value): ?>
                <li> <?= $value ?></li>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </ul>
</body>

</html>