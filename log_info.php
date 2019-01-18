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

    <?php
	include('request.php');
	$URL = "http://localhost:8080/AleauCine/rest/director/add/".$_POST['fname']."/".$_POST['name'];
	putRequest($URL);
    ?>

    <!-- NavBar -->
    <header>
        <?php include('asset/int/header.php'); ?>
    </header>
    <!-- NavBar -->


    <!-- Body -->
	<div class=container>
    <h1>You are registered now ! Thank you.</h1>
	</div>

    <script src="js/navbar.js"></script>
</body>

</html>
