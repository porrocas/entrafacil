<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('./views/meta.php') ?>

    <title>EntraFácil | Crea y vende boletas para tus eventos</title>

    <!--LINK-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,500,600,700,900&display=swap"
        rel="stylesheet">

    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/pre-eventos.css">
    <link rel="stylesheet" href="css/pre-image-event.css">
    <link rel="stylesheet" href="css/footer.css">

    <!--JS-->
    <script async defer src="./js/interactiveEvents.js"></script>
</head>

<body>
    <?php include('./views/header.php')?>
    <?php include('./views/present.php')?>
    <?php include('./views/pages/eventos.php')?>
    <?php include('./views/functions/visualizarImgEvent.php')?>
    <?php include('./views/footer.php');?>

    <!--JS-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="./js/navFixed.js"></script>
</body>

</html>