<?php
session_start();
require_once 'admin/backend/config.php';
?>

<!doctype html>
<html lang="nl">

<head>
    <title>Attractiepagina</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@400;600;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/main.css">
    <link rel="icon" href="<?php echo $base_url; ?>/favicon.ico" type="image/x-icon" />
</head>

<body>

    <?php require_once 'header.php'; ?>
    <div class="container content">
        <aside>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia modi dolore magnam! Iste libero voluptatum autem, sapiente ullam earum nostrum sed magnam vel laboriosam quibusdam, officia, esse vitae dignissimos nulla?
        </aside>
        <main>

            <div class="attracties">
                <!-- start foreach-->

                <div class="attractie">
                    <img src="img/attracties/adger-kang-oiyzr-SgjBY-unsplash.jpg" alt="reuzenrad">
                    <p class="themeland">Adventureland</p>
                    <h2>Speedy XL</h2>
                    <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique quos praesentium laudantium accusamus illo sequi sit suscipit odio ea eaque distinctio recusandae neque vero quidem voluptate, unde dolore vitae? Repellat.</p>
                    <p class="min-length"><span>120cm</span> minimale lengte</p>
                </div>

            </div>
            <!-- hier komen de attractiekaartjes -->
        </main>
    </div>

</body>

</html>
