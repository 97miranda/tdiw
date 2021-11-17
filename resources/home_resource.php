<!DOCTYPE html>
<html>
<head>
    <title>Titulo web</title>
</head>
<body>
    <header>
        <?php include __DIR__ . "/../views/header_view.php"; ?>
    </header>
    <div class="container">
        <?php require __DIR__ . '/../controllers/category_list_controller.php';?>
    </div>
</body>

</html>