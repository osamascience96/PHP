<!--
    Header element
-->

<?php
    if(!defined('DirectAccess')) {
        header("location:index.php");
    }
?>

<head>
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <script src="assets/js/jquery.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light header justify-content-between">   
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="index.php">
                <img src="assets/images/logo.png" height="40" alt="">
            </a>
        </nav>
        <div class="navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <?php if (isset($_SESSION['admin'])) { ?><a class="nav-link" href="index.php">Home</a><?php } ?>
                    <?php if (isset($_SESSION['member'])) { ?><a class="nav-link" href="member_home.php">Home</a><?php } ?>
                </li>
                <?php if (isset($_SESSION['admin'])) { ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="books.php">Manage Books</a>
                            <a class="dropdown-item" href="borrows.php">Manage Loans</a>
                            <a class="dropdown-item" href="members.php">Manage Members</a>
                        </div>
                    </li>
                <?php } ?>
                <li class="navbar-text">
                    Welcome, <?php echo $_SESSION['loginUser']; ?>
                </li>
            </ul>
        </div>
        <a type="button" class="btn btn-dark" href="logout.php">Log out</a>
    </nav>
</body>