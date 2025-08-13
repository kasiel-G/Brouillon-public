<?php
require 'config/app.php';
require 'router/router.php';
require 'router/links.php';
$links = linkRouter();
$page = router();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_NAME ;?></title>
    <link rel="stylesheet" href="./public/assets/style/style.css">
    <link rel="stylesheet" href="./public/assets/style/aos.css">
    <link rel="stylesheet" href="../../../public/assets/style/style.css">
</head>
<body>
    <?php
        require 'app/views/INC/header.php';
    ?>
    <?php
        require $page;   
    ?>

    <?php
        require 'app/views/INC/footer.php';
    ?>
    <script src="<?= $links ;?>/assets/JS/index.js"></script>
    <script src="./public/assets/JS/aos.js"></script>
    <!-- <script src="../../../public/assets/JS/index.js"></script> -->

    <script>
        AOS.init();
    </script>
</body>
</html>