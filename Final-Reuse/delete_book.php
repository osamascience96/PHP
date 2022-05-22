<?php 
    include('session.php');

    $query = $pdo->prepare('DELETE FROM books WHERE book_id = :id');

    
    $query->bindParam('id', $_GET['book_id']);
    $query->execute();
    header("location:books.php");
?> 