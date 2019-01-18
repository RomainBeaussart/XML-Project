<html class="dashboard">

<head>
    <meta charset="UTF-8">
    <title>Admin Panel - Filmoscope</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <?php
    include ('../request.php');
    $movies = getRequest('http://localhost:8080/AleauCine/rest/moovie/getall/');
    $actors = getRequest('http://localhost:8080/AleauCine/rest/actor/getall/');
    ?>
    <header role="banner">
        <h1>Dashboard</h1>
    </header>

    <nav role='navigation'>
        <ul class="main">
            <li><a href="#General">General</a></li>
            <li><a href="#AddMovie">Add movie</a></li>
            <li><a href="#DeleteMovie">Delete Movie</a></li>
            <li><a href="#AddActor">Add Actor</a></li>
            <li><a href="/"><b>Left</b></a></li>
        </ul>
    </nav>

    <main role="main">
        <section class="panel important" id="General">
            <h2>General</h2>
            <div class="demithird">
                <h3>Movies</h3>
                <table>
                    <tr>
                        <td><b>ID</b></td>
                        <td><b>Title</b></td>
                        <td><b>Score</b></td>
                        <td></td>
                    </tr>
                    <?php
                        foreach($movies as $movie){
                        $m = array(
                            'id' => $movie->id,
                            'title' => $movie->name,
                            'time' => $movie->duration,
                        ); ?>
                    <tr>
                        <td>
                            #
                            <?php echo $m['id']; ?>
                        </td>
                        <td>
                            <?php echo $m['title']; ?>
                        </td>
                        <td>
                            <?php echo $m['time']; ?>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
            <div class="demithird">
                <h3>Actors</h3>
                <table>
                    <tr>
                        <td><b>ID</b></td>
                        <td><b>Name</b></td>
                        <td><b>Score</b></td>
                        <td></td>
                    </tr>
                    <?php
                        foreach($actors as $actor){
                        $a = array(
                            'id' => $actor->id,
                            'fname' => $actor->firstname,
                            'lname' => $actor->lastname
                        ); ?>
                    <tr>
                        <td>
                            #
                            <?php echo $a['id']; ?>
                        </td>
                        <td>
                            <?php echo $a['fname']; ?>
                        </td>
                        <td>
                            <?php echo $a['lname']; ?>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </section>

        <!-- Add Movie --->

        <section class="panel" id="AddMovie">
            <h2>Add Movie</h2>
            <div class="twothirds">
                Ajouter un film <br />
                <form method="post" action="addMovie.php">
                    <input name="name" placeholder="Movie Name" type="text" required />
                    <input name="url" placeholder="URL Image" type="text" />
                    <input name="time" placeholder="Time" type="text" required />
                    <input name="date" placeholder="Realease Date" type="text" required />
                    <select name="actor">
                        <option disabled selected>Selectionnez un acteur</option>
                        <option disabled>____________</option>
                        <?php
                        $actors = getRequest('http://localhost:8080/AleauCine/rest/actor/getall/');
                        foreach($actors as $actor){
                        $a = array(
                            'id' => $actor->id,
                            'fname' => $actor->firstname,
                            'lname' => $actor->lastname
                        ); ?>
                        <option value="<?php echo $a['id']; ?>">
                            <?php echo $a['fname']." ".$a['lname']; ?>
                        </option>
                        <?php } ?>
                    </select>
                    <input type="submit" value="Envoyer" />
                </form>
            </div>
        </section>

        <!-- Delete Movie --->

        <section class="panel" id="DeleteMovie">
            <h2>Delete Movie</h2>
            <div class="twothirds">
                Supprimer un film <br />
                <form method="post" action="">
                    <select>
                        <option disabled selected>Selectionnez un film</option>
                        <option disabled>____________</option>
                        <?php
                        foreach($movies as $movie){
                        $m = array(
                            'id' => $movie->id,
                            'title' => $movie->name,
                            'desc' => $movie->description,
                            'score' => $movie->score,
                            'img' => $movie->url_image
                        ); ?>
                        <option value="<?php echo $m['id']; ?>">
                            <?php echo $m['title']; ?>
                        </option>
                        <?php } ?>
                    </select>
                    <input type="submit" value="Envoyer" />
                </form>
            </div>
        </section>

        <!-- Delete Movie --->

        <section class="panel" id="AddActor">
            <h2>Add Actor</h2>
            <div class="twothirds">
                Add Actor<br />
                <form method="post" action="">
                    <input type="text" name="Fname" placeholder="Name" />
                    <input type="text" name="Lname" placeholder="Name" />
                    <input type="submit" value="Envoyer" />
                </form>
            </div>
        </section>

        <!-- Set Admin

        <section class="panel" id="SetAdmin">
            <div class="demithird">
                <h2>Set Admin</h2>
                Ajouter un administrateur<br />
                <form method="post" action="setadmin.php">
                    <input type="email" placeholder="Email" name="mail" required />
                    <input type="submit" value="Envoyer" />
                </form>
            </div>
            <div class="demithird">
                <h2>Delete Admin</h2>
                Supprimer un administrateur<br />
                <form method="post" action="deleteadmin.php">
                    <input type="email" placeholder="Email" name="mail" required />
                    <input type="submit" value="Envoyer" />
                </form>
            </div>
        </section>


        <!-- To Do List -->

        <section class="panel" id="ToDo">
            <h2>To Do</h2>
            <div class="feedback success">Ajouter un film</div>
            <div class="feedback success">Ajouter un acteur</div>
            <div class="feedback success">S'inscrire</div>
            <div class="feedback success">Supprimer Film</div>
            <div class="feedback success">Lister films</div>
            <div class="feedback success">Rechercher Film</div>
        </section>
        <!--div class="feedback error">This is warning feedback
<ul>
  <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
  <li>Aliquam tincidunt mauris eu risus.</li>
  <li>Vestibulum auctor dapibus neque.</li>
</ul>  </div>
    <div class="feedback success">This is positive feedback</div>

        </section -->
    </main>
</body>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'>
</script>

</html>
