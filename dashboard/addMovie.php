<?php
include ('../request.php');

putRequest('http://localhost:8080/AleauCine/rest/moovie/add/'.$_POST['name'].'/'.$_POST['date'].'/'.$_POST['time'].'/0/'.$_POST['actor'].'/'.$_POST['url']);

header('Location : panel.php');
