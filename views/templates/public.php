<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Public</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }
    </style>
</head>
<body>
<?php include __DIR__ . '/../parts/public/header.php' ?>
<?php include __DIR__ . '/../parts/public/' . $partName .'.php' ?>
<?php include __DIR__ . '/../parts/public/footer.php' ?>
</body>
</html>