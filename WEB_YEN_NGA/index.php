<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="icon" href="./images/logo.png" />
    <title>Final Demo Group 7</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="wrapper">
        <?php
        //tui dùng include để làm mấy này không à
            include("config/config.php");
            include("pages/header.php");
            include("pages/main.php");
            include("pages/footer.php");
        ?>
    </div>
</body>

</html>