<?php
function renderView($view, $data = []) {
    extract($data);
    include "views/$view.php";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Composite View PHP</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <?php include 'components/header.php'; ?>

    <main>
        <?php
        $view = isset($_GET['view']) ? $_GET['view'] : 'home';
        renderView($view);
        ?>
    </main>

    <?php include 'components/footer.php'; ?>
    <script src="assets/script.js"></script>
</body>
</html>
