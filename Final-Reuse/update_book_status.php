<?php 
    include('session.php');

    $date = date("d.m.Y G:i");
    $updateBookStatus = $pdo->prepare('UPDATE books SET is_issued = 0 WHERE book_id = :book_id');
    $updateBookStatus->execute(array('book_id' => $_GET["book_id"]));

    $updateReturnDate = $pdo->prepare('UPDATE loaned_books SET date_of_return = :tarih WHERE book_id = :book_id');
    $updateReturnDate->execute(array('tarih' => $date, 'book_id' => $_GET["book_id"]));

    header("location:borrows.php");
?>