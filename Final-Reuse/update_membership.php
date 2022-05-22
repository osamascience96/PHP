<?php 
    include('session.php');

    if($_GET['method'] == 'deactivate'){
        $query = $pdo->prepare('UPDATE members SET is_active = 0 WHERE member_id = :id');

        $query->bindParam('id', $_GET['member_id']);
        $query->execute();
    }

    if($_GET['method'] == 'activate'){
        $query = $pdo->prepare('UPDATE members SET is_active = 1 WHERE member_id = :id');

        $query->bindParam('id', $_GET['member_id']);
        $query->execute();
    }
    
    header("location:members.php");
?>