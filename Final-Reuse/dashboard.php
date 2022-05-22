<?php
    if(!defined('DirectAccess')) {
        header("location:index.php");
    }

    require('counts.php');

    $counts = get_counts();
?>

<head>
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <script src="assets/js/jquery.js"></script>   
    <script src="assets/js/bootstrap.js"></script>
</head>

<body>
    <div class="container" >
        <div class="card-deck">
            <div class="card border-dark">
                <div class="card-body text-center">
                    <img class="card-img-top" src="assets/images/archive.png">
                    <h5 class="card-title">
                        Book count: </br></br><b><?php echo $counts['books']['count']; ?></b>
                    </h5>
                    </br>
                    <a href="books.php" class="btn btn-dark">View</a>
                </div>
            </div>
            <div class="card border-dark">
                <div class="card-body text-center">
                    <img class="card-img-top" src="assets/images/check.png">
                    <h5 class="card-title">
                        Borrow count: </br></br> <b><?php echo $counts['loans']['count']; ?></b>
                    </h5>
                    </br>
                    <a href="borrows.php" class="btn btn-dark">View</a>
                </div>
            </div>
            <div class="card border-dark">
                <div class="card-body text-center">
                    <img class="card-img-top" src="assets/images/person.png">
                    <h5 class="card-title">
                        Member count: </br></br> <b><?php echo $counts['members']['count']; ?></b>
                    </h5>
                    </br>
                    <a href="members.php" class="btn btn-dark">View</a>
                </div>
            </div>
        </div>
    </div>
</body>