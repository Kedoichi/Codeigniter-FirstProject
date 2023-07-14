<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $title ?>
    </title>
    <base href="<?= base_url() ?>">
    <link rel="stylesheet" href="public/assests/Admin/css/style.css">
    <script src="https://kit.fontawesome.com/337ff70aea.js" crossorigin="anonymous"></script>
    <?php foreach ($cssfiles as $css): ?>
        <link rel="stylesheet" href="<?= $css ?>">
    <?php endforeach; ?>
    <?php foreach ($jsfiles as $js): ?>
        <script src="<?= $js ?>"></script>
    <?php endforeach; ?>

</head>

<body>
    <header>
        <?= $header ?>
    </header>

    <div class="mainContainer">
        <nav>

            <?= $leftMenu ?>
        </nav>

        <div class="containerContent">

            <?= $content ?>
        </div>

    </div>
</body>