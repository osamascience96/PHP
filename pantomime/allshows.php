<?php require_once 'sql.php'; ?>
<?php
    $db->query("SELECT DISTINCT directors.name as Director, pandomimes.name as Pandomime, event.years as YearOfDirection FROM shows JOIN directors ON shows.directId = directors.id JOIN event ON shows.event_id = event.id JOIN pandomimes ON event.pandomime_id = pandomimes.id ORDER BY event.years");
    $shows_list = $db->resultSet();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Pandomimes - All Shows</title>
  </head>
  <body>
    <!-- navigation -->
    <?php require_once 'navigation.php'; ?>
    <!-- display the list of town where the pandomime operates -->
    <p class="fs-1 text-dark text-center">All Shows</p>
    <div class="row">
        <div class="col-sm-12 col-md-8 mx-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Director</th>
                        <th scope="col">Pandomime</th>
                        <th scope="col">Year of Direction</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($shows_list as $show){?>
                        <tr>
                            <td><?=$show->Director?></td>
                            <td><?=$show->Pandomime?></td>
                            <td><?=$show->YearOfDirection?></td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>