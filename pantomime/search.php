<?php require_once 'sql.php'; ?>
<?php
    if(isset($_POST['search_star'])){
        $star_name = $_POST['search_star'];
        $star_name = filter_var(trim($star_name), FILTER_SANITIZE_STRING);

        $db->query("SELECT stars.id, stars.name as starname, agents.name as agentname, towns.town as townname FROM `stars` JOIN agents ON agents.id = stars.agentid JOIN towns ON towns.id = agents.town_id WHERE stars.name LIKE '%" . $star_name . "%'");
        
        $star_list = $db->resultSet();
    }else{
        header('Location:' . '/pantomime/assignment.php');
    }
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
    <p class="fs-1 text-dark text-center">Star Information</p>
    <div class="row">
        <div class="col-sm-12 col-md-8 mx-auto">
            <?php if(!empty($star_list)){?>
                <?php foreach($star_list as $star){?>
                    <div class="card text-center">
                        <div class="card-header">
                            Id: <?=$star->id?>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Star Name: <?=$star->starname?></h5>
                            <p class="card-text">Agent Name: <?=$star->agentname?></p>
                        </div>
                        <div class="card-footer text-muted">
                            City: <?=$star->townname?>
                        </div>
                        </div>
                    </div>
                <?php }?>
            <?php }else{?>
                <h1 class="fs-1 text-danger text-center">
                    No Record Found
                </h1>
            <?php }?>
        </div>
    </div>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>