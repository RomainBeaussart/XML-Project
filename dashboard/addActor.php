<?php
include ('../request.php');

putRequest('http://localhost:8080/AleauCine/rest/actor/add/'.$_POST['Fname'].'/'.$_POST['Lname'].'/');

header('Location : panel.php');
