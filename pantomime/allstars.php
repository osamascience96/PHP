<?php require_once 'sql.php'; ?>
<?php
    $db->query("SELECT stars.id, stars.name as Star, agents.name as StarAgent, towns.town as AgentTown FROM stars JOIN agents ON agents.id = stars.agentid JOIN towns ON towns.id = agents.town_id");
    $stars_list = $db->resultSet();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Pandomimes - All Stars</title>
  </head>
  <body>
    <!-- navigation -->
    <?php require_once 'navigation.php'; ?>
    <!-- display the list of town where the pandomime operates -->
    <p class="fs-1 text-dark text-center">All Stars and their Agents</p>
    <div class="row">
        <div class="col-sm-12 col-md-8 mx-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Agent of Star</th>
                        <th scope="col">Town of Agent</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($stars_list as $star){?>
                        <tr>
                            <th scope="row"><?=$star->id?></th>
                            <td><?=$star->Star?></td>
                            <td><?=$star->StarAgent?></td>
                            <td><?=$star->AgentTown?></td>
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