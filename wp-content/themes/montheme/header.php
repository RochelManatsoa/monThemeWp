<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body>
    <div class="container-fluid">
        <?php wp_nav_menu([
            'theme_location' => 'header'
        ]) ?>
    </div>
    <div class="container">