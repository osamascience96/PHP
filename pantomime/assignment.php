<?php require_once 'sql.php'; ?>
<?php
    $db->query("SELECT pandomimes.name as Pandomime, COUNT(event.id) as numberOfEvents FROM event LEFT JOIN pandomimes ON pandomimes.id = event.pandomime_id GROUP BY event.pandomime_id ORDER BY pandomimes.name ASC");
    $pandomime_list = $db->resultSet();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Pandomimes</title>
  </head>
  <body>
    <!-- navigation -->
    <?php require_once 'navigation.php'; ?>
    <!-- display the list of town where the pandomime operates -->
    <p class="fs-1 text-dark text-center">Shows Conducted</p>
    <div class="row">
        <div class="col-sm-12 col-md-8 mx-auto">
            <ol class="list-group list-group-numbered">
                <?php foreach($pandomime_list as $pandomime){?>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold"><?=$pandomime->Pandomime?></div>
                        </div>
                        <span class="badge bg-primary rounded-pill"><?=$pandomime->numberOfEvents?></span>
                    </li>
                <?php }?>
            </ol>
        </div>
    </div>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>