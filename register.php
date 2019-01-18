<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Projet XML</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
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
        <form id="log" method="post" action="log_info.php">
            <div class="camera"></div>
            <input type="text" name="fname" placeholder="First Name" />
            <input type="password" name="name" placeholder="Name" />
            <input type="password" name="email" placeholder="Email" />
            <input type="submit" onclick="this.form.submit()" />
        </form>
    </div>
</body>

</html>
