<?php
require __DIR__ . '/vendor/autoload.php';

$faker = Faker\Factory::create('fr_FR');

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Composer</title>
    <style>
        .colAl {
            color: <?= $faker->hexColor() ?>
        }

        img {
            max-width: 100%;
        }

        .card {
            display: flex;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .card article {
            width: 200px;
            border: solid 1px grey;
            border-radius: 10px;
            padding: 0.8rem
        }
    </style>
</head>

<body>
    <section class="card">
        <?php for ($i = 0; $i < 20; $i++) : ?>
            <article>
                <h1 class="colAl"><?= ucfirst($faker->words(5, true)) ?></h1>

                <p><img src="<?= $faker->imageUrl(320, 240, 'Fake Image LOL', false) ?>" alt=""></p>

                <p><?= $faker->paragraph() ?></p>

                <p>Article écrit par : <strong><?= $faker->name() ?> , <?= $faker->email() ?></strong> le <?= $faker->date('d/m/Y') ?>.</p>
            </article>
        <?php endfor; ?>
    </section>
</body>

</html>