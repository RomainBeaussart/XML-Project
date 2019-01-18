<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Projet XML</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="asset/css/commun.css">
    <link rel="stylesheet" href="asset/css/login.css">


</head>

<body>
    <!-- NavBar -->
    <header>
        <?php include('asset/int/header.php'); ?>
    </header>
    <!-- NavBar -->


    <!-- Body -->
    <div class="container">
        <form method="post" action="">
            <div class="camera"></div>
            <input type="text" name="login" placeholder="Login" />
            <input type="password" name="pwd" placeholder="Password" />
            <input type="submit" />
        </form>
    </div>

    <script src="js/navbar.js"></script>
</body>

</html>
