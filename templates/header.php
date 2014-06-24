<!DOCTYPE html>

<html>

    <head>

        <link href="../public/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="../public/css/bootstrap-theme.min.css" rel="stylesheet"/>
        <link href="../public/css/styles.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title>GoBook: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>GoBook</title>
        <?php endif ?>

        <script src="../public/js/jquery-1.11.1.min.js"></script>
        <script src="../public/js/bootstrap.min.js"></script>
        <script src="../public/js/scripts.js"></script>

    </head>

    <body>

        <div class="container">

            <div id="top">
                <a href="../public/login.php"><img alt="GoBook" src="../public/img/600_400.jpg"/></a>
            </div>

            <div id="middle">